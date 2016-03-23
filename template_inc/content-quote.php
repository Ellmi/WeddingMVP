<?php $post_type = get_post_type( $post -> ID ); ?>
<div class="tzquote tzblog-format">
    <i class="fa fa-heart-o quote_icon"></i>
    <p>
        <i class="fa fa-quote-left"></i>
        <?php echo esc_html(get_post_meta($post -> ID, THEME_PREFIX . '_portfolio_Quote_content', true)); ?>
        <i class="fa fa-quote-right"></i>
    </p>
    <span class="author_quote">
        <?php echo esc_html(get_post_meta($post -> ID, THEME_PREFIX . '_portfolio_Quote_ds', true)); ?>
    </span>
</div>
