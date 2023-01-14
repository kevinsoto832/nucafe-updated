<?php
$about_image = get_post_meta(get_the_ID(), 'about_image_1', true);
$about_page_title = get_post_meta(get_the_ID(), 'about_page_title', true);
$background_story_title = get_post_meta(get_the_ID(), 'background_story_title', true);
$background_story = get_post_meta(get_the_ID(), 'background_story', true);
$donation_story_title = get_post_meta(get_the_ID(), 'donation_story_title', true);
$donation_story = get_post_meta(get_the_ID(), 'donation_story', true);
$contact_us_title = get_post_meta(get_the_ID(), 'contact_us_title', true);
$contact_us_description = get_post_meta(get_the_ID(), 'contact_us_description', true);
?>m

<section id="post-<?php the_ID(); ?>" class="relative">

    <!-- For something like this, it's absolutely possible to create sort of a class/object and pass in a title and image name
that way we can create this component this whenever we need multiple instances across pages
-->
    <div class="hero min-h-[23rem] relative place-items-start items-center" style="background-image: url(<?php echo wp_get_attachment_image_url($about_image, "full"); ?>);">
        <div class="hero-overlay bg-opacity-80"></div>
        <div class="hero-content text-left text-neutral-content">
            <div class="max-w-4xl">
                <h1 class="font-bold leading-[65px] pl-16"><?php echo $about_page_title; ?></h1>
            </div>
        </div>
    </div>

    <div class="px-16 py-16 z-20">
        <h2><?php echo $background_story_title; ?></h2>
        <p class="mt-4"><?php echo $background_story; ?></p>
    </div>

    <div class="hero min-h-[43.375rem] right-[12.5rem] absolute z-0" style="background-image: url(http://nu-cafe-updated.local/wp-content/uploads/2023/01/pexels-cottonbro-studio-6590920-scaled.jpg);">
        <div class="hero-overlay bg-opacity-70"></div>
    </div>


    <div class="px-16 py-16 relative z-20">
        <h1 class="font-bold w-[52rem]"><?php echo $donation_story_title ?></h1>
        <h4 class="my-4">over 6,200 meals Donated by the NU family.</h4>
        <p><?php echo $background_story; ?></p>
    </div>



</section>