<?php  get_header();
if ( have_posts() ) {
while ( have_posts() ) {
the_post();
?>
<!--Main Navigation-->

<header>

    <!-- Intro -->
    <div class="card card-intro blue-gradient mb-3">

        <div class="card-body white-text rgba-black-light text-center pt-5 pb-4">

            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-6">

                    <h1 class="font-weight-bold mb-4"><?php the_title() ?></h1>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

    </div>
    <!-- Intro -->

</header>
<!--Main Navigation-->

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
                    <?php
                    $categories = get_the_category();
                    $first_category_name = $categories[0]->cat_name;
                    $first_category_id = get_cat_ID( $category[0]->cat_name );
                    $first_category_link = get_category_link( $category_id );
                    ?>
                    <ol class="breadcrumb white z-depth-1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo get_home_url(); ?>">Home Page</a>
                        </li>
                        <?php
                        if (count($categories)){
                        ?>
                        <li class="breadcrumb-item">
                            <a href="<?php echo $first_category_link ?>"><?php echo $first_category_name ?></a>
                        </li>
                        <?php
                        }
                        ?>
                        <li class="breadcrumb-item active"><?php the_title() ?></li>
                    </ol>
                    <!-- Breadcrumbs -->

                    <!-- Featured image -->
                    <?php the_post_thumbnail( 'large', array( 'class'=> 'img-fluid z-depth-1-half mb-4')); ?>

                    <!--Card-->
                    <div class="card mb-4">

                        <!--Card content-->
                        <div class="card-body">

                            <p>by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> on <?php echo get_the_date(); ?></p>

                            <hr>

                            <div class="post-content">
                            <?php the_content(); ?>
                            </div>

                        </div>

                    </div>
                    <!--/.Card-->


                        <!--Comments and reply-->
                        <?php comments_template(); ?>
                        <!--/.Comments and reply-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 mb-4">

                    <!-- Sticky content -->
                    <div class="sticky">
                        <!--Section: Dynamic Content Wrapper-->
                        <section>
                          <div id="dynamic-content"></div>

                        </section>
                        <!--Section: Dynamic Content Wrapper-->

                        <!--Card-->
                        <div class="card mb-4">
                            <!--Sidebar-->
                            <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                                <?php dynamic_sidebar( 'sidebar' ); ?>
                                <?php endif; ?>
                            <!--/.Sidebar-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!-- Sticky content -->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>
...
<!--Main layout-->
<?php
} // end while
} // end if
get_footer();
?>