<?php

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
}

function register_menus()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'),
        'main-menu' => __('Main Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

function register_widgets() {
    // If Dynamic Sidebar Exists
    if (function_exists('register_sidebar'))
    {
        //Header CTA Sidebar
        register_sidebar(array(
            'name' => __('Header CTA', 'html5blank'),
            'description' => __('Header CTA', 'html5blank'),
            'id' => 'hdr-cta',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        ));

        register_sidebar(array(
            'name' => __('Banner CTA', 'html5blank'),
            'description' => __('Banner CTA', 'html5blank'),
            'id' => 'bnr-cta',
            'before_widget' => '<div class="banner-box">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
        ));

        register_sidebar(array(
            'name' => __('Homepage Pods', 'html5blank'),
            'description' => __('Homepage Pods', 'html5blank'),
            'id' => 'hp-pods',
            'before_widget' => '<div id="%1$s"  class="hp-pod">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
        ));

        register_sidebar(array(
            'name' => __('Homepage Products Pods', 'html5blank'),
            'description' => __('Homepage Products Pods', 'html5blank'),
            'id' => 'hp-products',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        ));


        register_sidebar(array(
            'name' => __('Main CTA', 'html5blank'),
            'description' => __('Main CTA', 'html5blank'),
            'id' => 'main-cta',
            'before_widget' => '<div class="f-wrapper cta-wrpr main-cta-wrpr"><div class="wrapper"><div class="cta">',
            'after_widget' => '</div></div></div>',
            'before_title' => '',
            'after_title' => ''
        ));

        register_sidebar(array(
            'name' => __('Inner CTA', 'html5blank'),
            'description' => __('Inner CTA', 'html5blank'),
            'id' => 'inner-cta',
            'before_widget' => '<div class="f-wrapper cta-wrpr inner-cta-wrpr"><div class="wrapper">',
            'after_widget' => '</div></div>',
            'before_title' => '',
            'after_title' => ''
        ));


        //Sidebar

        register_sidebar(array(
            'name' => __('Sidebar Form (Pages)', 'html5blank'),
            'description' => __('Sidebar Form', 'html5blank'),
            'id' => 'aside-frm',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        ));


        register_sidebar(array(
            'name' => __('Sidebar Pods (Pages)', 'html5blank'),
            'description' => __('Sidebar Pods', 'html5blank'),
            'id' => 'aside-pods',
            'before_widget' => '<div class="sd-pod">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
        ));


        register_sidebar(array(
            'name' => __('Sidebar Pod (Posts)', 'html5blank'),
            'description' => __('Sidebar pod', 'html5blank'),
            'id' => 'aside-posts-pod',
            'before_widget' => '<div class="sd-pod">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
        ));


        register_sidebar(array(
            'name' => __('Sidebar (Posts)', 'html5blank'),
            'description' => __('sidebar ', 'html5blank'),
            'id' => 'aside-posts',
            'before_widget' => '<div class="sdbar-widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>'
        ));

        //Footer Sidebars
        register_sidebar(array(
            'name' => __('Footer Contact', 'html5blank'),
            'description' => __('Footer Contact', 'html5blank'),
            'id' => 'ftr-contact',
            'before_widget' => '<div class="ftr_pod ftr_pod-1">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        ));

        register_sidebar(array(
            'name' => __('Footer Nav 1', 'html5blank'),
            'description' => __('Footer Nav 1', 'html5blank'),
            'id' => 'ftr-nav-1',
            'before_widget' => '<div class="ftr_pod ftr_pod-2">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        ));

        register_sidebar(array(
            'name' => __('Footer Nav 2', 'html5blank'),
            'description' => __('Footer Nav 2', 'html5blank'),
            'id' => 'ftr-nav-2',
            'before_widget' => '<div class="ftr_pod ftr_pod-3">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        ));

        register_sidebar(array(
            'name' => __('Footer Form', 'html5blank'),
            'description' => __('Footer Form', 'html5blank'),
            'id' => 'ftr-form',
            'before_widget' => '<div class="ftr_pod ftr_pod-4">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        ));

    }
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

function custom_the_excerpt($post,$length, $end_char = '&#8230;',$tags = null){
    $content = strip_tags($post->post_content);
    preg_match('/^\s*+(?:\S++\s*+){1,' .$length . '}/', $content, $matches);
    $matches[0] = $matches[0].$end_char;
    echo ($tags?wpautop($matches[0]):"<p>$matches[0]</p>");
}

function register_scripts() {
    wp_enqueue_style( 'style-m', get_template_directory_uri().'/style.css', '20140307', 'all');
    wp_enqueue_style( 'style-w', get_template_directory_uri().'/wsi.css', '20140507', 'all');
    wp_enqueue_script( 'js-m', get_template_directory_uri() . '/js/bravo.min.js', array('jquery'), '20140307', true );
}

add_action('init', 'register_menus');
add_action( 'widgets_init', 'register_widgets' );
add_action( 'wp_enqueue_scripts', 'register_scripts' );
