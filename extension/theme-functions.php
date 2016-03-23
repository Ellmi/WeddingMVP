<?php
  // enable and register custom sidebar
  if (function_exists('register_sidebar')) {
    // default sidebar array
    $sidebar_attr = array(
      'name'          => '',
      'id'            => '',
      'description'   => '',
      'before_widget' => '<aside id="%1$s" class="%2$s widget">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="module-title title-widget"><span>',
      'after_title'   => '</span></h3>'
    );

    $id = 0;
    $sidebars = array(
                        "Sidebar Blog"  => "Display sidebar on Blog page",
                        "Sidebar shop"  => "Display sidebar on shop page",
                        "Sidebar event" => "Display sidebar on Template event grid and single event",
                        "Footer 1"      => "Display footer 1",
                        "Footer 2"      => "Display footer 2",
                        "Footer 3"      => "Display footer 3",
                     );
      foreach ($sidebars as $key=>$value) {
          $sidebar_attr['name'] = $key;
          $sidebar_attr['description']=$value;
          $sidebar_attr['id'] = THEME_PREFIX . '-sidebar-' . $id++;
          register_sidebar($sidebar_attr);
      }


  }

    /**
     * Plazart setup.
     *
     * Set up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support post thumbnails.
     *
     */
    //Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Add RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );

    // add theme support title-tag
    add_theme_support( 'title-tag' );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menu('primary','Primary Menu');
    register_nav_menu('primary-left','Primary Left');
    register_nav_menu('primary-right','Primary Right');

    if ( ! function_exists( 'tzeverline_comment' ) ) :
        function tzeverline_comment( $comment, $args, $depth ) {
            $GLOBALS['comment'] = $comment;
            switch ( $comment->comment_type ) :
                case 'pingback' :
                case 'trackback' :
                    // Display trackbacks differently than normal comments.
                    ?>
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
              <p><?php _e( 'Pingback:', TEXT_DOMAIN ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', TEXT_DOMAIN ), '<span class="edit-link">', '</span>' ); ?></p>
                    <?php
                    break;
                default :
                    // Proceed with normal comments.
                    global $post;
                    ?>
                    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                        <article id="comment-<?php comment_ID(); ?>" class="comment-body">
                            <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', TEXT_DOMAIN ); ?></p>
                            <?php endif; ?>
                            <div class="comment-author">
                                <?php echo get_avatar( $comment, 70 ); ?>
                            </div>
                            <div class="comment-content">
                                <?php
                                printf( '<cite class="fn">%1$s %2$s</cite>',
                                    get_comment_author_link(),
                                    // If current post author is also comment author, make it known visually.
                                    ( $comment->user_id === $post->post_author ) ? '<span> ' . __( '- Post Author ', TEXT_DOMAIN ) . '</span>' : ''
                                );
                                ?>
                                    <span class="comment-metadata">
                                        <?php
                                            printf( '<a class="comments-datetime" href="%1$s">&nbsp;&nbsp;&nbsp;<time datetime="%2$s">%3$s</time></a>',
                                                esc_url( get_comment_link( $comment->comment_ID ) ),
                                                get_comment_time( 'c' ),
                                                /* translators: 1: date, 2: time */
                                                sprintf( __( '%1$s', TEXT_DOMAIN ), get_comment_date('d M, Y') )
                                            );
                                        ?>
                                        <?php
                                        edit_comment_link( __( 'Edit ', TEXT_DOMAIN ) );
                                        comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', TEXT_DOMAIN ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );
                                        ?>
                                    </span>
                                <?php comment_text(); ?>
                            </div><!--comment-content -->

                        </article><!-- #comment-## -->
                    <?php
                    break;
            endswitch; // end comment_type check
        }
    endif;


?>