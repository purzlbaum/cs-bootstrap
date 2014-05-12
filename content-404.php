<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header" role="heading">
    <h1 class="entry-title"><?php _e('Fehler 404 - Seite nicht gefunden', 'cs-bootstrap'); ?></h1>
  </header><!-- .entry-header -->
  <div class="entry-content">
    <p>
      <?php _e('Die angeforderte Seite wurde nicht gefunden. Vielleicht ist der Link, den Sie benutzt haben, veraltet, oder Sie haben sich beim Eingeben der Adresse vertippt.', 'cs-bootstrap'); ?>
    </p>
    <p>
      <?php _e('Sie können nun zur', 'cs-bootstrap'); ?> <a href="<?php bloginfo('wpurl');?>"><?php _e('Startseite', 'cs-bootstrap'); ?></a> <?php _e('zurück oder die Suchfunktion benutzen.', 'cs-bootstrap'); ?>
    </p>
    <?php get_search_form(); ?>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
