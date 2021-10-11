<?php 

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

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
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-9 mb-4">

                    <!-- Breadcrumbs -->
                    <?php get_template_part( 'template-parts/breadcrumb' ); ?>
                    <!-- Breadcrumbs -->

                    <!--Card-->
                    <div class="card mb-4">

                        <!--Card content-->
                        <div class="card-body">
                            <h2 class="mb-4"><?php esc_html( the_title() ); ?></h2>
                            <div class="d-sm-block d-md-none">
                                <?php the_post_thumbnail( 'medium-xl', array( 'class'=> 'img-fluid z-depth-1 mb-3 mr-3 post-thumbnail')); ?>
                            </div>
                            <div class="d-none d-md-block">
                                <?php the_post_thumbnail( 'medium', array( 'class'=> 'img-fluid z-depth-1 mr-3 post-thumbnail')); ?>
                            </div>
                            <p class="meta-info"><?php esc_html_e('Opublikowany:', 'neuro')?> <?php echo esc_html( get_the_date() ); ?></p>
                            <?php 
                                if ( get_the_modified_time( 'U' ) >= get_the_time( 'U' ) + DAY_IN_SECONDS ) {
                            ?>
                            <p class="update-info"><?php esc_html_e('Ostatnio aktualizowany:', 'neuro')?> <?php echo esc_html( the_modified_date() ); ?></p>
                            <?php
                                }
                            ?>
                            <?php esc_html( the_content() ); ?>

                            <p><?php esc_html_e('Autor', 'neuro')?>: <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><?php the_author(); ?></a></p>

                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>

                            <div class="fb-share-button" 
                                data-href="<?php echo esc_attr( get_permalink() ); ?>" 
                                data-layout="button_count"
                                data-size="large"
                                >
                            </div>

                            <a href="https://buycoffee.to/neuroskoki" target="_blank" rel="noopener"><img src="https://buycoffee.to/btn/buycoffeeto-btn-primary.svg" style="width: 140px;margin-left:15px;margin-bottom:5px" alt="Postaw mi kawę na buycoffee.to"></a>
                        </div>

                        <?php 
                            $related = neuro_get_related_posts( get_the_ID(), 4 );

                            if( $related->have_posts() ) {
                        ?>
                            
                            <h4 class="bg-primary text-white related-header"><?php esc_html_e('Może cię też zainteresować', 'neuro')?></h4>
                            <div class="card-body">
                                
                                <div class="row">
                                    <?php while( $related->have_posts() ): $related->the_post(); ?>
                                    <div class="col-md-3 col-6">
                                        <div><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail( 'medium', array( 'class'=> 'img-fluid mb-1 post-thumbnail related-thumbnail')); ?></a></div>
                                        <h5 class="related-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html( the_title() ); ?></a></h5>
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