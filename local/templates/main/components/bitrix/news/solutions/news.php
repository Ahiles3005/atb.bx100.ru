<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<?php
$APPLICATION->SetPageProperty('mainid', 'dih');
?>

    <section class="dh-hero">
        <div class="dh-hero--div__CONT C-CONTAINER">
            <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                ".default",
                [
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "START_FROM" => "0"
                ]
            ); ?>
        </div>
    </section>
    <!-- ---------- ********** СЕКЦИЯ IND ********** ---------- -->



<?php
$APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "page_solutions_list",
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
        $component
);

?>







