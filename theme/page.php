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
// $slug = get_the_slug();
$current_permalink = get_permalink();
$slug = basename($current_permalink);

$get_the_page = 'template-parts/content/' . $slug . '/' . $slug;
$get_the_page_2 = "'" . $get_the_page . "'";



while (have_posts()) : the_post(); ?>
	<main id="primary" class="max-w-full relative top-0 mx-auto" data-barba="container" data-barba-namespace="<?php if (is_page('home')) : echo 'home';
																												else : echo $slug;
																												endif;
																												?>">
		<?php

		if (is_front_page()) {
			get_template_part('template-parts/content/home/home');
		} elseif (is_page(array('about', 'locations', 'products', 'press', 'careers', 'contact'))) {
			get_template_part('template-parts/content/' . $slug . '/' . $slug);
		} else {
			get_template_part('template-parts/default/content', 'page');
		}
		?>
	</main>
<?php

endwhile; // End of the loop.

get_footer();
