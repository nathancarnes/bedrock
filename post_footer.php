<!-- Begin Post Footer -->
<?php global $cap; ?>
<footer>
  <ul>
	  <?php if ( count( get_the_category() ) ) : ?>
	  <li class="categories">
	     <?php echo $cap->categories_prefix . get_the_category_list( ', ' ); ?>
	  </li>
		<?php endif; ?>
		<?php if ( get_the_tag_list( '' ) ): ?>
	    <li class="tags"><?php echo $cap->tags_prefix . get_the_tag_list( '', ', ' ); ?></li>
		<?php endif; ?>
		<?php if( comments_open() ):?>
	  <li class="comments">
	    <?php comments_popup_link( $cap->no_comments, $cap->one_comment, str_replace('[num]', '%', $cap->many_comments ) ); ?>
	  </li>
	  <?php endif; ?>
	</ul>
</footer>
