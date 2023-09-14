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
?>

<!-- <section class="mt-80">
      <div class="l-wrapper"> -->
        <div class="l-title mt-80">
          <span class="fs-40-600 text-dark-black">
            <?=$arResult["SECTION"]["PATH"][0]["NAME"]?>
          </span>
        </div>
        <div class="l-accordion__content mt-28">
          <ul class="accordion">
            <?
            foreach($arResult["ITEMS"] as $arItem)
            {
            ?>
            <li class="list">
              <span class="submenu-toggle">
                <?=$arItem["NAME"]?>
                <i class="--svg__accordion-arrow"></i>
              </span>
              <ul class="submenu">
                <li>
                  <span class='fs-18-400 text-dark'>
                    <?=$arItem["DETAIL_TEXT"]?>
                  </span>
                </li>
              </ul>
            </li>
            <?
            }
            ?>
          </ul>


          <!-- <a href="#" class="l-btn l-btn__white">
            Подать заявку на получение статуса резидента
          </a> -->
        </div>

      <!-- </div>
    </section> -->