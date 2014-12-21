<?php

class Category_Menu extends WP_Widget {
    
    function __construct() {
        parent::__construct(
            'category_menu',
            'Category Menu',
            array('description' => '')
        );
    
    }
    
    public function widget ($args, $instance) {
        echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
		echo $args['after_widget'];
    }
    
    public function form($instance) {
        $title = !empty($instance['title'])? $instance['title']:'New Title';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
        
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']))? strip_tags($new_instance['title']): '';
        
        return $instance;
    }
}

function register_cat_widget() {
    register_widget('Category_Menu');
}
    
add_action('widgets_init', 'register_cat_widget');