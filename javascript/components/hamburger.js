export function hamburgerMenu() {

    const toggleButton = document.getElementsByClassName('toggle-button')[0]
    const navbarLinks = document.querySelector('#primary-menu')
    const hamburgerBar = document.getElementsByClassName('bar')

    toggleButton.addEventListener('click',() => {

        navbarLinks.classList.toggle('active')

        for (var i = 0; i < hamburgerBar.length; i++) {
            hamburgerBar[i].classList.toggle('active')
          }

        })

    }