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
                            <div class="post-content">
                                <?php the_post_thumbnail( 'medium', array( 'class'=> 'img-fluid z-depth-1-half mb-3 mr-3 post-thumbnail')); ?>
                                <p><?php echo get_the_date(); ?></p>
                                <?php the_content(); ?>

                                <p>Autor: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></p>
                            </div>

                        </div>

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