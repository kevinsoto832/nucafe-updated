<?php
get_template_part('template-parts/pages/about', 'hero');

$contact_us_title = get_post_meta(get_the_ID(), 'contact_us_title', true);
$contact_us_description = get_post_meta(get_the_ID(), 'contact_us_description', true);
?>


<section id="contact-us" class="w-full px-16 z-10 relative">
    <div class="flex w-full items-start justify-between gap-x-8">
        <div>
            <h1 class="w-[50rem] z-20 relative mt-4 pb-4"><?php echo $contact_us_title; ?></h1>
            <p class="min-w-[38rem] flex-grow"><?php echo $contact_us_description; ?></p>
        </div>
        <?php
        echo apply_shortcodes('[contact-form-7 id="117" title="Footer Contact Us Form html_class="contact-us-form space-y-2"]');
        ?>

        <!-- p class="w-[35.75rem]" -->
    </div>
</section>