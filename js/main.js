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

// モーダル関連
function openConfirmDialog() {
    // 入力内容を取得
    document.getElementById("confirm_name").textContent =
        document.getElementById("name").value;
    document.getElementById("confirm_email").textContent =
        document.getElementById("email").value;
    document.getElementById("confirm_organization").textContent =
        document.getElementById("organization").value;
    document.getElementById("confirm_tel").textContent =
        document.getElementById("tel").value;
    document.getElementById("confirm_detail").textContent =
        document.getElementById("detail").value;

    // 確認モーダルを表示
    document.getElementById("confirmDialog").showModal();
}

function closeConfirmDialog() {
    document.getElementById("confirmDialog").close();
}

function submitForm() {
    // 確認モーダルを閉じる
    document.getElementById("confirmDialog").close();

    // 送信完了モーダルを表示
    document.getElementById("successDialog").showModal();
}

function closeSuccessDialog() {
    document.getElementById("successDialog").close();
    document.getElementById("contactForm").reset(); // フォームをリセット
}
