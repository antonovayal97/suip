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

<div class="l-block--docs-list mt-80">
  <ul>
	<?
	foreach($docs as $doc)
	{
	?>
    <li>
      <a href="<?=$doc["PATH"]?>" class="fs-18-400" download>
        <i class="--svg__file-icon"></i>
        <?=$doc["DESC"]?>
      </a>
    </li>
	<?
	}
	?>
  </ul>
</div>