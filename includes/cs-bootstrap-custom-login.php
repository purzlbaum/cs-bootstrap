<?php

// Custom CSS for the login page
// Create wp-login.css in your theme folder
function claudioschwarz_custom_login() {
  echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/stylesheets/wp-login.css"/>';
}
add_action('login_head', 'claudioschwarz_custom_login');

// replaces wordpress.org url from logo with blog url
function claudioschwarz_login_url_local() {
  $webworkerUrl = 'http://www.claudioschwarz.com/';
  return $webworkerUrl;
}
add_filter('login_headerurl', 'claudioschwarz_login_url_local');