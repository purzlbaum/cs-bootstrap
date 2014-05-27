<?php
define( 'BOOTSTRAP_VERSION', '3.1.1' ); 	// Version of Twitter Bootstrap

/*
 *
 * Backend
 *
 * */

// cs-bootstrap-custom-login.php: custom styled login
require_once( get_template_directory() . '/includes/cs-bootstrap-custom-login.php' );

// cs-bootstrap-remove-wp-version.php: removes WP version for security reasons
require_once( get_template_directory() . '/includes/cs-bootstrap-remove-wp-version.php' );

// cs-bootstrap-disable-login-errors.php: removes login errors for security reasons
require_once( get_template_directory() . '/includes/cs-bootstrap-disable-login-errors.php' );

// cs-bootstrap-disable-custom-admin.php: customizes admin of WordPress
require_once( get_template_directory() . '/includes/cs-bootstrap-custom-admin.php' );

/*
 *
 * Frontend
 *
 * */

// register the scripts and stylesheets we need the correct way
require_once( get_template_directory() . '/includes/cs-bootstrap-scripts-and-styles.php' );

// cs-bootstrap-rss-feed.php: adds RSS feed to the <head>
require_once( get_template_directory() . '/includes/cs-bootstrap-rss-feed.php' );

require_once( get_template_directory() . '/includes/cs-bootstrap-post-thumbnails-in-feed.php' );

// cs-bootstrap-custom-comments.php: for customize display of comments
require_once( get_template_directory() . '/includes/cs-bootstrap-custom-comments.php' );

// cs-bootstrap-get-theme-version.php: find out the theme version
require_once( get_template_directory() . '/includes/cs-bootstrap-get-theme-version.php' );

// cs-bootstrap-jquery-in-footer.php: puts jquery files to the end of html
require_once( get_template_directory() . '/includes/cs-bootstrap-jquery-in-footer.php' );

// cs-bootstrap-pagination.php: displays pagination
require_once( get_template_directory() . '/includes/cs-bootstrap-pagination.php' );

// cs-bootstrap-entry.php: displays entry meta
require_once( get_template_directory() . '/includes/cs-bootstrap-entry-meta.php' );

// cs-bootstrap-entry.php: displays icon on external links
require_once( get_template_directory() . '/includes/cs-bootstrap-external-links.php' );

/*
 *
 * Backend & Frontend
 *
 * */

// removes the WordPress logo in the admin bar
require_once( get_template_directory() . '/includes/cs-bootstrap-remove-admin-entries.php' );

// cs-bootstrap-register-menu.php: adds the menus
require_once( get_template_directory() . '/includes/cs-bootstrap-register-menu.php' );

// cs-bootstrap-post-thumbnails.php: adds the post thumbnail feature from WordPress and defines the different sizes
require_once( get_template_directory() . '/includes/cs-bootstrap-post-thumbnails.php' );

// cs-bootstrap-register-sidebars.php: register sidebars
require_once( get_template_directory() . '/includes/cs-bootstrap-register-sidebars.php' );

// cs-bootstrap-social-media-widget.php: adds a Social Media Widget
require_once( get_template_directory() . '/includes/cs-bootstrap-social-media-widget.php' );

// cs-bootstrap-post-formats.php: adds a post formats
require_once( get_template_directory() . '/includes/cs-bootstrap-post-formats.php' );

// cs-bootstrap-functions.php: a collection of functions
require_once( get_template_directory() . '/includes/cs-bootstrap-functions.php' );

// cs-bootstrap-theme-customizer: customize the theme
require_once( get_template_directory() . '/includes/cs-bootstrap-theme-customizer.php' );