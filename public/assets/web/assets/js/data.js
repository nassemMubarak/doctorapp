let listDoc = [
    {
        id : 1,
        docName: "dr . Ali hosam alajez",
        generall: "1 of implants and cosmetic dentistry",
        image: "./image/Rectangle 78 (1).png",
        adress: "1Gaza alnusirat",
        adressText: "1Gaza alnusiratGaza alnusiratGaza alnusiratGaza alnusiratGaza alnusirat",
        specialities : ["Tooth Implant","Dress Teeth","Orthodontics"],
        issues : ["Bachelor's","Ph.D","Board"],
        experience   : 23,
        about:"1Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae eligendi quam voluptate, eos exercitationem veritatis officia velit, doloribus architecto fugit tenetur ullam dolore ad consectetur nam accusamus odit, quod assumenda!"
    },
    {   
        id : 2,
        docName: "dr . osama abu samra",
        generall: "2 of implants and cosmetic dentistry",
        image : "./image/Rectangle 78 (2).png",
        adress: "2Gaza alnaser",
        adressText: "2Gaza alnaser alnusiratGaza alnaser alnusiratGaza alnaser",
        specialities : [16,17,18],
        issues : [16,117,18],
        experience   : 22,
        about:"2Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae eligendi quam voluptate, eos exercitationem veritatis officia velit, doloribus architecto fugit tenetur ullam dolore ad consectetur nam accusamus odit, quod assumenda!"
    },
    {   
        id : 3,
        docName: "dr . Ahmad saleem",
        generall: "3 of implants and cosmetic dentistry3",
        image : "./image/Rectangle 78 (3).png",
        adress: "3Gaza albrige",
        adressText :"3Gaza albrige alnusiratGaza albrige albrige alnusirat",
        specialities : [4,5,6],
        issues : [4,51,6],
        experience   : 33,
        about:"3Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae eligendi quam voluptate, eos exercitationem veritatis officia velit, doloribus architecto fugit tenetur ullam dolore ad consectetur nam accusamus odit, quod assumenda!"
    },
    {   
        id : 4,
        docName: "dr . walaa abu middian",
        generall:"4 of implants and cosmetic dentistry4",
        image : "./image/Rectangle 78 (4).png",
        adress: "44Gaza alnusirat44 ",
        adressText :"44Gaza alnusiratGaza44 alnusiratGaza44 alnusiratGaza alnusiratGaza alnusirat",
        specialities : [7,8,9],
        issues : [7,81,9],
        experience   : 44,
        about:"4Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae eligendi quam voluptate, eos exercitationem veritatis officia velit, doloribus architecto fugit tenetur ullam dolore ad consectetur nam accusamus odit, quod assumenda!"
    }
]

let chick = window.localStorage.getItem("id-doc")
let box = document.querySelector(".doctor-content .doctor")


let docrName = document.querySelector(".doctor-img h3")
let doctorName = document.querySelector(".doctor-name")
let general = document.querySelector(".general-specialty")
let doctorImg = document.querySelector(".img")
let doctorImage = document.querySelector(".office img")
let adress = document.querySelector(".adress h3")
let adressText = document.querySelector(".adress p")
let specialities = document.querySelectorAll(".special li")
let issues = document.querySelectorAll(".iss li")
let qualification = document.querySelector(".qualification p")
let experience = document.querySelector(".experience p")
let about = document.querySelector(".about p")

for(let i = 0 ; i < listDoc.length ; i++){
    if ( chick == listDoc[i].id) {
            docrName.innerHTML = `${listDoc[i].docName}` 
            doctorName.innerHTML = ` ${listDoc[i].docName}`
            general.innerHTML = `Specialist ${listDoc[i].generall}`
            
            adress.innerHTML = `${listDoc[i].adress}`
            adressText.innerHTML = `${listDoc[i].adressText}`
        
            specialities[0].innerHTML = `${listDoc[i].specialities[0]}`
            specialities[1].innerHTML = `${listDoc[i].specialities[1]}`
            specialities[2].innerHTML = `${listDoc[i].specialities[2]}`
        
            issues[0].innerHTML = `${listDoc[i].issues[0]}`
            issues[1].innerHTML = `${listDoc[i].issues[1]}`
            issues[2].innerHTML = `${listDoc[i].issues[2]}`
        
            doctorImg.src = `${listDoc[i].image}` 
            doctorImage.src = `${listDoc[i].image}`
            
            qualification.innerHTML = `<span>Licecnces</span>: ${listDoc[i].generall}`

            experience.innerHTML = `<span>Licecnces</span>:  ${listDoc[i].generall} <span>( ${listDoc[i].experience} years of Experience )</span>`

            about.innerHTML = `${listDoc[i].about}`
        }
}