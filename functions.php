<?php

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

  add_theme_support( 'custom-logo', array('width' => 80, 'height' => 'auto') );
 }
 add_action( 'after_setup_theme', 'neuro_custom_logo_setup' );

/**
 * Pagination
 */

function neuro_number_pagination() {
  global $wp_query;
  $pagination = paginate_links( array(
    'mid_size' => 3,
  ));

  $search = array('prev page-numbers', 'next page-numbers', 'page-numbers dots', 'page-numbers' );
  $replace = array('btn btn-info btn-rounded btn-md waves-effect waves-light', 'btn btn-info btn-rounded btn-md waves-effect waves-light', 'badge badge-light pagination-num', 'btn btn-info btn-rounded waves-effect waves-light pagination-num' );

  echo str_replace( $search, $replace, $pagination);

};

/**
 * Related posts by tag
 */

function neuro_get_related_posts( $post_id, $related_count, $args = array() ) {
	$terms = get_the_terms( $post_id, 'post_tag' );
	
	if ( empty( $terms ) ) $terms = array();
	
	$term_list = wp_list_pluck( $terms, 'slug' );
	
	$related_args = array(
		'post_type' => 'post',
		'posts_per_page' => $related_count,
		'post_status' => 'publish',
		'post__not_in' => array( $post_id ),
		'orderby' => 'rand',
		'tax_query' => array(
			array(
				'taxonomy' => 'post_tag',
				'field' => 'slug',
				'terms' => $term_list
			)
		)
	);

	return new WP_Query( $related_args );
}

?>

