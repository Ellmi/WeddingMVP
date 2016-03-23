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
                    ?>
                        <div id="id-<?php the_ID() ?>" <?php post_class(); ?>>
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
                            <div class="tzcomments-area">
                                <?php if ( comments_open() ):
                                    comments_template( '', true );
                                endif;
                                ?>

                            </div>
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