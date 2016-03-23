<?php
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);


remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10,0);
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5,0);


add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

add_theme_support( 'woocommerce' );

function my_theme_wrapper_start() {

    ?>
        <div class="tz-shop-wrap">

             
    <?php
}

function my_theme_wrapper_end() {
    ?>
        </div>
    <?php
}

add_action( 'custom_woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
add_action('custom_woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action( 'custom_woocommerce_single_product_summary', 'woocommerce_template_single_meta', 20);
add_action('custom_woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 40);
add_action('wp_ajax_tzeverline_wooview','tzeverline_wooview');
add_action('wp_ajax_nopriv_tzeverline_wooview','tzeverline_wooview');
function tzeverline_wooview(){
    $id = $_POST['productid'];
    $arg_view = array(
        'post_type' =>  'product',
        'p'         =>  $id
    );
    $query_view = new WP_Query( $arg_view );
    if ( $query_view -> have_posts() ):
        while( $query_view -> have_posts() ):
            $query_view -> the_post();
    ?>
            <div class="row">
                <div class="col-md-6 col-sm-6 rtl-right">
                    <div class="single-images">
                        <?php
                        /**
                         * woocommerce_before_single_product_summary hook
                         *
                         * @hooked woocommerce_show_product_sale_flash - 10
                         * @hooked woocommerce_show_product_images - 20
                         */
                        do_action( 'woocommerce_before_single_product_summary' );
                        ?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 rtl-left">
                    <div class="tz-entry-summary">
                    <?php
                    /**
                     * woocommerce_single_product_summary hook
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_rating - 10
                     * @hooked woocommerce_template_single_price - 10
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     */
                    do_action( 'custom_woocommerce_single_product_summary' );
                    ?>
                    <a class="quick_readmore" href="<?php the_permalink(); ?>"><?php echo _e('Read More', TEXT_DOMAIN) ; ?></a>
                    </div>
                </div>
            </div>
    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    exit();
}

add_filter('loop_shop_per_page', 'show_products_per_page');

function show_products_per_page() {
    $posts_per_pages = ot_get_option(THEME_PREFIX . '_tzshoplimit',9);
    return $posts_per_pages;

}

add_action('woocommerce_share','tzeverline_share_product',1);
function tzeverline_share_product(){
    if( is_product() ):
?>
        <div class="product_share">
            <span><?php echo _e('SHARE ON:', TEXT_DOMAIN); ?></span>
            <!-- Facebook Button -->
            <a href="javascript: void(0)" onclick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php the_title(); ?>&amp;p[url]=<?php the_permalink() ; ?>','sharer','toolbar=0,status=0,width=580,height=325');" id="fb-share" class="tz_social"><i class="fa fa-facebook"></i></a>

            <!-- Twitter Button -->
            <a href="javascript: void(0)" onclick="window.open('http://twitter.com/share?text=<?php the_title(); ?>&amp;url=<?php the_permalink() ; ?>','sharer','toolbar=0,status=0,width=580,height=325');" class="tz_social" id="tw-share"><i class="fa fa-twitter"></i></a>

            <!-- Google +1 Button -->
            <a href="javascript: void(0)" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink() ; ?>','sharer','toolbar=0,status=0,width=580,height=325');" class="tz_social" id="g-share"><i class="fa fa-google-plus"></i></a>

            <!-- Pinterest Button -->
            <a href="javascript: void(0)" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?php the_permalink() ; ?>&amp;description=<?php the_title(); ?>','sharer','toolbar=0,status=0,width=580,height=325');" class="tz_social" id="p-share"><i class="fa fa-pinterest"></i></a>
        </div>
<?php
    endif;
}
