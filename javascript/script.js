/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
 import { hamburgerMenu, navBarScroll, slider, listHover } from "./functionality";
 import { homeImageCards } from "./animations";

//homeImageCards();
 //slider();
 //listHover();
 hamburgerMenu();
 navBarScroll();

 //for smooth smae page anchor links transitions
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
  
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });

 

