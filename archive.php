<?php  get_header(); ?>

    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Dynamic Content Wrapper-->
            <section>
              <div id="dynamic-content"></div>

            </section>
            <!--Section: Dynamic Content Wrapper-->

            <!--Section: Articles-->
            <section>

                <!--Section heading-->
                <h2 class="my-4">
                <?php
                    if ( is_category() ) {
                        single_cat_title( 'Kategoria: ' );
                    } elseif ( is_tag() ) {
                        single_tag_title( 'Artykuły na temat: ' );
                    } elseif ( is_author() ) {
                        the_post();
                        echo 'Artykuły autora: ' . get_the_author();
                        rewind_posts();
                    } else {
                        echo 'Archiwum: ';
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