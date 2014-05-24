<?php
// Register Theme Features
function cs_bootstrap_post_formats()  {

  // Add theme support for Post Formats
  // $allformats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
  $formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video' );
	add_theme_support( 'post-formats', $formats );
}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'cs_bootstrap_post_formats' );