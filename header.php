<?php
/*
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url(JS_PATH); ?>html5shiv.js"></script>
    <script src="<?php echo esc_url(JS_PATH); ?>respond.min.js"></script>
    <![endif]-->
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
                "<?php echo esc_url(get_theme_mod('slide1_image', get_template_directory_uri() . '/images/slides/slider1.jpg')); ?>",
                "<?php echo esc_url(get_theme_mod('slide1_image', get_template_directory_uri() . '/images/slides/slider2.jpg')); ?>",
                "<?php echo esc_url(get_theme_mod('slide1_image', get_template_directory_uri() . '/images/slides/slider3.jpg')); ?>"
            )
        </script>
    </div>

    <?php wp_head(); ?>
</head>
<body id="bd" <?php body_class(); ?>>
    <div id="tzloadding">
       <img class="loadding_img" src="<?php echo IMG_PATH .'loadding.GIF' ?>">
    </div>
    <?php get_template_part('template_inc/social', 'qq'); ?>
    <div class="deeplove_boxed">
        </div>
