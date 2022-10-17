<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nucafe
 */

get_header();
?>
<!-- mt-20 to make space for sticky header -->
<main id="primary" class="max-w-full mx-auto">
	<!--  prose prose-headings:text-white prose-headings:font-one prose-p:text-white prose-p:font-two -->
	<?php
	$theslug = get_the_slug();
	$myPageTemplatePart = 'template-parts/content/content-' . $theslug;

	while (have_posts()) :
		the_post();

		if (is_front_page()) {
			get_template_part('template-parts/content/content-home');
		} elseif (is_page(array('about', 'locations', 'products', 'press', 'careers', 'contact'))) {
			get_template_part($myPageTemplatePart);
		} else {
			get_template_part('template-parts/content/content', 'page');
		}

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
