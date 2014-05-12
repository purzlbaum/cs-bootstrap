<?php

function cs_bootstrap_jquery_in_footer( &$scripts) {
  if ( ! is_admin() )
    $scripts->add_data( 'jquery', 'group', 1 );
}
add_action( 'wp_default_scripts', 'cs_bootstrap_jquery_in_footer' );