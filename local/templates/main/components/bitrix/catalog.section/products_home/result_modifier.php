<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();


foreach ($arResult['ITEMS'] as $key => $items) {
    $slider = [];
    if (isset($items['DETAIL_PICTURE']) && !empty($items['DETAIL_PICTURE'])) {
        $file = CFile::ResizeImageGet(
            $items['DETAIL_PICTURE'],
            ["width" => 364, "height" => 364],
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );
        $slider[] = ['src' => $file['src']];
    }

    if (isset($items['PROPERTIES']['MORE_PHOTO'])) {
        if (is_array($items['PROPERTIES']['MORE_PHOTO']['VALUE'])) {
            foreach ($items['PROPERTIES']['MORE_PHOTO']['VALUE'] as $fileId) {
                $file = CFile::ResizeImageGet(
                    $fileId,
                    ["width" => 364, "height" => 364],
                    BX_RESIZE_IMAGE_PROPORTIONAL,
                    true
                );
                $slider[] = ['src' => $file['src']];
            }
        } else {
            $file = CFile::ResizeImageGet(
                $items['PROPERTIES']['MORE_PHOTO']['VALUE'],
                ["width" => 364, "height" => 364],
                BX_RESIZE_IMAGE_PROPORTIONAL,
                true
            );
            $slider[] = ['src' => $file['src']];
        }

    }
    $arResult['ITEMS'][$key]['SLIDER'] = $slider;

}