<!-- Begin Sidebar -->
<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Bedrock
 * @since Bedrock 2.0
 */
?>
<?php global $cap; ?>

<ul class="widgets">

<?php
  /* When we call the dynamic_sidebar() function, it'll spit out
   * the widgets for that widget area. If it instead returns false,
   * then the sidebar simply doesn't exist, so we'll hard-code in
   * some default sidebar stuff just in case.
   */
  if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

      <li>
        <?php get_search_form(); ?>
      </li>

      <li>
        <h4><?php echo $cap->archives_title; ?></h4>
        <ul>
          <?php wp_get_archives( 'type=monthly' ); ?>
        </ul>
      </li>
    <?php endif; // end primary widget area ?>
</ul>
