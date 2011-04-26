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

						<?php twentyten_posted_on(); ?>

						<?php the_content(); ?>

						<?php twentyten_posted_in(); ?>

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>