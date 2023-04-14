<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package nucafe
 */

?>
<!doctype html>
<!-- the attribute 'data-theme' changes styles based on those defined in tailwind.config.js/daisyui -->
<html <?php language_attributes(); ?> data-theme="mytheme">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/kjx4wwe.css">

	<!-- Google Fonts. -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body data-barba="wrapper">

	<?php 
	wp_body_open(); 
	#get_template_part('template-parts/layout/splash-screen'); 
	?>

	<div id="page" class="overflow-x-hidden">

		<header id="masthead" class="fixed top-0 w-full z-50 transition duration-300 ease-in-out bg-base-100">
			<nav id="site-navigation" class="relative flex flex-row-reverse md:flex-row items-center justify-between py-5 px-8 mx-auto">

				<a class="inline-flex items-center justify-center w-[5rem] h-[2rem] ml-12" href="<?php echo esc_url(home_url('/')); ?>">
					<?php
					/* LOGO */
					get_template_part('svg/inline', 'logo.svg');
					?>
				</a>

				<a href="#" class="hamburger">
					<span class="hamburger-span"></span>
					<span class="hamburger-span"></span>
					<span class="hamburger-span"></span>
				</a>

				<!-- <a class="uppercase hover-underline-animation" href="/locations/#nearest-location">Find Our Nearest Location</a> -->
				<!-- <p>nuiceanddrinks@gmail.com</p>
				<p>Find Our Location</p> -->
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => 'ul',
						'menu_class' => "absolute inset-0 justify-center items-start md:relative flex flex-col md:flex-row md:items-center h-screen md:h-auto bg-nu-black md:bg-inherit z-10 md:max-w-[25rem] w-full md:justify-between"
					)
				);
				?>

			</nav>
			<?php #get_template_part('template-parts/layout/announcement-bar'); 
			?>
		</header>