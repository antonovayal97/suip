<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<?
// echo "<pre>";
// echo print_r($arResult);
// echo "</pre>"	
	
?>
<ul class="l-header__grid">

<?
$previousLevel = 0;

foreach($arResult as $arItem):?>
	<?
	if($arItem["LINK"] != "/agency/" && strpos($arItem["LINK"], "/agency/") !== 0 || $arItem["LINK"] == "/agency/agency-services/" )
	{
	?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>

		<?
		if($arItem["LINK"] == "/feedback/")
		{
			echo '</ul><ul class="last-child">';
		}
		else
		{
			echo str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));
		}
		?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			
				<?
				if($arItem["LINK"] == "/feedback/")
				{
				?>
				<li class="big-word"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
				<?
				}
				else
				{
				?>
					<li>
				<ul class="l-header__grid-list">
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
				<?
				}
				?>
		<?else:?>
			<li>
				<ul class="l-header__grid-list">
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
<?
}
?>
<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<?endif?>