<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nucafe
 */

?>
<!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

<footer id="colophon" class="footer p-10 bg-base-200 text-base-content justify-end">
  <!-- <figure class="w-2/4"><img src="http://nu-cafe-updated.local/wp-content/uploads/2022/09/711press.jpg" alt="Shoes" /></figure> -->

  <?php
  wp_nav_menu(
    array(
      'theme_location' => 'menu-2',
      'menu_id'        => 'footer-menu',
      'container'      => 'ul',
      'menu_class' => "flex flex-col items-start justify-between"
    )
  );
  ?>

  <div class="flex flex-col items-start justify-between">
    <span class="footer-title">Follow Us!</span>
    <!-- <p class="text-xs font-bold mb-0">Follow Us!</p> -->
    <a href="">Instagram</a>
    <a href="">Facebook</a>
  </div>

  <div class="flex flex-col items-start justify-between">
    <span class="footer-title">Locations</span>
    <!-- <p class="text-xs font-bold mb-0">Locations</p> -->
    <a href="">Nu Cafe - Chinatown</a>
    <a href="">Nu Ice & Drinks - Westheimer & Fountain View </a>
  </div>

  <!-- <div>
    <div class="grid grid-flow-col gap-4">
      <a> get_template_part('svg/inline', 'facebook.svg'); ?> </a>
      <a> get_template_part('svg/inline', 'instagram.svg'); ?></a>
    </div>
  </div> -->
</footer>
<footer class="footer footer-center p-10 bg-base-200 text-base-content">
  <div class="site-info">
    <a href="<?php echo esc_url(__('https://wordpress.org/', 'pixel-perfect')); ?>" class="normal-case">
      <?php
      printf(esc_html__('Nu Copyright 2021 © All rights reserved.'));
      ?>
    </a>

    <p class="text-xs font-light">
      <?php
      printf(esc_html__('Designed by %1$s', 'pixel-perfect'), '<a href="http://pixelperfecthou.com/" class="normal-case">Pixel Perfect</a>');
      ?>
    </p>

    <a href="" class="text-xs font-light">Privacy Policy</a>
  </div>
</footer><!-- #colophon -->