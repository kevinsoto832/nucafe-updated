import gsap from "gsap";
//ADD A GAP/PADDING BETWEEN BOXES
export function homeImageCards() {

const cardBody = document.querySelectorAll(".card-body");

cardBody.forEach(card => {

card.addEventListener("mouseover", () => {

    gsap.to(".card-description" , {
        y: 20,
        duration: 1,
        autoAlpha: 1
            })
        })
    })

// const cardBody = document.getElementsByClassName("card-body");

// for (var i = 0; i < cardBody.length; i++) {

//     cardBody[i].addEventListener("mouseover", () => {

//         gsap.to(".card-description" , {
//             y: 20,
//             duration: 1,
//             autoAlpha: 1
//                 })
//             })
//   }

}