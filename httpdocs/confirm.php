<?php
// confirm.php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$_SESSION['form'] = $_POST;
$form = $_SESSION['form'];
?>

<?php
// ヘッダー・フッターを表示するかを制御するフラグ
$hideHeaderFooter = true;
?>

<?php if (empty($hideHeaderFooter)): ?>
    <?php $page_title = "CEM | 入力内容確認";
    include 'header.php'; ?>
<?php endif; ?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($page_title) ? $page_title : "CEM"; ?></title>
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="css/style.css" />
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

    <main>
        <section class="confirm hd_space">
            <div class="container">
                <div class="section_wrap">
                    <div class="section_title">
                        <span class="decor"></span>
                        <h2>入力内容の確認</h2>
                    </div>
                </div>
                <dl>
                    <dt>お名前</dt>
                    <dd><?= htmlspecialchars($form['name']) ?></dd>
                    <dt>メールアドレス</dt>
                    <dd><?= htmlspecialchars($form['email']) ?></dd>
                    <dt>会社名</dt>
                    <dd><?= htmlspecialchars($form['organization']) ?></dd>
                    <dt>電話番号</dt>
                    <dd><?= htmlspecialchars($form['tel']) ?></dd>
                    <dt>お問い合わせ内容</dt>
                    <dd><?= nl2br(htmlspecialchars($form['detail'])) ?></dd>
                </dl>

                <form action="send.php" method="post">
                    <button type="submit" class="more_btn btn_blue btn_space">送信する</button>
                </form>
                <form action="index.php#contact" method="post">
                    <?php foreach ($form as $key => $value): ?>
                        <input type="hidden" name="<?= htmlspecialchars($key) ?>" value="<?= htmlspecialchars($value) ?>">
                    <?php endforeach; ?>
                    <button type="submit" class="more_btn btn_gley btn_space">修正する</button>
                </form>
            </div>
        </section>
    </main>

</body>
<script type="module" src="js/main.js"></script>

<?php
// マップが必要なページだけ map.js を読み込む
$page = basename($_SERVER['PHP_SELF']);
if ($page === 'about.php') : ?>
    <script type="module" src="js/map.js"></script>
<?php endif; ?>

</html>
<?php if (empty($hideHeaderFooter)): ?>
    <?php include 'footer.php'; ?>
<?php endif; ?>