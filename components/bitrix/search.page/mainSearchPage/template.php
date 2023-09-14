<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
?>

<?
// echo "<pre>";
// echo print_r($arResult["SEARCH"]);
// echo "</pre>";

$pagen = $arResult["NAV_RESULT"]->PAGEN;

$resultCount = $arResult["NAV_RESULT"]->NavRecordCount;
$pageSize = $arResult["NAV_RESULT"]->NavPageSize;

$startPage = $pagen * $pageSize - $pageSize + 1;
if($pagen * $pageSize >= $resultCount)
{
	$endPage = $resultCount;
}
else
{
	$endPage = $pagen * $pageSize;
}

?>

<form class="l-header__body-search"method="get">
    <input type="text" class="search-input" placeholder="Поиск" name="q" value="<?=$_GET["q"]?>">
    <svg class="">
    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--search" />
    </svg>
</form>

<div class="l-search__result">
	<?
	if($resultCount > 0)
	{
	?>
    <div class="l-top">
        <span class="fs-16-500 text-dark">Результаты поиска</span>
        <span class="fs-16-500 text-dark"><?=$startPage?>-<?=$endPage?> из <?=$resultCount?></span>
    </div>
	<?
	}
	?>
    <div class="l-search__result-body mt-80">
        <ul>


<?
foreach($arResult["SEARCH"] as $search)
{
?>
            <li>
            <a href="<?=$search["URL"]?>" class="fs-24-500 text-dark-black"><?=$search["TITLE"]?></a>
            <span class="fs-18-400 text-dark">
				<?=$search["BODY_FORMATED"]?>
</span>
            </li>


<?
}
?>

<?
if(count($arResult["SEARCH"]) < 1)
{
?>
<li>
<span class="fs-18-400 text-dark">
К сожалению по вашему запросу ничего не обнаружено
</span>
            </li>
<?
}
?>

        </ul>
    </div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
