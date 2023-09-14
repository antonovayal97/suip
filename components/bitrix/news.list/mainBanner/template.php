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


CModule::IncludeModule('iblock');


if(!CModule::IncludeModule("iblock"))

return; 


$res = CIBlockElement::GetByID(43); // id ЭЛЕМЕНТА ИФОБЛОКА С ВИДЕО БАННЕРОМ
if($ar_res = $res->GetNext())
// echo "<pre>";
//   echo print_r($ar_res);
// echo "</pre>";


$iterator = CIBlockElement::GetPropertyValues(43, array('ACTIVE' => 'Y'), true, array('ID' => array(119))); // ID СВОЙСТВА
while ($row = $iterator->Fetch())
{
	$video = $row;

}
// print_r($video["119"]);
?>

<section class="l-banner">
	<div class="l-banner__swiper js-swiper__banner">
		<div class="l-bg-video">
			<video autoplay loop playsinline muted class="l-banner__video" src="<?=CFile::GetPath($video["119"]);?>"></video>
			<div class="bg"></div>
			<div class="video-progress-container">
				<div class="video-progress">
					<div class="progress-bar"></div>
					<div class="marker"></div>
				</div>
				<div class="time-indicator"></div>
			</div>
		</div>
		<div class="swiper-wrapper">
<?
$reversed = array_reverse($arResult["ITEMS"]);
?>

<?foreach($reversed as $key => $arItem){?>

			<!-- data-index++ надо сделать чтоб корректно работал свайпер это на стороне php -->
			<div class="swiper-slide" data-index="<?=$key?>" data-title="<?=$arItem["PROPERTIES"]["ORBIT_TEXT"]["VALUE"]?>">
				<section>
					<div class="l-banner__content">
						<div class="l-wrapper">
							<h1 class="l-banner__title">
								<?=$arItem["NAME"]?>
							</h1>
<?
	if($arItem["PROPERTIES"]["LINK"]["VALUE"] == "/esia/auth/")
							{
?>
							<a href="#" class="l-btn l-btn__red l-btn__modal"><?=$arItem["PROPERTIES"]["BUTTON_TEXT"]["VALUE"]?></a>
<?
							}
else
{
?>
<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="l-btn l-btn__red"><?=$arItem["PROPERTIES"]["BUTTON_TEXT"]["VALUE"]?></a>
<?
}
?>

						</div>
					</div>
				</section>
			</div>

<?
}
?>

		</div>
		<div class="l-wrapper orbit-wrapper">
			<div class="l-banner_navigation">
			</div>
<div class="logo-banner_navigation">
			</div>
		</div>
	</div>
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
          <a href="/feedback/respond-project/" class="l-btn">
            Заполнить вручную
          </a>
        </div>

      </div>
		  </div>
</section>

