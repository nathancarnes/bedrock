<?php
/**
 * @package WordPress
 * @subpackage Bedrock
 * @since Bedrock 2.0
 */
?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		<?php next_posts_link( $cap->older_posts_link ); ?>
		<?php previous_posts_link( $cap->newer_posts_link ); ?>
<?php endif; ?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
		<h1><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
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
    <footer>
      <ul>
			  <?php if ( count( get_the_category() ) ) : ?>
			  <li class="categories">
			     <?php echo $cap->categories_prefix; ?> <?php echo get_the_category_list( ', ' ); ?>
			  </li>   
				<?php endif; ?>
				<?php if ( get_the_tag_list() ): ?>     
			    <li class="tags"><?php echo $cap->tags_prefix . get_the_tag_list( '', ', ' ); ?></li>
				<?php endif; ?>
			  <li class="comments">
			    <?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?>
			  </li>
			</ul>
    </footer>
  </article>
<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  	<?php next_posts_link( $cap->older_posts_link ); ?>
  	<?php previous_posts_link( $cap->newer_posts_link ); ?>
<?php endif; ?>