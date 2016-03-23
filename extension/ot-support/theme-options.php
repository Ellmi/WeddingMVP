<?php


update_option( 'ot_hide_cleanup', 1 );
/*
 * Initialize the options before anything else.
 */

/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );

add_action('admin_init','tzeverline_theme_options',1);

/*
 * Build the custom settings & update OptionTree.
*/

function tzeverline_theme_options()
{

    /**
     * Get a copy of the saved settings array.
     */
    $saved_settings = get_option('option_tree_settings', array());

    // Pattern
    $patterns = array();
    if ($dir = opendir(SERVER_PATH . '/images/patterns/')) {
        while (false !== ($file = readdir($dir))) {
            if ($file != '..' && $file != '.') {
                $patterns[] = array(
                    'value' => trim($file),
                    'label' => 'Click on pattern to preview',
                    'src'   => THEME_PATH . '/images/patterns/' . $file, 40, 40, true
                );
            }
        }
        // Close directory handle
        closedir($dir);
    }
    /**
     * Custom settings array that will eventually be
     * passes to the OptionTree Settings API Class.
     */
    $custom_settings = array(
        'contextual_help' => array(
            'content' => array(
                array(
                    'id'      => 'general_help',
                    'title'   => 'General',
                    'content' => '<p>Help content goes here!</p>'
                ),
            ),
            'sidebar' => '<p>Sidebar content goes here!</p>'
        ),
        'sections'        => array(
            array(
                'id'    => 'logo',
                'title' => __('Logo & Favicon', TEXT_DOMAIN),
            ),
            array(
                'id'    => 'footeroption',
                'title' => __('Footer Options', TEXT_DOMAIN),
            ),
            array(
                'id'    => '404',
                'title' => __('404 Page', TEXT_DOMAIN),
            ),
            array(
                'id'    =>  'google_analytics',
                'title' =>  __('Google Analytics', TEXT_DOMAIN),
            ),
            array(
                'id'    =>  'TzSyle',
                'title' =>  __('Font Option', TEXT_DOMAIN),
            ),
            array(
                'id'    =>  'TZBody',
                'title' =>  __('Body Style', TEXT_DOMAIN),
            ),

            array(
                'id'    =>  'TzFontHeader',
                'title' =>  __('Header Style', TEXT_DOMAIN),
            ),
            array(
                'id'    =>  'TzFontMenu',
                'title' =>  __('Menu Style', TEXT_DOMAIN),
            ),
            array(
                'id'    =>  'TzFontCustom',
                'title' =>  __('Custom Style', TEXT_DOMAIN),
            ),
            array(
                'id'    =>  'TzCustomCss',
                'title' =>  __('Custom CSS', TEXT_DOMAIN),
            ),
            array(
                'id'    =>  'TZThemecolor',
                'title' =>  __('Theme Color', TEXT_DOMAIN),
            ),
            array(
                'id'    =>  'TZBackground',
                'title' =>  __('Theme style', TEXT_DOMAIN),
            ),
            array(
                'id'    =>  'TZBlog',
                'title' =>  __('Blog Option', TEXT_DOMAIN),
            ),
            array(
                'id'    =>  'TZShop',
                'title' =>  __('Shop Option', TEXT_DOMAIN),
            )
        ),

        'settings'        => array(

            array(
                'id'        => THEME_PREFIX . '_logotype',
                'label'     => __('Logo Type', TEXT_DOMAIN),
                'desc'      => __('select type for logo text or image', TEXT_DOMAIN),
                'std'       => '1',
                'type'      => 'select',
                'section'   => 'logo',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   => array(
                    array(
                        'value' => '1',
                        'label' => __('Logo image', TEXT_DOMAIN),
                    ),
                    array(
                        'value' => '0',
                        'label' => __('Logo text', TEXT_DOMAIN),
                    )
                ),
            ),
            array(
                'id'        => THEME_PREFIX . '_logoText',
                'label'     => __('Logo Text', TEXT_DOMAIN),
                'desc'      => __('logo name for your website', TEXT_DOMAIN),
                'std'       => '',
                'type'      => 'text',
                'section'   => 'logo',
            ),

            array(
                'id'        =>  THEME_PREFIX. '_logoTextcolor',
                'label'     => __('Color logo', TEXT_DOMAIN),
                'desc'      => __('logo text color', TEXT_DOMAIN),
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'logo',
            ),

            array(
                'id'        => THEME_PREFIX . '_logo',
                'label'     => __('Upload Logo', TEXT_DOMAIN),
                'desc'      => __('Logo using for home page and page shop', TEXT_DOMAIN),
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'logo',
            ),


            array(
                'id'        => THEME_PREFIX . '_favicon_onoff',
                'label'     => __('Enable Favicon', TEXT_DOMAIN),
                'desc'      => __('Show or hide Favicon', TEXT_DOMAIN),
                'std'       => 'no',
                'type'      => 'select',
                'section'   => 'logo',
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
                'id'        => THEME_PREFIX . '_favicon',
                'label'     => __('Upload Favicon Icon', TEXT_DOMAIN),
                'desc'      => __('Please choose an image  to use for favicon.', TEXT_DOMAIN),
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'logo',
            ),

            /* ==========================================
            *  footer option
            ==========================================*/
            array(
                'id'        =>  THEME_PREFIX. 'footer_description',
                'label'     =>  __('Footer Widgets', TEXT_DOMAIN),
                'desc'      =>  __('Config footer', TEXT_DOMAIN),
                'std'       =>  '',
                'type'      => 'textblock-titled',
                'section'   => 'footeroption',
                'rows'      => '5',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        =>  THEME_PREFIX.'footer_image',
                'label'     => '',
                'desc'      =>  '',
                'sdt'       =>  '',
                'type'      =>  'radio-image',
                'section'   =>  'footeroption',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  'footer1',
                        'label' =>  '',
                        'src'   =>  THEME_PATH.'/extension/assets/images/footer1.jpg'
                    ),
                    array(
                        'value' =>  'footer2',
                        'label' =>  '',
                        'src'   =>  THEME_PATH.'/extension/assets/images/footer2.jpg'
                    ),
                    array(
                        'value' =>  'footer3',
                        'label' =>  '',
                        'src'   =>  THEME_PATH.'/extension/assets/images/footer3.jpg'
                    ),
                )
            ),
            array(
                'label'     =>  __('Number of Footer Columns.', TEXT_DOMAIN),
                'id'        =>  THEME_PREFIX. '_footer_columns',
                'desc'      =>  __('Select the number of columns to display in the footer.', TEXT_DOMAIN),
                'section'   =>  'footeroption',
                'std'       =>  '3',
                'type'      =>  'select',
                'choices'   =>  array(
                    array(
                        'value' =>  '3',
                        'label' =>  '3'
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2'
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  '1'
                    ),
                )
            ),
            array(
                'id'      =>    THEME_PREFIX. 'footerwidth1',
                'label'   =>    __('Footer width 1', TEXT_DOMAIN),
                'desc'    =>    __('config width for footer', TEXT_DOMAIN),
                'section' =>    'footeroption',
                'std'     =>    '4',
                'type'    =>    'select',
                'choices' =>    array(
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
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' =>  '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            array(
                'id'      =>    THEME_PREFIX. 'footerwidth2',
                'label'   =>    __('Footer width 2', TEXT_DOMAIN),
                'desc'    =>    __('config width for footer', TEXT_DOMAIN),
                'section' =>    'footeroption',
                'std'     =>    '4',
                'type'    =>    'select',
                'choices' =>    array(
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
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' =>  '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),
            array(
                'id'      =>    THEME_PREFIX. 'footerwidth3',
                'label'   =>    __('Footer width 3', TEXT_DOMAIN),
                'desc'    =>    __('config width for footer', TEXT_DOMAIN),
                'section' =>    'footeroption',
                'std'     =>    '4',
                'type'    =>    'select',
                'choices' =>    array(
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
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' =>  '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                )
            ),

            // Copyright Settings
            array(
                'id'        => THEME_PREFIX . '_404_bk',
                'label'     => __('404 Background', TEXT_DOMAIN),
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => '404',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_404_title',
                'label'     => __('404 Title', TEXT_DOMAIN),
                'desc'      => '',
                'std'       => __('404 ERROR!', TEXT_DOMAIN),
                'type'      => 'text',
                'section'   => '404',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_404_content',
                'label'     => __('404 Content', TEXT_DOMAIN),
                'desc'      => '',
                'std'       => __('Look like something went wrong! The page you were looking for is not here. Go Home or try a search.', TEXT_DOMAIN),
                'type'      => 'textarea-simple',
                'section'   => '404',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            // Google Analytics
            array(
                'id'        => THEME_PREFIX . '_google_analytics',
                'label'     => __('Google Analytics', TEXT_DOMAIN),
                'desc'      => 'Place the code you get from google here. This should be something like:<br /><br /><code>   // Google analytics <br /> var _gaq = _gaq || []; <br />_gaq.push(["_setAccount", "UA-XXXXXXX-XX"]); <br /> ...</code>',
                'std'       => '',
                'type'      => 'textarea-simple',
                'section'   => 'google_analytics',
                'rows'      => '4',
            ),


            // style option
            array(
                'id' =>  THEME_PREFIX.'_TzSyle',
                'label'     => __('StyleConfig', TEXT_DOMAIN),
                'desc'      => '<p>'.__('Config for body style, header style, menu style, custom style, background', TEXT_DOMAIN).'</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TzSyle',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            // font style body -----------------------------------------------------------------------
            array(
                'id'        =>  THEME_PREFIX. '_TZFontType',
                'label'     =>  __('Font Type', TEXT_DOMAIN),
                'desc'      =>  __('option font type', TEXT_DOMAIN),
                'std'       =>  '',
                'type'      =>  'select',
                'section'   =>  'TZBody',
                'rows'      =>  '',
                'post_type' =>  '',
                'taxonomy'  =>  '',
                'class'     =>  'btn-group',
                'choices'   =>  array(

                    array(
                        'value' =>  'Tzgoogle',
                        'label' =>  __('Goole Font', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'TzFontDefault',
                        'label' =>  __('Standard Font', TEXT_DOMAIN),
                    ),


                ),
            ),

            //  font
            array(
                'id'       =>   THEME_PREFIX.'_TzFontDefault',
                'label'    =>   __('Select Standard Font', TEXT_DOMAIN),
                'desc'     =>   __('Select a font to use font-family', TEXT_DOMAIN),
                'type'     =>   'select',
                'section'  =>   'TZBody',
                'class'    =>   'TzFontStylet',
                'choices'  =>   array(
                    array(
                        'value'  =>  'Arial',
                        'label'  =>  __('Arial', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Tahoma',
                        'label'  =>  __('Tahoma', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Verdana',
                        'label'  =>  __('Verdana', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Georgia',
                        'label'  =>  __('Georgia', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Impact',
                        'label'  =>  __('Impact', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Times',
                        'label'  =>  __('Times', TEXT_DOMAIN),
                    ),
                )
            ),



            // google url
            array(
                'id'    =>  THEME_PREFIX. '_TzFontFami',
                'label' =>  __('Google Url', TEXT_DOMAIN),
                'desc'  =>  __('import google font URL Eg: http://fonts.googleapis.com/css?family=Monsieur+La+Doulaise', TEXT_DOMAIN),
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TZBody'
            ),

            // body font
            array(
                'id'    =>  THEME_PREFIX. '_TzFontFaminy',
                'label' =>  __('Font Family', TEXT_DOMAIN),
                'desc'  =>  __('importeg google font-family Eg: Monsieur La Doulaise', TEXT_DOMAIN),
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TZBody',
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TzBodySelecter',
                'label'     =>  __('Body Selectors', TEXT_DOMAIN),
                'desc'      =>  __('you can specify a selector for font used in the document body eg: div#description', TEXT_DOMAIN),
                'std'       =>  '',
                'type'      =>  'textarea-simple',
                'section'   =>  'TZBody',
                'rows'      =>  '10',
            ),
            // color code

            array(
                'id'        =>  THEME_PREFIX. '_TzBodyColor',
                'label'     => __('Color code', TEXT_DOMAIN),
                'desc'      => __('Color for text', TEXT_DOMAIN),
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TZBody',
            ),
            // end font style body


            // font style Header -----------------------------------------------------------------------
            array(
                'id'        =>  THEME_PREFIX. '_TZFontTypeHead',
                'label'     =>  __('Font Type', TEXT_DOMAIN),
                'desc'      =>  __('option font type', TEXT_DOMAIN),
                'std'       =>  '',
                'type'      =>  'select',
                'section'   =>  'TzFontHeader',
                'rows'      =>  '',
                'post_type' =>  '',
                'taxonomy'  =>  '',
                'class'     =>  '',
                'choices'   =>  array(

                    array(
                        'value' =>  'Tzgoogle',
                        'label' =>  __('Goole Font', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'TzFontDefault',
                        'label' =>  __('Standard Font', TEXT_DOMAIN),
                    ),


                ),
            ),

            // Squirrel font
            array(
                'id'       =>   THEME_PREFIX.'_TzFontHeadDefault',
                'label'    =>   __('Select Standard Font', TEXT_DOMAIN),
                'desc'     =>   __('Select a font to use font-family', TEXT_DOMAIN),
                'type'     =>   'select',
                'section'  =>   'TzFontHeader',
                'choices'  =>   array(
                    array(
                        'value'  =>  'Arial',
                        'label'  =>  __('Arial', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Tahoma',
                        'label'  =>  __('Tahoma', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Verdana',
                        'label'  =>  __('Verdana', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Georgia',
                        'label'  =>  __('Georgia', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Impact',
                        'label'  =>  __('Impact', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Times',
                        'label'  =>  __('Times', TEXT_DOMAIN),
                    )
                )
            ),



            // google url
            array(
                'id'    =>  THEME_PREFIX. '_TzFontHeadGoodurl',
                'label' =>  __('Google Url', TEXT_DOMAIN),
                'desc'  =>  __('import google font URL Eg: http://fonts.googleapis.com/css?family=Monsieur+La+Doulaise', TEXT_DOMAIN),
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TzFontHeader'
            ),

            // body font
            array(
                'id'    =>  THEME_PREFIX. '_TzFontFaminyHead',
                'label' =>  __('Font Family', TEXT_DOMAIN),
                'desc'  =>  __('importeg google font-family Eg: Monsieur La Doulaise', TEXT_DOMAIN),
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TzFontHeader',
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TzHeadSelecter',
                'label'     =>  __('Header Selecter', TEXT_DOMAIN),
                'desc'      =>  __('You can specify a selector for font used in the document Header Eg: div#description', TEXT_DOMAIN),
                'std'       =>  '',
                'type'      =>  'textarea-simple',
                'section'   =>  'TzFontHeader',
                'rows'      =>  '10',
            ),

            array(
                'id'        =>  THEME_PREFIX. '_TzHeaderFontColor',
                'label'     => __('Color code', TEXT_DOMAIN),
                'desc'      => __('Color for text', TEXT_DOMAIN),
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TzFontHeader',
            ),
            // end font header

            // font  Menu -----------------------------------------------------------------------

            array(
                'id'        =>  THEME_PREFIX. '_TZFontTypeMenu',
                'label'     =>  __('Font Type', TEXT_DOMAIN),
                'desc'      =>  __('Option font type', TEXT_DOMAIN),
                'std'       =>  '',
                'type'      =>  'select',
                'section'   =>  'TzFontMenu',
                'rows'      =>  '',
                'post_type' =>  '',
                'taxonomy'  =>  '',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  'Tzgoogle',
                        'label' =>  __('Goole Font', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'TzFontDefault',
                        'label' =>  __('Standard Font', TEXT_DOMAIN),
                    ),


                ),
            ),

            // Squirrel font
            array(
                'id'       =>   THEME_PREFIX.'_TzFontMenuDefault',
                'label'    =>   __('Select Standard Font', TEXT_DOMAIN),
                'desc'     =>   __('Select a font to use font-family', TEXT_DOMAIN),
                'type'     =>   'select',
                'section'  =>   'TzFontMenu',
                'choices'  =>   array(
                    array(
                        'value'  =>  'Arial',
                        'label'  =>  __('Arial', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Tahoma',
                        'label'  =>  __('Tahoma', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Verdana',
                        'label'  =>  __('Verdana', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Georgia',
                        'label'  =>  __('Georgia', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Impact',
                        'label'  =>  __('Impact', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Times',
                        'label'  =>  __('Times', TEXT_DOMAIN),
                    )
                )
            ),



            // google url
            array(
                'id'    =>  THEME_PREFIX. '_TzFontMenuGoodurl',
                'label' =>  __('Google Url', TEXT_DOMAIN),
                'desc'  =>  __('import google font URL Eg: http://fonts.googleapis.com/css?family=Monsieur+La+Doulaise', TEXT_DOMAIN),
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TzFontMenu'
            ),

            // Font Family
            array(
                'id'    =>  THEME_PREFIX. '_TzFontFaminyMenu',
                'label' =>  __('Font Family', TEXT_DOMAIN),
                'desc'  =>  __('importeg google font-family Eg: Monsieur La Doulaise', TEXT_DOMAIN),
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TzFontMenu',
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TzMenuSelecter',
                'label'     =>  __('Menu Selectors', TEXT_DOMAIN),
                'desc'      =>  __('you can specify a selector for font used in the document body eg: div#menu', TEXT_DOMAIN),
                'std'       =>  '',
                'type'      =>  'textarea-simple',
                'section'   =>  'TzFontMenu',
                'rows'      =>  '10',
            ),

            array(
                'id'    =>  THEME_PREFIX. '_TzMenuFontColor',
                'label'     => __('Color code', TEXT_DOMAIN),
                'desc'      => __('Color for text', TEXT_DOMAIN),
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TzFontMenu',
            ),

            /*---end menu font--*/
            // font style custom -----------------------------------------------------------------------
            array(
                'id'        =>  THEME_PREFIX. '_TZFontTypeCustom',
                'label'     =>  __('Font Type', TEXT_DOMAIN),
                'desc'      =>  __('option font type', TEXT_DOMAIN),
                'std'       =>  '',
                'type'      =>  'select',
                'section'   =>  'TzFontCustom',
                'rows'      =>  '',
                'post_type' =>  '',
                'taxonomy'  =>  '',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  'Tzgoogle',
                        'label' =>  __('Goole Font', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  'TzFontDefault',
                        'label' =>  __('Standard Font', TEXT_DOMAIN),
                    ),

                ),
            ),

            // Squirrel font
            array(
                'id'       =>   THEME_PREFIX.'_TzFontCustomDefault',
                'label'    =>   __('Select Standard Font', TEXT_DOMAIN),
                'desc'     =>   __('Select a font to use font-family', TEXT_DOMAIN),
                'type'     =>   'select',
                'section'  =>   'TzFontCustom',
                'choices'  =>   array(
                    array(
                        'value'  =>  'Arial',
                        'label'  =>  __('Arial', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Tahoma',
                        'label'  =>  __('Tahoma', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Verdana',
                        'label'  =>  __('Verdana', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Georgia',
                        'label'  =>  __('Georgia', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Impact',
                        'label'  =>  __('Impact', TEXT_DOMAIN),
                    ),
                    array(
                        'value'  =>  'Times',
                        'label'  =>  __('Times', TEXT_DOMAIN),
                    )
                )
            ),



            // google url
            array(
                'id'    =>  THEME_PREFIX. '_TzFontCustomGoodurl',
                'label' =>  __('Google Url', TEXT_DOMAIN),
                'desc'  =>  __('import google font URL Eg: http://fonts.googleapis.com/css?family=Monsieur+La+Doulaise', TEXT_DOMAIN),
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TzFontCustom'
            ),

            // body font
            array(
                'id'       =>  THEME_PREFIX. '_TzFontFaminyCustom',
                'label'    =>  __('Font Family', TEXT_DOMAIN),
                'desc'     =>  __('importeg google font-family Eg: Monsieur La Doulaise', TEXT_DOMAIN),
                'std'      =>  '',
                'type'     =>  'text',
                'section'  => 'TzFontCustom',
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TzCustomSelecter',
                'label'     =>  __('Custom Selecter', TEXT_DOMAIN),
                'desc'      =>  __('you can specify a selector for font used in the document body eg: div#custom', TEXT_DOMAIN),
                'std'       =>  '',
                'type'      =>  'textarea-simple',
                'section'   =>  'TzFontCustom',
                'rows'      =>  '10',
            ),

            array(
                'id'        =>  THEME_PREFIX. '_TzCustomFontColor',
                'label'     =>  __('Color code', TEXT_DOMAIN),
                'desc'      =>  __('Color for text', TEXT_DOMAIN),
                'std'       =>  '',
                'type'      => 'colorpicker',
                'section'   => 'TzFontCustom',
            ),
            // end font custom

            /*-------custom css-------*/
            array(
                 'id'        =>  THEME_PREFIX. '_TzCustomCss',
                 'label'     =>  __('Code CSS', TEXT_DOMAIN),
                 'desc'      =>  __('Paste your CSS code, do not include any tags or HTML in thie field. Any custom CSS entered here will override the theme CSS. In some cases, the !important tag may be needed.', TEXT_DOMAIN),
                 'std'       =>  '',
                 'type'      => 'textarea-simple',
                 'section'   => 'TzCustomCss',
            ),
            // end custom css

            //========== Theme Color
            array(
                'id'        =>  THEME_PREFIX.'_TZTypecolor',
                'label'     =>  __('Config Color', TEXT_DOMAIN),
                'desc'      =>  '',
                'std'       =>  '0',
                'type'      =>  'select',
                'section'   =>  'TZThemecolor',
                'choices'   =>  array(
                    array(
                        'value' =>  '0',
                        'label' =>  __('default Color', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  __('custom color', TEXT_DOMAIN),
                    )
                ),
            ),

            array(
                'id'        =>  THEME_PREFIX.'_TZThemecolor',
                'label'     => 'Choose color',
                'desc'      =>  '',
                'sdt'       =>  '',
                'type'      =>  'radio-image',
                'section'   =>  'TZThemecolor',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  'themecolor',
                        'label' =>  '',
                        'src'   =>  THEME_PATH.'/extension/assets/images/homecolor9.jpg'
                    ),
                    array(
                        'value' =>  'themecolor1',
                        'label' =>  '',
                        'src'   =>  THEME_PATH.'/extension/assets/images/homecolor1.jpg'
                    ),
                    array(
                        'value' =>  'themecolor2',
                        'label' =>  '',
                        'src'   =>  THEME_PATH.'/extension/assets/images/homecolor2.jpg'
                    ),
                    array(
                        'value' =>  'themecolor3',
                        'label' =>  '',
                        'src'   =>  THEME_PATH.'/extension/assets/images/homecolor3.jpg'
                    ),
                    array(
                        'value' =>  'themecolor4',
                        'label' =>  '',
                        'src'   =>  THEME_PATH.'/extension/assets/images/homecolor4.jpg'
                    ),
                    array(
                        'value' =>  'themecolor5',
                        'label' =>  '',
                        'src'   =>  THEME_PATH.'/extension/assets/images/homecolor5.jpg'
                    ),
                    array(
                        'value' =>  'themecolor6',
                        'label' =>  '',
                        'src'   =>  THEME_PATH.'/extension/assets/images/homecolor6.jpg'
                    ),
                    array(
                        'value' =>  'themecolor7',
                        'label' =>  '',
                        'src'   =>  THEME_PATH.'/extension/assets/images/homecolor7.jpg'
                    ),
                    array(
                        'value' =>  'themecolor8',
                        'label' =>  '',
                        'src'   =>  THEME_PATH.'/extension/assets/images/homecolor8.jpg'
                    ),
                )
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TZThemecustom',
                'label'     => __('Choose Color', TEXT_DOMAIN),
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TZThemecolor',
            ),
           /* Background */
            // OptionAdmin
            array(
                'id'        =>  THEME_PREFIX.'_Tzhomebox',
                'label'     =>  __('Config home boxed', TEXT_DOMAIN),
                'desc'      =>  '',
                'std'       =>  '0',
                'type'      =>  'select',
                'section'   =>  'TZBackground',
                'choices'   =>  array(
                    array(
                        'value' =>  '0',
                        'label' =>  __('Hide', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  __('Show', TEXT_DOMAIN),
                    )
                ),
            ),
            array(
                'id'        =>  THEME_PREFIX.'_tzeverlinertl',
                'label'     =>  __('Right to left', TEXT_DOMAIN),
                'desc'      =>  '',
                'std'       =>  '0',
                'type'      =>  'select',
                'section'   =>  'TZBackground',
                'choices'   =>  array(
                    array(
                        'value' =>  '0',
                        'label' =>  __('Hide', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  __('Show', TEXT_DOMAIN),
                    )
                ),
            ),

            array(
                'id'        => 'cbackground',
                'label'     => __('Background', TEXT_DOMAIN),
                'desc'      => '<p>'.__('Default background for Post, Page, Portfolio, Category, Archive, Seach page.', TEXT_DOMAIN).'</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZBackground',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_background_type',
                'label'     => __('Background Type', TEXT_DOMAIN),
                'desc'      => __('You can choose the background you want between our pre-provided pattern and your custom image.', TEXT_DOMAIN),
                'std'       => 'none',
                'type'      => 'select',
                'section'   => 'TZBackground',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   => array(
                    array(
                        'value' => 'none',
                        'label' => __('Default', TEXT_DOMAIN),
                    ),
                    array(
                        'value' => 'pattern',
                        'label' => __('Pattern', TEXT_DOMAIN),
                    ),
                    array(
                        'value' => 'single_image',
                        'label' => __('Single image', TEXT_DOMAIN),
                    ),
                ),
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TZBackgroundColor',
                'label'     => __('Color code', TEXT_DOMAIN),
                'desc'      => __('Background color code', TEXT_DOMAIN),
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TZBackground',
            ),
            array(
                'id'        => THEME_PREFIX . '_background_pattern',
                'label'     => __('Choose Pattern', TEXT_DOMAIN),
                'desc'      => '',
                'std'       => '',
                'type'      => 'radio-image',
                'section'   => 'TZBackground',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => 'background_pattern',
                'choices'   => $patterns
            ),
            array(
                'id'        => THEME_PREFIX . '_background_single_image',
                'label'     => __('Single Image Background', TEXT_DOMAIN),
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'TZBackground',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            /* End Background */
            /*---------------------end themestyle--------------------*/

            /*=================================
            * Option Blog and Tag and Serach and Author
            ===================================*/

            array(
                'id'        => 'TZBlog',
                'label'     => __('Option', TEXT_DOMAIN),
                'desc'      => '<p>'.__('Option for page blog and tag and search and author').'</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZBlog',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            // Show or hide Date
            array(
                'id'        => THEME_PREFIX . '_TZBlogSidebar',
                'label'     => __('Show Sidebar', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'section'   => 'TZBlog',
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
                'id'        => THEME_PREFIX . '_TZBlogDate',
                'label'     => __('Show Date', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'section'   => 'TZBlog',
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
                'id'        => THEME_PREFIX . '_TZBlogCategory',
                'label'     => __('Show Category', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'section'   => 'TZBlog',
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

            // Show or hide tag
            array(
                'id'        => THEME_PREFIX . '_TZBlogTag',
                'label'     => __('Show Tag', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'section'   => 'TZBlog',
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
                'id'        => THEME_PREFIX . '_TZBlogComments',
                'label'     => __('Show Comments', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'section'   => 'TZBlog',
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
                'id'        => THEME_PREFIX . '_TZBlogthumbnail',
                'label'     => __('Show thumbnail', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'section'   => 'TZBlog',
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
                'id'        => THEME_PREFIX . '_TZBlogexcerpt',
                'label'     => __('Show Excerpt', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'section'   => 'TZBlog',
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

            //========= Shop
            array(
                'id'        => THEME_PREFIX . '_tzshopsidebar',
                'label'     => __('Show Sidebar ?', TEXT_DOMAIN),
                'type'      => 'select',
                'desc'      => '',
                'std'       => 1,
                'section'   => 'TZShop',
                'choices'   =>  array(
                    array(
                        'value' =>  1,
                        'label' =>  __('Show', TEXT_DOMAIN),
                    ),
                    array(
                        'value' =>  0,
                        'label' =>  __('Hide', TEXT_DOMAIN),
                    ),
                ),

            ),
            array(
                'id'        => THEME_PREFIX . '_tzshoplimit',
                'label'     => __('Limit Product', TEXT_DOMAIN),
                'type'      => 'text',
                'desc'      => '',
                'std'       => 9,
                'section'   => 'TZShop'

            )

        ) // end setting
    );

    /* allow settings to be filtered before saving */

    $custom_settings = apply_filters('option_tree_settings_args', $custom_settings);

    /* settings are not the same update the DB */
    if ($saved_settings !== $custom_settings) {
        update_option('option_tree_settings', $custom_settings);
    }

}


?>
