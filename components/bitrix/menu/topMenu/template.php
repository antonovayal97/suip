<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<nav class="l-header_nav">
        <ul class="l-header_nav-list">
		<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
<?
if($arItem["LINK"] != "/feedback/" && $arItem["LINK"] != "/investment-projects/" && $arItem["LINK"] != "/esia/logout/")
{
?>
	<?if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>" class="l-header_nav-list-link active-link"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>" class="l-header_nav-list-link"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	<?
}
	?>
<?endforeach?>
        </ul>
      </nav>
<?endif?>