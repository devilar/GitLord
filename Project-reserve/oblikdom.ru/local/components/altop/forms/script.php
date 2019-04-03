<?define("NOT_CHECK_PERMISSIONS", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Loader,
	Bitrix\Main\Localization\Loc,
	Bitrix\Main\Application,
	Bitrix\Main\Mail\Event;

if(!Loader::IncludeModule("iblock"))
	return;

Loc::loadMessages(__FILE__);

global $APPLICATION;

$request = Application::getInstance()->getContext()->getRequest();

$paramsString = $request->getPost("PARAMS_STRING");
if(!empty($paramsString))
	$params = unserialize(base64_decode(strtr($paramsString, "-_,", "+/=")));

$iblockString = $request->getPost("IBLOCK_STRING");
if(!empty($iblockString))
	$iblock = unserialize(base64_decode(strtr($iblockString, "-_,", "+/=")));

$captchaWord = $request->getPost("CAPTCHA_WORD");
$captchaSid = $request->getPost("CAPTCHA_SID");

//REQUARED//
foreach($iblock["PROPERTIES"] as $key => $arProp) {
	if($arProp["CODE"] != "PRODUCT" && $arProp["CODE"] != "PRODUCT_PRICE") {
		if($arProp["IS_REQUIRED"] == "Y") {
			$requared[] = array(
				"CODE" => $arProp["CODE"],
				"NAME" => $arProp["NAME"]
			);
		}
	}
}

//CHECKS//
if(isset($requared) && !empty($requared)) {
	foreach($requared as $arProp) {
		$post = $request->getPost($arProp["CODE"]);
		if(empty($post))
			$error .= Loc::getMessage("FIELD_NOT_FILLED", array("#FIELD#" => $arProp["NAME"]))."<br />";
	}
}

//CHECKS_PERSONAL_DATA//
$personalData = $request->getPost("PERSONAL_DATA");
if($personalData === "N") {
	$error .= Loc::getMessage("FIELD_NOT_FILLED_PERSONAL_DATA")."<br />";
}

//VALIDATE_PHONE_MASK//
foreach($iblock["PROPERTIES"] as $key => $arProp) {
	if($arProp["CODE"] == "PHONE") {
		$post = $request->getPost($arProp["CODE"]);
		if(!empty($post)) {
			if(!preg_match($params["VALIDATE_PHONE_MASK"], $post)) {
				$error .= Loc::getMessage("FIELD_INVALID", array("#FIELD#" => $arProp["NAME"]))."<br />";
			}
		}
	}
}

if(!empty($captchaSid) && !$APPLICATION->CaptchaCheckCode($captchaWord, $captchaSid))
	$error .= Loc::getMessage("WRONG_CAPTCHA")."<br />";

if(!empty($error)) {
	$result = array(
		"error" => array(
			"text" => $error,
			"captcha_code" => !empty($captchaSid) ? $APPLICATION->CaptchaGetCode() : ""
		)
	);
	echo Bitrix\Main\Web\Json::encode($result);
	return;
}

//PROPERTIES//
foreach($iblock["PROPERTIES"] as $key => $arProp) {
	if($arProp["CODE"] == "PRODUCT") {
		$arProps[$arProp["CODE"]] = $params["ELEMENT_NAME"];
	} elseif($arProp["CODE"] == "PRODUCT_PRICE") {
		$arProps[$arProp["CODE"]] = $params["ELEMENT_PRICE"];
	} else {
		$post = $request->getPost($arProp["CODE"]);
		if(!empty($post)) {
			if($arProp["USER_TYPE"] == "HTML") {
				$arProps[$arProp["CODE"]] = array(
					"VALUE" => array(
						"TEXT" => iconv("UTF-8", SITE_CHARSET, strip_tags(trim($post))),
						"TYPE" => $arProp["DEFAULT_VALUE"]["TYPE"]
					)
				);
			} else {
				$arProps[$arProp["CODE"]] = iconv("UTF-8", SITE_CHARSET, strip_tags(trim($post)));
			}
		}
	}
}

//NEW_ELEMENT//
$el = new CIBlockElement;

$arFields = array(
	"IBLOCK_ID" => $iblock["ID"],
	"ACTIVE" => "Y",
	"NAME" => Loc::getMessage("IBLOCK_ELEMENT_NAME").ConvertTimeStamp(time(), "FULL"),
	"PROPERTY_VALUES" => isset($arProps) && !empty($arProps) ? $arProps : array(),
);

if($el->Add($arFields)) {
	//MAIL_EVENT//	
	$eventName = "ALTOP_FORM_".$iblock["CODE"];

	$eventDesc = $messBody = "";	
	foreach($iblock["PROPERTIES"] as $key => $arProp) {
		$eventDesc .= "#".$arProp["CODE"]."# - ".$arProp["NAME"]."\n";
		$messBody .= $arProp["NAME"].": "."#".$arProp["CODE"]."#\n";		
	}	
	$eventDesc .= GetMessage("MAIL_EVENT_DESCRIPTION");
	
	//MAIL_EVENT_TYPE//
	$arEvent = CEventType::GetByID($eventName, LANGUAGE_ID)->Fetch();
	if(empty($arEvent)) {
		$et = new CEventType;
		$arEventFields = array(
			"LID" => LANGUAGE_ID,
			"EVENT_NAME" => $eventName,
			"NAME" => GetMessage("MAIL_EVENT_TYPE_NAME")." \"".$iblock["NAME"]."\"",
			"DESCRIPTION" => $eventDesc
		);
		$et->Add($arEventFields);		
	}

	//MAIL_EVENT_MESSAGE//
	$arMess = CEventMessage::GetList($by = "site_id", $order = "desc", array("TYPE_ID" => $eventName))->Fetch();
	if(empty($arMess)) {
		$em = new CEventMessage;
		$arMess = array();
		$arMess["ID"] = $em->Add(
			array(
				"ACTIVE" => "Y",
				"EVENT_NAME" => $eventName,
				"LID" => SITE_ID,
				"EMAIL_FROM" => "#DEFAULT_EMAIL_FROM#",
				"EMAIL_TO" => "#DEFAULT_EMAIL_FROM#",
				"BCC" => "",
				"SUBJECT" => GetMessage("MAIL_EVENT_MESSAGE_SUBJECT"),
				"BODY_TYPE" => "text",
				"MESSAGE" => GetMessage("MAIL_EVENT_MESSAGE_MESSAGE_HEADER").$messBody.GetMessage("MAIL_EVENT_MESSAGE_MESSAGE_FOOTER")
			)
		);		
	}

	//SEND_MAIL//	
	$arProps["FORM_NAME"] = $iblock["NAME"];
	
	Event::send(array(
		"EVENT_NAME" => $eventName,
		"LID" => SITE_ID,
		"C_FIELDS" => $arProps,
	));
	
	$result = array(
		"success" => array(
			"text" => Loc::getMessage("SUCCESS_MESSAGE")
		)
	);	
} else {	
	$result = array(
		"error" => array(
			"text" => Loc::getMessage("ERROR_MESSAGE")."<br />".$el->LAST_ERROR,
			"captcha_code" => !empty($captchaSid) ? $APPLICATION->CaptchaGetCode() : ""
		)
	);
}

echo Bitrix\Main\Web\Json::encode($result);?>