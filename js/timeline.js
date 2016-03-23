
jQuery('.timeline-load').click(function(){
    var $pageid = jQuery(this).attr('data-option-id');
    jQuery('.image_timeline').show();
    jQuery.ajax({
       url: timeline_var.url,
        type: 'POST',
        data: ({
            action: 'tzeverline_timeline',
            pageid: $pageid
        }),
        success: function(data){
            if (data){
            jQuery('.container-timeline').append(data);
            }else{
                jQuery('.timeline-load').remove();
                jQuery('.timeline-noload').show();
            }

            var $newid = parseInt($pageid) + 1;
            jQuery('.timeline-load').attr('data-option-id',$newid);


            jQuery('.row-efff').animate({ textIndent: 0 }, {
                step: function() {
                    jQuery(this).css('-moz-transform','none');
                    jQuery(this).css('-webkit-transform','none');
                    jQuery(this).css('-o-transform','none');
                    jQuery(this).css('transform','none');
                    jQuery(this).css('opacity','1');
                },
                duration: 500
            });
            jQuery('.image_timeline').hide();
            jQuery('.tzblog-slider-content').each(function(){
                jQuery(this).owlCarousel({
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [979,1],
                    itemsTablet: [768, 2],
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
        }
    });

});