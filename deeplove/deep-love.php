<?php
    function deeplove_render_homepage() { ?>

    <div id="deeplove-jumbotron">

        <div id="deeplove-slider" class="hero">

            <div id="slide1" data-thumb="<?php echo esc_url( get_theme_mod('featured_image1', get_template_directory_uri() . '/images/slides/slider1.jpg' ) ); ?>" data-src="<?php echo esc_url( get_theme_mod( 'featured_image1', get_template_directory_uri() . '/images/slides/slider1.jpg' ) ); ?>"></div>

            <div id="slide2" data-thumb="<?php echo esc_url(get_theme_mod('featured_image2', get_template_directory_uri() . '/images/slides/slider2.jpg')); ?>" data-src="<?php echo esc_url(get_theme_mod('featured_image2', get_template_directory_uri() . '/images/slides/slider2.jpg')); ?>"></div>

            <div id="slide3" data-thumb="<?php echo esc_url(get_theme_mod('featured_image3', get_template_directory_uri() . '/images/slides/slide3.jpg')); ?>" data-src="<?php echo esc_url(get_theme_mod('featured_image2', get_template_directory_uri() . '/images/slides/slider2.jpg')); ?>"></div>
        </div>

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
    </div>

    <div class="clear"></div>

<?php
}

add_action( 'deeplove_homepage', 'deeplove_render_homepage' );
