<!-- Begin single.php -->
<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Bedrock
 * @since Bedrock 2.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

						<?php the_date(); ?>

						<?php the_content(); ?>

						<?php wp_link_pages(); ?>

            <?php get_template_part( 'post_footer', 'loop' ); ?>

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<!-- End single.php -->
