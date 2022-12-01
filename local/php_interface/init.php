<?php
/* В данном файлк только подключения. Никаких реализаций и функций*/


#общие файлы, которые могут у вас ходмть от проекта к  проекту

#подключаем автоподключение классов bitrix
require_once(__DIR__ . '/NameForMe/autoloadBxClass.php' );

#свои мини функции в глобальнос неймспейсе
require_once(__DIR__ . '/NameForMe/functions.php');

#класс для логгирования soap
require_once(__DIR__ . '/NameForMe/class/SoapClientLogging.php');

#для подключения к soap
#require_once(__DIR__ . 'NameForMe/class/SoapConnect.php');

#---------------------------------------------
#Подключаем , что конкретно относится к этому проекту

#конcnfynsы
require_once(__DIR__ . '/komz/constant.php');

#require_once(__DIR__ .'/komz.hide.php);

#автоподключение классов  Highload болоков  !!!error
#require_once(__DIR__ . '/komz/autoloadHighLoadBlock.php');

#втоподключеник классов проекта. Обычно такие пишут для облегчения повторяющизся операций
require_once(__DIR__ . '/komz/autoloadProjectClass.php');