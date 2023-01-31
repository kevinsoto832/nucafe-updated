<section class="flex flex-col md:flex-row w-full items-center justify-between mb-10 md:mb-20 gap-y-4 md:gap-y-0">
    <?php
    //ACF
    $card = Nu_Queries::getNumberedCPT('home-cards', 4);
    if ($card->have_posts()) : while ($card->have_posts()) : $card->the_post();
            $card_title = get_post_meta(get_the_ID(), 'card_title', true);
            $card_description = get_post_meta(get_the_ID(), 'card_description', true);
            $card_image = get_post_meta(get_the_ID(), 'card_image', true);
    ?>
            <a href="#" class="group relative h-[20.75rem] w-[20.75rem] block bg-black">
                <img src="<?php echo wp_get_attachment_image_url($card_image, "full"); ?>" class="absolute inset-0 h-full w-full object-cover opacity-1 transition-opacity group-hover:opacity-20" />

                <div class="relative h-full py-4">
                    <!-- <p class="uppercase tracking-widest text-pink-500">
                Sub-Title Goes Here.
            </p> -->

                    <!-- bg-black/80 group-hover:bg-black/0  --> 
                    <h4 class="w-full bg-black/90 font-normal text-[2rem] text-center md:text-left pt-6 md:pt-4 pb-10 md:pl-4 transform transition-all duration-300 translate-y-[15.8rem] group-hover:pb-4 group-hover:bg-transparent group-hover:translate-y-0 group-hover:text-[2rem]"><?php echo $card_title; ?></h4>

                    <!-- <div class=""> -->
                    <div class="absolute bottom-8 opacity-0 text-white px-4 transform transition-all duration-300 translate-y-20 group-hover:translate-y-0 group-hover:opacity-100">
                        <p class="text-light">
                            <?php echo $card_description; ?>
                        </p>
                        <br>
                        <p class="font-bold">Find Out More!</p>
                    </div>
                    <!-- </div> -->
                </div>
            </a>
    <?php
        endwhile;
    else :
        _e('Sorry, no posts matched your criteria.', 'textdomain');
    endif;
    wp_reset_postdata();
    ?>
</section>