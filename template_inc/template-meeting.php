<?php
/**
 * Template Name: Template Meeting
 * User: Yanmin
 */
get_header();
get_template_part('template_inc/side', 'menu-bar');
get_template_part('template_inc/slides', 'home'); ?>
<div id="meeting">
    <?php get_template_part('template_inc/count', 'down');
    get_template_part('template_inc/post', 'zone1'); ?>
    <div class="container tzourstory2">
        <div class="row">
            <div class="col-md-7 rtl-right">
                <img width="670" height="406" src="<?php echo esc_url(get_theme_mod('meeting_topic_picture_setting', get_template_directory_uri() . '/images/portfolio6.jpg')); ?>" class="story_image pull-right">
            </div>
            <div class="col-md-5 rtl-left">
                <h3 class="title_ourstory"><?php echo esc_attr_e(get_theme_mod('meeting_topic_text_title_setting'));?></h3>
                <div class="ourstory_content">
                    <p><?php echo esc_attr_e(get_theme_mod('meeting_topic_text_detail_setting'));?></p>
                </div>
            </div>
        </div>
    </div>
    <img width="100%" src="<?php echo esc_url(get_theme_mod('meeting_process_setting', get_template_directory_uri() . '/images/slides/slider2.jpg')); ?>" alt="">
    <div class="wedding_post">
        <div class="container">
            <h2 class="title"><?php echo esc_attr_e(get_theme_mod('meeting_posts_title', __( '会议案例', 'deeplove' ))); ?></h2>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="blog-item post1">
                        <a href="<?php echo esc_attr_e(get_theme_mod('meeting_post1_link', __('#', 'deeplove'))); ?>">
                            <div class="blog-image">
                                <img width="270" height="170"
                                     src="<?php echo esc_url(get_theme_mod('meeting_post1_image', get_template_directory_uri() . '/images/bloghome4.jpg')); ?> ">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="blog-item post2">
                        <a href="<?php echo esc_attr_e(get_theme_mod('meeting_post2_link', __('#', 'deeplove'))); ?>">
                            <div class="blog-image">
                                <img width="270" height="170"
                                     src="<?php echo esc_url(get_theme_mod('meeting_post2_image', get_template_directory_uri() . '/images/bloghome3.jpg')); ?>">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="blog-item post3">
                        <a href="<?php echo esc_attr_e(get_theme_mod('meeting_post3_link', __('#', 'deeplove'))); ?>">
                            <div class="blog-image">
                                <img width="270" height="170"
                                     src="<?php echo esc_url(get_theme_mod('meeting_post3_image', get_template_directory_uri() . '/images/bloghome2.jpg')); ?>">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="blog-item post4">
                        <a href="<?php echo esc_attr_e(get_theme_mod('meeting_post4_link', __('#', 'deeplove'))); ?>">
                            <div class="blog-image">
                                <img width="270" height="170"
                                     src="<?php echo esc_url(get_theme_mod('meeting_post4_image', get_template_directory_uri() . '/images/bloghome1.jpg')); ?>">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="blog-item post5">
                        <a href="<?php echo esc_attr_e(get_theme_mod('meeting_post5_link', __('#', 'deeplove'))); ?>">
                            <div class="blog-image">
                                <img width="270" height="170"
                                     src="<?php echo esc_url(get_theme_mod('meeting_post5_image', get_template_directory_uri() . '/images/bloghome4.jpg')); ?> ">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="blog-item post6">
                        <a href="<?php echo esc_attr_e(get_theme_mod('meeting_post6_link', __('#', 'deeplove'))); ?>">
                            <div class="blog-image">
                                <img width="270" height="170"
                                     src="<?php echo esc_url(get_theme_mod('meeting_post6_image', get_template_directory_uri() . '/images/bloghome3.jpg')); ?>">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="blog-item post7">
                        <a href="<?php echo esc_attr_e(get_theme_mod('meeting_post7_link', __('#', 'deeplove'))); ?>">
                            <div class="blog-image">
                                <img width="270" height="170"
                                     src="<?php echo esc_url(get_theme_mod('meeting_post7_image', get_template_directory_uri() . '/images/bloghome2.jpg')); ?>">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="blog-item post8">
                        <a href="<?php echo esc_attr_e(get_theme_mod('meeting_post8_link', __('#', 'deeplove'))); ?>">
                            <div class="blog-image">
                                <img width="270" height="170"
                                     src="<?php echo esc_url(get_theme_mod('meeting_post8_image', get_template_directory_uri() . '/images/bloghome1.jpg')); ?>">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
<?php get_footer();
get_template_part('template_inc/count', 'down-js');?>
