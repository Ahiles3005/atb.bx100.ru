<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();


foreach ($arResult['ITEMS'] as $key => $item) {
    $tagsValue[] = $item["PROPERTIES"]['TAG_KRASOTA']['VALUE'][0];
}

$arResult["PROPERTIES"]['TAG_KRASOTA']['DATA'] = Helper::getDataForTagPressCenter($tagsValue);
