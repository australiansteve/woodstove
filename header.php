<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Woodstove
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

	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner">

			<div class="row"><!-- .row start -->

				<div class="small-12 columns"><!-- .columns start -->

					<div class="site-branding">

						<div class="row"><!-- .row start -->

							<div class="small-12 columns"><!-- .columns start -->

								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="site-logo" src="http://australiansteve.com/blog/wp-content/uploads/2015/04/australian-steve-logo-white.png" /></a>

							</div><!-- .columns end -->

						</div><!-- .row end -->

						<div class="row"><!-- .row start -->

							<div class="small-12 columns"><!-- .columns start -->

								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

							</div><!-- .columns end -->

							<div class="small-12 columns"><!-- .columns start -->

								<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

							</div><!-- .columns end -->

						</div><!-- .row end -->

					</div><!-- .site-branding -->

				</div><!-- .columns end -->

			</div><!-- .row end -->

		</header><!-- #masthead -->

		<div class="main-navigation">

			<div class="row"><!-- .row start -->

				<div class="small-12 columns"><!-- .columns start -->

						<div class="title-bar show-for-small-only" data-responsive-toggle="primary-menu" data-hide-for="medium">
							<div data-toggle="">
								<button class="menu-icon" type="button" ></button>
								<div class="title-bar-title">Menu</div>
							</div>
						</div>

						<div id="primary-menu" class="top-bar primary-navigation" data-topbar>
							
							<div class="top-bar-right">

								<!-- Right Nav Section -->
								<ul class="vertical medium-horizontal menu">

									<?php
									 	$args = array (
										 	'theme_location' 	=> 'primary',
										 	'container' 		=> '',
										 	'menu_class' 		=> '',
										 	'menu_id' 			=> '',
										 	'items_wrap' 		=> '%3$s'
									 	);
										wp_nav_menu( $args );
									?>
								</ul>

							</div>

						</div>

				</div><!-- .columns -->

			</div><!-- .row -->

		</div><!-- .main-navigation -->

		<div id="content" class="site-content">
