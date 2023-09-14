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

$top = array_slice($arResult["ITEMS"], 0, 2);
$bot = array_slice($arResult["ITEMS"], 2);
// echo "<pre>";
// echo print_r($top);
// echo "</pre>";	
?>

<div class="l-block--team">
          <div class="l-team--grid">

            <div class="l-team--row">
				<?
				foreach($top as $topMember)
				{
				?>
              <div class="l-team--item">
                <div class="l-team--img">
                  <img src="<?=$topMember["DETAIL_PICTURE"]["SRC"]?>" alt="">
                </div>
                <div class="l-team--name">
                  <span class="fs-20-500"><?=$topMember["NAME"]?></span>
                </div>
                <div class="l-team--desc">
                  <span class="fs-16-400">
				  	<?=$topMember["PROPERTIES"]["STATUS"]["VALUE"]?>
                  </span>
                </div>
                <!-- <div class="l-team--hr">
                  <hr>
                </div>
                <div class="l-team--contact">
                  <span class="fs-16-500">
                    Телефон:
                  </span>
                  <a href="tel:<?//=$topMember["PROPERTIES"]["PHONE_NUMBER"]["VALUE"]?>" class="fs-16-400">
				  	<?//=$topMember["PROPERTIES"]["PHONE_NUMBER"]["VALUE"]?>
                  </a>
                </div>
                <div class="l-team--contact">
                  <span class="fs-16-500">
                    Почта:
                  </span>
                  <a href="mailto: <?//=$topMember["PROPERTIES"]["EMAIL"]["VALUE"]?>" class="fs-16-400">
				  	<?//=$topMember["PROPERTIES"]["EMAIL"]["VALUE"]?>
                  </a>
                </div> -->
              </div>
			  <?
				} 
			  ?>
            </div>

            <div class="l-team--row">
				<?
				foreach($bot as $botMember)
				{
				?>
              <div class="l-team--item">
                <div class="l-team--img">
                  <img src="<?=$botMember["DETAIL_PICTURE"]["SRC"]?>" alt="">
                </div>
                <div class="l-team--name">
                  <span class="fs-20-500"><?=$botMember["NAME"]?></span>
                </div>
                <div class="l-team--desc">
                  <span class="fs-16-400">
				  	<?=$botMember["PROPERTIES"]["STATUS"]["VALUE"]?>
                  </span>
                </div>
                <!-- <div class="l-team--hr">
                  <hr>
                </div>
                <div class="l-team--contact">
                  <span class="fs-16-500">
                    Телефон:
                  </span>
                  <a href="tel:<?//=$botMember["PROPERTIES"]["PHONE_NUMBER"]["VALUE"]?>" class="fs-16-400">
				  	<?//=$botMember["PROPERTIES"]["PHONE_NUMBER"]["VALUE"]?>
                  </a>
                </div>
                <div class="l-team--contact">
                  <span class="fs-16-500">
                    Почта:
                  </span>
                  <a href="mailto: <?//=$botMember["PROPERTIES"]["EMAIL"]["VALUE"]?>" class="fs-16-400">
				 	 <?//=$botMember["PROPERTIES"]["EMAIL"]["VALUE"]?>
                  </a>
                </div> -->
              </div>
			  <?
				} 
			  ?>
            </div>
          </div>
        </div>

