<?php 

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Post-->
        <section class="mt-3">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col mb-4">

                    <!--Card-->
                    <div class="card mb-4">

                        <!--Card content-->
                        <div class="card-body">
                            <h2 class="mb-4 text-center"><?php esc_html_e('Nie ma takiej strony.', 'neuro')?></h2>
                            <p class="error">404 error</p>
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
<?php get_footer(); ?>