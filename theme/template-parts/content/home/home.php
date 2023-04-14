<!--

All "home/home" components for this 'home/home' page are included in the 'home/home' folder in the directory. 

get_template_part('template-parts/pageges/home/home/home/home', 'image-cards');
get_template_part('template-parts/pas/home/home/home/home', 'text-slider');
get_template_part('template-parts/content/home/home/home/home', 'image-grid');
get_template_part('template-parts/content/home/home/home/home', 'image-slider');
get_template_part('template-parts/content/home/home/home/home', 'press-release');
get_template_part('template-parts/content/home/home/home/home', 'hero-section');

-->


<?php

get_template_part('template-parts/content/home/home', 'landing');
?>

<!-- MEDIA LOGO BANNAR-->
<figure class="w-full h-16 lg:h-20 md:w-[828px] my-6 mx-auto bg-no-repeat bg-cover bg-center" style="background-image: url(http://nu-cafe-updated.local/wp-content/uploads/2022/09/711press.jpg)"></figure>
<?php

get_template_part('template-parts/content/home/home', 'cards');
get_template_part('template-parts/content/home/home', 'list');
//get_template_part('template-parts/content/home/home/home/home', 'image-slider');
get_template_part('template-parts/content/home/home', 'yelp');




//get_template_part('template-parts/content/home/home/home/home', 'restofpage');
//get_template_part('template-parts/content/home/home/home/home', 'image-cards');

?>