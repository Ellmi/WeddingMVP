<?php
/**
 * Template Name: VIDEO Single Template
 * User: Yanmin
 */
get_header();
get_template_part('template_inc/main', 'menu-bar');
get_template_part('template_inc/slides', 'video'); ?>

<div class="row">
    <?php
    $blog_args = array(
        'post_type' => 'post'
    );
    $query_blog = new WP_Query($blog_args);
    if ($query_blog->have_posts()):
    while ($query_blog->have_posts()):
    $query_blog->the_post();
    $post_fomats = get_post_format();?>
    <div id="post-<?php the_ID(); ?>">
    </div>
<?php
    echo "<script>console.log('$post_fomats')</script>";
    the_content();
    ?>
</div>
<?php
    endwhile;
endif; ?>
</div>
<?php get_footer(); ?>


