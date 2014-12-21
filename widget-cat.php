<?php

class Category_Menu extens WP_Widget {
    
    public function __construct() {
        parent::__construct() {
            parent::_construct('Category_Menu',
                               'Category Menu',
                               array('description' => 'Allows you to select categories from a drop down for menu');
    }
    
    public function widget ($args, $instance) {
        
    }
    
    public function form($instance) {
        
    }
    
    public function update($new_instance, $old_instance) {
        
        
    }
    
    add_action('widget_init', function() {
        register_widget('Custom_Cat'); 
    });