<?php
$footer_col = ot_get_option(THEME_PREFIX. '_footer_columns',3);
$footer_widthl = ot_get_option(THEME_PREFIX. 'footerwidth1',4);
$footer_width2 = ot_get_option(THEME_PREFIX. 'footerwidth2',4);
$footer_width3 = ot_get_option(THEME_PREFIX. 'footerwidth3',4);
$url_widget    = site_url().'/wp-admin/widgets.php';
?>
<footer class="tz-footer">
    <div class="container">
            <div class="row">
                <?php
                if(isset($footer_col) && $footer_col!=""):
                    for($i=0;$i<$footer_col;$i++):
                        $j = $i +1;
                        if($i==0){
                            $col = $footer_widthl;
                        }elseif($i==1){
                            $col = $footer_width2;
                        }elseif($i==2){
                            $col = $footer_width3;
                        }

                        ?>
                        <div class="col-md-<?php echo esc_attr($col); ?> footerattr">
                            <?php
                            if(function_exists('dynamic_sidebar') && dynamic_sidebar('Footer '.esc_attr($j).'')):
                            else:
                            ?>
                                <aside>
                                    <h3 class="module-title title-widget"><a href="<?php echo esc_url($url_widget); ?> ">Click Add footer <?php echo esc_html($j); ?></a></h3>
                                    <div class="widget_notemp">

                                    </div>
                                </aside>
                            <?php endif; ?>
                        </div>
                        <?php
                    endfor;
                endif;
                ?>

            </div><!--end class row-->
    </div><!--end class container-->
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>