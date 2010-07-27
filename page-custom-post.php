<?php
/**
 * @package WordPress
 * @subpackage Bedrock
 */
/*
Template Name: Sample Custom Post Type Archive
*/
?>
<?php get_header(); ?>
<?php $custom_post_type = 'widgets'; ?>
<div id="main">
	<ul class="custom_post <?php echo $custom_post_type; ?>">
	<?php 
	$loop = new WP_Query(array('post_type' => $custom_post_type, 'posts_per_page' => -1)); 
	while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <li>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php if(has_post_thumbnail()): ?>
				<div class="post_thumbnail"><?php the_post_thumbnail(); ?></div>
			<?php endif; ?>
			<div class="excerpt"><?php the_excerpt(); ?></div>
		</li>
	<?php endwhile; ?>  
	</ul>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>