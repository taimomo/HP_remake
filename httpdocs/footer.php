<!-- footer -->
<footer class="bg-[#233270] text-white text-center p-8">
    <!-- フッターコンテナ -->
    <div class="grid grid-cols-1 md:grid-cols-[1fr_auto] gap-6 md:gap-4 justify-items-center md:justify-items-start mx-auto mb-8 md:mb-12">
        <!-- 会社名 -->
        <div class="md:grid md:items-center text-left">
            <h2 class="text-2xl md:text-3xl font-bold">株式会社シーイーエム</h2>
        </div>
        <!-- 会社情報 -->
        <ul class="grid gap-1 list-none justify-items-center md:justify-items-start">
            <li class="p-2 md:pl-6 md:py-0">〒250-0631</li>
            <li class="p-2 md:pl-6 md:py-0">神奈川県足柄下郡箱根町仙石原885番地2</li>
            <li class="p-2 md:pl-6 md:py-0">ミリオンロイヤル箱根仙石原105</li>
            <li class="p-2 md:pl-6 md:py-0">TEL:0460-83-9535</li>
        </ul>
    </div>

    <!-- フッターメニュー -->
    <ul class="grid justify-center gap-4 list-none text-[0.9rem] 
            grid-cols-[repeat(auto-fit,_minmax(200px,_auto))] 
            max-[425px]:grid-cols-1 max-[425px]:text-[0.8rem]">
        <li>
            <small>
                <a href="policy.php" class="underline">プライバシーポリシー</a>
            </small>
        </li>
        <li>
            <small>&copy; 2024 CEM.Co., Ltd All Rights Reserved.</small>
        </li>
    </ul>
</footer>
</body>
<script type="module" src="js/main.js"></script>

<?php
// マップが必要なページだけ map.js を読み込む
$page = basename($_SERVER['PHP_SELF']);
if ($page === 'about.php') : ?>
    <script type="module" src="js/map.js"></script>
<?php endif; ?>

</html>