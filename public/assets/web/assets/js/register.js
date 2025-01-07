


let div = document.querySelector(".sp-option")
let d = document.querySelectorAll(".control")
let icon = document.querySelector(".i")

icon.onclick = function(){
    div.classList.toggle("hide")
}

let int = document.querySelector(".in input")

int.onclick = function(){
    div.classList.toggle("hide")
}


let img = document.querySelectorAll(".upload-icon")
let input = document.querySelectorAll(".upload-input")
for(let i = 0 ; i < img.length ; i++){

    input[i].onchange = function(){
        let reader = new FileReader();
        reader.readAsDataURL(input[i].files[0])
        reader.onload = ()=>{
            img[i].setAttribute("src" ,reader.result);

        }
    }
}

let button = document.querySelector(".change-pass")
let overlay = document.querySelector(".overlay")
let model = document.querySelector(".model-box")
let close = document.querySelector(".close")


let show = function(event){
    event.preventDefault()
    overlay.classList.add("active")
    model.classList.add("active")
    console.log(1)
    let body = document.querySelector("body")
    body.onscroll = 'no'
}
button.addEventListener("click", show)

let hiden = function(event){
    // event.preventDefault()
    overlay.classList.remove("active")
    model.classList.remove("active")
    console.log(1)
}
close.addEventListener("click", hiden)
overlay.addEventListener("click", hiden)