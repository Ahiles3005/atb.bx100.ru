<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

$OTRASLI_Id = [];
foreach ($arResult['ITEMS'] as $key => $item) {
    if (isset($item['DETAIL_PICTURE']) && !empty($item['DETAIL_PICTURE'])) {
        $file = CFile::ResizeImageGet(
            $item['DETAIL_PICTURE'],
            ["width" => 362, "height" => 259],
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );
        $arResult['ITEMS'][$key]['DETAIL_PICTURE']['SRC'] = $file['src'];
    }

    $OTRASLI_Id[] = $item["PROPERTIES"]['OTRASLI_NAME']['VALUE'];
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
    $cp->SetResultCacheKeys(['PROPERTIES']);
}


if (isset($arResult['PROPERTIES'])) {
    $cp->arResult['PROPERTIES'] = $arResult['PROPERTIES'];
}