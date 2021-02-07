<?php 

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Articles-->
            <section>

                <h2 class="my-4"><?php esc_html_e('Wyniki wyszukiwania dla hasła', 'neuro')?>: "<?php the_search_query(); ?>"</h2>

                <?php get_template_part( 'template-parts/posts-list' ); ?>

            </section>
            <!--Section: Articles-->

        </div>
    </main>
    <!--Main layout-->


<?php get_footer(); ?>