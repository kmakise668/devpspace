<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Каталог товаров из 1C:Предприятие");
?>

<hr />
<h2>vEdit personal access token (classic)</h2>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvs</button>
<button class="btn">dsvsdvdfvdfvfvs</button>
<button class="btn">dsvsdvdfvdfvfvs</button>
<? $APPLICATION->IncludeComponent(
	"bitrix:catalog.top",
	".default",
	array(
		"IBLOCK_TYPE"	=>	"xmlcatalog",
		"IBLOCK_ID"	=>	"8",
		"ELEMENT_SORT_FIELD"	=>	"sort",
		"ELEMENT_SORT_ORDER"	=>	"asc",
		"ELEMENT_COUNT"	=>	"3",
		"LINE_ELEMENT_COUNT"	=>	"1",
		"PROPERTY_CODE"	=>	array(
			1	=>	"CML2_ARTICLE",
			2	=>	"CML2_BASE_UNIT",
			3	=>	"CML2_TRAITS",
			4	=>	"CML2_ATTRIBUTES",
			5	=>	"CML2_BAR_CODE",
		),
		"SECTION_URL"	=>	"/e-store/xml_catalog/#SECTION_ID#/",
		"DETAIL_URL"	=>	"/e-store/xml_catalog/#SECTION_ID#/#ELEMENT_ID#/",
		"BASKET_URL"	=>	"/personal/cart/",
		"ACTION_VARIABLE"	=>	"action",
		"PRODUCT_ID_VARIABLE"	=>	"id",
		"SECTION_ID_VARIABLE"	=>	"SECTION_ID",
		"CACHE_TYPE"	=>	"A",
		"CACHE_TIME"	=>	"3600",
		"DISPLAY_COMPARE"	=>	"N",
		"PRICE_CODE"	=>	array(
			0	=>	"Розничная",
		),
		"USE_PRICE_COUNT"	=>	"N",
		"SHOW_PRICE_COUNT"	=>	"1"
	)
);


?>

<? $APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	".default",
	array(
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => "kmakise668@gmail.com", // Specify the email address here
	),
	false
);
?>
<? $APPLICATION->IncludeComponent(
	"bitrix:player",
	"",
	array(
		"PLAYER_TYPE" => "auto",
		"USE_PLAYLIST" => "N",
		"PATH" => "/upload/intro.flv",
		"WIDTH" => "400",
		"HEIGHT" => "324",
		"FULLSCREEN" => "Y",
		"SKIN_PATH" => "/bitrix/components/bitrix/player/mediaplayer/skins",
		"SKIN" => "bitrix.swf",
		"CONTROLBAR" => "bottom",
		"WMODE" => "transparent",
		"HIDE_MENU" => "N",
		"SHOW_CONTROLS" => "Y",
		"SHOW_STOP" => "N",
		"SHOW_DIGITS" => "Y",
		"CONTROLS_BGCOLOR" => "FFFFFF",
		"CONTROLS_COLOR" => "000000",
		"CONTROLS_OVER_COLOR" => "000000",
		"SCREEN_COLOR" => "000000",
		"WMODE_WMV" => "window",
		"AUTOSTART" => "N",
		"REPEAT" => "N",
		"VOLUME" => "90",
		"DISPLAY_CLICK" => "play",
		"MUTE" => "N",
		"HIGH_QUALITY" => "Y",
		"ADVANCED_MODE_SETTINGS" => "N",
		"BUFFER_LENGTH" => "10",
		"DOWNLOAD_LINK_TARGET" => "_self"
	),
	false
); ?>

<!-- -->
<h2>Новые фотографии</h2>
<h2>Новые фотографии</h2>
<? $APPLICATION->IncludeComponent(
	"bitrix:photogallery.detail.list",
	".default",
	array(
		"IBLOCK_TYPE" => "photos",
		"IBLOCK_ID" => "10",
		"BEHAVIOUR" => "USER",
		"USER_ALIAS" => $_REQUEST["USER_ALIAS"],
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"ELEMENT_LAST_TYPE" => "none",
		"USE_DESC_PAGE" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"PAGE_ELEMENTS" => "6",
		"DETAIL_URL" => "/content/gallery/#USER_ALIAS#/#SECTION_ID#/#ELEMENT_ID#/",
		"DETAIL_SLIDE_SHOW_URL" => "/content/gallery/#USER_ALIAS#/#SECTION_ID#/#ELEMENT_ID#/slide_show/",
		"SEARCH_URL" => "/content/gallery/search/",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"USE_PERMISSIONS" => "N",
		"GROUP_PERMISSIONS" => array(0 => "1", 1 => "",),
		"COMMENTS_TYPE" => "none",
		"SET_TITLE" => "N",
		"DATE_TIME_FORMAT" => "d.m.Y",
		"ADDITIONAL_SIGHTS" => array(),
		"PICTURES_SIGHT" => "",
		"THUMBNAIL_SIZE" => "90",
		"SHOW_PAGE_NAVIGATION" => "none",
		"SHOW_CONTROLS" => "N",
		"SHOW_RATING" => "N",
		"SHOW_SHOWS" => "N",
		"SHOW_COMMENTS" => "N",
		"SHOW_TAGS" => "N",
		"MAX_VOTE" => "5",
		"VOTE_NAMES" => array(0 => "1", 1 => "2", 2 => "3", 3 => "4", 4 => "5", 5 => "",)
	)
); ?><!-- -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>