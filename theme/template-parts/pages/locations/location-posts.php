<section class="flex mx-auto">
    <?php

    $location_posts = Nu_Queries::getCPTPosts('locations');

    if ($location_posts->have_posts()) : while ($location_posts->have_posts()) : $location_posts->the_post();
            $store_image_id = get_post_meta(get_the_ID(), 'store_image', true);
            $store_caption = get_post_meta(get_the_ID(), 'store_caption', true);
            $store_name = get_post_meta(get_the_ID(), 'store_name', true);
            $store_address = get_post_meta(get_the_ID(), 'address', true);
            $store_phone = get_post_meta(get_the_ID(), 'phone_number', true);
            $store_hours_google = get_post_meta(get_the_ID(), 'store_hours_google', true);
            $store_hours_yelp = get_post_meta(get_the_ID(), 'store_hours_yelp', true);
    ?>

            <article class="flex flex-col px-[2.625rem]">

                <div class="flex items-end justify-between">
                    <h2 class="font-normal uppercase"><?php echo $store_name; ?></h2>
                    <a href="https://goo.gl/maps/EW6nz6DkjQ77f14w5">View Store Hours</a>
                </div>

                <figure class="h-[18.19rem] w-[31rem] bg-no-repeat bg-cover bg-center" style="background-image: url(<?php echo wp_get_attachment_image_url($store_image_id, "full"); ?>);">
                </figure>

                <div class="flex items-center">
                    <?php get_template_part('./svg/inline', 'location.svg'); ?>

                    <a href="https://goo.gl/maps/EW6nz6DkjQ77f14w5"><?php echo $store_address; ?></a>
                </div>

                <div class="flex items-center">
                    <?php get_template_part('./svg/inline', 'phone.svg'); ?>

                    <a href="tel:7137717771"><?php echo $store_phone; ?></a>
                </div>

            </article>

    <?php

        endwhile;
    else :
        _e('Sorry, no posts matched your criteria.', 'textdomain');
    endif;

    wp_reset_postdata();

    ?>

</section>