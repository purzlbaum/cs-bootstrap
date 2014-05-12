<?php
/**
 * Displays external link icon
 *
 * Code from: http://codegrad.hub.ph/marking-external-links-icon-wordpress/
 *
 * @package cs Bootstrap
 * @author Claudio Schwarz
 * @since  cs-bootstrap 0.1
 */

function cs_bootstrap_external_link($text) {
  $wpUrl = get_bloginfo('url');
  $return = str_replace('href=', 'class="external" href=', $text);
  $return = str_replace('class="external" href="' . $wpUrl . '', 'href="' . $wpUrl . '', $return);
  $return = str_replace('class="external" href="#', 'href="#', $return);
  return $return;
}
add_filter('the_content', 'cs_bootstrap_external_link');