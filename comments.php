<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to twentytwelve_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<div id="comments" class="comments-area">

    <?php // You can start editing here -- including this comment! ?>

    <?php if ( have_comments() ) : ?>
        <h3 class="comment-reply-title"><?php _e('COMMENTS', TEXT_DOMAIN) ; ?></h3>
        <ol class="comment-list">
            <?php wp_list_comments( array( 'callback' => 'tzeverline_comment', 'style' => 'ol' ) ); ?>
        </ol><!-- .commentlist -->

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
            <nav id="comment-nav-below" class="navigation" role="navigation">
                <h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', TEXT_DOMAIN ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', TEXT_DOMAIN ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', TEXT_DOMAIN ) ); ?></div>
            </nav>
        <?php endif; // check for comment navigation ?>

        <?php
        /* If there are no comments and comments are closed, let's leave a note.
         * But we only want the note on posts and pages that had comments in the first place.
         */
        if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="nocomments"><?php _e( 'Comments are closed.' , TEXT_DOMAIN ); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $args = array(
        'comment_notes_after' => '',
        'fields' => apply_filters( 'comment_form_default_fields',
            array(
                'author' => ' <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><label>'.__('Name *', TEXT_DOMAIN).'</label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
                'email' => '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><label>'.__('Email *', TEXT_DOMAIN).'</label><input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
                'url' => '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><label>'.__('Website *', TEXT_DOMAIN).'</label><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"' . $aria_req . ' /></div><div class="clearfix"></div>',
            )
        ),
        'comment_field' => '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tzcomment-textarea"><label>Comment</label><textarea rows="5" id="comment" name="comment" class="form-control"></textarea></div><div class="clearfix"></div>',
    );
    echo '<div class="row">';
    comment_form( $args );
    echo '</div>';
    ?>
</div><!-- #comments .comments-area -->