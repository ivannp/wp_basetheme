<?php
/**
 * WP_Base theme functions and defitions
 *
 * @package WP_Base Theme
 * @since WP_Base Theme 0.1
 * Text Domain: od14
 */
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_theme_support( 'post-thumbnails' );
>>>>>>> dev

function theme_widgets_init() {
    register_sidebar( array(
        'name'          => 'Top header links',
        'id'            => 'header-links',
        'description'   => 'Will appear on top of header',
        'before_widget' => '<div class="header-top links col12">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => 'Homepage Conversion Pods',
        'id'            => 'hp-pods',
        'description'   => 'Will appear bellow banner on Homepage',
        'before_widget' => '<div id="%1$s" class="hp-pod %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => 'Homepage CTA',
        'id'            => 'hp-cta',
        'description'   => 'Will appear bellow home page pods on Homepage',
        'before_widget' => '<div id="%1$s" class="hp-cta %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => 'Homepage Video ',
        'id'            => 'hp-video',
        'description'   => 'Will appear bellow home page cta on Homepage',
        'before_widget' => '<div id="%1$s" class="col12 hp-video %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => 'Homepage Threat Map',
        'id'            => 'hp-map',
        'description'   => 'Will appear bellow home page cta on Homepage',
        'before_widget' => '<div id="%1$s" class="col12 hp-map %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
	register_sidebar( array(
		'name'          => 'Page Sidebar',
		'id'            => 'sidebar-page',
		'description'   => 'Page sidebar',
		'before_widget' => '<div id="%1$s" class="clearfix widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
  register_sidebar( array(
      'name'          => 'Page Sidebar (About)',
      'id'            => 'sidebar-page-about',
      'description'   => 'Page sidebar',
      'before_widget' => '<div id="%1$s" class="clearfix widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '',
      'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => 'Post Sidebar',
        'id'            => 'sidebar-post',
        'description'   => 'Post sidebar',
        'before_widget' => '<div id="%1$s" class="clearfix widget widget-post %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="title">',
        'after_title'   => '</span>',
    ) );
	/*register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'od14' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Additional sidebar that appears on the right.', 'od14' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );*/
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'od14' ),
		'id'            => 'footer-navs',
		'description'   => __( 'Appears in the footer section of the site.', 'od14' ),
		'before_widget' => '<div id="%1$s" class="footer-nav %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="nav-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

function theme_scripts() {
	wp_enqueue_style( 'theme_style', get_stylesheet_uri(), array() );
	wp_enqueue_style( 'theme_wsi', get_template_directory_uri().'/wsi.css' , array() );
    wp_enqueue_script('sticky', get_template_directory_uri().'/js/sticky.js',array('jquery'),'2014',true);
    wp_enqueue_script('theme_script', get_template_directory_uri().'/js/herjavec.min.js',array('jquery','sticky'),'2014',true);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function register_menus(){
    register_nav_menu('header-menu', 'Header Menu');
    register_nav_menu('main-menu', 'Main navigation menu');
}

add_action( 'after_setup_theme', 'register_menus');

if (!function_exists(custom_the_excerpt)):

function custom_the_excerpt($post, $length, $end_char = '&#8230;',$tags = null) {
	if(!empty($post->post_excerpt)){
		$excerpt = preg_replace("/\n/", "</p>\n\n<p>", $post->post_excerpt);
		echo "<p>" . $excerpt . "</p>";
	} else {
		$content = strip_tags($post->post_content);
		preg_match('/^\s*+(?:\S++\s*+){1,' .$length . '}/', $content, $matches);
		$matches[0] = $matches[0].$end_char;
		echo ($tags?wpautop($matches[0]):"<p>$matches[0]</p>");
	}
}

endif;

function get_parent_menu_item($post){
    $menus = get_nav_menu_locations();
    $menu_id = $menus['main-menu'];
    $args = array(

        'order'                  => 'ASC',
        'orderby'                => 'menu_order',
        'post_type'              => 'nav_menu_item',
        'post_status'            => 'publish',
        'output'                 => ARRAY_A,
        'output_key'             => 'menu_order',
        'nopaging'               => true,
        'update_post_term_cache' => false );

    $menus = wp_get_nav_menu_items($menu_id, $args);

    foreach($menus as $menu) {
        $id = $menu->object_id;

        if ($id == $post->ID && $menu->menu_item_parent == 0) {
            return $menu->title;
        } elseif ($id == $post->ID && $menu->menu_item_parent != 0) {
            $menu_id = $menu->menu_item_parent;

            foreach ($menus as $menu2) {
                if ($menu_id == $menu2->ID && $menu2->menu_item_parent == 0) {
                    return $menu2->title;
                }
            }
        }
    }
}
