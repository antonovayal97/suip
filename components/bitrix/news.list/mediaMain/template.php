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
// echo print_r($arResult["ITEMS"]);
// echo "</pre>";

$isShowButton = false;
if(count($arResult["ITEMS"]) > 7)
{
	$isShowButton = true;
}
$top = array_slice($arResult["ITEMS"], 0, 2); 
$bottom = array_slice($arResult["ITEMS"], 2);
?>

<div class="l-media">
	<?
	foreach($top as $topElem)
	{
	?>
		<a class="l-item l-news__card" href="<?=$topElem["DETAIL_PAGE_URL"]?>">
			<article>
				<?

if($topElem["DETAIL_PICTURE"]["SRC"] != ''){
?>

<img src="<?=$topElem["DETAIL_PICTURE"]["SRC"]?>" alt="">
<?

}else{?>



<div class="no-news-image"></div>
<?

}
?>
				<span class="date fs-16-400 text-white"><?=$topElem["ACTIVE_FROM"]?></span>
				<div class="flex  --dir-col">
					<h2 class="title fs-24-500 text-white">
						<?=$topElem["NAME"]?>
					</h2>
				</div>
			</article>
		</a>
	<?
		}
	?>
</div>

<div class="mt-80">
	<ul class="l-media__list">

	<?
	foreach($bottom as $bottomElem)
	{
	?>
		<li>
			<a href="<?=$bottomElem["DETAIL_PAGE_URL"]?>" class="flex --dir-col" style="gap:10px;">
			<span class="fs-16-500" style="color:#FF1A1A;"><?=$bottomElem["ACTIVE_FROM"]?></span>
			<span class="fs-20-500 text-dark">
				<?=$bottomElem["NAME"]?>
			</span>
			</a>
		</li>
	<?
	}
	?>
	<?
	if($isShowButton)
	{
	?>
	<li>
		<a href="/media/news/" class="l-btn l-btn__white">Все новости</a>
	</li>
	<?
	}
	?>
	</ul>
</div>