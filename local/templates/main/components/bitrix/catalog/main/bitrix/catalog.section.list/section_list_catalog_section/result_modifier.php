<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}


$sections = [];

foreach ($arResult["SECTIONS"] as $section) {
    if (intval($section['IBLOCK_SECTION_ID']) == 0) {
        $currectSection = $sections[$section['ID']] ?? [];
        $sections[$section['ID']] = array_merge($currectSection, $section);
    } else {
        $sections[$section['IBLOCK_SECTION_ID']]['childs'][] = $section;
    }
}
$arResult["SECTIONS"] = $sections;

