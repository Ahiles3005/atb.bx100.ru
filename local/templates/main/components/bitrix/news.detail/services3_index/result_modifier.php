<?php

$BLOCK_3_S_2 = [];


if (CModule::IncludeModule("highloadblock")) {

    $UF_XML_ID = [];

    foreach ($arResult['PROPERTIES']['BLOCK_2_S']['VALUE'] as $code) {
        $UF_XML_ID[] = $code;
    }

    if (!empty($UF_XML_ID)) {
        $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['=ID' => 16] //BLOCK_2_S
        ])->fetch();

        if ($hlBlock) {
            $entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlBlock);
            $entityClass = $entity->getDataClass();
            $elements = $entityClass::getList([
                'select' => ['*'],
                'order' => ['ID' => 'ASC'],
                'filter' => ['UF_XML_ID' => $UF_XML_ID]
            ])->fetchAll();
        }

        foreach ($elements as $element) {
            $element['UF_FILE1'] = is_numeric($element['UF_FILE1']) ? CFile::GetFileArray($element['UF_FILE1']) : false;
            $element['UF_FILE2'] = is_numeric($element['UF_FILE2']) ? CFile::GetFileArray($element['UF_FILE2']) : false;

            $BLOCK_2_S[$element['UF_XML_ID']] = $element;
        }
    }


    if (!empty($BLOCK_2_S)) {
        foreach ($arResult['PROPERTIES']['BLOCK_2_S']['VALUE'] as $code) {
            $arResult['PROPERTIES']['BLOCK_2_S']['HIGH_DATA'][] = $BLOCK_2_S[$code];
        }
    }


}

$arResult["DISPLAY_PROPERTIES"]['BLOCK_3_S_2']['VALUE'] = [];
foreach ($arResult['PROPERTIES']['BLOCK_3_S_2']['~VALUE'] as $value) {
    $unserializeData = unserialize($value);
    $arResult["DISPLAY_PROPERTIES"]['BLOCK_3_S_2']['VALUE'][] = $unserializeData['VALUE'];
}


// Сохраняем данные для использования в component_epilog.php
$cp = $this->__component;
if (method_exists($cp, 'SetResultCacheKeys')) {
    $cp->SetResultCacheKeys(['PROPERTIES', 'DISPLAY_PROPERTIES']);
}


if (isset($arResult['PROPERTIES'])) {
    $cp->arResult['PROPERTIES'] = $arResult['PROPERTIES'];
}

if (isset($arResult['DISPLAY_PROPERTIES'])) {
    $cp->arResult['DISPLAY_PROPERTIES'] = $arResult['DISPLAY_PROPERTIES'];
}

