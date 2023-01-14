/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

 import barba from "@barba/core";
 import { hamburgerMenu, navBarScroll, slider, listHover, announcementBarToggle } from "./components";
 import { heroSlider } from "./page";
 import { dropdown, formFunctionality} from "./functionality";


 //beforeEnter is an example of a barba hook. Hooks such as enter and leave are only available when used with transitions. 

//it seems like when you use the try/catch, it "tries" to execute the functions, but if it doesn't, then it won't immediately 
//just stop the entire script like if you just normally called it. coooool.

//  try {
//   slider();
//   heroSlider();
//   listHover();
// } catch (error) {
//   console.error(error);
// }

 barba.init({

  views: [
    {
    namespace: 'home',
    beforeEnter(data) {
      try {
        //slider();
        //heroSlider();
        listHover();
        //12/30/22 7pm topbartoggle still runs when you go back to home. 
        //announcementBarToggle();
      } catch (error) {
        console.error(error);
        console.log('beforeEnter - home didnt work');
      }

      // slider();
      // heroSlider();
      
    }
   },
  {
    namespace: 'careers',
    beforeEnter(data) {
    
      try {
        //formFunctionality();
        console.log('form functionality fired off');
      } catch (error) {
        console.error(error);
        console.log('form functionality script didnt work');
      }
    }
  },
  // {
  //   namespace: 'products',
  //   beforeEnter(data) {
  //     console.log(data , "before enter products");
      
  //   }
  // },
  // {
  //   namespace: 'locations',
  //   beforeEnter(data) {
  //     console.log(data , "before enter locations");
      
  //   }
  // },
  // {
  //   namespace: 'press',
  //   beforeEnter(data) {
  //     console.log(data , "before enter press");
      
  //   }
  // },
],

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



document.addEventListener('DOMContentLoaded', function(){
  
  console.log("DOM Loaded");
   //Adds data attributes to the following elements. 
   //Used for the dropdown
   var productLITag = document.getElementById('menu-item-353');
   var productLink = document.querySelector('#menu-item-353>a');
   var contactLITag = document.getElementById('menu-item-52');
   var contactLink = document.querySelector('#menu-item-52>a');
   // console.log(el2);
   productLITag.setAttribute('data-dropdown', "");
   productLink.setAttribute('data-dropdown-button', "");
   contactLITag.setAttribute('data-dropdown', "");
   contactLink.setAttribute('data-dropdown-button', "");
  
  dropdown();
  hamburgerMenu();
  navBarScroll();
  // listHover();
  // heroSlider();

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


