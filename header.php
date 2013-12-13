<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wcs_2013
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
	<div class="navbar-inner">
		<div class="container">
			<?php
				
				$args = array(
					'theme_location' => 'top-bar',
					'depth'		 => 2,
					'container'	 => false,
					'menu_class'	 => 'nav navbar-nav',
					'walker'	 => new Bootstrap_Walker_Nav_Menu()
				);

				wp_nav_menu($args);
			
			?>
		</div>
	</div>
</nav>

<div id="page" class="hfeed site container">
	<?php do_action( 'before' ); ?>
	
	<header id="masthead" class="jumbotron" role="banner">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	</header><!-- #masthead -->

	<div id="content" class="site-content row">
