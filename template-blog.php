<?php
/*
 * Template Name: Template Blog Columns
 */
?>
<?php get_header(); ?>
<?php get_template_part('template_inc/inc','menu'); ?>
    <div class="tzdefault_title">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

<div class="tzblog-columns">
    <div class="container">
        <?php
        $TZBlogDate           =   get_post_meta( get_the_ID(), THEME_PREFIX . '_tzpostDate', true);
        $TZBlogComment        =   get_post_meta( get_the_ID(), THEME_PREFIX . '_tzpostComments', true);
        $TZBlogCategory       =   get_post_meta( get_the_ID(), THEME_PREFIX . '_tzpostCategory', true);
        $TZBlogimage          =   get_post_meta( get_the_ID(), THEME_PREFIX . '_tzpostthumbnail',true);
        $TZBlogexcerpt        =   get_post_meta( get_the_ID(), THEME_PREFIX . '_tzpostexcerpt', true);
        $sidebar              =   get_post_meta( get_the_ID(), THEME_PREFIX . '_tzpostSidebar', true);
        $column               =   get_post_meta( get_the_ID(), THEME_PREFIX.'_blog_column', true );
        $catid                =   get_post_meta( get_the_ID(), THEME_PREFIX.'_blog_catid', true );
        $limit                =   get_post_meta( get_the_ID(), THEME_PREFIX.'_blog_limit', true );
        $class_column         = 'col-lg-3 col-md-3 col-sm-6 col-xs-12';
        $class_column_item    = '' ;
        $row_sidebar          = '';


        $sidebar_class = 'col-md-12';
        if ( $sidebar != 0 ):
            $sidebar_class = 'col-md-9';
            $row_sidebar = 'tzshow_sidebar';
        endif;


        switch($column):
            case '3':
                $class_column       = 'col-lg-4 col-md-4 col-sm-6 col-xs-12';
                $class_column_item  = 'blog-gird-item3';
                break;
            case '2':
                $class_column       = 'col-lg-6 col-md-6 col-sm-6 col-xs-12';
                $class_column_item  = 'blog-gird-item2';
                break;
            default:
                $class_column       = 'col-lg-3 col-md-3 col-sm-6 col-xs-12';
                $class_column_item  = 'blog-gird-item4';
                break;
        endswitch;
        ?>
        <div class="row <?php echo esc_attr($row_sidebar); ?>">
            <?php if( $sidebar == 1 ): ?>
                <div class="col-md-3 tzsidebar-event">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
            <div class="<?php echo esc_attr($sidebar_class); ?>">
                <div class="row">
                    <?php
                    if ( get_query_var('paged') ):
                        $paged = get_query_var('paged');
                    else:
                        $paged = 1;
                    endif;

                    $blog_args = array(
                        'post_type'         =>  'post',
                        'paged'             =>  $paged,
                        'posts_per_page'    =>  $limit,
                        'cat'               =>  $catid
                    );
                    $query_blog = new WP_Query( $blog_args );
                    if ( $query_blog -> have_posts() ):
                        while ( $query_blog -> have_posts() ):
                            $query_blog -> the_post();
                            $post_fomats = get_post_meta($post -> ID, THEME_PREFIX . '_portfolio_type', true);
                            ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class( esc_attr($class_column) ) ; ?>>
                                <div class="blog-gird-item tzmaxheight_item <?php echo esc_attr($class_column_item) ?>">
                                    <?php
                                    if( $TZBlogimage == 'show' ):
                                        switch($post_fomats):
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
                                    endif;
                                    ?>
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
                                                <?php if ( !post_password_required() && ( comments_open() || get_comments_number() ) ):
                                                    comments_popup_link(__('0 Comment', TEXT_DOMAIN), __('1 Comment', TEXT_DOMAIN), __('% comment(s)', TEXT_DOMAIN));
                                                endif; ?>
                                            </span>
                                        <?php endif; ?>
                                        <?php if ( $TZBlogCategory == 'show' ): ?>
                                            <span class="tzcat_link">
                                                /
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
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="tzpagenavi-blog">
                    <?php echo  tzeverline_custom_paging_nav($query_blog->max_num_pages);  ?>
                </div>
            </div>
            <?php if( $sidebar == 2 ): ?>
                <div class="col-md-3 tzsidebar-event">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
        </div><!--end class row-->


    </div><!--end class container-->
</div><!--end class tzblog-wrap-->

<?php get_footer(); ?>