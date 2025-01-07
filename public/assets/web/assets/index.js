let div = document.querySelectorAll(".option div")
let int = document.querySelector(".drop")
let input = document.querySelector(".drop input")
let option = document.querySelector(".option"); 
let i = document.querySelector(".dropp div i")
let ii = document.querySelector(".drop div i")
let iii = document.querySelector(".in i")
for (let i = 0; i < div.length; i++){
    let chos = div[i]
    chos.addEventListener("click",choss)
}
function choss(el) {
    let ele = el.target
    input.value = ele.textContent
}


console.log(3472)


option.classList.remove("show")
int.onclick = function () {
    option.classList.toggle("show")
    ii.classList.toggle("i")
}

let divv = document.querySelectorAll(".optionn div")
let intt = document.querySelector(".dropp")
let inputt = document.querySelector(".dropp input")
let optionn = document.querySelector(".optionn"); 
for (let i = 0; i < divv.length; i++){
    let chos = divv[i]
    chos.addEventListener("click",cho)
}

optionn.classList.remove("show")
intt.onclick = function () {
    optionn.classList.toggle("show")
    i.classList.toggle("i")
}

function cho(el) {
    let ele = el.target
    inputt.value = ele.textContent
}

let spOption = document.querySelector(".in")
let sOption = document.querySelector(".sp-option")
spOption.onclick = function () {
    sOption.classList.toggle("show")
    iii.classList.toggle("i")
}


// start about
// let box = document.querySelectorAll(".doctor .box")
// for (let i = 0; i < box.length; i++){
//     box[i].onclick = function(){
//         window.localStorage.setItem("id-doc" ,box[i].id)
//         window.location.href = './about-doctor.html'
//     }
    
// }
// function chDoc(ele) {
//     let el = ele.target
//     let pa = el.parentElement.children[3].innerHTML
//     window.localStorage.setItem("id" ,pa)
//     window.location.href = './about-doctor.html'
//     console.log(el)
//     console.log(pa)
// }
// function chDoc(ele) {
//     let el = ele.target
//     let pa = el.parentElement.children[3].innerHTML
//     window.localStorage.setItem("id-doc" ,el.id)
//     window.location.href = './about-doctor.html'
//     console.log(el.id === "1")
//     // console.log(pa)
// }



// start search
let dBox = document.querySelectorAll(".box")
// function search() {
//     let search = document.getElementById("sch").value.toUpperCase();
//     let dName = document.querySelectorAll(".doctor-name")

    
//     for (let i = 0; i < dName.length; i++) {
//         if (dName[i].innerHTML.toUpperCase().indexOf(search) >= 0) {
//             dBox[i].style.display = ""
//         } else {
//             dBox[i].style.display = "none"
//         }
//     }
// }
function search() {
    let search = document.getElementById("sch").value.toUpperCase();
    let dName = document.querySelectorAll(".doctor-name")

    for (let i = 0; i < dName.length; i++) {
        if (dName[i].innerHTML.toUpperCase().indexOf(search) >= 0) {
            dBox[i].style.display = ""
        } else {
            dBox[i].style.display = "none"
        }
    }
    
    male.onclick = function () {
    for (let i = 0; i < gender.length; i++){
        if (male.innerHTML.toLowerCase() == gender[i].innerHTML) {
            dBox[i].style.display = ""
            console.log(i)
        }else {
            dBox[i].style.display = "none"
        }
        }
        
    }
    female.onclick = function () {
    for (let i = 0; i < gender.length; i++){
        if (female.innerHTML.toLowerCase() == gender[i].innerHTML) {
            dBox[i].style.display = ""
        }else {
            dBox[i].style.display = "none"
        }
    }
}


}

// start header search

    
    
//     let male = document.querySelector(".male")
//     let female = document.querySelector(".female")
//     let gender = document.querySelectorAll(".gender-2")
    
    
// male.onclick = function () {
//         for (let i = 0; i < gender.length; i++){
//             if (male.innerHTML.toLowerCase() == gender[i].innerHTML) {
//                 dBox[i].style.display = ""
//             }else {
//                 dBox[i].style.display = "none"
//             }
//         }
//         console.log(male)
// }
// female.onclick = function () {
//     for (let i = 0; i < gender.length; i++){
//         if (female.innerHTML.toLowerCase() == gender[i].innerHTML) {
//             dBox[i].style.display = ""
//         }else {
//             dBox[i].style.display = "none"
//         }
//     }
// }




console.log("dloaikfolj")