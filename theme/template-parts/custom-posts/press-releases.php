<?php

$press = Nu_Queries::pressHome();
if ($press->have_posts()) : while ($press->have_posts()) : $press->the_post();
        $press_release_title = get_post_meta(get_the_ID(), 'press_title', true);
        $press_release_description = get_post_meta(get_the_ID(), 'press_description', true);
        $press_release_link = get_post_meta(get_the_ID(), 'press_link', true);
        $press_thumbnail = get_post_meta(get_the_ID(), 'press_thumbnail', true);
        $press_thumbnail_size = 'large';
?>
        <li class="border-1">
            <h5><?php echo $press_release_title; ?></h5>
            <p class="py-2"><?php echo $press_release_description; ?></p>
            <figure class="h-60 w-60 overflow-hidden"><?php echo wp_get_attachment_image($press_thumbnail, $press_thumbnail_size) ?></figure>
        </li> <?php

            endwhile;
            wp_reset_postdata();
        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;
                ?>