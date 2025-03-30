document.cookie = "session_id=abc123; SameSite=None; Secure";

document.addEventListener("DOMContentLoaded", function () {
    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            window.scrollTo({ top: target.offsetTop, behavior: "smooth" });
        }
    }
});

document.querySelectorAll(".accordion_header").forEach((header) => {
    header.addEventListener("click", function () {
        const content = this.nextElementSibling;

        // 閉じているときだけ開く処理
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            content.style.paddingTop = "0";
            content.style.paddingBottom = "0";
            this.classList.remove("active");
        } else {
            // 対象だけ開く
            content.style.maxHeight = content.scrollHeight + "px";
            content.style.paddingTop = "1rem";
            content.style.paddingBottom = "1rem";
            this.classList.add("active");
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
