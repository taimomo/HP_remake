document.cookie = "session_id=abc123; SameSite=None; Secure";

fetch("http://localhost:3000/api/key")
    .then((response) => response.json())
    .then((data) => {
        const script = document.createElement("script");
        script.src = `https://maps.googleapis.com/maps/api/js?key=${data.apiKey}&callback=initMap&libraries=marker`;
        script.async = true;
        script.defer = true;
        document.head.appendChild(script);

        // APIキーと mapId をグローバル変数に保存（initMapで使用する）
        window.GOOGLE_MAPS_MAP_ID = data.mapId;
    })
    .catch((error) => console.error("APIキーの取得に失敗しました", error));

function initMap() {
    const location = { lat: 35.26939098716046, lng: 139.01192194044734 };

    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: location,
        mapId: window.GOOGLE_MAPS_MAP_ID, // 取得した mapId を使用
    });

    // 最新の AdvancedMarkerElement を使用
    new google.maps.marker.AdvancedMarkerElement({
        position: location,
        map: map,
        title: "ここに会社があります！",
    });
}

document.addEventListener("DOMContentLoaded", function () {
    // ヘッダーを読み込む
    fetch("header.html")
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("header").innerHTML = data;
        });

    // フッターを読み込む
    fetch("footer.html")
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("footer").innerHTML = data;
        });
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
