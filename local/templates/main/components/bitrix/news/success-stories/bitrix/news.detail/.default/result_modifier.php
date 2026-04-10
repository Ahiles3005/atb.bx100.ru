<?php

if (CModule::IncludeModule("highloadblock")) {

    $premIds = $arResult["PROPERTIES"]['ELEMENTY_PREIM']['VALUE'] ?? [];
    if (is_array($premIds) && !empty($premIds)) {

        $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
            'filter' => ['=ID' => 3]
        ])->fetch();

        if ($hlBlock) {
            $entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlBlock);
            $entityClass = $entity->getDataClass();
            $datas = $entityClass::getList([
                'select' => ['*'],
                'order' => ['ID' => 'ASC'],
                'limit' => null
            ])->fetchAll();
        }

        $entityClass = $entity->getDataClass();

        $advantagesData = [];
        foreach ($premIds as $id) {
            if (empty($id)) continue;

            $elementData = $entityClass::getById($id)->fetch();
            if ($elementData) {
                $file = CFile::ResizeImageGet(
                    $elementData['UF_ICON'],
                    ["width" => 100, "height" => 100],
                    BX_RESIZE_IMAGE_PROPORTIONAL,
                    true
                );
                $elementData['UF_ICON'] = $file['src'];
                $arResult["PROPERTIES"]['ELEMENTY_PREIM']['DATA'][] = $elementData;
            }
        }

    }
}

// Сохраняем данные для использования в component_epilog.php
$cp = $this->__component;
if (method_exists($cp, 'SetResultCacheKeys')) {
    $cp->SetResultCacheKeys(['PROPERTIES']);
    $cp->SetResultCacheKeys(['DISPLAY_PROPERTIES']);
}


if (isset($arResult['PROPERTIES'])) {
    $cp->arResult['PROPERTIES'] = $arResult['PROPERTIES'];
}
if (isset($arResult['DISPLAY_PROPERTIES'])) {
    $cp->arResult['DISPLAY_PROPERTIES'] = $arResult['DISPLAY_PROPERTIES'];
}