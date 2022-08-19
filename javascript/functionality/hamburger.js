export function hamburgerMenu() {
    const checked = document.querySelector("#checked");
    const headerScreen = document.querySelector("#header-mb-menu");
    const span1 = document.querySelector("#span1");
    const span2 = document.querySelector("#span2");
    const span3 = document.querySelector("#span3");
    const html = document.querySelector("html");
    const menu = document.querySelectorAll("#menu-mobile-menu li a");
  
    checked.addEventListener("click", (e) => {
      headerScreen.classList.toggle("is-open");
      html.classList.toggle("overflow-y-hidden");
      span1.classList.toggle("span-1");
      span2.classList.toggle("span-2");
      span3.classList.toggle("span-3");
    });
  
    menu.forEach((item) => {
      item.addEventListener("click", (e) => {
        headerScreen.classList.toggle("is-open");
        html.classList.toggle("overflow-y-hidden");
        span1.classList.toggle("span-1");
        span2.classList.toggle("span-2");
        span3.classList.toggle("span-3");
      });
    });
  
    console.log("hamburger working");
  }