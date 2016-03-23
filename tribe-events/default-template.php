<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header();
get_template_part('template_inc/inc','menu'); ?>
<div class="tzdefault_title">
    <div class="container">
        <h1><?php
           if ( is_tax('post_tag') ){
                echo sprintf( __( 'Tag: %s', TEXT_DOMAIN ), single_cat_title( '', false ) );
            } elseif ( is_tax('tribe_events_cat') ) {
                echo  sprintf( __( 'Category: %s', TEXT_DOMAIN ), single_tag_title( '', false ) );
            } elseif ( is_author() ) {
                echo sprintf( __( 'Author: %s', TEXT_DOMAIN ), '<span class="vcard">' . get_the_author() . '</span>' );
            } elseif ( is_year() ) {
                echo sprintf( __( 'Year: %s', TEXT_DOMAIN ), get_the_date( _x( 'Y', TEXT_DOMAIN  ) ) );
            } elseif ( is_month() ) {
                echo sprintf( __( 'Month: %s', TEXT_DOMAIN ), get_the_date( _x( 'F Y', TEXT_DOMAIN  ) ) );
            } elseif ( is_day() ) {
                echo sprintf(__('Day: %s', TEXT_DOMAIN), get_the_date(_x('F j, Y', TEXT_DOMAIN )));
            }else {
                echo _e('Event', TEXT_DOMAIN);
            }
            ?></h1>
    </div>
</div>
<div class="tztribe-events-wrap">
    <div class="container">
        <div id="tribe-events-pg-template">
            <?php tribe_events_before_html(); ?>
            <?php tribe_get_view(); ?>
            <?php tribe_events_after_html(); ?>
        </div> <!-- #tribe-events-pg-template -->
    </div>
</div>
<?php get_footer(); ?>