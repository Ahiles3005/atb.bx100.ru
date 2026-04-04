<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}


$sections = [];
foreach ($arResult["SECTIONS"] as $section) {
    if($section['DEPTH_LEVEL'] > 2){
        continue;
    }
    if(intval($section['IBLOCK_SECTION_ID']) == 0){
        $sections[$section['ID']] = array_merge($sections[$section['ID']] ?? [],$section);
    }else{
        $sections[$section['IBLOCK_SECTION_ID']]['childs'][] = $section;
    }
}
$arResult["SECTIONS"] = array_values($sections);

// Сохраняем данные для использования в component_epilog.php
$cp = $this->__component;
if (method_exists($cp, 'SetResultCacheKeys')) {
    $cp->SetResultCacheKeys(['SECTIONS']);
}


if (isset($arResult['SECTIONS'])) {
    $cp->arResult['SECTIONS'] = $arResult['SECTIONS'];
}