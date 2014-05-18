<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header" role="heading">
    <h1 class="entry-title">
      <?php the_title(); ?>
    </h1>
  </header><!-- .entry-header -->
  <div class="entry-meta clearfix">
    <?php cs_bootstrap_entry_meta(); ?>
    <?php comments_popup_link(__('0 Kommentare', 'cs-bootstrap'), __('1 Kommentar', 'cs-bootstrap'), __('% Kommentare', 'cs-bootstrap')); ?>
    <?php edit_post_link( __( 'editieren', 'cs-bootstrap' ), '<span class="edit-link">', '</span>' ); ?>
  </div><!-- .entry-meta -->
  <div class="row">
    <?php if( has_post_thumbnail() ) : ?>
      <div class="entry-thumbnail col-sm-4">
        <figure>
          <?php the_post_thumbnail( 'full' ); ?>
        </figure>
      </div>
      <div class="entry-content col-sm-8">
        <?php the_content( __( 'Artikel "' . get_the_title() . '" lesen <span class="meta-nav">&raquo;</span>', 'cs-bootstrap' ) ); ?>
      </div>
    <?php else : ?>
      <div class="entry-content col-sm-12">
        <?php the_content( __( 'Artikel "' . get_the_title() . '" lesen <span class="meta-nav">&raquo;</span>', 'cs-bootstrap' ) ); ?>
      </div>
    <?php endif; ?>
    <div class="comments-form col-sm-12">
      <?php
        if( is_single() ) {
          wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Seiten:', 'cs-bootstrap' ) . '</span>', 'after' => '</div>' ) );
        }

        comments_template();
      ?>
    </div>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
