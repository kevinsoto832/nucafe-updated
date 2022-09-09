<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nucafe
 */

?>
<!-- is there a way to remove background color when on about page? -->
<header id="masthead" class="fixed top-0 w-full z-50 transition duration-300 ease-in-out bg-base-100">
	<nav id="site-navigation" class="flex flex-col md:flex-row items-center justify-between max-w-[72.5rem] p-4 mx-auto">
		<a class="inline-flex items-center justify-center w-20 h-11 " href="<?php echo esc_url(home_url('/')); ?>">
			<?php get_template_part('svg/inline', 'logo.svg'); ?>
		</a>
		<a href="#" class="toggle-button">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</a>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container'      => 'ul',
				'menu_class' => "flex flex-col md:flex-row items-center max-w-[29.625rem] w-full justify-between text-sm font-medium uppercase text-white"
			)
		);
		?>
	</nav>
</header><!-- #masthead -->