<?php
$contact_us_title = get_post_meta(get_the_ID(), 'contact_us_title', true);
$contact_us_description = get_post_meta(get_the_ID(), 'contact_us_description', true);
?>

<section id="contact-us">
    <h1><?php echo $contact_us_title; ?></h1>
    <p><?php echo $contact_us_description; ?></p>

    <?php
    echo apply_shortcodes('[contact-form-7 id="117" title="Footer Contact Us Form html_class="contact-us-form mt-20"]');
    ?>
</section>