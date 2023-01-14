export function listHover() {

//this is the error that's being caused rn.
//Uncaught TypeError: Cannot read properties of null (reading 'style')
//at HTMLHeadingElement.<anonymous> (script.min.js?ver=1.0.0:5226:13)


    const item1 = document.querySelector("#item_1");
    const item2 = document.querySelector("#item_2");
    const item3 = document.querySelector("#item_3");
    const item4 = document.querySelector("#item_4");
    const item5 = document.querySelector("#item_5");
    // const background = document.querySelector("#background");
    // const image1 = document.querySelector("#image_1");
    const image2 = document.querySelector("#image_2");
    const image3 = document.querySelector("#image_3");
    const image4 = document.querySelector("#image_4");
    const image5 = document.querySelector("#image_5");
  

    item1.addEventListener("mouseover", () => {
      item1.classList.add("font-bold");
    });
    item1.addEventListener("mouseout", () => {
      item1.classList.remove("font-bold");
    });
    item2.addEventListener("mouseover", () => {
      item2.classList.add("font-bold");
      image2.classList.remove("invisible");
      
    });
    item2.addEventListener("mouseout", () => {
      item2.classList.remove("font-bold");
      image2.classList.add("invisible");
          });
    item3.addEventListener("mouseover", () => {
      item3.classList.add("font-bold");
      image3.classList.remove("invisible");
      
    });
    item3.addEventListener("mouseout", () => {
      item3.classList.remove("font-bold");
      image3.classList.add("invisible");
          });
    item4.addEventListener("mouseover", () => {
      item4.classList.add("font-bold");
      image4.classList.remove("invisible");
      
    });
    item4.addEventListener("mouseout", () => {
      item4.classList.remove("font-bold");
      image4.classList.add("invisible");
          });
    item5.addEventListener("mouseover", () => {
      item5.classList.add("font-bold");
      image5.classList.remove("invisible");
      
    });
    item5.addEventListener("mouseout", () => {
      item5.classList.remove("font-bold");
      image5.classList.add("invisible");
          });
  }
 