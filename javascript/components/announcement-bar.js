export function topBarToggle() {

    const topBarToggle = document.querySelector('#topbar')
    const topBarWrapper = document.querySelector('#topBarWrapper')


     topBarToggle.addEventListener('click',() => {
        topBarWrapper.classList.add("hideme")
        console.log('announcement bar');

         })

    
}