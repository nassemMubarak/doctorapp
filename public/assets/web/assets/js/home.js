
let doctor = document.querySelector(".our-doctor .left")
let scrLeft = document.querySelector(".leftt")
let scrRight = document.querySelector(".our-doctor .right")


let body = document.querySelector("body")
if(body.scrollWidth < 767){
    scrRight.addEventListener("click",()=>{
        console.log(1)
        doctor.style.scrollBehavior = "smooth"
        doctor.scrollLeft += 338;
    })
    scrLeft.addEventListener("click",()=>{
        doctor.style.scrollBehavior = "smooth"
        doctor.scrollLeft -= 338;
    })
}else{
    scrRight.addEventListener("click",()=>{
        doctor.style.scrollBehavior = "smooth"
        doctor.scrollLeft += 1010;
    })
    scrLeft.addEventListener("click",()=>{
        doctor.style.scrollBehavior = "smooth"
        doctor.scrollLeft -= 1010;
    })
}



let news= document.querySelector(".new")
let scrtop = document.querySelector(".up")
let scrdown = document.querySelector(".down")

scrtop.addEventListener("click",()=>{
    news.style.scrollBehavior = "smooth"
    news.scrollTop += 350;
})
scrdown.addEventListener("click",()=>{
    news.style.scrollBehavior = "smooth"
    news.scrollTop -= 350;
})

news.addEventListener("wheel",(evt)=>{
    evt.preventDefault();
    news.scrollTop += 0 ;
})




