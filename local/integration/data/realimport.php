<?php
require ($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
<<<<<<< HEAD
#дефолты
=======

>>>>>>> origin/master
function xml2aray($xmlObject, $out=array()){
    foreach ( (array)$xmlObject as $index => $node)
        $out[$index] =(is_object($node))? xml2aray($node):$node;

    return $out;
}

$el = new CIBlockElement;

<<<<<<< HEAD
$_xml = simplexml_load_file('data/test.xml');
=======
$_xml = simplexml_load_file('data/exhange.html');
>>>>>>> origin/master

foreach ($_xml -> product as $product) {
    $product = xml2aray($product);
    pre($product);
<<<<<<< HEAD
/*
=======

>>>>>>> origin/master
    #СВОЙСТВА
    $props = [
      'ID_START' => $product['OLDID'],
      'SYKNO' => $product['SYKNO']['VARIANT'],
      'VIKRASKA' => $product['VIKRASKA']['VARIANT'],
    ];

<<<<<<< HEAD
    #img
    foreach ($product['IMAGE']['OPTION'] as  $IMAGE){
        $props['PHOTO'][]= CFile::MakeFileArray($IMAGE);
    }
    */

#GetList    основные данные
=======
    foreach ($product['IMAGE']['OPTION'] as  $IMAGE){
        $props['PHOTO'][]= CFile::MakeFileArray($IMAGE);
    }


>>>>>>> origin/master
    $arFields = [
        "NAME" =>$product ['NAME'],
        "CODE" => $product['CODE'],
        "IBLOCK_SECTION_ID"=>$product['SECTION_ID'],
        "DETAIL_TEXT"=>$product['DESCRIPTION'],
<<<<<<< HEAD
        "IBLOCK_ID"=>BLK_ID_PRODUCTS,
=======
        "IBLOCK_ID"=>BLK_ID_INFOBLOCK_PRODUCTS,
>>>>>>> origin/master
        "PROPERTY_VALUES"=>$props,
        "ACTIVE"=> 'Y',
        ];
    #pre ( ' данные к добавлению' );
    #pre( $arFields );

    if($prodId = $el->Add($arFields)){
        pre('Добавлен ID' . $prodId);
        $arFields = array(
            "ID"=>$prodId,
            "QUENITY"=>0,
        );
        CCatalogProduct::Add($arFields);

        foreach ($product['OFFERS']['OFFER'] as $offer){
           #свойства к предложению
            $propsOffer = [
                'QTY_LEGS'=>intval($offer->QTY_LEGS),
                'ART_MANUF'=>$offer->ART,
                'CML2_LINK'=>$prodId,
                'SIZE_FIELD'=> \black8\Products::getLibXmlidByName('\SizeFieldTable', $offer->SIZE_FIELD),
                'GAME_TYPE'=>\black8\Products::getLibXmlidByName('\GameTypeTable', $offer->GAME_TYPE),
                'TABLE_MATERIAL'=>\black8\Products::getLibXmlidByName('\TableMaterialTable',$offer->TABLE_MATERIAL),
                'TABLE_TYPE' =>\black8\Products::getLibXmlidByName('\TableTypeTable', $offer->TABLE_TYPE),
            ];
            //основные данные предлложкния
            $arOffersFields =[
                "NAME"=> implode(',',[$product['NAME'], $offer->SIZE_FIELD, $offer->GAME_TYPE, $offer->TABLE_MATERIAL, $offer->TABLE_TYPE]),
                "IBLOCK_ID" => BLK_ID_INFOBLOCK_OFFERS,
                "PROPERTY_VALUES"=>$propsOffer,
                "ACTIVE"=>"Y",
            ];

            if($offerId = $el->Add($arOffersFields)){
                pre('добавляем оффеер с id' . $offerId);
                $arOffersFields = array(
                    "ID" => $offerId,
                    "QUANTITY"=>50,
                    "WEIGHT"=>$offer->VES,
                );
                CCatalogProduct::Add($arOffersFields);
                #УСТАНОВКА ЦЕНЫ
                \black8\Products::updatePrice($offerId,$offer->PRICE);
            }else{
                pre('ошибка оффера') ;
                pre($el->LAST_ERROR);

            }
        }

    } else{
        pre('ошибка оффера') ;
        pre($el->LAST_ERROR);
        continue;
    }
}
pre ('done');