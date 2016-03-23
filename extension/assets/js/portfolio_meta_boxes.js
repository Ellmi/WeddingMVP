/*global jQuery: false, themeprefix: false */

jQuery(function(){
  "use strict";

  var $type_value = jQuery('#plazart_portfolio_type').val();
  switch ($type_value) {
      case 'videoid':
          jQuery('#setting_plazart_portfolio_video_type').slideDown();
          jQuery('#setting_plazart_portfolio_video').slideDown();
          jQuery('#setting_plazart_portfolio_slideshows_style').slideUp();
          jQuery('#setting_plazart_portfolio_slideshows').slideUp();
          jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
          jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
          jQuery('#setting_plazart_portfolio_video_webm').slideUp();
          jQuery('#setting_plazart_bk_video').slideUp();
          jQuery('#setting_plazart_portfolio_gallery').slideUp();
          jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
          jQuery('#setting_plazart_portfolio_image').slideUp();
          break;
      case 'video':
          jQuery('#setting_plazart_portfolio_video_type').slideUp();
          jQuery('#setting_plazart_portfolio_video').slideUp();
          jQuery('#setting_plazart_portfolio_slideshows_style').slideUp();
          jQuery('#setting_plazart_portfolio_slideshows').slideUp();
          jQuery('#setting_plazart_portfolio_video_mp4').slideDown();
          jQuery('#setting_plazart_portfolio_video_ogv').slideDown();
          jQuery('#setting_plazart_portfolio_video_webm').slideDown();
          jQuery('#setting_plazart_bk_video').slideDown();
          jQuery('#setting_plazart_portfolio_gallery').slideUp();
          jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
          jQuery('#setting_plazart_portfolio_image').slideUp();
          break;
      case 'slideshows':
          jQuery('#setting_plazart_portfolio_video_type').slideUp();
          jQuery('#setting_plazart_portfolio_video').slideUp();
          jQuery('#setting_plazart_portfolio_slideshows_style').slideDown();
          jQuery('#setting_plazart_portfolio_slideshows').slideDown();
          jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
          jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
          jQuery('#setting_plazart_portfolio_video_webm').slideUp();
          jQuery('#setting_plazart_bk_video').slideUp();
          jQuery('#setting_plazart_portfolio_gallery').slideUp();
          jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
          jQuery('#setting_plazart_portfolio_image').slideUp();
          break;
      case 'image':
          jQuery('#setting_plazart_portfolio_video_type').slideUp();
          jQuery('#setting_plazart_portfolio_video').slideUp();
          jQuery('#setting_plazart_portfolio_slideshows_style').slideDown();
          jQuery('#setting_plazart_portfolio_slideshows').slideUp();
          jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
          jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
          jQuery('#setting_plazart_portfolio_video_webm').slideUp();
          jQuery('#setting_plazart_bk_video').slideUp();
          jQuery('#setting_plazart_portfolio_gallery').slideUp();
          jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
          jQuery('#setting_plazart_portfolio_image').slideDown();
          break;
      case 'gallery':
          jQuery('#setting_plazart_portfolio_video_type').slideUp();
          jQuery('#setting_plazart_portfolio_video').slideUp();
          jQuery('#setting_plazart_portfolio_slideshows_style').slideUp();
          jQuery('#setting_plazart_portfolio_slideshows').slideUp();
          jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
          jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
          jQuery('#setting_plazart_portfolio_video_webm').slideUp();
          jQuery('#setting_plazart_bk_video').slideUp();
          jQuery('#setting_plazart_portfolio_gallery').slideDown();
          jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
          jQuery('#setting_plazart_portfolio_image').slideUp();
          break;
      case 'audio':
          jQuery('#setting_plazart_portfolio_video_type').slideUp();
          jQuery('#setting_plazart_portfolio_video').slideUp();
          jQuery('#setting_plazart_portfolio_slideshows_style').slideUp();
          jQuery('#setting_plazart_portfolio_slideshows').slideUp();
          jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
          jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
          jQuery('#setting_plazart_portfolio_video_webm').slideUp();
          jQuery('#setting_plazart_bk_video').slideUp();
          jQuery('#setting_plazart_portfolio_gallery').slideUp();
          jQuery('#setting_plazart_portfolio_soundCloud_id').slideDown();
          jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
          jQuery('#setting_plazart_portfolio_image').slideUp();
          break;
      case 'quote':
          jQuery('#setting_plazart_portfolio_video_type').slideUp();
          jQuery('#setting_plazart_portfolio_video').slideUp();
          jQuery('#setting_plazart_portfolio_slideshows_style').slideUp();
          jQuery('#setting_plazart_portfolio_slideshows').slideUp();
          jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
          jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
          jQuery('#setting_plazart_portfolio_video_webm').slideUp();
          jQuery('#setting_plazart_bk_video').slideUp();
          jQuery('#setting_plazart_portfolio_gallery').slideUp();
          jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_content').slideDown();
          jQuery('#setting_plazart_portfolio_Quote_ds').slideDown();
          jQuery('#setting_plazart_portfolio_image').slideUp();
          break;
      default :
          jQuery('#setting_plazart_portfolio_video_type').slideUp();
          jQuery('#setting_plazart_portfolio_video').slideUp();
          jQuery('#setting_plazart_portfolio_slideshows_style').slideUp();
          jQuery('#setting_plazart_portfolio_slideshows').slideUp();
          jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
          jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
          jQuery('#setting_plazart_portfolio_video_webm').slideUp();
          jQuery('#setting_plazart_bk_video').slideUp();
          jQuery('#setting_plazart_portfolio_gallery').slideUp();
          jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
          jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
          jQuery('#setting_plazart_portfolio_image').slideUp();
          break;
  }

    jQuery('#plazart_portfolio_type').change(function(){
        switch (jQuery(this).val()) {
            case 'videoid':
                jQuery('#setting_plazart_portfolio_video_type').slideDown();
                jQuery('#setting_plazart_portfolio_video').slideDown();
                jQuery('#setting_plazart_portfolio_slideshows_style').slideUp();
                jQuery('#setting_plazart_portfolio_slideshows').slideUp();
                jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
                jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
                jQuery('#setting_plazart_portfolio_video_webm').slideUp();
                jQuery('#setting_plazart_bk_video').slideUp();
                jQuery('#setting_plazart_portfolio_gallery').slideUp();
                jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
                jQuery('#setting_plazart_portfolio_image').slideUp();
                break;
            case 'video':
                jQuery('#setting_plazart_portfolio_video_type').slideUp();
                jQuery('#setting_plazart_portfolio_video').slideUp();
                jQuery('#setting_plazart_portfolio_slideshows_style').slideUp();
                jQuery('#setting_plazart_portfolio_slideshows').slideUp();
                jQuery('#setting_plazart_portfolio_video_mp4').slideDown();
                jQuery('#setting_plazart_portfolio_video_ogv').slideDown();
                jQuery('#setting_plazart_portfolio_video_webm').slideDown();
                jQuery('#setting_plazart_bk_video').slideDown();
                jQuery('#setting_plazart_portfolio_gallery').slideUp();
                jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
                jQuery('#setting_plazart_portfolio_image').slideUp();
                break;
            case 'slideshows':
                jQuery('#setting_plazart_portfolio_video_type').slideUp();
                jQuery('#setting_plazart_portfolio_video').slideUp();
                jQuery('#setting_plazart_portfolio_slideshows_style').slideDown();
                jQuery('#setting_plazart_portfolio_slideshows').slideDown();
                jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
                jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
                jQuery('#setting_plazart_portfolio_video_webm').slideUp();
                jQuery('#setting_plazart_bk_video').slideUp();
                jQuery('#setting_plazart_portfolio_gallery').slideUp();
                jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
                jQuery('#setting_plazart_portfolio_image').slideUp();
                break;
            case 'image':
                jQuery('#setting_plazart_portfolio_video_type').slideUp();
                jQuery('#setting_plazart_portfolio_video').slideUp();
                jQuery('#setting_plazart_portfolio_slideshows_style').slideDown();
                jQuery('#setting_plazart_portfolio_slideshows').slideUp();
                jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
                jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
                jQuery('#setting_plazart_portfolio_video_webm').slideUp();
                jQuery('#setting_plazart_bk_video').slideUp();
                jQuery('#setting_plazart_portfolio_gallery').slideUp();
                jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
                jQuery('#setting_plazart_portfolio_image').slideDown();
                break;
            case 'gallery':
                jQuery('#setting_plazart_portfolio_video_type').slideUp();
                jQuery('#setting_plazart_portfolio_video').slideUp();
                jQuery('#setting_plazart_portfolio_slideshows_style').slideUp();
                jQuery('#setting_plazart_portfolio_slideshows').slideUp();
                jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
                jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
                jQuery('#setting_plazart_portfolio_video_webm').slideUp();
                jQuery('#setting_plazart_bk_video').slideUp();
                jQuery('#setting_plazart_portfolio_gallery').slideDown();
                jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
                jQuery('#setting_plazart_portfolio_image').slideUp();
                break;
            case 'audio':
                jQuery('#setting_plazart_portfolio_video_type').slideUp();
                jQuery('#setting_plazart_portfolio_video').slideUp();
                jQuery('#setting_plazart_portfolio_slideshows_style').slideUp();
                jQuery('#setting_plazart_portfolio_slideshows').slideUp();
                jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
                jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
                jQuery('#setting_plazart_portfolio_video_webm').slideUp();
                jQuery('#setting_plazart_bk_video').slideUp();
                jQuery('#setting_plazart_portfolio_gallery').slideUp();
                jQuery('#setting_plazart_portfolio_soundCloud_id').slideDown();
                jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
                jQuery('#setting_plazart_portfolio_image').slideUp();
                break;
            case 'quote':
                jQuery('#setting_plazart_portfolio_video_type').slideUp();
                jQuery('#setting_plazart_portfolio_video').slideUp();
                jQuery('#setting_plazart_portfolio_slideshows_style').slideUp();
                jQuery('#setting_plazart_portfolio_slideshows').slideUp();
                jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
                jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
                jQuery('#setting_plazart_portfolio_video_webm').slideUp();
                jQuery('#setting_plazart_bk_video').slideUp();
                jQuery('#setting_plazart_portfolio_gallery').slideUp();
                jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_content').slideDown();
                jQuery('#setting_plazart_portfolio_Quote_ds').slideDown();
                jQuery('#setting_plazart_portfolio_image').slideUp();
                break;
            default :
                jQuery('#setting_plazart_portfolio_video_type').slideUp();
                jQuery('#setting_plazart_portfolio_video').slideUp();
                jQuery('#setting_plazart_portfolio_slideshows_style').slideUp();
                jQuery('#setting_plazart_portfolio_slideshows').slideUp();
                jQuery('#setting_plazart_portfolio_video_mp4').slideUp();
                jQuery('#setting_plazart_portfolio_video_ogv').slideUp();
                jQuery('#setting_plazart_portfolio_video_webm').slideUp();
                jQuery('#setting_plazart_bk_video').slideUp();
                jQuery('#setting_plazart_portfolio_gallery').slideUp();
                jQuery('#setting_plazart_portfolio_soundCloud_id').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_content').slideUp();
                jQuery('#setting_plazart_portfolio_Quote_ds').slideUp();
                jQuery('#setting_plazart_portfolio_image').slideUp();
                break;
        }
    });


  var $checkpage = jQuery('#page_template').val();
    switch ($checkpage){
        case 'template-portfolio.php':
            jQuery('#page_meta_box').css('display','block');
            jQuery('#page_blog_meta_box').css('display','none');
            break;
        case 'template-blog.php':
            jQuery('#page_meta_box').css('display','none');
            jQuery('#page_blog_meta_box').css('display','block');
            break;
        default :
            jQuery('#page_meta_box').css('display','none');
            jQuery('#page_blog_meta_box').css('display','none');
            break;

    }

  jQuery('#page_template').change(function(){

     var $value = jQuery(this).val();
      switch ($value){
          case 'template-portfolio.php':
              jQuery('#page_meta_box').css('display','block');
              jQuery('#page_blog_meta_box').css('display','none');
              break;
          case 'template-blog.php':
              jQuery('#page_meta_box').css('display','none');
              jQuery('#page_blog_meta_box').css('display','block');
              break;
          default :
              jQuery('#page_meta_box').css('display','none');
              jQuery('#page_blog_meta_box').css('display','none');
              break;

      }
  });


    var $checkportfolio = jQuery('#plazart_portfolio_full').val();
   if ( $checkportfolio ==  'mansory' ){
       jQuery('#setting_plazart_portfolio_column').css('display','none');
       jQuery('#setting_plazart_desktop_column').css('display','none');
       jQuery('#setting_plazart_tabletportrait_column').css('display','none');
       jQuery('#setting_plazart_mobilelandscape_column').css('display','none');
       jQuery('#setting_plazart_mobileportrait_column').css('display','none');
   }
    if ( $checkportfolio ==  'fullwidth' ){
        jQuery('#setting_plazart_portfolio_sidebar').css('display','none');
   }

  jQuery('#plazart_portfolio_full').change(function(){

     var $checkportfolio2 = jQuery(this).val();
      switch ($checkportfolio2){
          case 'mansory':
              jQuery('#setting_plazart_portfolio_column').css('display','none');
              jQuery('#setting_plazart_desktop_column').css('display','none');
              jQuery('#setting_plazart_tabletportrait_column').css('display','none');
              jQuery('#setting_plazart_mobilelandscape_column').css('display','none');
              jQuery('#setting_plazart_mobileportrait_column').css('display','none');
              break;
          default :
              jQuery('#setting_plazart_portfolio_column').css('display','block');
              jQuery('#setting_plazart_desktop_column').css('display','block');
              jQuery('#setting_plazart_tabletportrait_column').css('display','block');
              jQuery('#setting_plazart_mobilelandscape_column').css('display','block');
              jQuery('#setting_plazart_mobileportrait_column').css('display','block');
              break;

      }

      switch ($checkportfolio2){
          case 'fullwidth':
              jQuery('#setting_plazart_portfolio_sidebar').css('display','none');
              break;
          default :
              jQuery('#setting_plazart_portfolio_sidebar').css('display','block');
              break;

      }
  });
});
