<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

$arResult['NEWS_DATA'] = [];


foreach ($arResult['ITEMS'] as $key => $item) {

    $newsTypeId = $item['PROPERTIES']['PRESS_TYPE']['VALUE_ENUM_ID'];
    $newsTypeName = $item['PROPERTIES']['PRESS_TYPE']['VALUE'];


    if (isset($item['DETAIL_PICTURE']) && !empty($item['DETAIL_PICTURE'])) {
        $file = CFile::ResizeImageGet(
            $item['DETAIL_PICTURE'],
            ["width" => 491, "height" => 350],
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );
        $item['DETAIL_PICTURE']['SRC'] = $file['src'];
    }

    $date = date_parse($item['DATE_CREATE']);

    $item['DATE'] = $date["day"] . '.' . $date["month"] . '.' . $date["year"];
    $arResult['NEWS_DATA'][$newsTypeId]['items'][] = $item;
    if (!is_set($arResult['NEWS_DATA'][$newsTypeId]['name'])) {
        $arResult['NEWS_DATA'][$newsTypeId]['name'] = $newsTypeName;
    }
}
unset($arResult['ITEMS']);

// Сохраняем данные для использования в component_epilog.php
$cp = $this->__component;
if (method_exists($cp, 'SetResultCacheKeys')) {
    $cp->SetResultCacheKeys(['NEWS_DATA']);
}


if (isset($arResult['NEWS_DATA'])) {
    $cp->arResult['NEWS_DATA'] = $arResult['NEWS_DATA'];
}