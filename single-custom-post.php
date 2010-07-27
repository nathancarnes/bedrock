<?php
/**
 * @package WordPress
 * @subpackage Bedrock
 */
/*
Template Name: Sample Single for Custom Post
*/
?>
<?php get_header(); ?>
<div id="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php if(has_post_thumbnail()): ?>
				<div class="featured_image"><?php the_post_thumbnail('single-post-thumbnail'); ?></div>
			<?php endif; ?>			
			<h2><?php the_title(); ?></h2>
			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

			<div class="date"><?php the_time('l, F jS, Y') ?> at <?php the_time() ?></div>
		</div>
	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>