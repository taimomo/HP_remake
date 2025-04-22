<?php
$page_title = "CEM | 太陽光発電・蓄電";
include 'header.php';
?>

<!-- ヒーローセクション -->
<section
    id="solar"
    class="pt-[75px] md:pt-[90px] relative grid grid-cols-12 grid-rows-6 h-80 text-white bg-gray-800 bg-[url('/img/solar_exp.webp')] bg-center bg-cover bg-no-repeat">
    <!-- 中央に配置するタイトル -->
    <div class="col-span-12 row-start-2 row-end-4 grid grid-cols-12 bg-gray-700/50">
        <h2 class="col-start-1 col-end-13 place-self-center md:col-start-1 md:col-end-7 text-3xl max-[425px]:text-2xl font-bold">
            太陽光発電・蓄電システム
        </h2>
    </div>
</section>

<?php
$breadcrumbs = [
    ['url' => '/',               'label' => 'ホーム'],
    ['url' => 'solar.php',       'label' => '太陽光発電・蓄電システム', 'active' => true],
];
include 'bread.php';
?>

<main>
    <section id="about_solar" class="py-8">
        <div class="grid overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-2 h-7 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-12 block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">太陽光発電の現状</h2>
                </div>
            </div>
            <p class="justify-self-center md:max-w-3xl p-4 font-medium tracking-wide md:text-lg">
                これまでの太陽光発電は、発電量を追求した売電事業が盛んでしたが、FIT（固定価格買取制度）の買取価格低下及び電気代の高騰により、作った電気を『売る』時代から『使う』時代に移行しています。
            </p>

            <!-- 太陽光新旧比較 -->
            <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,450px)]">
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit  rounded-xl border border-black">
                    <h3 class="text-lg font-bold text-center my-4">これまでの太陽光発電</h3>
                    <!-- 画像エリア -->
                    <div class="aspect-[16/4] md:aspect-[16/6] w-full">
                        <img src="img/old_solar.webp"
                            alt="これまでの太陽光発電"
                            class="w-full h-full object-cover object-center block" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="p-4 place-items-center min-w-0">
                        <p class="text-center font-bold text-lg leading-relaxed max-[425px]:text-base">FIT主体（野建・広域・高出力）</p>
                    </div>
                </li>
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit  rounded-xl border border-black">
                    <h3 class="text-lg font-bold text-center my-4">現在の太陽光発電</h3>
                    <!-- 画像エリア -->
                    <div class="aspect-[16/4] md:aspect-[16/6] w-full">
                        <img src="img/now_solar.webp"
                            alt="現在の太陽光発電"
                            class="w-full h-full object-cover object-center block" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="p-4 place-items-center min-w-0">
                        <p class="text-center font-bold text-lg leading-relaxed max-[425px]:text-base">自家消費・蓄電主体（屋根置・需要ベース）</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <!-- サービス紹介 -->
    <section id="service" class="py-8">
        <div class="grid overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-2 h-7 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-12 block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">サービス紹介</h2>
                </div>
            </div>

            <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,400px)]">
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/10] w-full">
                        <img src="img/promise.webp"
                            alt="充実のサポート"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                            <p class="text-left font-bold text-lg"><i class="fa-regular fa-pen-to-square"></i> 安心・充実のサポート・保証体制</p>
                            <p class="min-h-[80px]">
                                多種多様な製品・サービスが増加し、最適解の選択が難しくなりつつあります。
                            </p>
                            <p class="min-h-[80px]">
                                弊社は熟練の国内メーカー協力の元、お客様の環境・ニーズに基づいた最適プランをご提案。保証も含め、スタートから運用まで強力にサポートいたします。
                            </p>
                        </div>
                    </div>
                </li>

                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/10] w-full">
                        <img src="img/mente.webp"
                            alt="柔軟な設置方法"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                            <p class="text-left font-bold text-lg"><i class="fa-regular fa-pen-to-square"></i> 設置場所に配慮した柔軟な設置方法</p>
                            <p class="min-h-[80px]">
                                陸屋根・折半屋根両方に対応可能な架台をご用意。<br>
                                穴開け不要な工法<span class="align-super text-xs">※</span>もあるため、屋根トラブルを防ぎ安心・安全な運用に繋がります。
                            </p>
                            <p class="min-h-[80px] text-sm">
                                ※ 使用に一定の条件があります。詳細はお問い合わせください。
                                </small>
                            </p>
                        </div>
                    </div>
                </li>

                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/10] w-full">
                        <img src="img/advice.webp"
                            alt="オプション品多数"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 text-base leading-relaxed max-[425px]:text-sm">
                            <p class="text-left font-bold text-lg"><i class="fa-regular fa-pen-to-square"></i> 豊富で頼れる数々のオプション品</p>
                            <p class="min-h-[80px]">
                                再エネ機器の導入は短期の収益増以外に、企業価値向上等の目的もあります。
                            </p>
                            <p class="min-h-[80px]">
                                弊社では遠隔監視システムや、外部に成果をPRできる計測・表示システムもラインナップ。お客様のご希望に応じて選択可能です。
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- 設置推奨場所 -->
    <section id="solar_place" class="py-8">
        <div class="grid overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-2 h-7 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-12 block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">設置推奨場所</h2>
                </div>
            </div>
            <p class="justify-self-center px-4 font-medium tracking-wide md:text-lg">
                日照時間が確保できれば発電自体は可能ですが、無駄なく使用するためには最適な使用環境を見極める必要があります。</p>

            <div class="solar_merit">
                <div class="merit_label">メリット大</div>

                <table class="merit_table">
                    <tr>
                        <th>折半屋根</th>
                        <td>取付架台が豊富で安価 施行しやすく早い</td>
                    </tr>
                    <tr>
                        <th>長時間稼働施設</th>
                        <td>発電した電気を多く利用可</td>
                    </tr>
                    <tr>
                        <th>変動少ない安定的な電気使用</th>
                        <td>予測・制御がし易く無駄が少ない</td>
                    </tr>
                </table>
            </div>

            <!-- 代表的な設備 -->
            <h3 class="text-lg font-bold text-center mt-6">【代表的な施設・設備】</h3>
            <ul class="grid gap-6 m-4 justify-center md:[grid-template-columns:repeat(auto-fit,400px)]">
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/refrige_ware.webp"
                            alt="冷凍・冷蔵倉庫"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 leading-relaxed max-[425px]:text-sm">
                            <p class="text-center font-bold text-lg">冷凍・冷蔵倉庫</p>
                        </div>
                    </div>
                </li>
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/arcade.webp"
                            alt="娯楽施設"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 leading-relaxed max-[425px]:text-sm">
                            <p class="text-center font-bold text-lg">娯楽施設</p>
                        </div>
                    </div>
                </li>
                <li class="grid grid-rows-[auto_1fr_auto] bg-white p-6 justify-self-center max-w-sm min-w-0 md:max-w-none bg-inherit">
                    <!-- 画像エリア -->
                    <div class="aspect-[16/9] w-full">
                        <img
                            src="img/hoslpital.webp"
                            alt="医療機関"
                            class="w-full h-full object-cover object-center block rounded-xl border border-black" />
                    </div>
                    <!-- コンテンツエリア -->
                    <div class="grid grid-rows-[auto_1fr_auto] gap-4 p-4 place-items-center min-w-0">
                        <div class="space-y-2 text-gray-700 leading-relaxed max-[425px]:text-sm">
                            <p class="text-center font-bold text-lg">医療機関</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section id="solar_flow" class="py-8">
        <div class="grid overflow-hidden">
            <div class="grid justify-center my-8 max-[425px]:mt-4">
                <div class="grid grid-cols-[auto_1fr] items-center gap-4 text-left">
                    <span class="w-2 h-7 bg-gradient-to-b from-blue-400 to-blue-900 -skew-x-12 block"></span>
                    <h2 class="font-bold text-4xl max-[768px]:text-3xl max-[425px]:text-2xl drop-shadow-lg">導入フロー</h2>
                </div>
            </div>
            <div class="flow_contents">
                <img src="/img/solar_flow.webp" alt="太陽光導入フロー">
                <div class="flow_list">
                    <div class="flow_card">
                        <h3>① 案件組成・設計</h3>
                        <p>図面及び現地調査による設計検討を行います。現地調査では主に以下の点を重要視します。</p>
                        <ul>
                            <li>30分値デマンドデータ（1年分）</li>
                            <li>屋根荷重</li>
                            <li>地域環境（屋根形状・勾配、積雪有無、等）</li>
                        </ul>
                        <p>上記情報を基に以下の作成に移ります。</p>
                        <ol>
                            <li>デマンドシミュレーション（発電量試算）<br>
                                → 発電容量決定 = モジュールの荷重検討</li>
                            <li>モジュール及び金具の選定</li>
                            <li>強度計算書等の提出資料</li>
                        </ol>
                    </div>

                    <div class="flow_card">
                        <h3>② 各種申請・手続き・打合せ</h3>
                        <p>詳電気設備の変更が伴うため主任技術者と打ち合わせが必要です</p>
                        <ul>
                            <li>発電設備の登録</li>
                            <li>変電設備改造に伴う立会</li>
                            <li>主任技術者契約の更新（発電設備追加に伴う
                                変更手続き）</li>
                        </ul>
                        <p>※ 必ずしも主任技術者が発電設備をメンテする必要はありません。 他業者様への業務委託も可能です。</p>
                    </div>

                    <div class="flow_card">
                        <h3>③ 各種工事</h3>
                        <p>現場関連の工事を実施します。</p>
                        <p>
                            稼働施設に施工する事になるため、業務に支障を来さないよう工事計画は綿密に立てて共有します。</p>
                    </div>

                    <div class="flow_card">
                        <h3>④ 試運転調整・運転開始</h3>
                        <p>設備完成した後、運用開始前に『自己確認検査』を実施し、結果を経済産業省に提出する必要があります。</p><br>
                        <p>【内容例】</p>
                        <ol>
                            <li>外観検査</li>
                            <li>接地抵抗測定</li>
                            <li>総合インターロック試験</li>
                            <li>制御電源喪失試験</li>
                            <li>負荷遮断試験</li>
                            <li>屋根の耐荷重確認</li>
                        </ol>
                    </div>

                    <div class="flow_card">
                        <h3>⑤ お引き渡し</h3>
                        <p>各種試験が完了し、試運転の結果が問題なければお引き渡しになります。</p><br>
                        <p>不備や追加項目がある場合は後日調整・再見積・再施工等を経て完了となります。</p>
                    </div>

                    <div class="flow_card">
                        <h3>⑥ アフターメンテ</h3>
                        <p>機械を正常な状態で維持するためには適切なメンテナンスが欠かせません。</p><br>
                        <p>日常点検の指導や緊急事態への対応等は随時受け付けております。</p>
                    </div>
                </div>
            </div>
            <div class="headline">計画・調達・導入まで一貫サポート！</div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>