const burger = document.querySelector(".burger");
const navs = document.getElementById("navs");
const tabsElement = document.getElementById("tabs-example");
const busDropdownButton = document.getElementById("bus-dropdown-button");

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

// const tabElements = [
//     {
//         id: "profile",
//         triggerEl: document.querySelector("#profile-tab-example"),
//         targetEl: document.querySelector("#profile-example"),
//     },
//     {
//         id: "dashboard",
//         triggerEl: document.querySelector("#dashboard-tab-example"),
//         targetEl: document.querySelector("#dashboard-example"),
//     },
//     {
//         id: "settings",
//         triggerEl: document.querySelector("#settings-tab-example"),
//         targetEl: document.querySelector("#settings-example"),
//     },
//     {
//         id: "contacts",
//         triggerEl: document.querySelector("#contacts-tab-example"),
//         targetEl: document.querySelector("#contacts-example"),
//     },
// ];

// // options with default values
// const options = {
//     defaultTabId: "settings",
//     activeClasses:
//         "text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500",
//     inactiveClasses:
//         "text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300",
//     onShow: () => {
//         console.log("tab is shown");
//     },
// };
// const instanceOptions = {
//     id: "tabs-example",
//     override: true,
// };
// const tabs = new Tabs(tabsElement, tabElements, options, instanceOptions);
// // shows another tab element
// tabs.show("dashboard");

// // get the tab object based on ID
// tabs.getTab("contacts");

// // get the current active tab object
// tabs.getActiveTab();

const buttonTabs = document.querySelectorAll('[aria-selected="false"]');
const tabPanels = document.querySelectorAll('[role="tabpanel"]');
// console.log(buttonTabs);

buttonTabs.forEach((buttonTab) => {
    console.log(buttonTab);
});
