<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("All Categories");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.comments", 
	"comment", 
	array(
		"BLOG_USE" => "Y",
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMMENTS_COUNT" => "5",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "16",
		"FB_USE" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"SHOW_DEACTIVATED" => "N",
		"TEMPLATE_THEME" => "blue",
		"URL_TO_COMMENT" => "",
		"VK_USE" => "N",
		"WIDTH" => "",
		"COMPONENT_TEMPLATE" => "comment",
		"BLOG_TITLE" => "Комментарии",
		"BLOG_URL" => "catalog_comments",
		"PATH_TO_SMILE" => "/bitrix/images/blog/smile/",
		"EMAIL_NOTIFY" => "N",
		"SHOW_SPAM" => "Y",
		"SHOW_RATING" => "N"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>