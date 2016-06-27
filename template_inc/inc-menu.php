<header class="header header-page">

    <div class="container">
        <h3 class="tzlogo pull-left">
            <a class="pull-left tz_logo" href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>">
                <?php
                $logotype   = ot_get_option(THEME_PREFIX . '_logotype');
                $logo_img   = ot_get_option(THEME_PREFIX . '_logo','');
                $img_detail = IMG_PATH.'logo.png';
                if($logotype=='0'){
                    echo esc_html(ot_get_option(THEME_PREFIX . '_logoText','plazart'));
                }else{
                    if ( isset($logo_img) && $logo_img != '' ):
                        echo'<img class="logo_lager" src="'.esc_url(ot_get_option(THEME_PREFIX . '_logo','')) .'" alt="'.get_bloginfo('title').'" />';
                    else:
                        echo'<img class="logo_lager" src="'.esc_url($img_detail) .'" alt="'.get_bloginfo('title').'" />';
                    endif;
                }
                ?>
            </a>
        </h3>
        <nav class="pull-right tznav-menu">
            <ul id="menu-primary" class="menu nav-collapse themeple_megemenu">
                <li id="menu-item-102"
                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children">
                    <a href="wedding">婚礼策划</a>

                    <ul class="sub-menu non_mega_menu">
                        <li id="menu-item-103"
                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                href="#">婚礼套餐</a>
                        </li>
                        <li id="menu-item-149"
                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                href="#">终端定制</a>
                        </li>
                        <li id="menu-item-163"
                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                href="#">求婚策划</a>
                        </li>
                        <li id="menu-item-173"
                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                href="#">会议策划</a>
                        </li>
                        <li id="menu-item-497"
                            class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="#">高端手绘设计</a></li>
                    </ul>
                </li>
                <li id="menu-item-397"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                    <a href="demo">婚礼案例</a>
                </li>
                <li id="menu-item-183"
                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children">
                    <a href="video">视频案例</a>
                </li>
                <li id="menu-item-279"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                    <a href="hotel">酒店</a>
                </li>
                <li id="menu-item-373"
                    class="menu-item menu-item-type-taxonomy menu-item-object-tribe_events_cat menu-item-has-children">
                    <a href="activity">活动</a>
                </li>
                <li id="menu-item-20"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                    <a href="taobao">淘宝</a>
                </li>
            </ul>
        </nav>
</header>
<div class="tzform-search">
    <img class="tzcontro_search" src="<?php echo esc_url(IMG_PATH.'icon_search_delete.png') ; ?>" alt="icon search">
    <?php get_search_form(); ?>
</div>