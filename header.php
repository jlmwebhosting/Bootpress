<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title ( '|', true,'right' ); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <!-- <link href="/wp-content/themes/bootpress/css/bootstrap-responsive.css" rel="stylesheet"> -->

    <?php
        /*
         *  Add this to support sites with sites with threaded comments enabled.
         */
        if (is_singular() && get_option( 'thread_comments' )) wp_enqueue_script( 'comment-reply' );

        // Include additional scripts and stylesheets
        wp_head();
        wp_get_archives('type=monthly&format=link');
    ?>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/wp-content/themes/bootpress/images/favicon.ico">
    <link rel="apple-touch-icon" href="/wp-content/themes/bootpress/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/bootpress/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/bootpress/images/apple-touch-icon-114x114.png">
  </head>

  <body>
    <div class="page-wrapper">
      <div id="main-nav-bar" class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
            <div class="nav-collapse">
              <?php wp_nav_menu(array(
                                  'container' => false,
                                  'items_wrap' => '<ul id="%1$s" class="%2$s nav">%3$s</ul>',
                                  'menu' => 'Primary Menu',
                                  'depth' => 2,
                                  'walker' => new Bootpress_Walker_Nav_Menu
                                )); ?>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>