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


$APPLICATION->AddHeadScript('https://yastatic.net/share2/share.js');
?>


<?
// echo "<pre>";
// echo print_r($arResult);
// echo "</pre>";
// echo $APPLICATION->GetCurDir();
?>


<style>
.changed-image
	{
		width: 50%;
		margin: 0 auto;
		border: none;
	}
@media (max-width: 768px)
		{
.changed-image
	{
		width: 100%;
	}
}

</style>

<?
if($arResult["DETAIL_PICTURE"]["SRC"] != '')
{
?>

<div class="l-block--page-banner" style="max-height: unset">
  <div class="l-page_banner--wrap changed-image" style="max-height: unset">
    <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
  </div>
</div>
<?
}
?>

        <div class="l-page--content">
          <article class="mt-80 fs-18-400 text-dark">
            <!-- <p class="fs-18-400 text-dark"> -->
              <?=$arResult["DETAIL_TEXT"]?>
            <!-- </p> -->
          </article>
        </div>

        <div class="bottom mt-40">
          <div class="l-date">
            <span class="fs-18-600 text-dark-black">
              Дата создания:
            </span>
            <span class="fs-18-400 text-dark">
              <?=$arResult["DATE_ACTIVE_FROM"]?>
            </span>
          </div>

          <div class="l-municip--socials">
            <span class="fs-18-600">
              Поделиться в соц.сети:
            </span>
            <div class="ya-share2" data-curtain data-shape="normal" data-color-scheme="blackwhite" data-services="vkontakte,odnoklassniki,telegram,whatsapp"></div>
          </div>
        </div>