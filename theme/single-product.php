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

<main id="primary" class="relative w-full top-0 mx-auto mt-16" data-barba="container">
    <?php get_template_part('template-parts/pages/products/product', 'pagination'); ?>

    <div class="relative flex w-full my-24"> <!-- Contains the top half of the page  -->

        <?php

        $product_heading = get_post_meta(get_the_ID(), 'product_heading', true);
        $main_description = get_post_meta(get_the_ID(), 'main_description', true);
        $product_subheading1 = get_post_meta(get_the_ID(), 'product_subheading1', true);
        $product_subheading2 = get_post_meta(get_the_ID(), 'product_subheading2', true);
        $product_subheading3 = get_post_meta(get_the_ID(), 'product_subheading3', true);
        $product_description1 = get_post_meta(get_the_ID(), 'product_description1', true);
        $product_description2 = get_post_meta(get_the_ID(), 'product_description2', true);
        $product_description3 = get_post_meta(get_the_ID(), 'product_description3', true);
        $featured_product_image_1 = get_post_meta(get_the_ID(), 'featured_product_image_1', true);
        $featured_product_name_1 = get_post_meta(get_the_ID(), 'featured_product_name_1', true);
        $featured_product_image_2 = get_post_meta(get_the_ID(), 'featured_product_image_2', true);
        $featured_product_name_2 = get_post_meta(get_the_ID(), 'featured_product_name_2', true);
        ?>

        <!-- I think I figured it out. Relative positioning moves relative to it's ORIGINAL starting position -->
        <!-- Absolute position ignores the Original starting position. Depends on the parent container. -->
        <!-- right-0 with relative won't move at all because it's 0 pixels from it's starting position -->
        <!-- right-0 with absolute will reference a container, and position it's self absolutely -->

        <section class="w-80 ml-8 mr-16 text-right flex items-center">
            <h3>
                7 years, and over 1,250 experiments later, we’ve perfected our NU shaved ice.
                Each ice block goes through 10 hours of pre-preparation; a rigorous process to ensure quality and consistency.
            </h3>
        </section>

        <section class="">
            <!-- <section class="absolute w-[50rem] right-0"> -->

            <h1 class="font-bold text-[3.75rem]"><?php echo $product_heading; ?></h1>

            <div class="flex my-24">
                <div class="w-min">
                    <h4 class="font-bold underline underline-offset-4 decoration-1"><?php echo $product_subheading1; ?></h4>
                    <p class="mt-4 w-[13.5rem]"><?php echo $product_description1; ?></p>
                </div>

                <span class="divider-horizontal w-[1px] bg-white"></span>

                <div class="w-min">
                    <h4 class="font-bold underline underline-offset-4 decoration-1"><?php echo $product_subheading2; ?></h4>
                    <p class="mt-4 w-[13.5rem]"><?php echo $product_description2; ?></p>
                </div>

                <span class="divider-horizontal w-[1px] bg-white"></span>

                <div class="w-min">
                    <h4 class="font-bold underline underline-offset-4 decoration-1"><?php echo $product_subheading3; ?></h4>
                    <p class="mt-4 w-[13.5rem]"><?php echo $product_description3; ?></p>
                </div>
            </div>

            <div> <!-- Contains the image box container and the heading text-->
                <h4 class="font-bold">Featured</h4>
                <div class="flex gap-x-4"> <!-- Contains the image box-->
                    <div class="">
                        <figure class="h-[21rem] w-[20rem] bg-no-repeat bg-cover bg-center image-box-border" style="background-image: url(<?php echo wp_get_attachment_image_url($featured_product_image_1, "full"); ?>);">
                        </figure>
                        <h4 class="mt-4"><?php echo $featured_product_name_1; ?></h4>
                    </div>
                    <div class="">
                        <figure class="h-[21rem] w-[20rem] bg-no-repeat bg-cover bg-center image-box-border" style="background-image: url(<?php echo wp_get_attachment_image_url($featured_product_image_2, "full"); ?>);">
                        </figure>
                        <h4 class="mt-4"><?php echo $featured_product_name_2; ?></h4>
                    </div>
                </div>
            </div>

        </section>
    </div>


    <?php
    the_content();
    #get_template_part('template-parts/pages/products/product', 'catering-info');
    ?>
</main><!-- #main -->

<?php

get_footer();
