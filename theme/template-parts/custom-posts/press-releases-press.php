<?php

$press_page = Nu_Queries::getPressPosts(100);
if ($press_page->have_posts()) : while ($press_page->have_posts()) : $press_page->the_post();
        $press_release_title = get_post_meta(get_the_ID(), 'press_title', true);
        $press_release_description = get_post_meta(get_the_ID(), 'press_description', true);
        $press_release_link = get_post_meta(get_the_ID(), 'press_link', true);
        $press_thumbnail = get_post_meta(get_the_ID(), 'press_thumbnail', true);
        $press_thumbnail_size = 'full';
?>
        <li class="border-1">
            <figure class="h-60 w-60 bg-no-repeat bg-cover bg-center" style="background-image: url(<?php echo wp_get_attachment_image_url($press_thumbnail, "full"); ?>);"></figure>
            <h4 class="mt-4"><?php echo $press_release_title; ?></h4>
            <p class="mt-2 italic text-sm"><?php echo $press_release_description; ?></p>
        </li> <?php

            endwhile;
            wp_reset_postdata();
        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;
                ?>