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

	//Sliders
	$wp_customize->add_panel( 'home_sliders', array (
		'title'                 => __( '幻灯片', 'deeplove' ),
		'description'           => __( 'Customize the slider. Deeplove includes 3 slides', 'deeplove' ),
		'priority'              => 10
	) );

	// 1st slide
	$wp_customize->add_section( 'slide1', array (
		'title'                 => __( 'Slide #1', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'home_sliders',
	) );

	$wp_customize->add_setting( 'slide1_image', array (
		'default'               => get_template_directory_uri() . '/images/slides/slider1.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide1_image', array (
		'label' =>              __( 'Background Image', 'deeplove' ),
		'section'               => 'slide1',
		'mime_type'             => 'image',
		'settings'              => 'slide1_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	// 2nd slide
	$wp_customize->add_section( 'slide2', array (
		'title'                 => __( 'Slide #2', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'home_sliders',
	) );

	$wp_customize->add_setting( 'slide2_image', array (
		'default'               => get_template_directory_uri() . '/images/slides/slider2.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide2_image', array (
		'label' =>              __( 'Background Image', 'deeplove' ),
		'section'               => 'slide2',
		'mime_type'             => 'image',
		'settings'              => 'slide2_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	// 3rd slide
	$wp_customize->add_section( 'slide3', array (
		'title'                 => __( 'Slide #3', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'home_sliders',
	) );

	$wp_customize->add_setting( 'slide3_image', array (
		'default'               => get_template_directory_uri() . '/images/slides/slider3.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide3_image', array (
		'label' =>              __( 'Background Image', 'deeplove' ),
		'section'               => 'slide3',
		'mime_type'             => 'image',
		'settings'              => 'slide3_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );


	//office introduction
	$wp_customize->add_section( 'office', array (
		'title'                 => __( '工作室介绍', 'deeplove' ),
		'description'           => __( '', 'deeplove' ),
		'priority'              => 11
	) );

	$wp_customize->add_setting( 'office_title', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'office_title', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'office',
		'settings'              => 'office_title',
	) );

	$wp_customize->add_setting( 'office_detail', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'office_detail', array (
		'label' =>              __( '设置内容', 'deeplove' ),
		'section'               => 'office',
		'settings'              => 'office_detail',
		'type'           => 'textarea'
	) );

	//PostZone1
	$wp_customize->add_panel( 'PostZone1', array (
		'title'                 => __( 'PostZone1', 'deeplove' ),
		'description'           => __( 'Customize the Posts. Deeplove includes 3 posts', 'deeplove' ),
		'priority'              => 10
	) );


	//PostZone1 Post1
	$wp_customize->add_section( 'PostZone1_Post1', array (
		'title'                 => __( 'Post #1', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'PostZone1',
	) );

	$wp_customize->add_setting( 'PostZone1_post1_title', array (
		'default'               => __( 'PostZone1 post1 title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone1_post1_title_control', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone1_Post1',
		'settings'              => 'PostZone1_post1_title',
	) );

	$wp_customize->add_setting( 'PostZone1_post1_image', array (
		'default'               => get_template_directory_uri() . '/images/introduct1.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );


	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'PostZone1_post1_image_control', array (
		'label' =>              __( 'Post Image', 'deeplove' ),
		'section'               => 'PostZone1_Post1',
		'mime_type'             => 'image',
		'settings'              => 'PostZone1_post1_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	$wp_customize->add_setting( 'PostZone1_post1_detail', array (
		'default'               => __( 'PostZone1 post1 detail', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone1_post1_detail', array (
		'label' =>              __( '设置内容', 'deeplove' ),
		'section'               => 'PostZone1_Post1',
		'settings'              => 'PostZone1_post1_detail',
		'type'           => 'textarea'
	) );

	//PostZone1 Post2
	$wp_customize->add_section( 'PostZone1_Post2', array (
		'title'                 => __( 'Post #2', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'PostZone1',
	) );

	$wp_customize->add_setting( 'PostZone1_post2_title', array (
		'default'               => __( 'PostZone1 post2 title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone1_post2_title_control', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone1_Post2',
		'settings'              => 'PostZone1_post2_title',
	) );

	$wp_customize->add_setting( 'PostZone1_post2_image', array (
		'default'               => get_template_directory_uri() . '/images/introduct2.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'PostZone1_post2_image_control', array (
		'label' =>              __( 'Post Image', 'deeplove' ),
		'section'               => 'PostZone1_Post2',
		'mime_type'             => 'image',
		'settings'              => 'PostZone1_post2_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	$wp_customize->add_setting( 'PostZone1_post2_detail', array (
		'default'               => __( 'PostZone1 post2 detail', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone1_post2_detail', array (
		'label' =>              __( '设置内容', 'deeplove' ),
		'section'               => 'PostZone1_Post2',
		'settings'              => 'PostZone1_post2_detail',
		'type'           => 'textarea'
	) );

	//PostZone1 Post3
	$wp_customize->add_section( 'PostZone1_Post3', array (
		'title'                 => __( 'Post #3', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'PostZone1',
	) );

	$wp_customize->add_setting( 'PostZone1_post3_title', array (
		'default'               => __( 'PostZone1 post3 title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone1_post3_title_control', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone1_Post3',
		'settings'              => 'PostZone1_post3_title',
	) );

	$wp_customize->add_setting( 'PostZone1_post3_image', array (
		'default'               => get_template_directory_uri() . '/images/introduct3.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'PostZone1_post3_image_control', array (
		'label' =>              __( 'Post Image', 'deeplove' ),
		'section'               => 'PostZone1_Post3',
		'mime_type'             => 'image',
		'settings'              => 'PostZone1_post3_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	$wp_customize->add_setting( 'PostZone1_post3_detail', array (
		'default'               => __( 'PostZone1 post3 detail', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone1_post3_detail', array (
		'label' =>              __( '设置内容', 'deeplove' ),
		'section'               => 'PostZone1_Post3',
		'settings'              => 'PostZone1_post3_detail',
		'type'           => 'textarea'
	) );

	//PostZone2
	$wp_customize->add_panel( 'PostZone2', array (
		'title'                 => __( 'PostZone2', 'deeplove' ),
		'description'           => __( 'Customize the Posts. Deeplove includes 3 posts', 'deeplove' ),
		'priority'              => 10
	) );

	//PostZone2 Post1
	$wp_customize->add_section( 'PostZone2_Post1', array (
		'title'                 => __( 'Post #1', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'PostZone2',
	) );

	$wp_customize->add_setting( 'PostZone2_post1_image', array (
		'default'               => get_template_directory_uri() . '/images/portfolio6.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'PostZone2_post1_image_control', array (
		'label' =>              __( 'Post Image', 'deeplove' ),
		'section'               => 'PostZone2_Post1',
		'mime_type'             => 'image',
		'settings'              => 'PostZone2_post1_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	$wp_customize->add_setting( 'PostZone2_post1_title', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post1_title', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone2_Post1',
		'settings'              => 'PostZone2_post1_title',
	) );

	$wp_customize->add_setting( 'PostZone2_post1_date', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post1_date', array (
		'label' =>              __( '设置日期', 'deeplove' ),
		'section'               => 'PostZone2_Post1',
		'settings'              => 'PostZone2_post1_date',
	) );

	$wp_customize->add_setting( 'PostZone2_post1_link', array (
		'default'               => __( '#', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post1_link', array (
		'label' =>              __( '设置链接', 'deeplove' ),
		'section'               => 'PostZone2_Post1',
		'settings'              => 'PostZone2_post1_link',
	) );

	//PostZone2 Post2
	$wp_customize->add_section( 'PostZone2_Post2', array (
		'title'                 => __( 'Post #2', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'PostZone2',
	) );

	$wp_customize->add_setting( 'PostZone2_post2_image', array (
		'default'               => get_template_directory_uri() . '/images/portfolio5.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'PostZone2_post2_image_control', array (
		'label' =>              __( 'Post Image', 'deeplove' ),
		'section'               => 'PostZone2_Post2',
		'mime_type'             => 'image',
		'settings'              => 'PostZone2_post2_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );


	$wp_customize->add_setting( 'PostZone2_post2_title', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post2_title', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone2_Post2',
		'settings'              => 'PostZone2_post2_title',
	) );

	$wp_customize->add_setting( 'PostZone2_post2_date', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post2_date', array (
		'label' =>              __( '设置日期', 'deeplove' ),
		'section'               => 'PostZone2_Post2',
		'settings'              => 'PostZone2_post2_date',
	) );

	$wp_customize->add_setting( 'PostZone2_post2_link', array (
		'default'               => __( '#', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post2_link', array (
		'label' =>              __( '设置链接', 'deeplove' ),
		'section'               => 'PostZone2_Post2',
		'settings'              => 'PostZone2_post2_link',
	) );

	//PostZone2 Post3
	$wp_customize->add_section( 'PostZone2_Post3', array (
		'title'                 => __( 'Post #3', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'PostZone2',
	) );

	$wp_customize->add_setting( 'PostZone2_post3_image', array (
		'default'               => get_template_directory_uri() . '/images/portfolio4.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'PostZone2_post3_image_control', array (
		'label' =>              __( 'Post Image', 'deeplove' ),
		'section'               => 'PostZone2_Post3',
		'mime_type'             => 'image',
		'settings'              => 'PostZone2_post3_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );


	$wp_customize->add_setting( 'PostZone2_post3_title', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post3_title', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone2_Post3',
		'settings'              => 'PostZone2_post3_title',
	) );

	$wp_customize->add_setting( 'PostZone2_post3_date', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post3_date', array (
		'label' =>              __( '设置日期', 'deeplove' ),
		'section'               => 'PostZone2_Post3',
		'settings'              => 'PostZone2_post3_date',
	) );

	$wp_customize->add_setting( 'PostZone2_post3_link', array (
		'default'               => __( '#', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post3_link', array (
		'label' =>              __( '设置链接', 'deeplove' ),
		'section'               => 'PostZone2_Post3',
		'settings'              => 'PostZone2_post3_link',
	) );

	//PostZone2 Post4
	$wp_customize->add_section( 'PostZone2_Post4', array (
		'title'                 => __( 'Post #4', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'PostZone2',
	) );

	$wp_customize->add_setting( 'PostZone2_post4_image', array (
		'default'               => get_template_directory_uri() . '/images/portfolio3.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'PostZone2_post4_image_control', array (
		'label' =>              __( 'Post Image', 'deeplove' ),
		'section'               => 'PostZone2_Post4',
		'mime_type'             => 'image',
		'settings'              => 'PostZone2_post4_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	$wp_customize->add_setting( 'PostZone2_post4_title', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post4_title', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone2_Post4',
		'settings'              => 'PostZone2_post4_title',
	) );

	$wp_customize->add_setting( 'PostZone2_post4_date', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post4_date', array (
		'label' =>              __( '设置日期', 'deeplove' ),
		'section'               => 'PostZone2_Post4',
		'settings'              => 'PostZone2_post4_date',
	) );

	$wp_customize->add_setting( 'PostZone2_post4_link', array (
		'default'               => __( '#', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post4_link', array (
		'label' =>              __( '设置链接', 'deeplove' ),
		'section'               => 'PostZone2_Post4',
		'settings'              => 'PostZone2_post4_link',
	) );

	//PostZone2 Post5
	$wp_customize->add_section( 'PostZone2_Post5', array (
		'title'                 => __( 'Post #5', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'PostZone2',
	) );

	$wp_customize->add_setting( 'PostZone2_post5_image', array (
		'default'               => get_template_directory_uri() . '/images/portfolio2.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'PostZone2_post5_image_control', array (
		'label' =>              __( 'Post Image', 'deeplove' ),
		'section'               => 'PostZone2_Post5',
		'mime_type'             => 'image',
		'settings'              => 'PostZone2_post5_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );


	$wp_customize->add_setting( 'PostZone2_post5_title', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post5_title', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone2_Post5',
		'settings'              => 'PostZone2_post5_title',
	) );

	$wp_customize->add_setting( 'PostZone2_post5_date', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post5_date', array (
		'label' =>              __( '设置日期', 'deeplove' ),
		'section'               => 'PostZone2_Post5',
		'settings'              => 'PostZone2_post5_date',
	) );

	$wp_customize->add_setting( 'PostZone2_post5_link', array (
		'default'               => __( '#', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post5_link', array (
		'label' =>              __( '设置链接', 'deeplove' ),
		'section'               => 'PostZone2_Post5',
		'settings'              => 'PostZone2_post5_link',
	) );

	//PostZone2 Post6
	$wp_customize->add_section( 'PostZone2_Post6', array (
		'title'                 => __( 'Post #6', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'PostZone2',
	) );

	$wp_customize->add_setting( 'PostZone2_post6_image', array (
		'default'               => get_template_directory_uri() . '/images/portfolio1.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'PostZone2_post6_image_control', array (
		'label' =>              __( 'Post Image', 'deeplove' ),
		'section'               => 'PostZone2_Post6',
		'mime_type'             => 'image',
		'settings'              => 'PostZone2_post6_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );


	$wp_customize->add_setting( 'PostZone2_post6_title', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post6_title', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone2_Post6',
		'settings'              => 'PostZone2_post6_title',
	) );

	$wp_customize->add_setting( 'PostZone2_post6_date', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post6_date', array (
		'label' =>              __( '设置日期', 'deeplove' ),
		'section'               => 'PostZone2_Post6',
		'settings'              => 'PostZone2_post6_date',
	) );

	$wp_customize->add_setting( 'PostZone2_post6_link', array (
		'default'               => __( '#', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone2_post6_link', array (
		'label' =>              __( '设置链接', 'deeplove' ),
		'section'               => 'PostZone2_Post6',
		'settings'              => 'PostZone2_post6_link',
	) );

	//PostZone3
	$wp_customize->add_panel( 'PostZone3', array (
		'title'                 => __( 'PostZone3', 'deeplove' ),
		'description'           => __( 'Customize the Posts. Deeplove includes 3 posts', 'deeplove' ),
		'priority'              => 10
	) );

	//title
	$wp_customize->add_section( 'PostZone3_Title', array (
		'title'                 => __( 'Title', 'deeplove' ),
		'description'           => __( 'Customize the Posts. Deeplove includes 3 posts', 'deeplove' ),
		'panel'              => 'PostZone3'
	) );

	$wp_customize->add_setting( 'PostZone3_Title', array (
		'default'               => __( 'PostZone3 title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_Title', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone3_Title',
		'settings'              => 'PostZone3_Title',
	) );

	//PostZone3 Post1
	$wp_customize->add_section( 'PostZone3_Post1', array (
		'title'                 => __( 'Post1', 'deeplove' ),
		'description'           => __( 'Customize the Posts. Deeplove includes 3 posts', 'deeplove' ),
		'panel'                 => 'PostZone3'
	) );

	$wp_customize->add_setting( 'PostZone3_post1_image', array (
		'default'               => get_template_directory_uri() . '/images/bloghome4.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'PostZone3_post1_image_control', array (
		'label' =>              __( 'Background Image', 'deeplove' ),
		'section'               => 'PostZone3_Post1',
		'mime_type'             => 'image',
		'settings'              => 'PostZone3_post1_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	$wp_customize->add_setting( 'PostZone3_post1_title', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post1_title', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone3_Post1',
		'settings'              => 'PostZone3_post1_title',
	) );

	$wp_customize->add_setting( 'PostZone3_post1_link', array (
		'default'               => __( '#', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post1_link', array (
		'label' =>              __( '设置链接', 'deeplove' ),
		'section'               => 'PostZone3_Post1',
		'settings'              => 'PostZone3_post1_link',
	) );

	$wp_customize->add_setting( 'PostZone3_post1_detail', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post1_detail', array (
		'label' =>              __( '设置内容', 'deeplove' ),
		'section'               => 'PostZone3_Post1',
		'settings'              => 'PostZone3_post1_detail',
		'type'           => 'textarea'
	) );

	//PostZone3 Post2
	$wp_customize->add_section( 'PostZone3_Post2', array (
		'title'                 => __( 'Post2', 'deeplove' ),
		'description'           => __( 'Customize the Posts. Deeplove includes 3 posts', 'deeplove' ),
		'panel'                 => 'PostZone3'
	) );

	$wp_customize->add_setting( 'PostZone3_post2_image', array (
		'default'               => get_template_directory_uri() . '/images/bloghome3.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'PostZone3_post2_image_control', array (
		'label' =>              __( 'Background Image', 'deeplove' ),
		'section'               => 'PostZone3_Post2',
		'mime_type'             => 'image',
		'settings'              => 'PostZone3_post2_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	$wp_customize->add_setting( 'PostZone3_post2_title', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post2_title', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone3_Post2',
		'settings'              => 'PostZone3_post2_title',
	) );

	$wp_customize->add_setting( 'PostZone3_post2_detail', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_setting( 'PostZone3_post2_link', array (
		'default'               => __( '#', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post2_link', array (
		'label' =>              __( '设置链接', 'deeplove' ),
		'section'               => 'PostZone3_Post2',
		'settings'              => 'PostZone3_post2_link',
	) );

	$wp_customize->add_control( 'PostZone3_post2_detail', array (
		'label' =>              __( '设置内容', 'deeplove' ),
		'section'               => 'PostZone3_Post2',
		'settings'              => 'PostZone3_post2_detail',
		'type'           => 'textarea'
	) );

	//PostZone3 Post3
	$wp_customize->add_section( 'PostZone3_Post3', array (
		'title'                 => __( 'Post3', 'deeplove' ),
		'description'           => __( 'Customize the Posts. Deeplove includes 3 posts', 'deeplove' ),
		'panel'                 => 'PostZone3'
	) );

	$wp_customize->add_setting( 'PostZone3_post3_image', array (
		'default'               => get_template_directory_uri() . '/images/bloghome2.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'PostZone3_post3_image_control', array (
		'label' =>              __( 'Background Image', 'deeplove' ),
		'section'               => 'PostZone3_Post3',
		'mime_type'             => 'image',
		'settings'              => 'PostZone3_post3_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	$wp_customize->add_setting( 'PostZone3_post3_title', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post3_title', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone3_Post3',
		'settings'              => 'PostZone3_post3_title',
	) );

	$wp_customize->add_setting( 'PostZone3_post3_link', array (
		'default'               => __( '#', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post3_link', array (
		'label' =>              __( '设置链接', 'deeplove' ),
		'section'               => 'PostZone3_Post3',
		'settings'              => 'PostZone3_post3_link',
	) );

	$wp_customize->add_setting( 'PostZone3_post3_detail', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post3_detail', array (
		'label' =>              __( '设置内容', 'deeplove' ),
		'section'               => 'PostZone3_Post3',
		'settings'              => 'PostZone3_post3_detail',
		'type'           => 'textarea'
	) );

	//PostZone3 Post4
	$wp_customize->add_section( 'PostZone3_Post4', array (
		'title'                 => __( 'Post4', 'deeplove' ),
		'description'           => __( 'Customize the Posts. Deeplove includes 3 posts', 'deeplove' ),
		'panel'                 => 'PostZone3'
	) );

	$wp_customize->add_setting( 'PostZone3_post4_image', array (
		'default'               => get_template_directory_uri() . '/images/bloghome1.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'PostZone3_post4_image_control', array (
		'label' =>              __( 'Background Image', 'deeplove' ),
		'section'               => 'PostZone3_Post4',
		'mime_type'             => 'image',
		'settings'              => 'PostZone3_post4_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	$wp_customize->add_setting( 'PostZone3_post4_title', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post4_title', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone3_Post4',
		'settings'              => 'PostZone3_post4_title',
	) );

	$wp_customize->add_setting( 'PostZone3_post4_link', array (
		'default'               => __( '#', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post4_link', array (
		'label' =>              __( '设置链接', 'deeplove' ),
		'section'               => 'PostZone3_Post4',
		'settings'              => 'PostZone3_post4_link',
	) );

	$wp_customize->add_setting( 'PostZone3_post4_detail', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post4_detail', array (
		'label' =>              __( '设置内容', 'deeplove' ),
		'section'               => 'PostZone3_Post4',
		'settings'              => 'PostZone3_post4_detail',
		'type'           => 'textarea'
	) );

	//Footer Social

	$wp_customize->add_section( 'Footer_social', array (
		'title'                 => __( '尾部', 'deeplove' ),
		'description'           => __( '配置尾部社交信息', 'deeplove' )
	) );

	//social one
	$wp_customize->add_setting( 'Footer_social_one', array (
		'default'               => __( '电话: XXXXXXXXXX', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'Footer_social_one', array (
		'label' =>              __( '左一', 'deeplove' ),
		'section'               => 'Footer_social',
		'settings'              => 'Footer_social_one',
	) );

	//social two
	$wp_customize->add_setting( 'Footer_social_two', array (
		'default'               => __( 'QQ: XXXXXXXXXX', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'Footer_social_two', array (
		'label' =>              __( '左二', 'deeplove' ),
		'section'               => 'Footer_social',
		'settings'              => 'Footer_social_two',
	) );

	//social three
	$wp_customize->add_setting( 'Footer_social_three', array (
		'default'               => __( '微信: XXXXXXXXXX', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'Footer_social_three', array (
		'label' =>              __( '左三', 'deeplove' ),
		'section'               => 'Footer_social',
		'settings'              => 'Footer_social_three',
	) );

	//social four
	$wp_customize->add_setting( 'Footer_social_four', array (
		'default'               => __( '地址: XXXXXXXXXXX', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'Footer_social_four', array (
		'label' =>              __( '右一', 'deeplove' ),
		'section'               => 'Footer_social',
		'settings'              => 'Footer_social_four',
	) );

	//social five
	$wp_customize->add_setting( 'Footer_social_five', array (
		'default'               => __( '淘宝店铺: XXXXXXXXXX', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'Footer_social_five', array (
		'label' =>              __( '右二', 'deeplove' ),
		'section'               => 'Footer_social',
		'settings'              => 'Footer_social_five',
	) );

	//social six
	$wp_customize->add_setting( 'Footer_social_six', array (
		'default'               => __( '其他: XXXXXXXXXX', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'Footer_social_six', array (
		'label' =>              __( '右三', 'deeplove' ),
		'section'               => 'Footer_social',
		'settings'              => 'Footer_social_six',
	) );

	//Video Slides
	$wp_customize->add_panel( 'video_sliders', array (
		'title'                 => __( '图片轮播(视频页)', 'deeplove' ),
		'description'           => __( 'Customize the slider. Deeplove includes 3 slides', 'deeplove' ),
		'priority'              => 10
	) );

	// 1st slide
	$wp_customize->add_section( 'video_slide1', array (
		'title'                 => __( 'Slide #1', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'video_sliders',
	) );

	$wp_customize->add_setting( 'video_slide1_image', array (
		'default'               => get_template_directory_uri() . '/images/slides/slider1.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'video_slide1_image', array (
		'label' =>              __( 'Background Image', 'deeplove' ),
		'section'               => 'video_slide1',
		'mime_type'             => 'image',
		'settings'              => 'video_slide1_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	// 2nd slide
	$wp_customize->add_section( 'video_slide2', array (
		'title'                 => __( 'Slide #2', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'video_sliders',
	) );

	$wp_customize->add_setting( 'video_slide2_image', array (
		'default'               => get_template_directory_uri() . '/images/slides/slider2.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'video_slide2_image', array (
		'label' =>              __( 'Background Image', 'deeplove' ),
		'section'               => 'video_slide2',
		'mime_type'             => 'image',
		'settings'              => 'video_slide2_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	// 3rd slide
	$wp_customize->add_section( 'video_slide3', array (
		'title'                 => __( 'Slide #3', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'video_sliders',
	) );

	$wp_customize->add_setting( 'video_slide3_image', array (
		'default'               => get_template_directory_uri() . '/images/slides/slider3.jpg',
		'transport'             => 'postMessage',
		'sanitize_callback'     => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'video_slide3_image', array (
		'label' =>              __( 'Background Image', 'deeplove' ),
		'section'               => 'video_slide3',
		'mime_type'             => 'image',
		'settings'              => 'video_slide3_image',
		'description'           => __( 'Select the image file that you would like to use as the featured images', 'deeplove' ),
	) ) );

	//Wedding
	$wp_customize->add_panel( 'wedding', array (
		'title'                 => __( '婚礼策划', 'deeplove' ),
		'description'           => __( 'Customize all the subpage under the weddign', 'deeplove' ),
		'priority'              => 10
	) );

	// activity date
	$wp_customize->add_section( 'activity_end_time', array (
		'title'                 => __( '活动结束时间', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your activity end time', 'deeplove' ),
		'panel'                 => 'wedding',
	) );

	$wp_customize->add_setting( 'activity_end_time_setting', array (
	    'default'               => "july 1 2017 23:23:23",
        'transport' => 'postMessage'
	) );

	$wp_customize->add_control('activity_end_time_control', array (
		'label' =>              __( 'end time', 'deeplove' ),
        'type'                  => 'text',
		'section'               => 'activity_end_time',
		'settings'              => 'activity_end_time_setting',
		'description'           => __( 'Select the time activity end', 'deeplove' ),
	) );

    //propose
    $wp_customize->add_section( 'propose', array (
        'title'                 => __( '求婚策划', 'deeplove' ),
        'panel'                 => 'wedding',
    ) );

    $wp_customize->add_setting( 'propose_topic_picture_setting', array (
        'default'               => get_template_directory_uri() . '/images/slides/slider3.jpg',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'propose_topic_picture_control', array (
        'label' =>              __( '专题介绍——图片', 'deeplove' ),
        'section'               => 'propose',
        'mime_type'             => 'image',
        'settings'              => 'propose_topic_picture_setting',
    ) ) );

    $wp_customize->add_setting( 'propose_topic_text_title_setting', array (
        'default'               => 'OUR STORY',
        'transport'             => 'postMessage'
    ) );

    $wp_customize->add_control( 'propose_topic_text_title_control', array (
        'label' =>              __( '专题介绍——文字标题', 'deeplove' ),
        'type'                  => 'text',
        'section'               => 'propose',
        'settings'              => 'propose_topic_text_title_setting',
    ) );

    $wp_customize->add_setting( 'propose_topic_text_detail_setting', array (
        'default'               => 'Thank you for choosing CosmoThemes and purchasing one of our Premium WordPress Themes your choice is greatly appreciated!',
        'transport'             => 'postMessage'
    ) );

    $wp_customize->add_control( 'propose_topic_text_detail_control', array (
        'label' =>              __( '专题介绍——文字内容', 'deeplove' ),
        'type'                  => 'textarea',
        'section'               => 'propose',
        'settings'              => 'propose_topic_text_detail_setting',
    ) );


    $wp_customize->add_setting( 'propose_process_setting', array (
        'default'               => get_template_directory_uri() . '/images/slides/slider2.jpg',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'propose_process_control', array (
        'label' =>              __( '流程介绍图', 'deeplove' ),
        'section'               => 'propose',
        'mime_type'             => 'image',
        'settings'              => 'propose_process_setting',
    ) ) );

    $wp_customize->add_setting( 'propose_posts_title', array (
        'default'               => __( '求婚案例', 'deeplove' ),
        'transport' => 'postMessage'
    ) );

    $wp_customize->add_control( 'propose_posts_title', array (
        'label' =>              __( '设置案例标题', 'deeplove' ),
        'section'               => 'propose',
        'settings'              => 'propose_posts_title',
    ) );

    $wp_customize->add_setting( 'propose_post1_image', array (
        'default'               => get_template_directory_uri() . '/images/bloghome4.jpg',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'propose_post1_image', array (
        'label' =>              __( '文章1', 'deeplove' ),
        'section'               => 'propose',
        'mime_type'             => 'image',
        'settings'              => 'propose_post1_image',
    ) ) );

    $wp_customize->add_setting( 'propose_post1_link', array (
        'default'               => __( '#', 'deeplove' ),
        'transport' => 'postMessage'
    ) );

    $wp_customize->add_control( 'propose_post1_link', array (
        'label' =>              __( '设置链接-文章1', 'deeplove' ),
        'section'               => 'propose',
        'settings'              => 'propose_post1_link',
    ) );

    $wp_customize->add_setting( 'propose_post2_image', array (
        'default'               => get_template_directory_uri() . '/images/bloghome4.jpg',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'propose_post2_image', array (
        'label' =>              __( '文章2', 'deeplove' ),
        'section'               => 'propose',
        'mime_type'             => 'image',
        'settings'              => 'propose_post2_image',
    ) ) );

    $wp_customize->add_setting( 'propose_post2_link', array (
        'default'               => __( '#', 'deeplove' ),
        'transport' => 'postMessage'
    ) );

    $wp_customize->add_control( 'propose_post2_link', array (
        'label' =>              __( '设置链接-文章2', 'deeplove' ),
        'section'               => 'propose',
        'settings'              => 'propose_post2_link',
    ) );
    $wp_customize->add_setting( 'propose_post3_image', array (
        'default'               => get_template_directory_uri() . '/images/bloghome3.jpg',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'propose_post3_image', array (
        'label' =>              __( '文章3', 'deeplove' ),
        'section'               => 'propose',
        'mime_type'             => 'image',
        'settings'              => 'propose_post3_image',
    ) ) );

    $wp_customize->add_setting( 'propose_post3_link', array (
        'default'               => __( '#', 'deeplove' ),
        'transport' => 'postMessage'
    ) );

    $wp_customize->add_control( 'propose_post3_link', array (
        'label' =>              __( '设置链接-文章3', 'deeplove' ),
        'section'               => 'propose',
        'settings'              => 'propose_post3_link',
    ) );

    $wp_customize->add_setting( 'propose_post4_image', array (
        'default'               => get_template_directory_uri() . '/images/bloghome4.jpg',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'propose_post4_image', array (
        'label' =>              __( '文章4', 'deeplove' ),
        'section'               => 'propose',
        'mime_type'             => 'image',
        'settings'              => 'propose_post4_image',
    ) ) );

    $wp_customize->add_setting( 'propose_post4_link', array (
        'default'               => __( '#', 'deeplove' ),
        'transport' => 'postMessage'
    ) );

    $wp_customize->add_control( 'propose_post4_link', array (
        'label' =>              __( '设置链接-文章4', 'deeplove' ),
        'section'               => 'propose',
        'settings'              => 'propose_post4_link',
    ) );
    $wp_customize->add_setting( 'propose_post5_image', array (
        'default'               => get_template_directory_uri() . '/images/bloghome1.jpg',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'propose_post5_image', array (
        'label' =>              __( '文章5', 'deeplove' ),
        'section'               => 'propose',
        'mime_type'             => 'image',
        'settings'              => 'propose_post5_image',
    ) ) );

    $wp_customize->add_setting( 'propose_post5_link', array (
        'default'               => __( '#', 'deeplove' ),
        'transport' => 'postMessage'
    ) );

    $wp_customize->add_control( 'propose_post5_link', array (
        'label' =>              __( '设置链接-文章5', 'deeplove' ),
        'section'               => 'propose',
        'settings'              => 'propose_post5_link',
    ) );
    $wp_customize->add_setting( 'propose_post6_image', array (
        'default'               => get_template_directory_uri() . '/images/bloghome2.jpg',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'propose_post6_image', array (
        'label' =>              __( '文章6', 'deeplove' ),
        'section'               => 'propose',
        'mime_type'             => 'image',
        'settings'              => 'propose_post6_image',
    ) ) );

    $wp_customize->add_setting( 'propose_post6_link', array (
        'default'               => __( '#', 'deeplove' ),
        'transport' => 'postMessage'
    ) );

    $wp_customize->add_control( 'propose_post6_link', array (
        'label' =>              __( '设置链接-文章6', 'deeplove' ),
        'section'               => 'propose',
        'settings'              => 'propose_post6_link',
    ) );

    $wp_customize->add_setting( 'propose_post7_image', array (
        'default'               => get_template_directory_uri() . '/images/bloghome3.jpg',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'propose_post7_image', array (
        'label' =>              __( '文章7', 'deeplove' ),
        'section'               => 'propose',
        'mime_type'             => 'image',
        'settings'              => 'propose_post7_image',
    ) ) );

    $wp_customize->add_setting( 'propose_post7_link', array (
        'default'               => __( '#', 'deeplove' ),
        'transport' => 'postMessage'
    ) );

    $wp_customize->add_control( 'propose_post7_link', array (
        'label' =>              __( '设置链接-文章7', 'deeplove' ),
        'section'               => 'propose',
        'settings'              => 'propose_post7_link',
    ) );

    $wp_customize->add_setting( 'propose_post8_image', array (
        'default'               => get_template_directory_uri() . '/images/bloghome4.jpg',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'propose_post8_image', array (
        'label' =>              __( '文章8', 'deeplove' ),
        'section'               => 'propose',
        'mime_type'             => 'image',
        'settings'              => 'propose_post8_image',
    ) ) );

    $wp_customize->add_setting( 'propose_post8_link', array (
        'default'               => __( '#', 'deeplove' ),
        'transport' => 'postMessage'
    ) );

    $wp_customize->add_control( 'propose_post8_link', array (
        'label' =>              __( '设置链接-文章8', 'deeplove' ),
        'section'               => 'propose',
        'settings'              => 'propose_post8_link',
    ) );
}
add_action( 'customize_register', 'deeplove_customize_register' );
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function deeplove_customize_preview_js() {
	wp_enqueue_script( 'deeplove_customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '', true );
}
add_action( 'customize_preview_init', 'deeplove_customize_preview_js' );