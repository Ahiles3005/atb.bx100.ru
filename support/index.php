<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ПОДДЕРЖКА");
$APPLICATION->SetPageProperty('mainid', 'sup');
?>
<?$APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "support_index",
        Array(
                "ACTIVE_DATE_FORMAT" => "",
                "ADD_ELEMENT_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "BROWSER_TITLE" => "-",
                "CACHE_GROUPS" => "N",
                "CACHE_TIME" => "3600",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "N",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_CODE" => "",
                "ELEMENT_ID" => "138",
                "FIELD_CODE" => array("",""),
                "FILE_404" => '',
                "GROUP_PERMISSIONS" => '',
                "IBLOCK_ID" => "19",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_URL" => "",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "MESSAGE_404" => "",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "PAGER_TITLE" => "",
                "PROPERTY_CODE" => array("TEXT_1","SPISOK_1","TEXT_2","TEXT_3","TEXT_4","TEXT_5","TEXT_6","SPISOK_2","TEXT_7","TEXT_8","TEXT_9","SPISOK_3","TEXT_10","SPISOK_4",'TEXT_11','TEXT_12'),
                "SET_BROWSER_TITLE" => "N",
                "SET_CANONICAL_URL" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "STRICT_SECTION_CHECK" => "N",
                "USE_PERMISSIONS" => "N",
                "USE_SHARE" => "N"
        )
);?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

