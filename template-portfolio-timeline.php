<?php
/*
 * Template Name: Template Portfolio Timeline
 */
?>
<?php get_header(); ?>
<?php get_template_part('template_inc/inc','menu'); ?>
    <div class="tzdefault_title">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <section class="tzPortfolio-timeline">
        <div class="tzPortfolio-line">
            <span class="timeline-load" data-option-id="2"><?php echo _e('More posts ...', TEXT_DOMAIN); ?></span>
            <span class="timeline-noload"><?php echo _e('Not data ...', TEXT_DOMAIN); ?></span>
            <img class="image_timeline" src="<?php echo esc_url(IMG_PATH .'/timeload.GIF'); ?>" alt="timeline">
            <div class="container container-timeline">
                <?php
                $args = array(
                    'post_type'         =>  'portfolio',
                    'orderby'           =>  'date',
                    'order'             =>  'desc'
                );
                $query_blog = new WP_Query( $args );

                if ( $query_blog -> have_posts() ):
                    $count = $query_blog->post_count;
                    $i = 0;
                    while ( $query_blog -> have_posts() ):
                        $query_blog -> the_post();
                        $post_fomats = get_post_meta($post -> ID, THEME_PREFIX . '_portfolio_type', true);
                        $class= "tzleft";
                        if ( $i % 2 !== 0):
                            $class= "tzright";
                        endif;
                        if ( $i % 2 == 0 ):
                            echo '<div class="row row-timeline">';
                        endif;
                        ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-6'.' '.esc_attr($class)) ; ?>>
                            <div class="timeline">
                                <?php echo get_the_date(); ?>
                            </div>
                            <div class="tzPortfolio-timeline-item">
                                <div class="tzPortfolio-img tzPortfolio-format">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <i class="fa fa-heart-o tztime-icon"></i>
                                <h2 class="tzPortfolio-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="tzPortfolio_meta">
                                    <span class="tzPortfolio_date">
                                        <?php echo get_the_date(); ?>
                                        /
                                    </span>
                                    <span class="tztags_link">
                                        <?php
                                        if ( get_the_terms(get_the_ID(), 'portfolio-tags') != false ):
                                            the_terms($post -> ID, 'portfolio-tags');
                                        endif;
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        if ( $i % 2 == 1 ):
                            echo '</div>';
                        endif;
                        $i ++ ;
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div><!--end class container-->

        </div>
    </section><!--end class tzblog-wrap-->

<?php get_footer(); ?>