<?php $post_type = get_post_type( $post -> ID ); ?>
<iframe class="iframe-full-audio tzblog-format" src="http://w.soundcloud.com/player/?url=http://api.soundcloud.com/tracks/<?php echo esc_attr(get_post_meta( get_the_ID(), THEME_PREFIX . '_portfolio_soundCloud_id', true )); ?>&amp;show_artwork=true&amp;auto_play=false&amp;sharing=true&amp;buying=true&amp;download=true&amp;show_user=true&amp;show_playcount=true&amp;show_comments=true">
</iframe>
