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

<?php
$breadcrumbs = [
    ['url' => '/',               'label' => 'ホーム'],
    ['url' => 'micro.php',       'label' => 'マイクロ水力発電'],
    ['url' => 'crutto.php',      'label' => 'Crutto', 'active' => true],
];
include 'bread.php';
?>

<main>
    <section id="about_crutto" class="py-8 bg-white">
        <div class="grid overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-3 h-8 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-[30deg] block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">製品情報</h2>
                </div>
            </div>
            <!-- 製品画像・スペック -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 w-full max-w-screen-xl mx-auto px-4 py-6">
                <!-- 画像セクション -->
                <div class="place-self-center m-4 w-full aspect-[4/3] max-w-screen-sm bg-inherit">
                    <img
                        src="img/crutto_status.webp"
                        alt="crutto全景"
                        class="w-full h-full object-cover object-center rounded-md shadow-md bg-inherit" />
                </div>

                <div class="grid gap-4 w-full px-4">
                    <h3 class="text-lg font-bold justify-self-center">【基本仕様】</h3>
                    <dl class="w-3/4 lg:w-5/6 max-[510px]:w-full mx-auto border-x-0 border-t border-b border-solid border-gray-500 divide-y divide-gray-300 text-sm col2_list">
                        <!-- 各行を grid で 2 列に -->
                        <div>
                            <dt>水車形式</dt>
                            <dd>小型フランシス水車</dd>
                        </div>
                        <div>
                            <dt>適用流量</dt>
                            <dd>4〜70ℓ/s</dd>
                        </div>
                        <div>
                            <dt>適用落差</dt>
                            <dd>
                                4〜60m<br>（0.1Mpa = 10m換算）
                            </dd>
                        </div>
                        <div>
                            <dt>発電効率</dt>
                            <dd>最大87%</dd>
                        </div>
                        <div>
                            <dt>発電出力</dt>
                            <dd>0.2〜5kW</dd>
                        </div>
                        <div>
                            <dt>電力用途</dt>
                            <dd>売電 / 自家消費</dd>
                        </div>
                        <div>
                            <dt>寸法</dt>
                            <dd>幅310 奥行き340 高さ590</dd>
                        </div>
                        <div>
                            <dt>重量</dt>
                            <dd>30~50kg</dd>
                        </div>
                        <div>
                            <dt>材質</dt>
                            <dd>スチール・ステンレス・アルミ等</dd>
                        </div>
                        <div>
                            <dt>口径</dt>
                            <dd>水車出口口 φ65（異形管の接続可）</dd>
                        </div>
                        <div>
                            <dt>製造元</dt>
                            <dd>株式会社 ユームズ・フロンティア</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <!-- 製品情報・カードリスト -->
        <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,400px)]">
            <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                <!-- 画像エリア -->
                <div class="aspect-[16/10] w-full">
                    <img src="img/compar_hydro.webp"
                        alt="省スペース化"
                        class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                </div>
                <!-- コンテンツエリア -->
                <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                    <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                        <p class="text-left font-bold text-lg"><i class="fa-regular fa-pen-to-square"></i> 徹底的な省スペース化を実現</p>
                        <p class="min-h-[80px]">
                            Cruttoは既設配管にも接続できるよう、徹底的な省スペース化を追求。家電クラスの小型化を実現しました。
                        </p>
                        <p class="min-h-[80px]">
                            重量も30~50kgと男性二人いれば持ち上げられるため、施設内で人力運搬も可能です。
                        </p>
                    </div>
                </div>
            </li>

            <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                <!-- 画像エリア -->
                <div class="aspect-[16/10] w-full">
                    <img src="img/low_cost.webp"
                        alt="ローコストで設置"
                        class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                </div>
                <!-- コンテンツエリア -->
                <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                    <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                        <p class="text-left font-bold text-lg"><i class="fa-regular fa-pen-to-square"></i> ローコストで設置</p>
                        <p class="min-h-[80px]">
                            既存設備を最大限活かせる事で工事費も削減。これまでの水力発電と比べて導入のハードルがぐんと下がりました。
                        </p>
                        <p class="min-h-[80px]">
                            低コストでも安全性はしっかり確保。数々の検証を経て、落差60m相当の水圧にも対応できる高い耐久性を持ち合わせています。
                        </p>
                        <p class="min-h-[80px] text-sm">
                            ※ 設置環境によっては対応コストを要する可能性があります。<br>
                            ※ 水車発電機の設置のみ。配線や付帯設備工事等は別途。
                        </p>
                    </div>
                </div>
            </li>

            <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                <!-- 画像エリア -->
                <div class="aspect-[16/10] w-full">
                    <img src="img/100-200v.webp"
                        alt="100・200V対応"
                        class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                </div>
                <!-- コンテンツエリア -->
                <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                    <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                        <p class="text-left font-bold text-lg"><i class="fa-regular fa-pen-to-square"></i> 100V・200V選択可能</p>
                        <p class="min-h-[80px]">
                            電源仕様を100Vか200Vで選択できます。<br>
                            100Vで日常的な電源として、200Vで動力使用や売電を視野に入れる事ができます。
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <!-- 設置推奨場所 -->
    <section id="crutto_place" class="py-8">
        <div class="grid overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-3 h-8 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-[30deg] block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">設置推奨場所</h2>
                </div>
            </div>
            <p class="justify-self-center px-4 font-medium tracking-wide md:text-lg">
                設置の難易度が低い製品ではあるものの、闇雲に設置しても高い効果は得られません。<br>
                不適切な環境に設置すると性能低下・機器破損につながるため、最適な使用環境を相談した上で運用する事が推奨されます。</p>

            <!-- 適している場所 -->
            <h3 class="tx_ul cent"><i class="fa-regular fa-thumbs-up" style="color: #ff643d;"></i> 設置に適している場所 <i class="fa-regular fa-thumbs-up" style="color: #ff643d;"></i></h3>

            <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,400px)]">
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/circul_water.webp"
                            alt="施設循環水・冷却水"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 leading-relaxed max-[425px]:text-sm">
                            <p class="text-center font-bold text-lg">施設循環水・冷却水</p>
                        </div>
                    </div>
                </li>
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/plant_water.webp"
                            alt="工場排水"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 leading-relaxed max-[425px]:text-sm">
                            <p class="text-center font-bold text-lg">工場排水</p>
                        </div>
                    </div>
                </li>
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/treatment_plant.webp"
                            alt="浄水場"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 leading-relaxed max-[425px]:text-sm">
                            <p class="text-center font-bold text-lg">浄水場</p>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- 適していない場所 -->
            <div class="sc_sp">
                <div class="sp_line"></div>
                <h3><small>設置に適さない場所</small></h3>
                <div class="sp_line"></div>
            </div>

            <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,400px)]">
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/river.webp"
                            alt="低落差地域"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 leading-relaxed max-[425px]:text-sm">
                            <p class="text-center font-bold text-lg">低落差地域</p>
                            <p class="text-center text-base">※ 4m以上の落差必要</p>
                        </div>
                    </div>
                </li>
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/line_img.webp"
                            alt="圧送管"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 leading-relaxed max-[425px]:text-sm">
                            <p class="text-center font-bold text-lg">圧送管</p>
                            <p class="text-center text-base">※ 減圧されるため本来の用途に支障あり <br>
                                ※ 余剰圧力の使用は可</p>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/dirty.webp"
                            alt="海水・温泉水・廃液"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 leading-relaxed max-[425px]:text-sm">
                            <p class="text-center font-bold text-lg">海水・温泉水・廃液</p>
                            <p class="text-center text-base">※ 金属腐食が激しい水質全般</p>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>