<?php
/**
 * Template part for displaying list of posts with sidebar.
 *
 * @package WordPress
 * @subpackage neuro
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?>

<!--Grid row-->
<div class="row">

    <!--Articles column-->
    <div class="col-lg-9 mb-4">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
            the_post();
        ?>

        <div class="row rounded z-depth-2 mb-4">
            <!--Featured image-->
            <div class="col-sm-4">
                <div class="my-3 d-none d-sm-block">
                    <?php the_post_thumbnail( 'medium', array( 'class'=> 'img-fluid z-depth-1')); ?>
                </div>
                <div class="my-3 d-xs-block d-sm-none">
                    <?php the_post_thumbnail( 'medium-xxl', array( 'class'=> 'img-fluid z-depth-1')); ?>
                </div>
            </div>

            <!--Excerpt-->
            <div class="col-sm-8">
                <h3 class="my-3 newest-title">
                    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html( the_title() ); ?></a>
                </h3>
                <p class="meta-info"><?php echo neuro_categories(); ?>, <?php echo esc_html( get_the_date() ); echo get_the_author() === "artykuł sponsorowany" ? '<span class="ml-3 mdb-color-ic">' . esc_html( get_the_author() ) . '</span>' : ''; ?></p>
                <?php esc_html( the_excerpt() ); ?>
                <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary btn-rounded btn-md mb-3"><?php esc_html_e('Czytaj więcej', 'neuro')?></a>
            </div>
        </div>
        
        <?php
        } // end while
        ?>
        <nav class="d-block text-center"><?php neuro_number_pagination(); ?></nav>
        <?php
        } // end if
        ?>
    </div>
<!-- /.Articles column-->

<!-- Sidebar column -->
<?php get_template_part( 'template-parts/right-sidebar' ) ?>
<!-- /.Sidebar column -->

</div>
<!-- /.Grid row-->
