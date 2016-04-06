<?php
    function deeplove_render_homepage() { ?>

    <div id="deeplove-jumbotron">

        <div id="deeplove-slider" class="hero">

            <div id="slide1" data-thumb="<?php echo esc_url( get_theme_mod('featured_image1', get_template_directory_uri() . '/inc/images/deeplove.jpg' ) ); ?>" data-src="<?php echo esc_url( get_theme_mod( 'featured_image1', get_template_directory_uri() . '/inc/images/deeplove.jpg' ) ); ?>">

                <div class="overlay">
                    <div class="row">

                        <div class="col-sm-6 parallax">
                            <h2 class="header-text animated slideInDown slide1-header"><?php echo esc_attr( get_theme_mod( 'featured_image1_title', __( 'Welcome to deeplove', 'deeplove' )  ) ); ?></h2>

                            <?php if( get_theme_mod( 'slide1_button1_text', 'True' ) ) : ?>
                                <a href="<?php echo esc_url( get_theme_mod( 'slide1_button1_url', '#') ); ?>"
                                   class="deeplove-button primary large animated flipInX slide1_button1 delay3">
                                    <?php echo esc_attr( get_theme_mod( 'slide1_button1_text', __( 'View Features', 'deeplove' )  ) ); ?>
                                </a>
                            <?php endif; ?>

                            <?php if( get_theme_mod( 'slide1_button2_text', 'True' ) ) : ?>
                                <a href="<?php echo esc_url( get_theme_mod( 'slide1_button2_url', '#') ); ?>"
                                   class="deeplove-button default large animated flipInX slide1_button2 delay3">
                                    <?php echo esc_attr( get_theme_mod( 'slide1_button2_text', __( 'Learn More', 'deeplove' )  ) ); ?>
                                </a>
                            <?php endif; ?>

                        </div>
                        <div class="col-sm-6">

                        </div>

                    </div>
                </div>

            </div>

            <div id="slide2" data-thumb="<?php echo esc_url(get_theme_mod('featured_image2', get_template_directory_uri() . '/inc/images/deeplove2.jpg')); ?>" data-src="<?php echo esc_url(get_theme_mod('featured_image2', get_template_directory_uri() . '/inc/images/deeplove2.jpg')); ?>">

                <div class="overlay">

                    <div class="row">

                        <div class="col-sm-6 parallax">
                            <h2 class="header-text animated slideInDown slide2-header"><?php echo esc_attr( get_theme_mod( 'featured_image2_title', __( 'Welcome to deeplove', 'deeplove' )  ) ); ?></h2>

                            <?php if( get_theme_mod( 'slide2_button1_text', 'True' ) ) : ?>
                                <a href="<?php echo esc_url( get_theme_mod( 'slide2_button1_url', '#') ); ?>"
                                   class="deeplove-button primary large animated flipInX slide2_button1 delay3">
                                    <?php echo esc_attr( get_theme_mod( 'slide2_button1_text', __( 'View Features', 'deeplove' )  ) ); ?>
                                </a>
                            <?php endif; ?>

                            <?php if( get_theme_mod( 'slide2_button2_text', 'True' ) ) : ?>
                                <a href="<?php echo esc_url( get_theme_mod( 'slide2_button2_url', '#') ); ?>"
                                   class="deeplove-button default large animated flipInX slide2_button2 delay3">
                                    <?php echo esc_attr( get_theme_mod( 'slide2_button2_text', __( 'Learn More', 'deeplove' )  ) ); ?>
                                </a>
                            <?php endif; ?>

                        </div>
                        <div class="col-sm-6">

                        </div>

                    </div>
                </div>

            </div>

        </div>

        <?php if( get_theme_mod( 'overlay_bool', 'on' ) == 'on' ) : ?>
            <div id="deeplove-overlay-trigger">

                <div class="overlay-widget">
                    <div class="row">
                        <?php if (is_active_sidebar('sidebar-overlay')) : ?>
                            <?php dynamic_sidebar('sidebar-overlay'); ?>
                        <?php endif; ?>
                    </div>
                </div>

                <span class="<?php echo esc_attr( get_theme_mod( 'overlay_icon', 'fa fa-plus' ) ); ?> animated rotateIn delay3"></span>

            </div>

            <div class="slider-bottom">
                <div>
                    <span class="fa fa-chevron-down scroll-down animated slideInUp delay-long"></span>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <div class="clear"></div>

<?php
}

add_action( 'deeplove_homepage', 'deeplove_render_homepage' );
