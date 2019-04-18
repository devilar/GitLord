<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $templateData */
/** @var @global CMain $APPLICATION */
global $APPLICATION;
//$this->setFrameMode(true);

if (isset($templateData['TEMPLATE_THEME']))
{
	$APPLICATION->SetAdditionalCSS($templateData['TEMPLATE_THEME']);
}
if (isset($templateData['JS_OBJ']))
{
?>
<script type="text/javascript">
BX.ready(
	BX.defer(function(){
		if (!!window.<? echo $templateData['JS_OBJ']; ?>)
		{
			window.<? echo $templateData['JS_OBJ']; ?>.allowViewedCount(true);
		}
	})
);
</script>
<?
}
?>

<?
// получаем актувльное количество отзывов
$count = 0;
$arSelect = Array("ID");
$arFilter = Array("IBLOCK_ID"=>38,"PROPERTY_OBJECT_ID"=>$arResult["ID"], "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array("ACTIVE_FROM"=>"ASC"), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
    $count++;
}
?>
<span id="block_otzivi_span">Отзывы<?if($count>0){?>(<?=$count;?>)<?}?></span>
</div>

<div>
    <div class="ct-tab-sf active">
        <div class="up-line"></div>
        <div class="ov-img-li">
           
                <?//print_r($arResult["HARAK_PHOTO"]);?>
            
            <?if($arResult["HARAK_PHOTO"]){?>
                <?//$file = MakeImage($arResult["PROPERTIES"]["HARAKTERISTIC_PHOTO"]["VALUE"], array('w'=>435));?>
            <img class="right-sf" src="<?=$arResult["HARAK_PHOTO"]?>" alt="" style="width:435px;"/>
            <?}?>
            <?// иконки под характеристиками
            $APPLICATION->IncludeComponent("epir:catalog.brandblock", "icons_elem", Array(
                    "IBLOCK_TYPE" => "catalog",	// Тип инфоблока
                    "IBLOCK_ID" => "34",	// Идентификатор инфоблока
                    "ELEMENT_ID" => $arResult["ID"],	// Идентификатор элемента инфоблока
                    "ELEMENT_CODE" => "",	// Код элемента инфоблока
                    "PROP_CODE" => array(),	// Таблица брендов
                    "CACHE_TYPE" => "N",	// Тип кеширования
                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                    "HEIGHT_SMALL"=>50,
                    "WIDTH_SMALL"=>65,
                    "HEIGHT"=>50,
                    "WIDTH"=>65,

                ),
                false
            );?>
        </div>
    </div>



    <?if($arResult["DETAIL_TEXT"]){?>
        <div class="ct-tab-sf">
            <p><?=$arResult["DETAIL_TEXT"]?></p>
        </div>
    <?}?>
 
    
    <?if($arResult["INSTRUKTION"]){?>
        <div class="ct-tab-sf instruction_ct">
            <? echo $arResult["INSTRUKTION"];?>
        </div>
    <?}?>




    <div class="ct-tab-sf" id="block_otzivi">
        <div class="tit-link-rew"><span>Отзывы</span><a href="">Написать отзыв</a></div>
        <?$APPLICATION->IncludeComponent(
            "epir:treelike_comments",
            "template1",
            array(
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_SHADOW" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "OBJECT_ID" => $arResult["ID"],
                "IBLOCK_TYPE" => "content",
                "COMMENTS_IBLOCK_ID" => "38",
                "LEFT_MARGIN" => "50",
                "SHOW_USERPIC" => "N",
                "SHOW_DATE" => "Y",
                "SHOW_COUNT" => "Y",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "NO_FOLLOW" => "Y",
                "NO_INDEX" => "Y",
                "NON_AUTHORIZED_USER_CAN_COMMENT" => "Y",
                "USE_CAPTCHA" => "Y",
                "AUTH_PATH" => "/auth/",
                "IP" => $_SERVER["REMOTE_ADDR"]
            ),
            false
        );
        ?>
    </div>
</div>
</div>

<div class="sidebar-right">
    <div class="price-height">
            <?echo '<pre>'; print_r($arResult["PROPERTIES"]); echo '</pre>';?>
        <?if($arResult["NEW_SALE_PRICE"] == ''){?>
            <?foreach($arResult["PRICES"] as $cell=>$arPrice){?>
                <?if($arPrice["DISCOUNT_VALUE"]<$arPrice["VALUE"]){?>
                    <div class="pr1">
                        <?echo $arPrice["PRINT_VALUE"];?>
                    </div>
                <?}?>
            <?}?>

            <div class="pr2">
                <?foreach($arResult["PRICES"] as $cell=>$arPrice){?>
                    <?echo $arPrice["PRINT_DISCOUNT_VALUE"];?>
                <?}?>
            </div>
        <?}else{?>
            <?foreach($arResult["PRICES"] as $cell=>$arPrice){?>
                <div class="pr1">
                    <?echo $arPrice["PRINT_VALUE"];?>
                </div>
            <?}?>

            <div class="pr2">
                <?=$arResult["NEW_SALE_PRICE"]?>
            </div>
        <?}?>

        <?
        // проверяем есть ли товар на скидочных складах
        if (!CModule::IncludeModule("catalog")){
        CModule::IncludeModule("catalog");
        }
        $res = CCatalogStore::GetList(
            $arOrder = array("SORT" => "ASC"),
            $arFilter = array("PRODUCT_ID"=>$arResult["ID"],"ACTIVE"=>"Y","ID"=>array(9,10),">PRODUCT_AMOUNT"=>0),
            $arGroupBy = false,
            $arNavStartParams = false,
            $arSelectFields = array("ID","PRODUCT_AMOUNT")
        );
        while($ob = $res->Fetch())
        {
            $arFields_sale[] = $ob/*["ID"]*/;
        }
//        echo '<pre>'; print_r($arFields_sale); echo '</pre>';
//        $page = explode('/',$APPLICATION->GetCurPage())
        ?>
        <?if($arResult["NEW_SALE_PRICE"] != ''/*$page[2] == 'tovary_so_skidkoy_50' or $page[2] == 'tovary_so_skidkoy_80'*/){?>
            <div class="pr3">«Товар имеет большую скидку по причине повреждения упаковки или в связи с истекающим сроком годности»</div>
        <?}?>

        <div class="price-fix">
            <div class="cent-fix">
            <span class="block_basket_plashka">
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:sale.basket.basket.small",
                    "gigiena.basket_small_plashka",
                    array(
                        "PATH_TO_BASKET" => "/personal/cart/",
                        "PATH_TO_ORDER" => "/personal/order/make/",
                        "SHOW_DELAY" => "Y",
                        "SHOW_NOTAVAIL" => "Y",
                        "SHOW_SUBSCRIBE" => "Y"
                    ),
                    false
                );
                ?>
                <a class="link_to_basket" href="/personal/cart/">Перейти в корзину</a>
                <div class="ov-chet_plashka">
                    <!--noindex-->
                    <a rel="nofollow" in_basket_id="<?=$arResult["ID"]?>" href="<?=$APPLICATION->GetCurPage()?>?aj_add_id=<?=$arResult["ID"]?><?if($arResult['NEW_SALE_PRICE']!=''){?>&sale_price=<?=$arResult['NEW_SALE_PRICE'];}?>" class="ord-now-nw cart_gigiena">Купить</a>
                    <!--noindex-->
                </div>
            </span>
            </div>
        </div>

        <div class="chet-btn">
            <div class="ov-chet">
                <!--noindex-->
                <a class="ord-now-nw cart_gigiena" in_basket_id="<?=$arResult["ID"]?>" href="<?=$APPLICATION->GetCurPage()?>?aj_add_id=<?=$arResult["ID"]?><?if($arResult['NEW_SALE_PRICE']!=''){?>&sale_price=<?=$arResult['NEW_SALE_PRICE'];}?>">Купить</a>
                <!--noindex-->
                <div class="cht">
                    <input type="text" id="quantity_input" value="1" name="quantity"/>
                    <div class="ups"></div>
                    <div class="dows"></div>
                </div>
            </div>
        </div>


        <a id="oneclick" class="ajax btn__oneclick" href="http://gigiena-spb.ru/bitrix/templates/main/include_areas/oneclick.php">Купить в 1 клик</a>

        <p class="in_stock_text">есть на складе</p>

        <?if($arFields_sale && $arResult["NEW_SALE_PRICE"] == ''/*$page[2] != 'tovary_so_skidkoy_50' && $page[2] != 'tovary_so_skidkoy_80'*/){?>
            <?foreach($arFields_sale as $keyS=>$arSale){?>
                <?if($arSale["ID"] == 9){?>

                    <div class="link-ct"><a href="/catalog/tovary_so_skidkoy_50/<?=$arResult["CODE"]?>/">Есть такой же за <?foreach($arResult["PRICES"] as $cell=>$arPrice){?><?echo round(floatval($arPrice["VALUE"]*0.5),2).' руб.';?><?}?></a></div>
                <?}elseif($arSale["ID"] == 10){?>
                    <div class="link-ct"><a href="/catalog/tovary_so_skidkoy_80/<?=$arResult["CODE"]?>/">Есть такой же за <?foreach($arResult["PRICES"] as $cell=>$arPrice){?><?echo round(floatval($arPrice["VALUE"]*0.2),2).' руб.';?><?}?></a></div>
                <?}?>
            <?}?>
        <?}?>

        <?if($arResult["NEW_SALE_PRICE"] == ''){?>
        <div class="link-fl">
            <!--noindex-->
            <a class="sr3 add_favorite_push" only_favorite_id="<?=$arResult["ID"]?>" favorite_id="<?=$arResult["ID"]?>-" href="<?=$APPLICATION->GetCurPage()?>">В избранное</a>
            <a class="sr4 add_compare_push" only_compare_id="<?=$arResult["ID"]?>" href="<?=$APPLICATION->GetCurPage()?>?action=ADD_TO_COMPARE_LIST&id=<?=$arResult["ID"]?>">В сравнение</a>
            <!--/noindex-->
        </div>
        <?}?>
    </div>

    <?global $arrFilter_tovar_dnya;
    $arrFilter_tovar_dnya = array("PROPERTY_TOVAR_DNYA_VALUE"=>"Y");?>
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "cat.sec.tovar_dnya", Array(
	"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
		"IBLOCK_ID" => "34",	// Инфоблок
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_USER_FIELDS" => array(	// Свойства раздела
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "property_rating",	// По какому полю сортируем элементы
		"ELEMENT_SORT_ORDER" => "desc",	// Порядок сортировки элементов
		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
		"FILTER_NAME" => "arrFilter_tovar_dnya",	// Имя массива со значениями фильтра для фильтрации элементов
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"SHOW_ALL_WO_SECTION" => "Y",	// Показывать все элементы, если не указан раздел
		"HIDE_NOT_AVAILABLE" => "Y",	// Не отображать товары, которых нет на складах
		"PAGE_ELEMENT_COUNT" => "9",	// Количество элементов на странице
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
		"PROPERTY_CODE" => array(	// Свойства
			0 => "SOPUTSTV_TOVAR",
			1 => "",
		),
		"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
		"LABEL_PROP" => "-",	// Свойство меток товара
		"PRODUCT_SUBSCRIPTION" => "N",	// Разрешить оповещения для отсутствующих товаров
		"SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
		"SHOW_OLD_PRICE" => "N",	// Показывать старую цену
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"DISPLAY_COMPARE" => "N",	// Выводить кнопку сравнения
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404, если не найдены элемент или раздел
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"PRICE_CODE" => array(	// Тип цены
			0 => "цена с наценкой",
		),
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
		"BASKET_URL" => "/personal/cart/",	// URL, ведущий на страницу с корзиной покупателя
		"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PRODUCT_PROPERTIES" => "",	// Характеристики товара
		"PAGER_TEMPLATE" => "gigiena",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Товары",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
	),
	false
);?>
</div>
<?
$arUF = $GLOBALS["USER_FIELD_MANAGER"]->GetUserFields('IBLOCK_'.$arParams["IBLOCK_ID"].'_SECTION', $arResult["SECTION"]['ID']);
//echo '<pre>'; print_r($arUF["UF_SOPUTSTV_TOVAR"]); echo '</pre>';
if($arUF["UF_SOPUTSTV_TOVAR"]["VALUE"]){
    $arSelect = Array("ID");
    $arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"],"SECTION_ID"=>$arUF["UF_SOPUTSTV_TOVAR"]["VALUE"], "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        $arIDs[] = $arFields["ID"];
    }
    //echo '<pre>'; print_r($arIDs); echo '</pre>';
}
if(sizeof($arIDs)>0){
    global $arrFilter_soputstv;
    //$arrFilter_soputstv["ID"] = $arResult["PROPERTIES"]["SOPUTSTV_TOVAR"]["VALUE"];
    $arrFilter_soputstv["ID"] = $arIDs;
    $APPLICATION->IncludeComponent(
        "bitrix:catalog.section",
        "cat.sec.soputstv",
        array(
            "IBLOCK_TYPE" => "catalog",
            "IBLOCK_ID" => "34",
            "SECTION_ID" => $_REQUEST["SECTION_ID"],
            "SECTION_CODE" => "",
            "SECTION_USER_FIELDS" => array(
                0 => "",
                1 => "",
            ),
            "ELEMENT_SORT_FIELD" => "property_rating",
            "ELEMENT_SORT_ORDER" => "desc",
            "ELEMENT_SORT_FIELD2" => "id",
            "ELEMENT_SORT_ORDER2" => "desc",
            "FILTER_NAME" => "arrFilter_soputstv",
            "INCLUDE_SUBSECTIONS" => "Y",
            "SHOW_ALL_WO_SECTION" => "Y",
            "HIDE_NOT_AVAILABLE" => "Y",
            "PAGE_ELEMENT_COUNT" => "30",
            "LINE_ELEMENT_COUNT" => "3",
            "PROPERTY_CODE" => array(
                0 => "SOPUTSTV_TOVAR",
                1 => "",
            ),
            "OFFERS_LIMIT" => "5",
            "TEMPLATE_THEME" => "blue",
            "ADD_PICT_PROP" => "-",
            "LABEL_PROP" => "-",
            "PRODUCT_SUBSCRIPTION" => "N",
            "SHOW_DISCOUNT_PERCENT" => "N",
            "SHOW_OLD_PRICE" => "N",
            "MESS_BTN_BUY" => "Купить",
            "MESS_BTN_ADD_TO_BASKET" => "В корзину",
            "MESS_BTN_SUBSCRIBE" => "Подписаться",
            "MESS_BTN_DETAIL" => "Подробнее",
            "MESS_NOT_AVAILABLE" => "Нет в наличии",
            "SECTION_URL" => "",
            "DETAIL_URL" => "",
            "SECTION_ID_VARIABLE" => "SECTION_ID",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_GROUPS" => "Y",
            "SET_META_KEYWORDS" => "N",
            "META_KEYWORDS" => "-",
            "SET_META_DESCRIPTION" => "N",
            "META_DESCRIPTION" => "-",
            "BROWSER_TITLE" => "-",
            "ADD_SECTIONS_CHAIN" => "N",
            "DISPLAY_COMPARE" => "N",
            "SET_TITLE" => "N",
            "SET_STATUS_404" => "N",
            "CACHE_FILTER" => "N",
            "PRICE_CODE" => array(
                0 => "цена с наценкой",
            ),
            "USE_PRICE_COUNT" => "N",
            "SHOW_PRICE_COUNT" => "1",
            "PRICE_VAT_INCLUDE" => "Y",
            "CONVERT_CURRENCY" => "N",
            "BASKET_URL" => "/personal/cart/",
            "ACTION_VARIABLE" => "action",
            "PRODUCT_ID_VARIABLE" => "id",
            "USE_PRODUCT_QUANTITY" => "N",
            "ADD_PROPERTIES_TO_BASKET" => "Y",
            "PRODUCT_PROPS_VARIABLE" => "prop",
            "PARTIAL_PRODUCT_PROPERTIES" => "N",
            "PRODUCT_PROPERTIES" => array(
            ),
            "PAGER_TEMPLATE" => "gigiena",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Товары",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "PRODUCT_QUANTITY_VARIABLE" => "quantity",
            "CACHE_TIME" => "36000000",
            "SET_BROWSER_TITLE" => "Y"
        ),
        false
    );
}?>



