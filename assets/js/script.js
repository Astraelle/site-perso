"use strict"

let content = document.querySelector("#content"),
    sidebarBody = document.querySelector("#hamburger-sidebar-body"),
    btn = document.querySelector("#burger-button"),
    overlay = document.querySelector("#overlay"),
    ham = document.querySelector("#hamburger"),
    activatedClass = "hamburger-activated";

sidebarBody.innerHTML = content.innerHTML;

btn.addEventListener("click", () =>{
    ham.classList.add(activatedClass);
})
overlay.addEventListener("click", function(){
    ham.classList.remove(activatedClass);
})