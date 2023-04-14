<section class="relative mt-20 mx-auto border-y-[1px] border-white">
    <aside class="flex justify-center space-x-2 py-4">
        <?php
        $current_permalink = get_permalink();
        $slug = basename($current_permalink);

        $product_posts = Nu_Queries::getCPTPosts('product');
        if ($product_posts->have_posts()) : while ($product_posts->have_posts()) : $product_posts->the_post();

                // Get the slug for the current post
                $post_name = get_post_field('post_name', get_the_ID());


                if ($slug == $post_name) {
                    the_title(sprintf('<a href="%s"><h6 class="underline">', esc_url(get_permalink())), '</h6></a>');
                } else {
                    the_title(sprintf('<a href="%s"><h6 class="opacity-70">', esc_url(get_permalink())), '</h6></a>');
                }

            endwhile;
        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;
        wp_reset_postdata();

        ?>
    </aside>
</section>