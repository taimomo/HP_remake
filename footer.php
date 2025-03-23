<!-- footer -->
<footer class="footer">
    <div class="footer_container">
        <div class="footer_company_name">
            <h2>株式会社シーイーエム</h2>
        </div>
        <ul class="footer_company_info">
            <li class="company_info_item">〒250-0631</li>
            <li class="company_info_item">
                神奈川県足柄下郡箱根町仙石原885番地2
            </li>
            <li class="company_info_item">ミリオンロイヤル箱根仙石原105</li>
            <li class="company_info_item">TEL:0460-83-9535</li>
        </ul>
    </div>

    <ul class="footer_menu">
        <li>
            <small>
                <a href="policy">プライバシーポリシー</a>
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