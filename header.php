<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);

// Переменные отвечающие за вывод того или иного контента , оберки
global $banner;
global $intotext;
global $agent;
global $mainSection;
global $wrapper;
global $isNews;
global $isDetailNews;
global $isPressCenter;
global $isFeedbackForm;
global $isStatic;
global $isAboutYak;
//global $bigMenu;
//$bigMenu = false;
$isSearchPage = false;
$isFeedbackForm = false;
$isDetailNews = false;
$isNews = false;
$wrapper = true;
$isPressCenter = false;
$isInvProj = false;
if (strpos($APPLICATION->GetCurDir(), '/investor/investment-infrastructure/') !== false && $APPLICATION->GetCurDir() != '/investor/investment-infrastructure/')
{
  $wrapper = true;
}

if (strpos($APPLICATION->GetCurDir(), '/investment-projects/') !== false && $APPLICATION->GetCurDir() != '/investment-projects/')
{
  $isInvProj = true;
}

if (strpos($APPLICATION->GetCurDir(), '/media/news/') !== false && $APPLICATION->GetCurDir() != '/media/news/')
{
  $isDetailNews = true;
}

if ($APPLICATION->GetCurDir() == '/media/news/')
{
  $isNews = true;
}
if ($APPLICATION->GetCurDir() == '/search/')
{
  $isSearchPage = true;
}
if ($APPLICATION->GetCurDir() == '/media/press-center/')
{
  $isPressCenter = true;
}

if (strpos($APPLICATION->GetCurDir(), '/feedback/') !== false && $APPLICATION->GetCurDir() != '/feedback/')
{
  $isFeedbackForm = true;
}


//if ($APPLICATION->GetCurDir() == '/investclimate/' || $APPLICATION->GetCurDir() == '/investstandart/')
//{
//$bigMenu = true;
//}


?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="СУИП">
	<meta name="keywords" content="">
    <?$APPLICATION->ShowHead();?>
	<link rel="apple-touch-icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicons/apple-touch-icon.png">
	<!-- 180x180 - ставим первым для safari -->
	<link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicons/favicon.ico" sizes="any"><!-- 32x32 -->
	<link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicons/icon.svg" type="image/svg+xml">
	<link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/img/favicons/manifest.webmanifest">

<?
use Bitrix\Main\Page\Asset;
?>
<?

Asset::getInstance()->addCSS("https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css");
Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH."/css/libs.min.css");
Asset::getInstance()->addCSS("https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css");
Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH."/css/style.min.css");
?>


<?
Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js");
Asset::getInstance()->addJs("https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/translate.js");
?>
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
<?$APPLICATION->ShowPanel()?>
  <header class="l-header">
  <div class="l-wrapper">
    <div class="l-header__content">
      <div class="l-header__mobile">
        <div class="l-header__list">
          <ul class="flex --align-center">
          <li class="lang-icon__block">
            <a href="#">
              <svg class="js-lang-icon">
				  <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--lang" />
              </svg>
            </a>
            <div class="lang-bar__block lang__list" data-lang-list="">
            <a class="lang__link lang__link_sub" href="javascript:void(0)" data-ya-lang="ru">
                RU
              </a>
              <a class="lang__link lang__link_sub" href="javascript:void(0)" data-ya-lang="en">
                EN
              </a>
              <a class="lang__link lang__link_sub" href="javascript:void(0)" data-ya-lang="ja">
                JA
              </a> 
              <a class="lang__link lang__link_sub" href="javascript:void(0)" data-ya-lang="zh">
                CH
              </a>
              <a class="lang__link lang__link_sub" href="javascript:void(0)" data-ya-lang="ko">
                KO
              </a>
            </div>
          </li>
            <li class="glass">
              <a href="/?special=Y">
                <svg class="" style="fill:#F9F9F9;">
                  <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--glasses" />
                </svg>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <div class="l-header__mobile">
        <div class="l-logo">
          <a class="l-logo__link" href="/">
            <svg class="@@class">
              <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#css--logo" />
            </svg>
          </a>
        </div>
      </div>
      <div class="l-logo">
        <a class="l-logo__link" href="/">
          <svg class="@@class">
            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#css--logo" />
          </svg>
        </a>
      </div>
      <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"topMenu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>

      <div class="l-header__list">
      <div id="ytWidget" style="display: none;"></div>
        <ul class="flex --align-center">
		
          <li class="lang-icon__block">
            <a href="#">
              <svg class="js-lang-icon">
				  <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--lang" />
              </svg>
            </a>
            <div class="lang-bar__block lang__list" data-lang-list="">
            <a class="lang__link lang__link_sub" href="javascript:void(0)" data-ya-lang="ru">
                RU
              </a>
              <a class="lang__link lang__link_sub" href="javascript:void(0)" data-ya-lang="en">
                EN
              </a>
              <a class="lang__link lang__link_sub" href="javascript:void(0)" data-ya-lang="ja">
                JA
              </a> 
              <a class="lang__link lang__link_sub" href="javascript:void(0)" data-ya-lang="zh">
                CH
              </a>
              <a class="lang__link lang__link_sub" href="javascript:void(0)" data-ya-lang="ko">
                KO
              </a>
            </div>
          </li>

          <li>
			  <a href="/?special=Y">
              <svg class="" style="fill:#F9F9F9;">
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--glasses" />
              </svg>
            </a>
          </li>

          <li>
            <svg class="js-search-icon" style="width:24px; height:24px;">
              <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--search" />
            </svg>
          </li>
        </ul>

        <div class="l-burger__btn">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </div>

      </div>

      <div class="search-bar__block">
        <div class="l-wrapper">
          <?$APPLICATION->IncludeComponent(
          "bitrix:search.form",
          "topMenuMain",
          Array(
          "PAGE" => "#SITE_DIR#search/index.php",
          "USE_SUGGEST" => "N"
          )
          );?>
        </div>

      </div>

      <div class="l-header__body">

        <div class="l-wrapper">

        <?$APPLICATION->IncludeComponent(
          "bitrix:search.form",
          "burgerMenu",
          Array(
          "PAGE" => "#SITE_DIR#search/index.php",
          "USE_SUGGEST" => "N"
          )
          );?>

          <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"burgerMenu", 
	array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "burgerMenu",
		"csrftoken" => "177556df727533b1e2e0d2c18e5f810a21b9baebd4f5f1765e2acc8a8f9f97b54d08c35e680e6c5e"
	),
	false
);?>
        </div>

      </div>
    </div>
  </div>
</header>
<?
if($APPLICATION->GetCurDir() != '/')
{
?>
<main class="main relative <?if($banner == true){echo "l-big-face";}?> <?if($agent == true){echo "l-agent";}?>">

<section class="l-page--header">
  <div class="l-wrapper">
  <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumb",
	Array(
		"PATH" => "",
		"SITE_ID" => "s2",
		"START_FROM" => "0"
	)
);?>
<?
if($mainSection)
{
?>
    <div class="l-page--title">
      <h1 class="fs-50-600 <?if($banner == true){echo "text-white";}?>">
      <?$APPLICATION->ShowTitle(false)?>
      </h1>
    </div>
    <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"leftMenuDesktop",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
);?>
<?
}
else
{
?>

<?

if($isInvProj)
{
?>
    <div class="l-page--sections-list">
      <ul>
        <li>
          <a href="/investment-projects/" class="fs-18-500">Инвестиционные проекты</a>
        </li>
        <li>
          <i class="separator"></i>
        </li>
      </ul>
    </div>

<?
}
else
{
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"leftMenuDesktop",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
);?>
<?
}
?>
 <div class="l-page--title">
      <h1 class="fs-50-600 <?if($banner == true){echo "text-white";}?>">
      <?$APPLICATION->ShowTitle(false)?>
      </h1>
    </div>
<?
if($isPressCenter)
{
?>
    <div class="mt-25">
      <span class="fs-18-400 text-dark">
        По вопросам вы можете связаться с нами любыми способами
      </span>
    </div>
<?
}
?>
<?
}
?>

    <?
    if($intotext)
    {

    ?>
    
   <?
   if($APPLICATION->GetCurDir() == '/about/')
   {
    $APPLICATION->IncludeComponent(
      "bitrix:main.include",
      "",
      Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/about/intotext.php"
      )
    );
    
   }
   if($APPLICATION->GetCurDir() == '/agency/')
   {
    $APPLICATION->IncludeComponent(
      "bitrix:main.include",
      "",
      Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/agency/intotext.php"
      )
    );
    
   }


?>

<?
    }
?>
  </div>
<?
if($banner)
{

?>
  <section class="l-banner__bg">
    <div class="l-wrapper">
      <?
      if($APPLICATION->GetCurDir() == '/about/')
      {
        if(!CModule::IncludeModule("iblock"))
        return; 
        
        $res = CIBlockElement::GetByID(89);
        if($ar_res = $res->GetNext())
			echo '<img class="big-bg" style="object-position: 0% 0%;" src="'.CFile::GetPath($ar_res['DETAIL_PICTURE']).'" alt="">';
      }

      if($APPLICATION->GetCurDir() == '/agency/')
      {
        if(!CModule::IncludeModule("iblock"))
        return; 
        
        $res = CIBlockElement::GetByID(169);
        if($ar_res = $res->GetNext())
          echo '<img class="big-bg" style="object-position: 0% 0%;" src="'.CFile::GetPath($ar_res['DETAIL_PICTURE']).'" alt="">';
      }

      ?>
      <div class="bg-ottenok"></div>
    </div>
  </section>
  <?
}
  ?>
</section>
<?
if($banner)
{
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"leftMenuMobile",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
);?>
<?
}
?>
<?
if(!$agent && $wrapper && !$isNews && !$isDetailNews && !$isPressCenter && !$isFeedbackForm && !$isSearchPage && !$isStatic && !$isAboutYak)
{
?>
<section class="mt-<?if($mainSection == true){echo "80";}else{echo "25";}?>">
    <div class="l-wrapper">
<?
}
if($isPressCenter || $isFeedbackForm)
{
?>
<section class="mt-80">
    <div class="l-wrapper">
<?
}
if($isDetailNews)
{
  ?>
  <section class="<?if($isDetailNews){echo "mt-80 l-news__detail-page";}?>">
    <div class="l-wrapper">
  <?
}
if($isSearchPage)
{
  ?>
  <section class="mt-40 l-search-page">
    <div class="l-wrapper">
  <?
}
if($isNews)
{
  ?>
  <section class="l-section l-news-page__section">
    <div class="l-wrapper">
  <?
}

if($isStatic)
{
  ?>
  <section class="mt-80">
<div class="l-wrapper">
  <div class="static__page">
  <?
}
?>
<?
}
?>