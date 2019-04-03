<?
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
global $arPromProdPrFilter, $APPLICATION, $arSetting;
//$arPromProdPrFilter["PROPERTY_THIS_COLLECTION"] = false;
//$arPromProdPrFilter["!PROPERTY_TOVAR_VYVEDEN_IZ_ASSORTIMENTA_VALUE"]="Да";

?>
<div
	class="promotions-head-title"
	style="font-size: 18px; font-weight: 600; color: #575b71; padding-bottom: 15px;"><?=Loc::getMessage("PAGE_TITLE_PROMOTIONS")?></div>

<?$arAvailableSort = array(
	"default" => Array("sort", "asc"),
	"price" => Array("PROPERTY_MINIMUM_PRICE", "asc"),
	"rating" => Array("PROPERTY_rating", "desc"),
);

$sort = $APPLICATION->get_cookie("sort") ? $APPLICATION->get_cookie("sort") : "sort";

if($_REQUEST["sort"]) {
	$sort = "sort";
	$APPLICATION->set_cookie("sort", $sort, false, "/", SITE_SERVER_NAME);
}
if($_REQUEST["sort"] == "price") {
	$sort = "PROPERTY_MINIMUM_PRICE";
	$APPLICATION->set_cookie("sort", $sort, false, "/", SITE_SERVER_NAME);
}
if($_REQUEST["sort"] == "rating") {
	$sort = "PROPERTY_rating";
	$APPLICATION->set_cookie("sort", $sort, false, "/", SITE_SERVER_NAME);
}

$sort_order = $APPLICATION->get_cookie("order") ? $APPLICATION->get_cookie("order") : "asc";

if($_REQUEST["order"]) {
	$sort_order = "asc";
	$APPLICATION->set_cookie("order", $sort_order, false, "/", SITE_SERVER_NAME);
}
if($_REQUEST["order"] == "desc") {
	$sort_order = "desc";
	$APPLICATION->set_cookie("order", $sort_order, false, "/", SITE_SERVER_NAME);
}?>
<div class="count_items">
	<label>Товаров:</label>

	<span><?$APPLICATION->ShowViewContent('itemsCount');?></span>
</div>

<div class="catalog-item-sorting">
	<label><span class="full"><?=Loc::getMessage("SECT_SORT_LABEL_FULL")?></span><span class="short"><?=Loc::getMessage("SECT_SORT_LABEL_SHORT")?></span>:</label>
	<?foreach($arAvailableSort as $key => $val):
		$className = $sort == $val[0] ? "selected" : "";
		if($className)
			$className .= $sort_order == "asc" ? " asc" : " desc";
		$newSort = $sort == $val[0] ? $sort_order == "desc" ? "asc" : "desc" : $arAvailableSort[$key][1];?>

		<a href="<?=$APPLICATION->GetCurPageParam("sort=".$key."&amp;order=".$newSort, array("sort", "order"))?>" class="<?=$className?>" rel="nofollow"><?=Loc::getMessage("SECT_SORT_".$key)?></a>
	<?endforeach;?>
</div>

<?//LIMIT//
$arAvailableLimit = array("12", "24","48");

$limit = $APPLICATION->get_cookie("limit") ? $APPLICATION->get_cookie("limit") : "24";

if($_REQUEST["limit"]) {
	$limit = "12";
	$APPLICATION->set_cookie("limit", $limit, false, "/", SITE_SERVER_NAME);
}
if($_REQUEST["limit"] == "24") {
	$limit = "24";
	$APPLICATION->set_cookie("limit", $limit, false, "/", SITE_SERVER_NAME);
}
if($_REQUEST["limit"] == "48") {
	$limit = "48";
	$APPLICATION->set_cookie("limit", $limit, false, "/", SITE_SERVER_NAME);
}
?>

<div class="catalog-item-limit" style="padding-bottom: 15px;">
	<label><span class="full"><?=Loc::getMessage("SECT_COUNT_LABEL_FULL")?></span><span class="short"><?=Loc::getMessage("SECT_COUNT_LABEL_SHORT")?></span>:</label>
	<?foreach($arAvailableLimit as $val):?>
		<a href="<?=$APPLICATION->GetCurPageParam("limit=".$val, array("limit"))?>" <?if($limit==$val) echo " class='selected'";?> rel="nofollow"><?if($val=="900"): echo Loc::getMessage("SECT_COUNT_ALL"); else: echo $val; endif;?></a>
	<?endforeach;?>
</div>

<? $priceCode = $_SESSION["VREGIONS_REGION"]["PRICE"] ? $_SESSION["VREGIONS_REGION"]["PRICE"] : 'BASE';
$APPLICATION->IncludeComponent("td:catalog.smart.filter", "elektro",
	Array(
		"IBLOCK_TYPE" => 'catalog',
		"IBLOCK_ID" => 3,
		"SECTION_ID" => $arParams['RESULT']['PRODUCT_SECTION'],
		"FILTER_NAME" => 'arPromProdPrFilter',
		"PRICE_CODE" => array(
			$priceCode
		),
		"CACHE_TYPE" => 'A',
		"CACHE_TIME" => '3600',
		"CACHE_GROUPS" => '',
		"SAVE_IN_SESSION" => "N",
		"FILTER_VIEW_MODE" => "",
		"XML_EXPORT" => "N",
		"SECTION_TITLE" => "NAME",
		"SECTION_DESCRIPTION" => "DESCRIPTION",
		"HIDE_NOT_AVAILABLE" => 'Y',
		"TEMPLATE_THEME" => "",
		"CONVERT_CURRENCY" => true,
		"CURRENCY_ID" => 'RUB',
		"SEF_MODE" => 'N',
		"SEF_RULE" => $arParams['RESULT']['DETAIL_PAGE_URL'] . 'filter/#SMART_FILTER_PATH#/',
		"SMART_FILTER_PATH" => $_REQUEST["SMART_FILTER_PATH"],
		"PAGER_PARAMS_NAME" => '',
		"INSTANT_RELOAD" => '',
		'DISPLAY_ELEMENT_COUNT' => 'Y',
		'DISPLAY_ELEMENT_POPUP_COUNT' => 'Y',
		'SHOW_ALL_WO_SECTION' => 'Y'
	),
	false
);?>

<div class="mobile_smart_filter_js"></div>
<div class="filter_indent<?=($arSetting['SMART_FILTER_LOCATION']['VALUE'] == 'VERTICAL') ? ' vertical' : '';?> clr"></div>

<div class="catalog--section--custom--table">
	<?
	$arPromProdPrFilter['!PROPERTY_VYVEDENNAYA_IZ_ASSORTIMENTA_VALUE'] = "Да";
	$APPLICATION->IncludeComponent(
		"bitrix:catalog.section",
		"sections_promotions",
		array(
			"IBLOCK_TYPE" => "catalog",
			"IBLOCK_ID" => "3",
			"ELEMENT_SORT_FIELD" => $sort,
			"ELEMENT_SORT_ORDER" => $sort_order,
			"ELEMENT_SORT_FIELD2" => "SORT",
			"ELEMENT_SORT_ORDER2" => "ASC",
			"PROPERTY_CODE" => array(
				0 => "NEWPRODUCT",
				1 => "SALELEADER",
				2 => "DISCOUNT",
				3 => "",
			),
			"SET_META_KEYWORDS" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"SHOW_ALL_WO_SECTION" => "Y",
			"BASKET_URL" => "/personal/cart/",
			"ACTION_VARIABLE" => "action",
			"PRODUCT_ID_VARIABLE" => "id",
			"SECTION_ID_VARIABLE" => "SECTION_ID",
			"PRODUCT_QUANTITY_VARIABLE" => "quantity",
			"PRODUCT_PROPS_VARIABLE" => "prop",
			"FILTER_NAME" => "arPromProdPrFilter",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_FILTER" => "Y",
			"CACHE_GROUPS" => "Y",
			"SET_TITLE" => "N",
			"MESSAGE_404" => "",
			"SET_STATUS_404" => "N",
			"SHOW_404" => "N",
			"FILE_404" => "",
			"DISPLAY_COMPARE" => "Y",
			"PAGE_ELEMENT_COUNT" => $limit,
			"LINE_ELEMENT_COUNT" => "",
			"PRICE_CODE" => array(
				//			0 => "Интернет-магазин (oblikdom.ru)",
				0 => $priceCode
			),
			"USE_PRICE_COUNT" => "N",
			"SHOW_PRICE_COUNT" => "1",
			"PRICE_VAT_INCLUDE" => "Y",
			"USE_PRODUCT_QUANTITY" => "Y",
			"ADD_PROPERTIES_TO_BASKET" => "N",
			"PARTIAL_PRODUCT_PROPERTIES" => "N",
			"PRODUCT_PROPERTIES" => array(
			),
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"PAGER_TITLE" => "Товары на акции",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "arrows",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_BASE_LINK" => "",
			"PAGER_PARAMS_NAME" => "",
			"OFFERS_CART_PROPERTIES" => array(
				0 => "COLOR",
				1 => "PROP2",
			),
			"OFFERS_FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"OFFERS_PROPERTY_CODE" => array(
				0 => "COLOR",
				1 => "PROP2",
				2 => "PROP3",
				3 => "",
			),
			"OFFERS_SORT_FIELD" => "SORT",
			"OFFERS_SORT_ORDER" => "ASC",
			"OFFERS_SORT_FIELD2" => "ID",
			"OFFERS_SORT_ORDER2" => "ASC",
			"OFFERS_LIMIT" => "",
			"SECTION_ID" => "",
			"SECTION_CODE" => "",
			"SECTION_URL" => "",
			"DETAIL_URL" => "",
			"USE_MAIN_ELEMENT_SECTION" => "Y",
			"CONVERT_CURRENCY" => "N",
			"CURRENCY_ID" => "",
			"HIDE_NOT_AVAILABLE" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"COMPARE_PATH" => "",
			"BACKGROUND_IMAGE" => "",
			"DISABLE_INIT_JS_IN_COMPONENT" => "N",
			"DISPLAY_IMG_WIDTH" => "178",
			"DISPLAY_IMG_HEIGHT" => "178",
			"PROPERTY_CODE_MOD" => array(
				0 => "",
				1 => "GUARANTEE",
				2 => "",
			),
			"COMPONENT_TEMPLATE" => "sections",
			"SECTION_USER_FIELDS" => array(
				0 => "",
				1 => "",
			),
			"CUSTOM_FILTER" => "",
			"HIDE_NOT_AVAILABLE_OFFERS" => "N",
			"SEF_MODE" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"BROWSER_TITLE" => "-",
			"META_KEYWORDS" => "-",
			"META_DESCRIPTION" => "-",
			"COMPATIBLE_MODE" => "Y"
		),
		false
	);?>
	<?
	if($arSetting["SMART_FILTER_LOCATION"]["VALUE"] == "VERTICAL_RIGHT"):
		$APPLICATION->ShowViewContent("filter_vertical");
	endif;
	?>

</div>
