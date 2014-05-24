<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Navigation aufklappen</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>"><?php bloginfo(); ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div id="navbar-collapse" class="collapse navbar-collapse">
      <nav id="navigation" class="navigation" role="navigation">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'main_navigation',
          'depth' => 2,
          'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>'
        ) );
        ?>
      </nav>
      <?php get_search_form(); ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>