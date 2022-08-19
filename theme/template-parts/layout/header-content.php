<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nucafe
 */

?>

<header id="masthead" class="bg-nu-black">
	<nav id="site-navigation" class="flex items-center justify-between max-w-3xl p-4 mx-auto">
		<a class="inline-flex items-center justify-center w-28 h-11 " href="<?php echo esc_url(home_url('/')); ?>">
			<?php get_template_part('svg/inline', 'logo.svg'); ?>
		</a>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				//removes <div> tag, uses <ul> for container instead
				'container'      => 'ul',
				'menu_class' => "flex items-center space-x-2 text-sm font-medium text-white"
			)
		);
		?>
	</nav>
</header><!-- #masthead -->