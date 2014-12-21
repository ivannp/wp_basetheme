<?php

class Category_Menu extens WP_Widget {
    
    function __construct() {
        parent::__construct(
            'category_menu',
            'Category Menu',
            array('description' => '')
        );
    
    }
    
    public function widget ($args, $instance) {
        
    }
    
    public function form($instance) {
        
    }
    
    public function update($new_instance, $old_instance) {
        
        
    }
}
    
add_action('widget_init', function() {
    register_widget('Category_Menu'); 
});