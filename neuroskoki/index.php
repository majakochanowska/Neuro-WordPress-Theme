<?php 

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Recommended articles-->
            <section>

                <h2 class="my-4 main-heading"><?php esc_html_e('Polecam w tym miesiącu', 'neuro')?></h2>

                <div class="row rounded z-depth-2">

                <?php
                    $recommended = new WP_Query( ['category_name' => 'polecane'] );
                    if ( $recommended->have_posts() ) {
                        while ( $recommended->have_posts() ) {
                        $recommended->the_post();
                    ?>
                <div class="col-md-3 col-6">
                    <div class="my-3">
                        <?php the_post_thumbnail( 'medium-xl', array( 'class'=> 'img-fluid z-depth-1')); ?>
                    </div>
                    <p class="meta-info"><?php echo esc_html( neuro_categories() ); ?>, <?php echo esc_html( get_the_date() ); ?></p>
                    <h3 class="my-3 recommended-title">
                        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html( the_title() ); ?></a>
                    </h3>
                </div>

                <?php
                    } // end while
                    } // end if
                ?>
                </div>

            </section>
            <!-- /.Section: Recommended articles-->

            <!--Section: Recent articles-->
            <section>

                <h2 class="my-4 main-heading"><?php esc_html_e('Najnowsze artykuły', 'neuro')?></h2>

                <?php get_template_part( 'template-parts/posts-list' ); ?>

            </section>
            <!--/.Section: Recent articles-->

        </div>
    </main>
    <!--Main layout-->


<?php get_footer(); ?>