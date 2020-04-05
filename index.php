<?php  get_header(); ?>

    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Recommended articles-->
            <section>

                <h2 class="my-4"><?php _e('Polecam w tym miesiącu', 'neuro')?></h2>

                <div class="row hm-white-slight rounded z-depth-1">

                <?php
                    $recommended = new WP_Query( ['category_name' => 'polecane'] );
                    if ( $recommended->have_posts() ) {
                        while ( $recommended->have_posts() ) {
                        $recommended->the_post();
                    ?>
                <div class="col">
                    <div class="my-3">
                        <?php the_post_thumbnail( 'medium-xxl', array( 'class'=> 'img-fluid')); ?>
                    </div>
                    <h3 class="h5-responsive my-3">
                        <a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
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

                <h2 class="my-4"><?php _e('Najnowsze artykuły', 'neuro')?></h2>

                <?php get_template_part( 'template-parts/posts-list' ); ?>

            </section>
            <!--/.Section: Recent articles-->

        </div>
    </main>
    <!--Main layout-->


<?php  get_footer(); ?>