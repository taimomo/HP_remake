document.addEventListener("DOMContentLoaded", function () {
    const accordionItems = document.querySelectorAll(".accordion-item");

    accordionItems.forEach((item) => {
        const header = item.querySelector(".accordion-header");
        const content = item.querySelector(".accordion-content");

        header.addEventListener("mouseenter", () => {
            content.style.display = "block";
        });

        header.addEventListener("mouseleave", () => {
            content.style.display = "none";
        });
    });
});
