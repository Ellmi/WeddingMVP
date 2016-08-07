var $height_header3 = jQuery('.header3-fix').height();
var $nav3_height     = jQuery('.tznav-3').height();

jQuery(window).load(function(){

    "use strict";

    /* Method for parallax */
    if ( jQuery('.parallax').length ) {
        jQuery('.parallax').each(function(){
            jQuery(this).parallax("30%", 0.1);
        });
    }

    jQuery('.deeplove-slider').flexslider({
        animation: "fade",
        controlNav: false,
        animationLoop: true,
        slideshow: true,
        smoothHeight: true,
        pauseOnAction: false
    });

    var $widthW= jQuery(window).width();
    // height for woo
    var $opject = jQuery('.tzproduct-item');
    var $array_li = [];
    jQuery($opject).each(function(){
        $array_li.push(jQuery(this).innerHeight());
    });
    var $max_height = Math.max.apply( Math, $array_li );
    jQuery($opject).css('height',$max_height+'px');
    if (  $widthW > 767 ){
        // height for event grid
        var $opject_event   = jQuery('.tzmaxheight_item');
        var $array_li_event = [];
        jQuery($opject_event).each(function(){
            $array_li_event.push(jQuery(this).innerHeight());
        });
        var $max_height_event = Math.max.apply( Math, $array_li_event );
        jQuery($opject_event).css('height',$max_height_event+'px');
    }
    jQuery('#tzloadding').remove();
});

jQuery(document).ready(function() {

    "use strict";

    /* Method for Header */
    var $check_admin = jQuery('#wpadminbar');
    if ($check_admin.length > 0) {
        jQuery('.header').addClass('tzadminbar');
    }
});

jQuery(window).scroll(function(){

    // method header
    var $_top = jQuery(window).scrollTop();
    if ( $_top > 0 ){
        jQuery('.header1').addClass('headerAnimate');
        jQuery('.header5').addClass('headerAnimate2');
    }else{
        jQuery('.header1').removeClass('headerAnimate');
        jQuery('.header5').removeClass('headerAnimate2');

    }
    // method for header 3

    if ( $_top > $height_header3  ){
        jQuery('.header3-fix').addClass('headerAnimate3');
        jQuery('.headerAnimate3').css('margin-bottom',$nav3_height + 'px');
    }

    if ( $_top > $height_header3 + 10 ){
        jQuery('.header3-fix').addClass('headerAnimate3_');
    }else{
        jQuery('.header3-fix').removeClass('headerAnimate3_');
    }

    if ( $_top <= $height_header3 ){
        jQuery('.headerAnimate3').css('margin-bottom','0px');
        jQuery('.header3-fix').removeClass('headerAnimate3');

    }

});
// method header
var $_top = jQuery(window).scrollTop();
if ( $_top > 0 ){
    jQuery('.header1').addClass('headerAnimate');
    jQuery('.header5').addClass('headerAnimate2');
}else{
    jQuery('.header1').removeClass('headerAnimate');
    jQuery('.header5').removeClass('headerAnimate2');

}

