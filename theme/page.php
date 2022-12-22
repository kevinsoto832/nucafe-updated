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
$theslug = get_the_slug();
$current_permalink = get_permalink();
$slug = basename($current_permalink);

$myPageTemplatePart = 'template-parts/pages/page-' . $theslug;

while (have_posts()) :
	the_post(); ?>
	<main id="primary" class="max-w-full relative top-0 mx-auto mt-16" data-barba="container" data-barba-namespace="<?php if (is_page('home')) {
																														echo 'home';
																													} else {
																														echo $slug;
																													}
																													?>">
		<?php

		if (is_front_page()) {
			get_template_part('template-parts/pages/page-home');
			//figure out a better way to do this?
		} elseif (is_page(array('about', 'locations', 'products', 'press', 'careers', 'contact'))) {
			get_template_part($myPageTemplatePart);
		} else {
			get_template_part('template-parts/default/content', 'page');
		}
		?>
	</main>
<?php

endwhile; // End of the loop.
// get_sidebar();
get_footer();
