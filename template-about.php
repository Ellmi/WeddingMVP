<?php

        /**
         * Template Name: custom page
         */

?>

<?php get_header(); ?>
<?php get_template_part('template_inc/inc','menu'); ?>
<div class="tzdefault_title">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="about-page">
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
</div>
<?php get_footer(); ?>

