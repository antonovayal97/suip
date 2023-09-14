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

<section class="l-section ">
    <div class="l-wrapper">
      <div class="l-numbers">
        <div class="l-numbers__title">
          <span>СИЛА ЯКУТИИ</span>
        </div>
        <div class="l-numbers__content" >
          <ul>

                <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

                  <li class="l-num__list-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                  <div class="l-num__descr">
                  <?=html_entity_decode($arItem["NAME"])?>
                  </div>
                  </li>
                <?endforeach;?>

          </ul>
        </div>
      </div>
      <!-- /.l-numbers -->
    </div>
    <!-- /.l-wrapper -->
  </section>
