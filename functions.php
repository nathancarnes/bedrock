<?php
/**
 * @package WordPress
 * @subpackage Bedrock
 */

automatic_feed_links();

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

if (function_exists('add_theme_support')) {
	add_theme_support('nav-menus');
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(50, 50, true);
	add_image_size('single-post-thumbnail', 630, 300, true);
}

add_action( 'init', 'register_menus' );

function register_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' )
		)
	);
}
?>