<section class="flex flex-col md:flex-row mx-auto items-center w-max space-y-8 md:space-y-0 md:space-x-10">
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

            <article class="flex flex-col items-center md:items-stretch justify-center md:flex-row md:space-x-4 ">

                <figure class="h-[20rem] w-full md:w-[332px] bg-no-repeat bg-cover bg-center" style="background-image: url(<?php echo wp_get_attachment_image_url($store_image_id, "full"); ?>);">
                </figure>

                <div class="flex flex-col space-y-2 justify-start items-end md:items-start relative pb-16 md:pb-0">

                    <h2 class="font-bold mt-4 md:mt-0"><?php echo $store_name; ?></h2>

                    <div class="flex flex-row-reverse md:flex-row items-center gap-x-2">
                        <?php get_template_part('./svg/inline', 'location.svg'); ?>
                        <a href="https://goo.gl/maps/EW6nz6DkjQ77f14w5">
                            <p><?php echo $store_address; ?></p>
                        </a>
                    </div>

                    <div class="flex flex-row-reverse md:flex-row items-center gap-x-2">
                        <?php get_template_part('./svg/inline', 'phone.svg'); ?>
                        <a href="tel:7137717771">
                            <p><?php echo $store_phone; ?></p>
                        </a>
                    </div>

                    <a href="" class="absolute bottom-0 btn-nu">View Store Hours</a>
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