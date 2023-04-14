<?php
$list = Nu_Queries::getPageContent('home');

if ($list->have_posts()) : 
    while ($list->have_posts()) : 
        $list->the_post();
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
        <section 
        id="home-list-bg" 
        class="h-auto md:h-screen my-10 w-full relative hero bg-no-repeat bg-cover md:grid-cols-2 md:grid-rows-3 md:justify-center" 
        style="background-image: url(<?php echo wp_get_attachment_image_url($list_background_image, "full"); ?>);">
            <div class="hero-overlay bg-opacity-80 md:bg-opacity-70 md:col-start-1 md:col-end-3 row-start-3 row-end-4 md:row-start-1 md:row-end-4"></div>
 
            <!-- image box next to list -->
            <figure class="relative h-[28rem] w-[28rem] md:col-start-1 box-content image-box-border row-start-1 row-end-2 md:row-start-2 md:row-end-3">
                <img id="image_1" class="absolute inset-0 h-[28rem] w-[28rem] object-cover " src="<?php echo wp_get_attachment_image_url($item_1_image, "full"); ?>" alt="">
                <img id="image_2" class="absolute inset-0 h-[28rem] w-[28rem] object-cover invisible" src="<?php echo wp_get_attachment_image_url($item_2_image, "full"); ?>" alt="">
                <img id="image_3" class="absolute inset-0 h-[28rem] w-[28rem] object-cover invisible" src="<?php echo wp_get_attachment_image_url($item_3_image, "full"); ?>" alt="">
                <img id="image_4" class="absolute inset-0 h-[28rem] w-[28rem] object-cover invisible" src="<?php echo wp_get_attachment_image_url($item_4_image, "full"); ?>" alt="">
                <img id="image_5" class="absolute inset-0 h-[28rem] w-[28rem] object-cover invisible" src="<?php echo wp_get_attachment_image_url($item_5_image, "full"); ?>" alt="">
            </figure>

            <ul class="w-full h-auto flex flex-col py-8 px-4 md:px-0 md:py-0 md:col-start-2 space-y-2 md:space-y-3 leading-[25px] row-start-3 row-end-4 md:row-start-2 md:row-end-3">
                <li class="w-[90%]">
                    <h1 class="font-bold">
                        Houston’s Premium Shaved Ice
                        and Boba Tea shop(s) since 2010.
                    </h1>
                </li>
                <li><h4 id="item_1" class=""><?php echo $item_1 ?></h4></li>
                <li><h4 id="item_2" class=""><?php echo $item_2 ?></h4></li>
                <li><h4 id="item_3" class=""><?php echo $item_3 ?></h4></li>
                <li><h4 id="item_4" class=""><?php echo $item_4 ?></h4></li>
                <li><h4 id="item_5" class=""><?php echo $item_5 ?></h4></li>
                <li>
                <?php 
                    $page_url = '/drinks';
                    $button_text = 'Products';
                    include __DIR__ . '/../../components/button.php';
                    ?>
                </li>   
            </ul>
        </section>
<?php
    endwhile;
    wp_reset_postdata();
else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
?>