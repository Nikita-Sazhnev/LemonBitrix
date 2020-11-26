<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 Not Found");
$APPLICATION->SetPageProperty("title", "404 Not Found"); 

?>

<main class="bg-white">
	<div class="main__inner">
		<div class="under__line d-block mt-2 mt-lg-5 mb-2 mb-lg-4 pt-3 mx-4">
			<h1 class="error ml-1 ml-lg-3 font-italic">404</h1>
		</div>
		<img class="w-100" src="/local/templates/lemon/img/COULDN’T-FIND.png" alt="Condnt find the page">
		<a href="/" class="btn btn-outline-dark button__back d-block px-4 pt-2 mx-auto text-uppercase mb-2 mb-lg-5" type="button" style="width: 7rem;">back</a>
	</div>
</main>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>