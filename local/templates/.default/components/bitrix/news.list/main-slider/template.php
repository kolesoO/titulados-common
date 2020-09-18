<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?if ($arResult['ITEMS_COUNT'] > 0) :?>
    <?if ($arResult['SECTION']) :?>
        <div class="title-1 mb-5 col-12 p-0 text-center"><?=$arResult['SECTION']['NAME']?></div>
    <?endif?>
    <div
        class="main_slider clearfix js-slider col-7 p-0 mx-auto my-0"
        data-autoplay="false"
        data-infinite="false"
        data-speed="1000"
        data-arrows="false"
        data-dots="true"
    >
        <?foreach ($arResult['ITEMS'] as $item) :?>
            <div class="main_slider-item">
                <div class="col-xl-12 p-0 main_slider-description d-flex flex-wrap align-content-between">
                    <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$item['NAME']?>" class="mr-5">
                    <div class="main_slider-footer col-xl-6 p-0 d-flex flex-wrap">
                        <div class="col-12 p-0"><?=htmlspecialcharsback($item['PREVIEW_TEXT'])?></div>
                    </div>
                </div>
            </div>
        <?endforeach;?>
    </div>
<?endif?>
