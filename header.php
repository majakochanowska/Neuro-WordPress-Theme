<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php bloginfo( 'name'); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <div class="row align-items-center my-2">
                <div class="col-xs-2 ml-1"><a href="<?php bloginfo('url')?>"><img src="http://127.0.0.1/neuroskoki2/wp-content/uploads/2020/04/logo-neuroskoki.png" width="80"></a></div>
                <div class="col-xs-10"><h1 class="main-title font-weight-lighter ml-3 cyan-text"><?php bloginfo( 'description' )?></h1></div>
            </div> 
        </div>
        <nav class="navbar navbar-expand-md navbar-dark primary-color" role="navigation">
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