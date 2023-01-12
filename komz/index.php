<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<?
$APPLICATION->IncludeComponent(
    "komz:buysteps.preview",
    "",
    Array(
            'IBLOCK_ID'=>4,
    )
); ?>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

