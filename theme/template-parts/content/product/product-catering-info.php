<?php
//THIS IS WHAT I NEEDED FOR THE FOOTER
//this bit of code gets the permalink to the catering services page, which is not in the main navigation
$page_object = get_page_by_path("catering-services");
$page_id = $page_object->ID;
$permalink = get_permalink($page_id);
?>

<section class="w-[513px]">
    <h5 class="text-[13px]">Catering Information</h5>
    <h1>Want to serve delicious bubble tea at your next event? </h1>
    <p>We have served over to 500 drinks for gatherings and events. <br><br>

        Currently, we offer bulk drink orders of 25-1,000 drinks at discounted prices. Fill out the form below at least a week before your next event, and we will get in touch with you.<br><br>

        Delivery Available upon request.
        Tell us: the time, the type of drink(s), how many you need, and we will brew, prepare, and package all the drinks. <br><br>

        Tell us the how many drinks, the time and location of your upcoming event, and let us brew, prepare, and package drinks for your next get-together in Houston. </p>
    <a class="btn-nu" href="<?php echo $permalink ?>">Learn more about our catering services!</a>
</section>