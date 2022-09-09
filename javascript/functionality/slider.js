import gsap from "gsap";

export const slider = () => {
  let divWidth2 = document.querySelector("#client2").clientWidth;
  let set = divWidth2 * 1.1;
  let wrapperWidth2 = divWidth2 * 10;
  let divi = wrapperWidth2 * 1.1;
  let tl2 = gsap.timeline();
  let dirFromLeft2 = "+=" + wrapperWidth2;
  let dirFromRight2 = "-=" + wrapperWidth2;

  tl2
    .set("#wrapper2", {
      x: -set,
    })

    .set(".slide2", {
      x: (i) => i * set,
    })

    .to(
      ".slide2",
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
