<?php

// Bringt die Artikelbilder in den Feed
function cs_bootstrap_display_post_thumbnail_in_feed($content) {
  global $post;

  if(has_post_thumbnail($post->ID)) {
      $content = '<div>' . get_the_post_thumbnail($post->ID, 'full') . '</div>' . $content;
  }
  return $content;
}
add_filter('the_content_feed', 'cs_bootstrap_display_post_thumbnail_in_feed');
add_filter('the_excerpt_rss', 'cs_bootstrap_display_post_thumbnail_in_feed');