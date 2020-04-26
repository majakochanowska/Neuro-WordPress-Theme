<?php  get_header(); ?>

    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Articles-->
            <section>

                <h2 class="my-4">
                <?php
                    if ( is_category() ) {
                        single_cat_title( __( 'Kategoria: ', 'neuro' ) );
                    } elseif ( is_tag() ) {
                        single_tag_title( __( 'Artykuły na temat: ', 'neuro' ) );
                    } elseif ( is_author() ) {
                        the_post();
                        echo __('Artykuły autora: ', 'neuro') . get_the_author();
                        rewind_posts();
                    } else {
                        echo __('Archiwum: ', 'neuro');
                    }
                    ?>
                </h2>

                <?php get_template_part( 'template-parts/posts-list' ); ?>

            </section>
            <!--Section: Articles-->

        </div>
    </main>
    <!--Main layout-->

<?php  get_footer(); ?>