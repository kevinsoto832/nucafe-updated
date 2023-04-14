import gsap from "gsap"

export const enterTransition = (container) => {
    return gsap.from(container, {
        autoAlpha:0,
        duration: .4, 
        clearProps: "all",
        ease: 'none'
    })
}

  