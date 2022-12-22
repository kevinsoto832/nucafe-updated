import gsap from "gsap";

export const slider = () => {
  const imageSlides = document.querySelectorAll(".image-slide");
  // let imageSlides = gsap.utils.toArray(".image-slide"); 
  let boxWidth = document.querySelector("#client").clientWidth;
  let set = boxWidth + 2; //this multiplier number
  let numberOfImageSlides = imageSlides.length;
  let wrapperWidth = boxWidth * numberOfImageSlides;
  let divi = wrapperWidth * 1; //should match this multiplier number
  let tl = gsap.timeline();
  let goLeft = "+=" + wrapperWidth;
  let goRight = "-=" + wrapperWidth;

  tl
    .set("#imageSliderWrapper", {
      x: -set,
    })

    .set(".image-slide", {
      x: (i) => i * 16,
    })

    .to(
      ".image-slide",
      {
        duration: 60,
        ease: "none",
        x: goLeft,
        modifiers: {
          x: gsap.utils.unitize((x) => parseFloat(x) % divi),
        },
        repeat: -1,
      },
      0
    );

     console.log(imageSlides.length)
    // console.log(targets)
};


// var colors = ["#f38630","#6fb936", "#ccc", "#6fb936"];

// //initially colorize each box and position in a row
// gsap.set(".box", {
//   backgroundColor: (i) => colors[i % colors.length],
//   x: (i) => i * 50
// });


// gsap.to(".box", {
//   duration: 5,
//   ease: "none",
//   x: "+=500", //move each box 500px to right
//   modifiers: {
//     x: gsap.utils.unitize(x => parseFloat(x) % 500) //force x value to be between 0 and 500 using modulus
//   },
//   repeat: -1
// });


// //toggle overflow
// const overflow = document.querySelector("#overflow");
// overflow.addEventListener("change", applyOverflow);

// function applyOverflow() {
//   if(overflow.checked) {
//     gsap.set(".wrapper", {overflow: "visible"});
//   } else {
//     gsap.set(".wrapper", {overflow: "hidden"});
//   }
// }