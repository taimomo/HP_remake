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
            <div class="img_text_list">
                <div class="text_list">
                    <h3 class="band_style">会社名</h3>
                    <p>株式会社シーイーエム</p>

                    <h3 class="band_style">設立</h3>
                    <p>1999年5月</p>

                    <h3 class="band_style">代表取締役</h3>
                    <p>下野 満朗</p>

                    <h3 class="band_style">従業員数</h3>
                    <p>3名</p>

                    <h3 class="band_style">事業内容</h3>
                    <ul>
                        <li>マイクロ水力発電設備の販売・導入支援</li>
                        <li>太陽光発電・蓄電設備の販売・導入支援</li>
                    </ul>

                    <h3 class="band_style">所在地</h3>
                    <p>
                        〒250-0631<br />
                        神奈川県足柄下郡箱根町仙石原885番地2<br />
                        ミリオンロイヤル箱根仙石原105
                    </p>

                    <h3 class="band_style">TEL・FAX</h3>
                    <p>
                        TEL : 0460-83-9535<br />
                        FAX : 0460-83-9537
                    </p>
                </div>

                <div class="map_container">
                    <h3>【アクセス】</h3>
                    <div id="map"></div>

                    <script type="module" src="/js/main.js"></script>
                    <p>
                        箱根登山バス・小田急箱根高速バス「仙石原文化センター前」　徒歩1分<br /><br />
                        <span>※ お車でお越しの場合</span>
                        建物敷地の駐車場は先着順となっております（予約不可）。<br />
                        駐車できない場合はご相談ください。
                    </p>
                </div>
    </section>
</main>

<!-- <script type="module" src="js/map.js"></script> -->

<?php include 'footer.php'; ?>