<?php
/**
 * @package WordPress
 * @subpackage Bedrock
 * @since Bedrock 2.0
 */
             
global $cap; 
get_header(); ?>

  <h1><?php echo $cap->browsing_category . ' ' . single_cat_title( '', false ) ;?></h1>

  <?php get_template_part( 'loop', 'category' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>