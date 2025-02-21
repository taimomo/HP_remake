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

document.querySelectorAll(".more_btn").forEach((button) => {
    button.addEventListener("keypress", function (event) {
        if (event.key === "Enter" || event.key === " ") {
            this.click(); // Enter / Space でクリック動作
        }
    });
});
