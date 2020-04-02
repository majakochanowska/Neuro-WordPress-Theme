<?php
/**
 * Template part for displaying breadcrumbs
 *
 * @package WordPress
 * @subpackage neuro
 * @since 1.0.0
 */

?>

<ol class="breadcrumb white z-depth-1">
    <li class="breadcrumb-item">
        <a href="<?php echo get_home_url(); ?>">Home Page</a>
    </li>
        <?php
        $categories = get_the_category();
        $output     = '';
        $comma      = '';
        
        if ( $categories ) {
            foreach ( $categories as $category ) {
                $output .= '<li class="breadcrumb-item"><a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a></li>' . $comma;
            }
            echo trim( $output );
        } ?>
    <li class="breadcrumb-item active"><?php the_title() ?></li>
</ol>