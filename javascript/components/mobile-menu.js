import gsap from "gsap";


export function setMobileMenu(isMobileActive) {
  const toggle = document.querySelector('.hamburger')
  const navBar = document.querySelector('#primary-menu')
  const navBarLinks = document.querySelectorAll('#primary-menu li')
  const div = document.querySelector('#page')
  const hamburgerSpan = document.querySelectorAll('.hamburger-span')

   if(!isMobileActive) {
    gsap.set(navBar, { xPercent: 0 });
    console.log("This is NOT a Mobile Device");
    return; 
   }

   if (isMobileActive) {
    gsap.set(navBar, { xPercent: -100 });

    toggle.addEventListener('click',() => {
        navBar.classList.toggle('active')
        div.classList.toggle('overflow-hidden')

        hamburgerSpan.forEach(bar => {
            bar.classList.toggle('active')
        })

        gsap.to(navBar, {
          duration: 0.5,
          xPercent: navBar.classList.contains('active') ? 0 : -100,
          ease: 'cubic-bezier(0.77, 0.2, 0.05, 1)',
        });
    })

    navBarLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (!navBar.classList.contains('active')) {
          return;
        }

        gsap.to(navBar, {
          duration: 0.2,
          xPercent: -100,
          ease: 'cubic-bezier(0.77, 0.2, 0.05, 1)',
        });

        if(navBar.classList.contains('active')) navBar.classList.remove('active')
        if(div.classList.contains('overflow-hidden')) div.classList.remove('active')

        hamburgerSpan.forEach(bar => {
          if(bar.classList.contains('active')) bar.classList.remove('active')
        })
      })
    })

    console.log('This is a Mobile Device')
   }
}
