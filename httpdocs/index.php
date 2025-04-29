<?php
session_start();
$form = $_SESSION['form'] ?? $_POST;
?>

<?php
$page_title = "CEM | 水と太陽のエネルギーソリューション";
include 'header.php';
?>

<!-- ヒーローセクション -->
<section
    id="home"
    class="pt-[75px] md:pt-[90px] relative grid grid-cols-12 grid-rows-6 justify-content-center max-h-[70vh] text-white bg-[url('/img/hero_img2.webp')] bg-center bg-cover bg-no-repeat">
    <!-- 中央上のメイン見出し -->
    <div class="col-span-12 row-start-2 row-end-3 grid grid-cols-12 bg-gray-700/50">
        <h2 class="col-start-1 col-end-13 place-self-center md:col-start-1 md:col-end-6 text-3xl md:text-4xl font-bold">
            持続可能な未来へ
        </h2>
    </div>
    <!-- 右下に配置するサブ見出し -->
    <div class="col-start-1 col-end-13 row-start-6 row-end-7 grid">
        <h3 class="bg-blue-700 text-white text-center px-4 py-2 rounded underline shadow-md text-lg md:text-xl max-[425px]:text-base justify-self-center md:justify-self-end">
            水と太陽のエネルギーソリューションで<br />
            環境経営を積極支援！
        </h3>
    </div>
</section>

<main>
    <!-- News セクション -->
    <section id="news" class="py-8 bg-gray-100">
        <div class="grid px-4 overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-3 text-left">
                    <span class="w-3 h-8 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-[30deg] block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">News</h2>
                </div>
            </div>
            <ul
                class="mx-auto px-4 my-4 max-h-72 max-w-xl overflow-auto border-t-2 border-b-2 border-gray-400 max-[425px]:max-w-72">
                <!-- リストアイテム -->
                <li
                    class="grid grid-cols-1 md:grid-cols-[120px_1fr] gap-4 items-center py-4 border-b border-gray-200 last:border-b-0">
                    <time class="font-bold w-full mb-2 md:mb-0 md:w-auto" datetime="2025-03-30">
                        2025.03.30
                    </time>
                    <span class="w-full min-w-0 break-words">
                        ホームページをリニューアルしました。
                    </span>
                </li>

                <li
                    class="grid grid-cols-1 md:grid-cols-[120px_1fr] gap-4 items-center py-4 border-b border-gray-200 last:border-b-0">
                    <time class="font-bold w-full mb-2 md:mb-0 md:w-auto" datetime="2025-04-01">
                        2025.04.01
                    </time>
                    <span class="w-full min-w-0 break-words">
                        プライバシーポリシーを改訂しました。
                    </span>
                </li>

                <li
                    class="grid grid-cols-1 md:grid-cols-[120px_1fr] gap-4 items-center py-4">
                    <time class="font-bold w-full mb-2 md:mb-0 md:w-auto" datetime="2025-04-14">
                        2025.04.14
                    </time>
                    <span class="w-full grid gap-y-1 min-w-0">
                        弊社監修の『マイクロ水力発電機』ページが、産業用製品・メーカー情報比較サイト
                        「Metoree（メトリー）」にて公開されました。<br>
                        <a
                            href="https://metoree.com/categories/9409/"
                            class="text-[#005eff] underline break-words min-w-0">
                            https://metoree.com/categories/9409/
                        </a>
                    </span>
                </li>
            </ul>
        </div>
    </section>

    <!-- 会社情報 -->
    <section id="company" class="py-8">
        <div class="grid overflow-hidden">
            <ul class="grid grid-cols-1">
                <li class="grid md:grid-cols-[2fr_1fr] grid-cols-1 ">
                    <!-- 画像部分 -->
                    <div class="grid max-h-96 overflow-hidden col-start-1 row-start-1 w-full h-full">
                        <img
                            src="/img/company_front.webp"
                            alt="会社案内"
                            class="w-full object-contain mask_img" />
                    </div>
                    <!-- テキスト部分 -->
                    <div
                        class="grid grid-rows-[auto_1fr_auto] p-4 place-items-center place-self-center gap-6 col-start-1 row-start-1 md:col-start-auto max-w-[65%] md:max-w-full">
                        <!-- タイトル -->
                        <div class="grid justify-center my-4 md:mt-4">
                            <div class="grid grid-cols-[auto_1fr] items-center gap-3 text-left">
                                <span class="w-3 h-8 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-[30deg] block"></span>
                                <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">
                                    会社情報
                                </h2>
                            </div>
                        </div>
                        <!-- 説明文 -->
                        <p class="text-center text-lg font-bold leading-relaxed text-gray-800 max-[768px]:text-base max-[425px]:text-sm">
                            シーイーエムについて<br />
                            会社所在地等の基本情報を掲載しています。
                        </p>
                        <!-- ボタン -->
                        <a
                            href="about.php"
                            role="button"
                            tabindex="0"
                            class="block w-36 md:w-40 px-4 py-2 text-center rounded-full font-bold bg-[#2e4488] hover:bg-sky-400 text-white shadow-md hover:shadow-lg transition-colors duration-300 ease-in-out max-[425px]:text-[0.8rem]">
                            もっと見る
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- 事業内容 -->
    <section id="business" class="py-8 bg-gray-100">
        <div class="grid overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-3 text-left">
                    <span class="w-3 h-8 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-[30deg] block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">事業内容</h2>
                </div>
            </div>
            <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,400px)]">
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center rounded-xl shadow-[3px_3px_8px_rgba(100,100,100,0.3)] hover:shadow-[3px_3px_8px_rgba(100,100,100,0.5)] transition-shadow max-w-sm min-w-0 md:max-w-none">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img src="img/micro_exp.webp" alt="マイクロ水力発電" class="w-full h-full object-cover object-center block rounded-xl" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <h3 class="text-xl font-bold text-center my-4">マイクロ水力発電</h3>
                        <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                            <p>屋外用・屋内用のマイクロ水力発電機を提供しています。</p>
                            <p>農業用水・施設循環水・下水道等の小さな水源を有効活用できます。</p>
                        </div>
                    </div>
                    <a
                        href="micro.php"
                        role="button"
                        tabindex="0"
                        class="block w-36 md:w-40 px-4 py-2 text-center rounded-full align-self-end justify-self-center font-bold bg-[#2e4488] hover:bg-sky-400 text-white shadow-md hover:shadow-lg transition-colors duration-300 ease-in-out max-[425px]:text-[0.8rem]">
                        もっと見る
                    </a>
                </li>
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center rounded-xl shadow-[3px_3px_8px_rgba(100,100,100,0.3)] hover:shadow-[3px_3px_8px_rgba(100,100,100,0.5)] transition-shadow max-w-sm min-w-0 md:max-w-none">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img src="img/panel_roof.webp"
                            alt="太陽光発電・蓄電システム"
                            class="w-full h-full object-cover object-center block rounded-xl" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <h3 class="text-xl font-bold text-center my-4">太陽光発電・蓄電システム</h3>
                        <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                            <p>
                                建物屋根を利用した太陽光発電システムを提供しています。
                            </p>
                            <p>
                                スペースの有効活用によりエネルギーコストの削減や環境経営に貢献できます。
                            </p>
                        </div>
                    </div>
                    <a
                        href="solar.php"
                        role="button"
                        tabindex="0"
                        class="block w-36 md:w-40 px-4 py-2 text-center rounded-full align-self-end justify-self-center font-bold bg-[#2e4488] hover:bg-sky-400 text-white shadow-md hover:shadow-lg transition-colors duration-300 ease-in-out max-[425px]:text-[0.8rem]">
                        もっと見る
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- お問い合わせフォーム -->
    <section id="contact" class="py-8 scroll-mt-24">
        <div class="grid justify-center overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-3 text-left">
                    <span class="w-3 h-8 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-[30deg] block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">お問い合わせ</h2>
                </div>
            </div>
            <div class="container mx-auto px-4 max-w-3xl">
                <p class="text-xl md:text-2xl mb-8 text-center">
                    お問い合わせ内容をご入力の上、「入力内容を確認」ボタンを押してください。
                </p>

                <form id="form" action="confirm.php" method="post" autocomplete="on" class="grid gap-8 w-4/5 max-w-md mx-auto">

                    <!-- お名前 -->
                    <div class="grid gap-2">
                        <label for="name" class="font-bold">
                            お名前<span class="text-red-600 text-sm ml-2">※必須</span>
                        </label>
                        <input type="text" id="name" name="name" required
                            class="w-full border border-gray-300 rounded-md p-2"
                            autocomplete="name"
                            value="<?= htmlspecialchars($form['name'] ?? '') ?>">
                    </div>

                    <!-- メールアドレス -->
                    <div class="grid gap-2">
                        <label for="email" class="font-bold">
                            メールアドレス<span class="text-red-600 text-sm ml-2">※必須</span>
                        </label>
                        <input type="email" id="email" name="email" required
                            class="w-full border border-gray-300 rounded-md p-2"
                            autocomplete="email"
                            value="<?= htmlspecialchars($form['email'] ?? '') ?>">
                    </div>

                    <!-- 会社名 -->
                    <div class="grid gap-2">
                        <label for="organization" class="font-bold">会社名</label>
                        <input type="text" id="organization" name="organization"
                            class="w-full border border-gray-300 rounded-md p-2"
                            autocomplete="organization"
                            value="<?= htmlspecialchars($form['organization'] ?? '') ?>">
                    </div>

                    <!-- 電話番号 -->
                    <div class="grid gap-2">
                        <label for="tel" class="font-bold">電話番号（ハイフン不要）</label>
                        <input type="tel" id="tel" name="tel" pattern="\d{10,11}"
                            title="10〜11桁の数字で入力してください"
                            class="w-full border border-gray-300 rounded-md p-2"
                            autocomplete="tel"
                            value="<?= htmlspecialchars($form['tel'] ?? '') ?>">
                    </div>

                    <!-- お問い合わせ内容 -->
                    <div class="grid gap-2">
                        <label for="detail" class="font-bold">
                            お問い合わせ内容<span class="text-red-600 text-sm ml-2">※必須</span>
                        </label>
                        <textarea id="detail" name="detail" required autocomplete="off"
                            class="w-full border border-gray-300 rounded-md p-2 min-h-[300px]"><?= htmlspecialchars($form['detail'] ?? '') ?></textarea>
                    </div>

                    <!-- プライバシーポリシー同意 -->
                    <div class="text-center text-sm">
                        <a href="policy.php" class="text-blue-600 underline mb-2 inline-block">プライバシーポリシーを確認する</a>
                        <div class="flex justify-center items-center gap-2 mt-2">
                            <input type="checkbox" id="agree" name="agree" value="1" required
                                <?= isset($form['agree']) ? 'checked' : '' ?>>
                            <label for="agree" class="inline-flex items-center">
                                プライバシーポリシーに同意する
                                <span class="text-red-600 text-xs ml-1">※必須</span>
                            </label>
                        </div>
                    </div>

                    <!-- ボタン -->
                    <button type="submit"
                        class="bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition">
                        入力内容を確認
                    </button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>