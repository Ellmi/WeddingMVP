

var $heightWindow  = jQuery(window).height();
var $height_header = jQuery('.tz-header').height();
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

    // jQuery for flexslider------------------
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

    jQuery('div.slotholder').prepend('<div class="bk-responsive-slide"></div>');


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
jQuery(document).ready(function(){

    "use strict";

    /* Method for Header */
    var $check_admin =  jQuery('#wpadminbar');
    if ( $check_admin.length > 0 ){
        jQuery('.tz-header').addClass('tzadminbar');
    }


    // method search

    jQuery('#searchform').css({
        top: ( ($heightWindow / 2 )- 30 ) + 'px'
    });
    jQuery('.tz-search').click(function(){
        jQuery('.tzform-search').fadeIn(1);
        jQuery('#searchform').addClass('searchform_aff');
    });

    jQuery('.tzcontro_search').click(function(){
        jQuery('.tzform-search').fadeOut();
        jQuery('#searchform').removeClass('searchform_aff');
    });

    /* Method for video */
    jQuery('.tzautoplay').click(function(){
        var $_this = jQuery(this);
        var myVideo = $_this.parents('.tz-video').find('.videoID')[0];
        jQuery(this).hide();
        $_this.parents('.tz-video').find('.tz-video-content h3').css('opacity',0);
        $_this.parents('.tz-video').find('.tz-video-content p').css('opacity',0);
        $_this.parents('.tz-video').find('.bg-video').hide();
        $_this.parents('.tz-video').find('.tzpause').show().css('opacity',0);
        if (myVideo.paused)
            myVideo.play();

    }) ;
    jQuery('.tzpause').click(function(){
        jQuery(this).hide();
        var $_this = jQuery(this);
        var myVideo = $_this.parents('.tz-video').find('.videoID')[0];
        $_this.parents('.tz-video').find('.tz-video-content h3').css('opacity',1);
        $_this.parents('.tz-video').find('.tz-video-content p').css('opacity',1);
        $_this.parents('.tz-video').find('.bg-video').show();
        $_this.parents('.tz-video').find('.tzautoplay').show();
        if (myVideo.play)
            myVideo.pause();

    });

    /* Method for Quote */
    jQuery(".tz-quote").owlCarousel({
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,1],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1],
        slideSpeed:500,
        paginationSpeed:800,
        rewindSpeed:1000,
        autoPlay:false,
        stopOnHover: false,
        singleItem:false,
        rewindNav:false,
        pagination:false,
        paginationNumbers:false,
        itemsScaleUp:false
    });


    /* Accordion Toggle Items */
    jQuery('.tzaccordion-content:first').show();

    jQuery('.tzaccordion_header').click(function() {
        var $_this = jQuery(this).attr('data-option-id');
        jQuery('.tzaccordion-content').slideUp('normal');
        if(jQuery($_this).is(':hidden') == true) {
            jQuery($_this).slideDown('normal');
        }
    });



    /**
     *  Method For Slider Blog
     * -----------------------------------------------------------------------------
     */
    jQuery('.tzblog-slider-content').each(function(){
        jQuery(this).owlCarousel({
            items : 1,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [979,1],
            itemsTablet: [768, 1],
            itemsMobile: [479, 1],
            slideSpeed:500,
            paginationSpeed:800,
            rewindSpeed:1000,
            autoPlay:false,
            stopOnHover: false,
            singleItem:false,
            rewindNav:false,
            pagination:false,
            autoHeight: true,
            paginationNumbers:false,
            itemsScaleUp:false
        });
        var $_parent = jQuery(this);
        $_parent.parent().find('.tz_slider_prev').click(function(){
            $_parent.trigger('owl.prev');
        }) ;
        $_parent.parent().find('.tz_slider_next').click(function(){
            $_parent.trigger('owl.next');
        }) ;
    }) ;



});

jQuery(window).scroll(function(){

    // method header
    var $_top = jQuery(window).scrollTop();
    if ( $_top > 0 ){
        jQuery('.tz-header1').addClass('headerAnimate');
        jQuery('.tz-header5').addClass('headerAnimate2');
    }else{
        jQuery('.tz-header1').removeClass('headerAnimate');
        jQuery('.tz-header5').removeClass('headerAnimate2');

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
    jQuery('.tz-header1').addClass('headerAnimate');
    jQuery('.tz-header5').addClass('headerAnimate2');
}else{
    jQuery('.tz-header1').removeClass('headerAnimate');
    jQuery('.tz-header5').removeClass('headerAnimate2');

}

