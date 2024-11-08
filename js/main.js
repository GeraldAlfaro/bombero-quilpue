window.addEventListener("load", function () {
    document.querySelector(".main-menu-icon").addEventListener("click", () => {
        document.querySelector("#main-menu-link-container").classList.toggle("show-menu");
        document.querySelector("#main-menu-link-container").classList.remove("close-menu");
    })
    document.querySelector(".main-menu-close-icon").addEventListener("click", () => {
        document.querySelector("#main-menu-link-container").classList.toggle("close-menu");
        document.querySelector("#main-menu-link-container").classList.remove("show-menu");
    })
});
