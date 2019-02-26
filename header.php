<?php

	/**
	 * [Core template name]	Header (Partial)
	 *
	 * This is the core header file that is included in all of the WordPress 
	 * templates used throughout the theme. This file contains the HTML that
	 * makes up the top of every website page.php.
	 *
	 * You should note the `wp_header();` hook that plugins and WordPress core
	 * may use to add additional HTML and stylesheets and/or JavaScript 
	 * files to the website.
	 *
	 * Please note: You should enqueue stylesheets and JavaScript documents
	 * - DO NOT simply insert them at the bottom of this document.
	 *
	 * @category 	Core WordPress template files
	 * @package  	mangopear-core
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2018 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */
	

	/**
	 * Please note: The <!DOCTYPE HTML> element CAN NOT have any characters before it
	 * 				otherwise there will be styling issues with the rendered website.
	 */
	
?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
		

		<!-- Make this site responsive, dude -->
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/favicon.ico">
		<link rel="icon"          type="image/png"    href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/favicon-32x32.png"             sizes="32x32">
		<link rel="icon"          type="image/png"    href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/favicon-16x16.png"             sizes="16x16">
		<link rel="apple-touch-icon"                  href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/apple-touch-icon.png"          sizes="180x180">
		<link rel="mask-icon"                         href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/safari-pinned-tab.svg?v=1.0.0" color="<?php echo BROWSER_TAB_COLOUR; ?>">
		<link rel="manifest"                          href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/site.webmanifest">
		<meta name="theme-color"                      content="<?php echo BROWSER_TAB_COLOUR; ?>">
		<meta name="msapplication-TileColor"          content="<?php echo BROWSER_TAB_COLOUR; ?>">
		<meta name="msapplication-TileImage"          content="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/apple-touch-icon-144x144.png">
		<meta name="msapplication-config"             content="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/browserconfig.xml">
		<meta name="apple-mobile-web-app-title"       content="Mangopear creative">
		<meta name="application-name"                 content="Mangopear creative">


		<?php wp_head(); ?>
	</head>





	<body <?php body_class(); ?>>
		<header class="c-head-navigation">
			<div class="o-container">
				<div class="o-grid  o-grid--middle">
					<div class="o-grid__item  u-one-half">
						<?php get_template_part('template-partials/logo'); ?>
					</div><!-- /.o-grid__item -->


					<div class="o-grid__item  u-one-half">
						<nav class="c-head-navigation__menu">
							<button class="o-button  o-button--secondary  c-head-navigation__menu__launcher  js-head-navigation__menu__launcher" type="button">
								<svg class="o-button__icon  o-button__icon--left" height="22" width="22" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#navigation"/></svg>
								<span class="o-button__text">Menu</span>
							</button>


							<div class="c-head-navigation__menu__wrap  js-head-navigation__menu__wrap  is-hidden">
								<?php get_template_part('template-partials/main-navigation'); ?>
							</div><!-- /.c-head-navigation__menu__wrap -->
						</nav>
					</div><!-- /.o-grid__item -->
				</div><!-- /.o-grid -->
			</div><!-- /.o-container -->
		</header>





		<?php get_template_part('template-partials/additional-header-rows'); ?>