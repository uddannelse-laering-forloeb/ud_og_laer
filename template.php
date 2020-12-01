<?php


/**
 * Implements hook_preprocess_page().
 *
 * @param $variables
 *   Available variables.
 */
function ud_og_laer_preprocess_page(&$variables) {
  // Hamburger icon.
  $variables['hamburger_icon_path'] = drupal_get_path('theme', $GLOBALS['theme']);
}
