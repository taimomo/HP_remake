<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($page_title) ? $page_title : "CEM"; ?></title>
    <link rel="icon" href="/img/favicon.ico?v=1.0" type="image/x-icon" />
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="/public/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=
            Noto+Sans+JP:wght@100..900&family=Not+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <script
        src="https://kit.fontawesome.com/63dc04101e.js"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- ヘッダー -->
    <header class="header">
        <input
            id="nav_input"
            type="checkbox"
            class="nav_hidden"
            aria-label="ナビゲーションの切替" />
        <label for="nav_input" id="nav_btn">
            <span></span>
        </label>
        <div class="logo">
            <a href="index.php"><img src="../img/CEM_logo_@2x.jpeg" alt="ロゴ" /></a>
        </div>
        <nav class="nav">
            <ul class="nav_items">
                <li class="nav_list">
                    <a href="about.php">会社概要</a>
                </li>
                <li class="nav_list">
                    <a href="micro.php">マイクロ水力発電</a>
                </li>
                <li class="nav_list">
                    <a href="solar.php">太陽光発電・蓄電</a>
                </li>
                <li class="nav_list contact_btn">
                    <a href="index.php#contact">お問い合わせ</a>
                </li>
            </ul>
        </nav>
    </header>