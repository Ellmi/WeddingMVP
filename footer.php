<footer class="dl-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 footerattr">
                <p class="one"><?php echo esc_attr_e(get_theme_mod('Footer_social_one', __('电话: XXXXXXXXXX', 'deeplove')));?></p>

                <p class="two"><?php echo esc_attr_e(get_theme_mod('Footer_social_two', __('QQ: XXXXXXXXXX', 'deeplove')));?></p>

                <p class="three"><?php echo esc_attr_e(get_theme_mod('Footer_social_three', __('微信: XXXXXXXXXX', 'deeplove')));?></p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 footerattr">
                <a href="#">
                    <img src="<?php echo esc_url( get_template_directory_uri().'/images/logo.png'); ?> " >
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 footerattr">
                <p class="four"><?php echo esc_attr_e(get_theme_mod('Footer_social_four', __('地址: XXXXXXXXXXX', 'deeplove')));?></p>

                <p class="five"><?php echo esc_attr_e(get_theme_mod('Footer_social_five', __('淘宝店铺: XXXXXXXXXX', 'deeplove')));?></p>

                <p class="six"><?php echo esc_attr_e(get_theme_mod('Footer_social_six', __('其他: XXXXXXXXXX', 'deeplove')));?></p>
            </div>

        </div>
        <!--end class row-->
    </div>
    <!--end class container-->
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>