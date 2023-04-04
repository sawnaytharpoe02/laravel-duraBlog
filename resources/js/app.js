import AOS from "aos";
import "aos/dist/aos.css";

AOS.init();
//hamburger menu
const hamburger = () => {
    const navMenu = document.getElementById("nav-menu");
    const hamburgerMenu = document.getElementById("hamburger-menu");
    const menuBg = document.getElementById("menu-bg");
    hamburgerMenu.addEventListener("click", () => {
        hamburgerMenu.classList.toggle("change");
        menuBg.classList.toggle("change-bg");
        navMenu.classList.toggle("change");
    });
};
hamburger();

let currentPageUrl = window.location.href;
console.log(currentPageUrl);

let navbarLinks = document.querySelectorAll("nav ul li a");
navbarLinks.forEach((navLink) => {
    if (navLink.href === currentPageUrl) {
        navLink.classList.add("active");
    } else {
        navLink.classList.remove("active");
    }
});
