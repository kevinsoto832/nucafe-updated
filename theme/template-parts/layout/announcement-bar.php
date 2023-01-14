<?php
//announcement bar will only work on the home page
if (is_front_page()) : ?>

    <article id="topBarWrapper" class="rainbow py-[10px] relative">
        <h5 class="z-50 text-black font-medium text-center">Now through the end of August, get 50%off any boba milk drink of your choice!</h5>
        <!-- ANIMATED X BUTTON -->
        <button id="topbar" class="btn btn-circle btn-xs absolute right-8 top-[21%]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </article>
<?php
else : ?>
    <article class="hidden"></article>
<?php
endif; ?>