<?php
/**
 * User: Yanmin
 */
?>
<div class="hidden">
    <script type="text/javascript">
        var images = new Array()
        function preload() {
            for (i = 0; i < preload.arguments.length; i++) {
                images[i] = new Image()
                images[i].src = preload.arguments[i]
            }
        }
        preload(
            "<?php echo esc_url(get_theme_mod('slide1_image')); ?>",
            "<?php echo esc_url(get_theme_mod('slide2_image')); ?>",
            "<?php echo esc_url(get_theme_mod('slide3_image')); ?>"
        )
    </script>
</div>
<div id="homepage-slider" style="z-index: 2" class="deeplove-slider">
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