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
// echo "<pre>";
// echo print_r($arResult);
// echo "</pre>";	
?>

<ul class="l-about__gallery ">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>


<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<div class="flex item" style="gap:20px;">
		<div class="flex --dir-col item-text">
		<div class="l-title">
			<span class="fs-40-700 text-dark-black">
			<?=$arItem["NAME"];?>
			</span>
		</div>
		<div class="mt-25">
			<p class="fs-18-400">
			<?=$arItem["DETAIL_TEXT"];?>
			</p>
		</div>
		</div>
		<div class="item-img">
		<div class="l-block--page-banner">
			<div class="l-page_banner--wrap">
			<img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="">
			</div>
		</div>
		</div>

	</div>
	</li>
<?endforeach;?>
</ul>