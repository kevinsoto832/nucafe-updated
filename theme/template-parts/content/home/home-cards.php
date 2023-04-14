<section class="flex flex-col lg:flex-row w-full items-center md:justify-between gap-y-4 lg:gap-y-0 lg:gap-x-4">
    <?php
    //ACF
    $card = Nu_Queries::getNumberedCPT('home-cards', 4);
    if ($card->have_posts()) : while ($card->have_posts()) : $card->the_post();
            $card_title = get_post_meta(get_the_ID(), 'card_title', true);
            $card_description = get_post_meta(get_the_ID(), 'card_description', true);
            $card_background_image = get_post_meta(get_the_ID(), 'card_image', true);
    ?>
            <article class="group relative grow h-[20rem] w-full lg:h-[16rem] lg:w-[16rem] xl:h-[20.75rem] xl:w-[20.75rem] block bg-[#1C1C1C]">

                <img 
                class="absolute inset-0 h-full w-full object-cover opacity-80 transition-opacity group-hover:opacity-20" 
                src="<?php echo wp_get_attachment_image_url($card_background_image, "full"); ?>" />

                <div class="relative h-full py-4 flex flex-col items-center">

                    <div class="flex items-center w-full">
                        <span class=" divider w-8 h-1 bg-white"></span>
                        <h4 class="ml-4 font-semibold text-white text-[1.75rem] w-full transform transition-all duration-300 group-hover:pb-0 group-hover:bg-transparent group-hover:translate-y-0">
                            <?php echo $card_title; ?>
                        </h4>
                    </div>

                    <div class="flex flex-col items-start w-full text-white pl-11 pr-2 opacity-0 group-hover:opacity-100 transform transition-all duration-300 translate-y-20 group-hover:translate-y-10 ">
                        <p class="leading-[1.25rem] h-32 overflow-y-hidden">
                            <?php echo $card_description; ?>
                        </p>
                        <br>
                        <a
                        class="font-bold"  
                        href="#">
                        <p class="font-bold normal-case">Find Out More!</p></a>
                    </div>
                    <!-- </div> -->
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