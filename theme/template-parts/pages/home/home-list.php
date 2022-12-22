<!--

******DEACTIVATED ADV. CUSTOM FIELDS *******

-->

<section class="w-full h-[90vh] relative">
    <figure class="opacity-10 z-10"><img src="http://nu-cafe-updated.local/wp-content/uploads/2022/12/phew_bannar.jpg" alt="Shoes" /></figure>
    <div class="absolute top-1/4 left-1/4 flex w-max justify-center items-center">

        <figure id="background" class="mr-4 border-6 h-[24.125rem] w-[26.688rem] bg-slate-600">
            <img id="image_1" class="absolute inset-0 h-full w-full object-cover invisible" src="<?php echo wp_get_attachment_image_url($item_1_image, "full"); ?>" alt="">
            <img id="image_2" class="absolute inset-0 h-full w-full object-cover invisible" src="<?php echo wp_get_attachment_image_url($item_2_image, "full"); ?>" alt="">
            <img id="image_3" class="absolute inset-0 h-full w-full object-cover invisible" src="<?php echo wp_get_attachment_image_url($item_3_image, "full"); ?>" alt="">
            <img id="image_4" class="absolute inset-0 h-full w-full object-cover invisible" src="<?php echo wp_get_attachment_image_url($item_4_image, "full"); ?>" alt="">
            <img id="image_5" class="absolute inset-0 h-full w-full object-cover invisible" src="<?php echo wp_get_attachment_image_url($item_5_image, "full"); ?>" alt="">
        </figure>

        <ul class="space-y-[0.188rem] z-20">
            <li class="w-[33.125rem]">
                <h2 class="font-one font-normal text-[2rem]">
                    Houston’s Premium Shaved Ice
                    and Boba Tea shop(s) since 2010.
                </h2>
            </li>
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
            ?>
                    <li class="relative">
                        <h3 id="item_1" class="z-10 relative"><?php echo $item_1 ?></h3>
                    </li>
                    <li class="relative">
                        <h3 id="item_2" class=""><?php echo $item_2 ?></h3>
                    </li>
                    <li class="relative">
                        <h3 id="item_3" class=""><?php echo $item_3 ?></h3>
                    </li>
                    <li class="relative">
                        <h3 id="item_4" class=""><?php echo $item_4 ?></h3>
                    </li>
                    <li class="relative">
                        <h3 id="item_5" class=""><?php echo $item_5 ?></h3>
                    </li>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                _e('Sorry, no posts matched your criteria.', 'textdomain');
            endif;
            ?>
            <li><button class="btn-nu">Lorem Ipsum</button></li>
        </ul>



    </div>
</section>