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

    <meta name="keywords" content="包头婚庆，包头婚礼，塔米婚庆，塔米婚礼，包头塔米婚礼策划，包头婚礼策划，婚礼策划，包头高端婚礼策划，私人定制婚礼，包头婚礼策划工作室，包头婚庆礼仪，包头最好的婚庆公司，包头婚纱摄影，包头求婚策划，包头婚宴酒店，包头酒店，香格里拉，婚宴酒店，跟妆，包头婚庆，包头婚庆，包头婚庆" />
    <?php wp_head(); ?>
</head>
<body id="bd" <?php body_class(); ?>>
    <div id="tzloadding">
       <img class="loadding_img" src="<?php echo IMG_PATH .'loadding.GIF' ?>">
    </div>
    <?php get_template_part('template_inc/social', 'qq'); ?>
    <div class="deeplove_boxed">
        </div>
