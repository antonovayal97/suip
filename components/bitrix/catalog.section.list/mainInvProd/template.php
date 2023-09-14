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

$secs = array_slice($arResult["SECTIONS"], 0, 4);
?>

<section class="l-section l-projects__section">
	<div class="l-wrapper">
		<h2 class="l-title-main black">
			ИНВЕСТИЦИОННЫЕ ПРОЕКТЫ
		</h2>
		<div class="l-projects mt-50">
			<ul class="l-projects__list flex --align-center">
				<?
				foreach($secs as $arSection)
				{
					if(substr($arSection["ELEMENT_CNT"], -1, 1) == '1' && substr($arSection["ELEMENT_CNT"], -2, 2) != '11')
					{
						$PROD_NAME = "проект";
					}

					if((substr($arSection["ELEMENT_CNT"], -1, 1) == '2' && substr($arSection["ELEMENT_CNT"], -2, 2) != '12' ) || (substr($arSection["ELEMENT_CNT"], -1, 1) == '3' && substr($arSection["ELEMENT_CNT"], -2, 2) != '13' ) || (substr($arSection["ELEMENT_CNT"], -1, 1) == '4' && substr($arSection["ELEMENT_CNT"], -2, 2) != '14' ))
					{
						$PROD_NAME = "проекта";
					}

					if(substr($arSection["ELEMENT_CNT"], -1, 1) == '5' || substr($arSection["ELEMENT_CNT"], -1, 1) == '6' || substr($arSection["ELEMENT_CNT"], -1, 1) == '7' || substr($arSection["ELEMENT_CNT"], -1, 1) == '8' || substr($arSection["ELEMENT_CNT"], -1, 1) == '9' || substr($arSection["ELEMENT_CNT"], -1, 1) == '0' || substr($arSection["ELEMENT_CNT"], -2, 2) == '11' || substr($arSection["ELEMENT_CNT"], -2, 2) == '12' || substr($arSection["ELEMENT_CNT"], -2, 2) == '13' || substr($arSection["ELEMENT_CNT"], -2, 2) == '14')
					{
						$PROD_NAME = "проектов";
					}
				?>
				<li>
					<a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="l-projects__list-item">
						<span class="title"><?=$arSection["NAME"]?></span>
						<span class="descr"><?=$arSection["ELEMENT_CNT"]?> <?=$PROD_NAME?></span>
					</a>
				</li>
				<?
				} 
				?>


			</ul>

			<a href="/investment-projects/" class="l-btn l-btn__white">Все проекты</a>

		</div>
		<!-- /.l-projects -->
	</div>
	<!-- /.l-wrapper -->
</section>