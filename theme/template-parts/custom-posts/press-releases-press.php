<ul class="relative grid grid-cols-4 items-end gap-x-4">
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
            <li class="border-1">
                <h4 class=""><?php echo $press_title; ?></h4>
                <p class="italic text-sm mb-0"><?php
                                                #echo the_excerpt();
                                                echo $press_description;
                                                ?></p>
                <a href="<?php echo $press_link ?>">Read More</a>
                <figure class="h-[307px] w-[331px] bg-no-repeat bg-cover bg-center" style="background-image: url(<?php echo wp_get_attachment_image_url($press_thumbnail, "full"); ?>);"></figure>
            </li> <?php

                endwhile;
                wp_reset_postdata();
            else :
                _e('Sorry, no posts matched your criteria.', 'textdomain');
            endif;
                    ?>
</ul>