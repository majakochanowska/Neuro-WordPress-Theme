<?php
/**
 * Template part for displaying right sidebar.
 *
 * @package WordPress
 * @subpackage neuro
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?>

<div class="col-lg-3 mb-4">
    <div class="card mb-4">
        <!--Sidebar-->
        <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar' ); ?>
            <?php endif; ?>
        <!--/.Sidebar-->
    </div>
</div>