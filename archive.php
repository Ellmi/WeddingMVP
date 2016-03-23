<?php get_header(); ?>
<?php get_template_part('template_inc/inc','menu');
    $TZBlogDate           =   ot_get_option(THEME_PREFIX . '_TZBlogDate','show');
    $TZBlogComment        =   ot_get_option(THEME_PREFIX . '_TZBlogComments','show');
    $TZBlogCategory       =   ot_get_option(THEME_PREFIX . '_TZBlogCategory','show');
    $TZBlogTag            =   ot_get_option(THEME_PREFIX . '_TZBlogTag','show');
    $TZBlogimage          =   ot_get_option(THEME_PREFIX . '_TZBlogimage','show');
    $TZBlogexcerpt        =   ot_get_option(THEME_PREFIX . '_TZBlogexcerpt','show');
     $sidebar             =   ot_get_option(THEME_PREFIX . '_TZBlogSidebar',0);
     $class_slider = 'col-md-12';
    if ( $sidebar != 0 ):
        $class_slider = 'col-md-9';
    endif;

?>
<div class="tzdefault_title">
    <div class="container">
        <h1><?php
            if ( is_category() ) {
               echo sprintf( __( 'Category: %s', TEXT_DOMAIN ), single_cat_title( '', false ) );
            } elseif ( is_tag() ) {
                echo  sprintf( __( 'Tag: %s', TEXT_DOMAIN ), single_tag_title( '', false ) );
            } elseif ( is_author() ) {
                echo sprintf( __( 'Author: %s', TEXT_DOMAIN ), '<span class="vcard">' . get_the_author() . '</span>' );
            } elseif ( is_year() ) {
                echo sprintf( __( 'Year: %s', TEXT_DOMAIN ), get_the_date( _x( 'Y', TEXT_DOMAIN ) ) );
            } elseif ( is_month() ) {
                echo sprintf( __( 'Month: %s', TEXT_DOMAIN ), get_the_date( _x( 'F Y', TEXT_DOMAIN ) ) );
            } elseif ( is_day() ) {
                echo sprintf(__('Day: %s', TEXT_DOMAIN ), get_the_date(_x('F j, Y', TEXT_DOMAIN)));
            }else {
                echo _e('Archives', TEXT_DOMAIN);
            }
            ?></h1>
    </div>
</div>
<div class="home-post">
    <div class="container">
        <div class="row">
            <?php if( $sidebar == 1 ): ?>
                <div class="col-md-3 tzsidebar-blog tzsidebar-event">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
            <div class="<?php echo esc_attr($class_slider); ?> tzblog-default">
                <?php if ( have_posts() ) :
                        while (have_posts()) :
                            the_post() ;
                                $post_fomats = get_post_meta( $post -> ID, THEME_PREFIX . '_portfolio_type', true);
                                $post_type   = get_post_type();
                            ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post') ?>>
                            <?php if( $TZBlogimage == 'show' ): ?>
                                <?php switch($post_fomats):
                                        case'video':
                                                get_template_part('template_inc/content','video');
                                            break;
                                        case'audio':
                                                get_template_part('template_inc/content','audio');
                                            break;
                                        case'quote':
                                            get_template_part('template_inc/content','quote');
                                            break;
                                        case'slideshows':
                                            get_template_part('template_inc/content','slideshows');
                                            break;
                                        default:
                                            get_template_part('template_inc/content','none');
                                            break;
                                    endswitch;
                                ?>
                            <?php endif; ?>
                            <h2 class="tzblog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="blog_meta">
                                <?php if ( $TZBlogDate == 'show' ): ?>
                                    <span class="tzblog_date">
                                        <?php echo get_the_date(); ?>
                                        /
                                    </span>
                                <?php endif; ?>
                                <?php if ( $TZBlogComment == 'show' ): ?>
                                <span class="tzblog_comments">
                                    <?php if ( $post_type == 'post' && !post_password_required() && ( comments_open() || get_comments_number() ) ):
                                        comments_popup_link(__('Leave a comment', TEXT_DOMAIN), __('1 Comment', TEXT_DOMAIN), __('% comment(s)', TEXT_DOMAIN));
                                    endif; ?>
                                </span>
                                <?php endif; ?>
                                <?php if ( $TZBlogTag == 'show' ): ?>
                                    <span class="tztags_link">
                                        <?php
                                        if ( $post_type == 'post' ):

                                            if ( get_the_tags() != false ):
                                                echo '/'  ;
                                                the_tags('',',','');
                                                echo '/';
                                            endif;
                                        else:
                                            if ( get_the_terms(get_the_ID(), 'portfolio-tags') != false ):
                                                echo '/';
                                                the_terms( get_the_ID(), 'portfolio-tags');
                                                echo '/';
                                            endif;
                                        endif;
                                        ?>
                                    </span>
                                <?php endif; ?>
                                <?php if ( $TZBlogCategory == 'show' && $post_type == 'post' ): ?>
                                    <span class="tzcat_link">
                                        <?php the_category(',') ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <?php if ( $TZBlogexcerpt == 'show' ): ?>
                                <div class="tzthe_content">
                                    <?php
                                        the_excerpt();
                                        echo '<a class="more-link" href="'.get_permalink().'">'.__('READ MORE', TEXT_DOMAIN ).'</a>';
                                    ?>
                                </div>
                            <?php endif; ?>
                        </article>
                     <?php endwhile; // end while ( have_posts )
                    endif; // end if ( have_posts )  ?>
                <?php  tzeverline_paging_nav(); ?>
            </div>
            <?php if( $sidebar == 2 ): ?>
                <div class="col-md-3 tzsidebar-blog tzsidebar-event">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>

