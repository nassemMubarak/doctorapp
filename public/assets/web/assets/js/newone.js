let newtext = document.querySelectorAll(".recentposts ul li")
function search() {
    let search = document.getElementById("sch").value.toUpperCase();

    for (let i = 0; i < newtext.length; i++) {
        if (newtext[i].innerHTML.toUpperCase().indexOf(search) >= 0) {
            newtext[i].style.display = ""
        } else {
            newtext[i].style.display = "none"
        }
    }
}



let leftt = document.querySelector(".lleft")
let rightt = document.querySelector(".rright")

let dd = window.localStorage.getItem("id-new")
    leftt.onclick = function(){
        if(dd > 1){
            window.localStorage.setItem("id-new" , dd - 1)
            window.location.href = './newsone.html'
        }
    }

    rightt.onclick = function(){
        let w = 1
        if(dd < listNew.length){
            window.localStorage.setItem("id-new" , `${+dd + w}`)
            window.location.href = './newsone.html'
        }
    }

