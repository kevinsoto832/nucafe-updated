<!-- 

grid-cols-2fr = Simple 16 column grid *
'2fr': '2fr 1fr',

Arbitrary Value Version:
grid-cols-[200px_minmax(900px,_1fr)_100px]

the minmax() function can be used with columns as well.

*Defined in the tailwind.config file
-->


<section class="mt-28 mb-10 h-[418px] w-[1376px] mx-auto grid grid-cols-[2fr_1fr_1fr_1fr] grid-rows-[209px_209px] gap-x-4 items-center justify-items-center">
    <figure class="h-[418px] w-[564px] bg-no-repeat bg-cover bg-center col-start-1 col-end-2 row-start-1 row-end-3" style="background-image: url(http://nu-cafe-updated.local/wp-content/uploads/2022/08/DSC03702-1.jpg);"></figure>
    <figure class="h-[418px] w-[215.4px] bg-no-repeat bg-cover bg-center col-start-2 col-end-3 row-start-1 row-end-3" style="background-image: url(http://nu-cafe-updated.local/wp-content/uploads/2022/08/DSC03702-1.jpg);"></figure>
    <figure class="h-[201px] w-[275.2px] bg-no-repeat bg-cover bg-center col-start-3 col-end-4 row-start-1 row-end-2 self-start" style="background-image: url(http://nu-cafe-updated.local/wp-content/uploads/2022/08/DSC03702-1.jpg);"></figure>
    <figure class="h-[201px] w-[275.2px] bg-no-repeat bg-cover bg-center col-start-3 col-end-4 row-start-2 row-end-3 self-end" style="background-image: url(http://nu-cafe-updated.local/wp-content/uploads/2022/08/DSC03702-1.jpg);"></figure>
    <figure class="h-[418px] w-[275.2px] bg-no-repeat bg-cover bg-center col-start-4 col-end-5 row-start-1 row-end-3" style="background-image: url(http://nu-cafe-updated.local/wp-content/uploads/2022/08/DSC03702-1.jpg);"></figure>


</section>

<!-- 
    
TEMPLATE IMAGE GRID. YOU CAN JUST ADJUST THE HEIGHT AND WIDTH VALUES, 
ALONG WITH THE GRID PLAYOUT TO EASILY CREATE YOUR OWN GRID WITH TAILWIND.
KEEP IN MIND THAT THE HEIGHT AND WIDTH VALUES ARE IN PIXELS, NOT REM, MEANING THAT IT'S NOT ALL THE WAY RESPONSIVE.

<section class="mt-28 mb-10 h-[418px] w-[1376px] mx-auto grid grid-cols-[2fr_1fr_1fr_1fr] grid-rows-[209px_209px] gap-x-4 items-center justify-items-center bg-red-200">
    <figure class="h-[418px] w-[564px] bg-blue-200 col-start-1 col-end-2 row-start-1 row-end-3" ></figure>
    <figure class="h-[418px] w-[215.4px] bg-blue-300 col-start-2 col-end-3 row-start-1 row-end-3"></figure>
    <figure class="h-[201px] w-[275.2px] bg-blue-400 col-start-3 col-end-4 row-start-1 row-end-2 self-start"></figure>
    <figure class="h-[201px] w-[275.2px] bg-blue-500 col-start-3 col-end-4 row-start-2 row-end-3 self-end"></figure>
    <figure class="h-[418px] w-[275.2px] bg-blue-200 col-start-4 col-end-5 row-start-1 row-end-3"></figure>
</section> 

-->

<!-- <section class="mt-28 mb-10 h-[26.125rem] mx-auto grid grid-cols-4 grid-rows-2 justify-around bg-red-200">
    <figure class="h-[26.125rem] w-[19.75rem] bg-no-repeat bg-cover bg-center col-start-1 row-span-2 bg-blue-200"></figure>
    <figure class="h-[26.125rem] w-[29rem] bg-no-repeat bg-cover bg-center col-start-2 row-span-2 bg-blue-300"></figure>
    <figure class="h-[14.75rem] w-[14.5rem] bg-no-repeat bg-cover bg-center col-start-3 row-span-1 bg-blue-400"></figure>
    <figure class="h-[14.75rem] w-[14.5rem] bg-no-repeat bg-cover bg-center col-start-3 row-span-1 bg-blue-500"></figure>
    <figure class="h-[26.125rem] w-[19.75rem] bg-no-repeat bg-cover bg-center col-start-4 row-start-1 row-end-3 bg-blue-200"></figure>
</section> -->

<!-- 
    <figure><img src="http://nu-cafe-updated.local/wp-content/uploads/2022/08/DSC03702-1.jpg" alt="Shoes" /></figure> 
style="background-image: url(http://nu-cafe-updated.local/wp-content/uploads/2022/08/DSC03702-1.jpg);"
-->