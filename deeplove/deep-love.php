<?php
    function deeplove_render_homepage() { ?>

    <div id="deeplove-jumbotron">

        <div id="deeplove-slider" class="hero">

            <div id="slide1" data-thumb="<?php echo esc_url( get_theme_mod('slide_image1', get_template_directory_uri() . '/images/slides/slider1.jpg' ) ); ?>" data-src="<?php echo esc_url( get_theme_mod( 'slide_image1', get_template_directory_uri() . '/images/slides/slider1.jpg' ) ); ?>"></div>

            <div id="slide2" data-thumb="<?php echo esc_url(get_theme_mod('slide_image2', get_template_directory_uri() . '/images/slides/slider2.jpg')); ?>" data-src="<?php echo esc_url(get_theme_mod('slide_image2', get_template_directory_uri() . '/images/slides/slider2.jpg')); ?>"></div>

            <div id="slide3" data-thumb="<?php echo esc_url(get_theme_mod('slide_image3', get_template_directory_uri() . '/images/slides/slider3.jpg')); ?>" data-src="<?php echo esc_url(get_theme_mod('slide_image3', get_template_directory_uri() . '/images/slides/slider3.jpg')); ?>"></div>
        </div>

    </div>

        <div class="clear"></div>

        <div id="office-intro">
            <div class="container">
                <h4 class="title"><?php echo esc_attr_e(get_theme_mod('office_intro_title', __('office introduction title', 'deeplove')));?></h4>

                <p class="detail"><?php echo esc_attr_e(get_theme_mod('office_intro_detail', __('office introduction detail', 'deeplove'))); ?></p>
            </div>
        </div>

        <div id="PostZone1">
            <div class="container">
                <div class="row">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="dlintroduct">
                                    <h3> WEDDING DECOR</h3>
                                    <div class="dlintroduct-img">
                                        <a href="" target=""><img src="<?php echo esc_url(get_template_directory_uri().'/images/introduct1.jpg'); ?> " alt="deeplove"></a>
                                    </div>
                                    <p>
                                        Thank you for choosing Cosmo Theme and purchasing one of our Premium WordPress Themes. Your choice is highly appreciated!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="dlintroduct">
                                    <h3> BRIDE &amp; GROOM</h3>
                                    <div class="dlintroduct-img">
                                        <a href="" target=""><img src="<?php echo esc_url(get_template_directory_uri().'/images/introduct2.jpg'); ?> " alt="deeplove"></a>
                                    </div>
                                    <p>
                                        Thank you for choosing Cosmo Theme and purchasing one of our Premium WordPress Themes. Your choice is highly appreciated!            </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="dlintroduct">
                                    <h3> THE PROPOSE</h3>
                                    <div class="dlintroduct-img">
                                        <a href="" target=""><img src="<?php echo esc_url(get_template_directory_uri().'/images/introduct3.jpg'); ?> " alt="deeplove"></a>
                                    </div>
                                    <p>
                                        Thank you for choosing Cosmo Theme and purchasing one of our Premium WordPress Themes. Your choice is highly appreciated!            </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
}

add_action( 'deeplove_homepage', 'deeplove_render_homepage' );
