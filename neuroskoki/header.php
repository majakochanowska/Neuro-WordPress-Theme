<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php esc_html( bloginfo( 'name') ); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <div class="row align-items-center my-2">
                <div class="col-xs-2 ml-1"><?php the_custom_logo() ?></div>
                <div class="col-xs-10">
                    <?php if ( ! is_singular() ) { ; ?>
                    <h1 class="font-weight-lighter ml-3"><?php esc_html( bloginfo( 'description' ) ); ?></h1>
                    <?php } else { ?>
                    <p class="font-weight-lighter ml-3 h1"><?php esc_html( bloginfo( 'description' ) ); ?></p>
                    <?php } ?>
                </div>
            </div> 
        </div>
        <nav class="navbar navbar-expand-md navbar-dark primary-color">
            <div class="container">
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-controls="bs-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		            <span class="navbar-toggler-icon"></span>
	            </button>
                <?php
                    wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 0,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                ) );
                ?>
                <div><?php get_search_form(); ?></div>
            </div>
        </nav>
    </header>
