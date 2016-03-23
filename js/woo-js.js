jQuery(document).ready(function(){

    jQuery('.tzquick-view').on('click',function(){
        jQuery('.tzquick-wrap').addClass('tzquick-wrap-eff');
        jQuery('.tzquick-wrap').addClass('tzquick-wrap-bk');
        var $product_id = jQuery(this).attr('data-option-id');
        jQuery.ajax({
                url: woo_var.url,
                type: 'POST',
                data: ({
                    action   : 'tzeverline_wooview',
                    productid: $product_id
                }),
                beforeSend: function(){

                },
                success: function(data){
                    jQuery('.product-quick-content').html(data);
                    jQuery('.product-quick-warp').animate({
                       'top': '50%',
                        opacity: 1
                    },350,function(){

                    });
                    jQuery('.tzquick-wrap').removeClass('tzquick-wrap-bk');
                    jQuery('.tzdelete-quick').click(function(){
                        jQuery('.product-quick-warp').animate({
                            'top': '80%',
                            opacity: 0
                        },350,function(){
                            jQuery('.tzquick-wrap').removeClass('tzquick-wrap-eff');
                        });

                    });

                    // The slider being synced must be initialized first
                    jQuery('#carousel').flexslider({
                        animation: "slide",
                        controlNav: false,
                        animationLoop: false,
                        slideshow: false,
                        directionNav: true,
                        itemWidth: 80,
                        itemMargin: 5,
                        asNavFor: '#slider'
                    });

                    jQuery('#slider').flexslider({
                        animation: "slide",
                        controlNav: false,
                        animationLoop: false,
                        slideshow: false,
                        smoothHeight: true,
                        sync: "#carousel"
                    });



                }
        });
    });

});