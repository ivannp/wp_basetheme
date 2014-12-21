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
        
    }
    
    public function form($instance) {
        
    }
    
    public function update($new_instance, $old_instance) {
        
        
    }
}

function register_cat_widget() {
    register_widget('Category_Menu');
}
    
add_action('widgets_init', 'register_cat_widget');