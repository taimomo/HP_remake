<?php
$page_title = "CEM | Crutto";
include 'header.php';
?>

<!-- ヒーローセクション -->
<?php
$hero_id      = 'crutto';
$hero_title   = 'Crutto';
$hero_bg      = '/img/crutto_hero.webp';

include 'hero.php';
?>

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

            <!-- 製品情報・カードリスト -->
            <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,400px)]">

                <li class="grid grid-rows-[auto_auto_1fr] gap-2 p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/10] w-full">
                        <img src="img/compar_hydro.webp"
                            alt="省スペース化"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <h3 class="justify-self-start font-bold text-md md:text-lg"><i class="fa-regular fa-pen-to-square"></i> 徹底的な省スペース化を実現</h3>
                    <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                        <p>
                            Cruttoは既設配管にも接続できるよう、徹底的な省スペース化を追求。家電クラスの小型化を実現しました。
                        </p>
                        <p>
                            重量も30~50kgと男性二人いれば持ち上げられるため、施設内で人力運搬も可能です。
                        </p>
                    </div>
                </li>

                <li class="grid grid-rows-[auto_auto_1fr] gap-2 p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/10] w-full">
                        <img src="img/low_cost.webp"
                            alt="ローコストで設置"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <h3 class="justify-self-start font-bold text-md md:text-lg"><i class="fa-regular fa-pen-to-square"></i> ローコストで設置</h3>

                    <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                        <p>
                            既存設備を最大限活かせる事で工事費も削減。これまでの水力発電と比べて導入のハードルがぐんと下がりました。
                        </p>
                        <p>
                            低コストでも安全性はしっかり確保。数々の検証を経て、落差60m相当の水圧にも対応できる高い耐久性を持ち合わせています。
                        </p>
                        <p class="text-sm">
                            ※ 設置環境によっては対応コストを要する可能性があります。<br>
                            ※ 水車発電機の設置のみ。配線や付帯設備工事等は別途。
                        </p>
                    </div>
                </li>

                <li class="grid grid-rows-[auto_auto_1fr] gap-2 p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/10] w-full">
                        <img src="img/100-200v.webp"
                            alt="100・200V対応"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <h3 class="justify-self-start font-bold text-md md:text-lg"><i class="fa-regular fa-pen-to-square"></i> 100V・200V選択可能</h3>
                    <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                        <p>
                            電源仕様を100Vか200Vで選択できます。<br>
                            100Vで日常的な電源として、200Vで動力使用や売電を視野に入れる事ができます。
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- 設置推奨場所 -->
    <section id="crutto_place" class="py-8  bg-gray-100">
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
            <h3 class="text-lg md:text-xl text-center mt-10"><i class="fa-regular fa-thumbs-up" style="color: #ff643d;"></i> 設置に適している場所 <i class="fa-regular fa-thumbs-up" style="color: #ff643d;"></i></h3>

            <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,400px)]">
                <li class="grid grid-rows-[auto_1fr] p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/circul_water.webp"
                            alt="施設循環水・冷却水"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <h3 class="text-center font-bold text-lg my-4">施設循環水・冷却水</h3>

                </li>
                <li class="grid grid-rows-[auto_1fr] p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/plant_water.webp"
                            alt="工場排水"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <h3 class="text-center font-bold text-lg my-4">工場排水</h3>
                </li>
                <li class="grid grid-rows-[auto_1fr] p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img src="img/treatment_plant.webp"
                            alt="浄水場"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <h3 class="text-center font-bold text-lg my-4">浄水場</h3>
                </li>
            </ul>

            <!-- 適していない場所 -->
            <div class="w-full grid grid-cols-[1fr_auto_1fr] items-center gap-4 whitespace-nowrap">
                <div class="border-t-2 border-dashed border-black"></div>
                <h3 class="text-base font-normal">
                    設置に適さない場所
                </h3>
                <div class="border-t-2 border-dashed border-black"></div>
            </div>

            <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,400px)]">
                <li class="grid grid-rows-[auto_1fr] p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/river.webp"
                            alt="低落差地域"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr] gap-2 p-4 place-items-center min-w-0">
                        <h3 class="text-center font-bold text-lg">低落差地域</h3>
                        <p class="self-start text-base">※ 4m以上の落差必要</p>
                    </div>
                </li>

                <li class="grid grid-rows-[auto_1fr] p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/line_img.webp"
                            alt="圧送管"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr] gap-2 p-4 place-items-center min-w-0">
                        <h3 class="text-center font-bold text-lg">圧送管</h3>
                        <p class="self-start text-base">※ 減圧されるため本来の用途に支障あり <br>
                            ※ 余剰圧力の使用は可</p>
                    </div>
                </li>

                <li class="grid grid-rows-[auto_1fr] p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/dirty.webp"
                            alt="海水・温泉水・廃液"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr] gap-2 p-4 place-items-center min-w-0">
                        <h3 class="text-center font-bold text-lg">海水・温泉水・廃液</h3>
                        <p class="self-start text-base">※ 金属腐食が激しい水質全般</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>