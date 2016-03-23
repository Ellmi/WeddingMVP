<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php

// Setup an array of venue details for use later in the template
$venue_details = array();

if ( $venue_name = tribe_get_meta( 'tribe_event_venue_name' ) ) {
	$venue_details[] = $venue_name;
}

if ( $venue_address = tribe_get_meta( 'tribe_event_venue_address' ) ) {
	$venue_details[] = $venue_address;
}
// Venue microformats
$has_venue_address = ( $venue_address ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>
<div class="row">
    <div class="col-md-3 tztribe_list_image">
        <!-- Event Image -->
        <?php echo tribe_event_featured_image( null, 'medium' ) ?>
    </div>
    <div class="col-md-9 tztribe_list_content">


    <!-- Event Cost -->
    <?php if ( tribe_get_cost() ) : ?>
        <div class="tribe-events-event-cost">
            <span><?php echo tribe_get_cost( null, true ); ?></span>
        </div>
    <?php endif; ?>

    <!-- Event Title -->
    <?php do_action( 'tribe_events_before_the_event_title' ) ?>
    <h2 class="tribe-events-list-event-title entry-title summary">
        <a class="url" href="<?php echo tribe_get_event_link() ?>" title="<?php the_title() ?>" rel="bookmark">
            <?php the_title() ?>
        </a>
    </h2>
    <?php do_action( 'tribe_events_after_the_event_title' ) ?>

    <!-- Event Meta -->
    <?php do_action( 'tribe_events_before_the_meta' ) ?>
    <div class="tribe-events-event-meta vcard">
        <div class="author <?php echo $has_venue_address; ?>">

            <!-- Schedule & Recurrence Details -->
            <div class="updated published time-details">
                <?php echo tribe_events_event_schedule_details() ?>
            </div>

            <?php if ( $venue_details ) : ?>
                <!-- Venue Display Info -->
                <div class="tribe-events-venue-details">
                    <?php echo implode( ', ', $venue_details ); ?>
                </div> <!-- .tribe-events-venue-details -->
            <?php endif; ?>

        </div>
    </div><!-- .tribe-events-event-meta -->
    <?php do_action( 'tribe_events_after_the_meta' ) ?>



    <!-- Event Content -->
    <?php do_action( 'tribe_events_before_the_content' ) ?>
    <div class="tribe-events-list-event-description tribe-events-content description entry-summary">
        <?php the_excerpt() ?>
        <a href="<?php echo tribe_get_event_link() ?>" class="tribe-events-read-more" rel="bookmark"><?php _e( 'Find out more', 'tribe-events-calendar' ) ?> &raquo;</a>
    </div><!-- .tribe-events-list-event-description -->
    <?php do_action( 'tribe_events_after_the_content' ) ?>

    </div>
</div>

