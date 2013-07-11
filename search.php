<!-- Begin search.php -->
<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Bedrock
 * @since Bedrock 2.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
  <h1><?php echo str_replace( '[term]', get_search_query(), $cap->search_results_title ); ?></h1>
	<?php get_template_part( 'loop', 'search' ); ?>
<?php else : ?>
  <h1><?php echo str_replace( '[term]', get_search_query(), $cap->no_search_results_title ); ?></h1>
  <p><?php echo $cap->no_search_results_body; ?></p>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<!-- End search.php -->
