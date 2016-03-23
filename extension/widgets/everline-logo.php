<?php


    class tzeverline_logo_footer extends WP_Widget{

        // function construct

        public function __construct(){

            parent::__construct(
                'Widget_logo', __('Widget Logo', TEXT_DOMAIN),
                array('description' => __('Upload Logo for Footer', TEXT_DOMAIN))
            );


            add_action('admin_enqueue_scripts', array($this, 'register_js'));
        }

        public function register_js(){

            wp_register_script('upload_img', THEME_PATH . '/extension/assets/js/upload_img.js', false, false, $in_footer=true);
            wp_enqueue_script('upload_img');
        }

        // method for front-end
        public function widget( $args, $instance ){
            extract( $args );
            extract( $instance );
            $title_new = apply_filters( 'widget_title', $title);
            echo $before_widget;

            if ( $title ) {
                echo $before_title.$title_new,$after_title;
            }
        ?>
            <div class="tz_logo_widget">
                <a href="<?php echo esc_url($link); ?>">
                    <img src="<?php echo esc_url($image); ?>" alt="<?php bloginfo('title'); ?>">
                </a>
                <p>
                    <?php echo esc_html($description); ?>
                </p>
            </div>
        <?php
            echo $after_widget;
        }

        // method widget form
        public function form( $instance ){

            $instance = wp_parse_args( $instance, array(
                'title'  =>  'Upload logo',
                'link'   =>  '',
                'image'  =>  '',
                'description'  =>  ''
            ) );
            extract($instance);
        ?>
            <p>
                <label for="<?php echo $this -> get_field_id('title'); ?>"><?php echo _e('Title:', TEXT_DOMAIN); ?></label>
                <input type="text" id="<?php echo $this -> get_field_id('title'); ?>" name="<?php echo $this -> get_field_name('title') ?>" class="widefat" value="<?php echo esc_attr($title); ?>">
            </p>
            <p>
                <label for="<?php echo $this -> get_field_id('link'); ?>"><?php echo _e('Link:', TEXT_DOMAIN); ?></label>
                <input type="text" id="<?php echo $this -> get_field_id('link'); ?>" name="<?php echo $this -> get_field_name('link') ?>" class="widefat" value="<?php echo esc_attr($link); ?>">
            </p>
            <p>
                <label for="<?php echo $this -> get_field_id('image'); ?>"><?php echo _e('Image', THEME_NAME) ; ?></label>
                <input class="widefat" type="text" name="<?php echo $this -> get_field_name('image'); ?>" id="<?php echo $this -> get_field_id('image') ; ?>" value="<?php echo esc_attr($image); ?>">
                <a href="#" class="tz_upload_button button" rel="image"><?php echo _e('Upload', TEXT_DOMAIN) ?></a>
            </p>
            <p>
                <label for="<?php echo $this -> get_field_id('description'); ?>"><?php echo _e('Description', THEME_NAME) ; ?></label>
                <textarea name="<?php echo $this -> get_field_name('description'); ?>" id="<?php echo $this -> get_field_id('description') ; ?>" cols="10" rows="5" class="widefat"><?php echo esc_attr($description); ?></textarea>
            </p>


        <?php
        }

        // method update
        public function update( $new_instance, $old_instance ){
            $instance                 =   $old_instance;
            $instance['title']        =   $new_instance['title'];
            $instance['link']         =   $new_instance['link'];
            $instance['image']        =   $new_instance['image'];
            $instance['description']  =   $new_instance['description'];
            return $instance;
        }
    }

    function register_tzeverline_logo_footer(){
        register_widget('tzeverline_logo_footer');
    }
    add_action('widgets_init','register_tzeverline_logo_footer');