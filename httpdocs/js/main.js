document.querySelectorAll(".accordion_header").forEach((btn) => {
    btn.addEventListener("click", () => {
        const content = btn.nextElementSibling; // .accordion_content
        const inner = content.querySelector(".accordion_inner");

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            btn.classList.remove("active");
        } else {
            // inner の重さ（padding込みの高さ）を測ってセット
            content.style.maxHeight = inner.scrollHeight + "px";
            btn.classList.add("active");
        }
    });
});
