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
// echo "<pre>";
// echo print_r($arResult);
// echo "</pre>";
// $APPLICATION->SetTitle("asd проекты");
$section = $arResult["SECTION"]["PATH"][0];
$prod = $arResult["ITEMS"];
$PRICE = 0;
$VOLUME = 0;

$PRICE_NAME = "МЛН";
$VOLUME_NAME = "МЛН";
// echo "<pre>";
// echo print_r($prod);
// echo "</pre>";

foreach($prod as $item)
{
  $PRICE = $PRICE + $item["PROPERTIES"]["PROJECT_COST"]["VALUE"];
  $VOLUME = $VOLUME + $item["PROPERTIES"]["INVESTMENT_VOLUME"]["VALUE"];
}


if(strlen($PRICE) > 3)
{
  $PRICE_NAME = "МЛРД";
  $PRICE = $PRICE / 1000;
  $PRICE = round($PRICE, 2);
}

if(strlen($VOLUME) > 3)
{
  $VOLUME_NAME = "МЛРД";
  $VOLUME = $VOLUME / 1000;
  $VOLUME = round($VOLUME, 2);
}
?>
<div class="l-invest-svod-pravil--undertitle">
          <span class="fs-18-400">
            <?=$section["DESCRIPTION"]?>
          </span>
        </div>

        <div class="l-content mt-80">
          <div class="l-line__block flex --align-center --just-space">
            <div class="">
              <span class="flex --align-center" style="gap: 5px;">
                <span class="fs-38-700" style="color: #FF1A1A;">
                <?=count($prod)?></span>
                <span class="fs-38-700" style="color: #1D1E33;">ЕД</span>
              </span>
              <span class="fs-16-400 text-dark">Количество <br> проектов</span>
            </div>
            <div class="">
              <span class="flex --align-center" style="gap: 5px;">
                <span class="fs-38-700" style="color: #FF1A1A;"><?=$PRICE?></span>
                <span class="fs-38-700" style="color: #1D1E33;"><?=$PRICE_NAME?> ₽</span>
              </span>
              <span class="fs-16-400 text-dark">Стоимость <br> проектов</span>
            </div>
            <div class="">
              <span class="flex --align-center" style="gap: 5px;">
                <span class="fs-38-700" style="color: #FF1A1A;"><?=$VOLUME?></span>
                <span class="fs-38-700" style="color: #1D1E33;"><?=$VOLUME_NAME?> ₽</span>
              </span>
              <span class="fs-16-400 text-dark">Обьем требуемых <br> инвестиций </span>
            </div>
          </div>
          <hr class="hr-0">
        </div>
      </div>
    </section>

    <section class="l-section">
      <div class="l-wrapper">
        <div class="l-agro__cards">
          <ul>
			<?
			foreach($prod as $arItem)
			{
			?>
            <li>
              <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="l-card__location">
                <div class="flex --align-center" style="gap:5px;">
                  <i class="location"></i>
                  <span class="fs-18-400">
                    <?=$arItem["PROPERTIES"]["PLACE"]["VALUE"]?>
                  </span>
                </div>

                <div class="l-title">
                  <span class="fs-24-500">
                    <?=$arItem["NAME"]?>
                  </span>
                </div>
                <div>
                  <p class="fs-16-400">
				  	<?=strip_tags($arItem["PROPERTIES"]["DESCRIPTION"]["~VALUE"]["TEXT"], '');?>
      </p>
                </div>

                <svg class="arrow-small">
				<use xlink:href="img/sprite.svg#sprite--arrow-small" />
				</svg>

              </a>
            </li>
			<?
			}
			?>
          </ul>
        </div>