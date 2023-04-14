<!-- This landing section 2 for Home is a static solution for home landing setion 1 -->

<div class="hero min-h-[74vh] md:min-h-[80vh] md:bg-contain bg-no-repeat" style="background-image: url(http://nu-cafe-updated.local/wp-content/uploads/2023/01/Group-376.jpg);">
    <!-- overlay -->
    <div class="hero-overlay bg-opacity-60"></div>
    <div id="home-landing" class="hero-content md:border-4 md:border-nu-black mt-10 flex-col text-center text-neutral-content font-black p-2 xs:p-4 md:p-6 lg:p-8">
        <div class="max-w-full text-white md:text-nu-black">
            <h4 class="mb-1 text-[1.5rem] font-medium">Thank you H-Town,for awarding us</h4>
            <h1 class="font-bold">HOUSTON'S BEST ICE CREAM SHOP!</h1>
            <p class="text-[1rem] font-light">Houston Press, Best Of Houston® 2020: Best Ice Cream</p>
        </div>
        <div class="flex flex-col xs:flex-row gap-y-1 xs:gap-x-2">

        <?php
        $button_text = 'Locations';
        $page_url = '/locations';
        include __DIR__ . '/../../components/button.php';

        $button_text = 'Contact Us';
        $page_url = '/about';
        include __DIR__ . '/../../components/button-white.php';
        ?>

            <!-- <a href="#" class="btn-nu">Products</a>
            <a href="#" class="btn-nu">Locations</a> -->
        </div>
    </div>
</div>