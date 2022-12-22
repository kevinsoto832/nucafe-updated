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

<footer id="colophon" class="footer p-10 bg-gray-900 text-base-content justify-end">
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

  <?php
  wp_nav_menu(
    array(
      'menu' => 'Footer-2',
      'container'      => 'ul',
      'menu_class' => "flex flex-col items-start justify-between"
    )
  );
  ?>

  <div class="flex flex-col">
    <span class="footer-title">Follow Us!</span>
    <?php
    wp_nav_menu(
      array(
        'menu' => 'Footer-3',
        'container'      => 'ul',
        'menu_class' => "flex flex-col items-start justify-between"
      )
    );
    ?>
  </div>

  <div class="flex flex-col">
    <span class="footer-title">Locations</span>
    <?php
    wp_nav_menu(
      array(
        'menu' => 'Footer-4',
        'container'      => 'ul',
        'menu_class' => "flex flex-col items-start justify-between"
      )
    );
    ?>
  </div>

  <!-- <div>
    <div class="grid grid-flow-col gap-4">
      <a> get_template_part('svg/inline', 'facebook.svg'); ?> </a>
      <a> get_template_part('svg/inline', 'instagram.svg'); ?></a>
    </div>
  </div> -->
</footer>
<footer class="relative p-10 bg-gray-800 w-full">
  <a href="<?php echo esc_url(__('https://wordpress.org/', 'pixel-perfect')); ?>" class="absolute left-8">
    <?php
    printf(esc_html__('Nu Copyright 2021 © All rights reserved.'));
    ?>
  </a>

  <p class="text-xs font-light text-center mx-auto">
    <?php
    printf(esc_html__('Designed by %1$s', 'pixel-perfect'), '<a href="http://pixelperfecthou.com/" class="normal-case">Pixel Perfect</a>');
    ?>
  </p>

  <a href="" class="absolute right-8 text-xs font-light hover-underline-animation">Privacy Policy</a>

</footer><!-- #colophon -->