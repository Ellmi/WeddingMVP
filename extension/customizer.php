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
		'description'           => __( 'Customize the slider. Deeplove includes 3 slides', 'deeplove' ),
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

	$wp_customize->add_section( 'slide3', array (
		'title'                 => __( 'Slide #3', 'deeplove' ),
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

	// 2nd slide
	$wp_customize->add_setting( 'featured_image2', array (
		'default'               => get_template_directory_uri() . '/images/slides/slider2.jpg',
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

	// 3rd slide
	$wp_customize->add_setting( 'featured_image3', array (
		'default'               => get_template_directory_uri() . '/images/slides/slider3.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control3', array (
		'label' =>              __( 'Background Image', 'deeplove' ),
		'section'               => 'slide3',
		'mime_type'             => 'image',
		'settings'              => 'featured_image3',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

}
add_action( 'customize_register', 'deeplove_customize_register' );
