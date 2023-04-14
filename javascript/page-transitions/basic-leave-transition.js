import gsap from "gsap"

export const leaveTransition = (container) => {
    return gsap.to(container, {
        autoAlpha:0,
        duration: 1, 
        clearProps: "all",
        ease: 'none'
    })
}

  