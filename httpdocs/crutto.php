<?php
$page_title = "CEM | Crutto";
include 'header.php';
?>


<!-- ヒーローセクション -->
<section
    id="crutto"
    class="pt-[75px] md:pt-[90px] relative grid grid-cols-12 grid-rows-6 h-80 text-white bg-gray-800 bg-[url('/img/crutto_hero.webp')] bg-center bg-cover bg-no-repeat">
    <!-- 中央に配置するタイトル -->
    <div class="col-span-12 row-start-2 row-end-4 grid grid-cols-12 bg-gray-700/50">
        <h2 class="col-start-1 col-end-13 place-self-center md:col-start-1 md:col-end-6 text-3xl md:text-4xl font-bold">
            Crutto
        </h2>
    </div>
</section>

<section id="bread_crumb">
    <nav aria-label="breadcrumb">
        <ol class="bread_crumb_list">
            <li class="bread_crumb_item">
                <a href="/">
                    <i class="fa-solid fa-house"></i> ホーム
                </a>
            </li>
            <li class="bread_crumb_item">
                <a href="micro.php">
                    マイクロ水力発電
                </a>
            </li>
            <li class="bread_crumb_item active" aria-current="page">
                Crutto
            </li>
        </ol>
    </nav>
</section>

<main>
    <section id="about_crutto" class="py-8">
        <div class="grid justify-center py-8 overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-2 h-7 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-12 block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">製品情報</h2>
                </div>
            </div>
            <div class="img_text_list">
                <div class="img_list ar_tl">
                    <img
                        src="img/crutto_status.webp"
                        alt="crutto全景" />
                </div>

                <div class="spec_table">
                    <h3 class="cent tx_ul no_dc">基本仕様</h3>
                    <table>
                        <tbody>
                            <tr>
                                <th>水車形式</th>
                                <td>小型フランシス水車</td>
                            </tr>
                            <tr>
                                <th>適用流量</th>
                                <td>
                                    4〜70ℓ/s
                                </td>
                            </tr>
                            <tr>
                                <th>適用落差</th>
                                <td>
                                    4〜60m<br>（0.1Mpa = 10m換算）
                                </td>
                            </tr>
                            <tr>
                                <th>発電効率</th>
                                <td>最大87%</td>
                            </tr>
                            <tr>
                                <th>発電出力</th>
                                <td>0.2〜5kW</td>
                            </tr>
                            <tr>
                                <th>電力用途</th>
                                <td>売電 / 自家消費</td>
                            </tr>
                            <tr>
                                <th>寸法</th>
                                <td>幅310 奥行き340 高さ590</td>
                            </tr>
                            <tr>
                                <th>重量</th>
                                <td>30~50kg</td>
                            </tr>
                            <tr>
                                <th>材質</th>
                                <td>スチール・ステンレス・アルミ等</td>
                            </tr>
                            <tr>
                                <th>口径</th>
                                <td>水車出入口 Φ65（異形管の接続可）</td>
                            </tr>
                            <tr>
                                <th>製造元</th>
                                <td>株式会社 ユームズ・フロンティア</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <ul class="card_items">
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/compar_hydro.webp"
                            alt="省スペース化" />
                    </div>
                    <div class="card_content">
                        <p class="other_title title_left"><span><i class="fa-regular fa-pen-to-square"></i> 徹底的な省スペース化を実現</span></p>
                        <p>
                            Cruttoは既設配管にも接続できるよう、徹底的な省スペース化を追求。家電クラスの小型化を実現しました。
                        </p>
                        <p>
                            重量も30~50kgと男性二人いれば持ち上げられるため、施設内で人力運搬も可能です。
                        </p>
                    </div>
                </li>
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/low_cost.webp"
                            alt="ローコストで設置" />
                    </div>
                    <div class="card_content">
                        <p class="other_title title_left"><span><i class="fa-regular fa-pen-to-square"></i> ローコストで設置</span></p>
                        <p>
                            既存設備を最大限活かせる事で工事費も削減。これまでの水力発電と比べて導入のハードルがぐんと下がりました。
                        </p>
                        <p>
                            低コストでも安全性はしっかり確保。数々の検証を経て、落差60m相当の水圧にも対応できる高い耐久性を持ち合わせています。
                        </p>
                        <p><small>
                                ※ 設置環境によっては対応コストを要する可能性があります。<br>
                                ※ 水車発電機の設置のみ。配線や付帯設備工事等は別途。
                            </small>
                        </p>
                    </div>
                </li>
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/100-200v.webp"
                            alt="100・200V対応" />
                    </div>
                    <div class="card_content">
                        <p class="other_title title_left"><span><i class="fa-regular fa-pen-to-square"></i> 100V・200V選択可能</span></p>
                        <p>
                            電源仕様を100Vか200Vで選択できます。<br>
                            100Vで日常的な電源として、200Vで動力使用や売電を視野に入れる事ができます。
                        </p>
                    </div>
                </li>
            </ul>
    </section>

    <section id="crutto_place" class="py-8">
        <div class="grid justify-center py-8 overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-2 h-7 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-12 block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">設置推奨場所</h2>
                </div>
            </div>
            <p class="self_cent tx_st">設置の難易度が低い製品ではあるものの、闇雲に設置しても高い効果は得られません。<br>
                不適切な環境に設置すると性能低下・機器破損につながるため、最適な使用環境を相談した上で運用する事が推奨されます。</p><br>

            <h3 class="tx_ul cent"><i class="fa-regular fa-thumbs-up" style="color: #ff643d;"></i> 設置に適している場所 <i class="fa-regular fa-thumbs-up" style="color: #ff643d;"></i></h3>
            <ul class="card_items">
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/circul_water.webp"
                            alt="施設循環水・冷却水" />
                    </div>
                    <div class="card_content">
                        <div class="other_title">施設循環水・冷却水</div>
                    </div>
                </li>
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/plant_water.webp"
                            alt="工場排水" />
                    </div>
                    <div class="card_content">
                        <div class="other_title">工場排水</div>
                    </div>
                </li>
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/treatment_plant.webp"
                            alt="浄水場" />
                    </div>
                    <div class="card_content">
                        <div class="other_title">浄水場</div>
                    </div>
                </li>
            </ul>

            <div class="sc_sp">
                <div class="sp_line"></div>
                <h3><small>設置に適さない場所</small></h3>
                <div class="sp_line"></div>
            </div>
            <ul class="card_items">
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/river.webp"
                            alt="低落差地域" />
                    </div>
                    <div class="card_content">
                        <div class="other_title">低落差地域</div>
                        <p class="cent">※ 4m以上の落差必要</p>
                    </div>
                </li>
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/line_img.webp"
                            alt="圧送管" />
                    </div>
                    <div class="card_content">
                        <div class="other_title">圧送管</div>
                        <p class="self_cent">※ 減圧されるため本来の用途に支障あり <br>
                            ※ 余剰圧力の使用は可</p>
                    </div>
                </li>
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/dirty.webp"
                            alt="海水・温泉水・廃液" />
                    </div>
                    <div class="card_content">
                        <div class="other_title">海水・温泉水・廃液</div>
                        <p class="cent">※ 金属腐食が激しい水質全般</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>