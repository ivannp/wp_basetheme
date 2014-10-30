<?php
/**
 * WP_Base theme functions and defitions
 *
 * @package WP_Base Theme
 * @since WP_Base Theme 0.1
 * Text Domain: od14
 */
 
add_theme_support( 'post-thumbnails' ); 

function theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'od14' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'od14' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'od14' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Additional sidebar that appears on the right.', 'od14' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'od14' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site.', 'od14' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

function theme_scripts() {
	wp_enqueue_style( 'theme_style', get_stylesheet_uri(), array() );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

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
