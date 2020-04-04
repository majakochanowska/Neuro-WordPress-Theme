<?php
/**
 * Template part for displaying list of posts with sidebar.
 *
 * @package WordPress
 * @subpackage neuro
 * @since 1.0.0
 */

?>

<!--Grid row-->
<div class="row wow fadeIn">

<!--Articles column-->
<div class="col-lg-9 mb-4">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
        the_post();
    ?>
    <!--Featured image-->
    <div class="row hm-white-slight rounded z-depth-2 mb-4">
    <div class="col-sm-4">
        <div class="mb-3 mt-3">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
        </div>
    </div>

    <!--Excerpt-->
    <div class="col-sm-8">
        <h4 class="mb-3 mt-3 font-weight-bold">
            <a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
        </h4>
        <p><?php the_category(', '); ?>, <?php echo get_the_date(); ?></p>
        <p class="grey-text"><?php the_excerpt(); ?></p>
        <a href="<?php echo get_permalink() ?>" class="btn btn-info btn-rounded btn-md mb-3"><?php _e('Czytaj więcej', 'neuro')?></a>
        </div>
    </div>
    
    <?php
    } // end while
    } // end if
    ?>
</div>
<!-- /.Articles column-->
<!-- Sidebar column -->
<?php get_template_part( 'template-parts/right-sidebar' ) ?>
<!-- /.Sidebar column -->

</div>
<!-- /.Grid row-->


<!--Pagination -->
<?php mdb_pagination(); ?>