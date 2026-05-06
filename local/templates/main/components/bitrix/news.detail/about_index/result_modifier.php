<?php


$PREIMUSHESTVO_KOMPANII = [];


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
    $UF_XML_ID = [];

    /////////////////////////////////////


    if (!empty($PREIMUSHESTVO_KOMPANII)) {
        foreach ($arResult['PROPERTIES']['PREIMUSHESTVO_KOMPANII']['VALUE'] as $code) {
            $arResult['PROPERTIES']['PREIMUSHESTVO_KOMPANII']['HIGH_DATA'][] = $PREIMUSHESTVO_KOMPANII[$code];
        }
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