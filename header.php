<!DOCTYPE html>
  <html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/devices/apple-touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/devices/apple-touch-icon-ipad.png" />

    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <ul id="skiplinks" class="sr-only">
      <li><a accesskey="1" href="#navigation" title="direkt zur Navigation springen">zur Navigation</a></li>
      <li><a accesskey="2" href="#content" title="direkt zum Inhalt springen">zum Inhalt</a></li>
      <li><a accesskey="3" href="#search" title="direkt zur Suche springen">zur Suche</a></li>
    </ul>
    <!-- open .container -->
    <div class="container">
      <div class="row">
        <header id="header" class="col-sm-12" role="banner">
          <figure class="header-image">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
          </figure>
          <?php get_template_part( 'nav' ); ?>
          <?php //get_template_part( 'custom-header' ); ?>
        </header>
      </div>
    </div>