const burger = document.querySelector(".burger");
const navs = document.getElementById("navs");
const busDropdownButton = document.getElementById("bus-dropdown-button");
const toggleAccordion1 = document.querySelector(".lease-term-header");
const contact = document.getElementById("contact");
burger.addEventListener("click", function (e) {
    navs.classList.toggle("open");
    contact.classList.toggle("open");
});
busDropdownButton.addEventListener("click", (e) => {
    e.stopPropagation();
    const dropdown = document.getElementById("bus-dropdown");
    console.log(dropdown);
    toggleDropdown(!dropdown.classList.contains("open"));
});

function toggleDropdown(shouldOpen) {
    const dropdown = document.getElementById("bus-dropdown");
    if (shouldOpen) {
        dropdown.classList.add("open");
    } else {
        dropdown.classList.remove("open");
    }
}
toggleAccordion1.addEventListener("click", () => {
    function toggleItem(element) {
        const headers = document.querySelectorAll(".lease-term-header");
        console.log(headers);
        for (let header of headers) {
            header.classList.remove("active");
            header.nextElementSibling.style.height = "0px";
        }

        element.classList.add("active");

        const content = element.nextElementSibling;
        const text = content.querySelector(".lease-term-ul");

        content.style.height = `${text.clientHeight}px`;
    }
});
function toggleItem(element) {
    const headers = document.querySelectorAll(".lease-term-header");
    console.log(headers);
    for (let header of headers) {
        header.classList.remove("active");
        header.nextElementSibling.style.height = "0px";
    }

    element.classList.add("active");

    const content = element.nextElementSibling;
    const text = content.querySelector(".lease-term-ul");

    content.style.height = `${text.clientHeight}px`;
}
