<?php
/*
 * Template Name: Template Blog Columns
 */
?>
<?php get_header(); ?>
<?php get_template_part('template_inc/inc','menu'); ?>
    <div class="tzdefault_title">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="single_post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <?php
                        if ( have_posts() ):
                            while( have_posts() ):
                                the_post();
                                $post_format = get_post_meta(get_the_ID(), THEME_PREFIX . '_portfolio_type', true);
                                $video_bk    = get_post_meta( get_the_ID(), THEME_PREFIX . '_bk_video', true );
                                $slidershow  = get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_slideshows', true );
                                $img_detail  = get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_image', true );
                                switch( $post_format ):

                                    case'video':
                                        ?>
                                            <div class="blog-video">
                                                <div class="tz-video">
                                                    <button class="tzautoplay"><i class="fa fa-video-camera"></i></button>
                                                    <button class="tzpause"><i class="fa fa-pause"></i></button>
                                                    <?php if ( isset( $video_bk ) && !empty( $video_bk ) ) : ?>
                                                        <div class="bg-video bg-video1" style="background: url(<?php echo esc_url($video_bk); ?>) no-repeat  center center / cover  transparent !important;"></div>
                                                    <?php endif; ?>
                                                    <video class="videoID">
                                                        <source type="video/mp4" src="<?php echo esc_url(get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_video_mp4', true )); ?>" />
                                                        <source type="video/ogg" src="<?php echo esc_url(get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_video_ogv', true )); ?>" />
                                                        <source type="video/webm" src="<?php echo esc_url(get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_video_webm', true )); ?>" />
                                                    </video>
                                                </div>
                                            </div>
                                        <?php
                                        break;
                                    case'audio':
                                        ?>
                                            <iframe class="iframe-full-audio" src="http://w.soundcloud.com/player/?url=http://api.soundcloud.com/tracks/<?php echo esc_attr(get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_soundCloud_id', true )); ?>&amp;show_artwork=true&amp;auto_play=false&amp;sharing=true&amp;buying=true&amp;download=true&amp;show_user=true&amp;show_playcount=true&amp;show_comments=true">
                                            </iframe>
                                        <?php
                                        break;
                                    case'quote':
                                        ?>
                                            <div class="tzquote">
                                                <i class="fa fa-heart-o quote_icon"></i>
                                                <p>
                                                    <i class="fa fa-quote-left"></i>
                                                    <?php echo esc_html(get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_Quote_content', true)); ?>
                                                    <i class="fa fa-quote-right"></i>
                                                </p>
                                                <span class="author_quote">
                                                    <?php echo esc_html(get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_Quote_ds', true)); ?>
                                                </span>
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
                                    case'image':
                                        ?>
                                        <div class="tzblog-img">
                                            <img src="<?php echo esc_url($img_detail); ?>" alt="<?php the_title(); ?>">
                                        </div>
                                        <?php
                                        break;
                                    default:
                                        ?>
                                            <div class="tzblog-img">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                        <?php
                                        break;
                                endswitch;
                     ?>

                    <h2 class="single-title"><?php the_title(); ?></h2>
                    <span class="single-meta">
                        <?php echo get_the_date() ; ?>
                        <?php
                            if ( !post_password_required() && ( comments_open() && get_comments_number() ) ):
                                echo '/';
                                comments_popup_link(__('Leave a comment', TEXT_DOMAIN),__('1 Comment', TEXT_DOMAIN),__('% comment(s)', TEXT_DOMAIN) );
                            endif;
                        ?>
                        <span>
                            /
                            <?php the_category(',') ?>
                        </span>
                    </span>
                     <div class="single-content">
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
                    <div class="single-tags">
                        <div class="meta-tags pull-left">
                            <?php the_tags(); ?>
                        </div>
                        <div class="single-share pull-right">
                            <span><?php echo _e('Share it:', TEXT_DOMAIN); ?></span>
                            <!-- Facebook Button -->
                            <a href="javascript: void(0)" onclick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php the_title(); ?>&amp;p[url]=<?php the_permalink() ; ?>','sharer','toolbar=0,status=0,width=580,height=325');" id="fb-share" class="tz_social"><i class="fa fa-facebook"></i></a>

                            <!-- Twitter Button -->
                            <a href="javascript: void(0)" onclick="window.open('http://twitter.com/share?text=<?php the_title(); ?>&amp;url=<?php the_permalink() ; ?>','sharer','toolbar=0,status=0,width=580,height=325');" class="tz_social" id="tw-share"><i class="fa fa-twitter"></i></a>

                            <!-- Google +1 Button -->
                            <a href="javascript: void(0)" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink() ; ?>','sharer','toolbar=0,status=0,width=580,height=325');" class="tz_social" id="g-share"><i class="fa fa-google-plus"></i></a>

                            <!-- Pinterest Button -->
                            <a href="javascript: void(0)" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?php the_permalink() ; ?>&amp;description=<?php the_title(); ?>','sharer','toolbar=0,status=0,width=580,height=325');" class="tz_social" id="p-share"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                    <div class="single-author">
                        <?php echo get_avatar( get_the_author_meta('ID'), 100 ); ?>
                        <span class="author-ds">
                            <a class="single-author-name" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )) ; ?>"><?php the_author() ?></a>
                            <a class="single-author-url" href="<?php echo esc_url(get_the_author_meta('url')) ; ?>"><?php echo esc_html(get_the_author_meta('url')) ; ?></a>
                        </span>
                    </div>
                    <div class="tzcomments-area">
                        <?php if ( comments_open() ):
                            comments_template( '', true );
                              endif;
                        ?>

                    </div>
                     <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                     ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>