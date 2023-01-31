<!--

All "home" components for this 'home' page are included in the 'home' folder in the directory. 

get_template_part('template-parts/pageges/home/home', 'image-cards');
get_template_part('template-parts/pas/home/home', 'text-slider');
get_template_part('template-parts/pages/home/home', 'image-grid');
get_template_part('template-parts/pages/home/home', 'image-slider');
get_template_part('template-parts/pages/home/home', 'press-release');
get_template_part('template-parts/pages/home/home', 'hero-section');

-->


<?php

//for now, the slider landing section is too complicated to implement. We should just utilize a static landing page  

get_template_part('template-parts/pages/home', 'landing');
get_template_part('template-parts/pages/home', 'media-bannar');
get_template_part('template-parts/pages/home', 'cards');
get_template_part('template-parts/pages/home', 'list');
//get_template_part('template-parts/pages/home/home', 'image-slider');
get_template_part('template-parts/pages/home', 'yelp');




//get_template_part('template-parts/pages/home/home', 'restofpage');
//get_template_part('template-parts/pages/home/home', 'image-cards');

?>