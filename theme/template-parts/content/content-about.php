<!-- 
***DOUBLE CHECK THIS***************
I don't think we need to run another custom query if we're just trying to pull 
page content. Since the code is already running in a loop (from page.php) that 
calls the_post and already pulls content from the pages, I tihnk we can simply just 
pull it by running something like 

$title_2 = get_post_meta(get_the_ID(), 'title_2', true);
$shaved_ice_image_1 = get_post_meta(get_the_ID(), 'shaved_ice_image_1', true);
-->
<?php
$about_page = Nu_Queries::getPageContent('about');
$background_image = get_post_meta(get_the_ID(), 'background_image', true);
if ($about_page->have_posts()) : while ($about_page->have_posts()) : $about_page->the_post();

    endwhile;
else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
wp_reset_postdata();
?>
<?php


//get_template_part('template-parts/layout/about-content-bg-image'); 
?>

<!-- the post_class(); is added to the <article> tag and it adds default, Wordpress generated classes. -->
<section id="post-<?php the_ID(); ?>" class="relative flex justify-between mx-auto">
    <div class="entry-content max-w-lg">
        <?php
        //h2 title tag
        the_content(); ?>
    </div>
    <div>
        <figure class="relative h-[20.75rem] w-[33.5rem]">
            <img class="absolute inset-0 h-full w-full object-cover" src="http://nu-cafe-updated.local/wp-content/uploads/2022/09/FLYER-1.jpg" alt="">
        </figure>
        <figure class="relative h-[20.75rem] w-[33.5rem]">
            <img class="absolute inset-0 h-full w-full object-cover" src="http://nu-cafe-updated.local/wp-content/uploads/2022/09/FLYER-3.jpg" alt="">
        </figure>
    </div>
</section>

<section class="flex mx-auto justify-between items-center gap-x-4">
    <article class="">
        <h2>Contact Us</h2>
        <div>
            <h4>Catering Services</h4>
            <p>We have served over to 500 drinks for gatherings and events.

                Currently, we offer bulk drink orders of 25-1,000 drinks at discounted prices. Fill out the
                form below at least a week before your next event, and we will get in touch with
                you.

                Delivery Available upon request.
                Tell us: the time, the type of drink(s), how many you need, and we will brew, prepare, and package all the drinks.

                Tell us the how many drinks, the time and location of your upcoming event, and let us brew, prepare, and package drinks for your next get-together in Houston. </p>
        </div>
        <div>
            <h4>Franchising Information</h4>
            <p>NU has been named Houston’s best artisan shaved ice and boba drink shop by various news, print, TV media outlets (Check out our press page here), and once you try it, we think you’ll agree.

                With plans to grow in the near future, the NU family is working extensively and carefully to ensure the longevity of the business.

                Although we are not actively expanding JUST yet, we get approached by people all the time who want to invest in our vision. If you love NU, and you’re serious about franchising our business, fill out the form below, and we will reach out to you. </p>
        </div>
    </article>

    <?php
    echo apply_shortcodes('[contact-form-7 id="117" title="Footer Contact Us Form html_class="contact-us-form"]');
    ?>
</section>