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

		<?php get_template_part('template-parts/layout/header', 'content'); ?>