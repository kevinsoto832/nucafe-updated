<section class="p-5">
    <div class="w-max mx-auto text-center pb-5">
        <h5 class="text-sm">Thank you H-Town,for awarding us</h5>
        <h1 class="">HOUSTON'S BEST ICE CREAM SHOP!</h1>
        <h5 class="text-sm">Houston Press, Best Of Houston® 2020: Best Ice Cream</h5>
    </div>
    <?php get_template_part('template-parts/layout/home-hero-section'); ?>
    <h1 class="mx-auto w-max">Houston’s <b>Premium</b> Shaved Ice and Boba Tea shop(s) <b>since 2010.</b></h1>
</section>

<!-- <section class="flex max-w-[72.5rem] mx-auto items-center justify-between my-20"> -->
<section>
    <?php
    # get_template_part('template-parts/layout/home-image-box');
    get_template_part('template-parts/layout/home-image-slider');
    ?>
</section>

<section class="relative grid grid-cols-2fr ml-[8.75rem] mx-auto">
    <article class="">
        <h1>Houston’s <b>Premium</b> Shaved Ice and Boba Tea shop(s) <b>since 2010.</b></h1>
        <ul class="space-y-[0.188rem]">
            <?php get_template_part('template-parts/layout/home-list'); ?>
        </ul>
        <a class="btn-nu" href="/download">
            See Menu
        </a>
    </article>

    <div class="flex flex-col justify-center items-start">
        <h3>Over 1,200 Yelp Reviews!</h3>
        <!-- <h4>Over 1,200 Yelp Reviews!</h4> -->
        <?php
        get_template_part('template-parts/custom-posts/yelp-reviews');
        ?>
    </div>


</section>

<section class="max-w-[72.5rem] mx-auto">

    <div class="relative">
        <ul class="flex items-end justify-center">
            <?php get_template_part('template-parts/custom-posts/press-releases-home'); ?>

        </ul>
    </div>
</section>