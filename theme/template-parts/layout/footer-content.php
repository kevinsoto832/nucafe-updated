<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nucafe
 */

?>

<footer id="colophon">

	<div>
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'nucafe')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'nucafe'), 'WordPress');
			?>
		</a>
	</div>
</footer><!-- #colophon -->