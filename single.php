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
                                $post_format = get_post_format();
                                $slidershow  = get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_slideshows', true );
                                $img_detail  = get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_image', true );
                                switch( $post_format ):
                                    case'video':
                                        ?>
                                        <div class="blog-video">
                                            <?php $video_data = str_replace("</p>", "", str_replace("<p>", "", get_the_content()));
                                            ?>
                                            <object type="application/x-shockwave-flash"
                                                    data="<?php echo $video_data; ?>" width="1000px" height="800px"
                                                    id="youku-player">
                                                <param name="allowFullScreen" value="true">
                                                <param name="allowScriptAccess" value="always">
                                                <param name="movie" value="<?php echo $video_data; ?>">
                                                <param name="flashvars"
                                                       value="imglogo=&amp;paid=0&amp;partnerId=youkuind_">
                                            </object>
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

<!--                    <h2 class="single-title">--><?php //the_title(); ?><!--</h2>-->
<!--                    <span class="single-meta">-->
<!--                        --><?php //echo get_the_date() ; ?>
<!--                        --><?php
//                            if ( !post_password_required() && ( comments_open() && get_comments_number() ) ):
//                                echo '/';
//                                comments_popup_link(__('Leave a comment', TEXT_DOMAIN),__('1 Comment', TEXT_DOMAIN),__('% comment(s)', TEXT_DOMAIN) );
//                            endif;
//                        ?>
<!--                        <span>-->
<!--                            /-->
<!--                            --><?php //the_category(',') ?>
<!--                        </span>-->
<!--                    </span>-->
                     <div class="single-content">
                        <?php
//                         the_content();
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