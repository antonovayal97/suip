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
// $section = $arResult["SECTION"]["PATH"][0];

?>


<section class="l-section l-news__section">
  <div class="l-wrapper">
    <h2 class="l-title-main white">
      НОВОСТИ
    </h2>
    <div class="l-news mt-50">
      <div class="l-news__grid">




        <?foreach($arResult["ITEMS"] as $key => $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
          <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <article class="l-item">
<?

if($arItem["DETAIL_PICTURE"]["SRC"] != ''){
?>

<img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="">
<?

}else{?>



<div class="no-news-image"></div>
<?

}
?>
              <span class="date fs-16-400 text-white"><?=$arItem["ACTIVE_FROM"]?></span>
              <div class="flex  --dir-col">
                <h2 class="title fs-<?if($key == 0){echo "24";}else{echo "18";}?>-500 text-white">
                  <?=$arItem["NAME"]?>
                </h2>
                <?
                if($key == 0)
                {

                  $short_desc = substr(strip_tags($arItem["DETAIL_TEXT"]), 0, 200);
                ?>
                  <p class="descr fs-20-500	text-white">
                    <?=$short_desc?>
                  </p>

                <?
                }
                ?>
              </div>

            </article>
          </a>
        <?endforeach;?>


      </div>

      <a href="/media/news/" class="l-btn l-btn__red">Все новости</a>
    </div>
  </div>
  <!-- /.l-wrapper -->
</section>
<!-- /.l-section l-news__section-->
