<?php
function deeplove_render_homepage()
{ ?>

    <div id="deeplove-slider">
        <div
            data-thumb="<?php echo esc_url(get_theme_mod('slide1_image', get_template_directory_uri() . '/images/slides/slider1.jpg')); ?>"
            data-src="<?php echo esc_url(get_theme_mod('slide1_image', get_template_directory_uri() . '/images/slides/slider1.jpg')); ?>"></div>
        <div
            data-thumb="<?php echo esc_url(get_theme_mod('slide2_image', get_template_directory_uri() . '/images/slides/slider2.jpg')); ?>"
            data-src="<?php echo esc_url(get_theme_mod('slide2_image', get_template_directory_uri() . '/images/slides/slider2.jpg')); ?>"></div>
        <div
            data-thumb="<?php echo esc_url(get_theme_mod('slide3_image', get_template_directory_uri() . '/images/slides/slider3.jpg')); ?>"
            data-src="<?php echo esc_url(get_theme_mod('slide3_image', get_template_directory_uri() . '/images/slides/slider3.jpg')); ?>"></div>
    </div>

    <div class="clear"></div>

    <div id="office">
        <div class="container">
            <h4 class="title"><?php echo esc_attr_e(get_theme_mod('office_title', __('office introduction title', 'deeplove')));?></h4>

            <p class="detail"><?php echo esc_attr_e(get_theme_mod('office_detail', __('office introduction detail', 'deeplove'))); ?></p>
        </div>
    </div>

    <div id="PostZone1">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                    <div class="vc_column-inner">
                        <div class="dlintroduct post1">
                            <h3><?php echo esc_attr_e(get_theme_mod('PostZone1_post1_title', __('PostZone1 post1 title', 'deeplove')));?></h3>

                            <div class="dlintroduct-img">
                                <a href=""><img
                                        src="<?php echo esc_url(get_theme_mod('PostZone1_post1_image', get_template_directory_uri() . '/images/introduct1.jpg')); ?> "></a>
                            </div>
                            <p><?php echo esc_attr_e(get_theme_mod('PostZone1_post1_detail', __('PostZone1 post1 detail', 'deeplove'))); ?></p>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                    <div class="vc_column-inner">
                        <div class="dlintroduct post2">
                            <h3><?php echo esc_attr_e(get_theme_mod('PostZone1_post2_title', __('PostZone1 post2 title', 'deeplove')));?></h3>

                            <div class="dlintroduct-img">
                                <a href=""><img
                                        src="<?php echo esc_url(get_theme_mod('PostZone1_post2_image', get_template_directory_uri() . '/images/introduct2.jpg')); ?> "></a>
                            </div>
                            <p><?php echo esc_attr_e(get_theme_mod('PostZone1_post2_detail', __('PostZone1 post2 detail', 'deeplove'))); ?></p>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                    <div class="vc_column-inner">
                        <div class="dlintroduct post3">
                            <h3><?php echo esc_attr_e(get_theme_mod('PostZone1_post3_title', __('PostZone1 post3 title', 'deeplove')));?></h3>

                            <div class="dlintroduct-img">
                                <a href=""><img
                                        src="<?php echo esc_url(get_theme_mod('PostZone1_post3_image', get_template_directory_uri() . '/images/introduct3.jpg')); ?> "></a>
                            </div>
                            <p><?php echo esc_attr_e(get_theme_mod('PostZone1_post3_detail', __('PostZone1 post3 detail', 'deeplove'))); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="PostZone2" class="vc_row wpb_row vc_row-fluid">
        <div class="nocontainer">
            <div class="tz-portfolio-content isotope" data-option-column="3"
                 style="position: relative; overflow: hidden; height: 1134px;">
                <div
                    class="element portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-category-everline portfolio-tags-newyork portfolio-tags-usa isotope-item"
                    style="width: 450px; position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                    <div class="portfolio-item portfolio-padding">
                        <div class="item-image">
                            <img width="640" height="378"
                                 src="<?php echo esc_url(get_theme_mod('PostZone2_post1_image', get_template_directory_uri() . '/images/portfolio6.jpg')); ?>"
                                 class="attachment-full size-full wp-post-image" alt="portfolio6"
                                 srcset="<?php echo esc_url(get_theme_mod('PostZone2_post1_image', get_template_directory_uri() . '/images/portfolio6-300x177.jpg')); ?> 300w, <?php echo esc_url(get_theme_mod('PostZone2_post1_image', get_template_directory_uri() . '/images/portfolio6.jpg')); ?> 640w"
                                 sizes="(max-width: 640px) 100vw, 640px"
                                 style="top: 0px; left: -95px; width: 640px; height: 378px;"></div>
                        <div class="tzitem-content" style="top: 137px;">
                            <i class="fa fa-heart-o tzicon"></i>

                            <h3 class="post1"><?php echo esc_attr_e(get_theme_mod('PostZone2_post1_title', __('PostZone2 post1 title', 'deeplove')));?>
                                Praesent&amp; orci</h3>

                            <div class="tzmeta">
                                <span
                                    class="post1"><?php echo esc_attr_e(get_theme_mod('PostZone2_post1_date', __('PostZone2 post1 date', 'deeplove')));?>
                                    February 5, 2015 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="element portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-category-everline portfolio-tags-newyork portfolio-tags-usa isotope-item"
                    style="width: 450px; position: absolute; left: 0px; top: 0px; transform: translate3d(450px, 0px, 0px);">
                    <div class="portfolio-item portfolio-padding">
                        <div class="item-image">
                            <img width="640" height="378"
                                 src="<?php echo esc_url(get_theme_mod('PostZone2_post2_image', get_template_directory_uri() . '/images/portfolio5.jpg')); ?>"
                                 class="attachment-full size-full wp-post-image" alt="portfolio5"
                                 srcset="<?php echo esc_url(get_theme_mod('PostZone2_post2_image', get_template_directory_uri() . '/images/portfolio5-300x177.jpg')); ?> 300w, <?php echo esc_url(get_theme_mod('PostZone2_post2_image', get_template_directory_uri() . '/images/portfolio5.jpg')); ?> 640w"
                                 sizes="(max-width: 640px) 100vw, 640px"
                                 style="top: 0px; left: -95px; width: 640px; height: 378px;"></div>
                        <div class="tzitem-content" style="top: 137px;">
                            <i class="fa fa-heart-o tzicon"></i>

                            <h3 class="post2"><?php echo esc_attr_e(get_theme_mod('PostZone2_post2_title', __('PostZone2 post2 title', 'deeplove')));?>
                                Efficitur &amp; lacus</h3>

                            <div class="tzmeta"><span
                                    class="post2"><?php echo esc_attr_e(get_theme_mod('PostZone2_post1_date', __('PostZone2 post2 date', 'deeplove')));?>
                                    February 5, 2015</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="element portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-category-everline portfolio-tags-newyork portfolio-tags-usa isotope-item"
                    style="width: 450px; position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 378px, 0px);">
                    <div class="portfolio-item portfolio-padding">
                        <div class="item-image">
                            <img width="640" height="378"
                                 src="<?php echo esc_url(get_theme_mod('PostZone2_post3_image', get_template_directory_uri() . '/images/portfolio4.jpg')); ?>"
                                 class="attachment-full size-full wp-post-image" alt="portfolio4"
                                 srcset="<?php echo esc_url(get_theme_mod('PostZone2_post3_image', get_template_directory_uri() . '/images/portfolio4-300x177.jpg')); ?> 300w, <?php echo esc_url(get_theme_mod('PostZone2_post3_image', get_template_directory_uri() . '/images/portfolio4.jpg')); ?> 640w"
                                 sizes="(max-width: 640px) 100vw, 640px"
                                 style="top: 0px; left: -95px; width: 640px; height: 378px;"></div>
                        <div class="tzitem-content" style="top: 137px;">
                            <i class="fa fa-heart-o tzicon"></i>

                            <h3 class="post3"><?php echo esc_attr_e(get_theme_mod('PostZone2_post2_title', __('PostZone2 post3 title', 'deeplove')));?>
                                Donec&amp; lacus</h3>

                            <div class="tzmeta">
                                <span
                                    class="post3"><?php echo esc_attr_e(get_theme_mod('PostZone2_post2_date class="post3" ', __('PostZone2 post3 date', 'deeplove')));?>
                                    February 5, 2015</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="element portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-category-everline portfolio-tags-newyork portfolio-tags-usa isotope-item"
                    style="width: 450px; position: absolute; left: 0px; top: 0px; transform: translate3d(450px, 378px, 0px);">
                    <div class="portfolio-item portfolio-padding">
                        <div class="item-image">
                            <img width="640" height="378"
                                 src="<?php echo esc_url(get_theme_mod('PostZone2_post4_image', get_template_directory_uri() . '/images/portfolio3.jpg')); ?>"
                                 class="attachment-full size-full wp-post-image" alt="portfolio3"
                                 srcset="<?php echo esc_url(get_theme_mod('PostZone2_post4_image', get_template_directory_uri() . '/images/portfolio3-300x177.jpg')); ?> 300w, <?php echo esc_url(get_theme_mod('PostZone2_post4_image', get_template_directory_uri() . '/images/portfolio3.jpg')); ?> 640w"
                                 sizes="(max-width: 640px) 100vw, 640px"
                                 style="top: 0px; left: -95px; width: 640px; height: 378px;"></div>
                        <div class="tzitem-content" style="top: 137px;">
                            <i class="fa fa-heart-o tzicon"></i>

                            <h3 class="post4"><?php echo esc_attr_e(get_theme_mod('PostZone2_post4_title', __('PostZone2 post4 title', 'deeplove')));?>
                                Reader&amp; Mauris</h3>

                            <div class="tzmeta">
                                <span
                                    class="post4"><?php echo esc_attr_e(get_theme_mod('PostZone2_post4_date', __('PostZone2 post4 date', 'deeplove')));?>
                                    February 5, 2015 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="element portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-category-everline portfolio-tags-newyork portfolio-tags-usa isotope-item"
                    style="width: 450px; position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 756px, 0px);">
                    <div class="portfolio-item portfolio-padding">
                        <div class="item-image">
                            <img width="640" height="378"
                                 src="<?php echo esc_url(get_theme_mod('PostZone2_post5_image', get_template_directory_uri() . '/images/portfolio2.jpg')); ?>"
                                 class="attachment-full size-full wp-post-image" alt="portfolio2"
                                 srcset="<?php echo esc_url(get_theme_mod('PostZone2_post5_image', get_template_directory_uri() . '/images/portfolio2-300x177.jpg')); ?> 300w, <?php echo esc_url(get_theme_mod('PostZone2_post5_image', get_template_directory_uri() . '/images/portfolio2.jpg')); ?> 640w"
                                 sizes="(max-width: 640px) 100vw, 640px"
                                 style="top: 0px; left: -95px; width: 640px; height: 378px;"></div>
                        <div class="tzitem-content" style="top: 137px;">
                            <i class="fa fa-heart-o tzicon"></i>

                            <h3 class="post5"><?php echo esc_attr_e(get_theme_mod('PostZone2_post5_title', __('PostZone2 post5 title', 'deeplove')));?>
                                Aliquam&amp; Miley</h3>

                            <div class="tzmeta">
                                <span
                                    class="post5"><?php echo esc_attr_e(get_theme_mod('PostZone2_post5_date', __('PostZone2 post5 date', 'deeplove')));?>
                                    February 5, 2015 /</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="element portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-category-everline portfolio-tags-newyork portfolio-tags-usa isotope-item"
                    style="width: 450px; position: absolute; left: 0px; top: 0px; transform: translate3d(450px, 756px, 0px);">
                    <div class="portfolio-item portfolio-padding">
                        <div class="item-image">
                            <img width="640" height="378"
                                 src="<?php echo esc_url(get_theme_mod('PostZone2_post6_image', get_template_directory_uri() . '/images/portfolio1.jpg')); ?>"
                                 class="attachment-full size-full wp-post-image" alt="portfolio1"
                                 srcset="<?php echo esc_url(get_theme_mod('PostZone2_post6_image', get_template_directory_uri() . '/images/portfolio1-300x177.jpg')); ?> 300w, <?php echo esc_url(get_theme_mod('PostZone2_post6_image', get_template_directory_uri() . '/images/portfolio1.jpg')); ?> 640w"
                                 sizes="(max-width: 640px) 100vw, 640px"
                                 style="top: 0px; left: -95px; width: 640px; height: 378px;"></div>
                        <div class="tzitem-content" style="top: 137px;">
                            <i class="fa fa-heart-o tzicon"></i>

                            <h3 class="post6"><?php echo esc_attr_e(get_theme_mod('PostZone2_post6_title', __('PostZone2 post6 title', 'deeplove')));?>
                                James&amp; Miley</h3>

                            <div class="tzmeta">
                                <span
                                    class="post6"><?php echo esc_attr_e(get_theme_mod('PostZone2_post6_date', __('PostZone2 post6 date', 'deeplove')));?>
                                    February 5, 2015</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="PostZone3">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="container-custom">
                                <h2 class="title"><?php echo esc_attr_e(get_theme_mod('PostZone3_title', __('PostZone3 title', 'deeplove'))); ?></h2>

                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="blog-item ">
                                            <div class="blog-image">
                                                <a href="#"><img width="270" height="170"
                                                                 src="<?php echo esc_url(get_theme_mod('PostZone3_post1_image', get_template_directory_uri() . '/images/bloghome4.jpg')); ?> "></a>
                                            </div>
                                            <div class="blog-description">
                                                <h3 class="post1"><?php echo esc_attr_e(get_theme_mod('PostZone3_post1_title', __('PostZone3 post1 title', 'deeplove')));?>
                                                    facilisis vitae</h3>

                                                <p class="post1"><?php echo esc_attr_e(get_theme_mod('PostZone3_post1_detail', __('PostZone3 post1 detail', 'deeplove')));?>
                                                    Thank you for choosing CosmoThemes and purchasing one of our Premium
                                                    WordPress Themes your choice is greatly.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="blog-item ">
                                            <div class="blog-image">
                                                <a href="#"><img width="270" height="170"
                                                                 src="<?php echo esc_url(get_theme_mod('PostZone3_post2_image', get_template_directory_uri() . '/images/bloghome3.jpg')); ?>"></a>
                                            </div>
                                            <div class="blog-description">
                                                WordPress Themes your choice is greatly.</p>
                                                <h3 class="post2"><?php echo esc_attr_e(get_theme_mod('PostZone3_post2_title', __('PostZone3 post2 title', 'deeplove')));?>
                                                    viverra ipsum</h3>

                                                <p class="post2"><?php echo esc_attr_e(get_theme_mod('PostZone3_post2_detail', __('PostZone3 post2 detail', 'deeplove')));?>
                                                    Thank you for choosing CosmoThemes and purchasing one of our Premium
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="blog-item ">
                                            <div class="blog-image">
                                                <a href="#"><img width="270" height="170"
                                                                 src="<?php echo esc_url(get_theme_mod('PostZone3_post3_image', get_template_directory_uri() . '/images/bloghome2.jpg')); ?>"></a>
                                            </div>
                                            <div class="blog-description">
                                                <h3 class="post3"><?php echo esc_attr_e(get_theme_mod('PostZone3_post3_title', __('PostZone3 post3 title', 'deeplove')));?>
                                                    YOUR HONEYMOON</h3>

                                                <p class="post3"><?php echo esc_attr_e(get_theme_mod('PostZone3_post3_detail', __('PostZone3 post3 detail', 'deeplove')));?>
                                                    Thank you for choosing CosmoThemes and purchasing one of our Premium
                                                    WordPress Themes your choice is greatly.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="blog-item ">
                                            <div class="blog-image">
                                                <a href="#"><img width="270" height="170"
                                                                 src="<?php echo esc_url(get_theme_mod('PostZone3_post4_image', get_template_directory_uri() . '/images/bloghome1.jpg')); ?>"
                                                                 class="post4" </a>
                                            </div>
                                            <div class="blog-description">
                                                <h3 class="post4"><?php echo esc_attr_e(get_theme_mod('PostZone3_post4_title', __('PostZone3 post4 title', 'deeplove')));?>
                                                    PLAN YOUR TRIP</h3>

                                                <p class="post4"><?php echo esc_attr_e(get_theme_mod('PostZone3_post4_detail', __('PostZone3 post4 detail', 'deeplove')));?>
                                                    Thank you for choosing CosmoThemes and purchasing one of our Premium
                                                    WordPress Themes your choice is greatly.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

add_action('deeplove_homepage', 'deeplove_render_homepage');
