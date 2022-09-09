<?php
$list = Nu_Queries::getPageContent('home');

if ($list->have_posts()) : while ($list->have_posts()) : $list->the_post();
        $item_1 = get_post_meta(get_the_ID(), 'item_1', true);
        $item_2 = get_post_meta(get_the_ID(), 'item_2', true);
        $item_3 = get_post_meta(get_the_ID(), 'item_3', true);
        $item_4 = get_post_meta(get_the_ID(), 'item_4', true);
        $item_5 = get_post_meta(get_the_ID(), 'item_5', true);

?>

        <li class="relative">
            <h3 id="<?php echo $item_1; ?>" class="z-10 relative"><?php echo $item_1 ?></h3>
        </li>
        <li class="relative">
            <h3 id="<?php echo $item_2; ?>" class=""><?php echo $item_2 ?></h3>
        </li>
        <li class="relative">
            <h3 id="<?php echo $item_3; ?>" class=""><?php echo $item_3 ?></h3>
        </li>
        <li class="relative">
            <h3 id="<?php echo $item_4; ?>" class=""><?php echo $item_4 ?></h3>
        </li>
        <li class="relative">
            <h3 id="<?php echo $item_5; ?>" class=""><?php echo $item_5 ?></h3>
        </li>
<?php
    endwhile;
    wp_reset_postdata();
else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
?>