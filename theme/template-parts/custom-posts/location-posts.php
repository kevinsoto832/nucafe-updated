<?php
/* LOCATION POST ENTRY 
   =INCLUDES
   - Pre Title Description
   - Store Name
   - Address
   - Telephone # 
   - Google/Yelp Link to Hours
*/

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
            <h1 class="pt-2 font-normal tracking-[-0.54px] uppercase"><?php echo $store_name; ?></h1>
            <figure class="h-[18.19rem] w-[31rem] bg-no-repeat bg-cover bg-center" style="background-image: url(<?php echo wp_get_attachment_image_url($store_image_id, "full"); ?>);">
            </figure>

            <div class="flex flex-col mt-[0.875rem] gap-[0.875rem]">
                <a href="https://goo.gl/maps/EW6nz6DkjQ77f14w5"><?php echo $store_address; ?></a>
                <!-- INSERT PHONE EMOJI -->
                <a href="tel:7137717771"><?php echo $store_phone; ?></a>
                <a href="https://goo.gl/maps/EW6nz6DkjQ77f14w5">View Store Hours on Google & Yelp</a>
                <div class="flex gap-x-3 bg-red-200">
                    <a href="<?php echo $store_hours_google; ?>">
                        <?php get_template_part('assets/svg/inline', 'google.svg'); ?>
                    </a>
                    <a href="<?php echo $store_hours_yelp; ?>">
                        <?php get_template_part('assets/svg/inline', 'yelp.svg'); ?>
                    </a>
                </div>
            </div>
        </article>

<?php

    endwhile;
else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;

wp_reset_postdata();
