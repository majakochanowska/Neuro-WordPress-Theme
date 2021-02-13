<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage neuro
 * @since neuro 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?>

    <?php
    /*
     * If the current post is protected by a password and
     * the visitor has not yet entered the password we will
     * return early without loading the comments.
     */
    if ( post_password_required() )
        return;
?>

<div id="comments">

        <?php if ( have_comments() ) : ?>

            <div class="card mb-3">
                <h4 class="card-header"><?php esc_html_e('Komentarze', 'neuro')?></h4>

                <div class="card-body">
                    <ul class="comments-list">
                    <?php
                        wp_list_comments( array( 
                            'max-depth' => '3',
                            'type' => 'comment'
                        ) );
                    ?>
                    </ul>
                </div>
                        
            </div>

        <?php endif; // have_comments() ?>


        <?php

        $args = array(
        'fields' => apply_filters(
            'comment_form_default_fields', array(
                'author' =>'
                <label for="author">'. esc_html( __( 'Imię', 'neuro' ) ) . '<span class="required">*</span>'  .' </label>
                <input type="text" id="author" name="author" class="form-control" required>
                ',

                'email'  => '
                <label for="email">'. esc_html( __( 'Email', 'neuro' ) ) . '<span class="required">*</span>' . '</label>
                <input type="email" id="email" name="email" class="form-control" required>
                ',

                'url'  => '
                <label for="url">'. esc_html( __( 'Strona www', 'neuro' ) ) .  '</label>
                <input type="text" id="url" name="url" class="form-control">
                '
            )
        ),
        'comment_field' => (is_user_logged_in() ? '
                <!--Third row-->
                <div class="row">

                    <!--Content column-->
                    <div class="col-sm-10 col-12">

                        <div class="form-group">
                            <label for="comment">' . esc_html( __( 'Twój komentarz', 'neuro' ) ) . '</label>
                            <textarea id="comment" name="comment" class="form-control" rows="5"></textarea>
                        </div>


                    </div>
                    <!--/.Content column-->

                </div>
                <!--/.Third row-->': '
                <!-- Comment -->
                <div class="form-group">
                    <label for="comment">' . esc_html( __( 'Twój komentarz', 'neuro' ) ) . '</label>
                    <textarea id="comment" name="comment" class="form-control" rows="5"></textarea>
                </div>'),
            'comment_notes_after' => '',
            'comment_notes_before' => '',
            'logged_in_as' => '<p class="text-center">('. sprintf(
                __( 'Zalogowany jako <a href="%1$s">%2$s</a>. <a href="%3$s" title="Wyloguj">Wyloguj</a>' ),
                    admin_url( 'profile.php' ),
                    $user_identity,
                    wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
                ) . ')</p>  ',
            'title_reply' => '',
            'class_submit' => 'btn btn-primary btn-rounded btn-md btn-add-comment',
            'label_submit' => __( 'Dodaj', 'neuro' ),
            'title_reply_before' => '<div id="reply-title" class="comment-reply-title">',
            'title_reply_after' => '</div>'

        );
        ?>
        <!--Leave a reply section-->
        <div class="card mb-3">
            <h4 class="card-header"><?php esc_html_e('Dodaj komentarz', 'neuro')?></h4>
            <div class="card-body">

                <?php comment_form($args ); ?>
            </div>
        </div>
        <!--/.Leave a reply section-->
</div>
<!-- #comments .comments-area -->