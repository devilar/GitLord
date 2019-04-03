<?$APPLICATION->IncludeComponent(
	"altop:search.title", 
	".default", 
	array(
		"SHOW_INPUT" => "Y",
		"INPUT_ID" => "title-search-input",
		"CONTAINER_ID" => "altop_search",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "3",
		"PAGE" => "/catalog/",
		"NUM_CATEGORIES" => "1",
		"TOP_COUNT" => "7",
		"ORDER" => "rank",
		"USE_LANGUAGE_GUESS" => "Y",
		"CHECK_DATES" => "N",
		"PROPERTY_CODE_MOD" => array(
			0 => "",
			1 => "GUARANTEE",
			2 => "",
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
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "asc",
		"OFFERS_LIMIT" => "",
		"SHOW_PRICE" => "Y",
		"PRICE_CODE" => array(
			0 => "Интернет-магазин (oblikdom.ru)",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"SHOW_ADD_TO_CART" => "Y",
		"SHOW_ALL_RESULTS" => "Y",
		"CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),
		"CATEGORY_0" => array(
			0 => "iblock_catalog",
		),
		"CATEGORY_0_iblock_catalog" => array(
			0 => "all",
		),
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"OFFERS_CART_PROPERTIES" => array(
			0 => "COLOR",
			1 => "PROP2",
		),
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?> 