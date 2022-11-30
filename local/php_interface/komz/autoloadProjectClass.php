<?php
use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses(null, [
   #класс с namespace -> файл с классом
    '\Skilbox\Catalog'=>'/local/php_interface/komz/class/Catalog.php',
]);