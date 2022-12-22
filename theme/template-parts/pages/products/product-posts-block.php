<?php

$product_posts = Nu_Queries::getCPTPostsByOrder('product', 'title');
if ($product_posts->have_posts()) : while ($product_posts->have_posts()) : $product_posts->the_post();
        $title = get_post_meta(get_the_ID(), 'title', true);
        $subtitle = get_post_meta(get_the_ID(), 'subtitle', true);
        // $image_1 = get_post_meta(get_the_ID(), 'image_1', true);
        // $image_2 = get_post_meta(get_the_ID(), 'image_2', true);
        // $image_3 = get_post_meta(get_the_ID(), 'image_3', true);
        $subcaption_1 = get_post_meta(get_the_ID(), 'subcaption_1', true);
        $subcaption_2 = get_post_meta(get_the_ID(), 'subcaption_2', true);
        $subcaption_3 = get_post_meta(get_the_ID(), 'subcaption_3', true);
        //$image_size = 'full';
?>

        <!-- WE MIGHT BE ABLE TO MAKE A CUSTOM POST SECTION OUT OF THIS-->
        <h1 id="<?php echo get_the_slug(); ?>" class="text-center font-bold uppercase mb-2"><?php echo $title; ?></h1>
        <p class="max-w-[46.375rem] text-center mx-auto"><?php echo $subtitle; ?></p>

        <article class="relative grid grid-cols-3 justify-items-center mx-auto">
            <h3 class=""><?php echo $subcaption_1; ?></h3>
            <h3 class=""><?php echo $subcaption_2; ?></h3>
            <h3 class=""><?php echo $subcaption_3; ?></h3>
        </article>
        <!-- 
        Displays image galleries. 
        Gallery classes are customized in the components.css file 
        -->
        <?php the_content(); ?>

<?php
    endwhile;
else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
wp_reset_postdata();
