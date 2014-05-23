<?php
/*

Plugin Name: claudioschwarz.com Gallery
Plugin URI: http://claudioschwarz.com
Description: Gallery Plugin for claudioschwarz.com
Version: 1.0
Author: Claudio Schwarz
Author URI: http://claudioschwarz.com

*/


function claudioschwarz_gallery() {
global $post;
  $return_string = '';
  $return_string .= ''
    . '<div id="gallery-' . $post->ID . '" class="carousel slide" data-ride="carousel">'
    .   '<div class="carousel-inner">';

          $args = array(
            'post_type' => 'attachment',
            'orderby' => 'menu_order',
            'order' => ASC,
            'numberposts' => -1,
            'post_status' => null,
            'post_parent' => $post->ID,
            'exclude' => get_post_thumbnail_id()
          );
          $attachments = get_posts($args);

          if ( $attachments ):
            foreach ( $attachments as $attachment ):
              $counter++;
              if ($counter == 1) {
                $return_string .= ''
                  . '<div class="item active">'
                  .   '<figure>'
                  .     wp_get_attachment_image($attachment->ID, 'full')
                  .   '</figure>'
                  . '</div>';
              } else {
                $return_string .= ''
                  . '<div class="item">'
                  .   '<figure>'
                  .     wp_get_attachment_image($attachment->ID, 'full')
                  .   '</figure>'
                  . '</div>';
              }
            endforeach;
          endif;


  $return_string .= ''
  .   '</div>'
  .   '<a class="left carousel-control" href="#gallery-' . $post->ID . '" data-slide="prev">'
  .     '<span class="glyphicon glyphicon-chevron-left"></span>'
  .   '</a>'
  .   '<a class="right carousel-control" href="#gallery-' . $post->ID . '" data-slide="next">'
  .     '<span class="glyphicon glyphicon-chevron-right"></span>'
  .   '</a>'
  . '</div>'
  . '<div class="clear"></div>';

  return $return_string;
}


function register_gallery_shortcode(){
  add_shortcode('galerie', 'claudioschwarz_gallery');
}
add_action( 'init', 'register_gallery_shortcode');