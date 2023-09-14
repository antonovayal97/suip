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
// global $currentPage;
// $currentPage["NAME"] = $arResult["NAME"];
// $currentPage["PATH"] = $arResult["DETAIL_PAGE_URL"];
?>
<?
if(!CModule::IncludeModule("iblock"))

return; 


$res = CIBlockElement::GetByID($arResult["PROPERTIES"]["UPOL"]["VALUE"]);
if($arUpol = $res->GetNext())
{

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","CONTENT_HEADER", "STATUS", "PHONE_NUMBER", "EMAIL");
$arFilter = Array("IBLOCK_ID"=>$arUpol["IBLOCK_ID"], "ID" =>$arUpol["ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);

while($ob = $res->GetNextElement()){
	$arFields = $ob->GetFields();
	$arProps = $ob->GetProperties();
	$arUpol["PROPERTIES"] = $arProps;
	$arUpol["FIELDS"] = $arFields;
}

// echo "<pre>";
// echo print_r($arResult);
// echo "</pre>";
}
?>

<div class="l-municip--container">
	<div class="l-municip--left">
	<div class="l-municip--content fs-18-400">
		<h3 class="fs-28-600 uppercase"><?=$arUpol["PROPERTIES"]["CONTENT_HEADER"]["VALUE"];?></h3>
	</div>
	<div class="l-block--person-card">
		<div class="l-person__card--container">
		<div class="l-person__card--left">
			<div class="l-person__card--img">
			<img src="<?=CFile::GetPath($arUpol["DETAIL_PICTURE"]);?>" alt="">
			</div>
		</div>
		<div class="l-person__card--right">
			<div class="l-person__card--name">
			<span class="fs-20-500">
				<?=$arUpol["FIELDS"]["NAME"];?>
			</span>
			</div>
			<div class="l-person__card--desc">
			<span class="fs-16-400">
				<?=$arUpol["PROPERTIES"]["STATUS"]["VALUE"];?>
			</span>
			</div>
			<div class="l-person__card--hr">
			<hr>
			</div>


			<div class="l-person__card--contact">
				<span class="fs-16-500">Телефон:</span>
			<a href="tel:<?=$arResult["PROPERTIES"]["PHONE_NUMBER"]["VALUE"];?>" class="fs-16-400"><?=$arUpol["PROPERTIES"]["PHONE_NUMBER"]["VALUE"];?></a>
			</div>


			<div class="l-person__card--contact">
			<span class="fs-16-500">Почта:</span>
			<a href="mailto:<?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"];?>" class="fs-16-400"><?=$arUpol["PROPERTIES"]["EMAIL"]["VALUE"];?></a>
			</div>

		</div>
		</div>
	</div>
	</div>
	<div class="l-municip--right">
	<div class="l-municip--img">
		<img src="<?=CFile::GetPath($arResult["DETAIL_PICTURE"]["ID"]);?>" alt="">
		<div class="l-municip--img_desc">
		<span class="fs-18-600">
			<?=$arResult["PROPERTIES"]["PICTURE_TEXT"]["VALUE"]?>
		</span>
		</div>
	</div>
	</div>
</div>


