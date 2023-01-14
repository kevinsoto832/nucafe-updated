<?php

$page_image = get_post_meta(get_the_ID(), 'page_image', true);
$join_us_description = get_post_meta(get_the_ID(), 'join_us_description', true);
$qualifications_description = get_post_meta(get_the_ID(), 'qualifications_description', true);

?>

<section class="mx-auto">

    <div class="hero min-h-[23rem]" style="background-image: url(<?php echo wp_get_attachment_image_url($page_image, "full"); ?>);">
        <div class="hero-overlay bg-opacity-80"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <!-- styling for the_title() in components.css , $post-title-selector -->
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </div>
        </div>
    </div>

    <div class="flex max-w-[86rem] mx-auto">
        <div class="w-1/2 m-10 grow">
            <h1 class="text-[3.5rem] font-normal">Join us</h1>
            <p class="text-xl leading-8"><?php echo $join_us_description; ?></p>
        </div>
        <div class="m-10">
            <h1 class="text-[3.5rem] font-normal">Qualifications</h1>
            <p class="text-xl leading-8"><?php echo $qualifications_description; ?></p>
        </div>
    </div>

</section>


<!-- EMPLOYEE APPLICATION -->
<section>

    <!-- <article class="flex gap-4 w-max mt-8 mx-auto">

        <div class="flex flex-col items-center step-title">
            <span class="radial-progress" style="--value:100; --thickness: 2px;">1</span>
            <p class="mt-2">Basic Info</p>
        </div>

        <div class="flex flex-col items-center opacity-20 step-title">
            <span class="radial-progress" style="--value:100; --thickness: 2px;">2</span>
            <p class="mt-2">Employment Questions</p>
        </div>

    </article> -->

    <?php
    //get_template_part('template-parts/layout/form-example');

    //using contact form 7
    // echo apply_shortcodes('[contact-form-7 id="190" title="Application Form html_class="career-form"]');

    //multi-step form plugin
    echo apply_shortcodes('[multi-step-form id="1"]');
    ?>
</section>