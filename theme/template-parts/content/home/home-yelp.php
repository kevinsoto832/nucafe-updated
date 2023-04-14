<section class="relative w-full h-auto md:h-[70vh] flex flex-col justify-center items-center bg-base-100 text-white">
    <div id="yelp-title" class="w-full flex mb-8">
        <span class="divider h-1 w-full bg-white"></span>
        <h4 class="mx-auto text-center min-w-fit font-semibold text-white text-[1.75rem] px-4">Over 1,400 Yelp Reviews!</h4>
        <span class="divider h-1 w-full bg-white"></span>
    </div>

    <div class="flex flex-col md:flex-row justify-evenly w-full items-center mb-4">
        <?php 
        $reviews = Nu_Queries::getCPTPosts('review');
            if ($reviews->have_posts()) : 
                while ($reviews->have_posts()) : $reviews->the_post(); ?>

                <article class="relative w-[17.375rem] h-[16.5rem]">
                    <div class="mb-4 text-white"> <?php get_template_part('./svg/inline', 'stars.svg'); ?> </div>

                    <?php the_content(); ?>

                    <!-- Yelp Reviewer name -->
                    <div class="flex justify-between items-center mt-8">
                        <div class="avatar">
                            <div class="w-9 rounded-full">
                                <img src="https://placeimg.com/192/192/people" />
                            </div>
                        </div>
                        <p class=""><?php the_title(); ?></p>
                    </div>
                </article>
        <?php
            endwhile;
        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;
        wp_reset_postdata(); ?>
    </div>

    <!-- <button class="btn-nu w-max mt-8">Read More Yelp Reviews</button> -->
        <?php
            $button_text = 'Reviews';
            $page_url = '/press';
            include __DIR__ . '/../../layout/button.php';
        ?>
</section>