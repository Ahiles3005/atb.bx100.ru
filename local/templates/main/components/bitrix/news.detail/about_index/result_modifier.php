<?php


$PREIMUSHESTVO_KOMPANII = [];
$ISTORIA_KOMPANII = [];
$EXPERTIZA_ELEMENTS = [];
$PARTNERY = [];


if (CModule::IncludeModule("highloadblock")) {

    $UF_XML_ID = [];

    foreach ($arResult['PROPERTIES']['PREIMUSHESTVO_KOMPANII']['VALUE'] as $code) {
        $UF_XML_ID[] = $code;
    }

    if (!empty($UF_XML_ID)) {
        $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['=ID' => 10] //PREIMUSHESTVO_KOMPANII
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
            $element['UF_SVG_1'] = is_numeric($element['UF_SVG_1']) ? CFile::GetFileArray($element['UF_SVG_1']) : false;
            $element['UF_SVG_2'] = is_numeric($element['UF_SVG_2']) ? CFile::GetFileArray($element['UF_SVG_2']) : false;

            $PREIMUSHESTVO_KOMPANII[$element['UF_XML_ID']] = $element;
        }
    }

    unset($elements);

    /////////////////////////////////////

    $UF_XML_ID = [];

    foreach ($arResult['PROPERTIES']['ISTORIA_KOMPANII']['VALUE'] as $code) {
        $UF_XML_ID[] = $code;
    }

    if (!empty($UF_XML_ID)) {
        $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['=ID' => 11] //ISTORIA_KOMPANII
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
            $ISTORIA_KOMPANII[$element['UF_XML_ID']] = $element;
        }
    }

    unset($elements);


    /////////////////////////////////////


    $UF_XML_ID = [];

    foreach ($arResult['PROPERTIES']['EXPERTIZA_ELEMENTS']['VALUE'] as $code) {
        $UF_XML_ID[] = $code;
    }

    if (!empty($UF_XML_ID)) {
        $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['=ID' => 12] //EXPERTIZA_ELEMENTS
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
            $element['UF_SVG_1'] = is_numeric($element['UF_SVG_1']) ? CFile::GetFileArray($element['UF_SVG_1']) : false;
            $element['UF_SVG_2'] = is_numeric($element['UF_SVG_2']) ? CFile::GetFileArray($element['UF_SVG_2']) : false;

            $EXPERTIZA_ELEMENTS[$element['UF_XML_ID']] = $element;
        }
    }

    unset($elements);

    /////////////////////////////////////

    $UF_XML_ID = [];

    foreach ($arResult['PROPERTIES']['PARTNERY']['VALUE'] as $code) {
        $UF_XML_ID[] = $code;
    }

    if (!empty($UF_XML_ID)) {
        $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['=ID' => 13] //PARTNERY
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

        $typeEnums = \CUserFieldEnum::GetList([], [
            'USER_FIELD_ID' => 153,
        ]);
        $typeValue = [];
        while ($typeEnum = $typeEnums->Fetch()) {
            $typeValue[$typeEnum['ID']] = $typeEnum['VALUE'];
        }


        foreach ($elements as $element) {
            $element['UF_TYPE_NAME'] = $typeValue[$element['UF_TYPE']];
            $element['UF_FILE'] = is_numeric($element['UF_FILE']) ? CFile::GetFileArray($element['UF_FILE']) : false;
            $PARTNERY[$element['UF_XML_ID']] = $element;
        }
    }

    unset($elements);

    /////////////////////////////////////


    if (!empty($PREIMUSHESTVO_KOMPANII)) {
        foreach ($arResult['PROPERTIES']['PREIMUSHESTVO_KOMPANII']['VALUE'] as $code) {
            $arResult['PROPERTIES']['PREIMUSHESTVO_KOMPANII']['HIGH_DATA'][] = $PREIMUSHESTVO_KOMPANII[$code];
        }
    }

    if (!empty($ISTORIA_KOMPANII)) {
        foreach ($arResult['PROPERTIES']['ISTORIA_KOMPANII']['VALUE'] as $k => $code) {

            $value = $ISTORIA_KOMPANII[$code];

            if ($k % 2 == 0) {
                $arResult['PROPERTIES']['ISTORIA_KOMPANII']['LEFT'][] = $value;
            } else {
                $arResult['PROPERTIES']['ISTORIA_KOMPANII']['RIGHT'][] = $value;
            }

            $arResult['PROPERTIES']['ISTORIA_KOMPANII']['ALL'][] = $value;
        }
    }

    if (!empty($EXPERTIZA_ELEMENTS)) {
        foreach ($arResult['PROPERTIES']['EXPERTIZA_ELEMENTS']['VALUE'] as $code) {
            $arResult['PROPERTIES']['EXPERTIZA_ELEMENTS']['HIGH_DATA'][] = $EXPERTIZA_ELEMENTS[$code];
        }
    }


    if (!empty($PARTNERY)) {
        foreach ($arResult['PROPERTIES']['PARTNERY']['VALUE'] as $code) {
            $value = $PARTNERY[$code];
            $arResult['PROPERTIES']['PARTNERY']['HIGH_DATA'][$value['UF_TYPE']]['ITEMS'][] = $PARTNERY[$code];
            $arResult['PROPERTIES']['PARTNERY']['HIGH_DATA'][$value['UF_TYPE']]['NAME'] = $PARTNERY[$code]['UF_TYPE_NAME'];
        }
    }

}


$SERTIFIKATY = [];

foreach ($arResult["DISPLAY_PROPERTIES"]['SERTIFIKATY']['LINK_ELEMENT_VALUE'] as $sertificat) {
    $data = [];
    $data['NAME'] = $sertificat['NAME'];
    $data['BIG_PICTURE'] = CFile::GetFileArray($sertificat['DETAIL_PICTURE']);
    $data['SMALL_PICTURE'] = CFile::ResizeImageGet(
        $data['BIG_PICTURE'],
        array("width" => 110, "height" => 150),
        BX_RESIZE_IMAGE_EXACT,
        true
    );

    $SERTIFIKATY[] = $data;
}
$arResult["PROPERTIES"]['SERTIFIKATY'] = $SERTIFIKATY;


$REESTERY = [];

foreach ($arResult["DISPLAY_PROPERTIES"]['REESTERY']['LINK_ELEMENT_VALUE'] as $register) {

    $data = [];
    $db_props = CIBlockElement::GetProperty(9, $register['ID']);
    while ($prop = $db_props->Fetch()) {
        if ($prop['CODE'] == 'FILE' && !empty($prop['VALUE'])) {

            $data['FILE'] = CFile::GetFileArray($prop['VALUE']);
            continue;
        }
        $data[$prop['CODE']] = $prop['VALUE'];
    }

    $data['NAME'] = $register['NAME'];

    $REESTERY[] = $data;
}


$arResult["PROPERTIES"]['REESTERY'] = $REESTERY;




$arResult["PROPERTIES"]['DOKYMENTY'] = getMaterialsData($arResult["PROPERTIES"]['DOKYMENTY']);


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



function getMaterialsData($materials)
{
    $elementsIds = $materials['VALUE'] ?? [];
    if (empty($elementsIds)) {
        return [];
    }

    $elementsData = [];

    Bitrix\Main\Loader::includeModule('iblock');

    $elements = CIBlockElement::GetList([], ['IBLOCK_ID' => 8, 'ID' => $elementsIds, 'ACTIVE' => 'Y']);

    while ($element = $elements->GetNextElement()) {
        $arFields = $element->GetFields();
        $arProps = $element->GetProperties();


        $fileid = $arProps['FILE']['VALUE'] ?? false;
        $type = $arProps['TYPE']['VALUE'] ?? false;
        $typeId = $arProps['TYPE']['VALUE_XML_ID'] ?? false;

        $originalPath = CFile::GetPath($fileid);
        $elementsData[$typeId]['name'] = $type;
        $elementsData[$typeId]['elements'][] = [
            'name' => $arFields['NAME'],
            'src' => $originalPath,
        ];

    }

    return $elementsData;

}