<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);

$arResult['ITEMS_COUNT'] = count($arResult['ITEMS']);

$sectionPathCount = count($arResult['SECTION']['PATH']);
if ($sectionPathCount > 0) {
    $arResult['SECTION'] = $arResult['SECTION']['PATH'][$sectionPathCount - 1];
}
