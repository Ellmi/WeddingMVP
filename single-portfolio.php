<?php get_header(); ?>
<?php get_template_part('template_inc/inc','menu'); ?>
<div class="tzdefault_title">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="tzsingle-portfolio">
    <div class="container">
        <div class="row">
            <?php
                $sidebar = get_post_meta( get_the_ID(), THEME_PREFIX . '_single_sidebar', true );
                $class_col   = 'col-md-12' ;
                if ( $sidebar == 'yes' ){
                    $class_col   = 'col-md-9' ;
                }
            ?>
            <div class="<?php echo esc_attr($class_col); ?>">
                <?php
                if ( have_posts() ) : while (have_posts()) : the_post() ;
                    $portfolio_formats = get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_type', true );
                    $slidershow        = get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_slideshows', true );
                    $VideoStyle        =   get_post_meta( get_the_ID(),THEME_PREFIX. '_portfolio_video_type',TRUE);
                    $image_detail      =   get_post_meta( get_the_ID(),THEME_PREFIX. '_portfolio_image',TRUE);
                    ?>
                    <article id='post-<?php the_ID(); ?>' <?php post_class('tzsingle-portfolio-item'); ?>>
                        <div class="portfolio-style">
                            <?php
                                switch( $portfolio_formats ):
                                    case'audio':
                                        ?>
                                            <div class="tz_audio">
                                                <iframe class="iframe-full-audio" src="http://w.soundcloud.com/player/?url=http://api.soundcloud.com/tracks/<?php echo esc_attr(get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_soundCloud_id', true )); ?>&amp;show_artwork=true&amp;auto_play=false&amp;sharing=true&amp;buying=true&amp;download=true&amp;show_user=true&amp;show_playcount=true&amp;show_comments=true">
                                                </iframe>
                                            </div>
                                        <?php
                                        break;
                                    case'slideshows':
                                        ?>
                                        <div class="tzblog-slider">
                                            <button class="tz_slider_prev"><i class="fa fa-angle-left"></i></button>
                                            <button class="tz_slider_next"><i class="fa fa-angle-right"></i></button>
                                            <ul class="tzblog-slider-content">
                                                <?php
                                                if ( isset( $slidershow ) && !empty( $slidershow ) ):
                                                    foreach( $slidershow as $slider ):
                                                        ?>
                                                        <li>
                                                            <img src="<?php echo esc_url($slider[THEME_PREFIX . '_portfolio_slideshow_item']); ?>" alt="<?php echo esc_attr($slider['title']); ?>">
                                                        </li>
                                                    <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </ul>
                                        </div>
                                        <?php
                                        break;
                                    case'videoid':
                                            if($VideoStyle=='youtube'):
                                            ?>
                                                <div class="tz_portfolio_video">
                                                    <iframe  class="tz_portfolio_video_attr"
                                                             src="http://www.youtube.com/embed/<?php echo esc_attr(get_post_meta( get_the_ID(),THEME_PREFIX. '_portfolio_video',TRUE)); ?>"
                                                             frameborder="0" allowfullscreen>
                                                    </iframe>
                                                </div>
                                            <?php elseif($VideoStyle=='vimeo'):
                                                ?>
                                                <div class="tz_portfolio_video">
                                                    <iframe src="http://player.vimeo.com/video/<?php echo esc_attr(get_post_meta( get_the_ID(),THEME_PREFIX. '_portfolio_video',TRUE)); ?>"
                                                            class="tz_portfolio_video_attr"
                                                            frameborder="0" allowFullScreen>
                                                    </iframe>
                                                </div>
                                            <?php
                                            endif;
                                        break;
                                    case'image':
                                        if( isset($image_detail) && !empty( $image_detail ) ):
                                        ?>
                                            <img src="<?php echo esc_url($image_detail); ?>" alt="<?php the_title(); ?>">
                                        <?php
                                        endif;
                                        break;
                                    default:
                                        the_post_thumbnail('full');
                                        break;

                                endswitch;

                            ?>
                        </div>
                        <div class="tz-portfolio-title">
                            <i class="fa fa-heart-o tzicon-single"></i>
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="tzmeta-single">
                            <span><?php echo get_the_date(); ?> /</span>
                            <?php
                            if ( get_the_terms( get_the_ID(), 'portfolio-tags') !=false ):
                                the_terms( get_the_ID(), 'portfolio-tags' );
                            endif;
                            ?>
                        </div>
                        <div class="tzsingle-content">
                            <?php   the_content();
                                    wp_link_pages( array(
                                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', TEXT_DOMAIN ) . '</span>',
                                        'after'       => '</div>',
                                        'link_before' => '<span>',
                                        'link_after'  => '</span>',
                                        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'TEXT_DOMAIN' ) . ' </span>%',
                                        'separator'   => '<span class="screen-reader-text">, </span>',
                                    ) );
                            ?>
                        </div>
                        <div class="singleprotfolio-share">
                            <span class="meta-name"><?php echo _e('Share it:', TEXT_DOMAIN); ?></span>
                            <span class="meta-social">
                                <!-- Facebook Button -->
                                <a href="javascript: void(0)" onclick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php the_title(); ?>&amp;p[url]=<?php the_permalink() ; ?>','sharer','toolbar=0,status=0,width=580,height=325');" id="fb-share" class="tz_social"><i class="fa fa-facebook"></i></a>

                                <!-- Twitter Button -->
                                <a href="javascript: void(0)" onclick="window.open('http://twitter.com/share?text=<?php the_title(); ?>&amp;url=<?php the_permalink() ; ?>','sharer','toolbar=0,status=0,width=580,height=325');" class="tz_social" id="tw-share"><i class="fa fa-twitter"></i></a>

                                <!-- Google +1 Button -->
                                <a href="javascript: void(0)" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink() ; ?>','sharer','toolbar=0,status=0,width=580,height=325');" class="tz_social" id="g-share"><i class="fa fa-google-plus"></i></a>

                                <!-- Pinterest Button -->
                                <a href="javascript: void(0)" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?php the_permalink() ; ?>&amp;description=<?php the_title(); ?>','sharer','toolbar=0,status=0,width=580,height=325');" class="tz_social" id="p-share"><i class="fa fa-pinterest"></i></a>
                            </span>
                        </div>
                    </article>
                <?php
                endwhile; // end while ( have_posts )
                endif; // end if ( have_posts )
                ?>
            </div>
            <?php if ( $sidebar == 'yes' ): ?>
            <div class="col-md-3 tzsidebar-event">
                <?php get_sidebar(); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>

