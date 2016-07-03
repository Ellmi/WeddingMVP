<?php
/**
 * Template Name: Template Propose
 * User: Yanmin
 */
get_header();
get_template_part('template_inc/main', 'menu-bar');
get_template_part('template_inc/slides', 'home'); ?>
<div id="propose">
    <div class="tzcountdown2">
        <div class="container">
            <h3 class="tzcount_title">优惠活动 &amp; 结束倒计时</h3>

            <div class="countdown">
                <div class="row">
                    <div class="col-md-3">
                        <div class="tzcountdownitem">
                            <span class="days">363</span>
                        </div>
                        <p class="timeRefDays tzcount-ds">days</p>
                    </div>
                    <div class="col-md-3">
                        <div class="tzcountdownitem">
                            <span class="hours">14</span>
                        </div>
                        <p class="timeRefHours tzcount-ds">hours</p>
                    </div>
                    <div class="col-md-3">
                        <div class="tzcountdownitem">
                            <span class="minutes tzcount-ds">29</span>
                        </div>
                        <p class="timeRefMinutes tzcount-ds">minutes</p>
                    </div>
                    <div class="col-md-3">
                        <div class="tzcountdownitem">
                            <span class="seconds">20</span>
                        </div>
                        <p class="timeRefSeconds tzcount-ds">seconds</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template_inc/post', 'zone1'); ?>
    <div class="container">
        <div class="row">
            <h1 class="playlist_title">婚礼案例</h1>
            <?php
            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
            $blog_args = array(
                'post_type' => 'post',
                'category_name' => 'demos',
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
</div>
<br><br><br><br>
<?php get_footer(); ?>
<script>
    jQuery(document).ready(function () {
        jQuery(".countdown").countdown({
            date: "july 1 2017 23:23:23", // add the countdown's end date (i.e. 3 november 2012 12:00:00)
            format: "on" // on (03:07:52) | off (3:7:52) - two_digits set to ON maintains layout consistency
        });
    });
</script>
