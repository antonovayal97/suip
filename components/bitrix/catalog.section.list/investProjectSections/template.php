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

// echo "<pre>";
// echo print_r($arResult);
// echo "</pre>";
?>
<div class="l-content mt-80 l-invest__projects">
	<div class="l-agro__cards">
	<ul>
		<?
		foreach($arResult["SECTIONS"] as $arSection)
		{
		?>
		<li>
		<a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="l-card__location">

			<div>
			<span class="fs-24-500">
				<?=$arSection["NAME"]?>
			</span>
			</div>
			<div>
			<p class="fs-16-400">
				<?=$arSection["DESCRIPTION"]?>
			</p>
			</div>

			<svg class="arrow-small">
			<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--arrow-small" />
			</svg>

		</a>
		</li>
		<?
		} 
		?>
	</ul>
	</div>
</div>