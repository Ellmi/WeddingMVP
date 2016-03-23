<?php
/**
 * Initialize the meta boxes.
 */

add_action( 'admin_init', 'tzeverline_custom_meta_boxes');

/*
 * Methor add meta boxes for custom post type
 */
function tzeverline_custom_meta_boxes(){

    /**
     * Create a custom meta boxes array that we pass to
     * the OptionTree Meta Box API Class.
     */

    $portfolio_meta_box =   array(
      'id'          =>  'portfolio_meta_box',
      'title'       =>  'Porfolio Style',
      'desc'        =>  '',
        'pages'       => array( 'portfolio'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
            array(
                'label'     => __('Show or hide sidebar ?', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_single_sidebar',
                'type'      => 'select',
                'desc'      => '',
                'std'       => 'no',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   => array(
                    array(
                        'value' => 'yes',
                        'label' => __('Yes', TEXT_DOMAIN),
                        'src'   => ''
                    ),
                    array(
                        'value' => 'no',
                        'label' => __('No', TEXT_DOMAIN),
                        'src'   => ''
                    )
                ),
            ),
            array(
                'label'     =>  __('Portfolio Type', TEXT_DOMAIN),
                'id'        =>  THEME_PREFIX . '_portfolio_type',
                'type'      =>  'select',
                'desc'      =>  __('Option type potfolio', TEXT_DOMAIN),
                'std'       =>  'none',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' => 'none',
                        'label' => 'None'
                    ),
                    array(
                        'value' => 'image',
                        'label' => __('Image', TEXT_DOMAIN)
                    ),
                    array(
                        'value' => 'slideshows',
                        'label' => __('Slideshows', TEXT_DOMAIN)
                    ),
                    array(
                        'value' => 'videoid',
                        'label' => __('Video', TEXT_DOMAIN)
                    ),
                    array(
                        'value' => 'audio',
                        'label' => __('Audio Soundcloud', TEXT_DOMAIN)
                    )
                ),

            ),
            array(
                'label'     => __('Image', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_portfolio_image',
                'type'      => 'upload',
                'desc'      => ''
            ),
            array(
                'label'     => __('Slideshow', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_portfolio_slideshows',
                'type'      => 'list-item',
                'desc'      => '',
                'class'     => 'portfolio-slideshows',
                'settings'  => array(
                    array(
                        'id'        => THEME_PREFIX . '_portfolio_slideshow_item',
                        'label'     => __('Image', TEXT_DOMAIN),
                        'type'      => 'upload',
                        'class'     => 'portfolio-slideshow-item',
                    )
                )
            ),
            array(

                'id'        => THEME_PREFIX . '_portfolio_video_type',
                'label'     => __('Video Type', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',

                'choices' =>  array(
                    array(
                        'value'   =>  'youtube',
                        'label'   =>  __('Youtube', TEXT_DOMAIN)
                    ),
                    array(
                        'value'  =>  'vimeo',
                        'label'   => __('vimeo', TEXT_DOMAIN)
                    ),
                ),

            ),

            array(
                'label'     => __('Video ID', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_portfolio_video',
                'type'      => 'textarea',
                'desc'      => '',
                'std'       => '',
                'rows'      => '4',
            ),
            array(
                'label'     => __('soundcloud id', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_portfolio_soundCloud_id',
                'type'      => 'text',
                'desc'      => __('Only use for soundcloud', TEXT_DOMAIN),
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

        )
    );

    $post_meta_box =   array(
        'id'          =>  'post_meta_box',
        'title'       =>  __('Post Option', TEXT_DOMAIN),
        'desc'        =>  '',
        'pages'       => array( 'post'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
            array(
                'label'     =>  __('Post Type', TEXT_DOMAIN),
                'id'        =>  THEME_PREFIX . '_portfolio_type',
                'type'      =>  'select',
                'desc'      =>  __('Option type Post', TEXT_DOMAIN),
                'std'       =>  'none',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' => 'none',
                        'label' => __('None', TEXT_DOMAIN)
                    ),
                    array(
                        'value' => 'image',
                        'label' => __('Image', TEXT_DOMAIN)
                    ),
                    array(
                        'value' => 'video',
                        'label' => __('Video', TEXT_DOMAIN)
                    ),
                    array(
                        'value' => 'audio',
                        'label' => __('Audio', TEXT_DOMAIN)
                    ),
                    array(
                        'value' => 'quote',
                        'label' => __('Quote', TEXT_DOMAIN)
                    ),
                    array(
                        'value' => 'slideshows',
                        'label' => __('Slideshows', TEXT_DOMAIN)
                    )
                ),

            ),
            array(
                'label'     => __('Image', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_portfolio_image',
                'type'      => 'upload',
                'desc'      => ''
            ),
            array(
                'label'     => __('Slideshow', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_portfolio_slideshows',
                'type'      => 'list-item',
                'desc'      => '',
                'class'     => 'portfolio-slideshows',
                'settings'  => array(
                    array(
                        'id'        => THEME_PREFIX . '_portfolio_slideshow_item',
                        'label'     => __('Image', TEXT_DOMAIN),
                        'type'      => 'upload',
                        'class'     => 'portfolio-slideshow-item',
                    )
                )
            ),
            array(
                'label'     => __('SoundCloud ID', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_portfolio_soundCloud_id',
                'type'      => 'text',
                'desc'      => __('Only use for the SoundCloud', TEXT_DOMAIN),
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => 'SoundCloudImage'
            ),

            array(
                'label'     => __('Quote Content', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_portfolio_Quote_content',
                'type'      => 'textarea',
                'desc'      => '',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => ''
            ),
            array(
                'label'     => __('Quote Author', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_portfolio_Quote_ds',
                'type'      => 'text',
                'desc'      => '',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => ''
            ),

            array(
                'label'     => __('Video MP4', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_portfolio_video_mp4',
                'type'      => 'upload',
                'desc'      => '',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => ''
            ),
            array(
                'label'     => __('Video OGV', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_portfolio_video_ogv',
                'type'      => 'upload',
                'desc'      => '',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => ''
            ),
            array(
                'label'     => __('Video WEBM', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_portfolio_video_webm',
                'type'      => 'upload',
                'desc'      => '',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => ''
            ),
            array(
                'label'     => __('Background Video', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_bk_video',
                'type'      => 'upload',
                'desc'      => '',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => ''
            ),
        )
    );

    $pageportfolio_meta_box =   array(
        'id'          =>  'page_meta_box',
        'title'       =>  __('Portfolio Option', TEXT_DOMAIN),
        'desc'        =>  '',
        'pages'       => array( 'page'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(

            array(
                'id'        =>  THEME_PREFIX.'_portfolio_full',
                'label'     => __('Portfolio style', TEXT_DOMAIN),
                'desc'      =>  '',
                'sdt'       =>  'maxwidth',
                'type'      =>  'select',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  'maxwidth',
                        'label' =>  __('Portfolio box', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'fullwidth',
                        'label' =>  __('Full width', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'mansory',
                        'label' =>  __('Portfolio Mansory', TEXT_DOMAIN),
                    ),
                )
            ),
            array(
                'id'        =>  THEME_PREFIX.'_portfolio_sidebar',
                'label'     => __('Show or hide sidebar', TEXT_DOMAIN),
                'desc'      =>  '',
                'sdt'       =>  0,
                'type'      =>  'select',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  0,
                        'label' =>  __('Hide', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  1,
                        'label' =>  __('Display sidebar on right side', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  2,
                        'label' =>  __('Display sidebar on left side', TEXT_DOMAIN),
                    )
                )
            ),
            array(
                'id' =>  THEME_PREFIX.'_portfolio_column',
                'label'     => __('Config Portfolio Column', TEXT_DOMAIN),
                'desc'      => '------------------',
                'std'       => '',
                'type'      => 'textblock-titled',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            array(
                'id'        =>  THEME_PREFIX.'_desktop_column',
                'label'     => __('Desktop column', TEXT_DOMAIN),
                'desc'      =>  '',
                'sdt'       =>  '4',
                'type'      =>  'select',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    )
                )
            ),
            array(
                'id'        =>  THEME_PREFIX.'_tabletportrait_column',
                'label'     =>  __('tablet portrait column', TEXT_DOMAIN),
                'desc'      =>  '',
                'sdt'       =>  '2',
                'type'      =>  'select',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                )
            ),
            array(
                'id'        =>  THEME_PREFIX.'_mobilelandscape_column',
                'label'     =>  __('mobile landscape column', TEXT_DOMAIN),
                'desc'      =>  '',
                'sdt'       =>  '2',
                'type'      =>  'select',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                )
            ),
            array(
                'id'        =>  THEME_PREFIX.'_mobileportrait_column',
                'label'     =>  __('mobile portrait column', TEXT_DOMAIN),
                'desc'      =>  '',
                'sdt'       =>  '1',
                'type'      =>  'select',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                )
            ),

            array(
                'id'        => THEME_PREFIX.'_portfolio_catid',
                'label'     => __('Category', TEXT_DOMAIN),
                'desc'      => __('Choose category portfolio', TEXT_DOMAIN),
                'std'       => '',
                'type'      => 'taxonomy-checkbox',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => 'portfolio-category',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX.'_portfolio_limit',
                'label'     => __('Limit portfolio', TEXT_DOMAIN),
                'desc'      => '',
                'std'       => '10',
                'type'      => 'text',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        =>  THEME_PREFIX.'_porfolio_orderby',
                'label'     => __('Orderby', TEXT_DOMAIN),
                'desc'      =>  '',
                'sdt'       =>  'date',
                'type'      =>  'select',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  'date',
                        'label' =>  __('Date', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'title',
                        'label' =>  __('Title', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'id',
                        'label' =>  __('ID', TEXT_DOMAIN),
                    ),
                )
            ),
            array(
                'id'        =>  THEME_PREFIX.'_porfolio_order',
                'label'     =>  __('Order', TEXT_DOMAIN),
                'desc'      =>  '',
                'sdt'       =>  'desc',
                'type'      =>  'select',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  'desc',
                        'label' =>  __('Z ---> A', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'asc',
                        'label' =>  __('A ---> Z', TEXT_DOMAIN),
                    ),
                )
            ),
            array(
                'id'        =>  THEME_PREFIX.'_porfolio_loadding',
                'label'     => __('Image loadding', TEXT_DOMAIN),
                'desc'      =>  '',
                'sdt'       =>  '',
                'type'      =>  'upload',
                'class'     =>  '',
            )
        ) // end fields
    );

    $pageblog_meta_box =   array(
        'id'          =>  'page_blog_meta_box',
        'title'       =>  __('Blog Option', TEXT_DOMAIN),
        'desc'        =>  '',
        'pages'       => array( 'page'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
            array(
                'id'        =>  THEME_PREFIX.'_ds_column',
                'label'     => __('Config Blog Column', TEXT_DOMAIN),
                'desc'      => '------------------',
                'std'       => '',
                'type'      => 'textblock-titled',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            array(
                'id'        =>  THEME_PREFIX.'_blog_column',
                'label'     =>  __('Blog column', TEXT_DOMAIN),
                'desc'      =>  '',
                'sdt'       =>  '4',
                'type'      =>  'select',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    )
                )
            ),
            array(
                'id'        => THEME_PREFIX.'_blog_catid',
                'label'     => __('Category', TEXT_DOMAIN),
                'desc'      => __('Choose category blog', TEXT_DOMAIN),
                'std'       => '',
                'type'      => 'category-select',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX.'_blog_limit',
                'label'     => __('Limit blog', TEXT_DOMAIN),
                'desc'      => '',
                'std'       => '10',
                'type'      => 'text',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            // Show or hide Date
            array(
                'id'        => THEME_PREFIX . '_tzpostSidebar',
                'label'     => __('Show Sidebar', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'choices'   =>  array(
                    array(
                        'value' =>  0,
                        'label' =>  __('Hide', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  1,
                        'label' =>  __('Show sidebar left', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  2,
                        'label' =>  __('Show sidebar right', TEXT_DOMAIN),
                    )
                ),

            ),

            // Show or hide Date
            array(
                'id'        => THEME_PREFIX . '_tzpostDate',
                'label'     => __('Show Date', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  __('Show', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  __('Hide', TEXT_DOMAIN),
                    ),
                ),

            ),

            // Show or hide Category
            array(
                'id'        => THEME_PREFIX . '_tzpostCategory',
                'label'     => __('Show Category', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  __('Show', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  __('Hide', TEXT_DOMAIN),
                    ),
                ),

            ),


            // Show or hide Comments
            array(
                'id'        => THEME_PREFIX . '_tzpostComments',
                'label'     => __('Show Comments', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  __('Show', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  __('Hide', TEXT_DOMAIN),
                    ),
                ),

            ),

            // Show or hide image
            array(
                'id'        => THEME_PREFIX . '_tzpostthumbnail',
                'label'     => __('Show thumbnail', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  __('Show', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  __('Hide', TEXT_DOMAIN),
                    ),
                ),

            ),

            // Show or hide excerpt
            array(
                'id'        => THEME_PREFIX . '_tzpostexcerpt',
                'label'     => __('Show Excerpt', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  __('Show', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  __('Hide', TEXT_DOMAIN),
                    ),
                ),

            ),
        ) // end fields
    );

    $team_meta_box =   array(
        'id'          =>  'page_team_meta_box',
        'title'       =>  __('Team Member', TEXT_DOMAIN),
        'desc'        =>  '',
        'pages'       => array( 'ourteam'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
            array(
                'id'        =>  THEME_PREFIX.'_team_name',
                'label'     => __('Name', TEXT_DOMAIN),
                'desc'      =>  '',
                'sdt'       =>  '',
                'type'      =>  'text',
                'class'     =>  ''
            ),
            array(
                'id'        =>  THEME_PREFIX.'_team_Position',
                'label'     => __('Position', TEXT_DOMAIN),
                'desc'      =>  '',
                'sdt'       =>  '4',
                'type'      =>  'text',
                'class'     =>  ''
            ),
            array(
                'id'        =>  THEME_PREFIX.'_team_link',
                'label'     => __('Link', TEXT_DOMAIN),
                'desc'      =>  '',
                'sdt'       =>  '4',
                'type'      =>  'text',
                'class'     =>  ''
            )
        ) // end fields
    );

    $playlist =   array(
        'id'          =>  'playlist',
        'title'       =>  __('Upload Music', TEXT_DOMAIN),
        'desc'        =>  '',
        'pages'       => array( 'playlist'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
            array(
                'label'     => __('MP3', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_playlist_mp3',
                'type'      => 'upload',
                'desc'      => __('*.mp3', TEXT_DOMAIN),
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => ''
            ),
            array(
                'label'     => __('OGG', TEXT_DOMAIN),
                'id'        => THEME_PREFIX . '_playlist_ogg',
                'type'      => 'upload',
                'desc'      => __('*.ogg', TEXT_DOMAIN),
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => ''
            ),

        )
    );

    /**
     * Register our meta boxes using the
     * ot_register_meta_box() function.
     */
    ot_register_meta_box( $portfolio_meta_box );



    ot_register_meta_box( $post_meta_box );

    ot_register_meta_box( $pageportfolio_meta_box );

    ot_register_meta_box( $pageblog_meta_box );

    ot_register_meta_box( $team_meta_box );

    ot_register_meta_box( $playlist );


}
?>