<?php

/**
 * @file
 * Contains \Drupal\Tests\Component\Utility\SafeMarkupTest.
 */

namespace Drupal\Tests\Component\Utility;

use Drupal\Component\Utility\SafeMarkup;
use Drupal\Tests\UnitTestCase;

/**
 * Tests marking strings as safe.
 *
 * @group Utility
 * @coversDefaultClass \Drupal\Component\Utility\SafeMarkup
 */
class SafeMarkupTest extends UnitTestCase {

  /**
   * Tests SafeMarkup::set() and SafeMarkup::isSafe().
   *
   * @dataProvider providerSet
   *
   * @param string $text
   *   The text or object to provide to SafeMarkup::set().
   * @param string $message
   *   The message to provide as output for the test.
   *
   * @covers ::set
   */
  public function testSet($text, $message) {
    $returned = SafeMarkup::set($text);
    $this->assertTrue(is_string($returned), 'The return value of SafeMarkup::set() is really a string');
    $this->assertEquals($returned, $text, 'The passed in value should be equal to the string value according to PHP');
    $this->assertTrue(SafeMarkup::isSafe($text), $message);
    $this->assertTrue(SafeMarkup::isSafe($returned), 'The return value has been marked as safe');
  }

  /**
   * Data provider for testSet().
   *
   * @see testSet()
   */
  public function providerSet() {
    // Checks that invalid multi-byte sequences are rejected.
    $tests[] = array("Foo\xC0barbaz", '', 'SafeMarkup::checkPlain() rejects invalid sequence "Foo\xC0barbaz"', TRUE);
    $tests[] = array("Fooÿñ", 'SafeMarkup::set() accepts valid sequence "Fooÿñ"');
    $tests[] = array(new TextWrapper("Fooÿñ"), 'SafeMarkup::set() accepts valid sequence "Fooÿñ" in an object implementing __toString()');
    $tests[] = array("<div>", 'SafeMarkup::set() accepts HTML');

    return $tests;
  }

  /**
   * Tests SafeMarkup::set() and SafeMarkup::isSafe() with different providers.
   *
   * @covers ::isSafe
   */
  public function testStrategy() {
    $returned = SafeMarkup::set('string0', 'html');
    $this->assertTrue(SafeMarkup::isSafe($returned), 'String set with "html" provider is safe for default (html)');
    $returned = SafeMarkup::set('string1', 'all');
    $this->assertTrue(SafeMarkup::isSafe($returned), 'String set with "all" provider is safe for default (html)');
    $returned = SafeMarkup::set('string2', 'css');
    $this->assertFalse(SafeMarkup::isSafe($returned), 'String set with "css" provider is not safe for default (html)');
    $returned = SafeMarkup::set('string3');
    $this->assertFalse(SafeMarkup::isSafe($returned, 'all'), 'String set with "html" provider is not safe for "all"');
  }

  /**
   * Tests SafeMarkup::setMultiple().
   *
   * @covers ::setMultiple
   */
  public function testSetMultiple() {
    $texts = array(
      'multistring0' => array('html' => TRUE),
      'multistring1' => array('all' => TRUE),
    );
    SafeMarkup::setMultiple($texts);
    foreach ($texts as $string => $providers) {
      $this->assertTrue(SafeMarkup::isSafe($string), 'The value has been marked as safe for html');
    }
  }

  /**
   * Tests SafeMarkup::setMultiple().
   *
   * Only TRUE may be passed in as the value.
   *
   * @covers ::setMultiple
   *
   * @expectedException \UnexpectedValueException
   */
  public function testInvalidSetMultiple() {
    $texts = array(
      'invalidstring0' => array('html' => 1),
    );
    SafeMarkup::setMultiple($texts);
  }

  /**
   * Tests SafeMarkup::checkPlain().
   *
   * @dataProvider providerCheckPlain
   * @covers ::checkPlain
   *
   * @param string $text
   *   The text to provide to SafeMarkup::checkPlain().
   * @param string $expected
   *   The expected output from the function.
   * @param string $message
   *   The message to provide as output for the test.
   * @param bool $ignorewarnings
   *   Whether or not to ignore PHP 5.3+ invalid multibyte sequence warnings.
   */
  function testCheckPlain($text, $expected, $message, $ignorewarnings = FALSE) {
    $result = $ignorewarnings ? @SafeMarkup::checkPlain($text) : SafeMarkup::checkPlain($text);
    $this->assertEquals($expected, $result, $message);
  }

  /**
   * Data provider for testCheckPlain().
   *
   * @see testCheckPlain()
   */
  function providerCheckPlain() {
    // Checks that invalid multi-byte sequences are rejected.
    $tests[] = array("Foo\xC0barbaz", '', 'SafeMarkup::checkPlain() rejects invalid sequence "Foo\xC0barbaz"', TRUE);
    $tests[] = array("\xc2\"", '', 'SafeMarkup::checkPlain() rejects invalid sequence "\xc2\""', TRUE);
    $tests[] = array("Fooÿñ", "Fooÿñ", 'SafeMarkup::checkPlain() accepts valid sequence "Fooÿñ"');

    // Checks that special characters are escaped.
    $tests[] = array("<script>", '&lt;script&gt;', 'SafeMarkup::checkPlain() escapes &lt;script&gt;');
    $tests[] = array('<>&"\'', '&lt;&gt;&amp;&quot;&#039;', 'SafeMarkup::checkPlain() escapes reserved HTML characters.');

    return $tests;
  }

  /**
   * Tests string formatting with SafeMarkup::format().
   *
   * @dataProvider providerFormat
   * @covers ::format
   *
   * @param string $string
   *   The string to run through SafeMarkup::format().
   * @param string $args
   *   The arguments to pass into SafeMarkup::format().
   * @param string $expected
   *   The expected result from calling the function.
   * @param string $message
   *   The message to display as output to the test.
   * @param bool $expected_is_safe
   *   Whether the result is expected to be safe for HTML display.
   */
  function testFormat($string, $args, $expected, $message, $expected_is_safe) {
    $result = SafeMarkup::format($string, $args);
    $this->assertEquals($expected, $result, $message);
    $this->assertEquals($expected_is_safe, SafeMarkup::isSafe($result), 'SafeMarkup::format correctly sets the result as safe or not safe.');
  }

  /**
   * Data provider for testFormat().
   *
   * @see testFormat()
   */
  function providerFormat() {
    $tests[] = array('Simple text', array(), 'Simple text', 'SafeMarkup::format leaves simple text alone.', TRUE);
    $tests[] = array('Escaped text: @value', array('@value' => '<script>'), 'Escaped text: &lt;script&gt;', 'SafeMarkup::format replaces and escapes string.', TRUE);
    $tests[] = array('Escaped text: @value', array('@value' => SafeMarkup::set('<span>Safe HTML</span>')), 'Escaped text: <span>Safe HTML</span>', 'SafeMarkup::format does not escape an already safe string.', TRUE);
    $tests[] = array('Placeholder text: %value', array('%value' => '<script>'), 'Placeholder text: <em class="placeholder">&lt;script&gt;</em>', 'SafeMarkup::format replaces, escapes and themes string.', TRUE);
    $tests[] = array('Placeholder text: %value', array('%value' => SafeMarkup::set('<span>Safe HTML</span>')), 'Placeholder text: <em class="placeholder"><span>Safe HTML</span></em>', 'SafeMarkup::format does not escape an already safe string themed as a placeholder.', TRUE);
    $tests[] = array('Verbatim text: !value', array('!value' => '<script>'), 'Verbatim text: <script>', 'SafeMarkup::format replaces verbatim string as-is.', FALSE);
    $tests[] = array('Verbatim text: !value', array('!value' => SafeMarkup::set('<span>Safe HTML</span>')), 'Verbatim text: <span>Safe HTML</span>', 'SafeMarkup::format replaces verbatim string as-is.', TRUE);

    return $tests;
  }

  /**
   * Tests SafeMarkup::placeholder().
   *
   * @covers ::placeholder
   */
  function testPlaceholder() {
    $this->assertEquals('<em class="placeholder">Some text</em>', SafeMarkup::placeholder('Some text'));
  }

}
