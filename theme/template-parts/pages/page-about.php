<?php
get_template_part('template-parts/pages/about/about', 'hero');
//get_template_part('template-parts/pages/about/about', 'hero-2');

$contact_us_title = get_post_meta(get_the_ID(), 'contact_us_title', true);
$contact_us_description = get_post_meta(get_the_ID(), 'contact_us_description', true);
?>

<section id="contact-us" class="w-full px-16 z-10 relative bottom-10">
    <h1 class="font-bold w-[36rem]"><?php echo $contact_us_title; ?></h1>
    <div class="flex items-center justify-start">
        <?php
        echo apply_shortcodes('[contact-form-7 id="117" title="Footer Contact Us Form html_class="contact-us-form"]');
        ?>
        <p class="px-8 w-[35.75rem]"><?php echo $contact_us_description; ?></p>
        <!-- p class="w-[35.75rem]" -->
    </div>

</section>