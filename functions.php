<?php 
//Register area for custom menu
function register_my_menu()
{
    register_nav_menu('primary-menu', __( 'Primary Menu' ));
}

// Change the excerpt more ending
function custom_excerpt_length( )
{
	return 150;
}

// Change the excerpt more ending
function new_excerpt_more($more) {
	return '...';
}

//Some simple code for our widget-enabled sidebar
if (function_exists('register_sidebar')) register_sidebar(array('before_widget' => '<li id="%1$s" class="widget %2$s well">'));

//Code for custom background support
add_custom_background();

//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Support for post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);

// Actions and filters added below this comment. (place your functions above.)
add_action('init', 'register_my_menu');
add_filter('excerpt_length', 'custom_excerpt_length');
add_filter('excerpt_more', 'new_excerpt_more');

