<section class="relative w-full h-auto md:h-[37rem] flex flex-col justify-center items-center bg-base-100 text-white">

    <div id="yelp-title" class="w-full flex mb-8">
        <span class="divider h-1 w-full bg-black"></span>
        <h2 class="mx-auto text-center min-w-fit font-bold px-8">Over 1,400 Yelp Reviews!</h2>
        <span class="divider h-1 w-full bg-black"></span>
    </div>

    <div class="flex flex-col md:flex-row justify-evenly w-full items-center">
        <?php
        get_template_part('template-parts/custom-posts/yelp-reviews');
        ?>
    </div>

    <button class="btn-nu w-max mt-8">Read More Yelp Reviews</button>

</section>