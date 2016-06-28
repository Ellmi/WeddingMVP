<?php
/**
 * Template Name: Demos Template
 * User: Yanmin
 */
get_header();
get_template_part('template_inc/main', 'menu-bar');
get_template_part('template_inc/slides', 'home'); ?>
    <div class="container">
        <div class="row">
            <h1 class="playlist_title">婚礼案例</h1>
            <?php
            $blog_args = array(
                'post_type' => 'post',
                'category_name' => 'demo',
                'posts_per_page' => 2
            );
            $query_blog = new WP_Query($blog_args);
            if ($query_blog->have_posts()):
                while ($query_blog->have_posts()):
                    $query_blog->the_post(); ?>
                    <div class="dl-demo wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-lg-6">
                        <div class="vc_column-inner">
                            <?php the_content();
                            wp_link_pages(array(
                                'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', TEXT_DOMAIN) . '</span>',
                                'after' => '</div>',
                                'link_before' => '<span>',
                                'link_after' => '</span>',
                            ));?>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            wp_reset_postdata();?>
        </div>
    </div>

    <br><br><br><br>
<?php get_footer(); ?>