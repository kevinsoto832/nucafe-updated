/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

 import barba from "@barba/core";
 import { hamburgerMenu, navBarScroll, slider, listHover, topBarToggle } from "./components";
 import { heroSlider } from "./page";
 import { dropdown } from "./functionality";

 //Adds data attributes to the following elements. 
 var productLITag = document.getElementById('menu-item-56');
 var productLink = document.querySelector('#menu-item-56>a');
 // console.log(el2);
 productLITag.setAttribute('data-dropdown', "");
 productLink.setAttribute('data-dropdown-button', "");

//homeImageCards();
console.clear();
console.log('before barba');

dropdown();

//Slider Should oNLY be ran on HOME PAGE. Else, an error will occur, and the scripts running below it will not execute.
slider();
 //listHover();
 hamburgerMenu();
 navBarScroll();
 heroSlider();


 barba.init({

  views: [{
    namespace: 'home',
    beforeEnter(data) {
      topBarToggle();
    }
  }],

  transitions: [{
    name: 'default-transition',
    leave() {
      // create your stunning leave animation here
    },
    enter() {
      // create your amazing enter animation here
    }
  }]
  
});

 //for smooth smae page anchor links transitions
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
  
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });

  console.log('after barba');

