<?php
function cs_bootstrap_sidebars_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'cs-bootstrap' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Zeigt die Sidebar im Blog an.', 'cs-bootstrap' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'cs_bootstrap_sidebars_init' );
