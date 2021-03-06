<?php
function deeplove_render_homepage()
{
    get_template_part('template_inc/slides', 'home');
    get_template_part('template_inc/count', 'down'); ?>
    <div id="office">
        <div class="container">
            <h4 class="title"><?php echo esc_attr_e(get_theme_mod('office_title', __('office introduction title', 'deeplove')));?></h4>

            <p class="detail"><?php echo esc_attr_e(get_theme_mod('office_detail', __('office introduction detail', 'deeplove'))); ?></p>
        </div>
    </div>

    <?php get_template_part('template_inc/post', 'zone1'); ?>

    <div id="PostZone2">
        <div class="portfolio-content" data-option-column="3">
            <div
                class="element portfolio post1"
                style="transform: translate3d(0px, 0px, 0px);">
                <a class="post1"
                   href="<?php echo esc_attr_e(get_theme_mod('PostZone2_post1_link', __('#', 'deeplove'))); ?>">
                    <div class="portfolio-item portfolio-padding">
                        <div class="item-image">
                            <img width="640" height="378"
                                 src="<?php echo esc_url(get_theme_mod('PostZone2_post1_image', get_template_directory_uri() . '/images/portfolio6.jpg')); ?>"
                                 class="attachment-full size-full"
                                 style="top: 0px; left: -95px; width: 640px; height: 378px;"></div>
                        <div class="tzitem-content" style="top: 137px;">
                            <i class="fa fa-heart-o tzicon"></i>

                            <h3><?php echo esc_attr_e(get_theme_mod('PostZone2_post1_title', __('PostZone2 post1 title', 'deeplove')));?></h3>

                            <div class="tzmeta">
                                <span><?php echo esc_attr_e(get_theme_mod('PostZone2_post1_date', __('PostZone2 post1 date', 'deeplove')));?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div
                class="element portfolio post2"
                style="transform: translate3d(450px, 0px, 0px);">
                <a class="post2"
                   href="<?php echo esc_attr_e(get_theme_mod('PostZone2_post2_link', __('#', 'deeplove'))); ?>">
                    <div class="portfolio-item portfolio-padding">
                        <div class="item-image">
                            <img width="640" height="378"
                                 src="<?php echo esc_url(get_theme_mod('PostZone2_post2_image', get_template_directory_uri() . '/images/portfolio5.jpg')); ?>"
                                 class="attachment-full size-full"
                                 style="top: 0px; left: -95px; width: 640px; height: 378px;"></div>
                        <div class="tzitem-content" style="top: 137px;">
                            <i class="fa fa-heart-o tzicon"></i>

                            <h3><?php echo esc_attr_e(get_theme_mod('PostZone2_post2_title', __('PostZone2 post2 title', 'deeplove')));?></h3>

                            <div
                                class="tzmeta">
                                <span><?php echo esc_attr_e(get_theme_mod('PostZone2_post2_date', __('PostZone2 post2 date', 'deeplove')));?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div
                class="element portfolio post3"
                style="transform: translate3d(0px, 378px, 0px);">
                <a class="post3"
                   href="<?php echo esc_attr_e(get_theme_mod('PostZone2_post3_link', __('#', 'deeplove'))); ?>">
                    <div class="portfolio-item portfolio-padding">
                        <div class="item-image">
                            <img width="640" height="378"
                                 src="<?php echo esc_url(get_theme_mod('PostZone2_post3_image', get_template_directory_uri() . '/images/portfolio4.jpg')); ?>"
                                 class="attachment-full size-full"
                                 style="top: 0px; left: -95px; width: 640px; height: 378px;"></div>
                        <div class="tzitem-content" style="top: 137px;">
                            <i class="fa fa-heart-o tzicon"></i>

                            <h3><?php echo esc_attr_e(get_theme_mod('PostZone2_post3_title', __('PostZone2 post3 title', 'deeplove')));?></h3>

                            <div class="tzmeta">
                                <span><?php echo esc_attr_e(get_theme_mod('PostZone2_post3_date', __('PostZone2 post3 date', 'deeplove')));?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div
                class="element portfolio post4"
                style="transform: translate3d(450px, 378px, 0px);">
                <a class="post4"
                   href="<?php echo esc_attr_e(get_theme_mod('PostZone2_post4_link', __('#', 'deeplove'))); ?>">
                    <div class="portfolio-item portfolio-padding">
                        <div class="item-image">
                            <img width="640" height="378"
                                 src="<?php echo esc_url(get_theme_mod('PostZone2_post4_image', get_template_directory_uri() . '/images/portfolio3.jpg')); ?>"
                                 class="attachment-full size-full"
                                 style="top: 0px; left: -95px; width: 640px; height: 378px;"></div>
                        <div class="tzitem-content" style="top: 137px;">
                            <i class="fa fa-heart-o tzicon"></i>

                            <h3><?php echo esc_attr_e(get_theme_mod('PostZone2_post4_title', __('PostZone2 post4 title', 'deeplove')));?></h3>

                            <div class="tzmeta">
                                <span><?php echo esc_attr_e(get_theme_mod('PostZone2_post4_date', __('PostZone2 post4 date', 'deeplove')));?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div
                class="element portfolio post5"
                style="transform: translate3d(0px, 756px, 0px);">
                <a class="post5"
                   href="<?php echo esc_attr_e(get_theme_mod('PostZone2_post5_link', __('#', 'deeplove'))); ?>">
                    <div class="portfolio-item portfolio-padding">
                        <div class="item-image">
                            <img width="640" height="378"
                                 src="<?php echo esc_url(get_theme_mod('PostZone2_post5_image', get_template_directory_uri() . '/images/portfolio2.jpg')); ?>"
                                 class="attachment-full size-full"
                                 style="top: 0px; left: -95px; width: 640px; height: 378px;"></div>
                        <div class="tzitem-content" style="top: 137px;">
                            <i class="fa fa-heart-o tzicon"></i>

                            <h3><?php echo esc_attr_e(get_theme_mod('PostZone2_post5_title', __('PostZone2 post5 title', 'deeplove')));?></h3>

                            <div class="tzmeta">
                                <span><?php echo esc_attr_e(get_theme_mod('PostZone2_post5_date', __('PostZone2 post5 date', 'deeplove')));?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div
                class="element portfolio post6"
                style="transform: translate3d(450px, 756px, 0px);">
                <a class="post6"
                   href="<?php echo esc_attr_e(get_theme_mod('PostZone2_post6_link', __('#', 'deeplove'))); ?>">
                    <div class="portfolio-item portfolio-padding">
                        <div class="item-image">
                            <img width="640" height="378"
                                 src="<?php echo esc_url(get_theme_mod('PostZone2_post6_image', get_template_directory_uri() . '/images/portfolio1.jpg')); ?>"
                                 class="attachment-full size-full"
                                 style="top: 0px; left: -95px; width: 640px; height: 378px;"></div>
                        <div class="tzitem-content" style="top: 137px;">
                            <i class="fa fa-heart-o tzicon"></i>

                            <h3><?php echo esc_attr_e(get_theme_mod('PostZone2_post6_title', __('PostZone2 post6 title', 'deeplove')));?></h3>

                            <div class="tzmeta">
                                <span><?php echo esc_attr_e(get_theme_mod('PostZone2_post6_date', __('PostZone2 post6 date', 'deeplove')));?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div id="PostZone3">
        <div class="container">
            <h2 class="title"><?php echo esc_attr_e(get_theme_mod('PostZone3_Title', __('PostZone3 title', 'deeplove'))); ?></h2>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="blog-item post1">
                        <a href="<?php echo esc_attr_e(get_theme_mod('PostZone3_post1_link', __('#', 'deeplove'))); ?>">
                            <div class="blog-image">
                                <img width="270" height="170"
                                     src="<?php echo esc_url(get_theme_mod('PostZone3_post1_image', get_template_directory_uri() . '/images/bloghome4.jpg')); ?> ">
                            </div>
                            <div class="blog-description">
                                <h4><?php echo esc_attr_e(get_theme_mod('PostZone3_post1_title', __('PostZone3 post1 title', 'deeplove')));?></h4>

                                <p><?php echo esc_attr_e(get_theme_mod('PostZone3_post1_detail', __('PostZone3 post1 detail', 'deeplove')));?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="blog-item post2">
                        <a href="<?php echo esc_attr_e(get_theme_mod('PostZone3_post2_link', __('#', 'deeplove'))); ?>">
                            <div class="blog-image">
                                <img width="270" height="170"
                                     src="<?php echo esc_url(get_theme_mod('PostZone3_post2_image', get_template_directory_uri() . '/images/bloghome3.jpg')); ?>">
                            </div>
                            <div class="blog-description">
                                <h4><?php echo esc_attr_e(get_theme_mod('PostZone3_post2_title', __('PostZone3 post2 title', 'deeplove')));?></h4>

                                <p><?php echo esc_attr_e(get_theme_mod('PostZone3_post2_detail', __('PostZone3 post2 detail', 'deeplove')));?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="blog-item post3">
                        <a href="<?php echo esc_attr_e(get_theme_mod('PostZone3_post3_link', __('#', 'deeplove'))); ?>">
                            <div class="blog-image">
                                <img width="270" height="170"
                                     src="<?php echo esc_url(get_theme_mod('PostZone3_post3_image', get_template_directory_uri() . '/images/bloghome2.jpg')); ?>">
                            </div>
                            <div class="blog-description">
                                <h4><?php echo esc_attr_e(get_theme_mod('PostZone3_post3_title', __('PostZone3 post3 title', 'deeplove')));?></h4>

                                <p><?php echo esc_attr_e(get_theme_mod('PostZone3_post3_detail', __('PostZone3 post3 detail', 'deeplove')));?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="blog-item post4">
                        <a href="<?php echo esc_attr_e(get_theme_mod('PostZone3_post4_link', __('#', 'deeplove'))); ?>">
                            <div class="blog-image">
                                <img width="270" height="170"
                                     src="<?php echo esc_url(get_theme_mod('PostZone3_post4_image', get_template_directory_uri() . '/images/bloghome1.jpg')); ?>">
                            </div>
                            <div class="blog-description">
                                <h4><?php echo esc_attr_e(get_theme_mod('PostZone3_post4_title', __('PostZone3 post4 title', 'deeplove')));?></h4>

                                <p><?php echo esc_attr_e(get_theme_mod('PostZone3_post4_detail', __('PostZone3 post4 detail', 'deeplove')));?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

add_action('deeplove_homepage', 'deeplove_render_homepage');

