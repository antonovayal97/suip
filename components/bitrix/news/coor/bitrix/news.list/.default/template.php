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
$this->setFrameMode(true);
?>
<?
global $curdir;
// echo $curdir;
// echo "<pre>";
// echo print_r($arResult);
// echo "</pre>";	
?>
<div class="l-coordinate--content">
	<div class="l-coordinate--row">
	<div class="l-coordinate--suggest">
		<a href="javascript:void(false)" tooltip="Выберите год для просмотра нужной вам информации" flow="down">
		<svg class="">
			<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--suggest-icon" />
		</svg>
		</a>
	</div>
	<div class="l-coordinate--scrollbar">
		<div class="swiper-scrollbar"></div>
	</div>
	<div class="l-coordinate--drag">
		<svg class="">
		<use xlink:href="local/templates/suip/img/sprite.svg#sprite--drag-icon" />
		</svg>
	</div>
	</div>
	<div class="l-coordinate--years">
	<div class="swiper-wrapper">

	<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<div class="swiper-slide l-coordinate--slide <?if($arItem["DETAIL_PAGE_URL"] == $curdir || ("/investclimate/coordinating-council/" == $curdir && $arItem["NAME"] == "2022") || ("/investclimate/project-office-solution/" == $curdir && $arItem["NAME"] == "2022") || ("/investclimate/road-map/" == $curdir && $arItem["NAME"] == "2022")){echo 'l-coordinate--active';}?> fs-28-600" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
		<?=$arItem["NAME"]?>
	</a>
</div>

<?endforeach;?>
	</div>
	</div>
</div>
