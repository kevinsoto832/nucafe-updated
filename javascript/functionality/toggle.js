export function toggle() {
    const mobileMenu = document.querySelector("#mobile-menu");
    const desktopMenu = document.querySelector("#desktop-menu");
    let windowWidth = window.innerWidth;
  
    if (windowWidth >= 768) {
      mobileMenu.style.display = "none";
      desktopMenu.style.display = "block";
    } else {
      mobileMenu.style.display = "flex";
      desktopMenu.style.display = "none";
    }
  }