<section class="w-full flex flex-col justify-center items-center">

    <div id="yelp-title" class="w-full flex">
        <span class="divider w-full"></span>
        <h3 class="mx-auto text-center min-w-fit">Over 1,400 Yelp Reviews!</h3>
        <span class="divider w-full"></span>
    </div>

    <div class="flex justify-center">
        <?php
        get_template_part('template-parts/custom-posts/yelp-reviews');
        ?>
    </div>

    <button class="btn-nu w-max">Read More Yelp Reviews</button>

</section>