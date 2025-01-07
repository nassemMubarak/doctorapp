
let today = new Date().toISOString().split('T')[0];
let inputDate = document.querySelector(".input-date")
inputDate.setAttribute("min",today)