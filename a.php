
//painting
$wp_painting->add_section( 'painting', array (
'title'                 => __( '求婚策划', 'deeplove' ),
'panel'                 => 'wedding',
) );

$wp_painting->add_setting( 'painting_topic_picture_setting', array (
'default'               => get_template_directory_uri() . '/images/slides/slider3.jpg',
'transport'             => 'postMessage',
'sanitize_callback'     => 'esc_url_raw'
) );

$wp_painting->add_control( new WP_painting_Image_Control( $wp_painting, 'painting_topic_picture_control', array (
'label' =>              __( '专题介绍——图片', 'deeplove' ),
'section'               => 'painting',
'mime_type'             => 'image',
'settings'              => 'painting_topic_picture_setting',
) ) );

$wp_painting->add_setting( 'painting_topic_text_title_setting', array (
'default'               => 'OUR STORY',
'transport'             => 'postMessage'
) );

$wp_painting->add_control( 'painting_topic_text_title_control', array (
'label' =>              __( '专题介绍——文字标题', 'deeplove' ),
'type'                  => 'text',
'section'               => 'painting',
'settings'              => 'painting_topic_text_title_setting',
) );

$wp_painting->add_setting( 'painting_topic_text_detail_setting', array (
'default'               => 'Thank you for choosing CosmoThemes and purchasing one of our Premium WordPress Themes your choice is greatly appreciated!',
'transport'             => 'postMessage'
) );

$wp_painting->add_control( 'painting_topic_text_detail_control', array (
'label' =>              __( '专题介绍——文字内容', 'deeplove' ),
'type'                  => 'textarea',
'section'               => 'painting',
'settings'              => 'painting_topic_text_detail_setting',
) );


$wp_painting->add_setting( 'painting_process_setting', array (
'default'               => get_template_directory_uri() . '/images/slides/slider2.jpg',
'transport'             => 'postMessage',
'sanitize_callback'     => 'esc_url_raw'
) );

$wp_painting->add_control( new WP_painting_Image_Control( $wp_painting, 'painting_process_control', array (
'label' =>              __( '流程介绍图', 'deeplove' ),
'section'               => 'painting',
'mime_type'             => 'image',
'settings'              => 'painting_process_setting',
) ) );

$wp_painting->add_setting( 'painting_posts_title', array (
'default'               => __( '求婚案例', 'deeplove' ),
'transport' => 'postMessage'
) );

$wp_painting->add_control( 'painting_posts_title', array (
'label' =>              __( '设置案例标题', 'deeplove' ),
'section'               => 'painting',
'settings'              => 'painting_posts_title',
) );

$wp_painting->add_setting( 'painting_post1_image', array (
'default'               => get_template_directory_uri() . '/images/bloghome4.jpg',
'transport'             => 'postMessage',
'sanitize_callback'     => 'esc_url_raw'
) );

$wp_painting->add_control( new WP_painting_Image_Control( $wp_painting, 'painting_post1_image', array (
'label' =>              __( '文章1', 'deeplove' ),
'section'               => 'painting',
'mime_type'             => 'image',
'settings'              => 'painting_post1_image',
) ) );

$wp_painting->add_setting( 'painting_post1_link', array (
'default'               => __( '#', 'deeplove' ),
'transport' => 'postMessage'
) );

$wp_painting->add_control( 'painting_post1_link', array (
'label' =>              __( '设置链接-文章1', 'deeplove' ),
'section'               => 'painting',
'settings'              => 'painting_post1_link',
) );

$wp_painting->add_setting( 'painting_post2_image', array (
'default'               => get_template_directory_uri() . '/images/bloghome4.jpg',
'transport'             => 'postMessage',
'sanitize_callback'     => 'esc_url_raw'
) );

$wp_painting->add_control( new WP_painting_Image_Control( $wp_painting, 'painting_post2_image', array (
'label' =>              __( '文章2', 'deeplove' ),
'section'               => 'painting',
'mime_type'             => 'image',
'settings'              => 'painting_post2_image',
) ) );

$wp_painting->add_setting( 'painting_post2_link', array (
'default'               => __( '#', 'deeplove' ),
'transport' => 'postMessage'
) );

$wp_painting->add_control( 'painting_post2_link', array (
'label' =>              __( '设置链接-文章2', 'deeplove' ),
'section'               => 'painting',
'settings'              => 'painting_post2_link',
) );
$wp_painting->add_setting( 'painting_post3_image', array (
'default'               => get_template_directory_uri() . '/images/bloghome3.jpg',
'transport'             => 'postMessage',
'sanitize_callback'     => 'esc_url_raw'
) );

$wp_painting->add_control( new WP_painting_Image_Control( $wp_painting, 'painting_post3_image', array (
'label' =>              __( '文章3', 'deeplove' ),
'section'               => 'painting',
'mime_type'             => 'image',
'settings'              => 'painting_post3_image',
) ) );

$wp_painting->add_setting( 'painting_post3_link', array (
'default'               => __( '#', 'deeplove' ),
'transport' => 'postMessage'
) );

$wp_painting->add_control( 'painting_post3_link', array (
'label' =>              __( '设置链接-文章3', 'deeplove' ),
'section'               => 'painting',
'settings'              => 'painting_post3_link',
) );

$wp_painting->add_setting( 'painting_post4_image', array (
'default'               => get_template_directory_uri() . '/images/bloghome4.jpg',
'transport'             => 'postMessage',
'sanitize_callback'     => 'esc_url_raw'
) );

$wp_painting->add_control( new WP_painting_Image_Control( $wp_painting, 'painting_post4_image', array (
'label' =>              __( '文章4', 'deeplove' ),
'section'               => 'painting',
'mime_type'             => 'image',
'settings'              => 'painting_post4_image',
) ) );

$wp_painting->add_setting( 'painting_post4_link', array (
'default'               => __( '#', 'deeplove' ),
'transport' => 'postMessage'
) );

$wp_painting->add_control( 'painting_post4_link', array (
'label' =>              __( '设置链接-文章4', 'deeplove' ),
'section'               => 'painting',
'settings'              => 'painting_post4_link',
) );
$wp_painting->add_setting( 'painting_post5_image', array (
'default'               => get_template_directory_uri() . '/images/bloghome1.jpg',
'transport'             => 'postMessage',
'sanitize_callback'     => 'esc_url_raw'
) );

$wp_painting->add_control( new WP_painting_Image_Control( $wp_painting, 'painting_post5_image', array (
'label' =>              __( '文章5', 'deeplove' ),
'section'               => 'painting',
'mime_type'             => 'image',
'settings'              => 'painting_post5_image',
) ) );

$wp_painting->add_setting( 'painting_post5_link', array (
'default'               => __( '#', 'deeplove' ),
'transport' => 'postMessage'
) );

$wp_painting->add_control( 'painting_post5_link', array (
'label' =>              __( '设置链接-文章5', 'deeplove' ),
'section'               => 'painting',
'settings'              => 'painting_post5_link',
) );
$wp_painting->add_setting( 'painting_post6_image', array (
'default'               => get_template_directory_uri() . '/images/bloghome2.jpg',
'transport'             => 'postMessage',
'sanitize_callback'     => 'esc_url_raw'
) );

$wp_painting->add_control( new WP_painting_Image_Control( $wp_painting, 'painting_post6_image', array (
'label' =>              __( '文章6', 'deeplove' ),
'section'               => 'painting',
'mime_type'             => 'image',
'settings'              => 'painting_post6_image',
) ) );

$wp_painting->add_setting( 'painting_post6_link', array (
'default'               => __( '#', 'deeplove' ),
'transport' => 'postMessage'
) );

$wp_painting->add_control( 'painting_post6_link', array (
'label' =>              __( '设置链接-文章6', 'deeplove' ),
'section'               => 'painting',
'settings'              => 'painting_post6_link',
) );

$wp_painting->add_setting( 'painting_post7_image', array (
'default'               => get_template_directory_uri() . '/images/bloghome3.jpg',
'transport'             => 'postMessage',
'sanitize_callback'     => 'esc_url_raw'
) );

$wp_painting->add_control( new WP_painting_Image_Control( $wp_painting, 'painting_post7_image', array (
'label' =>              __( '文章7', 'deeplove' ),
'section'               => 'painting',
'mime_type'             => 'image',
'settings'              => 'painting_post7_image',
) ) );

$wp_painting->add_setting( 'painting_post7_link', array (
'default'               => __( '#', 'deeplove' ),
'transport' => 'postMessage'
) );

$wp_painting->add_control( 'painting_post7_link', array (
'label' =>              __( '设置链接-文章7', 'deeplove' ),
'section'               => 'painting',
'settings'              => 'painting_post7_link',
) );

$wp_painting->add_setting( 'painting_post8_image', array (
'default'               => get_template_directory_uri() . '/images/bloghome4.jpg',
'transport'             => 'postMessage',
'sanitize_callback'     => 'esc_url_raw'
) );

$wp_painting->add_control( new WP_painting_Image_Control( $wp_painting, 'painting_post8_image', array (
'label' =>              __( '文章8', 'deeplove' ),
'section'               => 'painting',
'mime_type'             => 'image',
'settings'              => 'painting_post8_image',
) ) );

$wp_painting->add_setting( 'painting_post8_link', array (
'default'               => __( '#', 'deeplove' ),
'transport' => 'postMessage'
) );

$wp_painting->add_control( 'painting_post8_link', array (
'label' =>              __( '设置链接-文章8', 'deeplove' ),
'section'               => 'painting',
'settings'              => 'painting_post8_link',
) );
