<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-P6XVD5NGZW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-P6XVD5NGZW');
    </script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($page_title) ? $page_title : "CEM"; ?></title>
    <link rel="icon" href="/img/favicon.ico?v=1.0" type="image/x-icon" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/public/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=
            Noto+Sans+JP:wght@100..900&family=Not+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <!-- ヘッダー -->
    <header class="grid grid-cols-3 md:grid-cols-[auto_1fr_auto] items-center bg-white px-4 py-4 md:py-2 fixed w-full z-30 shadow-md gap-4">
        <!-- 共通チェックボックス（peer） -->
        <input id="nav_input" type="checkbox" class="peer hidden md:pointer-events-none" aria-label="ナビゲーションの切替" />

        <!-- ハンバーガーアイコン（spanを直接配置） -->
        <span class="md:hidden absolute top-8 right-4 w-[30px] h-[2px] bg-gray-800 transition-transform duration-300 peer-checked:rotate-45 peer-checked:top-[40px] z-40"></span>
        <span class="md:hidden absolute top-[40px] right-4 w-[30px] h-[2px] bg-gray-800 transition-opacity duration-300 peer-checked:opacity-0 z-40"></span>
        <span class="md:hidden absolute top-[49px] right-4 w-[30px] h-[2px] bg-gray-800 transition-transform duration-300 peer-checked:-rotate-45 peer-checked:top-[40px] z-40"></span>

        <!-- ラベル（クリック領域） -->
        <label for="nav_input" aria-label="メニューを開閉" class="fixed top-8 right-4 w-[30px] h-[30px] md:cursor-default z-50 md:pointer-events-none"></label>


        <!-- ロゴ -->
        <div class="col-start-2 justify-self-center w-[80px] h-[40px] md:col-auto md:w-[100px] md:h-[60px] md:mx-auto">
            <a href="index.php"><img src="../img/CEM_logo_@2x.jpeg" alt="ロゴ" class="w-full h-full object-contain" /></a>
        </div>

        <nav class="justify-self-center px-2 transition-all duration-500 fixed top-0 right-[-100%] z-20 w-[280px] h-screen bg-white peer-checked:right-0 md:static md:w-auto md:h-auto md:right-auto md:bg-transparent">
            <ul class="grid md:grid-flow-col grid-cols-1 gap-4 items-center justify-center pt-20 md:gap-4 md:px-4 md:py-4">
                <!-- li：モバイル時に70%幅、2pxのdivider追加、ホバー下線はmd以上のみ -->
                <li class="w-full md:w-auto grid place-items-center relative h-10 transition-all after:content-[''] after:block after:mx-auto  after:w-[70%] after:h-[2px] after:bg-gray-300 after:md:hidden last:after:hidden">
                    <a href="about.php" class="whitespace-nowrap font-bold text-gray-800 px-3 py-2 relative after:content-[' '] after:absolute after:bottom-[-4px] after:left-1/2 after:w-0 after:h-[2px] after:bg-[#233270] after:transition-all after:duration-300 after:transform after:-translate-x-1/2 md:hover:after:w-4/5">会社概要</a>
                </li>

                <li class="w-full md:w-auto grid place-items-center relative h-10 transition-all md:before:content-[' '] md:before:absolute md:before:left-0 md:before:-ml-2 md:before:top-0 md:before:h-full md:before:w-px md:before:bg-black after:content-[''] after:block after:mx-auto  after:w-[70%] after:h-[2px] after:bg-gray-300 after:md:hidden last:after:hidden">
                    <a href="micro.php" class="whitespace-nowrap font-bold text-gray-800 px-3 py-2 relative after:content-[' '] after:absolute after:bottom-[-4px] after:left-1/2 after:w-0 after:h-[2px] after:bg-[#233270] after:transition-all after:duration-300 after:transform after:-translate-x-1/2 md:hover:after:w-4/5">
                        マイクロ水力発電
                    </a>
                </li>
                <li class="w-full md:w-auto grid place-items-center relative h-10 transition-all md:before:content-[' '] md:before:absolute md:before:left-0 md:before:-ml-2 md:before:top-0 md:before:h-full md:before:w-px md:before:bg-black after:content-[''] after:block after:mx-auto  after:w-[70%] after:h-[2px] after:bg-gray-300 after:md:hidden last:after:hidden">
                    <a href="solar.php" class="whitespace-nowrap font-bold text-gray-800 px-3 py-2 relative after:content-[' '] after:absolute after:bottom-[-4px] after:left-1/2 after:w-0 after:h-[2px] after:bg-[#233270] after:transition-all after:duration-300 after:transform after:-translate-x-1/2 md:hover:after:w-4/5">
                        太陽光発電・蓄電
                    </a>
                </li>
                <li class="w-full md:w-auto grid place-items-center relative h-10 transition-all md:before:content-[' '] md:before:absolute md:before:left-0 md:before:-ml-2 md:before:top-0 md:before:h-full md:before:w-px md:before:bg-black after:content-[''] after:block after:mx-auto  after:w-[70%] after:h-[2px] after:bg-gray-300 after:md:hidden last:after:hidden">
                    <a href="index.php#contact" class="grid place-items-center bg-[#233270] hover:bg-sky-400 shadow-md hover:shadow-lg transition-colors duration-300 ease-in-out text-white px-4 h-10 rounded-full text-sm md:text-base whitespace-nowrap">
                        お問い合わせ
                    </a>
                </li>
            </ul>
        </nav>
    </header>