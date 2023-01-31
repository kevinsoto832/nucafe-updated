export function hamburgerMenu() {

    const toggleButton = document.querySelector('.toggle-button')
    const linkContainer = document.querySelector('#primary-menu')
    const navLinks = document.querySelectorAll('#primary-menu li')
    const divPage = document.querySelector('#page')
    const hamburgerBar = document.querySelectorAll('.bar')

    toggleButton.addEventListener('click',() => {

        linkContainer.classList.toggle('active')
        divPage.classList.toggle('overflow-hidden')

          hamburgerBar.forEach(bar => {
            bar.classList.toggle('active')
          })
        })

    navLinks.forEach(link => {

      link.addEventListener('click', () => {

        if(linkContainer.classList.contains('active')) linkContainer.classList.remove('active')
        if(divPage.classList.contains('overflow-hidden')) divPage.classList.remove('active')

        hamburgerBar.forEach(bar => {
          if(bar.classList.contains('active')) bar.classList.remove('active')
        })

      })
    })

      

    }

    // if the navbarlinks has the class active in it, then target the div 
    //with the id of page and change the overflow-x-hidden to overflow-hidden