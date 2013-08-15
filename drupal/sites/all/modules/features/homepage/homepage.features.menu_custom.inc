<?php
/**
 * @file
 * homepage.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function homepage_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-footer.
  $menus['menu-footer'] = array(
    'menu_name' => 'menu-footer',
    'title' => 'footer',
    'description' => 'Menu system for the footer.',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Menu system for the footer.');
  t('footer');


  return $menus;
}
