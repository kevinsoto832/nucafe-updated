<?php
$list = Nu_Queries::getPageContent('home');
if ($list->have_posts()) : while ($list->have_posts()) : $list->the_post();
        $item_1 = get_post_meta(get_the_ID(), 'item_1', true);
        $item_2 = get_post_meta(get_the_ID(), 'item_2', true);
        $item_3 = get_post_meta(get_the_ID(), 'item_3', true);
        $item_4 = get_post_meta(get_the_ID(), 'item_4', true);
        $item_5 = get_post_meta(get_the_ID(), 'item_5', true);
        $item_1_image = get_post_meta(get_the_ID(), 'item-1-image', true);
        $item_2_image = get_post_meta(get_the_ID(), 'item-2-image', true);
        $item_3_image = get_post_meta(get_the_ID(), 'item-3-image', true);
        $item_4_image = get_post_meta(get_the_ID(), 'item-4-image', true);
        $item_5_image = get_post_meta(get_the_ID(), 'item-5-image', true);
        $list_background_image = get_post_meta(get_the_ID(), 'list_background_image', true);
?>

        <section id="home-list-bg" class="h-[70vh] w-full relative hero grid-cols-2 justify-center" style="background-image: url(<?php echo wp_get_attachment_image_url($list_background_image, "full"); ?>);">
            <div class="hero-overlay bg-opacity-70 col-start-1 col-end-3"></div>

            <!-- image box next to list -->
            <figure class="relative h-[28rem] w-[28rem] col-start-1 box-content image-box-border">
                <img id="image_1" class="absolute inset-0 h-[28rem] w-[28rem] object-cover " src="<?php echo wp_get_attachment_image_url($item_1_image, "full"); ?>" alt="">
                <img id="image_2" class="absolute inset-0 h-[28rem] w-[28rem] object-cover invisible" src="<?php echo wp_get_attachment_image_url($item_2_image, "full"); ?>" alt="">
                <img id="image_3" class="absolute inset-0 h-[28rem] w-[28rem] object-cover invisible" src="<?php echo wp_get_attachment_image_url($item_3_image, "full"); ?>" alt="">
                <img id="image_4" class="absolute inset-0 h-[28rem] w-[28rem] object-cover invisible" src="<?php echo wp_get_attachment_image_url($item_4_image, "full"); ?>" alt="">
                <img id="image_5" class="absolute inset-0 h-[28rem] w-[28rem] object-cover invisible" src="<?php echo wp_get_attachment_image_url($item_5_image, "full"); ?>" alt="">
            </figure>

            <ul class="w-full h-auto col-start-2 leading-[40px]">
                <li class="w-full mb-4">
                    <h1 class="font-bold">
                        Houston’s Premium Shaved Ice
                        and Boba Tea shop(s) since 2010.
                    </h1>
                </li>

                <li>
                    <h5 id="item_1" class=""><?php echo $item_1 ?></h5>

                </li>
                <li>
                    <h5 id="item_2" class=""><?php echo $item_2 ?></h5>
                </li>
                <li>
                    <h5 id="item_3" class=""><?php echo $item_3 ?></h5>
                </li>
                <li>
                    <h5 id="item_4" class=""><?php echo $item_4 ?></h5>
                </li>
                <li>
                    <h5 id="item_5" class=""><?php echo $item_5 ?></h5>
                </li>


                <li><button class="btn-nu mt-4">Lorem Ipsum</button></li>
            </ul>

        </section>
        <!-- <div class="w-max mx-auto">
            <a href="" class="btn-nu">Explore Our Products</a>
        </div> -->


<?php
    endwhile;
    wp_reset_postdata();
else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
?>