<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

//новая группировка
$GROUP = [];
foreach ($arResult["ITEMS"] as $arItem) {
    $ID = $arItem['PROPERTIES']['NAPRAVLENIE']['VALUE_ENUM_ID'];
    if (!isset($GROUP[$ID])) {
        $GROUP[$arItem['PROPERTIES']['NAPRAVLENIE']['VALUE_ENUM_ID']]['NAME'] = $arItem['PROPERTIES']['NAPRAVLENIE']['VALUE'];
    }

    $GROUP[$ID]['ITEMS'][] = $arItem;
}

$arResult["GROUP"] = $GROUP;