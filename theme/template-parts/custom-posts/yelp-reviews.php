<?php $reviews = Nu_Queries::getCPTPosts('review');

if ($reviews->have_posts()) : while ($reviews->have_posts()) : $reviews->the_post(); ?>

        <section class="relative h-72 w-96">
            <?php get_template_part('svg/inline', 'yelp-comma.svg'); ?>
            <figcaption>
                <h3><?php the_content(); ?></h3> <br>
                <h3><?php the_title(); ?></h3>
            </figcaption>
        </section>
<?php
    endwhile;
else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
wp_reset_postdata();
