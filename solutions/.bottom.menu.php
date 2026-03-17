<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent("bitrix:menu.sections", "", [
    "IS_SEF" => "Y",
    "SEF_BASE_URL" => "/sections/",
    "SECTION_PAGE_URL" => "#SECTION_CODE_PATH#/",
    "DETAIL_PAGE_URL" => "#SECTION_CODE_PATH#/#CODE#",
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => "3",
    "DEPTH_LEVEL" => "2",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "3600"
], false
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);