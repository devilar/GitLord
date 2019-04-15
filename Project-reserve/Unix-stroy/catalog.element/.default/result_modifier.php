<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;
//подключим все необходимые переменные для характеристик проектов
include($_SERVER['DOCUMENT_ROOT']."/include/project_values.php");

$arResult['PROJECT_VALUES'] = $project_values;


//установим заголовок
$arResult['BASENAME'] = $arResult['NAME'];
//$arResult['NAME'] = "Проект ".$arResult['PROJECT_VALUES']['bm_padej_rod'][$arResult['PROPERTIES']['prj_bm']['VALUE']]." ".$arResult['NAME'];

	$arResult['NAME'] = "Проект ".$arResult['NAME'];


// Если указан h1 то выводим его

if (!empty($arResult[PROPERTIES][h1][VALUE])) {
	$arResult['NAME'] = $arResult[PROPERTIES][h1][VALUE];
}

$APPLICATION->SetTitle($arResult['NAME']);

if ( !empty($arResult['IPROPERTY_VALUES']['ELEMENT_META_TITLE'] )) {
    $arResult['IPROPERTY_VALUES']['ELEMENT_META_TITLE'] .=  " | Заказать строительство дома от компании ООО «Юникс-Строй»";    
}

if ($arResult['PROPERTIES']['meta_title']['VALUE'] == "") {
	$arResult['PROPERTIES']['meta_title']['VALUE'] = "Строительство ".$arResult['PROJECT_VALUES']['bm_padej_rod'][$arResult['PROPERTIES']['prj_bm']['VALUE']]." по проекту ".$arResult['BASENAME']." под ключ недорого";
}
if ($arResult['PROPERTIES']['meta_description']['VALUE'] == "") {
	$arResult['PROPERTIES']['meta_description']['VALUE'] = $arResult['PROJECT_VALUES']['floors_array'][$arResult['PROPERTIES']['prj_floors']['VALUE']]." ".$arResult['PROJECT_VALUES']['bm'][$arResult['PROPERTIES']['prj_bm']['VALUE']]." ".$arResult['BASENAME']." - цена строительства под ключ. Компания Юникс Строй предлагает строительство ".$arResult['PROJECT_VALUES']['bm_padej_rod_mn'][$arResult['PROPERTIES']['prj_bm']['VALUE']]." недорого. Большой каталог проектов ".$arResult['PROJECT_VALUES']['bm_padej_rod_mn'][$arResult['PROPERTIES']['prj_bm']['VALUE']];
}
if ($arResult['PROPERTIES']['meta_keywords']['VALUE'] == "") {
	$arResult['PROPERTIES']['meta_keywords']['VALUE'] = $arResult['PROJECT_VALUES']['section_title_bm'][$arResult['PROPERTIES']['prj_bm']['VALUE']].", ".$arResult['PROJECT_VALUES']['bm'][$arResult['PROPERTIES']['prj_bm']['VALUE']].", строительство ".$arResult['PROJECT_VALUES']['bm_padej_rod_mn'][$arResult['PROPERTIES']['prj_bm']['VALUE']].", строительство ".$arResult['PROJECT_VALUES']['bm_padej_rod_mn'][$arResult['PROPERTIES']['prj_bm']['VALUE']]." под ключ, строительство ".$arResult['PROJECT_VALUES']['bm_padej_rod_mn'][$arResult['PROPERTIES']['prj_bm']['VALUE']]." цена, строительство ".$arResult['PROJECT_VALUES']['bm_padej_rod'][$arResult['PROPERTIES']['prj_bm']['VALUE']].", строительство ".$arResult['PROJECT_VALUES']['bm_padej_rod'][$arResult['PROPERTIES']['prj_bm']['VALUE']]." недорого, проект ".$arResult['PROJECT_VALUES']['bm_padej_rod'][$arResult['PROPERTIES']['prj_bm']['VALUE']].", проекты ".$arResult['PROJECT_VALUES']['bm_padej_rod_mn'][$arResult['PROPERTIES']['prj_bm']['VALUE']].", проекты ".$arResult['PROJECT_VALUES']['bm_padej_rod_mn'][$arResult['PROPERTIES']['prj_bm']['VALUE']]." цена, проекты ".$arResult['PROJECT_VALUES']['bm_padej_rod_mn'][$arResult['PROPERTIES']['prj_bm']['VALUE']]." недорого";
}

?>


