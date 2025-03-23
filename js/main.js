document.cookie = "session_id=abc123; SameSite=None; Secure";

import { getGoogleMapsConfig } from "./config.js";

async function loadGoogleMaps() {
    const { apiKey, mapId } = await getGoogleMapsConfig();

    await new Promise((resolve, reject) => {
        const script = document.createElement("script");
        script.src = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&v=weekly`;
        script.async = true;
        script.defer = true;
        script.onload = resolve;
        script.onerror = reject;
        document.head.appendChild(script);
    });

    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

    const location = { lat: 35.26939098716046, lng: 139.01192194044734 };

    const map = new Map(document.getElementById("map"), {
        zoom: 15,
        center: location,
        mapId: mapId,
    });

    new AdvancedMarkerElement({
        position: location,
        map,
        title: "ここに会社があります！",
    });
}
window.onload = loadGoogleMaps;

document.addEventListener("DOMContentLoaded", function () {
    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            window.scrollTo({ top: target.offsetTop, behavior: "smooth" });
        }
    }
});

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
