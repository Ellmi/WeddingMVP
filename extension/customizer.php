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
	$wp_customize->add_panel( 'slider', array (
		'title'                 => __( '幻灯片', 'deeplove' ),
		'description'           => __( 'Customize the slider. Deeplove includes 3 slides', 'deeplove' ),
		'priority'              => 10
	) );

	// 1st slide
	$wp_customize->add_section( 'slide1', array (
		'title'                 => __( 'Slide #1', 'deeplove' ),
		'description'           => __( 'Use the settings below to upload your images, set main callout text and button text & URLs', 'deeplove' ),
		'panel'                 => 'slider',
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
		'panel'                 => 'slider',
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
		'panel'                 => 'slider',
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

	//PostZone3
	$wp_customize->add_panel( 'PostZone3', array (
		'title'                 => __( 'PostZone3', 'deeplove' ),
		'description'           => __( 'Customize the Posts. Deeplove includes 3 posts', 'deeplove' ),
		'priority'              => 10
	) );

	$wp_customize->add_section( 'PostZone3Title', array (
		'title'                 => __( 'Title', 'deeplove' ),
		'description'           => __( 'Customize the Posts. Deeplove includes 3 posts', 'deeplove' ),
		'panel'              => 'PostZone3'
	) );
	$wp_customize->add_setting( 'PostZone3_title', array (
		'default'               => __( 'PostZone3 title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post2_detail', array (
		'label' =>              __( '设置标题', 'deeplove' ),
		'section'               => 'PostZone3Title',
		'settings'              => 'PostZone3_title'
	) );

	$wp_customize->add_section( 'PostZone3Post1', array (
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
		'section'               => 'PostZone3Post1',
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
		'section'               => 'PostZone3Post1',
		'settings'              => 'PostZone3_post1_title',
	) );

	$wp_customize->add_setting( 'PostZone3_post1_detail', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post1_detail', array (
		'label' =>              __( '设置内容', 'deeplove' ),
		'section'               => 'PostZone3Post1',
		'settings'              => 'PostZone3_post1_detail',
		'type'           => 'textarea'
	) );

	$wp_customize->add_section( 'PostZone3Post2', array (
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
		'section'               => 'PostZone3Post2',
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
		'section'               => 'PostZone3Post2',
		'settings'              => 'PostZone3_post2_title',
	) );

	$wp_customize->add_setting( 'PostZone3_post2_detail', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post2_detail', array (
		'label' =>              __( '设置内容', 'deeplove' ),
		'section'               => 'PostZone3Post2',
		'settings'              => 'PostZone3_post2_detail',
		'type'           => 'textarea'
	) );

	$wp_customize->add_section( 'PostZone3Post3', array (
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
		'section'               => 'PostZone3Post3',
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
		'section'               => 'PostZone3Post3',
		'settings'              => 'PostZone3_post3_title',
	) );

	$wp_customize->add_setting( 'PostZone3_post3_detail', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post3_detail', array (
		'label' =>              __( '设置内容', 'deeplove' ),
		'section'               => 'PostZone3Post3',
		'settings'              => 'PostZone3_post3_detail',
		'type'           => 'textarea'
	) );



	$wp_customize->add_section( 'PostZone3Post4', array (
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
		'section'               => 'PostZone3Post4',
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
		'section'               => 'PostZone3Post4',
		'settings'              => 'PostZone3_post4_title',
	) );

	$wp_customize->add_setting( 'PostZone3_post4_detail', array (
		'default'               => __( 'office introduction title', 'deeplove' ),
		'transport' => 'postMessage'
	) );

	$wp_customize->add_control( 'PostZone3_post4_detail', array (
		'label' =>              __( '设置内容', 'deeplove' ),
		'section'               => 'PostZone3Post4',
		'settings'              => 'PostZone3_post4_detail',
		'type'           => 'textarea'
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