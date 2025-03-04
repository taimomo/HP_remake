// 必要なモジュールを読み込む
require("dotenv").config(); // .env を読み込む
const express = require("express"); // Express フレームワークを使用
const cors = require("cors"); // CORS 対策（必要な場合）

const app = express(); // Express アプリを作成
const PORT = process.env.PORT || 3000; // ポート番号を指定（デフォルト: 3000）

// CORS（クロスオリジン対策）を有効化（必要な場合）
app.use(cors());

// APIエンドポイント `/api/key` を定義
app.get("/api/key", (req, res) => {
    res.json({
        apiKey: process.env.GOOGLE_MAPS_API_KEY, // .env から APIキー を取得
        mapId: process.env.MAP_ID, // .env から mapId を取得
    });
});

// サーバーを起動
app.listen(PORT, () => {
    console.log(`Server running on http://localhost:${PORT}`);
});
