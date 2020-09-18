<?php

declare(strict_types=1);

/** @var array $arResult */
?>

<? if (count($arResult) > 0) :?>
    <nav class="header-menu d-flex justify-content-between align-items-center col-xl-7 p-0 mr-5">
        <? foreach ($arResult as $item) :?>
            <a
                    href="<?=$item['LINK']?>"
                    class="header-menu-item<?if ($item['SELECTED']) :?> active<?endif?>"
            ><?=$item['TEXT']?></a>
        <? endforeach; ?>
    </nav>
<? endif; ?>
