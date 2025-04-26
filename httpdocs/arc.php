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

<?php
$breadcrumbs = [
    ['url' => '/',               'label' => 'ホーム'],
    ['url' => 'micro.php',       'label' => 'マイクロ水力発電'],
    ['url' => 'arc.php',         'label' => 'パワーアルキメデス', 'active' => true],
];
include 'bread.php';
?>

<main>
    <!-- 製品情報 -->
    <section id="about_arc" class="py-8">
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
                <div class="place-self-center m-4 w-full aspect-[4/3] max-w-screen-sm">
                    <img
                        src="img/arc_style.webp"
                        alt="パワーアルキメデス全景"
                        class="w-full h-full object-cover object-center rounded-md shadow-md" />
                </div>

                <!-- テーブル -->
                <div class="grid gap-4 w-full px-4">
                    <h3 class="text-lg font-bold justify-self-center">【基本仕様】</h3>

                    <dl class="w-3/4 lg:w-5/6 max-[510px]:w-full mx-auto border-x-0 border-t border-b border-solid border-gray-500 divide-y divide-gray-300 text-sm col2_list">
                        <!-- 各行を grid で 2 列に -->
                        <div>
                            <dt>水車形式</dt>
                            <dd>縦軸軸流水車</dd>
                        </div>
                        <div>
                            <dt>適用流量</dt>
                            <dd>開放型：0.1〜2.5m³/s<br>
                                配管型：0.01〜1.0m³/s</dd>
                        </div>
                        <div>
                            <dt>適用落差</dt>
                            <dd>
                                開放型：1〜5m<br>
                                配管型：5〜30m
                            </dd>
                        </div>
                        <div>
                            <dt>発電効率</dt>
                            <dd>最大65%</dd>
                        </div>
                        <div>
                            <dt>発電出力</dt>
                            <dd>1〜50kW</dd>
                        </div>
                        <div>
                            <dt>電力用途</dt>
                            <dd>売電 / 自家消費</dd>
                        </div>
                        <div>
                            <dt>寸法</dt>
                            <dd>□800〜1600mm <br>高さ1500〜6000mm</dd>
                        </div>
                        <div>
                            <dt>重量</dt>
                            <dd>2〜5t</dd>
                        </div>
                        <div>
                            <dt>材質</dt>
                            <dd>スチール＋亜鉛メッキ / ステンレス</dd>
                        </div>
                        <div>
                            <dt>製造元</dt>
                            <dd>株式会社 北陸精機</dd>
                        </div>
                    </dl>
                    <p class="text-center">
                        本製品は設置場所に合わせて設計・製造するオーダーメイド品です。<br>価格・寸法は都度異なるため、詳細はお問い合わせください。
                    </p>
                </div>
            </div>
        </div>

        <!-- 製品情報・カードリスト -->
        <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,400px)]">
            <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                <!-- 画像エリア -->
                <div class="aspect-[16/9] w-full">
                    <img src="img/low_head.webp"
                        alt="低落差対応"
                        class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                </div>
                <!-- コンテンツエリア -->
                <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                    <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                        <p class="text-left font-bold text-lg"><i class="fa-regular fa-pen-to-square"></i> 低落差で発電可能</p>
                        <p class="min-h-[80px]">
                            多くの水力発電機は数10mの落差が必要で、長大な配管を敷設する手間と敷地が必要です。
                        </p>
                        <p class="min-h-[80px]">
                            パワーアルキメデスは配管だけでなく開水路にも設置でき、数mの落差でも発電を可能としています。
                        </p>
                    </div>
                </div>
            </li>

            <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                <!-- 画像エリア -->
                <div class="aspect-[16/9] w-full">
                    <img src="img/mini_pic.webp"
                        alt="シンプル構造"
                        class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                </div>
                <!-- コンテンツエリア -->
                <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                    <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                        <p class="text-left font-bold text-lg"><i class="fa-regular fa-pen-to-square"></i> 手早く設置可能なシンプル構造</p>
                        <p class="min-h-[80px]">
                            構造を徹底的にシンプル化。最短で半日の据付を可能とし長期間の止水困難な場所にも対応できます。
                        </p>
                        <p class="min-h-[80px] text-sm">
                            ※ 設置環境によっては時間要する可能性があります。<br>
                            ※ 水車発電機の設置のみ。配線や付帯設備工事等は別途。
                        </p>
                    </div>
                </div>
            </li>

            <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                <!-- 画像エリア -->
                <div class="aspect-[16/9] w-full">
                    <img src="img/garbage.webp"
                        alt="異物混入に強い"
                        class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                </div>
                <!-- コンテンツエリア -->
                <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                    <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                        <p class="text-left font-bold text-lg"><i class="fa-regular fa-pen-to-square"></i> 異物混入に強い構造</p>
                        <p class="min-h-[80px]">
                            大半の水車は異物混入に弱く、出力低下だけでなく致命的な故障の原因にもなり得ます。
                        </p>
                        <p class="min-h-[80px]">
                            パワーアルキメデスはプロペラ状の羽根車を採用しているため、空き缶や落ち葉等の多くは通過して下流に排出されます。塵一つ許さないような精密な管理は必要ありません。
                        </p>
                        <p class="min-h-[80px] text-sm">
                            ※ 故障は発生し難くても、出力低下の要因にはなり得ます。<br>
                            ※ 万が一に備えて適切な除塵設備は必要です。
                        </p>
                    </div>
                </div>
            </li>
        </ul>
        </div>
    </section>

    <!-- 設置推奨場所 -->
    <section id="arc_place" class="py-8">
        <div class="grid overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-3 h-8 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-[30deg] block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">設置推奨場所</h2>
                </div>
            </div>
            <p class="justify-self-center px-4 font-medium tracking-wide md:text-lg">
                どのような水車にも最適な環境での使用が推奨されています。<br>
                不適切な環境に設置すると性能低下・機器破損につながるため、最適な使用環境を相談した上で運用する事が推奨されます。</p>

            <!-- 適している場所 -->
            <h3 class="text-lg md:text-xl text-center mt-10"><i class="fa-regular fa-thumbs-up" style="color: #ff643d;"></i> 設置に適している場所 <i class="fa-regular fa-thumbs-up" style="color: #ff643d;"></i></h3>

            <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,400px)]">
                <li class="grid grid-rows-[auto_1fr_auto] p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/agri_water.webp"
                            alt="農業用水"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 leading-relaxed max-[425px]:text-sm">
                            <p class="text-center font-bold text-lg">農業用水</p>
                        </div>
                    </div>
                </li>
                <li class="grid grid-rows-[auto_1fr_auto] p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
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
                <li class="grid grid-rows-[auto_1fr_auto] p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img src="img/sewage_plant.webp"
                            alt="下水処理場"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 leading-relaxed max-[425px]:text-sm">
                            <p class="text-center font-bold text-lg">下水処理場</p>
                        </div>
                    </div>
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
                <li class="grid grid-rows-[auto_1fr_auto] p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/high_head.webp"
                            alt="高落差地域"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 leading-relaxed max-[425px]:text-sm">
                            <p class="text-center font-bold text-lg">高落差地域</p>
                            <p class="text-center text-base">※ 100kW超の発電は不得手</p>
                        </div>
                    </div>
                </li>

                <li class="grid grid-rows-[auto_1fr_auto] p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/supply.webp"
                            alt="上水道"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 leading-relaxed max-[425px]:text-sm">
                            <p class="text-center font-bold text-lg">上水道</p>
                            <p class="text-center text-base">※ 飲用水には未対応</p>
                        </div>
                    </div>
                </li>

                <li class="grid grid-rows-[auto_1fr_auto] p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
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
                        </div>
                    </div>
                </li>
            </ul>
    </section>

    <!-- 導入事例 -->
    <section id="record" class="py-8">
        <div class="grid overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-3 h-8 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-[30deg] block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">導入事例</h2>
                </div>
            </div>

            <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,400px)]">
                <li class="overflow-hidden justify-self-center max-w-sm min-w-0 md:max-w-none py-8">
                    <!-- ヘッダー（ボタン） -->
                    <button class="accordion_header">
                        長野県安曇野市 宮城小水力発電所
                    </button>

                    <!-- 折りたたみコンテンツ -->
                    <div class="accordion_content bg-inherit">
                        <div class="accordion_inner px-2 py-4">
                            <!-- 画像部分 -->
                            <div class="mb-4 aspect-[16/9]">
                                <img
                                    src="/img/azumino_pic.webp"
                                    alt="安曇野宮城小水力発電所"
                                    class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                            </div>
                            <!-- 説明リスト（共有のdl/dt/dd） -->
                            <dl class="gap-y-2 text-sm divide-y divide-gray-300 border-t border-b border-solid border-gray-500 col2_list">
                                <div>
                                    <dt>使用流量</dt>
                                    <dd>0.95m³/s</dd>
                                </div>
                                <div>
                                    <dt>有効落差</dt>
                                    <dd>3.0m</dd>
                                </div>
                                <div>
                                    <dt>最大発電出力</dt>
                                    <dd>16.9kW</dd>
                                </div>
                                <div>
                                    <dt>発電方式</dt>
                                    <dd>低落差開放型</dd>
                                </div>
                                <div>
                                    <dt>電力用途</dt>
                                    <dd>全量売電</dd>
                                </div>
                                <div>
                                    <dt>事業者</dt>
                                    <dd>有明土地改良区</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </li>

                <li class="overflow-hidden justify-self-center max-w-sm min-w-0 md:max-w-none py-8">
                    <!-- ヘッダー（ボタン） -->
                    <button class="accordion_header">
                        岩手県花巻市 松沢川小水力発電所
                    </button>

                    <!-- 折りたたみコンテンツ -->
                    <div class="accordion_content bg-inherit">
                        <div class="accordion_inner px-2 py-4">
                            <!-- 画像部分 -->
                            <div class="mb-4 aspect-[16/9]">
                                <img
                                    src="/img/hanamaki.webp" alt="松沢川小水力発電所"
                                    class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                            </div>
                            <!-- 説明リスト（共有のdl/dt/dd） -->
                            <dl class="gap-y-2 text-sm divide-y divide-gray-300 border-t border-b border-solid border-gray-500 col2_list">
                                <div>
                                    <dt>使用流量</dt>
                                    <dd>1号機：1.4m³/s<br>
                                        2号機：0.95m³/s</dd>
                                </div>
                                <div>
                                    <dt>有効落差</dt>
                                    <dd>4.1m</dd>
                                </div>
                                <div>
                                    <dt>最大発電出力</dt>
                                    <dd>1号機：33.7kW<br>
                                        2号機：13.5kW</dd>
                                </div>
                                <div>
                                    <dt>発電方式</dt>
                                    <dd>低落差開放型</dd>
                                </div>
                                <div>
                                    <dt>電力用途</dt>
                                    <dd>全量売電</dd>
                                </div>
                                <div>
                                    <dt>事業者</dt>
                                    <dd>豊沢川土地改良区</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </li>

                <li class="overflow-hidden justify-self-center max-w-sm min-w-0 md:max-w-none py-8">
                    <!-- ヘッダー（ボタン） -->
                    <button class="accordion_header">
                        宮崎県えびの市 田代陣の池ホタル谷発電所
                    </button>

                    <!-- 折りたたみコンテンツ -->
                    <div class="accordion_content bg-inherit">
                        <div class="accordion_inner px-2 py-4">
                            <!-- 画像部分 -->
                            <div class="mb-4 aspect-[16/9]">
                                <img
                                    src="/img/Ebino.webp" alt="田代陣の池ホタル谷発電所"
                                    class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                            </div>
                            <!-- 説明リスト（共有のdl/dt/dd） -->
                            <dl class="gap-y-2 text-sm divide-y divide-gray-300 border-t border-b border-solid border-gray-500 col2_list">
                                <div>
                                    <dt>使用流量</dt>
                                    <dd>0.4m³/s</dd>
                                </div>
                                <div>
                                    <dt>有効落差</dt>
                                    <dd>5.9m</dd>
                                </div>
                                <div>
                                    <dt>最大発電出力</dt>
                                    <dd>13.9kW</dd>
                                </div>
                                <div>
                                    <dt>発電方式</dt>
                                    <dd>中落差配管型</dd>
                                </div>
                                <div>
                                    <dt>電力用途</dt>
                                    <dd>全量売電</dd>
                                </div>
                                <div>
                                    <dt>事業者</dt>
                                    <dd>えびの市土地改良区</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>