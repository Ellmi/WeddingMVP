<?php
/*
 * Template Name: Template Blog Timeline
 */
?>
<?php get_header(); ?>
<?php get_template_part('template_inc/inc','menu'); ?>
    <div class="tzdefault_title">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <section class="tzblog-timeline">
        <div class="tztimeline-line">
            <div class="container container-timeline">


                    <?php
                    $blog_args = array(
                        'post_type'         =>  'post',
                    );
                    $query_blog = new WP_Query( $blog_args );
                    if ( $query_blog -> have_posts() ):
                        $count = $query_blog->post_count;
                        $i = 0;
                        while ( $query_blog -> have_posts() ):
                            $query_blog -> the_post();
                            $post_fomats = get_post_meta($post -> ID, THEME_PREFIX . '_portfolio_type', true);
                            $class= "tzleft";
                            if ( $i % 2 !== 0):
                                $class= "tzright";
                            endif;
                            if ( $i % 2 == 0 ):
                                echo '<div class="row row-timeline">';
                            endif;
                            ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-6'.' '.$class) ; ?>>
                                <div class="timeline">
                                    <?php echo get_the_date(); ?>
                                </div>
                                <div class="blog-timeline-item">
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
                                    <h2 class="tzblog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <div class="blog_meta">
                                         <span class="tzblog_date">
                                            <?php echo get_the_date(); ?>
                                             /
                                        </span>
                                        <span class="tzblog_comments">
                                            <?php if ( !post_password_required() && ( comments_open() || get_comments_number() ) ):
                                                    comments_popup_link(__('0 Comment', TEXT_DOMAIN), __('1 Comment', TEXT_DOMAIN), __('% comment(s)', TEXT_DOMAIN));
                                                endif; ?>
                                        </span>
                                        <span class="tzcat_link">
                                                /
                                            <?php the_category(',') ?>
                                        </span>
                                    </div>
                                    <div class="tzthe_content">
                                        <?php
                                        the_excerpt();
                                        echo '<a class="more-link" href="'.get_permalink().'">'.__('READ MORE', TEXT_DOMAIN ).'</a>';
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        if ( $i % 2 == 1 ):
                            echo '</div>';
                        endif;
                        $i ++ ;
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
            </div><!--end class container-->
            <?php if ( $query_blog->max_num_pages < 2 ): ?>
                <span class="timeline-noload-d"><?php echo _e('Not data ...', TEXT_DOMAIN); ?></span>
            <?php else: ?>
                <span class="timeline-load" data-option-id="2"><?php echo _e('More posts ...', TEXT_DOMAIN); ?></span>
                <span class="timeline-noload"><?php echo _e('Not data ...', TEXT_DOMAIN); ?></span>
                <img class="image_timeline" src="<?php echo esc_url(IMG_PATH .'/timeload.GIF'); ?>" alt="timeline">
            <?php endif; ?>
        </div>
    </section><!--end class tzblog-wrap-->

<?php get_footer(); ?>