<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
global $bigMenu;
?>
<?if (!empty($arResult)):?>

<div class="l-page--sections-list <?if($bigMenu == true){echo 'bigMenu-list';}?>">
      <ul>

        
		<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li>
          <a href="<?=$arItem["LINK"]?>" class="fs-18-500">
		  <?=$arItem["TEXT"]?>
          </a>
        </li>
		<li>
          <i class="separator"></i>
        </li>
	<?else:?>
		<li>
          <a href="<?=$arItem["LINK"]?>" class="fs-18-500">
		  <?=$arItem["TEXT"]?>
          </a>
        </li>
		<li>
          <i class="separator"></i>
        </li>
	<?endif?>
<?endforeach?>
</ul>
    </div>

<?endif?>