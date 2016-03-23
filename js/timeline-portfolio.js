
jQuery('.timeline-load').click(function(){
    var $pageid = jQuery(this).attr('data-option-id');
    jQuery('.image_timeline').show();
    jQuery.ajax({
        url: timeline_var.url,
        type: 'POST',
        data: ({
            action: 'tzeverline_portfolio_timeline',
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
        }
    });

});