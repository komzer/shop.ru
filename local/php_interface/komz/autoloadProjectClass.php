<?php
use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses(null, [
   #класс с namespace -> файл с классом
    '\komz\Catalog'=>'/local/php_interface/komz/class/Catalog.php',
]);
