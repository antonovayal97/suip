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
// $section = $arResult["SECTION"]["PATH"][0];
?>

<style>

.card-icon1 img
{
  position: static;
  width: 40px;
  height: 40px;
  opacity: 1;
}

</style>
<section class="l-section l-invest__section">
    <div class="l-wrapper">
      <h2 class="l-title-main white">
        ИНВЕСТСТАНДАРТ
      </h2>
      <div class="l-invest">

        <div class="l-invest__list js-swiper__invest">
          <div class="swiper-wrapper">


          <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                  <div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <a class="l-invest__list-item" href="<?=$arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"]?>" target="_blank">
                      <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
                      <div class="card-icon1">
                        <img src="<?=CFile::GetPath($arItem["DISPLAY_PROPERTIES"]["ICON"]["VALUE"]);?>" alt="">
                      </div>
                      <span class="title"><?=$arItem["NAME"]?></span>
                      <div class="arrow-next flex --align-center">Перейти
                        <svg class="">
                          <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#css--arrow-next" />
                        </svg>
                      </div>
                    </a>
                  </div>
                <?endforeach;?>





          </div>

          <div class="js-swiper-pag">
            <div class="success-pagination"></div>
          </div>

        </div>
      </div>
    </div>
    <!-- /.l-wrapper -->
  </section>