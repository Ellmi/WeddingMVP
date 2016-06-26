<?php
    /**
     * Template Name: VC Template
     */

    get_header();

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

    get_footer();
?>