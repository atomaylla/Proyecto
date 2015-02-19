<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package proyecto
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php // _e( 'Skip to content', 'proyecto' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php// bloginfo( 'description' ); ?></h2>
		</div> .site-branding 

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php //_e( 'Primary Menu', 'proyecto' ); ?></button>
			<?php //wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav> #site-navigation 
	</header> #masthead 

	<div id="content" class="site-content">-->
<div>
    <div class="container" style="border:1px solid  #000">
        <div class="navbar  navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header" style="border:1px solid  #000">Logo Proyecto</div>
                <div class="navbar-collapse collapse" style="border:1px solid #003cb3">
                  <nav id="site-navigation" class="main-navigation" role="navigation">
<!--			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php //_e( 'Primary Menu', 'proyecto' ); ?></button>-->
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav> 
                </div>
            </div>
        </div>
    </div>
</div>