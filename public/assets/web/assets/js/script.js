let links = document.querySelector(".header ul");
let linksIcon = document.querySelector(".menu");
let backgroundImg = document.querySelectorAll(".iconDisappear");
let backgroundImgOverlay = document.querySelectorAll(".overlay");
let heart = document.querySelectorAll(".heart");
let boxes = document.querySelector(".boxes");
let box1 = document.querySelectorAll(".news-box")[0];
let box2 = document.querySelectorAll(".news-box")[1];
let box3 = document.querySelectorAll(".news-box")[2];
let left = document.querySelector(".left");
let leftIcon = document.querySelector(".left i");
let middel = document.querySelector(".middel");
let middelIcon = document.querySelector(".middel i");
let right = document.querySelector(".right");
let rightIcon = document.querySelector(".right i");

linksIcon.addEventListener("click", (e) => {
  links.classList.toggle("open");
});

backgroundImgOverlay.forEach((e) => {
  e.classList.add("hidden");
});

backgroundImg.forEach((icon) => {
  icon.addEventListener("mouseover", (e) => {
    let ele = icon.previousElementSibling;
    let overlay = ele.children[1];
    overlay.classList.remove("hidden");
    icon.classList.add("hidden");
  });
});

heart.forEach((ele) => {
  ele.addEventListener("click", (e) => {
    ele.style.color = "red";
    ele.childNodes[1].textContent++;
  });
});

window.onload = () => {
  box1.style.display = "none";
  box3.style.display = "none";
};

left.addEventListener("click", () => {
  box1.style.display = "none";
  box2.style.display = "none";
  box3.style.display = "grid";
  leftIcon.style.color = "#1F2B6C";
  rightIcon.style.color = "#BFD2F8";
  middelIcon.style.color = "#BFD2F8";
});
right.addEventListener("click", () => {
  box1.style.display = "grid";
  box2.style.display = "none";
  box3.style.display = "none";
  leftIcon.style.color = "#BFD2F8";
  rightIcon.style.color = "#1F2B6C";
  middelIcon.style.color = "#BFD2F8";
});
middel.addEventListener("click", () => {
  box1.style.display = "none";
  box2.style.display = "grid";
  box3.style.display = "none";
  leftIcon.style.color = "#BFD2F8";
  rightIcon.style.color = "#BFD2F8";
  middelIcon.style.color = "#1F2B6C";
});


