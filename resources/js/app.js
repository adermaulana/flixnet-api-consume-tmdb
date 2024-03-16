// Get the button and the menu element
const button = document.getElementById("user-menu-button");
const menu = document.getElementById("user-menu");

// Add click event listener to the button
button.addEventListener("click", function () {
    // Toggle the 'hidden' class of the menu element
    menu.classList.toggle("hidden");
});
