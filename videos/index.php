<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Videos");
?><?$APPLICATION->IncludeComponent(
	"bitrix:iblock.tv",
	".default",
	Array(
		"ALLOW_SWF" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DEFAULT_BIG_IMAGE" => "/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_big.png",
		"DEFAULT_SMALL_IMAGE" => "/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_small.png",
		"DURATION" => "",
		"HEIGHT" => "300",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"LOGO" => "/bitrix/components/bitrix/iblock.tv/templates/.default/images/logo.png",
		"PATH_TO_FILE" => "",
		"SECTION_ID" => "",
		"SHOW_COUNTER_EVENT" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"STAT_EVENT" => "N",
		"WIDTH" => "400"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>