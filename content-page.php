<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header" role="heading">
    <h1 class="entry-title">
      <?php the_title(); ?>
    </h1>
  </header><!-- .entry-header -->
  <div class="row">
    <?php if( has_post_thumbnail() ) : ?>
      <div class="entry-thumbnail col-sm-4">
        <? the_post_thumbnail( 'article-image' ); ?>
      </div>
      <div class="entry-content col-sm-8">
        <?php the_content( __( 'Artikel "' . get_the_title() . '" lesen <span class="meta-nav">&raquo;</span>', 'cs-bootstrap' ) ); ?>
      </div>
    <?php else : ?>
      <div class="entry-content col-sm-12">
        <?php the_content( __( 'Artikel "' . get_the_title() . '" lesen <span class="meta-nav">&raquo;</span>', 'cs-bootstrap' ) ); ?>
      </div>
    <?php endif; ?>
    <?php
      if( is_single() ) {
        wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Seiten:', 'cs-bootstrap' ) . '</span>', 'after' => '</div>' ) );
      }
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
