<?php

$press_page = Nu_Queries::pressPage();
if ($press_page->have_posts()) : while ($press_page->have_posts()) : $press_page->the_post();
        $press_release_title = get_post_meta(get_the_ID(), 'press_title', true);
        $press_release_description = get_post_meta(get_the_ID(), 'press_description', true);
        $press_release_link = get_post_meta(get_the_ID(), 'press_link', true);
        $press_thumbnail = get_post_meta(get_the_ID(), 'press_thumbnail', true);
        $press_thumbnail_size = 'full';
?>
        <li class="border-1">
            <h3 class=""><?php echo $press_release_title; ?></h3>
            <p class="py-2"><?php echo $press_release_description; ?></p>
            <figure class="h-[19.25rem] w-[19.25rem] overflow-hidden"><?php echo wp_get_attachment_image($press_thumbnail, $press_thumbnail_size) ?></figure>
        </li> <?php

            endwhile;
            wp_reset_postdata();
        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;
                ?>