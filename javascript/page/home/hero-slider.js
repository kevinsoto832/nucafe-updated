import gsap from "gsap";
//import { Draggable } from "gsap/Draggable";

//gsap.registerPlugin(Draggable);

export function heroSlider() {

   //console.clear();

   const slides = document.querySelectorAll(".slide");
   const container = document.querySelector("#wrapper");
   let dur = 0.5;
   let offsets = [];
   let oldSlide = 0;
   let activeSlide = 0;
   let dotContainer = document.querySelector(".dots");
   let dotArray = [];
   let iw = window.innerWidth;

  // document.querySelector("#leftArrow").addEventListener("click", slideAnim);
   document.querySelector("#rightArrow").addEventListener("click", slideAnim);
  
  // creates nav dots based on the number of slides (.slide class) there are 
   for (let i = 0; i < slides.length; i++) {
    //gsap.set(slides[i]);
     let newDot = document.createElement("div");
     newDot.className = "dot";
     newDot.index = i;
     dotArray.push(newDot);
     newDot.addEventListener("click", slideAnim);
     dotContainer.appendChild(newDot);
   }
  
  // get elements positioned
  // gsap.set(".dots", { xPercent: -50 });
  // gsap.set(".arrow", { yPercent: -50 });

  
  // // lower screen animation with nav dots and rotating titles
  const dotAnim = gsap.timeline({ paused: true });
  dotAnim.to(
    ".dot",
    {
      stagger: { each: 1, yoyo: true, repeat: 1 },
      scale: 2.1,
      rotation: 0.1,
      ease: "none"
    },
    0.5
  );
  dotAnim.to(
    ".title",
    slides.length + 1,
    { y: -(slides.length * 30), rotation: 0.01, ease: "none" },
    0
  );
  dotAnim.time(1);
  

  // window.addEventListener("load", (event) => {
  //   slideAnim();
  // });


// function animate() {
//   gsap.to(container, dur, { 
//         x: offsets[activeSlide], onUpdate: tweenDot,
//       });
//   slideAnim();
//   }
// var myInterval = setInterval(animate, 2000);
//   animate();

  // // make the whole thing draggable
  // let dragMe = Draggable.create(container, {
  //   type: "x",
  //   edgeResistance: 1,
  //   snap: offsets,
  //   inertia: true,
  //   bounds: "#masterWrap",
  //   onDrag: tweenDot,
  //   onThrowUpdate: tweenDot,
  //   onDragEnd: slideAnim,
  //   allowNativeTouchScrolling: false,
  //   zIndexBoost: false
  // });
  
  // dragMe[0].id = "dragger";
   sizeIt();
  
  // // main action check which of the 4 types of interaction called the function
  function slideAnim(e) {
    oldSlide = activeSlide;
    // dragging the panels
    if (this.id === "dragger") {
      activeSlide = offsets.indexOf(this.endX);
    } else {
      if (gsap.isTweening(container)) {
        return;
      }
      // arrow clicks
      if (this.id === "leftArrow" || this.id === "rightArrow") {
        activeSlide =
          this.id === "rightArrow" ? (activeSlide += 1) : (activeSlide -= 1);
        // click on a dot
      } else if (this.className === "dot") {
        activeSlide = this.index;
        // scrollwheel
      } else {
        // activeSlide = e.deltaY > 0 ? (activeSlide += 1) : (activeSlide -= 1);
        activeSlide = this.index;
      }
    }
    // make sure we're not past the end or beginning slide
    activeSlide = activeSlide < 0 ? 0 : activeSlide;
    activeSlide = activeSlide > slides.length - 1 ? slides.length - 1 : activeSlide;
    if (oldSlide === activeSlide) {
      return;
    }
    //if we're dragging we don't animate the container
    if (this.id != "dragger") {
      gsap.to(container, dur, { x: offsets[activeSlide], onUpdate: tweenDot });
    }
  }
  
  // // update the draggable element snap points
  function sizeIt() {
    offsets = [];
    iw = window.innerWidth;
    gsap.set("#wrapper", { width: slides.length * iw });
    gsap.set(slides, { width: iw });
    for (let i = 0; i < slides.length; i++) {
      offsets.push(-slides[i].offsetLeft);
    }
    gsap.set(container, { x: offsets[activeSlide] });
    //dragMe[0].vars.snap = offsets;
  }
  
  // gsap.set(".hideMe", { opacity: 1 });
  // window.addEventListener("wheel", slideAnim);
   window.addEventListener("resize", sizeIt);
  
  // update dot animation when dragger moves
  function tweenDot() {
    gsap.set(dotAnim, {
      time: Math.abs(gsap.getProperty(container, "x") / iw) + 1
    });
  }
  
  }
