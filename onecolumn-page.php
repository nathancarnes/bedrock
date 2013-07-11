<!-- Begin onecolumn-page.php -->
<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * @package WordPress
 * @subpackage Bedrock
 * @since Bedrock 2.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
<!-- End onecolumn-page.php -->
