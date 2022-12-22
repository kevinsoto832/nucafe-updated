<?php
$about_image = get_post_meta(get_the_ID(), 'about_image_1', true);
$about_page_title = get_post_meta(get_the_ID(), 'about_page_title', true);
$background_story_title = get_post_meta(get_the_ID(), 'background_story_title', true);
$background_story = get_post_meta(get_the_ID(), 'background_story', true);
$donation_story_title = get_post_meta(get_the_ID(), 'donation_story_title', true);
$donation_story = get_post_meta(get_the_ID(), 'donation_story', true);
$contact_us_title = get_post_meta(get_the_ID(), 'contact_us_title', true);
$contact_us_description = get_post_meta(get_the_ID(), 'contact_us_description', true);
?>

<section id="post-<?php the_ID(); ?>" class="relative">
    <div class="hero min-h-[23rem]" style="background-image: url(<?php echo wp_get_attachment_image_url($about_image, "full"); ?>);">
        <div class="hero-overlay"></div>
    </div>
    <h1><?php echo $about_page_title; ?></h1>
    <h1><?php echo $background_story_title; ?></h1>
    <p><?php echo $background_story; ?></p>
    <h1><?php echo $donation_story_title ?></h1>
    <p><?php echo $background_story; ?></p>


</section>