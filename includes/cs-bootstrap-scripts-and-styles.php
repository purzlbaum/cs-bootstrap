<?php
/**
 * Add the scripts we need on the site in the way the should be included
 * See: http://wp.smashingmagazine.com/2011/10/12/developers-guide-conflict-free-javascript-css-wordpress/
 *
 * Code from: required+ Foundation (http://themes.required.ch/)
 *
 * @package cs Bootstrap
 * @author Claudio Schwarz
 * @since  cs-bootstrap 0.1
 */

/**
 * Register javascript and stylesheets
 * @since  cs Bootstrap 0.1.0
 *
 * @return void
 */
function cs_bootstrap_load_scripts() {

  // fitvids.js
  wp_register_script(
    'cs-fancybox-js',
    get_template_directory_uri() . '/javascripts/jquery.fancybox.js',
    array( 'twitter-bootstrap-js' ),
    cs_bootstrap_get_theme_version(),
    true
  );

  // fitvids.js
  wp_register_script(
    'cs-fitvids-js',
    get_template_directory_uri() . '/javascripts/fitvids.js',
    array( 'twitter-bootstrap-js' ),
    cs_bootstrap_get_theme_version(),
    true
  );

  //theme.js
  wp_register_script(
    'cs-theme-js',
    get_template_directory_uri() . '/javascripts/theme.js',
    array( 'twitter-bootstrap-js' ),
    cs_bootstrap_get_theme_version(),
    true
  );

  /**
   * Adding google fonts
   *
   * This is the proper code to add google fonts
   * as seen in TwentyTwelve
   *
   */


  if(strpos(!$_SERVER['SERVER_NAME'], '.loc')){
    $protocol = is_ssl() ? 'https' : 'http';
    $query_args = array( 'family' => 'Open+Sans:400italic,700italic,400,700,300' );
    wp_enqueue_style(
      'open-sans',
      add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ),
      array(),
      null
    );
  } else {
    $protocol = is_ssl() ? 'https' : 'http';
    $query_args = array( 'family' => 'Open+Sans:400italic,700italic,400,700,300' );
    wp_enqueue_style(
      'open-sans',
      add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ),
      array(),
      null
    );
  }

  /*
   * Loads Twitter Bootstrap minified CSS
   */
  wp_register_style(
    'cs-bootstrap', //handle
    get_template_directory_uri() . '/stylesheets/default.css',
    null,   // no dependencies
    BOOTSTRAP_VERSION //version
  );

  if(is_user_logged_in() || is_admin()) {
    wp_register_style(
      'custom-admin',
      get_template_directory_uri() . '/stylesheets/wp-admin.css',
      null,
      cs_bootstrap_get_theme_version()
    );

  }

  // Enable threaded comments
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

  // Load our Javascript
  wp_enqueue_script( 'cs-fancybox-js' );
  wp_enqueue_script( 'cs-fitvids-js' );
  wp_enqueue_script( 'cs-theme-js' );

  // Load our Stylesheets
  wp_enqueue_style( 'cs-bootstrap' );
  wp_enqueue_style( 'custom-admin' );

}
add_action( 'wp_enqueue_scripts', 'cs_bootstrap_load_scripts' );