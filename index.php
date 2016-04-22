<?php get_header(); ?>
<?php get_template_part('template_inc/inc','menu');
$sidebar              =   ot_get_option(THEME_PREFIX . '_TZBlogSidebar',0);
$class_slider = 'col-md-12';
if ( $sidebar != 0 ):
    $class_slider = 'col-md-9';
endif;

?>
<?php do_action('deeplove_homepage'); ?>

<?php
get_footer();
?>

