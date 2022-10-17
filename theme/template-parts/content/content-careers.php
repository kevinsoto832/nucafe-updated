<?php
$page_image = get_post_meta(get_the_ID(), 'page_image', true);
?>
<section class="grid grid-cols-2 max-w-[72.5rem] mx-auto">
    <figure class="h-[18.19rem] w-[31rem] bg-no-repeat bg-cover bg-center" style="background-image: url(<?php echo wp_get_attachment_image_url($page_image, "full"); ?>);">
    </figure>
    <div class="entry-content">
        <?php
        //Display Job Description & Qualifications. 
        the_content();
        ?>
    </div>
</section>

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