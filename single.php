<?php  get_header();
if ( have_posts() ) {
while ( have_posts() ) {
the_post();
?>

<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Post-->
        <section class="mt-3">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-lg-9 mb-4">

                    <!-- Breadcrumbs -->
                    <?php get_template_part( 'template-parts/breadcrumb' ); ?>
                    <!-- Breadcrumbs -->

                    <!--Card-->
                    <div class="card mb-4">

                        <!--Card content-->
                        <div class="card-body">
                            <h2 class="font-weight-bold mb-4"><?php the_title() ?></h2>
                            <div class="d-sm-block d-md-none">
                                <?php the_post_thumbnail( 'medium-xl', array( 'class'=> 'img-fluid z-depth-1-half mb-3 mr-3 post-thumbnail')); ?>
                            </div>
                            <div class="d-none d-md-block">
                                <?php the_post_thumbnail( 'medium', array( 'class'=> 'img-fluid z-depth-1-half mb-3 mr-3 post-thumbnail')); ?>
                            </div>
                                <p><?php echo get_the_date(); ?></p>
                                <?php the_content(); ?>

                                <p><?php _e('Autor', 'neuro')?>: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></p>

                        </div>

                        <?php 
                            $related = neuro_get_related_posts( get_the_ID(), 4 );

                            if( $related->have_posts() ) {
                        ?>
                            <div class="card-body">
                                <h3><?php _e('Może cię też zainteresować', 'neuro')?></h3>
                                <div class="row">
                                    <?php while( $related->have_posts() ): $related->the_post(); ?>
                                    <div class="col-md-3 col-6">
                                        <div><?php the_post_thumbnail( 'medium', array( 'class'=> 'img-fluid mb-1 post-thumbnail')); ?></div>
                                        <div><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></div>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php 
                            } // end if
                            wp_reset_postdata();
                        ?>

                    </div>
                    <!--/.Card-->


                        <!--Comments and reply-->
                        <?php comments_template(); ?>
                        <!--/.Comments and reply-->

                </div>
                <!--Grid column-->

                <!--Sidebar column-->
                <?php get_template_part( 'template-parts/right-sidebar' ) ?>
                <!--/.Sidebar column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>
<!--Main layout-->
<?php
} // end while
} // end if
get_footer();
?>