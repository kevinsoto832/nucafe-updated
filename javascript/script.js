/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import barba from "@barba/core";
import {
	setMobileMenu,
	navBarScroll,
	slider,
	listHover,
	announcementBarToggle,
} from "./components";
import { heroSlider } from "./page";
import { dropdown, formFunctionality } from "./functionality"; 
import { enterTransition, leaveTransition, homeEnterTransition } from "./page-transitions";


function checkDeviceWidth() {
	if (!(window.innerWidth <= 767)) {
		setMobileMenu(false);
	}

	if (window.innerWidth <= 767) {
	  setMobileMenu(true);
	}
  }
  
  // Immediately invoked function expression (IIFE)
  (function() {
	checkDeviceWidth(); 
  })();
  
//Check for resize of window 
window.addEventListener('resize', checkDeviceWidth);

barba.init({
	transitions: [
		{
      // once({next}) {
      //   leaveTransition(next.container)
      // },
			leave({current}) {
				leaveTransition(current.container)
			},
			enter({next}) {
				enterTransition(next.container)
			},
		},
	],

	views: [
		{
			namespace: "home",
			beforeEnter(data) {
				try {
					//slider();
					//heroSlider();
					listHover();
					//12/30/22 7pm topbartoggle still runs when you go back to home.
					//announcementBarToggle();
				} catch (error) {
					console.error(error);
					console.log("beforeEnter - home didnt work");
				}
				// slider();
				// heroSlider();
			},
		},
		{
			namespace: "careers",
			beforeEnter(data) {
				try {
					//formFunctionality();
					console.log("form functionality fired off");
				} catch (error) {
					console.error(error);
					console.log("form functionality script didnt work");
				}
			},
		},
	],
});


//Executes AFTER DOM is loaded. 
document.addEventListener("DOMContentLoaded", () => {
	navBarScroll();
})
