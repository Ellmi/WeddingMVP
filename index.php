<?php get_header(); ?>
<?php get_template_part('template_inc/inc','menu');
$sidebar              =   ot_get_option(THEME_PREFIX . '_TZBlogSidebar',0);
$class_slider = 'col-md-12';
if ( $sidebar != 0 ):
    $class_slider = 'col-md-9';
endif;

?>
<!-- header -->
<?php if ( is_home() || is_front_page() ) {?>
    <section id="home_slider">

        <?php
        $sldimages = '';
        $sldimages = array(
            '1' => get_template_directory_uri().'/images/slides/slider1.jpg',
            '2' => get_template_directory_uri().'/images/slides/slider2.jpg',
            '3' => get_template_directory_uri().'/images/slides/slider3.jpg',
        ); ?>

        <?php
        $slAr = array();
        $m = 0;
        for ($i=1; $i<4; $i++) {
            if ( get_theme_mod('slide_image'.$i, $sldimages[$i]) != "" ) {
                $imgSrc 	= get_theme_mod('slide_image'.$i, $sldimages[$i]);
                $imgTitle	= get_theme_mod('slide_title'.$i);
                $imgDesc	= get_theme_mod('slide_desc'.$i);
                $imgLink	= get_theme_mod('slide_link'.$i);
                if ( strlen($imgSrc) > 3 ) {
                    $slAr[$m]['image_src'] = get_theme_mod('slide_image'.$i, $sldimages[$i]);
                    $slAr[$m]['image_title'] = get_theme_mod('slide_title'.$i);
                    $slAr[$m]['image_desc'] = get_theme_mod('slide_desc'.$i);
                    $slAr[$m]['image_link'] = get_theme_mod('slide_link'.$i);
                    $m++;
                }
            }
        }
        $slideno = array();
        if( $slAr > 0 ){
            $n = 0;?>
            <div class="slider-wrapper theme-default"><div id="slider" class="nivoSlider">
                    <?php
                    foreach( $slAr as $sv ){
                        $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_title']);?>" title="<?php echo esc_attr('#slidecaption'.$n) ; ?>" /><?php
                        $slideno[] = $n;
                    }
                    ?>
                </div><?php

                foreach( $slideno as $sln ){ ?>
                <div id="slidecaption<?php echo $sln; ?>" class="nivo-html-caption">
                    <div class="slide_info">
                        <h2>
                            <a href="<?php echo esc_url(get_theme_mod('slide_link'.$sln,'#link'.$sln)); ?>"><?php echo esc_attr(get_theme_mod('slide_title'.$sln, __('Nick and Sarah','skt-wedding-lite'))); ?></a>
                        </h2>
                        <p><?php  echo esc_attr(get_theme_mod('slide_desc'.$sln, __('We inviting you and your family on 25 December 2015','skt-wedding-lite'))); ?></p>
                        <?php if( get_theme_mod('slide_link'.$sln, '#link') ) { ?>
                            <a class="ReadMore" href="<?php echo esc_url(get_theme_mod('slide_link'.$sln,'#link'.$sln)); ?>"><?php esc_html_e('Read More','skt-wedding-lite'); ?></a>
                        <?php } ?>
                    </div>
                    </div><?php
                } ?>
            </div>
            <div class="clear"></div><?php
        }
        ?>
    </section>
<?php } else { ?>

    <?php
    $header_image = get_header_image();
    if ( ! empty( $header_image ) ) {
        echo ' <div class="innerbanner"><img src="'.esc_url( $header_image ).'" width="'.get_custom_header()->width.'" height="'.get_custom_header()->height.'" alt="" /> </div>';
    }
    else {
        echo '<div class="space10"></div>';
    } ?>

<?php } ?>
<div class="home-post">
    <div class="container">
        <div class="row">
            <?php if( $sidebar == 1 ): ?>
                <div class="col-md-3 tzsidebar-blog tzsidebar-event">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
            <div class="<?php echo esc_attr($class_slider); ?> tzblog-default">
                <?php if ( have_posts() ) :
                    while (have_posts()) :
                        the_post() ;
                        $post_fomats = get_post_meta( $post -> ID, THEME_PREFIX . '_portfolio_type', true);
                        $post_type   = get_post_type();
                        $class_is_sticky = '';
                        if ( is_sticky() ):
                            $class_is_sticky = ' tzstick';
                        endif;
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'.$class_is_sticky) ?>>
                            <?php if ( is_sticky() ): ?>
                                <span class="everline_sticky sticky">
                                    <?php _e('Sticky', TEXT_DOMAIN); ?>
                                </span>
                            <?php
                                endif;
                            if( has_post_thumbnail()) : ?>
                                <div class="tzblog-img tzblog-format">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                            <h2 class="tzblog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="blog_meta">
                                 <span class="tzblog_date">
                                    <?php echo get_the_date(); ?>
                                     /
                                 </span>
                                 <span class="tzblog_comments">
                                    <?php if ( $post_type == 'post' && !post_password_required() && ( comments_open() || get_comments_number() ) ):
                                        comments_popup_link(__('Leave a comment', TEXT_DOMAIN), __('1 Comment', TEXT_DOMAIN), __('% comment(s)', TEXT_DOMAIN));
                                    endif; ?>
                                 </span>
                                <span class="tztags_link">
                                    <?php
                                    if ( get_the_tags() != false ):
                                        echo '/'  ;
                                        the_tags('',',','');
                                        echo '/';
                                    endif;
                                    ?>
                                </span>
                                <span class="tzcat_link">
                                        <?php the_category(',') ?>
                                </span>
                            </div>
                            <div class="tzthe_content">
                                <?php
                                the_excerpt();
                                echo '<a class="more-link" href="'.get_permalink().'">'.__('READ MORE', TEXT_DOMAIN ).'</a>';
                                ?>
                            </div>
                        </article>
                    <?php endwhile; // end while ( have_posts )
                endif; // end if ( have_posts )  ?>
                <?php  tzeverline_paging_nav(); ?>
            </div>
            <?php if( $sidebar == 2 ): ?>
                <div class="col-md-3 tzsidebar-blog tzsidebar-event">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>

