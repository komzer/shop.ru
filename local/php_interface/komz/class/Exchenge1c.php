<?php
//
//namespace komz;
//
//class Exchenge1c
//{
//    private $wsdlConnect, $isDenug = false;
//    private $arParams =[];
//
//    function __construct($urlURL, $login, $pass, $isDebug = false, $arParams=[]){
//        if (empty($login)|| empty($pass)){
//            return false;
//        }
//        if($isDebug){
//            $this->isDebug = true;
//        }
//        if($arParams){
//            $this->arParams = $arParams;
//        }
//        $connectionParams=[
//            'cache_wsdl'=> WSDL_CACHE_NONE,
//            'connection_timeout'=>1200,
//            "login" => $login,
//            "password"=>$pass,
//            "encoding "=>'UTF-8',
//            "features"=> SOAP_SINGLE_ELEMENT_ARRAYS,
//            "trace"=> 1,
//            "exception"=>1,
//        ];
//    if ($this->arParams['timeout']>0){
//        $connectionParams['connection_timeout']=$this->arParams['timeout'];
//    }
//    try{
//        $this->wsdlConnect = new SoapClientLogging($urlURL, $connectionParams);
//    }catch (SoapFault $e){
//        writeEvent($e);
//        writeEvent($e->getMessage());
//        writeEvent('______________');
//        return false;
//    }
//    return true;
//    }
//
//    public function __call($method, $args)
//    {
//        try{
//            $response =call_user_func_array([$this->wsdlConnect,$method],$args);
//        }catch (Exception $e){
//            writeEvent($e);
//            writeEvent($e->getMessage());
//            writeEvent('____________');
//            return false;
//
//        }
//        $arResponse = $this->convert2Array($response);
//        #выбираем 1 элуемент ВСЕГДА. часто разработчики 1С не соблюдаю логику
//        $getOneAr = [];
//        if(in_array($method, $getOneAr)){
//            $arResponse = $arResponse[0];
//        }
//        return  $arResponse;
//    }
//    protected  function convert2Array($response, $isReturn = true){
//        $rows =[];
//        if( $isReturn){
//            $response = $response->return;
//        }
//        foreach ($response->column as $key=>$value){
//            $column[$key] = $value->Name;
//        }
//        if(is_array($response->row)){
//            foreach ($response->row as $oneItem ){
//                $oneVal =[];
//                foreach ($oneItem->Value as $key=>$value){
//                    if(is_object($value)){
//                        if(!is_object($value->enc_value)){
//                            $oneVal[$column[$key]]=$value->enc_value;
//                        }else{
//                            $oneVal[$column[$key]]=$this ->convert2Array($value->enc_value, false);
//                        }
//                    }else{
//                        $oneVal[$column[$key]]=$value;
//                    }
//                }
//                $rows[]=$oneVal;
//            }
//        }
//        return $rows;
//    }
//}