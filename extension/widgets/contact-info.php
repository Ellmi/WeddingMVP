<?php
 /* *
  * widgets contact info
  **/
  class tz_contact_info extends WP_Widget{

      /*function construct*/
      public function __construct() {
          parent::__construct(
            'contact_info',__('Contact info',TEXT_DOMAIN),
             array('description'=>__('Display Contact info', TEXT_DOMAIN))
          );
      }

      /**
       * font-end widgets
      */
      public function widget($args, $instance) {
          extract($args);
          $title = apply_filters('widget_title', $instance['title']);

          echo $before_widget;

          if($title) {
              echo $before_title.$title.$after_title;
          }

      ?>
          <div class="tzwidget-contact">
            <?php  if($instance['address']): ?>
              <address> <?php  echo esc_html($instance['address']);  ?> </address>
            <?php  endif; ?>
            <?php  if($instance['phone']): ?>
              <span> <?php echo esc_html($instance['phone']); ?> </span>
            <?php  endif; ?>
            <?php if($instance['mobile']): ?>
              <span> <?php echo esc_html($instance['mobile']); ?> </span>
            <?php endif; ?>
            <?php if($instance['fax']): ?>
                <span><?php echo esc_html($instance['fax']); ?></span>
            <?php endif; ?>
            <?php if($instance['email']): ?>
                <span class="wemail"><?php echo esc_html($instance['email']); ?></span>
            <?php endif; ?>
            <?php if($instance['website']): ?>
                <span><?php echo esc_html($instance['website']); ?></span>
            <?php endif; ?>
          </div>
      <?php
          echo $after_widget;
      }

      /**
       * Back-end widgets form
      */
      public function form($instance){
          $instance =   wp_parse_args($instance,array(
              'title'   =>  'Contact info',
              'address' =>  '',
              'phone'   =>  '',
              'mobile'  =>  '',
              'fax'     =>  '',
              'email'   =>  '',
              'website' =>  '',
          ));
          ?>
          <p>
              <label for=<?php echo $this->get_field_id('title'); ?>><?php echo _e('Title:',TEXT_DOMAIN) ; ?></label>
              <input type="text" id="<?php echo $this->get_field_id('title'); ?>" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
          </p>
          <p>
              <label for="<?php echo $this->get_field_id('address'); ?>"><?php echo _e('Address:',TEXT_DOMAIN); ?></label>
              <input type="text" id="<?php echo $this->get_field_id('address') ?>" class="widefat" name="<?php echo $this->get_field_name('address') ?>" value="<?php echo esc_attr($instance['address']); ?>" />
          </p>
          <p>
              <label for="<?php echo $this->get_field_id('phone'); ?>"><?php echo _e( 'Phone:', TEXT_DOMAIN ); ?></label>
              <input type="text" id="<?php echo $this->get_field_id('phone'); ?>" class="widefat" name="<?php echo $this->get_field_name('phone'); ?>" value="<?php echo esc_attr($instance['phone']); ?>" />
          </p>
          <p>
              <label for="<?php echo $this->get_field_id('mobile'); ?>"><?php echo _e( 'Mobile:', TEXT_DOMAIN ); ?></label>
              <input type="text" id="<?php echo $this->get_field_id('mobile'); ?>" class="widefat" name="<?php echo $this->get_field_name('mobile'); ?>" value="<?php echo esc_attr($instance['mobile']); ?>" />
          </p>
          <p>
              <label for="<?php echo $this->get_field_id('fax'); ?>"><?php echo _e('Fax:', TEXT_DOMAIN); ?></label>
              <input type="text" id="<?php echo $this->get_field_id('fax'); ?>" name="<?php echo $this->get_field_name('fax'); ?>" class="widefat" value="<?php echo esc_attr($instance['fax']); ?>" />
          </p>
          <p>
              <label for="<?php echo $this->get_field_id('email') ?>"><?php echo _e('Email:', TEXT_DOMAIN); ?></label>
              <input type="text" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" class="widefat" value="<?php echo esc_attr($instance['email']); ?>" />
          </p>
      <?php
      }

      /**
      * function update widget
      */
      public function update( $new_instance, $old_instance ) {
          $instance             =   $old_instance;
          $instance['title']    =   $new_instance['title'];
          $instance['address']  =   $new_instance['address'];
          $instance['phone']    =   $new_instance['phone'];
          $instance['mobile']   =   $new_instance['mobile'];
          $instance['fax']      =   $new_instance['fax'];
          $instance['email']    =   $new_instance['email'];
          $instance['website']  =   $new_instance['website'];
          return $instance;
      }
  }
  function register_tzcontact_info(){
      register_widget('tz_contact_info');
  }
  add_action('widgets_init','register_tzcontact_info');
?>