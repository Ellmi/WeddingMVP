<?php
add_action('init', 'tzeverline_register_theme_scripts');
function tzeverline_register_theme_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php') {

        if (is_admin()) {
            add_action('admin_enqueue_scripts', 'tzeverline_register_back_end_scripts');
        }else{
            add_action('wp_enqueue_scripts', 'tzeverline_register_front_end_styles');
            add_action('wp_enqueue_scripts', 'tzeverline_register_front_end_scripts');
        }
    }
}

//Register Back-End script
function tzeverline_register_back_end_scripts(){




    wp_enqueue_style('admin-styles', THEME_PATH . '/extension/assets/css/admin-styles.css');
    wp_enqueue_style('tz-theme-option', THEME_PATH . '/extension/assets/css/tz-theme-options.css');

    wp_enqueue_media();
    wp_register_script('portfolio_meta_boxes', THEME_PATH . '/extension/assets/js/portfolio_meta_boxes.js', false, false, $in_footer=true);
    wp_enqueue_script('portfolio_meta_boxes');

    wp_register_script('portfolio_theme_option', THEME_PATH . '/extension/assets/js/portfolio_theme_option.js', false, false, $in_footer=true);
    wp_enqueue_script('portfolio_theme_option');

}

//Register Front-End Styles
function tzeverline_register_front_end_styles()
{

        wp_enqueue_style('bootstrap-css', CSS_PATH . 'bootstrap.min.css', false );
        wp_enqueue_style('awesome', THEME_PATH . '/fonts/css/font-awesome.min.css', false );
        wp_enqueue_style('Varela','http://fonts.googleapis.com/css?family=Varela', false);
        wp_enqueue_style('Rouge','http://fonts.googleapis.com/css?family=Rouge+Script', false);
        wp_enqueue_style('owl.carousel', CSS_PATH . '/owl.carousel.css', false );
        wp_enqueue_style('owl.theme', CSS_PATH . '/owl.theme.css', false );
        wp_enqueue_style('animate', THEME_PATH . '/css/animate.css', false );
        wp_enqueue_style('flexslider', THEME_PATH . '/css/flexslider.css', false );
        wp_enqueue_style('camera', THEME_PATH . '/css/camera.css', false );
        wp_enqueue_style('style', THEME_PATH . '/style.css', false );


}

//Register Front-End Scripts
function tzeverline_register_front_end_scripts()
{
    wp_enqueue_script('jquery');

    wp_deregister_script('bootstrap.min');
    wp_register_script('bootstrap.min', THEME_PATH . '/js/bootstrap.min.js', false, '3.1.1', $in_footer=true);
    wp_enqueue_script('bootstrap.min');


    wp_deregister_script('countdown');
    wp_register_script('countdown', JS_PATH . 'countdown.js', false, false, $in_footer=true);

    wp_deregister_script('jquery-isotope');
    wp_register_script('jquery-isotope', JS_PATH . 'jquery.isotope.min.js', false, false, $in_footer=true);

    wp_deregister_script('custom-portfolio');
    wp_register_script('custom-portfolio', JS_PATH . 'custom-portfolio.js', false, false, $in_footer=true);

    wp_deregister_script('jplayer');
    wp_register_script('jplayer', JS_PATH . 'jquery.jplayer.min.js', false, false, $in_footer=true);

    wp_deregister_script('playlist');
    wp_register_script('playlist', JS_PATH . 'jplayer.playlist.min.js', false, false, $in_footer=true);

    wp_deregister_script('parallax');
    wp_register_script('parallax', THEME_PATH . '/js/jquery.parallax-1.1.3.js', false, false, $in_footer=true);
    wp_enqueue_script('parallax');

    wp_deregister_script('owlcarousel');
    wp_register_script('owlcarousel', THEME_PATH . '/js/owl.carousel.js', false, false, $in_footer=true);
    wp_enqueue_script('owlcarousel');

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

    if ( is_page_template('template-portfolio.php') ):

        global $post;
        $desktop            =  get_post_meta( $post -> ID, THEME_PREFIX.'_desktop_column', true );
        $tabletportrait     =  get_post_meta( $post -> ID, THEME_PREFIX.'_tabletportrait_column', true );
        $mobilelandscape    =  get_post_meta( $post -> ID, THEME_PREFIX.'_mobilelandscape_column', true );
        $mobileportrait     =  get_post_meta( $post -> ID, THEME_PREFIX.'_mobileportrait_column', true );
        $image              =  get_post_meta( $post -> ID, THEME_PREFIX.'_porfolio_loadding', true) ;
        if ( isset ( $image ) && $image == '' ):
            $image =  THEME_PATH.'/images/load.GIF' ;
        endif;

        wp_enqueue_script('jquery-isotope');

        wp_deregister_script('infinitescroll');
        wp_register_script('infinitescroll', THEME_PATH . '/js/jquery.infinitescroll.min.min.js', false,false, $in_footer=true);
        wp_enqueue_script('infinitescroll');


        wp_deregister_script('portfolio');
        wp_register_script('portfolio', THEME_PATH . '/js/portfolio.js', false,false, $in_footer=true);
        wp_enqueue_script('portfolio');

        $variables_portfolio = array(
            'desktop'         =>    $desktop,
            'tabletportrait'  =>    $tabletportrait,
            'mobilelandscape' =>    $mobilelandscape,
            'mobileportrait'  =>    $mobileportrait,
            'image'           =>    $image
        );
        wp_localize_script( 'portfolio', 'variables_portfolio', $variables_portfolio ) ;

    endif;

    if( is_page_template('template-blog-timeline.php') ):
        wp_deregister_script('timeline');
        wp_register_script('timeline',JS_PATH .'timeline.js', false, false, $in_footer = true);
        wp_enqueue_script('timeline');

        $admin_url      = admin_url('admin-ajax.php');
        $arg_timeline   = array( 'url' => $admin_url);
        wp_localize_script('timeline', 'timeline_var', $arg_timeline);
    endif;

    if( is_page_template('template-portfolio-timeline.php') ):
        wp_deregister_script('timeline-portfolio');
        wp_register_script('timeline-portfolio',JS_PATH .'timeline-portfolio.js', false, false, $in_footer = true);
        wp_enqueue_script('timeline-portfolio');

        $admin_url = admin_url('admin-ajax.php');
        $arg_timeline   = array( 'url' => $admin_url );
        wp_localize_script('timeline-portfolio', 'timeline_var', $arg_timeline);
    endif;



}

?>
