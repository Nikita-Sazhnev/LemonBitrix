<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Login");
?>

<div class="mx-auto">
	<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"login",
	Array(
		"FORGOT_PASSWORD_URL" => "/forgot",
		"PROFILE_URL" => "",
		"REGISTER_URL" => "/reg",
		"SHOW_ERRORS" => "N"
	)
);?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>