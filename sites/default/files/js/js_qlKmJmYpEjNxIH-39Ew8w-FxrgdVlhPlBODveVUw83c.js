/**
 * JavaScript API for the History module, with client-side caching.
 *
 * May only be loaded for authenticated users, with the History module enabled.
 */
(function ($, Drupal, drupalSettings, storage) {

  "use strict";

  var currentUserID = parseInt(drupalSettings.user.uid, 10);

  // Any comment that is older than 30 days is automatically considered read,
  // so for these we don't need to perform a request at all!
  var thirtyDaysAgo = Math.round(new Date().getTime() / 1000) - 30 * 24 * 60 * 60;

  // Use the data embedded in the page, if available.
  var embeddedLastReadTimestamps = false;
  if (drupalSettings.history && drupalSettings.history.lastReadTimestamps) {
    embeddedLastReadTimestamps = drupalSettings.history.lastReadTimestamps;
  }

  Drupal.history = {

    /**
     * Fetch "last read" timestamps for the given nodes.
     *
     * @param Array nodeIDs
     *   An array of node IDs.
     * @param Function callback
     *   A callback that is called after the requested timestamps were fetched.
     */
    fetchTimestamps: function (nodeIDs, callback) {
      // Use the data embedded in the page, if available.
      if (embeddedLastReadTimestamps) {
        callback();
        return;
      }

      $.ajax({
        url: Drupal.url('history/get_node_read_timestamps'),
        type: 'POST',
        data: {'node_ids[]': nodeIDs},
        dataType: 'json',
        success: function (results) {
          for (var nodeID in results) {
            if (results.hasOwnProperty(nodeID)) {
              storage.setItem('Drupal.history.' + currentUserID + '.' + nodeID, results[nodeID]);
            }
          }
          callback();
        }
      });
    },

    /**
     * Get the last read timestamp for the given node.
     *
     * @param Number|String nodeID
     *   A node ID.
     *
     * @return Number
     *   A UNIX timestamp.
     */
    getLastRead: function (nodeID) {
      // Use the data embedded in the page, if available.
      if (embeddedLastReadTimestamps && embeddedLastReadTimestamps[nodeID]) {
        return parseInt(embeddedLastReadTimestamps[nodeID], 10);
      }
      return parseInt(storage.getItem('Drupal.history.' + currentUserID + '.' + nodeID) || 0, 10);
    },

    /**
     * Marks a node as read, store the last read timestamp in client-side storage.
     *
     * @param Number|String nodeID
     *   A node ID.
     */
    markAsRead: function (nodeID) {
      $.ajax({
        url: Drupal.url('history/' + nodeID + '/read'),
        type: 'POST',
        dataType: 'json',
        success: function (timestamp) {
          // If the data is embedded in the page, don't store on the client side.
          if (embeddedLastReadTimestamps && embeddedLastReadTimestamps[nodeID]) {
            return;
          }

          storage.setItem('Drupal.history.' + currentUserID + '.' + nodeID, timestamp);
        }
      });
    },

    /**
     * Determines whether a server check is necessary.
     *
     * Any content that is >30 days old never gets a "new" or "updated" indicator.
     * Any content that was published before the oldest known reading also never
     * gets a "new" or "updated" indicator, because it must've been read already.
     *
     * @param Number|String nodeID
     *   A node ID.
     * @param Number contentTimestamp
     *   The time at which some content (e.g. a comment) was published.
     *
     * @return Boolean
     *   Whether a server check is necessary for the given node and its timestamp.
     */
    needsServerCheck: function (nodeID, contentTimestamp) {
      // First check if the content is older than 30 days, then we can bail early.
      if (contentTimestamp < thirtyDaysAgo) {
        return false;
      }

      // Use the data embedded in the page, if available.
      if (embeddedLastReadTimestamps && embeddedLastReadTimestamps[nodeID]) {
        return contentTimestamp > parseInt(embeddedLastReadTimestamps[nodeID], 10);
      }

      var minLastReadTimestamp = parseInt(storage.getItem('Drupal.history.' + currentUserID + '.' + nodeID) || 0, 10);
      return contentTimestamp > minLastReadTimestamp;
    }
  };

})(jQuery, Drupal, drupalSettings, window.localStorage);
;
/**
 * Attaches behaviors for the Comment module's "X new comments" link.
 *
 * May only be loaded for authenticated users, with the History module
 * installed.
 */
(function ($, Drupal) {

  "use strict";

  /**
   * Render "X new comments" links wherever necessary.
   */
  Drupal.behaviors.nodeNewCommentsLink = {
    attach: function (context) {
      // Collect all "X new comments" node link placeholders (and their
      // corresponding node IDs) newer than 30 days ago that have not already been
      // read after their last comment timestamp.
      var nodeIDs = [];
      var $placeholders = $(context)
        .find('[data-history-node-last-comment-timestamp]')
        .once('history')
        .filter(function () {
          var $placeholder = $(this);
          var lastCommentTimestamp = parseInt($placeholder.attr('data-history-node-last-comment-timestamp'), 10);
          var nodeID = $placeholder.closest('[data-history-node-id]').attr('data-history-node-id');
          if (Drupal.history.needsServerCheck(nodeID, lastCommentTimestamp)) {
            nodeIDs.push(nodeID);
            // Hide this placeholder link until it is certain we'll need it.
            hide($placeholder);
            return true;
          }
          else {
            // Remove this placeholder link from the DOM because we won't need it.
            remove($placeholder);
            return false;
          }
        });

      if ($placeholders.length === 0) {
        return;
      }

      // Perform an AJAX request to retrieve node read timestamps.
      Drupal.history.fetchTimestamps(nodeIDs, function () {
        processNodeNewCommentLinks($placeholders);
      });
    }
  };

  function hide($placeholder) {
    return $placeholder
      // Find the parent <li>.
      .closest('.comment-new-comments')
      // Find the preceding <li>, if any, and give it the 'last' class.
      .prev().addClass('last')
      // Go back to the parent <li> and hide it.
      .end().hide();
  }

  function remove($placeholder) {
    hide($placeholder).remove();
  }

  function show($placeholder) {
    return $placeholder
      // Find the parent <li>.
      .closest('.comment-new-comments')
      // Find the preceding <li>, if any, and remove its 'last' class, if any.
      .prev().removeClass('last')
      // Go back to the parent <li> and show it.
      .end().show();
  }

  function processNodeNewCommentLinks($placeholders) {
    // Figure out which placeholders need the "x new comments" links.
    var $placeholdersToUpdate = {};
    var fieldName = 'comment';
    var $placeholder;
    $placeholders.each(function (index, placeholder) {
      $placeholder = $(placeholder);
      var timestamp = parseInt($placeholder.attr('data-history-node-last-comment-timestamp'), 10);
      fieldName = $placeholder.attr('data-history-node-field-name');
      var nodeID = $placeholder.closest('[data-history-node-id]').attr('data-history-node-id');
      var lastViewTimestamp = Drupal.history.getLastRead(nodeID);

      // Queue this placeholder's "X new comments" link to be downloaded from the
      // server.
      if (timestamp > lastViewTimestamp) {
        $placeholdersToUpdate[nodeID] = $placeholder;
      }
      // No "X new comments" link necessary; remove it from the DOM.
      else {
        remove($placeholder);
      }
    });

    // Perform an AJAX request to retrieve node view timestamps.
    var nodeIDs = Object.keys($placeholdersToUpdate);
    if (nodeIDs.length === 0) {
      return;
    }

    // Render the "X new comments" links. Either use the data embedded in the page
    // or perform an AJAX request to retrieve the same data.
    function render(results) {
      for (var nodeID in results) {
        if (results.hasOwnProperty(nodeID) && $placeholdersToUpdate.hasOwnProperty(nodeID)) {
          $placeholdersToUpdate[nodeID]
            .attr('href', results[nodeID].first_new_comment_link)
            .text(Drupal.formatPlural(results[nodeID].new_comment_count, '1 new comment', '@count new comments'))
            .removeClass('hidden');
          show($placeholdersToUpdate[nodeID]);
        }
      }
    }

    if (drupalSettings.comment && drupalSettings.comment.newCommentsLinks) {
      render(drupalSettings.comment.newCommentsLinks.node[fieldName]);
    }
    else {
      $.ajax({
        url: Drupal.url('comments/render_new_comments_node_links'),
        type: 'POST',
        data: {'node_ids[]': nodeIDs, 'field_name': fieldName},
        dataType: 'json',
        success: render
      });
    }
  }

})(jQuery, Drupal);
;
