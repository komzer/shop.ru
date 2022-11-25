<?php
/* полезные т простые функции для работы с php. Намернено объявляются в глобальной namespace*/
//
//if (!function_exists('pre')){     #проверяем фунцию на сущ (true/false)
//    function pre ($var, $die = false) {
//        echo'<pre>';
//        print_r($var);
//        echo '</pre>';
//        if($die)
//            die('Debug in PRE');
//    }
//}
//
//if(!function_exists('vd')){       #проверяем фунцию на сущ (true/false)
//    function vd($var, $die = false) {
//        echo '<pre>';
//        var_dump($var);  #Выводит информацию о переменной
//        echo '</pre>';
//        if ($die)
//            die('Debug in VD');
//    }
//}
//if(!function_exists('writeEvent')){
//    function writeEvent($dump){
//        ulogging($dump, 'writeEvent', true);
//    }
//}
//
//
//if(!function_exists('ullogging')){
//    /* внимание!!! Перед использованием создать папку logs в upload и дать права на записать в папку */
//    function ulloging ($input, $logname='debug',$dt = false){
//
//        $endLine ="\r\n"; #php eol не используется т.к. иногда это нужно конфигурировать
//
//        $fp = fopen($_SERVER["DOCUMENT_ROOT"] . '/upload/logs/' . $logname . '.txt', "+a");
//
//        if(is_string($input)){
//            $writeStr = $input;
//        }else{
//            $writeStr = print_r($input, true);
//        }
//        if($dt){
//            fwrite($fp, date('d.m.Y H:i:s') . $endLine);
//        }
//        fwrite($fp, $writeStr . $endLine);
//        fclose($fp);
//        return true;
//    }
//
//}