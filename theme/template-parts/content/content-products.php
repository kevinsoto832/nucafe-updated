<?php
$title_1 = get_post_meta(get_the_ID(), 'title_1', true);
$title_2 = get_post_meta(get_the_ID(), 'title_2', true);
$shaved_ice_image_1 = get_post_meta(get_the_ID(), 'shaved_ice_image_1', true);
$shaved_ice_image_2 = get_post_meta(get_the_ID(), 'shaved_ice_image_2', true);
$shaved_ice_image_3 = get_post_meta(get_the_ID(), 'shaved_ice_image_3', true);
$shaved_ice_subcaption = get_post_meta(get_the_ID(), 'shaved_ice_subcaption', true);
$drink_subcaption = get_post_meta(get_the_ID(), 'drink_subcaption', true);
$drink_image_1 = get_post_meta(get_the_ID(), 'drink_image_1', true);
$drink_image_2 = get_post_meta(get_the_ID(), 'drink_image_2', true);
$drink_image_3 = get_post_meta(get_the_ID(), 'drink_image_3', true);
$shaved_ice_image_1_caption = get_post_meta(get_the_ID(), 'shaved_ice_image_1_caption', true);
$shaved_ice_image_2_caption = get_post_meta(get_the_ID(), 'shaved_ice_image_2_caption', true);
$shaved_ice_image_3_caption = get_post_meta(get_the_ID(), 'shaved_ice_image_3_caption', true);
$drink_image_1_caption = get_post_meta(get_the_ID(), 'drink_image_1_caption', true);
$drink_image_2_caption = get_post_meta(get_the_ID(), 'drink_image_2_caption', true);
$drink_image_3_caption = get_post_meta(get_the_ID(), 'drink_image_3_caption', true);
$image_size = 'full';

?>
<!-- WE MIGHT BE ABLE TO MAKE A CUSTOM POST SECTINO OUT OF THIS-->
<h1 class="text-center font-bold uppercase mb-2"><?php echo $title_1; ?></h1>
<p class="max-w-[46.375rem] text-center mx-auto"><?php echo $shaved_ice_subcaption; ?></p>

<article class="relative flex items-center justify-center max-w-[72.5rem] mx-auto">
    <div>
        <h3 class="text-center"><?php echo $shaved_ice_image_1_caption; ?></h3>
        <figure class="h-[14.75rem] w-[23.5rem] bg-no-repeat bg-cover bg-center" style="background-image: url(<?php echo wp_get_attachment_image_url($shaved_ice_image_1, $image_size); ?>);">
        </figure>
    </div>
    <div>
        <h3 class="text-center"><?php echo $shaved_ice_image_2_caption; ?></h3>
        <figure class="h-[14.75rem] w-[23.5rem] bg-no-repeat bg-cover bg-center" style="background-image: url(<?php echo wp_get_attachment_image_url($shaved_ice_image_2, $image_size); ?>);">
        </figure>
    </div>
    <div>
        <h3 class="text-center"><?php echo $shaved_ice_image_3_caption; ?></h3>
        <figure class="h-[14.75rem] w-[23.5rem] bg-no-repeat bg-cover bg-center" style="background-image: url(<?php echo wp_get_attachment_image_url($shaved_ice_image_3, $image_size); ?>);">
        </figure>
    </div>
</article>

<?php get_template_part('template-parts/layout/products-layout'); ?>


<h1 class="text-center font-bold uppercase"><?php echo $title_2; ?></h1>
<p class="max-w-[46.375rem] text-center mx-auto"><?php echo $drink_subcaption; ?></p>

<article class="relative flex items-center justify-center">
    <div>
        <h3 class="text-center"><?php echo $drink_image_1_caption; ?></h3>
        <figure class="h-[14.75rem] w-[23.5rem] bg-no-repeat bg-cover bg-center" style="background-image: url(<?php echo wp_get_attachment_image_url($drink_image_1, $image_size); ?>);">
        </figure>
    </div>
    <div>
        <h3 class="text-center"><?php echo $drink_image_2_caption; ?></h3>
        <figure class="h-[14.75rem] w-[23.5rem] bg-no-repeat bg-cover bg-center" style="background-image: url(<?php echo wp_get_attachment_image_url($drink_image_2, $image_size); ?>);">
        </figure>
    </div>
    <div>
        <h3 class="text-center"><?php echo $drink_image_3_caption; ?></h3>
        <figure class="h-[14.75rem] w-[23.5rem] bg-no-repeat bg-cover bg-center" style="background-image: url(<?php echo wp_get_attachment_image_url($drink_image_3, $image_size); ?>);">
        </figure>
    </div>
</article>