<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$event_id = get_the_ID();

?>

<div class="row">
    <div class="col-md-9">
        <div id="tribe-events-content" class="tribe-events-single vevent hentry">

<!--            <p class="tribe-events-back">-->
<!--                <a href="--><?php //echo tribe_get_events_link() ?><!--"> --><?php //_e( '&laquo; All Events', 'tribe-events-calendar' ) ?><!--</a>-->
<!--            </p>-->

            <!-- Notices -->
            <?php tribe_events_the_notices() ?>

            <?php the_title( '<h2 class="tribe-events-single-event-title summary entry-title">', '</h2>' ); ?>

            <div class="tribe-events-schedule updated published tribe-clearfix">
                <?php echo tribe_events_event_schedule_details( $event_id, '<h3>', '</h3>' ); ?>
                <?php if ( tribe_get_cost() ) : ?>
                    <span class="tribe-events-divider">|</span>
                    <span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
                <?php endif; ?>
            </div>

            <!-- Event header -->
            <div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>
                <!-- Navigation -->
                <h3 class="tribe-events-visuallyhidden"><?php _e( 'Event Navigation', 'tribe-events-calendar' ) ?></h3>
                <ul class="tribe-events-sub-nav">
                    <li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
                    <li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
                </ul>
                <!-- .tribe-events-sub-nav -->
            </div>
            <!-- #tribe-events-header -->

            <?php while ( have_posts() ) :  the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!-- Event featured image, but exclude link -->
                    <?php // echo tribe_event_featured_image( $event_id, 'full', false ); ?>

                    <!-- Event content -->
                    <?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
                    <div class="tribe-events-single-event-description tribe-events-content entry-content description">
                        <?php the_content(); ?>
                        <div class="tzevent_share">
                            <span><?php echo _e('SHARE THIS:', TEXT_DOMAIN); ?></span>
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
                    <!-- .tribe-events-single-event-description -->
                    <?php do_action( 'tribe_events_single_event_after_the_content' ) ?>

                    <!-- Event meta -->
                    <?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
                    <?php
                    /**
                     * The tribe_events_single_event_meta() function has been deprecated and has been
                     * left in place only to help customers with existing meta factory customizations
                     * to transition: if you are one of those users, please review the new meta templates
                     * and make the switch!
                     */
                    if ( ! apply_filters( 'tribe_events_single_event_meta_legacy_mode', false ) ) {
                        tribe_get_template_part( 'modules/meta' );
                    } else {
                        echo tribe_events_single_event_meta();
                    }
                    ?>
                    <?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
                </div> <!-- #post-x -->
                <?php if ( get_post_type() == TribeEvents::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
            <?php endwhile; ?>

            <!-- Event footer -->
            <div id="tribe-events-footer">
                <!-- Navigation -->
                <!-- Navigation -->
                <h3 class="tribe-events-visuallyhidden"><?php _e( 'Event Navigation', 'tribe-events-calendar' ) ?></h3>
                <ul class="tribe-events-sub-nav">
                    <li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<i class="fa fa-long-arrow-left"></i> %title%' ) ?></li>
                    <li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <i class="fa fa-long-arrow-right"></i>' ) ?></li>
                </ul>
                <!-- .tribe-events-sub-nav -->
            </div>
            <!-- #tribe-events-footer -->

        </div><!-- #tribe-events-content -->
    </div>
    <div class="col-md-3 tzsidebar-event">
        <?php get_sidebar('event'); ?>
    </div>
</div>

