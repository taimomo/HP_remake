document.cookie = "session_id=abc123; SameSite=None; Secure";

document.addEventListener("DOMContentLoaded", function () {
    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            window.scrollTo({ top: target.offsetTop, behavior: "smooth" });
        }
    }
});

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

document.querySelectorAll(".more_btn").forEach((button) => {
    button.addEventListener("keypress", function (event) {
        if (event.key === "Enter" || event.key === " ") {
            this.click(); // Enter / Space でクリック動作
        }
    });
});
