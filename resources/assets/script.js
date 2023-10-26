const burger = document.querySelector(".burger");
const navs = document.getElementById("navs");
const contact = document.getElementById("contact");
burger.addEventListener("click", function (e) {
    navs.classList.toggle("open");
    contact.classList.toggle("open");
});
