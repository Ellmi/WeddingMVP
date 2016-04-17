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

        <div id="office-intro">
            <div class="container">
                <h4 class="title"><?php echo esc_attr_e(get_theme_mod('office_intro_title', __('office introduction title', 'deeplove')));?></h4>

                <p class="detail"><?php echo esc_attr_e(get_theme_mod('office_intro_detail', __('office introduction detail', 'deeplove'))); ?></p>
            </div>
        </div>
<?php
}

add_action( 'deeplove_homepage', 'deeplove_render_homepage' );
