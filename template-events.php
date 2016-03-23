<?php

    /*
     * Template Name: Template events grid
     */

    get_header();
    get_template_part('template_inc/inc','menu'); ?>
    <div class="tzdefault_title">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="tztemplate-events-grid">
        <div class="container">
            <div id="tztribe-events-grid" class="row">
                <div class="col-md-9">
                    <div class="row">

                    <?php
                        if ( get_query_var('paged') ):
                            $paged = get_query_var('paged');
                        else:
                            $paged = 1;
                        endif;
                        $args = array(
                            'post_type' =>  'tribe_events',
                            'paged'     =>  $paged
                        );
                        $tribe_query    = new  WP_Query( $args );
                        if ( $tribe_query -> have_posts() ):
                            while( $tribe_query -> have_posts() ):
                                $tribe_query -> the_post();

                    ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-sm-4') ?>>
                        <div class="tztribe_item tzmaxheight_item">
                            <div class="tztribe_grid">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="tztribe_events_ds">
                                <?php
                                    the_excerpt();
                                ?>
                            </div>
                            <a class="tzevent-readmore" href="<?php the_permalink(); ?>"><?php echo _e('MORE DETAIL', TEXT_DOMAIN); ?></a>
                        </div>
                    </div>
                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                    </div>
                    <div class="tztribe_nav">
                        <?php
                             echo  tzeverline_custom_paging_nav( $tribe_query->max_num_pages);
                        ?>
                    </div>
                </div>

                <div class="col-md-3 tzsidebar-event">
                    <?php get_sidebar('event'); ?>
                </div>
            </div> <!-- #tribe-events-pg-template -->
        </div>
    </div>
<?php get_footer(); ?>