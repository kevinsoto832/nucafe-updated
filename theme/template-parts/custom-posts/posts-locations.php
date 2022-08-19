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

        <article class="flex gap-x-10">
            <div>
                <sup class="font-nova italic"><?php echo $store_caption; ?></sup>
                <h1 class="pt-2"><?php echo $store_name; ?></h1>
                <div class="py-2">
                    <a href="https://goo.gl/maps/EW6nz6DkjQ77f14w5"><?php echo $store_address; ?></a><br>
                    <a href="tel:7137717771"><?php echo $store_phone; ?></a><br>
                    <h1 class="py-4"><a href="https://goo.gl/maps/EW6nz6DkjQ77f14w5">View Store Hours on Google & Yelp</a></h1>
                    <div class="flex gap-x-3">
                        <a href="<?php echo $store_hours_google; ?>">
                            <?php get_template_part('assets/svg/inline', 'google.svg'); ?>
                        </a>
                        <a href="<?php echo $store_hours_yelp; ?>">
                            <?php get_template_part('assets/svg/inline', 'yelp.svg'); ?>
                        </a>
                    </div>
                </div>
            </div>

            <figure class="h-auto w-96 bg-no-repeat bg-cover bg-center" style="background-image: url(<?php echo wp_get_attachment_image_url($store_image_id, "full"); ?>);">
            </figure>

        </article>
<?php
    endwhile;
else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
wp_reset_postdata();
