<section class="relative grid grid-cols-2fr mx-auto mt-24">

    <div class="space-y-10">
        <article class="">
            <h1>Houston’s <b>Premium</b> Shaved Ice and Boba Tea <br>shop(s) <b>since 2010.</b></h1>
            <div id="blackBar" class="z-10 bg-white h-1 w-[48.33rem] my-6"></div>
            <div class="flex justify-between">
                <?php
                get_template_part('template-parts/components/home', 'list');
                ?>
            </div>
            <button class="btn-nu">See Menu</button>
            <!-- <a class="btn-nu" href="/download">
                See Menu
            </a> -->
        </article>

        <article class="">
            <h1>It took us <b class="font-bold">7 years</b>, and <b class="font-bold">over 1,250</b>
                experiments to perfected our
                NU shaved ice.</h1>
            <div id="blackBar" class="z-10 bg-white h-1 w-[48.33rem] my-6"></div>
            <div class="flex justify-between">
                <h3>
                    Made with<br>
                    fresh fruit &<br>
                    real ingredients.<br>
                    Handcrafted by our<br>
                    skilled employees.
                </h3>
                <figure id="background" class="relative mr-4 border-6 h-64 w-[22.5rem]">
                    <img class="absolute inset-0 h-full w-full object-cover" src="http://nu-cafe-updated.local/wp-content/uploads/2022/09/DSC03787.jpg" alt="">
                </figure>
            </div>
            <button class="btn-nu">See Menu</button>
            <!-- <a class="btn-nu" href="/download">
                See Menu
            </a> -->
        </article>
    </div>

    <div class="flex flex-col justify-center items-start ml-6">
        <h3>Over 1,400 Yelp Reviews!</h3>
        <!-- <h4>Over 1,400 Yelp Reviews!</h4> -->
        <?php
        get_template_part('template-parts/com/yelp-reviews');
        ?>
        <button class="btn-nu">Read More Yelp Reviews</button>
    </div>
</section>