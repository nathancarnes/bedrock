<?php
/**
 * @package WordPress
 * @subpackage Bedrock
 */
                    
require_once('admin/cheezcap.php'); 

if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar( array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>',
	) );
}       

if ( ! isset( $content_width ) ) $content_width = 600;

if ( function_exists( 'add_theme_support' ) ) {  
  add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'nav-menus' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor_style' );
  

	add_image_size( 'fullwidth', $content_width, ( $content_width / ( 16/9 ) ), true ); // gives you a full-column-width thumb at 16:9 aspect
	add_image_size( 'smallicon', 32, 32, true ); 
	add_image_size( 'largeicon', 64, 64, true );
	add_image_size( 'tile', 100, 100, true );
	add_image_size( 'lightbox', 800, 600 );
	
	add_editor_style( );
}                   



add_action( 'init', 'bedrock_register_menus' );

function bedrock_register_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' )
		)
	);
}

function bedrock_comments_title() {  
  global $cap;
  $count = get_comments_number();    
  
  switch ( $count ) {
    case 0:
      echo $cap->no_comments;
      break;
    case 1: 
      echo $cap->one_comment;
    default:
      echo str_replace( '[num]', $count, $cap->many_comments );    
  }            
}

?>