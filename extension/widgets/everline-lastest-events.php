<?php

    class tzeverline_lastest_events extends  WP_Widget{


            public function __construct(){

                parent::__construct(
                  'widget_lastest_event', __('Everline: Lastest events', TEXT_DOMAIN),
                  array('description'   =>  __('Widget using for plugin event', TEXT_DOMAIN))
                );

            }
            public function widget( $args, $instance ) {
                extract( $args );
                extract( $instance );
                $title_new = apply_filters('widget_title', $title);
                echo $before_widget;
                if ( $title ){
                    echo $before_title.$title_new.$after_title;
                }
            ?>
                <div class="tzwidgets_events">
                    <ul>
                        <?php
                                $args = array(
                                    'post_type'         =>  'tribe_events',
                                    'posts_per_page'     =>  $limit
                                );
                                $tribe_wg    = new  WP_Query( $args );
                                if ( $tribe_wg -> have_posts() ):
                                    while( $tribe_wg -> have_posts() ):
                                        $tribe_wg -> the_post();
                        ?>
                                    <li>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                        <a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a>
                                        <span><?php echo get_the_date(); ?></span>
                                    </li>
                        <?php
                                    endwhile;
                            endif;
                            wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            <?php
                echo $after_widget;

            }

            public function form( $instance ){
                $instance = wp_parse_args( $instance, array(
                    'title'  =>  'Lestest Event',
                    'limit'   =>  5
                ) );
                extract($instance);
            ?>
                <p>
                    <label for="<?php echo $this ->  get_field_id('title'); ?>">
                        <?php echo _e('Title', TEXT_DOMAIN) ; ?>
                    </label>
                    <input type="text" name="<?php echo $this -> get_field_name('title'); ?>" id="<?php echo $this -> get_field_id('title') ?>" class="widefat" value="<?php echo esc_attr($title); ?>" />
                </p>

                <p>
                    <label for="<?php echo $this ->  get_field_id('limit'); ?>">
                        <?php echo _e('Limit', TEXT_DOMAIN) ; ?>
                    </label>
                    <input type="text" name="<?php echo $this -> get_field_name('limit'); ?>" id="<?php echo $this -> get_field_id('limit') ?>" class="widefat" value="<?php echo esc_attr($limit); ?>" />
                </p>
            <?php
            }

            public function update( $new_instance, $old_instance ){
                $instance = $old_instance;
                $instance['title']  =   $new_instance ['title'];
                $instance['limit']  =   $new_instance ['limit'];
                return $instance;
            }
    }

    add_action('widgets_init', 'register_widget_lastest_event');
function register_widget_lastest_event(){
    register_widget("tzeverline_lastest_events") ;
}
?>