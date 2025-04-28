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

    <main>
        <section id="confirm" class="py-8">
            <div class="grid overflow-hidden">
                <div class="grid justify-center my-8 max-[425px]:mt-4">
                    <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                        <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">入力内容の確認</h2>
                    </div>
                </div>
                <!-- 入力内容 -->
                <dl class="grid md:grid-cols-2 grid-cols-1 justify-self-center gap-y-6 gap-x-8 m-6 p-8 border border-gray-300 rounded-lg bg-gray-50 max-w-md md:max-w-xl">
                    <div class="contents">
                        <dt class="font-bold underline self-center">お名前</dt>
                        <dd class="break-words"><?= htmlspecialchars($form['name']) ?></dd>
                    </div>
                    <div class="contents">
                        <dt class="font-bold underline self-center">メールアドレス</dt>
                        <dd class="break-words"><?= htmlspecialchars($form['email']) ?></dd>
                    </div>
                    <div class="contents">
                        <dt class="font-bold underline self-center">会社名</dt>
                        <dd class="break-words"><?= htmlspecialchars($form['organization']) ?></dd>
                    </div>
                    <div class="contents">
                        <dt class="font-bold underline self-center">電話番号</dt>
                        <dd class="break-words"><?= htmlspecialchars($form['tel']) ?></dd>
                    </div>
                    <div class="contents">
                        <dt class="font-bold underline self-center">お問い合わせ内容</dt>
                        <dd class="break-words"><?= nl2br(htmlspecialchars($form['detail'])) ?></dd>
                    </div>
                </dl>

                <!-- ボタンエリア -->
                <div class="grid gap-4 justify-center">

                    <!-- 送信ボタン -->
                    <form action="send.php" method="post">
                        <button type="submit"
                            class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg transition">
                            送信する
                        </button>
                    </form>

                    <!-- 修正ボタン -->
                    <form action="index.php#contact" method="post">
                        <?php foreach ($form as $key => $value): ?>
                            <input type="hidden" name="<?= htmlspecialchars($key) ?>" value="<?= htmlspecialchars($value) ?>">
                        <?php endforeach; ?>
                        <button type="submit"
                            class="px-8 py-3 bg-gray-400 hover:bg-gray-500 text-white font-bold rounded-lg transition">
                            修正する
                        </button>
                    </form>
                </div>
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