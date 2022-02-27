const navToggle = document.querySelector(".toggle");
const navMenu = document.querySelector(".menu");

navToggle.addEventListener("click", () =>{
    navMenu.classList.toggle("menu-item_visible")
})