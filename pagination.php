<div class="pagination">
  <?php global $cap; ?>
  <?php if ( $wp_query->max_num_pages > 1 ) : ?>
      <?php next_posts_link( $cap->older_posts_link ); ?>
      <?php previous_posts_link( $cap->newer_posts_link ); ?>
  <?php endif; ?>
</div>