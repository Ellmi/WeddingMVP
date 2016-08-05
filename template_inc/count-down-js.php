<script>
    jQuery(document).ready(function () {
        jQuery(".countdown").countdown({
            date: "<?php echo esc_attr_e(get_theme_mod('activity_end_time_setting')); ?>", // add the countdown's end date (i.e. 3 november 2012 12:00:00)
            format: "on" // on (03:07:52) | off (3:7:52) - two_digits set to ON maintains layout consistency
        });
    });
</script>