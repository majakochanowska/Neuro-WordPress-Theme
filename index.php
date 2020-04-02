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
                <h1 class="h2 font-weight-bold my-4">Recent articles</h1>

                <?php get_template_part( 'template-parts/posts-list' ); ?>

            </section>
            <!--Section: Articles-->

        </div>
    </main>
    <!--Main layout-->


<?php  get_footer(); ?>