<!-- <section class="mx-auto px-[2.625rem] mt-[10.438rem]">
    <h1 class="uppercase font-bold">Now open with two Houston Locations.</h1>
    <p>Interested in franchising? <b>Click here for more information.</b></p>
</section> -->

<h1 class="text-center text-[70px] mt-20">
    <?php
    $page_title = get_post_meta(get_the_ID(), 'page_title', true);
    echo $page_title;
    ?>
</h1>

<?php
get_template_part('template-parts/pages/locations/location-posts-2');
?>


<section id="nearest-location" class="mx-auto text-center mt-10">
    <sup>It's easy to find us.</sup>
    <h1>Enter your Zip Code below to find your nearest location</h1>
    <div class="border-1 border-white w-full h-96 mt-10"></div>
</section>