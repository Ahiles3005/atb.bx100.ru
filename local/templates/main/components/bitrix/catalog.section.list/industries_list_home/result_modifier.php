<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}


global $arrFilter;

$arrFilter['PROPERTY_VIVODIT_NA_GLAVNOY'] = 32;

$arSectionIds = [];

$res = CIBlockElement::GetList(
    [],
    array_merge(
        [
            'IBLOCK_ID' => $IBLOCK_ID,
            'ACTIVE' => 'Y',
        ],
        $arrFilter
    ),
    false,
    false,
    ['IBLOCK_SECTION_ID']
);

while ($arItem = $res->Fetch()) {
    if ($arItem['IBLOCK_SECTION_ID']) {
        $arSectionIds[$arItem['IBLOCK_SECTION_ID']] = true;
    }


}
$_sections = $arResult["SECTIONS"];
unset($arResult["SECTIONS"]);
foreach ($_sections as $arSection) {
    if ($arSectionIds[$arSection['ID']]) {
        $arResult["SECTIONS"][] = $arSection;
    }
}