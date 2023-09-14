<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?
if($APPLICATION->GetCurDir() != '/')
{
?>
<?
if(!$agent)
{
?>
<?
if($isStatic)
{
?>
</div>
  <?
}
?>
</div>
</section>
<?
}
?>
</main>
<?
}
?>
<footer class="l-footer">
  <div class="l-wrapper">
    <div class="l-footer__content">
      <div class="l-footer__left">
        <a href="/">
          <svg class="l-footer__logo">
            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--logo-white" />
          </svg>   
        </a>
 
        <div class="l-footer__left-list">
          <span class="fs-20-500 text-white">
            Контакты
          </span>
          <ul>  
            <li>
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "footer",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/info/socials/press-center/phone.php",
                  "COMPONENT_TEMPLATE" => "footer"
                )
              );?>
            </li>

            <li>
              <a class="l-list-item">
                <svg class="l-list-item__icon">
                  <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sprite--location" />
                </svg> 
                <span class="text-white fs-16-400">
                    <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => "/include/info/address.php",
                    )
                  );?>
                </span>
              </a>
            </li>

            <li>
            <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	"footer", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/info/socials/press-center/email.php",
		"COMPONENT_TEMPLATE" => "footer"
	),
	false
);?>
            </li>
          </ul>
        </div>
      </div>
      <div class="l-footer__right">
        <span class="fs-20-500 text-white">
          Cоциальные сети
        </span>
        <ul class="l-social__list">
          <li>
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/info/socials/vk.php"
                )
              );?>
          </li>

          <li>
          <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/info/socials/telegram.php"
                )
              );?>
          </li>

          <li>
          <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/info/socials/ok.php"
                )
              );?>
          </li>
        </ul>
      </div>
    </div>

    <hr>

    <div class="l-footer__bottom">
      <span class="fs-14-400 text-white">
        2021-<?=date("Y");?>г. Все права защищены.
      </span>
      <a href="/privacy-policy/" class="fs-14-400 text-white">
        Политика конфиденциальности 
      </a>
      <span class="fs-14-400 text-white logo-platforma">
        Разработан в 
        <a class="" href="https://platforma.bz/" target="_blank">

        </a>
      </span>
    </div>
  </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- <script src="js/libs.min.js"></script> -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/vue2.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/v-calendar.umd.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/main.min.js"></script>


</body>

</html>