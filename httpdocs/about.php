<?php
$page_title = "CEM | 会社情報";
include 'header.php';
?>
<?php include './config.php'; ?>

<!-- ヒーローセクション -->
<section
    id="about"
    class="pt-[75px] md:pt-[90px] relative grid grid-cols-12 grid-rows-6 h-80 text-white bg-gray-800 bg-[url('/img/about_top.webp')] bg-center bg-cover bg-no-repeat">
    <!-- 中央に配置するタイトル -->
    <div class="col-span-12 row-start-2 row-end-4 grid grid-cols-12 bg-gray-700/50">
        <h2 class="col-start-1 col-end-13 place-self-center md:col-start-1 md:col-end-6 text-3xl md:text-4xl font-bold">
            会社概要
        </h2>
    </div>
</section>

<?php
$breadcrumbs = [
    ['url' => '/',               'label' => 'ホーム'],
    ['url' => 'about.php',       'label' => '会社概要', 'active' => true],
];
include 'bread.php';
?>

<main>
    <section id="about_company">
        <div class="grid overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full mx-auto px-4 py-6">
                <!-- テキストセクション -->
                <div class="grid gap-4 w-4/5 max-[480px]:w-full px-4 justify-self-center">
                    <h3 class="pl-3 py-2 border-l-8 border-[#3656a7] bg-[#f1f0f0] font-bold">会社名</h3>
                    <p>株式会社シーイーエム</p>

                    <h3 class="pl-3 py-2 border-l-8 border-[#3656a7] bg-[#f1f0f0] font-bold">設立</h3>
                    <p>1999年5月</p>

                    <h3 class="pl-3 py-2 border-l-8 border-[#3656a7] bg-[#f1f0f0] font-bold">代表取締役</h3>
                    <p>下野 満朗</p>

                    <h3 class="pl-3 py-2 border-l-8 border-[#3656a7] bg-[#f1f0f0] font-bold">従業員数</h3>
                    <p>3名</p>

                    <h3 class="pl-3 py-2 border-l-8 border-[#3656a7] bg-[#f1f0f0] font-bold">事業内容</h3>
                    <ul>
                        <li>マイクロ水力発電設備の販売・導入支援</li>
                        <li>太陽光発電・蓄電設備の販売・導入支援</li>
                    </ul>

                    <h3 class="pl-3 py-2 border-l-8 border-[#3656a7] bg-[#f1f0f0] font-bold">所在地</h3>
                    <p>
                        〒250-0631<br />
                        神奈川県足柄下郡箱根町仙石原885番地2<br />
                        ミリオンロイヤル箱根仙石原105
                    </p>

                    <h3 class="pl-3 py-2 border-l-8 border-[#3656a7] bg-[#f1f0f0] font-bold">TEL・FAX</h3>
                    <p>
                        TEL : 0460-83-9535<br />
                        FAX : 0460-83-9537
                    </p>
                </div>

                <div class="grid gap-4 w-full p-4 place-self-center">
                    <h3 class="text-center text-xl font-bold">【アクセス】</h3>

                    <div id="map" class="w-full min-h-[400px] h-[50vh] rounded-lg shadow-md"></div>

                    <p class="mt-2 text-left text-base leading-relaxed">
                        箱根登山バス・小田急箱根高速バス「仙石原文化センター前」 徒歩1分
                        <br /><br />
                        <span class="block mt-2 font-bold">
                            ※ お車でお越しの場合
                        </span>
                        建物敷地の駐車場は先着順となっております（予約不可）。<br />
                        駐車できない場合はご相談ください。
                    </p>
                </div>
    </section>
</main>

<?php include 'footer.php'; ?>