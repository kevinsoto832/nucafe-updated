<section class="mt-28 mb-10 h-[418px] w-[1376px] mx-auto grid grid-cols-[2fr_1fr_1fr_1fr] grid-rows-[209px_209px] gap-x-4 items-center justify-items-center">
    <?php
    $grid = Nu_Queries::getPageContent('home');
    if ($grid->have_posts()) : while ($grid->have_posts()) : $grid->the_post();

            $grid_image_1 = get_post_meta(get_the_ID(), 'grid_image_1', true);
            $grid_image_2 = get_post_meta(get_the_ID(), 'grid_image_2', true);
            $grid_image_3 = get_post_meta(get_the_ID(), 'grid_image_3', true);
            $grid_image_4 = get_post_meta(get_the_ID(), 'grid_image_4', true);
            $grid_image_5 = get_post_meta(get_the_ID(), 'grid_image_5', true);

            $grid_image_size = "full";

    ?>

            <figure class="h-[418px] w-[564px] bg-no-repeat bg-cover bg-center col-start-1 col-end-2 row-start-1 row-end-3" style="background-image: url(<?php echo wp_get_attachment_image_url($grid_image_1, $grid_image_size); ?>);"></figure>
            <figure class="h-[418px] w-[215.4px] bg-no-repeat bg-cover bg-center col-start-2 col-end-3 row-start-1 row-end-3" style="background-image: url(<?php echo wp_get_attachment_image_url($grid_image_2, $grid_image_size); ?>);"></figure>
            <figure class="h-[201px] w-[275.2px] bg-no-repeat bg-cover bg-center col-start-3 col-end-4 row-start-1 row-end-2 self-start" style="background-image: url(<?php echo wp_get_attachment_image_url($grid_image_3, $grid_image_size); ?>);"></figure>
            <figure class="h-[201px] w-[275.2px] bg-no-repeat bg-cover bg-center col-start-3 col-end-4 row-start-2 row-end-3 self-end" style="background-image: url(<?php echo wp_get_attachment_image_url($grid_image_4, $grid_image_size); ?>);"></figure>
            <figure class="h-[418px] w-[275.2px] bg-no-repeat bg-cover bg-center col-start-4 col-end-5 row-start-1 row-end-3" style="background-image: url(<?php echo wp_get_attachment_image_url($grid_image_5, $grid_image_size); ?>);"></figure>

    <?php
        endwhile;
        wp_reset_postdata();
    else :
        _e('Sorry, no posts matched your criteria.', 'textdomain');

    endif;
    ?>
</section>