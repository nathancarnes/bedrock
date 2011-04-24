<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Bedrock
 * @since Bedrock 2.0
 */

get_header(); ?>



				<h1><?php echo $cap->not_found_title; ?></h1>
				<p><?php echo $cap->not_found_body; ?></p>
				<?php get_search_form(); ?>

<?php get_footer(); ?>