<?php
/**
 * Template part for displaying breadcrumbs
 *
 * @package WordPress
 * @subpackage neuro
 * @since 1.0.0
 */

?>

<ol class="breadcrumb white z-depth-1 small">
    <li class="breadcrumb-item">
        <a href="<?php echo get_home_url(); ?>">Home</a>
    </li>
        <?php
        $categories = get_the_category();
        $output = '';
        $separator = '';
        
        if ( $categories ) {
            foreach ( $categories as $category ) {
                if ($category->term_id != 599 && $category->term_id != 601) {
                    $output .= '<li class="breadcrumb-item"><a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a></li>' . $separator;
                }
            }
            echo trim( $output );
        } ?>
    <li class="breadcrumb-item active"><?php the_title() ?></li>
</ol>