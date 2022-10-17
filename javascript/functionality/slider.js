import gsap from "gsap";

export const slider = () => {
  let boxWidth = document.querySelector("#client").clientWidth;
  let set = boxWidth * 1; //this multiplier number
  let wrapperWidth = boxWidth * 9;
  let divi = wrapperWidth * 1; //should match this multiplier number
  let tl2 = gsap.timeline();
  let dirFromLeft2 = "+=" + wrapperWidth;
  let dirFromRight2 = "-=" + wrapperWidth;

  tl2
    .set("#wrapper", {
      x: -set,
    })

    .set(".slide", {
      x: (i) => i * set,
    })

    .to(
      ".slide",
      {
        duration: 60,
        ease: "none",
        x: dirFromLeft2,
        modifiers: {
          x: gsap.utils.unitize((x) => parseFloat(x) % divi),
        },
        repeat: -1,
      },
      0
    );
};
