<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nucafe
 */

?>

<header id="masthead" class="fixed top-0 w-full z-50 transition duration-300 ease-in-out bg-base-100">
	<nav id="site-navigation" class="relative flex flex-col md:flex-row items-center justify-between py-4 px-8 mx-auto">

		<a class="inline-flex items-center justify-center w-[6.517rem] h-10 ml-12" href="<?php echo esc_url(home_url('/')); ?>">
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
				'menu_class' => "flex flex-col md:flex-row items-center max-w-[35.25rem] w-full justify-between"
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
	<?php get_template_part('template-parts/layout/announcement-bar'); ?>
</header>