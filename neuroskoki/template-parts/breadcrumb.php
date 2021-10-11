<?php
/**
 * Template part for displaying breadcrumbs
 *
 * @package WordPress
 * @subpackage neuro
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?>

<ol class="breadcrumb white z-depth-1 small">
    <li class="breadcrumb-item">
        <a href="<?php echo esc_url( get_home_url() ); ?>">Home</a>
    </li>
        <?php
        $categories = get_the_category();
        $output = '';
        $separator = '';
        
        if ( $categories ) {
            foreach ( $categories as $category ) {
                if ($category->cat_name != 'Polecane' && $category->cat_name != 'Recommended') {
                    $output .= '<li class="breadcrumb-item"><a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . $category->cat_name . '</a></li>' . $separator;
                }
            }
            echo trim( $output );
        } ?>
    <li class="breadcrumb-item active"><?php esc_html( the_title() ); ?></li>
</ol>