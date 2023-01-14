<?php $reviews = Nu_Queries::getCPTPosts('review');

if ($reviews->have_posts()) : while ($reviews->have_posts()) : $reviews->the_post(); ?>

        <article class="relative w-[17.375rem] h-[16.5rem]">
            <div class="mb-4">
                <?php
                //stars
                get_template_part('./svg/inline', 'stars.svg');
                ?>
            </div>


            <?php the_content(); ?>

            <!-- Yelp Reviewer name -->
            <div class="flex justify-start items-end mt-8">

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
wp_reset_postdata();
