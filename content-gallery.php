<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header" role="heading">
    <h1 class="entry-title">
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </h1>
  </header><!-- .entry-header -->
  <div class="entry-meta clearfix">
    <?php
    $postFormat = get_post_format($post->id);
    echo '<span class="genericon genericon-' . $postFormat . '"></span>';
    ?>
    <?php cs_bootstrap_entry_meta(); ?>
    <?php comments_popup_link(__( '0 Kommentare', 'cs-bootstrap' ), __( '1 Kommentar', 'cs-bootstrap' ), __( '% Kommentare', 'cs-bootstrap' )); ?>
    <?php edit_post_link( __( 'editieren', 'cs-bootstrap' ), '<span class="edit-link">', '</span>' ); ?>
  </div><!-- .entry-meta -->
  <div class="row">
    <div class="col-sm-12">
      <?php
      include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
      if( is_plugin_active('cs-gallery/cs-gallery.php') ) :
        ?>

      <?php else: ?>
        <p><?php _e('Bitte aktiviere das  "cs-gallery" Plugin.'); ?></p>
      <?php endif; ?>
    </div>
    <?php
      if( is_single() ) {
        wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Seiten:', 'cs-bootstrap' ) . '</span>', 'after' => '</div>' ) );
      }
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
