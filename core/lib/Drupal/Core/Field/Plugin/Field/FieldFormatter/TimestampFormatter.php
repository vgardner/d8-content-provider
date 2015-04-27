<?php

/**
 * @file
 * Contains \Drupal\Core\Field\Plugin\Field\FieldFormatter\TimestampFormatter.
 */

namespace Drupal\Core\Field\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'timestamp' formatter.
 *
 * @FieldFormatter(
 *   id = "timestamp",
 *   label = @Translation("Default"),
 *   field_types = {
 *     "timestamp",
 *     "created",
 *     "changed",
 *   }
 * )
 */
class TimestampFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items) {
    $elements = array();

    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        '#cache' => [
          'contexts' => [
            'timezone',
          ],
        ],
        '#markup' => format_date($item->value)
      ];
    }

    return $elements;
  }

}
