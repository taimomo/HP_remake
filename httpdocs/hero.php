<?php
// hero.php

// 共通変数（デフォルト値）
$hero_id           = $hero_id        ?? 'hero';
$hero_title        = $hero_title     ?? 'タイトル未設定';
$hero_bg           = $hero_bg        ?? '/img/default_bg.webp';
$hero_classes      = $hero_classes   ?? 'pt-[75px] md:pt-[90px] relative grid grid-cols-12 grid-rows-6 text-white bg-gray-800 bg-center bg-cover bg-no-repeat';
$hero_div_cls      = $hero_div_cls   ?? "col-span-12 row-start-2 row-end-3 grid grid-cols-12 bg-gray-700/50";
$hero_h2           = $hero_h2        ?? "col-start-1 col-end-13 place-self-center md:col-start-1 md:col-end-6 text-2xl md:text-3xl font-bold";


// サブ見出し用のクラス変数（ページ側で設定）
$hero_subheading   = $hero_subheading   ?? '';
$hero_sub_cls      = $hero_sub_cls      ?? '';
$hero_sub_h3_cls   = $hero_sub_h3_cls   ?? '';
?>
<section
    id="<?php echo htmlspecialchars($hero_id, ENT_QUOTES); ?>"
    class="<?php echo $hero_classes; ?> "
    style="background-image: url('<?php echo htmlspecialchars($hero_bg, ENT_QUOTES); ?>');">
    <div class="<?php echo htmlspecialchars($hero_div_cls, ENT_QUOTES); ?>">
        <h2 class="<?php echo htmlspecialchars($hero_h2, ENT_QUOTES); ?>">
            <?php echo htmlspecialchars($hero_title, ENT_QUOTES); ?>
        </h2>
    </div>

    <?php if ($hero_subheading): ?>
        <div class="<?php echo $hero_sub_cls; ?>">
            <h3 class="<?php echo $hero_sub_h3_cls; ?>">
                <?php echo nl2br(htmlspecialchars($hero_subheading, ENT_QUOTES)); ?>
            </h3>
        </div>
    <?php endif; ?>
</section>