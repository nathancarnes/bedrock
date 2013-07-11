<!-- Begin tag.php -->
<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Bedrock
 * @since Bedrock 2.0
 */

get_header(); ?>

<h1><?php echo str_replace( '[tag]', single_tag_title( '', false ), $cap->tag_archive_title ); ?></h1>

<?php get_template_part( 'loop', 'tag' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<!-- End tag.php -->
