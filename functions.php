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

/* Helpful Functions */
function get_custom_field($field) {
	global $post;

	$blocks = get_post_meta($post->ID, $field);
	
	if($blocks):
		foreach(($blocks) as $block):
			echo $block;
		endforeach;
	endif;
}

function has_attachments($post_id){
	$attachments = get_children( array('post_parent' => $post_id, 'post_status' => 'inherit', 'post_type' => 'attachment'));
	
	if(sizeof($attachments) > 0):
		return true;
	else:
		return false;
	endif;
}

function get_taxonomy_by_post_type($taxonomy = "category", $post_type = "post", $limit = 25, $order_by = 'count', $order = 'DESC'){
	global $wpdb;
	
	$sql = "SELECT COUNT($wpdb->term_taxonomy.term_id) as count, $wpdb->terms.term_id, $wpdb->terms.name, $wpdb->terms.slug FROM $wpdb->term_taxonomy 
			JOIN $wpdb->term_relationships ON $wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id
			JOIN $wpdb->posts ON $wpdb->term_relationships.object_id = $wpdb->posts.ID
			JOIN $wpdb->terms ON $wpdb->terms.term_id = $wpdb->term_taxonomy.term_id
				WHERE $wpdb->term_taxonomy.taxonomy = '$taxonomy'
					AND $wpdb->posts.post_type = '$post_type'
					AND $wpdb->posts.post_status = 'publish'
			GROUP BY $wpdb->term_taxonomy.term_id
			ORDER BY $order_by $order
			LIMIT $limit;";
	
	return $wpdb->get_results($sql);
}

function simple_post_search($query, $post_type = "post", $limit = 25, $order_by = 'post_date', $order = 'DESC'){
	global $wpdb;
	
	$sql = "SELECT * FROM $wpdb->posts WHERE
		(post_title LIKE '%$query%'
		OR post_content LIKE '%$query%'
		OR post_excerpt LIKE '%$query%')
	
		AND post_status = 'publish'
		AND post_type = '$post_type'
	
		ORDER BY $order_by $order
		LIMIT $limit;";
	return $wpdb->get_results($sql);
}	

function render_partial($collection, $partial) {
	foreach($collection as $item):
		$partial($item);
	endforeach;
}

/* Convenience Aliases */
function get_page_by_slug($slug) {
  // if passing in a sub-page, use full path with parent: 'parent-page/sub-page'
  return get_page_by_path($slug);
}

function theme_url(){
  // annoying that WP uses "theme" and "template" to mean the same thing
  bloginfo('template_url');
}

function child_theme_url(){
  // template_url gets the parent theme URL
  echo get_stylesheet_directory_uri();
}
?>