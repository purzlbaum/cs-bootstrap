<?php
/**
 * Get the theme version number from style.css
 *
 * Code from: required+ Foundation (http://themes.required.ch/)
 *
 * @package cs Bootstrap
 * @author Claudio Schwarz
 * @since  cs-bootstrap 0.1
 */

function cs_bootstrap_get_theme_version( $parent = true ) {

  // Name of the parent theme forder
  $stylesheet = 'cs-bootstrap';

  if ( ! $parent ) {
    $stylesheet = get_stylesheet();
  }
  // Get the current theme with the new WP_Theme_API
  $current_theme = wp_get_theme( $stylesheet );

  return $current_theme->Version;
}
