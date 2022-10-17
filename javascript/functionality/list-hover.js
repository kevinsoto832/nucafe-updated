export function listHover() {

  //add that shi
    const item1 = document.querySelector("#item_1");
    const item2 = document.querySelector("#item_2");
    const item3 = document.querySelector("#item_3");
    const item4 = document.querySelector("#item_4");
    const item5 = document.querySelector("#item_5");
    const background = document.querySelector("#background");
    const weAre = document.querySelector("#we-are");
    const image1 = document.querySelector("#image_1");
    const image2 = document.querySelector("#image_2");
    const image3 = document.querySelector("#image_3");
    const image4 = document.querySelector("#image_4");
    const image5 = document.querySelector("#image_5");
  
  

  
    item1.addEventListener("mouseover", () => {
      image1.classList.remove("invisible");
      weAre.style.opacity = ".5";
    });
    item1.addEventListener("mouseout", () => {
      image1.classList.add("invisible");
      weAre.style.opacity = "1";
    });
    item2.addEventListener("mouseover", () => {
      image2.classList.remove("invisible");
      weAre.style.opacity = ".5";
    });
    item2.addEventListener("mouseout", () => {
      image2.classList.add("invisible");
      weAre.style.opacity = "1";
    });
    item3.addEventListener("mouseover", () => {
      image3.classList.remove("invisible");
      weAre.style.opacity = ".5";
    });
    item3.addEventListener("mouseout", () => {
      image3.classList.add("invisible");
      weAre.style.opacity = "1";
    });
    item4.addEventListener("mouseover", () => {
      image4.classList.remove("invisible");
      weAre.style.opacity = ".5";
    });
    item4.addEventListener("mouseout", () => {
      image4.classList.add("invisible");
      weAre.style.opacity = "1";
    });
    item5.addEventListener("mouseover", () => {
      image5.classList.remove("invisible");
      weAre.style.opacity = ".5";
    });
    item5.addEventListener("mouseout", () => {
      image5.classList.add("invisible");
      weAre.style.opacity = "1";
    });
  }
 