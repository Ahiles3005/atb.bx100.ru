<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Loader;

if (!Loader::includeModule('iblock')) {
    return;
}

// Массив для хранения разделов с элементами
$arResult['SECTIONS_WITH_ITEMS'] = array();

if (!empty($arResult['SECTIONS'])) {
    foreach ($arResult['SECTIONS'] as &$arSection) {
        $sectionId = $arSection['ID'];

        // Получаем элементы раздела
        $arSelect = array(
            'ID',
            'NAME',
            'DETAIL_PAGE_URL',
            'PREVIEW_TEXT',
            'DETAIL_PICTURE',
            'PREVIEW_PICTURE',
        );

        $arFilter = array(
            'IBLOCK_ID' => $arParams['IBLOCK_ID'],
            'ACTIVE' => 'Y',
            'SECTION_ID' => $sectionId,
            'INCLUDE_SUBSECTIONS' => 'Y',
        );

        $arSort = array(
            'SORT' => 'ASC',
            'NAME' => 'ASC',
        );

        $rsElements = CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);

        $arSection['ITEMS'] = array();

        while ($obElement = $rsElements->GetNextElement()) {

            $arItem = $obElement->GetFields();

            // Получаем свойства элемента
            $arItem['PROPERTIES'] = $obElement->GetProperties();

//            // Формируем DISPLAY_PROPERTIES как в компоненте catalog.section
//            $arItem['DISPLAY_PROPERTIES'] = array();
//            foreach ($arItem['PROPERTIES'] as $pid => $arProperty) {
//                if (!empty($arProperty['VALUE'])) {
//                    $arItem['DISPLAY_PROPERTIES'][$pid] = CIBlockFormatProperties::GetDisplayValue(
//                        $arItem,
//                        $arProperty,
//                        'catalog_out'
//                    );
//                }
//            }

            // Ресайз детальной картинки
            if (isset($arItem['DETAIL_PICTURE']) && !empty($arItem['DETAIL_PICTURE'])) {
                $file = CFile::ResizeImageGet(
                    $arItem['DETAIL_PICTURE'],
                    array('width' => 362, 'height' => 259),
                    BX_RESIZE_IMAGE_PROPORTIONAL,
                    true
                );

                $arItem['DETAIL_PICTURE_SRC'] = $file['src'];
            }

            // Ресайз превью-картинки если есть
            if (isset($arItem['PREVIEW_PICTURE']) && !empty($arItem['PREVIEW_PICTURE'])) {
                $file = CFile::ResizeImageGet(
                    $arItem['PREVIEW_PICTURE'],
                    array('width' => 362, 'height' => 259),
                    BX_RESIZE_IMAGE_PROPORTIONAL,
                    true
                );
                $arItem['PREVIEW_PICTURE_SRC'] = $file['src'];
            }

            // Если нет детальной картинки, используем превью
            if (empty($arItem['DETAIL_PICTURE']) && !empty($arItem['PREVIEW_PICTURE'])) {
                $arItem['DETAIL_PICTURE_SRC'] = $arItem['PREVIEW_PICTURE_SRC'];
            }
            $OTRASLI_Id[] = $arItem["PROPERTIES"]['OTRASLI_NAME']['VALUE'];
            $arSection['ITEMS'][] = $arItem;
        }

        // Получаем подразделы (дочерние разделы)
//        $arSection['SUBSECTIONS'] = array();
//        if (!empty($arSection['CHILDREN'])) {
//            foreach ($arSection['CHILDREN'] as $childSection) {
//                $arSection['SUBSECTIONS'][] = $childSection;
//            }
//        }

        $arResult['SECTIONS_WITH_ITEMS'][$sectionId] = $arSection;
    }
    unset($arSection);

    // Добавляем в кеш

}


if (CModule::IncludeModule("highloadblock")) {


    if (!empty($OTRASLI_Id)) {

        $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['=ID' => 17]
        ])->fetch();

        if ($hlBlock) {
            $entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlBlock);
            $entityClass = $entity->getDataClass();
            $datas = $entityClass::getList([
                'select' => ['*'],
                'order' => ['ID' => 'ASC'],
                'limit' => null,
                'filter' => ['UF_XML_ID' => $OTRASLI_Id]
            ])->fetchAll();
        }

        $entityClass = $entity->getDataClass();

        foreach ($datas as $data) {
            $arResult["PROPERTIES"]['OTRASLI_NAME']['DATA'][$data['UF_XML_ID']] = $data;
        }

    }
}

$cp = $this->__component;
if (method_exists($cp, 'SetResultCacheKeys')) {
    $cp->SetResultCacheKeys(['PROPERTIES','SECTIONS_WITH_ITEMS']);
}


if (isset($arResult['PROPERTIES'])) {
    $cp->arResult['PROPERTIES'] = $arResult['PROPERTIES'];
}

if (isset($arResult['SECTIONS_WITH_ITEMS'])) {
    $cp->arResult['SECTIONS_WITH_ITEMS'] = $arResult['SECTIONS_WITH_ITEMS'];
}