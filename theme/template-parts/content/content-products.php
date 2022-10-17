<!-- Fixed Anchor Links -->
<aside class="fixed right-11 bottom-[4.75rem] flex flex-col space-y-2">
    <!-- Should diplay all 'product' post type titles -->
    <a class="active:font-bold" href="#shaved-ice">Shaved Ice</a>
    <a class="active:font-bold" href="#drinks">Drinks</a>
</aside>

<p>Want to serve NU at your next event?</p>
<?php
$page_object = get_page_by_path("catering-services");
$page_id = $page_object->ID;
$permalink = get_permalink($page_id);
?>
<a href="<?php echo $permalink ?>">Learn more about our catering services!</a>


<?php
get_template_part('template-parts/custom-posts/product-posts', 'block');
//get_template_part('template-parts/layout/products', 'layout');
?>