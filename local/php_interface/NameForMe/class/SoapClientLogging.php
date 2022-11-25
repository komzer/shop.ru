<?php
///* для работы класса требуются включенные расширения php: soap и dom*/
//class SoapClientLogging extends \SoapClient
//{
// function __doRequest(string $request, string $location, string $action, int $version, bool $one_Way = false)
// {
//    $this->eventBeforeRequest($action, $request); #события До отправки
//    $response =  parent::__doRequest($request, $location, $action, $version, $one_Way);
//    $this->eventAfterRequest($action, $response);
//    #форматируем
//     $domxml = new \DOMDocument('1.0');
//     $domxml -> preserveWhiteSpace = false;
//     $domxml -> formatOutput = true;
//     $domxml -> loadXML(html_entity_decode($request));
//     $requestFormattedXml = $domxml->saveXML();
//     $domxml-> loadXML(html_entity_decode($response));
//     $responseFormattedXml = $domxml->saveXml();
//
//     #выбираем функцию которую хотим использовать для записи. В данном случае самописания ulogging
//     if(function_exists('\ulogging')){
//        $logName = 'soap';
//        \ulogging('-------------', $logName);
//        \ulogging('дата и время: ' . date('d.m.Y H:i:s'), $logName);
//        \ulogging('Request:', $logName  );
//        \ulogging($requestFormattedXml, $logName);
//         \ulogging('Response:', $logName);
//         \ulogging($requestFormattedXml, $logName);
//     }
//     return $response;
// }
//
// function eventBeforeRequest($action, $request){
//     #можем использовать обработки запросв
// }
//
//    function eventAfterRequest($action, $response){
//        #можем использовать обработки запросв
//    }
//
//}