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
</article>