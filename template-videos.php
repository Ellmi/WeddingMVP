<?php
/**
 * Template Name: Template VIDEOS
 * User: Yanmin
 */
get_header();
get_template_part('template_inc/main', 'menu-bar');
get_template_part('template_inc/slides', 'video'); ?>
    <div class="container">
        <div class="row">
            <h1 class="playlist_title">婚礼视频</h1>
            <?php
            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
            $blog_args = array(
                'post_type' => 'post',
                'category_name' => 'videos',
                'posts_per_page' => 6,
                'paged' => $paged
            );
            query_posts($blog_args);
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="dl-demo wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-lg-6">
                    <div class="vc_column-inner">
                        <?php the_content();?>
                    </div>
                </div>
            <?php endwhile;
            else :
            endif;
            wp_reset_postdata();?>
        </div>
        <div class="navigation">
            <?php
            global $wp_query;

            $big = 999999999; // need an unlikely integer

            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $wp_query->max_num_pages
            ));
            ?>
        </div>
    </div>
    <br><br><br><br>
<?php get_footer(); ?>