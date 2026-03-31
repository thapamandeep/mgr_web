
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("[data-animation]").forEach(el => {
        el.classList.add("show");
    });
});