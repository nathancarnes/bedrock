<!-- Begin loop.php -->
<?php
/**
 * @package WordPress
 * @subpackage Bedrock
 * @since Bedrock 2.0
 */
?>
<?php global $cap; ?>

<?php get_template_part( 'pagination', 'loop' ); ?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
		<h1><?php $cap->empty_archive_title; ?></h1>
		<p><?php $cap->empty_archive_body; ?></p>
		<?php get_search_form(); ?>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	  <header>
	    <h2><a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	    <div class="date"><?php the_date(); ?></div>
	  </header>
    <section class="excerpt">
    	<?php if ( is_archive() || is_search() ) : ?>
    			<?php the_excerpt(); ?>
    	<?php else : ?>
    			<?php the_content( $cap->continue_reading_link ); ?>
    	<?php endif; ?>
    </section>
    <?php get_template_part( 'post_footer', 'loop' ); ?>
  </article>
<?php endwhile; ?>

<?php get_template_part( 'pagination', 'loop' ); ?>
<!-- End loop.php -->
