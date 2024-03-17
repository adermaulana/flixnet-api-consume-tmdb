// Get the button and the menu element
const button = document.getElementById("user-menu-button");
const menu = document.getElementById("user-menu");

// Add click event listener to the button
button.addEventListener("click", function () {
    // Toggle the 'hidden' class of the menu element
    menu.classList.toggle("hidden");
});

const mobileButton = document.getElementById("mobile-button");
const mobileMenu = document.getElementById("mobile-menu");

// Tambahkan event listener untuk klik tombol
mobileButton.addEventListener("click", function () {
    // Toggle visibilitas mobile-menu
    mobileMenu.classList.toggle("hidden");
});
