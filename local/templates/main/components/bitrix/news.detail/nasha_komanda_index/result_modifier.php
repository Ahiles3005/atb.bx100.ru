<?php

$NASHI_CENNOSTY = [];
$SLOVO_KOMANDY = [];
$PREIMUSHESTVA = [];
$ISTORIY_ROSTA = [];
$FAQ = [];


if (CModule::IncludeModule("highloadblock")) {

    $UF_XML_ID = [];

    foreach ($arResult['PROPERTIES']['NASHI_CENNOSTY']['VALUE'] as $code) {
        $UF_XML_ID[] = $code;
    }

    if (!empty($UF_XML_ID)) {
        $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['=ID' => 4] //NASHI_CENNOSTY
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

            $NASHI_CENNOSTY[$element['UF_XML_ID']] = $element;
        }
    }

    unset($elements);
    $UF_XML_ID = [];

    /////////////////////////////////////

    foreach ($arResult['PROPERTIES']['SLOVO_KOMANDY']['VALUE'] as $code) {
        $UF_XML_ID[] = $code;
    }

    if (!empty($UF_XML_ID)) {
        $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['=ID' => 5] //SLOVO_KOMANDY
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
            $element['UF_FILE'] = is_numeric($element['UF_FILE']) ? CFile::GetFileArray($element['UF_FILE']) : false;
            $SLOVO_KOMANDY[$element['UF_XML_ID']] = $element;
        }
    }

    unset($elements);
    $UF_XML_ID = [];

    /////////////////////////////////////

    foreach ($arResult['PROPERTIES']['PREIMUSHESTVA']['VALUE'] as $code) {
        $UF_XML_ID[] = $code;
    }

    if (!empty($UF_XML_ID)) {
        $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['=ID' => 6] //PREIMUSHESTVA
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
            $PREIMUSHESTVA[$element['UF_XML_ID']] = $element;
        }
    }

    unset($elements);
    $UF_XML_ID = [];

    /////////////////////////////////////

    foreach ($arResult['PROPERTIES']['ISTORIY_ROSTA']['VALUE'] as $code) {
        $UF_XML_ID[] = $code;
    }

    if (!empty($UF_XML_ID)) {
        $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['=ID' => 7] //ISTORIY_ROSTA
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
            $element['UF_FILE'] = is_numeric($element['UF_FILE']) ? CFile::GetFileArray($element['UF_FILE']) : false;
            $ISTORIY_ROSTA[$element['UF_XML_ID']] = $element;
        }
    }

    unset($elements);
    $UF_XML_ID = [];

    /////////////////////////////////////

    foreach ($arResult['PROPERTIES']['FAQ']['VALUE'] as $code) {
        $UF_XML_ID[] = $code;
    }

    if (!empty($UF_XML_ID)) {
        $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['=ID' => 8] //FAQ
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
            $FAQ[$element['UF_XML_ID']] = $element;
        }
    }

    unset($elements);
    $UF_XML_ID = [];


    if (!empty($NASHI_CENNOSTY)) {
        foreach ($arResult['PROPERTIES']['NASHI_CENNOSTY']['VALUE'] as $code) {
            $arResult['PROPERTIES']['NASHI_CENNOSTY']['HIGH_DATA'][] = $NASHI_CENNOSTY[$code];
        }
    }

    if (!empty($SLOVO_KOMANDY)) {
        foreach ($arResult['PROPERTIES']['SLOVO_KOMANDY']['VALUE'] as $code) {
            $arResult['PROPERTIES']['SLOVO_KOMANDY']['HIGH_DATA'][] = $SLOVO_KOMANDY[$code];
        }
    }
    if (!empty($PREIMUSHESTVA)) {
        foreach ($arResult['PROPERTIES']['PREIMUSHESTVA']['VALUE'] as $code) {
            $arResult['PROPERTIES']['PREIMUSHESTVA']['HIGH_DATA'][] = $PREIMUSHESTVA[$code];
        }
    }
    if (!empty($ISTORIY_ROSTA)) {
        foreach ($arResult['PROPERTIES']['ISTORIY_ROSTA']['VALUE'] as $code) {
            $arResult['PROPERTIES']['ISTORIY_ROSTA']['HIGH_DATA'][] = $ISTORIY_ROSTA[$code];
        }
    }
    if (!empty($FAQ)) {
        foreach ($arResult['PROPERTIES']['FAQ']['VALUE'] as $code) {
            $arResult['PROPERTIES']['FAQ']['HIGH_DATA'][] = $FAQ[$code];
        }
    }

}


$arResult['BLOG_ITEMS'] = [];
if (CModule::IncludeModule("iblock")) {
    $arSelect = ['*']; // нужные поля
    $arFilter = ["IBLOCK_ID" => 12, "ACTIVE" => "Y"];
    $res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, false, $arSelect);

    $arItems = [];

    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        $arProps = $ob->GetProperties(); // получаем свойства каждого элемента

        $detailPicture = CFile::GetFileArray($arFields['DETAIL_PICTURE']);

        $images = [];
        $video = [];

        foreach ($arProps['FILE_1']['VALUE'] as $fileId) {
            $images[] = CFile::GetFileArray($fileId);
        }
        foreach ($arProps['FILE_2']['VALUE'] as $fileId) {
            $video[] = CFile::GetFileArray($fileId);
        }

        $arResult['BLOG_ITEMS'][] = [
            'NAME' => $arFields['NAME'],
            'DATE' => \CIBlockFormatProperties::DateFormat('d.m.Y', MakeTimeStamp($arFields["ACTIVE_FROM"], CSite::GetDateFormat())),
            'DETAIL_PICTURE' => $detailPicture['SRC'] ?? AHILES3005_NO_IMAGE,
            'TEXT_1' => $arProps['TEXT_1']['~VALUE']['TEXT'] ?? '',
            'TEXT_2' => $arProps['TEXT_2']['~VALUE']['TEXT'] ?? '',
            'TEXT_3' => $arProps['TEXT_3']['~VALUE']['TEXT'] ?? '',
            'TEXT_4' => $arProps['TEXT_4']['~VALUE']['TEXT'] ?? '',
            'IMAGES' => $images,
            'VIDEO' => [],
        ];
    }


}

// Сохраняем данные для использования в component_epilog.php
$cp = $this->__component;
if (method_exists($cp, 'SetResultCacheKeys')) {
    $cp->SetResultCacheKeys(['PROPERTIES', 'DISPLAY_PROPERTIES', 'BLOG_ITEMS']);
}


if (isset($arResult['PROPERTIES'])) {
    $cp->arResult['PROPERTIES'] = $arResult['PROPERTIES'];
}

if (isset($arResult['DISPLAY_PROPERTIES'])) {
    $cp->arResult['DISPLAY_PROPERTIES'] = $arResult['DISPLAY_PROPERTIES'];
}

if (isset($arResult['BLOG_ITEMS'])) {
    $cp->arResult['BLOG_ITEMS'] = $arResult['BLOG_ITEMS'];
}