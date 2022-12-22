<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nucafe
 */

get_header();
?>

<main id="primary" class="max-w-full relative top-0 mx-auto mt-16">

    <section class="mt-20 mx-auto border-y-[1px] border-white">
        <aside class="flex justify-center space-x-2 py-4">
            <?php
            $current_permalink = get_permalink();
            $slug = basename($current_permalink);


            $product_posts = Nu_Queries::getCPTPosts('product');
            if ($product_posts->have_posts()) : while ($product_posts->have_posts()) : $product_posts->the_post();

                    // Get the slug for the current post
                    $post_name = get_post_field('post_name', get_the_ID());


                    if ($slug == $post_name) {
                        the_title(sprintf('<a href="%s"><h6 class="font-bold">', esc_url(get_permalink())), '</h6></a>');
                    } else {
                        the_title(sprintf('<a href="%s"><h6 class="font-light">', esc_url(get_permalink())), '</h6></a>');
                    }

                endwhile;
            else :
                _e('Sorry, no posts matched your criteria.', 'textdomain');
            endif;
            wp_reset_postdata();

            ?>
        </aside>
    </section>

    <?php
    //get_template_part('template-parts/pages/products/product', 'pagination');  
    ?>

    <h1>hello i'm the product page</h1>
    <?php the_content(); ?>

</main><!-- #main -->

<?php

get_footer();
