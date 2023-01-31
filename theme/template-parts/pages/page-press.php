<section class="mx-auto w-full p-8 md:p-0 md:w-max mt-20 md:mt-[10.438rem]">
    <h1 class="uppercase font-bold text-[2rem] md:text-[4.375rem]">Media Mention</h1>

    <ul class="relative grid grid-cols-1 md:grid-cols-4 items-center justify-items-start md:justify-items-center gap-4">
        <?php

        $press_page = Nu_Queries::getPressPosts(100);

        if ($press_page->have_posts()) : while ($press_page->have_posts()) : $press_page->the_post();
                $press_title = get_post_meta(get_the_ID(), 'press_title', true);
                $press_description = get_post_meta(get_the_ID(), 'press_description', true);
                $press_link = get_post_meta(get_the_ID(), 'press_link', true);
                $press_thumbnail = get_post_meta(get_the_ID(), 'press_thumbnail', true);
                $press_thumbnail_size = 'full';
        ?>

                <!-- There's some serious PHP shit that goes on here. -->
                <li class="border-1 mt-[1.5rem] md:w-[261px]">
                    <h4 class="font-bold text-[1.5rem] leading-6"><?php echo $press_title; ?></h4>
                    <p class="text-[14px] font-light"><?php
                                                        #echo the_excerpt();
                                                        echo $press_description;
                                                        ?></p>
                    <a class="font-normal text-[13px]" href="<?php echo $press_link ?>">Read More</a>
                    <figure class="h-[11.875rem] w-[16.313rem] bg-no-repeat bg-cover bg-center mt-[1.5rem]" style="background-image: url(<?php echo wp_get_attachment_image_url($press_thumbnail, "full"); ?>);"></figure>
                </li> <?php

                    endwhile;
                    wp_reset_postdata();
                else :
                    _e('Sorry, no posts matched your criteria.', 'textdomain');
                endif;
                        ?>
    </ul>


</section>