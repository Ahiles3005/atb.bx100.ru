<?
$APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "solutions_list_home",
        array(
                "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
                "ADD_SECTIONS_CHAIN" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "Y",
                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                "FILTER_NAME" => "sectionsFilter",
                "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                "IBLOCK_ID" => "3",
                "IBLOCK_TYPE" => "content",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array(
                        0 => "",
                        1 => "",
                ),
                "SECTION_ID" => "",
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array(
                        0 => "UF_NAME_MENU_HOME",
                        1 => "",
                ),
                "SHOW_PARENT_NAME" => "Y",
                "TOP_DEPTH" => "2",
                "VIEW_MODE" => "LINE",
                "COMPONENT_TEMPLATE" => "section_list_home"
        ),
        false
);
?>