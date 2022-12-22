<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package nucafe
 */

get_header();
?>

<main id="primary" class="mt-20">

	<section>
		<header>
			<h1 class="entry-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'nucafe'); ?></h1>
		</header>

		<div class="entry-content">
			<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'nucafe'); ?></p>

			<?php
			get_search_form();

			the_widget('WP_Widget_Recent_Posts');
			?>

			<div>
				<h2><?php esc_html_e('Most Used Categories', 'nucafe'); ?></h2>
				<ul>
					<?php
					wp_list_categories(
						array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						)
					);
					?>
				</ul>
			</div>

			<?php
			/* translators: %1$s: smiley */
			$nucafe_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'nucafe'), convert_smilies(':)')) . '</p>';
			the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$nucafe_archive_content");

			the_widget('WP_Widget_Tag_Cloud');
			?>

		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
