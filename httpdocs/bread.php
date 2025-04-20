<section id="bread_crumb" class="bg-white px-4 py-2">
    <nav aria-label="breadcrumb">
        <ol class="grid grid-flow-col gap-2 text-sm w-fit min-w-0 list-none p-0 m-0">
            <?php foreach ($breadcrumbs as $crumb): ?>
                <li class="grid grid-flow-col items-center gap-1
            <?php echo empty($crumb['active'])
                    ? 'text-blue-600 hover:underline'
                    : 'text-gray-600 font-bold'; ?>
            after:content-['>'] after:ml-2 after:text-gray-300 last:after:content-none"
                    <?php if (!empty($crumb['active'])) echo 'aria-current="page"'; ?>>
                    <?php if (empty($crumb['active'])): ?>
                        <a href="<?php echo $crumb['url']; ?>" class="grid grid-flow-col items-center gap-1">
                            <?php if ($crumb['url'] === '/'): // ホームのときだけアイコンを表示 
                            ?>
                                <i class="fa-solid fa-house" aria-hidden="true"></i>
                            <?php endif; ?>
                            <span><?php echo $crumb['label']; ?></span>
                        </a>
                    <?php else: ?>
                        <?php // アクティブ（リンクなし）のときもアイコンを入れたいなら同様に 
                        ?>
                        <?php echo $crumb['label']; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ol>
    </nav>
</section>