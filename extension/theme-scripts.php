<?php
add_action('init', 'deeplove_register_theme_scripts');
function deeplove_register_theme_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php') {

        if (!is_admin()) {
            add_action('wp_enqueue_scripts', 'deeplove_register_front_end_styles');
            add_action('wp_enqueue_scripts', 'deeplove_register_front_end_scripts');
        }
    }
}

//Register Front-End Styles
function deeplove_register_front_end_styles()
{

        wp_enqueue_style('bootstrap-css', CSS_PATH . 'bootstrap.min.css', false );
        wp_enqueue_style('awesome', THEME_PATH . '/fonts/css/font-awesome.min.css', false );
        wp_enqueue_style('animate', THEME_PATH . '/css/animate.css', false );
        wp_enqueue_style('camera', THEME_PATH . '/css/camera.css', false );
        wp_enqueue_style('style', THEME_PATH . '/style.css', false );
        wp_enqueue_style('flexslider', THEME_PATH . '/css/flexslider.css', false );
        wp_enqueue_style('js_composer', CSS_PATH . '/js_composer.min.css', false );


}

//Register Front-End Scripts
function deeplove_register_front_end_scripts()
{
    wp_enqueue_script('jquery');

    wp_deregister_script('bootstrap.min');
    wp_register_script('bootstrap.min', THEME_PATH . '/js/bootstrap.min.js', false, '3.1.1', $in_footer=true);
    wp_enqueue_script('bootstrap.min');


    wp_deregister_script('countdown');
    wp_register_script('countdown', THEME_PATH . '/js/countdown.js', false, false, $in_footer=true);
    wp_enqueue_script('countdown');

    wp_deregister_script('jquery-isotope');
    wp_register_script('jquery-isotope', THEME_PATH . '/js/jquery.isotope.min.js', false, false, $in_footer=true);
    wp_enqueue_script('jquery-isotope');

    wp_deregister_script('custom-portfolio');
    wp_register_script('custom-portfolio', THEME_PATH . '/js/custom-portfolio.js', false, false, $in_footer=true);
    wp_enqueue_script('custom-portfolio');

    wp_deregister_script('flexslider');
    wp_register_script('flexslider', THEME_PATH . '/js/jquery.flexslider.js', false,false, $in_footer=true);
    wp_enqueue_script('flexslider');

    wp_deregister_script('off-canvas');
    wp_register_script('off-canvas', THEME_PATH . '/js/off-canvas.js', false,false, $in_footer=true);
    wp_enqueue_script('off-canvas');

    wp_deregister_script('easing');
    wp_register_script('easing', THEME_PATH . '/js/easing.js', false, false, $in_footer=true);
    wp_enqueue_script('easing');

    wp_deregister_script('camera');
    wp_register_script('camera', THEME_PATH . '/js/camera.js', false, false, $in_footer=true);
    wp_enqueue_script('camera');

    wp_deregister_script('custom');
    wp_register_script('custom', THEME_PATH . '/js/custom.js', false, false, $in_footer=true);
    wp_enqueue_script('custom');
}

?>
