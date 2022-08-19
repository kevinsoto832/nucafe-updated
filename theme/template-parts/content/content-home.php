<section>
    <h5>Thank you H-Town,for awarding us</h5>
    <h1>HOUSTON'S BEST ICE CREAM SHOP!</h1>
    <h5>Houston Press, Best Of Houston® 2020: Best Ice Cream</h5>
</section>

<section>
    <h4>As Seen On</h4>
</section>

<section class="relative">
    <div class="relative">
        <h1>Houston’s Premium Shaved Ice and Boba Tea shop(s) since 2010.</h1>
        <div>
            <ul>
                <?php
                $list = Nu_Queries::getPageContent('home');

                if ($list->have_posts()) : while ($list->have_posts()) : $list->the_post();
                        $item_1 = get_post_meta(get_the_ID(), 'item_1', true);
                        $item_2 = get_post_meta(get_the_ID(), 'item_2', true);
                        $item_3 = get_post_meta(get_the_ID(), 'item_3', true);
                        $item_4 = get_post_meta(get_the_ID(), 'item_4', true);
                        $item_5 = get_post_meta(get_the_ID(), 'item_5', true);

                ?>
                        <li class="list">
                            <h3 id="<?php echo $item_1; ?>" class="hover_font-bold transition duration-200"><?php echo $item_1 ?></h3>
                        </li>
                        <li class="list">
                            <h3 id="<?php echo $item_2; ?>" class="hover_font-bold transition duration-200"><?php echo $item_2 ?></h3>
                        </li>
                        <li class="list">
                            <h3 id="<?php echo $item_3; ?>" class="hover_font-bold transition duration-200"><?php echo $item_3 ?></h3>
                        </li>
                        <li class="list">
                            <h3 id="<?php echo $item_4; ?>" class="hover_font-bold transition duration-200"><?php echo $item_4 ?></h3>
                        </li>
                        <li class="list">
                            <h3 id="<?php echo $item_5; ?>" class="hover_font-bold transition duration-200"><?php echo $item_5 ?></h3>
                        </li>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    _e('Sorry, no posts matched your criteria.', 'textdomain');
                endif;
                ?>
            </ul>
            <a class="inline-block px-12 py-3 text-sm font-medium text-nu-black border border-nu-black rounded hover:bg-nu-black hover:text-white active:bg-nu-black focus:outline-none focus:ring" href="/download">
                Download
            </a>
        </div>
        <aside class="relative">
            <h2>Over 1,200 Yelp Reviews!</h2>
            <?php
            get_template_part('template-parts/custom-posts/yelp-reviews');
            ?>
        </aside>
    </div>
</section>

<section>
    <div>
        <h3>Media Mentions</h3>
    </div>
    <div class="relative">
        <ul>
            <?php get_template_part('template-parts/custom-posts/press-releases'); ?>

        </ul>
    </div>
</section>