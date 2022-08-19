<?php
$title_1 = get_post_meta(get_the_ID(), 'title_1', true);
$title_2 = get_post_meta(get_the_ID(), 'title_2', true);
$shaved_ice_image_1 = get_post_meta(get_the_ID(), 'shaved_ice_image_1', true);
$shaved_ice_image_2 = get_post_meta(get_the_ID(), 'shaved_ice_image_2', true);
$shaved_ice_image_3 = get_post_meta(get_the_ID(), 'shaved_ice_image_3', true);
$shaved_ice_subcaption = get_post_meta(get_the_ID(), 'shaved_ice_subcaption', true);
$drink_subcaption = get_post_meta(get_the_ID(), 'drink_subcaption', true);
$drink_image_1 = get_post_meta(get_the_ID(), 'drink_image_1', true);
$drink_image_2 = get_post_meta(get_the_ID(), 'drink_image_2', true);
$drink_image_3 = get_post_meta(get_the_ID(), 'drink_image_3', true);
$shaved_ice_image_1_caption = get_post_meta(get_the_ID(), 'shaved_ice_image_1_caption', true);
$shaved_ice_image_2_caption = get_post_meta(get_the_ID(), 'shaved_ice_image_2_caption', true);
$shaved_ice_image_3_caption = get_post_meta(get_the_ID(), 'shaved_ice_image_3_caption', true);
$drink_image_1_caption = get_post_meta(get_the_ID(), 'drink_image_1_caption', true);
$drink_image_2_caption = get_post_meta(get_the_ID(), 'drink_image_2_caption', true);
$drink_image_3_caption = get_post_meta(get_the_ID(), 'drink_image_3_caption', true);

?>
<h1><?php echo $title_1; ?></h1>
<h3><?php echo $shaved_ice_subcaption; ?></h3>

<article>
    <div>
        <h3><?php echo $shaved_ice_image_1_caption; ?></h3>
    </div>
    <div>
        <h3><?php echo $shaved_ice_image_2_caption; ?></h3>
    </div>
    <div>
        <h3><?php echo $shaved_ice_image_3_caption; ?></h3>
    </div>
</article>


<h1><?php echo $title_2; ?></h1>
<h3><?php echo $drink_subcaption; ?></h3>

<article>
    <div>
        <h3><?php echo $drink_image_1_caption; ?></h3>
    </div>
    <div>
        <h3><?php echo $drink_image_2_caption; ?></h3>
    </div>
    <div>
        <h3><?php echo $drink_image_3_caption; ?></h3>
    </div>
</article>