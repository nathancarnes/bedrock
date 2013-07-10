<!-- Begin Footer -->
<?php
/**
 * @package WordPress
 * @subpackage Bedrock
 * @since Bedrock 2.0
 */
?>
  </section><!-- end #main -->

  <?php get_sidebar( 'footer' ); ?>

			<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

  <?php wp_footer(); ?>
</body>
</html>
