<?php $post_type = get_post_type( $post -> ID );
$video_bk  = get_post_meta( $post -> ID, THEME_PREFIX . '_bk_video', true );
?>
<div class="blog-video tzblog-format">
    <div class="video">
        <button class="tzautoplay"><i class="fa fa-video-camera"></i></button>
        <button class="tzpause"><i class="fa fa-pause"></i></button>
        <?php if ( isset( $video_bk ) && !empty( $video_bk ) ) : ?>
            <div class="bg-video bg-video1" style="background: url(<?php echo esc_url($video_bk); ?>) no-repeat  center center / cover  transparent !important;"></div>
        <?php endif; ?>
        <video class="videoID">
            <source type="video/mp4" src="<?php echo esc_url(get_post_meta( $post -> ID, THEME_PREFIX . '_portfolio_video_mp4', true )); ?>" />
            <source type="video/ogg" src="<?php echo esc_url(get_post_meta( $post -> ID, THEME_PREFIX . '_portfolio_video_ogv', true )); ?>" />
            <source type="video/webm" src="<?php echo esc_url(get_post_meta( $post -> ID, THEME_PREFIX . '_portfolio_video_webm', true )); ?>" />
        </video>
    </div>
</div>
