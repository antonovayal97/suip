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
$gallary = $arResult["PROPERTIES"]["GALLEGY"]["VALUE"];
// echo "<pre>";
// echo print_r($gallary);
// echo "</pre>";

$PROJECT_COST = $arResult["PROPERTIES"]["PROJECT_COST"]["VALUE"];
$INVESTMENT_VOLUME = $arResult["PROPERTIES"]["INVESTMENT_VOLUME"]["VALUE"];

if(strlen($PROJECT_COST) > 3)
{
  $PROJECT_COST = substr($PROJECT_COST, 0, strlen($PROJECT_COST) - 3)." ".substr($PROJECT_COST, -3, 3);
}

if(strlen($INVESTMENT_VOLUME) > 3)
{
  $INVESTMENT_VOLUME = substr($INVESTMENT_VOLUME, 0, strlen($INVESTMENT_VOLUME) - 3)." ".substr($INVESTMENT_VOLUME, -3, 3);
}
?>

<div class="l-line__block flex --align-center --just-space">
          <div class="">
            <span class="flex --align-start --dir-col" style="gap: 5px;">
              <span class="fs-20-500" style="color: #FF1A1A;">Инициатор:</span>
              <span class="fs-24-500" style="color: #1D1E33;"><?=$arResult["PROPERTIES"]["INITIATOR"]["VALUE"]?></span>
            </span>
          </div>
          <div class="">
            <span class="flex --align-start --dir-col" style="gap: 5px;">
              <span class="fs-20-500" style="color: #FF1A1A;">Стоимость проекта:</span>
              <span class="fs-24-500" style="color: #1D1E33;"><?=$PROJECT_COST?> МЛН РУБ</span>
            </span>
          </div>
          <div class="">
            <span class="flex --align-start --dir-col" style="gap: 5px;">
              <span class="fs-20-500" style="color: #FF1A1A;">Объем инвестиций:</span>
              <span class="fs-24-500" style="color: #1D1E33;"><?=$INVESTMENT_VOLUME?> МЛН РУБ</span>
            </span>
          </div>
        </div>

        <div class="l-content mt-80 l-invest__projects">

        </div>
      </div>
    </section>

    <section class="mt-80 overflow-x">
    <!-- <section class="mt-80 overflow-x" style="padding-bottom: 60px;"> -->
      <div class="l-wrapper">
        <div class="flex --dir-col" style="gap: 20px;">
          <span class="fs-40-600">
            Описание
          </span>
          <span class="fs-18-400">
		  	<?=$arResult["PROPERTIES"]["DESCRIPTION"]["~VALUE"]["TEXT"]?>
          </span>
        </div>

		<?
		if($gallary)
		{
		?>
        <div class="l-success__swiper js-swiper__detail-page mt-50">
          <div class="swiper-wrapper">

			<?
			foreach($gallary as $img)
			{ 
			?>

				<div class="swiper-slide">
				<div class="l-success__slide">
					<img src="<?=CFile::GetPath($img);?>" alt="">
				</div>
				</div>

			<?
			}
			?>
          </div>
          <div class="js-swiper-pag">
            <div class="success-button-next"></div>
            <div class="success-button-prev"></div>
            <div class="success-pagination"></div>
          </div>

        </div>
			<?
			}
			?>

      </div>
    </section>

    <section class="mt-80">
      <div class="l-wrapper">
        <div class="flex --dir-col" style="gap: 20px;">
          <span class="fs-40-600">
            Параметры
          </span>
          <span class="fs-18-400">
		 	 <?=$arResult["PROPERTIES"]["OPTIONS"]["~VALUE"]["TEXT"]?>
          </span>
        </div>
      </div>
    </section>

    <section class="mt-80 l-project__descr-section">
      <div class="l-wrapper">
        <?
        if($arResult["PROPERTIES"]["INVESTOR"]["VALUE"] != '' && $arResult["PROPERTIES"]["TERRAIN"]["VALUE"] != '')
        {
        ?>
        <div class="l-project__descr-body">
          <div class="l-list">
            <div class="l-title">
              <span class="fs-40-600 text-dark">Инвестор</span>
            </div>
            <ul>
                <?
                foreach($arResult["PROPERTIES"]["INVESTOR"]["VALUE"] as $arInvestor)
                {
                ?>
                  <li>
                    <span class="fs-18-400 text-dark">
                      <?=$arInvestor?>
                    </span>
                  </li>
                <?
                } 
                ?>
            </ul>
          </div>

          <div class="l-list">
            <div class="l-title">
              <span class="fs-40-600 text-dark">Местность</span>
            </div>
            <ul>
                <?
                foreach($arResult["PROPERTIES"]["TERRAIN"]["VALUE"] as $arTerrain)
                {
                ?>

                  <li>
                    <span class="fs-18-400 text-dark">
                      <?=$arTerrain?>
                    </span>
                  </li>

                <?
                }
                ?>
            </ul>
          </div>
        </div>
        <?
        }
        ?>

        <a href="#" class="l-btn l-btn__white l-btn__modal">Откликнуться на проект</a>

<div class="l-modal__component">
      <div class="bg"></div>
      <div class="l-content">
        <a href="javascript:void(0)" class="close">
          <svg class="">
			  <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--close" />
</svg>

        </a>
        <div class="l-title">
          <span class="fs-40-600 text-dark">
            ОТКЛИКНУТЬСЯ НА ПРОЕКТ
          </span>
        </div>
        <div class="flex --align-center btns" style="gap:20px;">
			<a href="/esia/auth/" class="l-btn">
            Авторизоваться через Госуслуги
          </a>
          <a href="/feedback/respond-project/?name=<?=$arResult["NAME"]?>&url=<?=$arResult["DETAIL_PAGE_URL"]?>&section=<?=$arResult["SECTION"]["PATH"][0]["NAME"]?>" class="l-btn">
            Заполнить вручную
          </a>
        </div>

      </div>
		  </div>