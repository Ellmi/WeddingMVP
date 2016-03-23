<?php
    /*
     * Method process option
     * # option 1: config font
     * # option 2: process config theme
    */
    if(!is_admin()):


        add_action('wp_head','tzeverline_config_theme');

        function tzeverline_config_theme(){

            // custom color for theme
            $colortheme              = ot_get_option(THEME_PREFIX. '_TZThemecustom','');
            $ifcolor                 = ot_get_option(THEME_PREFIX.'_TZTypecolor',0);

            // method body font
            $tzfonttype         =   ot_get_option(THEME_PREFIX. '_TZFontType','TzFontSquirrel');
            $tzfontbodyurl      =   ot_get_option(THEME_PREFIX. '_TzFontFami');
            $tzbodyfamiy        =   ot_get_option(THEME_PREFIX. '_TzFontFaminy');
            $bodyselecter       =   ot_get_option(THEME_PREFIX. '_TzBodySelecter');
            $TzFontDefault      =   ot_get_option(THEME_PREFIX. '_TzFontDefault','Arial');
            $TzbodyfontColor    = ot_get_option(THEME_PREFIX. '_TzBodyColor');


            switch($tzfonttype){
                case'Tzgoogle':
                    $tzfont = $tzbodyfamiy;
                    break;
                default:
                    $tzfont = $TzFontDefault;
                    break;

            }
            // Method header font
            $tzheadertype       =   ot_get_option(THEME_PREFIX. '_TZFontTypeHead','TzFontDefault');               // type font google or defaul
            $tzheaderurl        =   ot_get_option(THEME_PREFIX. '_TzFontHeadGoodurl');                            //  url google font
            $tzheaderfamily     =   ot_get_option(THEME_PREFIX. '_TzFontFaminyHead');                             //  font family google       //  font squireel
            $tzheaderselecter   =   ot_get_option(THEME_PREFIX. '_TzHeadSelecter');                               //  body selecter
            $TzFHeadDefault     =   ot_get_option(THEME_PREFIX. '_TzFontHeadDefault','Arial');                     //  font standard
            $tzheaderfontcolor  = ot_get_option(THEME_PREFIX. '_TzHeaderFontColor');

            switch($tzheadertype){
                case'Tzgoogle':
                    $tzheaderfont = $tzheaderfamily;
                    break;
                default:
                    $tzheaderfont = "'".$TzFHeadDefault."'";
                    break;
            }
            // Method Menu font
            $tzmenutype       =   ot_get_option(THEME_PREFIX. '_TZFontTypeMenu','TzFontDefault');
            $tzmenuurl        =   ot_get_option(THEME_PREFIX. '_TzFontMenuGoodurl');
            $tzmenufamily     =   ot_get_option(THEME_PREFIX. '_TzFontFaminyMenu');
            $tzmenuselecter   =   ot_get_option(THEME_PREFIX. '_TzMenuSelecter');
            $tzmenudefault    =   ot_get_option(THEME_PREFIX. '_TzFontMenuDefault','Arial');
            $tzmenusecolor    = ot_get_option(THEME_PREFIX. '_TzMenuFontColor');
            switch($tzmenutype){
                case'Tzgoogle':
                    $tzmenufont = $tzmenufamily;
                    break;
                default:
                    $tzmenufont = "'".$tzmenudefault."'";
                    break;

            }
            // Method Custom font
            $tzcustomtype      =   ot_get_option(THEME_PREFIX. '_TZFontTypeCustom','TzFontDefault');
            $tzcustomurl       =   ot_get_option(THEME_PREFIX. '_TzFontCustomGoodurl');
            $tzcustomfamily    =   ot_get_option(THEME_PREFIX. '_TzFontFaminyCustom');
            $tzcustomselecter  =   ot_get_option(THEME_PREFIX. '_TzCustomSelecter');
            $TzFCustomDefault  =   ot_get_option(THEME_PREFIX. '_TzFontCustomDefault','Arial');
            $tzcustomcolor     = ot_get_option(THEME_PREFIX. '_TzCustomFontColor');
            switch($tzcustomtype){
                case'Tzgoogle':
                    $tzcustomfont = $tzcustomfamily;
                    break;
                default:
                    $tzcustomfont = "'".$TzFCustomDefault."'";
                    break;
            }

            // add code css
            $tzcsscode = ot_get_option(THEME_PREFIX. '_TzCustomCss','');
            // end custom font
            if ( isset ( $tzfontbodyurl ) && $tzfontbodyurl != ""){ wp_enqueue_style('google-font', $tzfontbodyurl, false); }
            if ( isset ( $tzheaderurl ) && $tzheaderurl != ""){ wp_enqueue_style('header-font', $tzheaderurl, false); }
            if ( isset ( $tzmenuurl ) && $tzmenuurl != ""){ wp_enqueue_style('menu-font', $tzmenuurl, false); }
            if( isset ( $tzcustomurl ) && $tzcustomurl != ""){ wp_enqueue_style('custom-font', $tzcustomurl, false); }


           //Background
            $default_background_type = ot_get_option(THEME_PREFIX . '_background_type');
            $default_color           = ot_get_option(THEME_PREFIX . '_TZBackgroundColor','#ffffff');
            $default_pattern         = ot_get_option(THEME_PREFIX . '_background_pattern');
            $default_single_image    = ot_get_option(THEME_PREFIX . '_background_single_image');
            $background = '';
            switch($default_background_type){
                case 'pattern':
                    $background = 'body#bd {background: url("' . THEME_PATH .'/images/patterns/' . esc_attr($default_pattern) . '") repeat scroll 0 0 transparent;}';
                    break;
                case 'single_image':
                    $background = 'body#bd {background: url("' . esc_url($default_single_image) . '") no-repeat fixed center center / cover transparent;}';
                    break;
                case 'none':
                    $background = 'body#bd {background: '.esc_attr($default_color).';}';
                    break;
                default:
                    $background = 'body#bd {background: '.esc_attr($default_color).';}';
                    break;
            }

            // logo
            $colorlogo  =   ot_get_option(THEME_PREFIX. '_logoTextcolor');
            ?>
                <style type="text/css">
                        <?php if(!empty($bodyselecter) && !empty($bodyselecter)){  echo esc_attr($bodyselecter) ; ?> { font-family:<?php echo esc_attr($tzfont); ?> !important; color: <?php echo esc_attr($TzbodyfontColor); ?> !important;   }
                        <?php } ?>

                        <?php if(!empty($tzheaderselecter) && !empty($tzheaderselecter)){  echo esc_attr($tzheaderselecter) ; ?> { font-family:<?php echo esc_attr($tzheaderfont); ?> !important; color: <?php echo esc_attr($tzheaderfontcolor); ?> !important; }
                        <?php }  ?>

                        <?php if(!empty($tzmenuselecter) && !empty($tzmenuselecter)){  echo esc_attr($tzmenuselecter) ; ?> { font-family:<?php echo esc_attr($tzmenufont); ?> !important ; color: <?php echo esc_attr($tzmenusecolor); ?> !important ;  }
                        <?php
                        } ?>

                        <?php if(!empty($tzcustomselecter) && !empty($tzcustomselecter)):  echo esc_attr($tzcustomselecter) ; ?> { font-family:<?php echo esc_attr($tzcustomfont); ?> !important ; color: <?php echo esc_attr($tzcustomcolor); ?> !important ; }
                        <?php endif; ?>

                    <?php if(isset($colorlogo) && !empty($colorlogo)): echo'.tzlogo a{ color: '.esc_attr($colorlogo).' }';  endif; ?>

                    <?php

                        if($background){
                            echo $background;
                        }

                        if(isset($tzcsscode) && !empty($tzcsscode)){
                            echo $tzcsscode;
                        }
                        if ( isset($colortheme) && !empty($colortheme) && !empty($ifcolor) && $ifcolor == 1):
                    ?>

                        body#bd .everline_title:after,
                        body#bd .content-top,
                        body#bd .tz-header-page,
                        body#bd .tzform-search #searchsubmit,
                        body#bd .tz-header ul li .non_mega_menu li:after,
                        body#bd .tzcountdown,
                        body#bd .tzcountdown2,
                        body#bd .tzcountdown3,
                        body#bd .tzcount-left,
                        body#bd .tzcountdown4 .countdown,
                        body#bd .title_ourstory:after,
                        body#bd .tzintroduct h3:after,
                        body#bd .form7-wrap,
                        body#bd .form7-style2,
                        body#bd .form7-style3,
                        body#bd .tzautoplay,
                        body#bd .tzpause,
                        body#bd .elementblog-title:after,
                        body#bd .playlist_title:after,
                        body#bd .jp-play-bar,
                        body#bd .tzshop_title h1:after,
                        body#bd.woocommerce .tzproduct-item:hover .tzmeta-item a:hover,
                        body#bd.woocommerce .tzproduct-item:hover .tzmeta-item span:hover,
                        body#bd.woocommerce div.product .tz-entry-summary form.cart .button,
                        body#bd.woocommerce div.product .tz-entry-summary p.cart .single_add_to_cart_button,
                        body#bd.woocommerce .woocommerce-message .wc-forward:hover,
                        body#bd.woocommerce #review_form #respond input#submit:hover,
                        body#bd.woocommerce-cart .woocommerce .shop_table .button,
                        body#bd.woocommerce .return-to-shop .button,
                        body#bd.woocommerce-cart .woocommerce .shop_table .checkout-button:hover,
                        body#bd.woocommerce-cart .woocommerce .shop_table .button:hover,
                        body#bd .cart-collaterals h2:after,
                        body#bd.woocommerce .cart-collaterals .shipping_calculator .button,
                        body#bd.woocommerce-page .cart-collaterals .shipping_calculator .button,
                        body#bd.woocommerce form.checkout_coupon p input.button:hover,
                        body#bd.woocommerce-page form.checkout_coupon p input.hover,
                        body#bd.woocommerce-checkout  .woocommerce-info:before,
                        body#bd.woocommerce-checkout  .woocommerce-info:before,
                        body#bd .woocommerce-billing-fields h3:before,
                        body#bd #order_review_heading:before,
                        body#bd .woocommerce-shipping-fields h3 label:before,
                        body#bd.woocommerce #payment #place_order:hover,
                        body#bd.woocommerce-page #payment #place_order:hover,
                        body#bd.woocommerce-checkout .woocommerce h2:before,
                        body#bd.woocommerce-account .woocommerce h2:before,
                        body#bd.woocommerce table.my_account_orders .order-actions .button:hover,
                        body#bd.woocommerce-page table.my_account_orders .order-actions .button:hover,
                        body#bd.woocommerce-account .woocommerce input.button:hover,
                        body#bd.woocommerce-account .woocommerce-page input.button:hover,
                        body#bd .tzsidebar_shop .module-title:after,
                        body#bd.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
                        body#bd.woocommerce-page .widget_price_filter .ui-slider .ui-slider-range,
                        body#bd .tzdefault_title h1:after,
                        body#bd .datepicker table tr td span.active.active,
                        body#bd .datepicker table tr td.active.active ,
                        body#bd .datepicker table tr td.day:hover,
                        body#bd .datepicker table tr td.day.focused,
                        body#bd #tribe-bar-form .tribe-bar-submit input[type="submit"],
                        body#bd h2.tribe-events-page-title:after,
                        body#bd #tribe-events .tribe-events-button, #tribe-events .tribe-events-button:hover,
                        body#bd #tribe_events_filters_wrapper input[type="submit"],
                        body#bd .tribe-events-button,
                        body#bd .tribe-events-button.tribe-active:hover,
                        body#bd .tribe-events-button.tribe-inactive,
                        body#bd .tribe-events-button:hover,
                        body#bd .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"],
                        body#bd .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"] > a,
                        body#bd.single-tribe_events .tribe-events-event-meta,
                        body#bd .tztribe_nav .wp-pagenavi a:hover,
                        body#bd .tztribe_nav .wp-pagenavi span.current,
                        body#bd .widget_nav_menu ul li a:hover,
                        body#bd .tz_slider_prev:hover,
                        body#bd .tz_slider_next:hover,
                        body#bd .tzquote,
                        body#bd .tzpagination2 a:hover,
                        body#bd .tzpagination2 span.current,
                        body#bd .tzpagenavi-blog .wp-pagenavi a:hover,
                        body#bd .tzpagenavi-blog .wp-pagenavi span.current,
                        body#bd .tztitle:after,
                        body#bd .portfolio-item:before,
                        body#bd .tzportfolio-style2 .portfolio-padding:before,
                        body#bd .meta-social a i:hover,
                        body#bd .team_title:after,
                        body#bd .tzphone i,
                        body#bd .tzaddress i,
                        body#bd .tzemail i,
                        body#bd .wpcf7-submit,
                        body#bd .tz-footer,
                        body#bd .tz-header1 .tzlogo a,
                        body#bd .blog-post.sticky .everline_sticky,
                        body#bd .tz-header2 .tzlogo a,
                        body#bd .live_title,
                        body#bd .woocommerce-cart .wc-proceed-to-checkout a.checkout-button
                        {
                            background: <?php echo esc_attr($colortheme); ?>!important;
                        }

                        body#bd .tz-header ul li .non_mega_menu  li a:hover,
                        body#bd .tzcountdown-ds2 span,
                        body#bd .ourstory_infomation p,
                        body#bd .jp-controls button:hover i,
                        body#bd .jp-playlist ul li.jp-playlist-current:before,
                        body#bd .jp-playlist ul li:hover:before,
                        body#bd .testimonials2 .icon_testimonials,
                        body#bd .testimonials2 .author_testimonials,
                        body#bd .tzimg-content strong,
                        body#bd .tz-entry-summary  .in-stock,
                        body#bd.woocommerce table.cart a.remove:hover,
                        body#bd.woocommerce #content table.cart a.remove:hover,
                        body#bd.woocommerce-page table.cart a.remove:hover,
                        body#bd.woocommerce-page #content table.cart a.remove:hover,
                        body#bd .order-total strong span,
                        body#bd.woocommerce-checkout  .woocommerce-info a,
                        body#bd .tribe-events-nav-next a:hover,
                        body#bd .tribe-events-nav-previous a:hover,
                        body#bd .tribe-events-read-more,
                        body#bd.single-tribe_events #tribe-events-content .updated,
                        body#bd.single-tribe_events #tribe-events-content .updated span,
                        body#bd .tztribe_item a.tzevent-readmore,
                        body#bd .tribe-events-list-widget .tribe-events-widget-link a,
                        body#bd .blog_meta span:hover,
                        body#bd .blog_meta a:hover,
                        body#bd .more-link,
                        body#bd blockquote:before,
                        body#bd .single-share a:hover,
                        body#bd .comment-content .comment-metadata a,
                        body#bd .masonry-left h3 a:hover,
                        body#bd .masonry-left i:hover,
                        body#bd .masonry-right span,
                        body#bd .masonry-right span a,
                        body#bd .tzPortfolio_meta span,
                        body#bd .tzPortfolio_meta a,
                        body#bd .tzmeta-single span,
                        body#bd .tzmeta-single span a,
                        body#bd .team_readmore i,
                        body#bd .comingsoo_ds a,
                        body#bd .blog-item .tzblog_readmore,
                        body#bd header ul.nav-collapse .themeple_custom_menu_mega_menu ul li ul li a:hover
                        { color: <?php echo esc_attr($colortheme); ?> !important;
                        }
                        a{ color: <?php echo esc_attr($colortheme); ?>; }
                        body#bd .tznav-3,
                        body#bd .tzform-search #searchsubmit,
                        body#bd .jp-playlist ul li.jp-playlist-current:before,
                        body#bd .jp-playlist ul li:hover:before,
                        body#bd.woocommerce-checkout .woocommerce .woocommerce-info,
                        body#bd.woocommerce-checkout .woocommerce-info,
                        body#bd .tz-header2,
                        body#bd .livebox li
                        {
                            border-color: <?php echo esc_attr($colortheme); ?> !important;
                        }
                        body#bd header.headerAnimate,
                        body#bd.theme-box .everline_boxed header.headerAnimate .wrapbox{
                            background: <?php echo esc_attr($colortheme); ?> ;
                        }
                        body#bd .tz_social a,
                        body#bd .tz_social a:hover{
                            border-color: #fff;
                        }
                        body#bd .tz_social a:hover{
                            background: #fff;
                        }
                        body#bd .tz_social a:hover{
                            color: #222;
                        }

                        body#bd .tzcountdownitem{
                            border-color: #fff;
                        }
                        body#bd .tzcountdownitem:hover{
                            border-color: #fff;
                            background: #fff;
                        }
                        body#bd .tzcountdownitem:hover *{
                            color: #222;
                        }
                    <?php endif; ?>
                </style>

            <?php

            if(ot_get_option( THEME_PREFIX . '_favicon_onoff','no') == 'yes'){
                $plazart_favicon = ot_get_option(THEME_PREFIX . '_favicon');
                if( $plazart_favicon ){
                    echo '<link rel="shortcut icon" href="' . esc_attr($plazart_favicon) . '" type="image/x-icon" />';
                }
            }
            ?>

        <?php

        }

    endif

?>