<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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
$APPLICATION->SetPageProperty('mainid', 'hst');


$ElementID = $APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "clear",
        [
                "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
                "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                "FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
                "PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
                "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
                "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                "META_KEYWORDS" => $arParams["META_KEYWORDS"],
                "META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
                "BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
                "SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
                "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                "SET_TITLE" => $arParams["SET_TITLE"],
                "MESSAGE_404" => $arParams["MESSAGE_404"],
                "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                "SHOW_404" => $arParams["SHOW_404"],
                "FILE_404" => $arParams["FILE_404"],
                "INCLUDE_IBLOCK_INTO_CHAIN" => 'N',
                "ADD_SECTIONS_CHAIN" => 'N',
                "ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
                "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                "CACHE_TIME" => $arParams["CACHE_TIME"],
                "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                "DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
                "DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
                "PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
                "PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
                "CHECK_DATES" => $arParams["CHECK_DATES"],
                "ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
                "ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
                "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
                "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
                "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
                "USE_SHARE" => $arParams["USE_SHARE"],
                "SHARE_HIDE" => $arParams["SHARE_HIDE"],
                "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
                "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
                "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                "ADD_ELEMENT_CHAIN" => 'N',
                'STRICT_SECTION_CHECK' => $arParams['STRICT_SECTION_CHECK'],
        ],
        $component

);

Bitrix\Main\Loader::includeModule('iblock');

$element = CIBlockElement::GetByID($ElementID)->GetNextElement(true, true, true);

if ($element) {
    $arFields = $element->GetFields();
    $arProps = $element->GetProperties();
}


$organizacia = $arProps['ORGANIZACIA']['VALUE'] ?? '';
$otrosl = $arProps['OTRASAL']['VALUE'] ?? '';
$reshenie = $arProps['RESHENIE']['VALUE']['TEXT'] ?? '';

$detailPicture = CFile::GetFileArray($arFields['DETAIL_PICTURE']);


?>


<!-- ---------- ********** СЕКЦИЯ HERO ********** ---------- -->


<section class="hs-hero">
    <div class="hs-hero--div__CONT C-CONTAINER">
        <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                ".default",
                [
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                ]
        ); ?>

        <div class="hs-hero--div__MAIN">
            <h1 class="hs-hero--h1 __C-SCRL LEFT">
                <? $APPLICATION->ShowTitle(false); ?>
            </h1>

            <div class="hs-hero--div__INFO __C-SCRL DOWN">
                <div class="hs-hero--div__INFO_TOP">
                    <p class="hs-hero--p__INFO_TOP">
                        Информация о проекте
                    </p>
                    <div class="hs-hero--div__LINE"></div>
                    <div class="hs-hero--div__LINE2"></div>
                </div>

                <div class="hs-hero--div__INFO_FIRST">
                    <div class="hs-hero--div__INFO_TEXT">

                        <? if (!empty($organizacia)): ?>
                            <div class="hs-hero--div__INFO_ITEM">
                                <p class="hs-hero--p__TITLE">
                                    Организация
                                </p>
                                <p class="hs-hero--p__NAME">
                                    <?= $organizacia ?>
                                </p>
                            </div>
                        <? endif ?>
                        <? if (!empty($otrosl)): ?>
                            <div class="hs-hero--div__INFO_ITEM">
                                <p class="hs-hero--p__TITLE">
                                    Отрасль
                                </p>
                                <p class="hs-hero--p__NAME">
                                    <?= $otrosl ?>
                                </p>
                            </div>
                        <? endif ?>

                    </div>
                    <div class="hs-hero--div__IMAGE">
                        <img class="hs-hero--img__IMAGE"
                             src="/images/home/menu/Аппаратные-платформы.png" alt="">
                    </div>
                </div>
                <? if (!empty($reshenie)): ?>
                    <div class="hs-hero--div__INFO_ITEM">
                        <p class="hs-hero--p__TITLE">
                            Решение
                        </p>
                        <p class="hs-hero--p__NAME">
                            <?= $reshenie ?>
                        </p>
                    </div>
                <? endif ?>

            </div>
        </div>
        <?
        $APPLICATION->ShowViewContent("success-stories-navgations"); // собственно вывод - метка для подстановки
        ?>

    </div>
</section>



<?php
$properties = [
        'ORGANIZACIA_2_1',
        'ORGANIZACIA_2_2',
        'SITTYACIA_1',
        'TASK_1',
        'RESHENIE_1',
        'PRODUCTS',
        'OTRASLI_ELEMENTS',
        'RESHENIA',
        'ELEMENTY_PREIM',
        'RESULT_1',
        'RESULT_2',

];

$arParams["DETAIL_PROPERTY_CODE"] = array_merge($arParams["DETAIL_PROPERTY_CODE"], $properties);
?>

<?php
$APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "",
        [
                "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
                "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                "FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
                "PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
                "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
                "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                "META_KEYWORDS" => $arParams["META_KEYWORDS"],
                "META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
                "BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
                "SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
                "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                "SET_TITLE" => $arParams["SET_TITLE"],
                "MESSAGE_404" => $arParams["MESSAGE_404"],
                "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                "SHOW_404" => $arParams["SHOW_404"],
                "FILE_404" => $arParams["FILE_404"],
                "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
                "ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
                "ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
                "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                "CACHE_TIME" => $arParams["CACHE_TIME"],
                "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                "DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
                "DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
                "PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
                "PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
                "CHECK_DATES" => $arParams["CHECK_DATES"],
                "ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
                "ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
                "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
                "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
                "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
                "USE_SHARE" => $arParams["USE_SHARE"],
                "SHARE_HIDE" => $arParams["SHARE_HIDE"],
                "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
                "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
                "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                "ADD_ELEMENT_CHAIN" => $arParams["ADD_ELEMENT_CHAIN"],
                'STRICT_SECTION_CHECK' => $arParams['STRICT_SECTION_CHECK'],
        ],
        $component
); ?>





