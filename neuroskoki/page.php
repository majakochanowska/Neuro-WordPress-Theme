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
                <div class="col mb-4">

                    <!-- Breadcrumbs -->
                    <?php get_template_part( 'template-parts/breadcrumb' ); ?>
                    <!-- Breadcrumbs -->

                    <!--Card-->
                    <div class="card mb-4">

                        <!--Card content-->
                        <div class="card-body">
                            <h2 class="mb-4"><?php esc_html( the_title() ); ?></h2>

                            <div class="post-content">
                                <?php esc_html( the_content() ); ?>
                            </div>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

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