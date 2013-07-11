<!-- Begin archive.php -->
<?php
/**
 * @package WordPress
 * @subpackage Bedrock
 * @since Bedrock 2.0
 */

global $cap;
get_header(); ?>

<?php
	if ( have_posts() )
		the_post();
?>

  <h1>
    <?php
    if ( is_day() ) :
      echo str_replace( '[date]', get_the_date( ), $cap->daily_archive );
    elseif ( is_month() ) :
      echo str_replace( '[date]', get_the_date('F Y'), $cap->monthly_archive );
    elseif ( is_year() ) :
      echo str_replace( '[year]', get_the_date('Y'), $cap->yearly_archive );
    else :
      echo $cap->generic_archive;
    endif;
    ?>
  </h1>

  <?php
  	rewind_posts();
  	get_template_part( 'loop', 'archive' );
  ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<!-- End archive.php -->
