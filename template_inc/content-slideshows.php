<?php $post_type = get_post_type( get_the_ID() );
$slidershow = get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_slideshows', true );
?>

<div class="tzblog-slider tzblog-format">
    <button class="tz_slider_prev"><i class="fa fa-angle-left"></i></button>
    <button class="tz_slider_next"><i class="fa fa-angle-right"></i></button>
    <ul class="tzblog-slider-content">
        <?php
        if ( isset( $slidershow ) && !empty( $slidershow ) ):
            foreach( $slidershow as $slider ):
                ?>
                <li>
                    <img src="<?php echo esc_url($slider[THEME_PREFIX . '_portfolio_slideshow_item']); ?>" alt="<?php echo esc_attr($slider['title']); ?>">
                </li>
            <?php
            endforeach;
        endif;
        ?>
    </ul>
</div>
