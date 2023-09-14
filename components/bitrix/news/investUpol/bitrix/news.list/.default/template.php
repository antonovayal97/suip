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
global $currentPage;
?>

<div class="l-municip--accrodion">
	<div class="l-municip--left">
		<div class="l-block--title">
			<h4 class="fs-40-600">Район</h4>
		</div>
		<div class="custom-select2 color-select--black">
			<div class="select-selected">
				<?=$currentPage["NAME"]?>
				<div class="custom-select__arrow">
					<svg width="24" height="24">
					<use href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--accordion-arrow" xlink:href="/img/sprite.svg#sprite--accordion-arrow"></use>
					</svg>
				</div>
			</div>
			<div class="select-items2 select-hide2 fs-18-400">
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<?
// echo "<pre>";
// echo print_r($arItem);
// echo "</pre>";
?>
<?
if($arItem["PROPERTIES"]["UPOL"]["VALUE"] != "")
{
// 	echo "<pre>";
// echo print_r($arItem);
// echo "</pre>";
?>
<div <?if($arItem["DETAIL_PAGE_URL"] == $currentPage["PATH"]){echo 'class="same-as-selected"';}?> id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
		<?=$arItem["NAME"]?>
	</a>
</div>
<?
}
?>
<?endforeach;?>
			</div>
		</div>
	</div>
</div>

