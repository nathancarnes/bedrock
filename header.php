<?php
/**
 * @package WordPress
 * @subpackage Bedrock
 * @since Bedrock 2.0
 */
?>
<?php global $cap; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>
    <?php bloginfo('name'); ?>
    <?php wp_title( '|', true, 'right' ); ?>
  </title>
  <?php if ( $cap->use_reset ) : ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/stylesheets/reset.css">    
  <?php endif; ?>  
  <?php if ( $cap->use_scaffold ) : ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/stylesheets/scaffold.css">    
  <?php endif; ?>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">  
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php
    if ( is_singular() && get_option( 'thread_comments' ) ) {      
		  wp_enqueue_script( 'comment-reply' );                  
		}
	?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
  	<h1>
  		<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
  	</h1>
  	<p><?php bloginfo( 'description' ); ?></p>
    <nav>
  		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
  	</nav>
  </header>
