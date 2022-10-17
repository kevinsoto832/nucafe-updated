<?php $reviews = Nu_Queries::getCPTPosts('review');

if ($reviews->have_posts()) : while ($reviews->have_posts()) : $reviews->the_post(); ?>

        <article class="relative max-w-[17.375rem]">
            <?php #get_template_part('svg/inline', 'yelp-comma.svg'); 
            ?>

            <?php the_content(); ?>
            <p class=""><?php the_title(); ?></p>
        </article>
<?php
    endwhile;
else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
wp_reset_postdata();
