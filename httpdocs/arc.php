<?php
$page_title = "CEM | パワーアルキメデス";
include 'header.php';
?>


<!-- ヒーローセクション -->
<section
    id="arc"
    class="pt-[75px] md:pt-[90px] relative grid grid-cols-12 grid-rows-6 h-80 text-white bg-gray-800 bg-[url('/img/hanami_pic.webp')] bg-center bg-cover bg-no-repeat">
    <!-- 中央に配置するタイトル -->
    <div class="col-span-12 row-start-2 row-end-4 grid grid-cols-12 bg-gray-700/50">
        <h2 class="col-start-1 col-end-13 place-self-center md:col-start-1 md:col-end-6 text-3xl md:text-4xl font-bold">
            パワーアルキメデス
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
                パワーアルキメデス
            </li>
        </ol>
    </nav>
</section>

<main>
    <section id="about_arc" class="py-8">
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
                        src="img/arc_style.webp"
                        alt="パワーアルキメデス全景" />
                </div>

                <div class="spec_table">
                    <h3 class="cent tx_ul no_dc">基本仕様</h3>
                    <table>
                        <tbody>
                            <tr>
                                <th>水車形式</th>
                                <td>縦軸軸流水車</td>
                            </tr>
                            <tr>
                                <th>適用流量</th>
                                <td>
                                    開放型：0.1〜2.5m³/s<br>
                                    配管型：0.01〜1.0m³/s
                                </td>
                            </tr>
                            <tr>
                                <th>適用落差</th>
                                <td>
                                    開放型：1〜5m<br>
                                    配管型：5〜30m
                                </td>
                            </tr>
                            <tr>
                                <th>発電効率</th>
                                <td>最大65%</td>
                            </tr>
                            <tr>
                                <th>発電出力</th>
                                <td>1〜50kW</td>
                            </tr>
                            <tr>
                                <th>電力用途</th>
                                <td>売電 / 自家消費</td>
                            </tr>
                            <tr>
                                <th>寸法</th>
                                <td>□800〜1600mm <br>高さ1500〜6000mm</td>
                            </tr>
                            <tr>
                                <th>重量</th>
                                <td>2〜5t</td>
                            </tr>
                            <tr>
                                <th>材質</th>
                                <td>スチール＋亜鉛メッキ / ステンレス</td>
                            </tr>
                            <tr>
                                <th>製造元</th>
                                <td>株式会社 北陸精機</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        本製品は設置場所に合わせて設計・製造するオーダーメイド品です。<br>価格・寸法は都度異なるため、詳細はお問い合わせください。
                    </p>
                </div>

            </div>
            <ul class="card_items">
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/low_head.webp"
                            alt="低落差対応" />
                    </div>
                    <div class="card_content">
                        <p class="other_title title_left"><span><i class="fa-regular fa-pen-to-square"></i> 低落差で発電可能</span></p>
                        <p>
                            多くの水力発電機は数10mの落差が必要で、長大な配管を敷設する手間と敷地が必要です。
                        </p>
                        <p>
                            パワーアルキメデスは配管だけでなく開水路にも設置でき、数mの落差でも発電を可能としています。
                        </p>
                    </div>
                </li>
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/mini_pic.webp"
                            alt="シンプル構造" />
                    </div>
                    <div class="card_content">
                        <p class="other_title title_left"><span><i class="fa-regular fa-pen-to-square"></i> 手早く設置可能なシンプル構造</span></p>
                        <p>
                            構造を徹底的にシンプル化。最短で半日の据付を可能とし長期間の止水困難な場所にも対応できます。
                        </p>
                        <p><small>
                                ※ 設置環境によっては時間要する可能性があります。<br>
                                ※ 水車発電機の設置のみ。配線や付帯設備工事等は別途。
                            </small>
                        </p>
                    </div>
                </li>
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/garbage.webp"
                            alt="低落差対応" />
                    </div>
                    <div class="card_content">
                        <p class="other_title title_left"><span><i class="fa-regular fa-pen-to-square"></i> 異物混入に強い構造</span></p>
                        <p>
                            大半の水車は異物混入に弱く、出力低下だけでなく致命的な故障の原因にもなり得ます。
                        </p>
                        <p>
                            パワーアルキメデスはプロペラ状の羽根車を採用しているため、空き缶や落ち葉等の多くは通過して下流に排出されます。塵一つ許さないような精密な管理は必要ありません。
                        </p>
                        <p><small>
                                ※ 故障は発生し難くても、出力低下の要因にはなり得ます。<br>
                                ※ 万が一に備えて適切な除塵設備は必要です。
                            </small>
                        </p>
                    </div>
                </li>
            </ul>
    </section>

    <section id="arc_place" class="py-8">
        <div class="grid justify-center py-8 overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-2 h-7 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-12 block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">設置推奨場所</h2>
                </div>
            </div>
            <p class="self_cent tx_st">どのような水車にも最適な環境での使用が推奨されています。<br>
                不適切な環境に設置すると性能低下・機器破損につながるため、最適な使用環境を相談した上で運用する事が推奨されます。</p><br>

            <h3 class="tx_ul cent"><i class="fa-regular fa-thumbs-up" style="color: #ff643d;"></i> 設置に適している場所 <i class="fa-regular fa-thumbs-up" style="color: #ff643d;"></i></h3>
            <ul class="card_items">
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/agri_water.webp"
                            alt="農業用水" />
                    </div>
                    <div class="card_content">
                        <div class="other_title">農業用水</div>
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
                            src="img/sewage_plant.webp"
                            alt="下水処理場" />
                    </div>
                    <div class="card_content">
                        <div class="other_title">下水処理場</div>
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
                            src="img/high_head.webp"
                            alt="高落差地域" />
                    </div>
                    <div class="card_content">
                        <div class="other_title">高落差地域</div>
                        <p class="cent">※ 100kW超の発電は不得手</p>
                    </div>
                </li>
                <li class="card_list nf">
                    <div class="card_img">
                        <img
                            src="img/supply.webp"
                            alt="上水道" />
                    </div>
                    <div class="card_content">
                        <div class="other_title">上水道</div>
                        <p class="cent">※ 飲用水には未対応</p>
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

    <section id="record" class="py-8">
        <div class="grid justify-center py-8 overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-2 h-7 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-12 block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">導入事例</h2>
                </div>
            </div>
            <ul class="card_items">
                <li class="card_list nf">
                    <button class="accordion_header">長野県安曇野市 宮城小水力発電所</button>
                    <div class="accordion_content">
                        <div class="card_img">
                            <img src="/img/azumino_pic.webp" alt="安曇野宮城小水力発電所" />
                        </div>
                        <table>
                            <tr>
                                <th>使用流量</th>
                                <td>0.95m³/s</td>
                            </tr>
                            <tr>
                                <th>有効落差</th>
                                <td>3.0m</td>
                            </tr>
                            <tr>
                                <th>最大発電出力</th>
                                <td>16.9kW</td>
                            </tr>
                            <tr>
                                <th>発電方式</th>
                                <td>低落差開放型</td>
                            </tr>
                            <tr>
                                <th>電力用途</th>
                                <td>全量売電</td>
                            </tr>
                            <tr>
                                <th>事業者</th>
                                <td>有明土地改良区</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li class="card_list nf">
                    <button class="accordion_header">岩手県花巻市 松沢川小水力発電所</button>
                    <div class="accordion_content">
                        <div class="card_img">
                            <img src="/img/hanamaki.webp" alt="松沢川小水力発電所" />
                        </div>
                        <table>
                            <tr>
                                <th>使用流量</th>
                                <td>1号機：1.4m³/s<br>
                                    2号機：0.95m³/s
                                </td>
                            </tr>
                            <tr>
                                <th>有効落差</th>
                                <td>4.1m</td>
                            </tr>
                            <tr>
                                <th>最大発電出力</th>
                                <td>1号機：33.7kW<br>
                                    2号機：13.5kW
                                </td>
                            </tr>
                            <tr>
                                <th>発電方式</th>
                                <td>低落差開放型</td>
                            </tr>
                            <tr>
                                <th>電力用途</th>
                                <td>全量売電</td>
                            </tr>
                            <tr>
                                <th>事業者</th>
                                <td>豊沢川土地改良区</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li class="card_list nf">
                    <button class="accordion_header">宮崎県えびの市 田代陣の池ホタル谷発電所</button>
                    <div class="accordion_content">
                        <div class="card_img">
                            <img src="/img/Ebino.webp" alt="田代陣の池ホタル谷発電所" />
                        </div>
                        <table>
                            <tr>
                                <th>使用流量</th>
                                <td>0.4m³/s</td>
                            </tr>
                            <tr>
                                <th>有効落差</th>
                                <td>5.9m</td>
                            </tr>
                            <tr>
                                <th>最大発電出力</th>
                                <td>13.9kW</td>
                            </tr>
                            <tr>
                                <th>発電方式</th>
                                <td>中落差配管型</td>
                            </tr>
                            <tr>
                                <th>電力用途</th>
                                <td>全量売電</td>
                            </tr>
                            <tr>
                                <th>事業者</th>
                                <td>えびの市土地改良区</td>
                            </tr>
                        </table>
                    </div>
                </li>
            </ul>
    </section>
</main>

<?php include 'footer.php'; ?>