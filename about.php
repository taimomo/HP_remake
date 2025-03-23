<?php
$page_title = "CEM | 会社情報";
include 'header.php';
?>
<?php include './config.php'; ?>

<!-- ヒーローセクション -->
<section id="about" class="hero about_hero">
    <h2>会社概要</h2>
</section>

<section id="bread_crumb">
    <nav aria-label="breadcrumb">
        <ol class="bread_crumb_list">
            <li class="bread_crumb_item">
                <a href="/">
                    <i class="fa-solid fa-house"></i> ホーム
                </a>
            </li>
            <li class="bread_crumb_item active" aria-current="page">
                会社概要
            </li>
        </ol>
    </nav>
</section>

<main>
    <section id="about_company">
        <div class="container">
            <div class="img_text_list">
                <div class="text_list">
                    <h3>会社名</h3>
                    <p>株式会社シーイーエム</p>

                    <h3>設立</h3>
                    <p>2000年1月1日</p>

                    <h3>代表取締役</h3>
                    <p>下野 満朗</p>

                    <h3>従業員数</h3>
                    <p>3名</p>

                    <h3>事業内容</h3>
                    <ul>
                        <li>マイクロ水力発電設備の販売・導入支援</li>
                        <li>太陽光発電・蓄電設備の販売・導入支援</li>
                    </ul>

                    <h3>所在地</h3>
                    <p>
                        〒250-0631<br />
                        神奈川県足柄下郡箱根町仙石原885番地2<br />
                        ミリオンロイヤル箱根仙石原105
                    </p>

                    <h3>TEL・FAX</h3>
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
                        <span>※ お車でお越しの場合</span><br />
                        建物敷地の駐車場は先着順となっております（予約不可）。<br />
                        駐車できない場合はご相談ください。
                    </p>
                </div>
    </section>
</main>

<?php include 'footer.php'; ?>