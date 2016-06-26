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
        <button data-target=".nav-collapse" class="btn-navbar tz_icon_menu" type="button">
            <i class="fa fa-bars"></i>
        </button>
        <button class="search pull-right"> <i class="fa fa-search"></i></button>
        <nav class="pull-right">
            <?php
            if ( has_nav_menu('primary') ):
                wp_nav_menu(array(
                    'theme_location' =>  'primary',
                    'container'     =>  false,
                    'menu_class'    =>  'menu nav-collapse'
                ));
            else:
                ?>
                <ul class="menu">
                    <li>
                        <a href="<?php echo get_admin_url().'/nav-menus.php'; ?>">
                            ADD TO MENU
                        </a>
                    </li>
                </ul>
            <?php
            endif;
            ?>
        </nav>
    </div>
</header>
<div class="tzform-search">
    <img class="tzcontro_search" src="<?php echo esc_url(IMG_PATH.'icon_search_delete.png') ; ?>" alt="icon search">
    <?php get_search_form(); ?>
</div>