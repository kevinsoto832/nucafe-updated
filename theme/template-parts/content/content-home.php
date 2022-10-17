<section class="relative top-0 mx-auto">
    <?php get_template_part('template-parts/layout/home', 'hero-section'); ?>
</section>

<?php
//like the slowpokes website
get_template_part('template-parts/layout/home', 'image-cards');
//the animation responsible for this is in the file-header.css 
get_template_part('template-parts/layout/home', 'text-slider');
get_template_part('template-parts/layout/home', 'image-grid');
?>




<?php

//get_template_part('template-parts/layout/home', 'image-slider');
?>

<section class="flex flex-col justify-center mx-auto">

    <ul class="flex items-start justify-start gap-x-4">
        <?php get_template_part('template-parts/custom-posts/press-releases-home'); ?>
    </ul>

    <button class="btn-nu mx-auto mt-4">See more Press Mentions</button>
</section>