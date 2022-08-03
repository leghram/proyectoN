
const enlaces = document.querySelectorAll(".enlace");
for(let i =0 ; i< enlaces.length ; i++){
    enlaces[i].addEventListener("click",()=>{
        for(let a =0 ; a < enlaces.length ; a++){
            enlaces[a].style.background = "green";
        }
        enlaces[i].style.background="cyan";
    });
}

const prueba = document.querySelector(".btn");

prueba.addEventListener("click",()=>{
    console.log("miramasdf");
});




