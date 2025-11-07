<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();


foreach ($arResult['ITEMS'] as $key => $item) {
    $slider = [];
    if (isset($item['DETAIL_PICTURE']) && !empty($item['DETAIL_PICTURE'])) {
        $file = CFile::ResizeImageGet(
            $item['DETAIL_PICTURE'],
            ["width" => 364, "height" => 364],
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );
        $slider[] = ['src' => $file['src']];
    }

    if (isset($item['PROPERTIES']['MORE_PHOTO'])) {
        if (is_array($item['PROPERTIES']['MORE_PHOTO']['VALUE'])) {
            foreach ($item['PROPERTIES']['MORE_PHOTO']['VALUE'] as $fileId) {
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
                $item['PROPERTIES']['MORE_PHOTO']['VALUE'],
                ["width" => 364, "height" => 364],
                BX_RESIZE_IMAGE_PROPORTIONAL,
                true
            );
            $slider[] = ['src' => $file['src']];
        }

    }
    $arResult['ITEMS'][$key]['SLIDER'] = $slider;

}