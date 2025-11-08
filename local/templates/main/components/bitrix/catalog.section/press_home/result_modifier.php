<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();


foreach ($arResult['ITEMS'] as $key => $item) {
    if (isset($item['DETAIL_PICTURE']) && !empty($item['DETAIL_PICTURE'])) {
        $file = CFile::ResizeImageGet(
            $item['DETAIL_PICTURE'],
            ["width" => 491, "height" => 350],
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );
        $arResult['ITEMS'][$key]['DETAIL_PICTURE']['SRC'] = $file['src'];
    }

    $date = date_parse($item['DATE_CREATE']);

    $arResult['ITEMS'][$key]['DATE'] = $date["day"] . '.' . $date["month"] . '.' . $date["year"];


}