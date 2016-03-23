

<?php

    /**
     * Template Name: Template Coming soon
     */

?>

<?php get_header(); ?>
<?php get_template_part('template_inc/inc','menu'); ?>
    <?php
    if( have_posts() ):
        // Start the Loop.
        while( have_posts() ): the_post();

            the_content();
            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', TEXT_DOMAIN ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
            ) );

        endwhile;
    endif;
    ?>
<?php get_footer(); ?>

