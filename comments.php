<!-- Begin Comments -->
<?php
/*
 * @package WordPress
 * @subpackage Bedrock
 * @since Bedrock 2.0
 */

global $cap;
?>


<?php if ( post_password_required() ) : ?>
  <p><?php echo $cap->comments_password_protected; ?></p>
<?php return; endif; ?>

<?php if ( have_comments() AND comments_open() ) : ?>
  <section class="comments">
			<h3 id="comments-title">
			<?php bedrock_comments_title(); ?>
			</h3>

			<ol class="comments">
				<?php wp_list_comments(); ?>
			</ol>

      <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <section class="pagination">
			    <?php previous_comments_link( $cap->comments_previous ); ?>
				  <?php next_comments_link( $cap->comments_next ); ?>
				</section>
      <?php endif; ?>
  </section>
<?php endif; ?>

<?php comment_form(); ?>
