<?php

/*
 *constants
 */

define('THEME_PREFIX', 'plazart');
define('THEME_NAME', 'Plazart');
define('TEXT_DOMAIN', 'Plazart');
define('THEME_VERSION', '1.0');
define('THEME_PATH', get_template_directory_uri());
define('SERVER_PATH', get_template_directory());
define( 'CSS_PATH', get_template_directory_uri().'/css/' );
define( 'JS_PATH', get_template_directory_uri().'/js/ ');
define( 'IMG_PATH', get_template_directory_uri().'/images/');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function deeplove_setup()
{
    /*
     * Enable support for Post Formats.
     * See http://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
        'image', 'video',
    ));
}

add_action('after_setup_theme', 'deeplove_setup');

load_theme_textdomain( TEXT_DOMAIN, get_template_directory() . '/languages' );


/**
 * Load the theme functions
 */
require SERVER_PATH . '/deeplove/deep-love.php';

/**
 * Required: include plugin theme scripts
 */
require SERVER_PATH . '/extension/theme-scripts.php';

/**
 * Required: include plugin theme sidebars
 */
require SERVER_PATH . '/extension/theme-functions.php';

/*
 * Required: include plugin theme scripts
 */
require SERVER_PATH . '/extension/process-option.php';


/*
 * Required: widget contact info
 */
require SERVER_PATH . '/extension/widgets/contact-info.php';


/*
 * Required: widget event
 */
require SERVER_PATH . '/extension/widgets/everline-lastest-events.php';

/*
 * Required: widget view logo
 */
require SERVER_PATH . '/extension/widgets/everline-logo.php';

/*
 * Required: widget view social
 */
require SERVER_PATH . '/extension/widgets/social.php';

/*
 * Required: megamenu
 */
require SERVER_PATH . '/extension/megamenu/themeple_init.php';

/**
 * Customizer additions.
 */
require SERVER_PATH . '/extension/customizer.php';

if ( class_exists('OT_Loader') ):
    /*
     * Required: Theme option
     */
    require SERVER_PATH . '/extension/ot-support/theme-options.php';

    /*
     * Required: Metabox
     */
    require SERVER_PATH . '/extension/ot-support/add-meta-boxes.php';
endif;

/*
 *  method add global javascript variable THEME_PREFIX to admin_head
 */
function tzeverline_theme_prefix_addto_header() {
    ?>
    <script type="text/javascript">
        var themeprefix = '<?php echo esc_js(THEME_PREFIX) ?>';
        var imgpath = '<?php echo esc_js(IMG_PATH) ?>';
    </script>
<?php
}
add_action('admin_head', 'tzeverline_theme_prefix_addto_header');
add_action('wp_head', 'tzeverline_theme_prefix_addto_header');


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
    $content_width = 900;


/*
 * Adds JavaScript to pages with the comment form to support
 * sites with threaded comments (when in use).
 */
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );


if ( ! function_exists( 'tzeverline_paging_nav' ) ) :
    function tzeverline_paging_nav() {
        global $wp_query, $wp_rewrite;
        // Don't print empty markup if there's only one page.
        if ( $wp_query->max_num_pages < 2 ) {
            return;
        }

        $paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
        $pagenum_link = html_entity_decode( get_pagenum_link() );
        $query_args   = array();
        $url_parts    = explode( '?', $pagenum_link );

        if ( isset( $url_parts[1] ) ) {
            wp_parse_str( $url_parts[1], $query_args );
        }

        $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
        $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

        $format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
        $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';
        // Set up paginated links.
        $links = paginate_links( array(
            'base'     => $pagenum_link,
            'format'   => $format,
            'total'    => $wp_query->max_num_pages,
            'current'  => $paged,
            'mid_size' => 1,
            'add_args' => array_map( 'urlencode', $query_args ),
            'prev_text' => __( 'Previous', TEXT_DOMAIN ),
            'next_text' => __( 'Next', TEXT_DOMAIN ),
        ) );

        if ( $links ) :

            ?>
            <nav class="navigation paging-navigation" role="navigation">
                <div class="tzpagination2 loop-pagination">
                    <?php echo $links; ?>
                </div><!-- .pagination -->
            </nav><!-- .navigation -->
        <?php
        endif;
    }
endif;

if ( ! function_exists( 'tzeverline_custom_paging_nav' ) ) :
    function tzeverline_custom_paging_nav($query_total) {
        global $wp_query, $wp_rewrite;
        // Don't print empty markup if there's only one page.
        if ( $query_total < 2 ) {
            return;
        }

        $paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
        $pagenum_link = html_entity_decode( get_pagenum_link() );
        $query_args   = array();
        $url_parts    = explode( '?', $pagenum_link );

        if ( isset( $url_parts[1] ) ) {
            wp_parse_str( $url_parts[1], $query_args );
        }

        $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
        $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

        $format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
        $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';
        // Set up paginated links.
        $links = paginate_links( array(
            'base'     => $pagenum_link,
            'format'   => $format,
            'total'    => $query_total,
            'current'  => $paged,
            'mid_size' => 1,
            'add_args' => array_map( 'urlencode', $query_args ),
            'prev_text' => __( 'Previous', TEXT_DOMAIN ),
            'next_text' => __( 'Next', TEXT_DOMAIN ),
        ) );

        if ( $links ) :

            ?>
            <nav class="navigation paging-navigation" role="navigation">
                <div class="tzpagination2 loop-pagination">
                    <?php echo $links; ?>
                </div><!-- .pagination -->
            </nav><!-- .navigation -->
        <?php
        endif;
    }
endif;


/*
 *


*/
if ( is_page_template('template-blog-timeline.php') ):
    add_filter('posts_orderby', 'custom_order');

    function custom_order(){
        $orderby = 'post_date DESC';
        return $orderby;
    }
endif;
add_action('wp_ajax_tzeverline_timeline','tzeverline_timeline');
add_action('wp_ajax_nopriv_tzeverline_timeline','tzeverline_timeline');
function tzeverline_timeline(){
    add_filter('posts_orderby', 'custom_order');

    function custom_order(){
        $orderby = 'post_date DESC';
        return $orderby;
    }
    $paged = $_POST['pageid'];
    $limit = get_option('posts_per_page');
    $time_args = array(
        'post_type'         =>  'post',
        'paged'             =>  $paged,
        'posts_per_page'    =>  $limit
    );
    $time_blog = new WP_Query( $time_args );
    if ( $time_blog -> have_posts() ):
        $i = 0;
        while ( $time_blog -> have_posts() ):
            $time_blog -> the_post();
            $post_fomats = get_post_meta(get_the_ID(), THEME_PREFIX . '_portfolio_type', true);
            $class= "tzleft";
            if ( $i % 2 !== 0):
                $class= "tzright";
            endif;
            if ( $i % 2 == 0 ):
                echo '<div class="row row-timeline row-efff">';
            endif;
            ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-6'.' '.esc_attr($class)) ; ?>>
                <div class="timeline">
                    <?php echo get_the_date(); ?>
                </div>
                <div class="blog-timeline-item">
                    <?php switch($post_fomats):
                        case'video':
                            get_template_part('template_inc/content','video');
                            break;
                        case'audio':
                            get_template_part('template_inc/content','audio');
                            break;
                        case'quote':
                            get_template_part('template_inc/content','quote');
                            break;
                        case'slideshows':
                            get_template_part('template_inc/content','slideshows');
                            break;
                        default:
                            get_template_part('template_inc/content','none');
                            break;
                    endswitch;
                    ?>
                    <h2 class="tzblog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="blog_meta">
                         <span class="tzblog_date">
                            <?php echo get_the_date(); ?>
                             /
                        </span>
                        <span class="tzblog_comments">
                            <?php if ( !post_password_required() && ( comments_open() || get_comments_number() ) ):
                                comments_popup_link(__('0 Comment', TEXT_DOMAIN), __('1 Comment', TEXT_DOMAIN), __('% comment(s)', TEXT_DOMAIN));
                            endif; ?>
                        </span>
                        <span class="tzcat_link">
                                /
                            <?php the_category(',') ?>
                        </span>
                    </div>
                    <div class="tzthe_content">
                        <?php
                        the_excerpt();
                        echo '<a class="more-link" href="'.get_permalink().'">'.__('READ MORE', TEXT_DOMAIN ).'</a>';
                        ?>
                    </div>
                </div>
            </div>
            <?php
            if ( $i % 2 == 1 ):
                echo '</div>';
            endif;
            $i ++ ;
        endwhile;
    endif;
    wp_reset_postdata();
    exit();
}

// method timeline for portfolio
add_action('wp_ajax_tzeverline_portfolio_timeline','tzeverline_portfolio_timeline');
add_action('wp_ajax_nopriv_tzeverline_portfolio_timeline','tzeverline_portfolio_timeline');
function tzeverline_portfolio_timeline(){
    $paged = $_POST['pageid'];
    $limit = get_option('posts_per_page');
    $blog_args = array(
        'post_type'         =>  'portfolio',
        'paged'             =>  $paged,
        'posts_per_page'    =>  $limit,
        'orderby'           =>  'date',
        'order'             =>  'desc',
    );
    $query_blog = new WP_Query( $blog_args );

    if ( $query_blog -> have_posts() ):
        $i = 0;
        while ( $query_blog -> have_posts() ):
            $query_blog -> the_post();
            $class= "tzleft";
            if ( $i % 2 !== 0):
                $class= "tzright";
            endif;
            if ( $i % 2 == 0 ):
                echo '<div class="row row-timeline row-efff">';
            endif;
            ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-6'.' '.esc_attr($class)) ; ?>>
                <div class="timeline">
                    <?php echo get_the_date(); ?>
                </div>
                <div class="tzPortfolio-timeline-item">
                    <div class="tzPortfolio-img tzPortfolio-format">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <i class="fa fa-heart-o tztime-icon"></i>
                    <h2 class="tzPortfolio-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="tzPortfolio_meta">
                        <span class="tzPortfolio_date">
                            <?php echo get_the_date(); ?>
                            /
                        </span>
                        <span class="tztags_link">
                            <?php
                            if ( get_the_terms(get_the_ID(), 'portfolio-tags') != false ):
                                the_terms( get_the_ID(), 'portfolio-tags');
                            endif;
                            ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php
            if ( $i % 2 == 1 ):
                echo '</div>';
            endif;
            $i ++ ;
        endwhile;
    endif;
    wp_reset_postdata();
    exit();
}

/*
 * Method add ot_get_option
 */

if(!is_admin()):

    if ( ! function_exists( 'ot_get_option' ) ) {
        function ot_get_option( $option_id, $default = '' ) {
            /* get the saved options */
            $options = get_option( 'option_tree' );
            /* look for the saved value */
            if ( isset( $options[$option_id] ) && '' != $options[$option_id] ) {
                return $options[$option_id];
            }
            return $default;
        }
    }
    if(function_exists('ot_get_option')){

        /*===================================
         * Global Option
         ===================================*/

        $googAnlytice         =   ot_get_option(THEME_PREFIX . '_google_analytics');


    }


endif;


if (isset($googAnlytice) && $googAnlytice != '') {
    add_action('wp_footer', 'tzeverline_add_google_analytics_code');
}
function tzeverline_add_google_analytics_code() {
    echo '<script type="text/javascript">';
    echo ot_get_option(THEME_PREFIX . '_google_analytics');
    echo '</script>';
}

/*
 * Body class
 */
function tzeverline_body_classes( $classes ) {
    $classes[]     =    ot_get_option(THEME_PREFIX.'_TZThemecolor');
    $rtl           =    ot_get_option(THEME_PREFIX.'_tzeverlinertl');
    $homebox       =    ot_get_option(THEME_PREFIX.'_Tzhomebox');
    if ( $rtl == 1 ){
        $classes[]     =    'theme-rtl';
    }
    if ( isset($_GET['rtl']) && $_GET['rtl'] == 1 ){
        $classes[]     =    'theme-rtl';
    }
    if ( $homebox == 1 ){
        $classes[]     =    'theme-box';
    }
    return $classes;
}
add_filter( 'body_class', 'tzeverline_body_classes' );

/*method activie plugin*/
require_once dirname( __FILE__ ) . '/plugins/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'tzeverline_register_required_plugins' );
function tzeverline_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of how to include a plugin pre-packaged with a theme
        array(
            'name'     				=> 'Plazart', // The plugin name
            'slug'     				=> 'plazart', // The plugin slug (typically the folder name)
            'source'   				=> get_stylesheet_directory() . '/plugins/plazart.zip', // The plugin source
            'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
            'version' 				=> '1.0.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'     				=> 'Revolution Slider', // The plugin name
            'slug'     				=> 'revslider', // The plugin slug (typically the folder name)
            'source'   				=> get_stylesheet_directory() . '/plugins/revslider.zip', // The plugin source
            'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
            'version' 				=> '4.6.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'     				=> 'WPBakery Visual Composer', // The plugin name
            'slug'     				=> 'js_composer', // The plugin slug (typically the folder name)
            'source'   				=> get_stylesheet_directory() . '/plugins/js_composer.zip', // The plugin source
            'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
            'version' 				=> '4.4.2', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
        array(
            'name'      => 'OptionTree',
            'slug'      => 'option-tree',
            'required'  => true,
        ),
        array(
            'name'      => 'The Events Calendar',
            'slug'      => 'the-events-calendar',
            'required'  => false,
        )
    );

    // Change this to your theme text domain, used for internationalising strings
    $theme_text_domain = 'tgmpa';

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
        'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
        'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
        'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
        'menu'         		=> 'install-required-plugins', 	// Menu slug
        'has_notices'      	=> true,                       	// Show admin notices or not
        'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
        'message' 			=> '',							// Message to output right before the plugins table
        'strings'      		=> array(
            'page_title'                       			=> __( 'Install Required Plugins', $theme_text_domain ),
            'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
            'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
            'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
            'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
            'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
            'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
            'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
            'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
            'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
            'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
            'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );

    tgmpa( $plugins, $config );

}
?>