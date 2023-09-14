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


<div class="l-content mt-80 l-invest__projects">
	<div class="l-agro__cards">
	<ul>
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
				<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="l-card__location">
						<div style="width: calc(100% - 30px);">
						<span class="fs-24-500">
							<?=$arItem["NAME"]?>
						</span>
						</div>
						<div>
						<p class="fs-16-400">
							<?=$arItem["PREVIEW_TEXT"]?>
						</p>
						</div>

						<svg class="arrow-small">
						<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--arrow-small" />
						</svg>

					</a>
				</li>
		<?endforeach;?>
	</ul>
	</div>
</div>
