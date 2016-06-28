<?php
/*
 * Template Name: Template Blog Columns
 */
?>
<?php get_header(); ?>
<?php get_template_part('template_inc/inc', 'menu'); ?>
    <div class="tzdefault_title">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="single_post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            $post_format = get_post_format();
                            $slidershow = get_post_meta(get_the_ID(), THEME_PREFIX . '_portfolio_slideshows', true);
                            $img_detail = get_post_meta(get_the_ID(), THEME_PREFIX . '_portfolio_image', true);
                            switch ($post_format):
                                case'video':
                                    ?>
                                    <div class="blog-video">
                                        <?php $video_data = str_replace("</p>", "", str_replace("<p>", "", get_the_content()));
                                        ?>
                                        <object type="application/x-shockwave-flash"
                                                data="<?php echo $video_data; ?>" width="1000px" height="800px"
                                                id="youku-player">
                                            <param name="allowFullScreen" value="true">
                                            <param name="allowScriptAccess" value="always">
                                            <param name="movie" value="<?php echo $video_data; ?>">
                                            <param name="flashvars"
                                                   value="imglogo=&amp;paid=0&amp;partnerId=youkuind_">
                                        </object>
                                    </div>
                                    <?php
                                    break;
                                case'image':
                                default:
                                    ?>
                                    <div class="single-content">
                                        <?php
                                        the_content();
                                        wp_link_pages(array(
                                            'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', TEXT_DOMAIN) . '</span>',
                                            'after' => '</div>',
                                            'link_before' => '<span>',
                                            'link_after' => '</span>',
                                            'pagelink' => '<span class="screen-reader-text">' . __('Page', 'TEXT_DOMAIN') . ' </span>%',
                                            'separator' => '<span class="screen-reader-text">, </span>',
                                        ));
                                        ?>
                                    </div>
                                    <?php
                                    break;
                            endswitch;

                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>