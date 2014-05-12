<?php
function cs_bootstrap_load_custom_admin_css() {
  wp_enqueue_style('custom-admin', get_template_directory_uri() . '/stylesheets/wp-admin.css');
}

add_action( 'admin_print_styles', 'cs_bootstrap_load_custom_admin_css' );

// change backend-footer
function cs_bootstrap_backend_footer () {
  echo "Webdesign- und Entwicklung: <a href='http://webworker.ch' target='_blank'>the webworker company</a> &middot; pilatusstrasse 1 &middot; 6300 zug &middot; +41 41 850 08 14 &middot; <a href='mailto: info@webworker.ch'>info@webworker.ch</a>";
}

//add_filter('admin_footer_text', 'cs_bootstrap_backend_footer');