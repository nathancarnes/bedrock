<?php
/**
 * @package WordPress
 * @subpackage Bedrock
 */
                    
require_once('admin/cheezcap.php'); 

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
	));
}

if (function_exists('add_theme_support')) {  
  add_theme_support('automatic-feed-links');
	add_theme_support('nav-menus');
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(50, 50, true);
	add_image_size('single-post-thumbnail', 630, 300, true);
}                   

if ( ! isset( $content_width ) ) $content_width = 600;


add_action( 'init', 'bedrock_register_menus' );

function bedrock_register_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' )
		)
	);
}        

?>