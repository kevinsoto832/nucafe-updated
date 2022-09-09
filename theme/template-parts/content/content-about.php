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
<!-- the post_class(); is added to the <article> tag and it adds default, Wordpress generated classes. -->
<article id="post-<?php the_ID(); ?>" class="relative -top-20">
    <div class="hero min-h-screen" style="background-image: url(<?php echo wp_get_attachment_image_url($background_image, "full"); ?>);">
        <!-- bg-gradient-to-r from-nu-black -->
        <div class="hero-overlay"></div>
        <div class="hero-content pt-[18.75rem] pb-0 pl-0 pr-0">
            <div class="max-w-6xl">
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->

<!-- FORM -->
<?php echo apply_shortcodes('[contact-form-7 id="117" title="Footer Contact Us Form"]'); ?>