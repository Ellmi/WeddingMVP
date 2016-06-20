<footer class="dl-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 footerattr">
                <p class="one"><?php echo esc_attr_e(get_theme_mod('Footer_social_one', __('Footer social one', 'deeplove')));?></p>

                <p class="two"><?php echo esc_attr_e(get_theme_mod('Footer_social_two', __('Footer social two', 'deeplove')));?></p>

                <p class="three"><?php echo esc_attr_e(get_theme_mod('Footer_social_three', __('Footer social three', 'deeplove')));?></p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 footerattr">
                <a href="#">
                    <img src="<?php echo esc_url( get_template_directory_uri().'/images/logo.png'); ?> " >
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 footerattr">
                <p class="four"><?php echo esc_attr_e(get_theme_mod('Footer_social_four', __('Footer social four', 'deeplove')));?></p>

                <p class="five"><?php echo esc_attr_e(get_theme_mod('Footer_social_five', __('Footer social five', 'deeplove')));?></p>

                <p class="six"><?php echo esc_attr_e(get_theme_mod('Footer_social_six', __('Footer social six', 'deeplove')));?></p>
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