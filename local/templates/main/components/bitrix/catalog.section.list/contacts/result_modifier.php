<?php


if (CModule::IncludeModule("highloadblock")) {
    $Ids = [];

    foreach ($arResult['SECTIONS'] as $section) {
        if ($section['UF_CONTACTS']) {
            $Ids[] = $section['UF_CONTACTS'];
        }

    }

    if (!empty($Ids)) {
        $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['=ID' => 9]
        ])->fetch();

        if ($hlBlock) {
            $entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlBlock);
            $entityClass = $entity->getDataClass();
            $elements = $entityClass::getList([
                'select' => ['*'],
                'order' => ['ID' => 'ASC'],
                'filter' => ['ID' => $Ids]
            ])->fetchAll();
        }

        foreach ($elements as $element) {
            foreach ($arResult['SECTIONS'] as $k => $section) {
                if ($section['UF_CONTACTS'] == $element['ID']) {
                    $arResult['SECTIONS'][$k]['UF_CONTACTS_DATA'] = $element;
                }
            }
        }
    }

}

if (!empty($arResult['SECTIONS'])) {
    foreach ($arResult['SECTIONS'] as &$arSection) {
        $sectionId = $arSection['ID'];

        // Получаем элементы раздела
        $arSelect = [
            'ID',
            'NAME',
            'DETAIL_PAGE_URL',
            'PREVIEW_TEXT',
            'DETAIL_PICTURE',
            'PREVIEW_PICTURE',
        ];

        $arFilter = [
            'IBLOCK_ID' => $arParams['IBLOCK_ID'],
            'ACTIVE' => 'Y',
            'SECTION_ID' => $sectionId,
            'INCLUDE_SUBSECTIONS' => 'Y',
        ];

        $arSort = [
            'SORT' => 'ASC',
            'NAME' => 'ASC',
        ];

        $rsElements = CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);

        $arSection['ITEMS'] = [];

        while ($obElement = $rsElements->GetNextElement()) {
            $arItem = $obElement->GetFields();

            $arItem['PROPERTIES'] = $obElement->GetProperties();

            if (isset($arItem['PREVIEW_PICTURE']) && !empty($arItem['PREVIEW_PICTURE'])) {
                $file = CFile::ResizeImageGet(
                    $arItem['PREVIEW_PICTURE'],
                    ['width' => 215, 'height' => 215],
                    BX_RESIZE_IMAGE_PROPORTIONAL,
                    true
                );

            }
            $arItem['PREVIEW_PICTURE_SRC'] = $file['src'] ?? AHILES3005_NO_IMAGE;
            if (isset($arItem['PROPERTIES']['FILE']['VALUE']) && !empty($arItem['PROPERTIES']['FILE']['VALUE'])) {
                $file = CFile::GetFileArray($arItem['PROPERTIES']['FILE']['VALUE']);
                $arItem['PROPERTIES']['FILE_SRC'] = $file['src'];

            }
            $arSection['ITEMS'][] = $arItem;
        }
    }
}

$cp = $this->__component;
if (method_exists($cp, 'SetResultCacheKeys')) {
    $cp->SetResultCacheKeys(['SECTIONS']);
}


if (isset($arResult['SECTIONS'])) {
    $cp->arResult['SECTIONS'] = $arResult['SECTIONS'];
}



