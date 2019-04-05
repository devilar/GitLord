<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
//$this->setFrameMode(true);
$hidemenu = GetStupidProperty("HIDEMENU");
$hidetitle = GetStupidProperty("HIDETITLE");
$hidebreadcrumbs = GetStupidProperty("HIDEBREADCRUMBS");
?>
<!DOCTYPE html>
<html>
	<head>
		<?


		//Если файл с классом существует,
		if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/d-robots.php')) {
			//то подключаем его
		    include_once ($_SERVER['DOCUMENT_ROOT'] . '/d-robots.php');
		    //создаем объект на основе robots.txt из корня сайта
			$oRobots = new RobotsTxtParser(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/robots.txt'));
			//настраиваем
			$oRobots->setUserAgent('Googlebot');
			//проверяем текущий адрес
			$noindex = $oRobots->isDisallowed($_SERVER['REQUEST_URI']) ? '<meta name="googlebot" content="noindex">' . PHP_EOL : '';
		}
		//Вывод в шаблоне
		echo $noindex

?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="yandex-verification" content="81bf18f010eee4b7" />
		<meta name="yandex-verification" content="5fb0262c5bae653e" />
		<meta name="yandex-verification" content="fcea52b829832469" />
    <title><?$APPLICATION->ShowTitle();?></title>
		<?$APPLICATION->ShowHead();?>

    <?
    $APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Roboto:400,600,700");
    $APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700");
    $APPLICATION->AddHeadScript("https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.maskedinput.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.validate.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/jquery.inputmask.bundle.js");

    $APPLICATION->AddHeadScript("https://maps.googleapis.com/maps/api/js");
    //$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/lightbox.min.css");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/lightbox.min.js");

	//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/js/jquery.fancybox.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/custom_styles.css");
	//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.css");

	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.fancybox.js");
	if($APPLICATION->GetCurPage()=="/")
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.spincrement.min.js");
	
	$APPLICATION->AddHeadString('<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>',true);
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.form.min.js");
	
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/scripts.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.lazyload.min.js");


	//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/recaptcha.js");
	//$APPLICATION->AddHeadString('<script src="https://www.google.com/recaptcha/api.js?onload=renderGoogleInvisibleRecaptcha&render=explicit" async defer></script>',true);

    ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

		<!-- Rating@Mail.ru counter -->
		<script type="text/javascript" data-skip-moving="true">
		var _tmr = window._tmr || (window._tmr = []);
		_tmr.push({id: "2985189", type: "pageView", start: (new Date()).getTime()});
		(function (d, w, id) {
		  if (d.getElementById(id)) return;
		  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
		  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
		  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
		  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
		})(document, window, "topmailru-code");
		</script><noscript><div>
		<img src="//top-fwz1.mail.ru/counter?id=2985189;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
		</div></noscript>
		<!-- //Rating@Mail.ru counter -->
		<script data-skip-moving="true">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77279590-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Oneretarget container -->

    <?$APPLICATION->ShowPanel();?>
	<meta name="google-site-verification" content="aOmdC-DqHsjqv79oqVg-EcH2Jq3LsncLiQWmdJ-OgLU" />
	<?if($APPLICATION->GetCurPage()=="/"){?>
		<meta name="google-site-verification" content="48A8A4erPdb2LkEnxUD6KPDMzNH4BtQFeXDjoqpLioo" />
	<?}?>
	<meta name="google-site-verification" content="sq2soD3xB_DURZFLfEYS1aARr37lMR4b3UoO9MCiZaA" />
	<script type="text/javascript">
		(function ct_load_script() {
		var ct = document.createElement('script'); ct.type = 'text/javascript';
		ct.src = document.location.protocol+'//cc.calltracking.ru/phone.df0ab.4352.async.js?nc='+Math.floor(new Date().getTime()/300000);
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ct, s);
		})();
	</script>

<style type="text/css">
	.bx-composite-btn { display:none; }
	.bx-btn-red { display:none; }
	.bx-btn-border { display:none; }
	.bx-composite-btn-fixed { display:none; }
</style>
<script async src="https://stats.lptracker.ru/code/new/64365" data-skip-moving="true"></script>
	</head>
	<body>
    <header>
		  <div class="header-top">
			  <div class="mob-menu">
				  <div id="nav-icon3">
				    <span></span>
				    <span></span>
				    <span></span>
				    <span></span>
				  </div>
			  </div>
        <div class="container">
          <?$APPLICATION->IncludeComponent(
	          "bitrix:menu",
	          "top_menu",
	          Array(
		          "ALLOW_MULTI_SELECT" => "N",
		          "CHILD_MENU_TYPE" => "top",
		          "COMPONENT_TEMPLATE" => ".default",
		          "DELAY" => "N",
		          "MAX_LEVEL" => "1",
		          "MENU_CACHE_GET_VARS" => "",
		          "MENU_CACHE_TIME" => "3600",
		          "MENU_CACHE_TYPE" => "N",
		          "MENU_CACHE_USE_GROUPS" => "Y",
		          "ROOT_MENU_TYPE" => "top",
		          "USE_EXT" => "N"
	          )
          );?>
        </div> <!-- end container -->
		  </div><!-- end header-top -->
		  <div class="container">
		  <?//if($USER->IsAdmin()){?>
		  <style>
			.hm-tell-right,
			.hm-tell-right p {
				display:none;
			}
			.hm-address-right {
				display:block;
			}
		  </style>
			  <div class="header-middle">
				  <a href="/" class="hm-logo">
					  <p><span><em>AKB</em>MOSCOW</span></p>
					  <p>ваш магазин аккумуляторов</p>
				  </a>
				<div class="hm-address">
					<div class="hm-address-left">
						<div class="hmal-ico"></div>
					</div>
					<a class="popup-gmaps hm-address-right" href="https://maps.google.com/?q=107143 Moscow, Montazhnaya 9" rel="nofollow">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						".default",
						array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"AREA_FILE_RECURSIVE" => "Y",
							"EDIT_TEMPLATE" => "",
							"COMPONENT_TEMPLATE" => ".default",
							"PATH" => SITE_TEMPLATE_PATH."/include_area/addres.php"
						),
						false
					);?>
						<p>Схема проезда</p>
					</a>
					<a class="popup-gmaps hm-address-right" href="https://maps.google.com/?q=127410 Москва, Алтуфьевское ш., 77б Фортекс" rel="nofollow">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						".default",
						array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"AREA_FILE_RECURSIVE" => "Y",
							"EDIT_TEMPLATE" => "",
							"COMPONENT_TEMPLATE" => ".default",
							"PATH" => SITE_TEMPLATE_PATH."/include_area/addres2.php"
						),
						false
					);?>
						<p>Схема проезда</p>
					</a>
					<?/*<a class="popup-gmaps hm-address-right" href="https://maps.google.com/?q=Автотехцентр+ИП+Дураченков+Р.Н." rel="nofollow">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						".default",
						array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"AREA_FILE_RECURSIVE" => "Y",
							"EDIT_TEMPLATE" => "",
							"COMPONENT_TEMPLATE" => ".default",
							"PATH" => SITE_TEMPLATE_PATH."/include_area/addres3.php"
						),
						false
					);?>
						<p>Схема проезда</p>
					</a>*/?>

				</div><!-- end hm-address -->
			  <div class="hm-tell tapcolor">
				  <div class="hm-address-left">
						<div class="hmtl-ico" style="margin-bottom: 10px;"></div>
					</div>

					<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_TEMPLATE_PATH."/include_area/phone.php"
	),
	false
);?>
<a href="#form-popup1" class="cprp-link hm-one-click goreknopka" data-effect="mfp-zoom-in">Заказать звонок</a>

					<!--<a href="#form-popup"  data-hdva="Заказать звонок" data-effect="mfp-zoom-in" class="hm-tell-right" style="">
						<p style="margin: 0;line-height: 0;">&nbsp;</p>
						<p>Заказать звонок</p>
					</a>-->
<!--<a href="#form-popup000000000" data-hdva="Заказать в один клик" class="cprp-link hm-one-click goreknopka" data-effect="mfp-zoom-in"></a>-->




				</div><!-- end hm-tell -->

				  <?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.small",
	"smallbasket",
	array(
		"COMPONENT_TEMPLATE" => "smallbasket",
		"PATH_TO_BASKET" => "/cart/",
		"PATH_TO_ORDER" => "/cart/",
		"SHOW_DELAY" => "N",
		"SHOW_NOTAVAIL" => "N",
		"SHOW_SUBSCRIBE" => "N"
	),
	false
);?><!-- end hm-tell -->
			  </div><!-- end header-middle -->
		  <?/*}else{?>
		  <div class="header-middle">
				  <a href="/" class="hm-logo">
					  <p><span><em>AKB</em>MOSCOW</span></p>
					  <p>ваш магазин аккумуляторов</p>
				  </a>
				  <!--noindex-->
				  <a rel="nofollow" class="popup-gmaps hm-address" href="http://maps.google.com/?q=107143 Moscow, Montazhnaya 9">
				  <!--/noindex-->
					<div class="hm-address-left">
						<div class="hmal-ico"></div>
					</div>
					<div class="hm-address-right">
					<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_TEMPLATE_PATH."/include_area/addres.php"
	),
	false
);?>
						<p>Схема проезда</p>
					</div>
				</a><!-- end hm-address -->
				  <a href="#form-popup" class="hm-tell" data-effect="mfp-zoom-in">
					<div class="hm-tell-left">
						<div class="hmtl-ico"></div>
					</div>
					<div class="hm-tell-right">
					<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_TEMPLATE_PATH."/include_area/phone.php"
	),
	false
);?>

						<p>Заказать звонок</p>
					</div>
				</a><!-- end hm-tell -->

				  <?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.small",
	"smallbasket",
	array(
		"COMPONENT_TEMPLATE" => "smallbasket",
		"PATH_TO_BASKET" => "/cart/",
		"PATH_TO_ORDER" => "/cart/",
		"SHOW_DELAY" => "N",
		"SHOW_NOTAVAIL" => "N",
		"SHOW_SUBSCRIBE" => "N"
	),
	false
);?><!-- end hm-tell -->
			  </div><!-- end header-middle -->
		  <?}*/?>


<div class="header-bottom">
				  <div class="hb-left">
					  <a href="/podbor-akkumuljatora-po-marke-avtomobilja/" class="hb-left-img">
						  <div class="hb-left-l"><img src="/bitrix/templates/akbmoscow/images/icons/car.png" class=""></div>
						  <div class="hb-left-r"><span>Подбор аккумулятора по автомобилю</span></div>
					  </a><!-- end hm-left -->
				  </div>
				  <!-- end hb-right-->
				  <div class="hb-right">
					  <?/*$APPLICATION->IncludeComponent(
						"bitrix:search.form",
						"searchline2",
						array(
							"COMPONENT_TEMPLATE" => "searchline2",
							"PAGE" => "#SITE_DIR#search/",
							"USE_SUGGEST" => "Y"
						),
						false
					);*/?>
<? $APPLICATION->IncludeComponent(
	"bitrix:search.title",
	"visual1",
	array(
		"SHOW_INPUT" => "Y",
		"INPUT_ID" => "title-search-input",
		"CONTAINER_ID" => "searchTitle",
		"PAGE" => "#SITE_DIR#search/",
		"NUM_CATEGORIES" => "3",
		"TOP_COUNT" => "5",
		"COMPONENT_TEMPLATE" => "visual1",
		"ORDER" => "rank",
		"USE_LANGUAGE_GUESS" => "N",
		"CHECK_DATES" => "N",
		"SHOW_OTHERS" => "N",
		"CATEGORY_0_TITLE" => "Результаты по аккумуляторам",
		"CATEGORY_0" => array(
			0 => "iblock_Catalog",
		),
		"CATEGORY_0_iblock_Catalog" => array(
			0 => "4",
		),
		"CATEGORY_1_TITLE" => "Результаты по автомобилю",
		"CATEGORY_1" => array(
			0 => "iblock_Catalog",
		),
		"CATEGORY_1_iblock_Catalog" => array(
			0 => "12",
		),
		"PRICE_CODE" => array(
			0 => "base",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SHOW_PREVIEW" => "Y",
		"CONVERT_CURRENCY" => "N",
		"PREVIEW_WIDTH" => "75",
		"PREVIEW_HEIGHT" => "75",
		"CATEGORY_2_TITLE" => "Сопутствующие товары",
		"CATEGORY_2" => array(
			0 => "iblock_Catalog",
		),
		"CATEGORY_2_iblock_Catalog" => array(
			0 => "5",
		)
	),
	false
);
?>
				  </div><!-- end hb-right-->
			  </div>





			  <!--<div class="header-bottom">
				  <div class="hb-left">

				  </div>

			  </div>-->
		  </div>
	  </header>
	  <?if($APPLICATION->GetCurPage()=="/"):?>
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slider",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "homepage",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "T_LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
);?>
	<?else:?>
	<? if($hidebreadcrumbs!="Y"){?>
		<div class="breadcrumbs">
			<div class="container">
				<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
					"COMPONENT_TEMPLATE" => ".default",
						"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
						"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
						"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
					),
					false
				);?>
			</div>
		</div>
	<?}?>

	<? if($hidetitle!="Y"){?>
		<div class="page-heading">
			<div class="container">
				<h1><?$APPLICATION->ShowTitle(false);?></h1>
			</div>
		</div>
	<?}?>
	<?endif;?>

	<?if(CSite::InDir("/personal/") || CSite::InDir("/cart/")){?>
		<div id="order-wrap">
		<div class="container">
	<? } else {?>
		<div id="main">
		<?$APPLICATION->ShowViewContent('landinghead');?>
		<div class="container-lg">

	<?}?>

		<div class="main-wrapper">

					<? ?>
					<?if(CSite::InDir("/related-products/")  | CSite::InDir("/catalog/") || CSite::InDir("/filter/") || CSite::InDir("/personal/") || CSite::InDir("/cart/") || CSite::InDir("/podbor-akkumuljatora-po-marke-avtomobilja/") || CSite::InDir("/p/") || $hidemenu == "Y"){?>
					<?} else {?>
					<aside class="main-sidebar">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							".default",
							array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"AREA_FILE_RECURSIVE" => "Y",
								"EDIT_TEMPLATE" => "",
								"COMPONENT_TEMPLATE" => ".default",
								"PATH" => SITE_TEMPLATE_PATH."/include_area/sidebar.php"
							),
							false
						);?>
					</aside>
				<div class="main-right">
					<?if(!CSite::InDir("/search/")){?><article class="article2">
						<div class="container-mr"><?}?>
					<? } ?>
