<?php
/**
 * DeepLove Wedding Theme Customizer
 *
 * @package DeepLove Wedding
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
 
function deeplove_customize_register( $wp_customize ) {
	$wp_customize->add_panel( 'slider', array (
		'title'                 => __( 'Slider', 'deeplove' ),
		'description'           => __( 'Customize the slider. Deeplove includes 2 slides, and the pro version supports up to 5', 'deeplove' ),
		'priority'              => 10
	) );

	$wp_customize->add_section( 'slide1', array (
		'title'                 => __( 'Slide #1', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'slider',
	) );

	$wp_customize->add_section( 'slide2', array (
		'title'                 => __( 'Slide #2', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'slider',
	) );
	// 1st slide
	$wp_customize->add_setting( 'featured_image1', array (
		'default'               => get_template_directory_uri() . '/images/slides/slider1.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control1', array (
		'label' =>              __( 'Background Image', 'deeplove' ),
		'section'               => 'slide1',
		'mime_type'             => 'image',
		'settings'              => 'featured_image1',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	$wp_customize->add_setting( 'featured_image1_title', array (
		'default'               => __( 'Welcome to deeplove', 'deeplove' ),
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'deeplove_text_sanitize'

	) );

	$wp_customize->add_control( 'featured_image1_title', array(
		'type'                  => 'text',
		'section'               => 'slide1',
		'label'                 => __( 'Header Text', 'deeplove' ),
		'description'           => __( 'The main heading text, leave blank to hide', 'deeplove' ),
	) );


	$wp_customize->add_setting( 'slide1_button1_text', array (
		'default'               => __( 'View Features', 'deeplove' ),
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'deeplove_text_sanitize'
	) );

	$wp_customize->add_control( 'slide1_button1_text', array(
		'type'                  => 'text',
		'section'               => 'slide1',
		'label'                 => __( 'Button #1 Text', 'deeplove' ),
		'description'           => __( 'The text for the button, leave blank to hide', 'deeplove' ),
	) );

	$wp_customize->add_setting( 'slide1_button1_url', array (
		'default'               => '',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( 'slide1_button1_url', array(
		'type'                  => 'text',
		'section'               => 'slide1',
		'label'                 => __( 'Button #1 URL', 'deeplove' ),
	) );


	$wp_customize->add_setting( 'slide1_button2_text', array (
		'default'               => __( 'Learn More', 'deeplove' ),
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'deeplove_text_sanitize'
	) );

	$wp_customize->add_control( 'slide1_button2_text', array(
		'type'                  => 'text',
		'section'               => 'slide1',
		'label'                 => __( 'Button #2 Text', 'deeplove' ),
		'description'           => __( 'The text for the button, leave blank to hide', 'deeplove' ),
	) );

	$wp_customize->add_setting( 'slide1_button2_url', array (
		'default'               => '',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( 'slide1_button2_url', array(
		'type'                  => 'text',
		'section'               => 'slide1',
		'label'                 => __( 'Button #2 URL', 'deeplove' ),
	) );


	// 2nd slide
	$wp_customize->add_setting( 'featured_image2', array (
		'default'               => get_template_directory_uri() . '/images/slides/slider1.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control2', array (
		'label' =>              __( 'Background Image', 'deeplove' ),
		'section'               => 'slide2',
		'mime_type'             => 'image',
		'settings'              => 'featured_image2',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	$wp_customize->add_setting( 'featured_image2_title', array (
		'default'               => __( 'Welcome to deeplove', 'deeplove' ),
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'deeplove_text_sanitize'
	) );

	$wp_customize->add_control( 'featured_image2_title', array(
		'type'                  => 'text',
		'section'               => 'slide2',
		'label'                 => __( 'Header Text', 'deeplove' ),
		'description'           => __( 'The main heading text, leave blank to hide', 'deeplove' ),
	) );

	$wp_customize->add_setting( 'slide2_button1_text', array (
		'default'               => __( 'View Features', 'deeplove' ),
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'deeplove_text_sanitize'
	) );

	$wp_customize->add_control( 'slide2_button1_text', array(
		'type'                  => 'text',
		'section'               => 'slide2',
		'label'                 => __( 'Button #1 Text', 'deeplove' ),
		'description'           => __( 'The text for the button, leave blank to hide', 'deeplove' ),
	) );

	$wp_customize->add_setting( 'slide2_button1_url', array (
		'default'               => '',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( 'slide2_button1_url', array(
		'type'                  => 'text',
		'section'               => 'slide2',
		'label'                 => __( 'Button #1 URL', 'deeplove' ),
	) );


	$wp_customize->add_setting( 'slide2_button2_text', array (
		'default'               => __( 'Learn More', 'deeplove' ),
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'deeplove_text_sanitize'
	) );

	$wp_customize->add_control( 'slide2_button2_text', array(
		'type'                  => 'text',
		'section'               => 'slide2',
		'label'                 => __( 'Button #2 Text', 'deeplove' ),
		'description'           => __( 'The text for the button, leave blank to hide', 'deeplove' ),
	) );

	$wp_customize->add_setting( 'slide2_button2_url', array (
		'default'               => '',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( 'slide2_button2_url', array(
		'type'                  => 'text',
		'section'               => 'slide2',
		'label'                 => __( 'Button #2 URL', 'deeplove' ),
	) );
}
add_action( 'customize_register', 'deeplove_customize_register' );

function dlwedding_custom_css(){
		?>
        	<style type="text/css">
					
					a, .blog_lists h2 a:hover,
					#sidebar ul li a:hover,
					.recent-post h6:hover,									
					.services-wrap .one_half h4 span,
					.copyright-txt span,					
					a.more-button span,
					.cols-4 span,
					.header .header-inner .logo h1		
					{ color:<?php echo esc_attr(get_theme_mod('color_scheme','#c34370')); ?>;}
					 
					.social-icons a:hover, 
					.pagination ul li .current, 
					.pagination ul li a:hover, 
					#commentform input#submit:hover,
					.ReadMore,
					.ReadMore:hover,
					.nivo-controlNav a.active,
					h3.widget-title,
					.header .header-inner .nav ul li a:hover, 
					.header .header-inner .nav ul li.current_page_item a,
					.MoreLink:hover,
					.wpcf7 input[type="submit"]
					{ background-color:<?php echo esc_attr(get_theme_mod('color_scheme','#c34370')); ?>;}
					
					.ReadMore, 
					.MoreLink,
					.header .header-inner .nav
					{ border-color:<?php echo esc_attr(get_theme_mod('color_scheme','#c34370')); ?>;}
					
			</style>  
<?php   
} 
add_action('wp_head','dlwedding_custom_css');
