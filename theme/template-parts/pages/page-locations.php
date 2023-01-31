<!-- <section class="mx-auto px-[2.625rem] mt-[10.438rem]">
    <h1 class="uppercase font-bold">Now open with two Houston Locations.</h1>
    <p>Interested in franchising? <b>Click here for more information.</b></p>
</section> -->

<?php
$page_title = get_post_meta(get_the_ID(), 'page_title', true);
$locations_image = get_post_meta(get_the_ID(), 'locations_image', true);
?>

<div class="hero min-h-[16rem] md:min-h-[23rem] mb-4 md:mb-[5.125rem] relative" style="background-image: url(<?php echo wp_get_attachment_image_url($locations_image, "full"); ?>);">
    <div class="hero-overlay bg-opacity-80"></div>
    <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md">
            <!-- styling for the_title() in components.css , $post-title-selector -->
            <h1 class="font-bold"><?php echo $page_title; ?></h1>
        </div>
    </div>
</div>

<?php
get_template_part('template-parts/pages/location-posts');
get_template_part('template-parts/pages/location-franchising-info');
?>

<section id="nearest-location" class="mx-auto text-center mt-10">
    <sup>It's easy to find us.</sup>
    <p>Enter your Zip Code below to find your nearest location</p>
    <div class="border-1 border-white w-full h-96 mt-10"></div>
</section>