<?php
$page_image = get_post_meta(get_the_ID(), 'page_image', true);
$join_us_description = get_post_meta(get_the_ID(), 'join_us_description', true);
$qualifications_description = get_post_meta(get_the_ID(), 'qualifications_description', true);
?>

<section class="mx-auto">

    <!-- <div class="absolute inset-0 bg-transparent bg-gradient-to-l from-[#000000] to-[#585858]/0"></div>
            <figure class="h-[39.25rem] w-full bg-no-repeat bg-cover bg-center bg-gray-800" style="background-image: url(http://nu-cafe-updated.local/wp-content/uploads/2022/11/DSC01363.jpg">
            </figure> -->

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
        <div>
            <h1 class="text-[3.5rem]">Join us</h1>
            <p><?php echo $join_us_description; ?></p>
        </div>
        <div>
            <h1 class="text-[3.5rem]">Qualifications</h1>
            <p><?php echo $qualifications_description; ?></p>
        </div>
    </div>

</section>


<!-- EMPLOYEE APPLICATION -->
<section>
    <article class="flex gap-4 w-max mt-8 mx-auto">
        <div class="flex flex-col items-center">
            <span class="radial-progress" style="--value:100; --thickness: 2px;">1</span>
            <p class="mt-2">Basic Info</p>
        </div>
        <div class="flex flex-col items-center opacity-20">
            <span class="radial-progress" style="--value:100; --thickness: 2px;">2</span>
            <p class="mt-2">Employment Questions</p>
        </div>
    </article>

    <?php
    //get_template_part('template-parts/layout/form-example');
    echo apply_shortcodes('[contact-form-7 id="190" title="Application Form html_class="career-form"]');
    ?>
</section>