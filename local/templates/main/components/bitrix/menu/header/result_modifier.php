<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$menuDatas = [];
if (CModule::IncludeModule("highloadblock")) {


    $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
        'filter' => ['=ID' => 2]
    ])->fetch();

    if ($hlBlock) {
        $entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlBlock);
        $entityClass = $entity->getDataClass();
        $menuDatas = $entityClass::getList([
            'select' => ['*'],
            'order' => ['ID' => 'ASC'],
            'limit' => null
        ])->fetchAll();
    }
}


foreach ($arResult as &$element) {
    foreach ($menuDatas as $manuData) {
        if ($element['LINK'] == trim($manuData['UF_LINL'])) {
            $img = CFile::ResizeImageGet(
                $manuData['UF_IMG'],
                ["width" => 320, "height" => 230],
                BX_RESIZE_IMAGE_EXACT,
                true
            );
            $element['menuData'] = [
                'text' => $manuData['UF_TEXT'],
                'img_src' => $img['src'],
            ];
        }
    }

}
// Преобразуем плоский массив меню в дерево
$arResult = \Site\Data::buildMenuTree($arResult);


