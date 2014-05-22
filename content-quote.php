<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header" role="heading">
    <h1 class="entry-title">
      <?php if( !is_single() ) : ?>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      <?php else: ?>
        <?php the_title(); ?>
      <?php endif; ?>
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
    <?php if( has_post_thumbnail() ) : ?>
      <div class="entry-thumbnail col-sm-4">
        <a href="<?php the_permalink(); ?>">
          <figure>
            <?php the_post_thumbnail( 'full' ); ?>
          </figure>
        </a>
      </div>
      <div class="entry-content col-sm-8">
        <blockquote>
          <?php the_content( __( 'Artikel "' . get_the_title() . '" lesen <span class="meta-nav">&raquo;</span>', 'cs-bootstrap' ) ); ?>
        </blockquote>
      </div>
      <?php else : ?>
      <div class="entry-content col-sm-12">
        <blockquote>
          <?php the_content( __( 'Artikel "' . get_the_title() . '" lesen <span class="meta-nav">&raquo;</span>', 'cs-bootstrap' ) ); ?>
        </blockquote>
      </div>
    <?php endif; ?>
    <?php
    if( is_single() ) {
      wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Seiten:', 'cs-bootstrap' ) . '</span>', 'after' => '</div>' ) );
    }
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
