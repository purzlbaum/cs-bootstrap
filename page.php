  <?php get_header(); ?>
  <div class="container">
    <div class="row">
      <section id="content" class="col-sm-8" role="main">
        <?php
        if(have_posts()) {
          while(have_posts()) {
            the_post();
            get_template_part( 'content', 'page' );
          }
        } else {
          get_template_part( 'content', '404' );
        }
        if ( function_exists( 'cs_bootstrap_pagination' ) ) {
          cs_bootstrap_pagination();
        }
        ?>

      </section><!-- /#main -->

      <aside id="sidebar" class="col-sm-4" role="complementary">
        <div class="sidebar">
          <?php get_sidebar(); ?>
        </div>
      </aside><!-- /#sidebar -->
    </div>
  </div>
  <?php get_footer(); ?>