
const enlaces = document.querySelectorAll(".enlace");


for(let i =0 ; i< enlaces.length ; i++){
    enlaces[i].addEventListener("click",()=>{
        console.log("se pdo");
        enlaces[i].classList.toggle("red");
        
    });
}

const prueba = document.querySelector(".btn");

prueba.addEventListener("click",()=>{
    console.log("miramasdf");
});




