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
use Bitrix\Main\Type\DateTime;

$CREATED_DATE = new DateTime($arResult["ACTIVE_FROM"]);
$UPDATED_DATE = new DateTime($arResult["TIMESTAMP_X"]);

$currentPage["NAME"] = $arResult["NAME"];
$currentPage["PATH"] = $arResult["DETAIL_PAGE_URL"];
?>


<?
echo "<pre>";
// $DATE->format("H:i");
// echo print_r($CREATED_DATE->format("H:i"));
echo "</pre>";

foreach($arResult["PROPERTIES"]["DOCS"]["VALUE"] as $key => $doc)
{
	$file = CFile::GetPath($doc);
	$desc = $arResult["PROPERTIES"]["DOCS"]["DESCRIPTION"][$key];
	$idoc["PATH"] = $file;
	$idoc["DESC"] = $desc;
	$docs[] = $idoc;
}
// echo "<pre>";
// echo print_r($docs);
// echo "</pre>";
?>
<div class="l-municip--container">
	<div class="l-municip--left">
	<div class="l-municip--content fs-18-400">
		<b class="fs-28-600">
		<?=$arResult["PROPERTIES"]["CONTENT_HEADER"]["VALUE"];?>
		</b>
		<br>
		<br>
		<?=$arResult["DETAIL_TEXT"]?>
		<br>
		<br>
		<div class="l-municip--content__footer">
		<p>Дата создания: <?=$CREATED_DATE->format("d-m-Y")?></p>
		<p>Дата последнего изменения: <?=$UPDATED_DATE->format("d-m-Y")?></p>
		</div>
	</div>
	<div class="l-municip--footer">
		<?
		if(isset($docs))
		{
		?>
		<div class="l-municip--links">
		<span class="fs-18-600">
			Документы:
		</span>
		
		<?
		foreach($docs as $doc)
		{
		?>
		<a href="<?=$doc["PATH"]?>">
			<?=$doc["DESC"]?>
		</a>
		<br>
		<?
		}
		?>
		</div>
		<?
		}
		?>
		<?
		if(isset($arResult["PROPERTIES"]["SITE_URL"]["VALUE"]))
		{
		?>
		<div class="l-municip--links">
		<span class="fs-18-600">
			Сайт:
		</span>
		<a href="<?=$arResult["PROPERTIES"]["SITE_URL"]["VALUE"]?>">
			<?=$arResult["PROPERTIES"]["SITE_URL"]["VALUE"]?>
		</a>
		</div>
		<?
		}
		?>
		<div class="l-municip--socials">
		<span class="fs-18-600">
			Поделиться в соц.сети:
		</span>
		<ul>
			<li>
			<a href="#" target="_blank">
				<svg class="" width="24" height="24">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--vk" />
				</svg>  
			</a>
			</li>
			<li>
			<a href="#" target="_blank">
				<svg class="" width="24" height="24">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--telega" />
				</svg>  
			</a>
			</li>
			<li>
			<a href="#" target="_blank">
				<svg class="" width="24" height="24">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--odnoklassniki" />
				</svg>  
			</a>
			</li>
			<li>
			<a href="#" target="_blank">
				<svg class="" width="24" height="24">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--wa" />
				</svg>  
			</a>
			</li>
		</ul>
		</div>
	</div>
	</div>
	<div class="l-municip--right">
	<div class="l-municip--img">
		<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
		<div class="l-municip--img_desc">
		<span class="fs-18-600">
			<?=$arResult["PROPERTIES"]["PICTURE_TEXT"]["VALUE"];?>
		</span>
		</div>
	</div>
	<div class="l-municip--footer">
		<?
		if(isset($docs))
		{
		?>
		<div class="l-municip--links">
		<span class="fs-18-600">
			Документы:
		</span>
		<?
		foreach($docs as $doc)
		{
		?>
		<a href="<?=$doc["PATH"]?>">
			<?=$doc["DESC"]?>
		</a>
		<br>
		<?
		}
		?>
		</div>
		<?
		}
		?>
		<?
		if($arResult["PROPERTIES"]["SITE_URL"]["VALUE"] != "")
		{
		?>
		<div class="l-municip--links">
		<span class="fs-18-600">
			Сайт:
		</span>
		<a href="<?=$arResult["PROPERTIES"]["SITE_URL"]["VALUE"]?>">
			<?=$arResult["PROPERTIES"]["SITE_URL"]["VALUE"]?>
		</a>
		</div>
		<?
		}
		?>
		<div class="l-municip--socials">
		<span class="fs-18-600">
			Поделиться в соц.сети:
		</span>
		<ul>
			<li>
			<a href="#" target="_blank">
				<svg class="" width="24" height="24">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--vk" />
				</svg>  
			</a>
			</li>
			<li>
			<a href="#" target="_blank">
				<svg class="" width="24" height="24">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--telega" />
				</svg>  
			</a>
			</li>
			<li>
			<a href="#" target="_blank">
				<svg class="" width="24" height="24">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--odnoklassniki" />
				</svg>  
			</a>
			</li>
			<li>
			<a href="#" target="_blank">
				<svg class="" width="24" height="24">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--wa" />
				</svg>  
			</a>
			</li>
		</ul>
		</div>
	</div>
	</div>
</div>

