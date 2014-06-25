<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package web2feel
 * @since web2feel 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'web2feel' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site ">
	
	<header id="masthead" class="site-header container_12 cf" role="banner">

		<div class="top cf grid_12">
		
		<div class="logo">
			<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		
		<div class="hright ">
			<div class="todate"><?php print(Date("l F d, Y")); ?> </div>
			
			<div class="social">
				<ul>
					<li> <a href="https://twitter.com/<?php of_get_option('w2f_twitter','twitter') ?>"><i class="icon-twitter"></i></a> </li>
					<li> <a href="<?php of_get_option('w2f_facebook','facebook') ?>"><i class="icon-facebook"> </i></a></li>
					<li> <a href="<?php of_get_option('w2f_gplus','google') ?>"><i class="icon-google-plus"> </i></a> </li>
					<li> <a href="<?php of_get_option('w2f_linkedin','linkedin') ?>"><i class="icon-linkedin"> </i></a> </li>
					<li> <a href="<?php bloginfo('rss2_url'); ?>"><i class="icon-rss"> </i></a> </li>
				</ul>
			</div>

		</div>
		</div>
		
		<nav role="navigation" class="site-navigation main-navigation grid_12 cf">
			<?php wp_nav_menu( array( 'container_id' => 'submenu','container_class' => '', 'theme_location' => 'primary','menu_id'=>'web2feel' ,'menu_class'=>'sfmenu' ) ); ?>
			<div class="searchform"> <?php get_search_form();?> </div>
			
		</nav><!-- .site-navigation .main-navigation -->
		

	</header><!-- #masthead .site-header -->

	<div id="main" class="site-main container_12 clearfix">