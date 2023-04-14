import gsap from "gsap"

export const homeEnterTransition = () => {
    
    const menuLinks = document.querySelectorAll('.menu-item')
    const navBar = document.querySelectorAll('#site-navigation')

    gsap.from(menuLinks, {
        duration: 1,
        y: 20, 
        stagger: 0.25
    })

    // const tl = gsap.timeline({
    //     defaults: {
    //         duration: 0.9, ease:'power4.out'
    //     }
    // })

    // tl.
}

  