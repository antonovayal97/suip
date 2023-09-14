<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);?>


<form class="l-header__body-search" action="<?=$arResult["FORM_ACTION"]?>">
<input type="text" class="search-input" placeholder="Поиск" name="q">
<input name="s" type="submit" value="Поиск" style="display: none">
<svg class="">
	<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--search" />
</svg>
</form>