<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package light_fire
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<!-- Mobile Query 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" id="favicon" href="<?php echo get_site_url(); ?>/wp-content/uploads/2014/12/favicon.png" />
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel='stylesheet' id='light_fire_layout'  href='<?php echo get_site_url(); ?>/wp-content/themes/light_fire/css/layout.css' type='text/css' media='all' />
	<link rel='stylesheet' id='light_fire_layout'  href='<?php echo get_site_url(); ?>/wp-content/themes/light_fire/css/child.css' type='text/css' media='all' />
	<link rel='stylesheet'  href='<?php echo get_site_url(); ?>/wp-content/themes/light_fire/css/child-fonts.css' type='text/css' media='all' />
	<?php require get_template_directory() . '/lib/lightbox/main.php'; ?>
	
	<link rel='stylesheet' id='mobile'  href='<?php echo get_site_url(); ?>/wp-content/themes/light_fire/css/mobile.css' type='text/css' media='all' />
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'light_fire' ); ?></a>

	<header id="masthead" class="site-header" role="banner">	
			
		<div class="site-branding">
			<div id="logo">
				<a href="<?php echo get_site_url(); ?>" align="center">
					<img style="display: block; margin: 0 auto; width: 38%;" src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/01/logoemblem.png" alt="<?php bloginfo( 'description' ); ?>" />
					<img style="display: block;" src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/01/finishingtouch.png" alt="<?php bloginfo( 'description' ); ?>" />
				</a>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">					
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>			
		</nav><!-- #site-navigation -->
	
		<nav id="mobile-nav" class="mobile-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'light_fire' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>	
		</nav>
	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
