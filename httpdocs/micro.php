<?php
$page_title = "CEM | マイクロ水力発電";
include 'header.php';
?>

<!-- ヒーローセクション -->
<?php
$hero_id      = 'micro';
$hero_title   = 'マイクロ水力発電';
$hero_bg      = '/img/micro_exp.webp';

include 'hero.php';
?>

<!-- パンくずリスト -->
<?php
$breadcrumbs = [
    ['url' => '/',               'label' => 'ホーム'],
    ['url' => 'micro.php',       'label' => 'マイクロ水力発電', 'active' => true],
];
include 'bread.php';
?>

<main>
    <section id="about_micro" class="py-8">
        <div class="grid overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-3 text-left">
                    <span class="w-3 h-8 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-[30deg] block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">マイクロ水力とは？</h2>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 w-full max-w-screen-xl mx-auto px-4 py-6">
                <!-- テキストセクション -->
                <div class="grid gap-4 w-full px-4">
                    <p class="max-w-prose leading-relaxed text-gray-800 justify-self-center">
                        明確な規定はありませんが、主に100kW未満の水力発電を業界内では『マイクロ』と呼称しています。
                    </p>
                    <p class="max-w-prose leading-relaxed text-gray-800 justify-self-center">
                        発電設備の規模とkW単価は反比例の傾向があるため、数100・数1000kW規模の発電所に比べて建設単価が割高になりがちですが、未利用水を有効活用でき脱炭素にも貢献できるため普及が期待されています。
                    </p>

                    <!-- テーブル -->
                    <table class="w-auto mx-auto border-collapse text-sm text-gray-800 rounded-md shadow-sm max-w-[400px]">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 font-bold border-b-2 border-dashed border-gray-300 text-center text-lg">
                                    【マイクロ水力の利点】
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border-b-2 border-dashed border-gray-300 text-center">
                                    ダム等の巨大設備不要
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border-b-2 border-dashed border-gray-300 text-center">
                                    小規模の水源を利用可能
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border-b-2 border-dashed border-gray-300 text-center">
                                    大規模に比べて手続き等が簡素
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 text-center border-gray-300">
                                    売電単価が高い（2024年時点 34円/kW）
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- 画像セクション -->
                <div class="place-self-center m-4 w-full aspect-[16/9] max-w-screen-sm">
                    <img
                        src="img/water_station.webp"
                        alt="マイクロ水力発電"
                        class="w-full h-full object-cover object-center rounded-md shadow-md" />
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="py-8  bg-gray-100">
        <div class="grid overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-3 h-8 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-[30deg] block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">取扱製品</h2>
                </div>
            </div>

            <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,400px)]">
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center rounded-xl shadow-[3px_3px_8px_rgba(100,100,100,0.3)] hover:shadow-[3px_3px_8px_rgba(100,100,100,0.5)] transition-shadow max-w-sm min-w-0 md:max-w-none">
                    <h3 class="text-xl font-bold text-center my-4">縦置き型マイクロ水力発電機<br>『パワーアルキメデス』</h3>
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img src="img/hanami_pic.webp"
                            alt="パワーアルキメデス"
                            class="w-full h-full object-cover object-center block rounded-xl" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr] gap-4 p-4 place-items-center min-w-0">
                        <h2 class="text-center font-bold text-lg">【農業用水・排水用 屋外向け】</h2>
                        <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                            <p class="min-h-[80px]">開放型・配管型兼用の水車発電機です。主に発電所建設による発電事業を対象とした製品です。</p>
                            <p class="font-bold text-md text-center leading-relaxed underline">
                                適用発電出力：1~50kW
                            </p>
                        </div>
                    </div>
                    <a
                        href="arc.php"
                        role="button"
                        tabindex="0"
                        class="block w-36 md:w-40 px-4 py-2 text-center rounded-full align-self-end justify-self-center font-bold bg-[#2e4488] hover:bg-sky-400 text-white shadow-md hover:shadow-lg transition-colors duration-300 ease-in-out max-[425px]:text-[0.8rem]">
                        もっと見る
                    </a>
                </li>

                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center rounded-xl shadow-[3px_3px_8px_rgba(100,100,100,0.3)] hover:shadow-[3px_3px_8px_rgba(100,100,100,0.5)] transition-shadow max-w-sm min-w-0 md:max-w-none">
                    <h3 class="text-xl font-bold text-center my-4">超小型マイクロ水力発電機 <br>『Crutto』</h3>
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img src="img/crutto.webp"
                            alt="Crutto"
                            class="w-full h-full object-cover object-center block rounded-xl" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr] gap-4 p-4 place-items-center min-w-0">
                        <h2 class="text-center font-bold text-lg">【施設循環水・冷却水用 屋内向け】</h2>
                        <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                            <p class="min-h-[80px]">配管専用の水車発電機です。主に施設内での自家消費を対象とした製品です。</p>
                            <p class="font-bold text-md text-center leading-relaxed underline">
                                適用発電出力：0.2~5kW
                            </p>
                        </div>
                    </div>
                    <a
                        href="crutto.php"
                        role="button"
                        tabindex="0"
                        class="block w-36 md:w-40 px-4 py-2 text-center rounded-full align-self-end justify-self-center font-bold bg-[#2e4488] hover:bg-sky-400 text-white shadow-md hover:shadow-lg transition-colors duration-300 ease-in-out max-[425px]:text-[0.8rem]">
                        もっと見る
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section id="water_flow" class="py-8">
        <div class="grid overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-3 h-8 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-[30deg] block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">導入フロー</h2>
                </div>
            </div>
            <div class="grid gap-8 place-items-center w-full">
                <!-- 上部のフロー画像 -->
                <img src="/img/water_flow.webp" alt="水力導入フロー" class="w-4/5 md:w-9/10 mx-auto" />
                <!-- カードリスト -->
                <div class="grid min-[600px]:[grid-template-columns:repeat(auto-fit,350px)] justify-center gap-8 p-4 w-full">

                    <!-- 1つ目のカード -->
                    <div class="grid grid-rows-[60px_auto] bg-white rounded-md shadow-md p-4">
                        <h3 class="text-xl text-center font-bold mb-2 max-[425px]:text-lg">
                            ① 調査・打ち合わせ・契約
                        </h3>
                        <div class="text-base max-[425px]:text-sm leading-relaxed space-y-2">
                            <p class="break-words">設計会社等に依頼し発電候補地の確認・調査を経て、具体的な仕様検討を行います。</p>
                            <ul class="list-disc pl-6 space-y-1">
                                <li>水利権等の法的影響</li>
                                <li>電力会社への接続検討</li>
                                <li>既存水利用者の同意取得</li>
                            </ul>
                            <p>仕様・金額確定後、契約に移ります。</p>
                        </div>
                    </div>
                    <div class="grid grid-rows-[60px_auto] bg-white rounded-md shadow-md p-4">
                        <h3 class="text-xl text-center font-bold mb-2 max-[425px]:text-lg">
                            ② 設計・製造
                        </h3>
                        <div class="text-base max-[425px]:text-sm leading-relaxed space-y-2">
                            <p>詳細な図面作成、機器設計及び手配・製造を行います。</p>
                            <p class="font-semibold ">　製造品納期：<br>
                                　パワーアルキメデス：約6～12ヶ月<br>
                                　Crutto：約2～3ヶ月</p>
                            <p class="text-sm">※ ①②は案件次第で内容変更、同時進行する事があります。</p>
                            <p class="text-sm">※ 補助金等の適用についてはお問い合わせください。</p>
                        </div>
                    </div>

                    <div class="grid grid-rows-[60px_auto] bg-white rounded-md shadow-md p-4">
                        <h3 class="text-xl text-center font-bold mb-2 max-[425px]:text-lg">
                            ③ 各種工事
                        </h3>
                        <div class="text-base max-[425px]:text-sm leading-relaxed space-y-2">
                            <p>現場関連の工事を実施します。</p>
                            <p>極力既存の水利用者様に負担を強いる事がないよう、事前周知の徹底が大事です。</p>
                            <p class="text-sm">※ 施工はお客様手配の工事会社様でも可能です。</p>
                            <p class="text-sm">※ 工事会社紹介等についてはお問い合わせください。</p>
                        </div>
                    </div>

                    <div class="grid grid-rows-[60px_auto] bg-white rounded-md shadow-md p-4">
                        <h3 class="text-xl text-center font-bold mb-2 max-[425px]:text-lg">
                            ④ 試運転調整・運転開始
                        </h3>
                        <div class="text-base max-[425px]:text-sm leading-relaxed space-y-2">
                            <p>無水・有水の試験を実施します。</p>
                            <p>水車発電機独自のものと一般的な項目があるため、詳細は打合せを経て決定します。</p>
                            <p class="text-sm">※ 基本的に有水試験は現地据付後の実施になります。</p>
                            <p class="text-sm">※ 電力会社等の立会が必要な場合があります。</p>
                        </div>
                    </div>

                    <div class="grid grid-rows-[60px_auto] bg-white rounded-md shadow-md p-4">
                        <h3 class="text-xl text-center font-bold mb-2 max-[425px]:text-lg">
                            ⑤ お引き渡し
                        </h3>
                        <div class="text-base max-[425px]:text-sm leading-relaxed space-y-2">
                            <p>各種試験が完了し、試運転の結果が問題なければお引き渡しになります。</p>
                            <p>不備や追加項目がある場合は後日調整・再見積・再施工等を経て完了となります。</p>
                        </div>
                    </div>

                    <div class="grid grid-rows-[60px_auto] bg-white rounded-md shadow-md p-4">
                        <h3 class="text-xl text-center font-bold mb-2 max-[425px]:text-lg">
                            ⑥ アフターメンテ
                        </h3>
                        <div class="text-base max-[425px]:text-sm leading-relaxed space-y-2">
                            <p>機械を正常な状態で維持するためには適切なメンテナンスが欠かせません。</p>
                            <p>日常点検の指導や緊急事態への対応等は随時受け付けております。また、毎年一回の年次点検をおススメしています。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="font-bold text-2xl text-[#a02e5a] text-center m-4 p-4 tracking-wider drop-shadow-md md:text-3xl max-[425px]:text-lg">計画・調達・導入まで一貫サポート！</div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>