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

/*?><!--<? print_r($arResult); ?>--><?*/
//подключим все необходимые переменные для характеристик проектов
include($_SERVER['DOCUMENT_ROOT']."/include/project_values.php");

    //рассчитываем цену, опираясь на общую площадь, тип материала и наличие плана второго этажа (значит, дом двух- или более этажный)
if ($arResult['DISPLAY_PROPERTIES']['plan_2']['VALUE'] != "") {
    $price_base = number_format($arResult['DISPLAY_PROPERTIES']['ob_pl']['DISPLAY_VALUE']*$project_values['prices'][$arResult['DISPLAY_PROPERTIES']['prj_bm']['DISPLAY_VALUE']]['base']['2'], 0, ',', ' ');
    $price_full = number_format($arResult['DISPLAY_PROPERTIES']['ob_pl']['DISPLAY_VALUE']*$project_values['prices'][$arResult['DISPLAY_PROPERTIES']['prj_bm']['DISPLAY_VALUE']]['full']['2'], 0, ',', ' ');
} else {
    $price_base = number_format($arResult['DISPLAY_PROPERTIES']['ob_pl']['DISPLAY_VALUE']*$project_values['prices'][$arResult['DISPLAY_PROPERTIES']['prj_bm']['DISPLAY_VALUE']]['base']['1'], 0, ',', ' ');
    $price_full = number_format($arResult['DISPLAY_PROPERTIES']['ob_pl']['DISPLAY_VALUE']*$project_values['prices'][$arResult['DISPLAY_PROPERTIES']['prj_bm']['DISPLAY_VALUE']]['full']['1'], 0, ',', ' ');
}

$textBase = '<b>Базовая комплектация</b>';
$textKluch = '<b>Комплектация "под ключ"</b>';
		//Выводим маленькую цену только для раздела проекты домов.
if(!isset($_GET['typeSection'])){
 $price_base = number_format($arResult['PROPERTIES']['price2']['VALUE'], 0, ',', ' ');
 $price_full = number_format($arResult['PROPERTIES']['price1']['VALUE'], 0, ',', ' ');
 $textBase = '<b>Архитектурно-строительные<br>чертежи</b>';
 $textKluch = '<b>Полный комплект чертежей</b>';
}
		//Выводим маленькую цену только для раздела проекты домов.

?>
<? //print '<pre>'; ?>
<? //print_r($arResult); ?>
<div class="catalogItemCart" itemscope itemtype="https://schema.org/Product">

    <div style="display: none;">
        <div itemprop="name"><?=$arResult["NAME"]?></div>
        <link itemprop="url" href="http://<?=SITE_SERVER_NAME . $arResult["DETAIL_PAGE_URL"]?>" />
        <link itemprop="image" href="http://<?=SITE_SERVER_NAME . $arResult["DETAIL_PICTURE"]["SRC"]?>" />
        <meta itemprop="brand" />Юникс Строй</meta>

    </div>
                        <?/*<div class="zeroline clearfix">
                            <a href="#" onClick="window.history.back();" class="readmore"><i class="sprite"></i><span class="text">назад к списку проектов</span></a>
                            </div>*/?>
                            <div class="firstline clearfix">
                                <div class="pics">
                                    <div class="bigpics">
                                        <a href="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" class="fancy" data-fancybox-group="asd" title="<?=$arResult['NAME'];?>"><img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" alt="<?=$arResult['NAME'];?>"></a>
                                    </div>
                                    <div class="smallpics">
                                        <? 
                                        foreach ($arResult['PROJECT_VALUES']['fasad_array'] as $key => $val) {
                                            if ($arResult['DISPLAY_PROPERTIES'][$key]['PROPERTY_VALUE_ID'] != "") {
                                                ?><a href="<?=$arResult['DISPLAY_PROPERTIES'][$key]['FILE_VALUE']['SRC'];?>" class="fancy" data-fancybox-group="asd" title="<?=$arResult['NAME'];?> - <?=$val;?>"><img src="<?=$arResult['DISPLAY_PROPERTIES'][$key]['FILE_VALUE']['SRC'];?>" alt="<?=$arResult['NAME'];?> - <?=$val;?>"></a><?
                                            }
                                        }
                                        ?>
                                    </div>



                                    <div class="calcs-button-container"><span>Калькуляторы расчет стоимости</span></div>
                                    <div class="calc-list">
                                        <a href="/calculator/construction/">Расчет стоимости строительства дома</a>
                                        <a href="/calculator/fencing/">Расчет ограждений</a>
                                        <a href="/calculator/gully/">Расчет водостока</a>
                                        <a href="/calculator/roof/">Расчет кровли</a>
                                        <a href="/calculator/visualizer/">Визуализатор</a>

                                    </div>

                                    

                                </div><div class="info">
                                    <h1 class="tal"><?$APPLICATION->ShowTitle(false)?></h1>
                                    <div class="buttons">
                                        <!-- <? //print_r($_SERVER); ?> -->

                                        <div class="orderbut grad_but" data-params="?element_id=<?=$arResult["ID"];?>&code=<?=$arResult["CODE"];?>&name=<?=$arResult["NAME"];?>&price=<?=$price_base;?>&image=<?=$arResult['PREVIEW_PICTURE']['SRC'];?>&ob_pl=<?=$arResult['DISPLAY_PROPERTIES']['ob_pl']['DISPLAY_VALUE'];?>&prj_floors=<?=$arResult['DISPLAY_PROPERTIES']['prj_floors']['DISPLAY_VALUE'];?>&mesto=orderCard&url=http://<?=$_SERVER["HTTP_HOST"];?><?=$_SERVER["REQUEST_URI"];?>"><span class="text">заказать</span></div>
                                        <? if ($arResult['DISPLAY_PROPERTIES']['prj_floors']['DISPLAY_VALUE']=="2") { ?>
                                           <a href="/calculator/construction/?project=<?=$arResult["CODE"];?>" class="calculatorbut"><span class="text">Рассчитать стоимость строительства</span></a>
                                       <? } ?>

                                       <div class="comparebut compareaddbut active" data-elementid="<?=$arResult['ID'];?>"><i class="sprite"></i><span class="text">добавить к сравнению</span></div>
                                       <div class="comparebut comparedelbut" data-elementid="<?=$arResult['ID'];?>"><i class="sprite"></i><span class="text">удалить из сравнения</span></div>
                                       <?if(!isset($_GET['typeSection'])){?>
                                        <div class="stm_prg" data-elementid="<?=$arResult['ID'];?>"><a href="<?=$arResult['DETAIL_PAGE_URL'];?>?typeSection=stroi"><i class="sprite"></i><span class="text">Узнать стоимость строительства</span></a></div><div class="clearfix"></div>
                                        <?}else{?>
                                            <div class="stm_prg" data-elementid="<?=$arResult['ID'];?>"><a href="<?=$arResult['DETAIL_PAGE_URL'];?>"><i class="sprite"></i><span class="text">Узнать стоимость проекта</span></a></div><div class="clearfix"></div>
                                            <?}?>
                                        </div>
                                        <div class="prices">
                                            <? 
                                            $showfullprice = true;
                                    //проверим, нужно ли показывать у этого проекта цену под ключ
                                            foreach ($arResult['DISPLAY_PROPERTIES']['labels']['VALUE'] as $label) {
                                                if (in_array($label, $arResult['PROJECT_VALUES']['withoutfullprice'])) {
                                                    $showfullprice = false;
                                                }
                                            } ?>
                                            <div class="priceItem price_base" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><div class="pre" style="min-height:32px;"><?=$textBase;?> *</div><div class="priceval">от <b itemprop="price"><?=$price_base;?></b> руб.</div>
                                            <meta itemprop="priceCurrency" content="RUB">
                                        </div>
                                        <? if ($showfullprice === true && $price_full) { ?>
                                            <div class="priceItem price_full" ><div class="pre" style="min-height:32px;"><?=$textKluch;?> *</div><div class="priceval">от <b><?=$price_full;?></b> руб.</div>

                                        </div>
                                    <? } ?>
                                </div>

                                <div class="chars" itemprop="description">
                                    <div class="char">
                                        <b>Общая площадь:</b>
                                        <span><?=$arResult['DISPLAY_PROPERTIES']['ob_pl']['DISPLAY_VALUE'];?> м<sup>2</sup></span>
                                    </div>
                                    <div class="char">
                                        <b>Количество этажей:</b>
                                        <span><?=$arResult['DISPLAY_PROPERTIES']['prj_floors']['DISPLAY_VALUE'];?></span>
                                    </div>
                                    <div class="char">
                                        <b>Материал:</b>
                                        <span><?=$arResult['PROJECT_VALUES']['bm_array'][$arResult['DISPLAY_PROPERTIES']['prj_bm']['DISPLAY_VALUE']];?></span>
                                    </div>
									<!--<div class="char" style="margin-top: 15px;">
                                        <b>Стоимость:</b>
                                        
                                    </div>-->
                                </div>
                                <div class="cart_motivation">
                                    <?$APPLICATION->IncludeFile(
                                        $APPLICATION->GetTemplatePath("/include/cart_motivation.php"),
                                        Array(),
                                        Array("MODE"=>"text","NAME"=>"мотивац.текст.")
                                    );?>
                                </div>
                            </div>
                        </div>
                        <div class="secondline clearfix">
                            <div class="schemas">
                                <h2>Планировки этажей</h2>
                                <div class="schemasSlider">
                                    <? 
                                    foreach ($arResult['PROJECT_VALUES']['plans_array'] as $key => $val) {
                                        if ($arResult['DISPLAY_PROPERTIES'][$key]['PROPERTY_VALUE_ID'] != "") {
                                            ?><div class="schemaItem property_<?=$key;?>">
                                                <div class="desc"><?=$val;?></div>
                                                <div class="img"><a rel="nofollow" href="/include/plneditor.php?url=<?=$arResult['DISPLAY_PROPERTIES'][$key]['FILE_VALUE']['SRC'];?>" class="editinplneditor readmore"><i class="sprite"></i><span class="text">редактировать</span></a><a href="<?=$arResult['DISPLAY_PROPERTIES'][$key]['FILE_VALUE']['SRC'];?>" class="fancy" data-fancybox-group="asd" title="<?=$arResult['NAME'];?> - <?=$val;?>"><img src="<?=$arResult['DISPLAY_PROPERTIES'][$key]['FILE_VALUE']['SRC'];?>" alt="<?=$arResult['NAME'];?> - <?=$val;?>"></a></div>
                                                </div><?
                                            }
                                        }
                                        ?>
                                    </div>


                                    


                                </div><div class="complects">
                                    <h2>Комплектации</h2>
                                    <div class="complecttabs">
                                        <div class="tabtitles">
                                           <a href="#tab1" class="tabtitle"><?=$textBase;?></a>
                                           <?if($price_full){?>
                                               <a href="#tab2" class="tabtitle"><?=$textKluch;?></a>
                                               <?}?>
                                           </div>
                                           <div class="tabvalues">
                                        <? /*if (isset($_GET['prj_bm'])) {
                                            $prj_bm = $_GET['prj_bm'];
                                        } else {*/
                                            $prj_bm = $arResult['DISPLAY_PROPERTIES']['prj_bm']['DISPLAY_VALUE'];
                                            /*}*/

                                            if(isset($_GET['typeSection'])){
                                             $prj_bm.='_st';
                                         }
                                         ?>
                                         <div class="tabvalue" id="tab1">
                                            <?$APPLICATION->IncludeFile(
                                                $APPLICATION->GetTemplatePath("/include/complect_base_".$prj_bm.".php"),
                                                Array(),
                                                Array("MODE"=>"text","NAME"=>"баз.комплект.")
                                            );?>
                                        </div>
                                        <div class="tabvalue" id="tab2">
                                            <?$APPLICATION->IncludeFile(
                                                $APPLICATION->GetTemplatePath("/include/complect_full_".$prj_bm.".php"),
                                                Array(),
                                                Array("MODE"=>"text","NAME"=>"подключ.комплект.")
                                            );?>
                                        </div>
                                        <div class="tabvaluesFooter">
                                            <div class="grad"></div>
                                            <span class="readmore dashed"><i class="sprite"></i><span class="text">Подробнее</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__detail__similar__title">
                            Похожие проекты
                        </div>
                        <div class="product__detail__similar">
                            <?
                            $res__fetch = CIBlockElement::GetByID($arResult["ID"]);
                            $section__id="";
                            $section__code="";
                            if($ar_res = $res__fetch->GetNext()){
                               $section__id=$ar_res["IBLOCK_SECTION_ID"];
                           }
                           $res__fetch = CIBlockSection::GetByID($section__id);
                           if($ar_res = $res__fetch->GetNext()){
                            $section__code=$ar_res["CODE"];
                        }
                        $GLOBALS['arrrFilter'] = array('!ID' => $arResult["ID"]);
                        ?>
                        <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:catalog.section",
                            "similar",
                            Array(
                                "ACTION_VARIABLE" => "action",
                                "ADD_PROPERTIES_TO_BASKET" => "Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "N",
                                "BACKGROUND_IMAGE" => "-",
                                "BASKET_URL" => "/personal/basket.php",
                                "BROWSER_TITLE" => "-",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "COMPONENT_TEMPLATE" => "katalog",
                                "DETAIL_URL" => "",
                                "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_TOP_PAGER" => "N",
                                "ELEMENT_SORT_FIELD" => "RAND",
                                "ELEMENT_SORT_ORDER" => "RAND",
                                "FILTER_NAME" => "arrFilter",
                                "IBLOCK_ID" => "1",
                                "IBLOCK_TYPE" => "catalog",
                                "INCLUDE_SUBSECTIONS" => "N",
                                "PAGE_ELEMENT_COUNT" => "4",
                                "MESSAGE_404" => "",
                                "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                                "MESS_BTN_BUY" => "Купить",
                                "MESS_BTN_DETAIL" => "Подробнее",
                                "MESS_BTN_SUBSCRIBE" => "Подписаться",
                                "MESS_NOT_AVAILABLE" => "Нет в наличии",
                                "META_DESCRIPTION" => "-",
                                "META_KEYWORDS" => "-",
                                "OFFERS_LIMIT" => "5",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "Проекты",
                                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                                "PRICE_CODE" => array(),
                                "PRICE_VAT_INCLUDE" => "Y",
                                "PRODUCT_ID_VARIABLE" => "id",
                                "PRODUCT_PROPERTIES" => array(),
                                "PRODUCT_PROPS_VARIABLE" => "prop",
                                "PRODUCT_QUANTITY_VARIABLE" => "",
                                "PROPERTY_CODE" => array(
                                    0 => "img_hash",
                                    1 => "prj_bm",
                                    2 => "prj_floors",
                                    3 => "date",
                                    4 => "labels",
                                    5 => "rooms_bedroom",
                                    6 => "rooms_livingbedroom",
                                    7 => "rooms_bathroom",
                                    8 => "rooms_sauna",
                                    9 => "rooms_pool",
                                    10 => "rooms_billiards",
                                    11 => "rooms_sportscomplex",
                                    12 => "rooms_wintergarden",
                                    13 => "rooms_garage",
                                    14 => "rooms_carplace",
                                    15 => "v_gab",
                                    16 => "h_gab",
                                    17 => "ob_pl",
                                    18 => "jil_pl",
                                    19 => "pl_zast",
                                    20 => "price0",
                                    21 => "price1",
                                    22 => "price2",
                                    23 => "price3",
                                    24 => "price4",
                                    25 => "vars",
                                    26 => "plan_0",
                                    27 => "plan_1",
                                    28 => "plan_2",
                                    29 => "plan_3",
                                    30 => "plan_4",
                                    31 => "plan_m",
                                    32 => "fasad_front",
                                    33 => "fasad_left",
                                    34 => "fasad_right",
                                    35 => "fasad_behind",
                                    36 => "",
                                ),
                                "SECTION_CODE" => $section__code,
                                "SECTION_CODE_PATH" => "",
                                "SECTION_ID" => $section__id,
                                "SECTION_ID_VARIABLE" => "SECTION_ID",
                                "SECTION_URL" => "",
                                "SECTION_USER_FIELDS" => array("", ""),
                                "SEF_MODE" => "N",
                                "SEF_RULE" => "",
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "Y",
                                "SET_META_KEYWORDS" => "Y",
                                "SET_STATUS_404" => "Y",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SHOW_ALL_WO_SECTION" => "Y",
                                "SHOW_PRICE_COUNT" => "1",
                                "TEMPLATE_THEME" => "blue",
                                "USE_MAIN_ELEMENT_SECTION" => "N",
                                "USE_PRICE_COUNT" => "N",
                                "USE_PRODUCT_QUANTITY" => "N"
                            )
                        );?>
                    </div>
                    <div class="zeroline clearfix">
                        <a href="#" onClick="window.history.back();" class="readmore"><i class="sprite"></i><span class="text">назад к списку проектов</span></a>
                    </div>

                    <div class="typeh2s">Наши преимущества</div>


                    <div class="preimitem1">
                        <div class="icon sprite">
                        </div>
                        <div class="title">
                           Строительство «под ключ»
                       </div>

                   </div>
                   <div class="preimitem2">
                    <div class="icon sprite">
                    </div>
                    <div class="title">
                       Удобная система оплаты
                   </div>

               </div>
               <div class="preimitem3">
                <div class="icon sprite">
                </div>
                <div class="title">
                   Честная цена без «сюрпризов»
               </div>

           </div>
           <div class="preimitem4">
            <div class="icon sprite">
            </div>
            <div class="title">
                Строительство в кредит
            </div>

        </div>
        <div class="preimitem5">
            <div class="icon sprite">
            </div>
            <div class="title">
               Постоянные бригады
           </div>

       </div>
       <div class="preimitem6">
        <div class="icon sprite">
        </div>
        <div class="title">
           Цена — качество
       </div>

   </div>

   <div class="clearfix clear"></div>



   <div class="thirdline clearfix">
    <div class="moreinfo"><i class="sprite"></i>
        <div class="text">
            <?$APPLICATION->IncludeFile(
                $APPLICATION->GetTemplatePath("/include/more_info.php"),
                Array(),
                Array("MODE"=>"text","NAME"=>"подробн.инфо.")
            );?>
        </div></div>
    </div>
</div>


<div class="fixed_prop_plans">
	<div class="fixed_prop_plans_block">
		<div class="clode_fixed_prop_plans"></div>
		<iframe src=""></iframe>
	</div>
</div>


