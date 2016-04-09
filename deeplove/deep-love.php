<?php
    function deeplove_render_homepage() { ?>

    <div id="deeplove-jumbotron">

        <div id="deeplove-slider" class="hero">

            <div id="slide1" data-thumb="<?php echo esc_url( get_theme_mod('featured_image1', get_template_directory_uri() . '/images/slides/slider1.jpg' ) ); ?>" data-src="<?php echo esc_url( get_theme_mod( 'featured_image1', get_template_directory_uri() . '/images/slides/slider1.jpg' ) ); ?>"></div>

            <div id="slide2" data-thumb="<?php echo esc_url(get_theme_mod('featured_image2', get_template_directory_uri() . '/images/slides/slider2.jpg')); ?>" data-src="<?php echo esc_url(get_theme_mod('featured_image2', get_template_directory_uri() . '/images/slides/slider2.jpg')); ?>"></div>

            <div id="slide3" data-thumb="<?php echo esc_url(get_theme_mod('featured_image3', get_template_directory_uri() . '/images/slides/slider3.jpg')); ?>" data-src="<?php echo esc_url(get_theme_mod('featured_image2', get_template_directory_uri() . '/images/slides/slider3.jpg')); ?>"></div>
        </div>

    </div>

    <div class="clear"></div>

<?php
}

add_action( 'deeplove_homepage', 'deeplove_render_homepage' );