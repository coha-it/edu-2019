<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edutainment_2016
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="https://coha.happiness-edutainment.de/wp-content/themes/edu/img/favicon.ico" type="image/x-icon" /> 
<!-- <link href='//fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,300,300italic,700' rel='stylesheet' type='text/css'> -->
<!-- <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300' rel='stylesheet' type='text/css'> -->

<!-- Lato and Tisa Font -->
<link rel="stylesheet" href="https://use.typekit.net/cvy3vwb.css">

<!-- Entypo Font -->
<!-- <link rel="stylesheet" media="screen" href="<?php echo get_stylesheet_directory_uri() . '/lib/css/entypo.css'; ?>" type="text/css"/> -->

<!-- Material Icons -->
<link rel="stylesheet" media="screen" href="<?php echo get_stylesheet_directory_uri() . '/lib/css/material-icons.css'; ?>" type="text/css"/>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="header-area full">
        <div class="main-page">
		
			<div id="page" class="site">
				<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'edu' ); ?></a>

					<header id="masthead" class="site-header" role="banner">
			
						<div class="sub-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'subnary', 'menu_id' => 'subnary-menu' ) ); ?>
					</div>
					
					<div class="site-branding">
						<a href="https://expert.happiness-edutainment.de/"><img src="<?php echo get_stylesheet_directory_uri() . '/img/corporate-happiness-logo.svg'; ?>" title="Happiness Edutainment Plattform" alt="Happiness Edutainment Plattform"/></a>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Hauptmenü', 'edu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu'  ) ); ?>
			
					</nav><!-- #site-navigation -->
			
					

			</header><!-- #masthead -->
			
        </div>
    </div>			
			
		<div class="main-content-area full">
        <div class="main-page">
			<div id="content" class="site-content inner">
