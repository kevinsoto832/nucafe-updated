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

	<?php wp_body_open(); ?>

	<div id="page" class="overflow-x-hidden">

		<header id="masthead" class="fixed top-0 w-full z-50 transition duration-300 ease-in-out bg-base-100">
			<nav id="site-navigation" class="relative flex flex-col md:flex-row items-center justify-between py-5 px-8 mx-auto">

				<a class="inline-flex items-center justify-center w-[4.152rem] h-[1.563rem] ml-12" href="<?php echo esc_url(home_url('/')); ?>">
					<?php
					/* LOGO */
					get_template_part('svg/inline', 'logo.svg');
					?>
				</a>

				<a href="#" class="toggle-button">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</a>

				<!-- <a class="uppercase hover-underline-animation" href="/locations/#nearest-location">Find Our Nearest Location</a> -->

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => 'ul',
						'menu_class' => "relative flex flex-col md:flex-row items-center max-w-[31.188rem] w-full justify-between"
					)
				);
				?>

				<!-- daisyui nav dropdown solution. 
			
		<div class="dropdown dropdown-hover">
			<label tabindex="0" class="btn m-1">Hover</label>
			<ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
				<li><a>Item 1</a></li>
				<li><a>Item 2</a></li>
			</ul>
		</div> -->

			</nav>
			<?php #get_template_part('template-parts/layout/announcement-bar'); 
			?>
		</header>