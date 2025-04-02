<?php
session_start();
$form = $_SESSION['form'] ?? $_POST;
?>

<?php
$page_title = "CEM | 水と太陽のエネルギーソリューション";
include 'header.php';
?>

<!-- ヒーローセクション -->
<section id="home" class="hero home_hero">
    <div class="hero_bg bg_gley">
        <h2 class="ft_sz22">持続可能な未来へ</h2>
    </div>
    <h3 class="bg_blue ">
        水と太陽のエネルギーソリューションで<br />
        環境経営を積極支援！
    </h3>
</section>

<main>
    <!-- News セクション -->
    <section id="news">
        <div class="container">
            <div class="section_wrap">
                <div class="section_title">
                    <span class="decor"></span>
                    <h2>News</h2>
                </div>
            </div>
            <ul class="time_items">
                <li class="time_list">
                    <time datetime="2025-03-30">2025.03.30</time>
                    <span class="time_title">
                        ホームページをリニューアルしました。
                    </span>
                </li>
                <li class="time_list">
                    <time datetime="2025-04-01">2025.04.01</time>
                    <span class="time_title">
                        プライバシーポリシーを改訂しました。
                    </span>
                </li>
            </ul>
        </div>
    </section>

    <!-- 会社情報 -->
    <section id="company">
        <div class="container no_pd">
            <ul class="row_items">
                <li class="row_list">
                    <div class="lg_img">
                        <img
                            src="/img/company_front.webp"
                            alt="会社案内" />
                    </div>
                    <div class="lg_content">
                        <div class="section_wrap">
                            <div class="section_title">
                                <span class="decor"></span>
                                <h2>会社情報</h2>
                            </div>
                        </div>
                        <p class="lg_text">
                            シーイーエムについて<br />
                            会社所在地等の基本情報を掲載しています。
                        </p>

                        <a
                            href="about.php"
                            class="more_btn btn_blue"
                            role="button"
                            tabindex="0">もっと見る</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- 事業内容 -->
    <section id="business">
        <div class="container">
            <div class="section_wrap">
                <div class="section_title">
                    <span class="decor"></span>
                    <h2>事業内容</h2>
                </div>
            </div>
            <ul class="card_items">
                <li class="card_list">
                    <div class="card_img">
                        <img
                            src="img/micro_exp.webp"
                            alt="マイクロ水力発電" />
                    </div>
                    <div class="card_content">
                        <h3>マイクロ水力発電</h3>
                        <p>
                            屋外用・屋内用のマイクロ水力発電機を提供しています。
                        </p>
                        <p>
                            農業用水・施設循環水・下水道等の小さな水源を有効活用できます。
                        </p>
                        <a
                            href="micro.php"
                            class="more_btn btn_blue"
                            role="button"
                            tabindex="0">もっと見る</a>
                    </div>
                </li>
                <li class="card_list">
                    <div class="card_img">
                        <img
                            src="img/panel_roof.webp"
                            alt="太陽光発電・蓄電システム" />
                    </div>
                    <div class="card_content">
                        <h3>太陽光発電・蓄電システム</h3>
                        <p>
                            建物屋根を利用した太陽光発電システムを提供しています。
                        </p>
                        <p>
                            既存スペースの有効活用によりエネルギーコストの削減や環境経営に貢献できます。
                        </p>
                        <a
                            href="solar.php"
                            class=" more_btn btn_blue"
                            role="button"
                            tabindex="0">もっと見る</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- お問い合わせフォーム -->
    <section id="contact">
        <div class="container">
            <div class="section_wrap">
                <div class="section_title">
                    <span class="decor"></span>
                    <h2>お問い合わせ</h2>
                </div>
            </div>
            <p>
                お問い合わせ内容をご入力の上、「入力内容を確認」ボタンを押してください。
            </p>
            <form id="form" action="confirm.php" method="post" autocomplete="on">
                <div class="form_body">
                    <div class="form_label">
                        <label for="name">お名前</label><span class="required">※必須</span>
                    </div>
                    <div class="form_input">
                        <input
                            type="text"
                            id="name"
                            name="name"
                            autocomplete="name"
                            required
                            value="<?= htmlspecialchars($form['name'] ?? '') ?>" />
                    </div>
                </div>

                <div class="form_body">
                    <div class="form_label">
                        <label for="email">メールアドレス</label><span class="required">※必須</span>
                    </div>
                    <div class="form_input">
                        <input
                            type="email"
                            id="email"
                            name="email"
                            autocomplete="email"
                            required
                            value="<?= htmlspecialchars($form['email'] ?? '') ?>" />
                    </div>
                </div>
                <div class="form_body">
                    <div class="form_label">
                        <label for="organization">会社名</label>
                    </div>
                    <div class="form_input">
                        <input
                            type="text"
                            id="organization"
                            name="organization"
                            autocomplete="organization"
                            value="<?= htmlspecialchars($form['organization'] ?? '') ?>" />
                    </div>
                </div>
                <div class="form_body">
                    <div class="form_label">
                        <label for="tel">電話番号（ハイフン不要）</label>
                    </div>
                    <div class="form_input">
                        <input
                            type="tel"
                            id="tel"
                            name="tel"
                            autocomplete="tel"
                            pattern="\d{10,11}" title="10〜11桁の数字で入力してください"
                            value="<?= htmlspecialchars($form['tel'] ?? '') ?>" />
                    </div>
                </div>
                <div class="form_body">
                    <div class="form_label">
                        <label for="detail">お問い合わせ内容</label>
                        <span class="required">※必須</span>
                    </div>
                    <div class="form_input">
                        <textarea
                            id="detail"
                            name="detail"
                            required
                            autocomplete="off"><?= htmlspecialchars($form['detail'] ?? '') ?></textarea>
                    </div>
                </div>

                <!-- プライバシーポリシー同意チェックボックス -->
                <div class="privacy_policy">
                    <a href="policy.php">プライバシーポリシーを確認する</a>
                    <label>
                        <input type="checkbox" name="agree" value="1" <?= isset($form['agree']) ? 'checked' : '' ?> required />
                        <span>プライバシーポリシーに同意する</span>
                        <span class="required">※必須</span>
                    </label>
                </div>

                <button type="submit" class="more_btn btn_blue">入力内容を確認</button>
            </form>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>