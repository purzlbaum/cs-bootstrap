<?php
// Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
add_theme_support('menus');
register_nav_menus(array(
  'meta_navigation' => __('Metanavigation', 'cs-bootstrap'),
  'main_navigation' => __('Hauptnavigation', 'cs-bootstrap'),
  'footer_navigation' => __('Fussnavigation', 'cs-bootstrap')
));