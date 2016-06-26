<?php
/**
 * Template Name: VIDEOS Template
 * User: Yanmin
 */
get_header();
get_template_part('template_inc/main', 'menu-bar');
get_template_part('template_inc/slides', 'video'); ?>
<div class="container">
    <div class="row">
            <h1 class="playlist_title">婚礼视频</h1>
        <?php
        $blog_args = array(
            'post_type' => 'post'
        );
        $query_blog = new WP_Query($blog_args);
        if ($query_blog->have_posts()):
            while ($query_blog->have_posts()):
                $query_blog->the_post();
                $post_fomats = get_post_format(); ?>

                <?php
                if ($post_fomats == "video"):?>
                    <div class="dl-video wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-lg-6">
                        <div class="vc_column-inner">
                            <?php the_content();?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php
            endwhile;
        endif;
        wp_reset_postdata();?>
    </div>
</div>

<br><br><br><br>
<?php get_footer(); ?>