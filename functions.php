<?php 

// Constants that we will need.
define('BOOTPRESS_PATH', dirname(__FILE__));
define('BOOTPRESS_URL', get_bloginfo('template_url'));

// Require functions and config files, config files always after function files.
require_once(BOOTPRESS_PATH . '/functions/functions.comments.php');
require_once(BOOTPRESS_PATH . '/config.php');

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

function bootpress_scripts_method() {

    // Deregister wordpresses version of jquery so we can
    // use the version that came with bootstrap
    wp_deregister_script('jquery');

    // Enqueue scripts that we'll place in the header.
    wp_register_script( 'jquery', BOOTPRESS_URL . '/js/jquery.js', array(), '1.7.1', false);
    
    // Enqueue scripts that we'll place in the footer.
    wp_register_script( 'bootstrap-transition', BOOTPRESS_URL . '/js/bootstrap-transition.js', array('jquery'), '2.0.0', true);
    wp_register_script( 'bootstrap-alert', BOOTPRESS_URL . '/js/bootstrap-alert.js', array('jquery'), '2.0.0', true);
    wp_register_script( 'bootstrap-modal', BOOTPRESS_URL . '/js/bootstrap-modal.js', array('jquery'), '2.0.0', true);
    wp_register_script( 'bootstrap-dropdown', BOOTPRESS_URL . '/js/bootstrap-dropdown.js', array('jquery'), '2.0.0', true);
    wp_register_script( 'bootstrap-scrollspy', BOOTPRESS_URL . '/js/bootstrap-scrollspy.js', array('jquery'), '2.0.0', true);
    wp_register_script( 'bootstrap-tab', BOOTPRESS_URL . '/js/bootstrap-tab.js', array('jquery'), '2.0.0', true);
    wp_register_script( 'bootstrap-tooltip', BOOTPRESS_URL . '/js/bootstrap-tooltip.js', array('jquery'), '2.0.0', true);
    wp_register_script( 'bootstrap-popover', BOOTPRESS_URL . '/js/bootstrap-popover.js', array('jquery'), '2.0.0', true);
    wp_register_script( 'bootstrap-button', BOOTPRESS_URL . '/js/bootstrap-button.js', array('jquery'), '2.0.0', true);
    wp_register_script( 'bootstrap-collapse', BOOTPRESS_URL . '/js/bootstrap-collapse.js', array('jquery'), '2.0.0', true);
    wp_register_script( 'bootstrap-carousel', BOOTPRESS_URL . '/js/bootstrap-carousel.js', array('jquery'), '2.0.0', true);
    wp_register_script( 'bootstrap-typeahead', BOOTPRESS_URL . '/js/bootstrap-typeahead.js', array('jquery'), '2.0.0', true);
    
    // When we tried to use wp_enqueue_scripts we got memory errors, we'll revisit later.
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-alert');
    wp_enqueue_script('bootstrap-modal');
    wp_enqueue_script('bootstrap-dropdown');
    wp_enqueue_script('bootstrap-scrollspy');
    wp_enqueue_script('bootstrap-tab');
    wp_enqueue_script('bootstrap-tooltip');
    wp_enqueue_script('bootstrap-popover');
    wp_enqueue_script('bootstrap-button');
    wp_enqueue_script('bootstrap-collapse');
    wp_enqueue_script('bootstrap-carousel');
    wp_enqueue_script('bootstrap-typeahead');
}    
 

//Code for custom background support
add_custom_background();

//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Support for post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, false);

// Actions and filters added below this comment. (place your functions above.)
add_action('init', 'register_my_menu');
add_action('wp_enqueue_scripts', 'bootpress_scripts_method');
add_filter('excerpt_length', 'custom_excerpt_length');
add_filter('excerpt_more', 'new_excerpt_more');

