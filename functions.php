<?php

/**
 * Include external files
 */
require_once('inc/pagination.inc.php');
require_once('inc/template-tags.inc.php');

/**
 * Include CSS and JS files
 */
function neuro_enqueue_scripts() {
        wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.3.1', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true );

        }
add_action( 'wp_enqueue_scripts', 'neuro_enqueue_scripts' );

/**
 * Setup Theme
 */
function neuro_setup() {
    // Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size( 'medium-xl', 486, 324, false );
    add_image_size( 'medium-xxl', 525, 350, false );
}
add_action('after_setup_theme', 'neuro_setup');

/**
 * Register sidebars and widgetized areas.
 */
function neuro_init() {

    register_sidebar( array(
      'name'          => 'Sidebar',
      'id'            => 'sidebar',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<div class="bg-primary px-3 py-1 my-1 text-white">',
      'after_title'   => '</div>',
    ) );
  
  }
  add_action( 'widgets_init', 'neuro_init' );

/**
 * Register menu.
 */
  register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'neuro' ),
) );

/**
 * Register custom navigation walker
 */
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

/**
 * Register logo
 */

function neuro_custom_logo_setup() {

  add_theme_support( 'custom-logo', array('width' => 80, 'height' => auto) );
 }
 add_action( 'after_setup_theme', 'neuro_custom_logo_setup' );

?>

