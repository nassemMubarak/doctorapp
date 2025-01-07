
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
