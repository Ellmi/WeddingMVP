<?php

/*
 *constants
 */

define('THEME_PREFIX', 'ellmi');
define('THEME_NAME', 'Deeplove');
define('TEXT_DOMAIN', 'Deeplove');
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

    add_theme_support( 'title-tag' );
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
 * Customizer additions.
 */
require SERVER_PATH . '/extension/customizer.php';

/*
 *  method add global javascript variable THEME_PREFIX to admin_head
 */
function deeplove_theme_prefix_addto_header() {
    ?>
    <script type="text/javascript">
        var themeprefix = '<?php echo esc_js(THEME_PREFIX) ?>';
        var imgpath = '<?php echo esc_js(IMG_PATH) ?>';
    </script>
<?php
}
add_action('admin_head', 'deeplove_theme_prefix_addto_header');
add_action('wp_head', 'deeplove_theme_prefix_addto_header');


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
    $content_width = 900;


if (false) {
    add_action('wp_footer', 'deeplove_add_google_analytics_code');
}
function deeplove_add_google_analytics_code() {
    echo '<script type="text/javascript">';
    echo '_google_analytics  code';
    echo '</script>';
}
/*method activie plugin*/
require_once dirname( __FILE__ ) . '/plugins/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'deeplove_register_required_plugins' );
function deeplove_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of how to include a plugin pre-packaged with a theme
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

        // This is an example of how to include a plugin from the WordPress Plugin Repository
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
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