<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("КОНТАКТЫ");
$APPLICATION->SetPageProperty('mainid', 'conts');
?>


<section class="conts-main">
    <div class="conts-main--div__CONT C-CONTAINER">
        <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                ".default",
                [
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                ]
        ); ?>



        <div class="conts-main--div__TOP">
            <h1 class="conts-main--h1 __C-SCRL RIGHT">
                Контакты
            </h1>
        </div>


        <?$APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "contacts",
                Array(
                        "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "N",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COUNT_ELEMENTS" => "N",
                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                        "FILTER_NAME" => "",
                        "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                        "IBLOCK_ID" => "13",
                        "IBLOCK_TYPE" => "content",
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array("",""),
                        "SECTION_ID" => "",
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array("UF_CONTACTS",""),
                        "TOP_DEPTH" => "2"
                )
        );?>




        <div class="conts-main--div__FORM">

        </div>
    </div>
</section>



<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

