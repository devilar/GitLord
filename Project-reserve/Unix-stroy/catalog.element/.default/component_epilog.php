<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$APPLICATION->SetTitle($arResult['NAME']);
global $APPLICATION;
//$APPLICATION->SetPageProperty("test", "веб, разработка, программирование");

//$APPLICATION->AddChainItem("Заголовок", "url");

?>

<script>
// Скрываем лишний блок "Напишите нам" на карточке товара
$( document ).ready(function() {
	$('.footerMoreInfoBlock').css('display','none'); 
});
</script>

