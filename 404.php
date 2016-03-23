<?php get_header(); ?>
<?php

$title      = ot_get_option(THEME_PREFIX . '_404_title');
$content    = ot_get_option(THEME_PREFIX . '_404_content');
$url        = IMG_PATH .'404.jpg';
$background = ot_get_option(THEME_PREFIX . '_404_bk');
if ( $background == '' ){
    $background = $url;
}
?>
<section class="content-404" style="background-image: url('<?php echo esc_url($background); ?>')">
    <div class="content-404-style container">
        <i class="fa fa-cog icon-404"></i>
        <h1 class="title-404"><?php echo esc_html($title); ?></h1>
        <p><?php echo esc_html($content);  ?></p>
        <div class="entry-404-meta">
            <a href="<?php echo home_url(); ?>"><?php echo _e('Go to home', TEXT_DOMAIN); ?></a>
        </div>
    </div>
</section>
</div>
<?php wp_footer(); ?>
</body>
</html>