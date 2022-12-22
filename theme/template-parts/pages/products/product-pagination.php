<section class="mt-20 mx-auto border-y-[1px] border-white">

    <!-- the following code with loop thorugh the 'product' posts, and is handled by single-product.php-->
    <aside class="flex justify-center space-x-2 py-4">
        <?php
        $product_posts = Nu_Queries::getCPTPosts('product');
        if ($product_posts->have_posts()) : while ($product_posts->have_posts()) : $product_posts->the_post();

                the_title(sprintf('<a href="%s"><h6>', esc_url(get_permalink())), '</h6></a>');
            endwhile;
        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;
        wp_reset_postdata();

        ?>
    </aside>
</section>

<!-- <a class="active:font-bold active-product-link hover-underline-animation">
            <h6>Shaved Ice</h6>
        </a>
        <a class="active:font-bold not-active">
            <h6>Drinks</h6>
        </a>
   -->