<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>

<!-- ---------- ********** СЕКЦИЯ REC ********** ---------- -->


<section class="cd-rec" id="cd-rec">
    <div class="cd-rec--div__CONT">
        <div class="cd-rec--div__CONT2">
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                Рекомендуем
            </h2>


            <p class="cd-rec--p__TOP __C-SCRL DOWN">
                Вас могут заинтересовать следующие товары
            </p>


            <div class="cd-rec--div__SWIPER swiper __C-SCRL DOWN">
                <div class="cd-rec--div__SWIPER_WRAPPER swiper-wrapper">
                    <?
                    $GLOBALS['arrFilterRecommend'] = [
                            'ID' => $arResult['UF']['UF_RECOMMEND']
                    ];
                    ?>
                    <? $APPLICATION->IncludeComponent(
                            "bitrix:catalog.section",
                            "products_recommend", [
                            "ACTION_VARIABLE" => "action",
                            "ADD_PICT_PROP" => "-",
                            "ADD_PROPERTIES_TO_BASKET" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "BACKGROUND_IMAGE" => "-",
                            "BASKET_URL" => "/personal/basket.php",
                            "BROWSER_TITLE" => "-",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "COMPATIBLE_MODE" => "N",
                            "DETAIL_URL" => "",
                            "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_COMPARE" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "ELEMENT_SORT_FIELD" => "sort",
                            "ELEMENT_SORT_FIELD2" => "id",
                            "ELEMENT_SORT_ORDER" => "asc",
                            "ELEMENT_SORT_ORDER2" => "desc",
                            "ENLARGE_PRODUCT" => "STRICT",
                            "FILTER_NAME" => "arrFilterRecommend",
                            "IBLOCK_ID" => "1",
                            "IBLOCK_TYPE" => "catalog",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "LABEL_PROP" => "",
                            "LAZY_LOAD" => "N",
                            "LINE_ELEMENT_COUNT" => "99",
                            "LOAD_ON_SCROLL" => "N",
                            "MESSAGE_404" => "",
                            "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                            "MESS_BTN_BUY" => "Купить",
                            "MESS_BTN_DETAIL" => "Подробнее",
                            "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                            "MESS_BTN_SUBSCRIBE" => "Подписаться",
                            "MESS_NOT_AVAILABLE" => "Нет в наличии",
                            "MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
                            "META_DESCRIPTION" => "-",
                            "META_KEYWORDS" => "-",
                            "OFFERS_LIMIT" => "99",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Товары",
                            "PAGE_ELEMENT_COUNT" => "99",
                            "PARTIAL_PRODUCT_PROPERTIES" => "N",
                            "PRICE_CODE" => [    // Тип цены
                                    0 => "PRICE_NEW",
                                    1 => "PRICE_OLD",
                            ],
                            "PRICE_VAT_INCLUDE" => "Y",
                            "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                            "PRODUCT_ID_VARIABLE" => "id",
                            "PRODUCT_PROPS_VARIABLE" => "prop",
                            "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                            "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                            "SECTION_CODE" => "",
                            "SECTION_ID" => '0',
                            "SECTION_ID_VARIABLE" => "SECTION_ID",
                            "SECTION_URL" => "",
                            "SECTION_USER_FIELDS" => [    // Свойства раздела
                                    0 => "",
                                    1 => "",
                            ],
                            "SEF_MODE" => "N",
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SHOW_ALL_WO_SECTION" => "N",
                            "SHOW_PRICE_COUNT" => "1",
                            "SHOW_SLIDER" => "Y",
                            "SLIDER_INTERVAL" => "3000",
                            "SLIDER_PROGRESS" => "N",
                            "TEMPLATE_THEME" => "blue",
                            "USE_ENHANCED_ECOMMERCE" => "N",
                            "USE_MAIN_ELEMENT_SECTION" => "Y",
                            "USE_PRICE_COUNT" => "N",
                            "USE_PRODUCT_QUANTITY" => "N",
                            "PROPERTY_CODE" => [
                                    'CPU',
                                    'RAM',
                                    'BUILT_IN_HARD_DRIVE',
                            ]

                    ],
                            false
                    ); ?>
                </div>


                <div class="cd-rec--div__SWIPER_NAV">
                    <button class="cd-rec--button__SWIPER_PREV swiper-button-disabled" disabled="" tabindex="-1"
                            aria-label="Previous slide" aria-controls="swiper-wrapper-30d27127650a4060"
                            aria-disabled="true">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121"
                                  stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                    </button>
                    <div class="cd-rec--div__SWIPER_NAV_LINE"></div>
                    <button class="cd-rec--button__SWIPER_NEXT" tabindex="0" aria-label="Next slide"
                            aria-controls="swiper-wrapper-30d27127650a4060" aria-disabled="false">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121"
                                  stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ USE ********** ---------- -->


<section class="cd-use" id="cd-use">
    <div class="cd-use--div__CONT">
        <div class="cd-use--div__CONT2">
            <div class="c-common--div__HEAD">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Применение
                </h2>

                <a class="c-common--a__ALL __C-SCRL DOWN" href="#">
                    СМОТРЕТЬ ВСЕ
                </a>
            </div>


            <div class="c-common--div__TABS __C-SCRL DOWN">
                <div class="c-common--div__TABS_TOP">
                    <? if (!empty($arResult['UF']['UF_OTRASLI'])): ?>
                        <button class="c-common--button__TABS _ACT">
                            Отрасли
                        </button>
                    <? endif; ?>
                    <? if (!empty($arResult['UF']['UF_RESHENIA'])): ?>
                        <button class="c-common--button__TABS ">
                            Решения
                        </button>
                    <? endif; ?>
                    <? if (!empty($arResult['UF']['UF_ESPEHI'])): ?>
                        <button class="c-common--button__TABS ">
                            Истории успеха
                        </button>
                    <? endif; ?>

                    <div class="c-common--div__TABS_FRAME"></div>
                </div>
                <button class="c-common--button__TABS_LEFT">
                    <svg width="54" height="20" viewBox="0 0 54 20" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M36 4.5L41 10L36 15.5" stroke="#005792" stroke-width="1.5"
                              stroke-linecap="round"></path>
                    </svg>
                </button>
                <button class="c-common--button__TABS_RIGHT">
                    <svg width="54" height="20" viewBox="0 0 54 20" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M36 4.5L41 10L36 15.5" stroke="#005792" stroke-width="1.5"
                              stroke-linecap="round"></path>
                    </svg>
                </button>
            </div>


            <div class="cd-use--div__SWIPER2 swiper __C-SCRL DOWN">
                <div class="cd-use--div__SWIPER2_WRAPPER swiper-wrapper">

                    <? if (!empty($arResult['UF']['UF_OTRASLI'])): ?>
                        <div class="cd-use--div__SWIPER2_SLIDE swiper-slide">
                            <div class="cd-use--div__IND">
                                <div class="cd-use--div__SWIPER21 swiper">
                                    <div class="cd-use--div__SWIPER21_WRAPPER swiper-wrapper">
                                        <?
                                        $GLOBALS['arrFilterOtrasli'] = [
                                                'ID' => $arResult['UF']['UF_OTRASLI']
                                        ];
                                        ?>
                                        <? $APPLICATION->IncludeComponent(
                                                "bitrix:catalog.section",
                                                "industries_series", [
                                                "ACTION_VARIABLE" => "action",
                                                "ADD_PICT_PROP" => "-",
                                                "ADD_PROPERTIES_TO_BASKET" => "N",
                                                "ADD_SECTIONS_CHAIN" => "N",
                                                "AJAX_MODE" => "N",
                                                "AJAX_OPTION_ADDITIONAL" => "",
                                                "AJAX_OPTION_HISTORY" => "N",
                                                "AJAX_OPTION_JUMP" => "N",
                                                "AJAX_OPTION_STYLE" => "Y",
                                                "BACKGROUND_IMAGE" => "-",
                                                "BASKET_URL" => "/personal/basket.php",
                                                "BROWSER_TITLE" => "-",
                                                "CACHE_FILTER" => "N",
                                                "CACHE_GROUPS" => "Y",
                                                "CACHE_TIME" => "36000000",
                                                "CACHE_TYPE" => "A",
                                                "COMPATIBLE_MODE" => "N",
                                                "DETAIL_URL" => "",
                                                "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                                "DISPLAY_COMPARE" => "N",
                                                "DISPLAY_TOP_PAGER" => "N",
                                                "ELEMENT_SORT_FIELD" => "sort",
                                                "ELEMENT_SORT_FIELD2" => "id",
                                                "ELEMENT_SORT_ORDER" => "asc",
                                                "ELEMENT_SORT_ORDER2" => "desc",
                                                "ENLARGE_PRODUCT" => "STRICT",
                                                "FILTER_NAME" => "arrFilterOtrasli",
                                                "IBLOCK_ID" => "2",
                                                "IBLOCK_TYPE" => "content",
                                                "INCLUDE_SUBSECTIONS" => "Y",
                                                "LABEL_PROP" => "",
                                                "LAZY_LOAD" => "N",
                                                "LINE_ELEMENT_COUNT" => "99",
                                                "LOAD_ON_SCROLL" => "N",
                                                "MESSAGE_404" => "",
                                                "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                                                "MESS_BTN_BUY" => "Купить",
                                                "MESS_BTN_DETAIL" => "Подробнее",
                                                "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                                                "MESS_BTN_SUBSCRIBE" => "Подписаться",
                                                "MESS_NOT_AVAILABLE" => "Нет в наличии",
                                                "MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
                                                "META_DESCRIPTION" => "-",
                                                "META_KEYWORDS" => "-",
                                                "OFFERS_LIMIT" => "99",
                                                "PAGER_BASE_LINK_ENABLE" => "N",
                                                "PAGER_DESC_NUMBERING" => "N",
                                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                                "PAGER_SHOW_ALL" => "N",
                                                "PAGER_SHOW_ALWAYS" => "N",
                                                "PAGER_TEMPLATE" => ".default",
                                                "PAGER_TITLE" => "Товары",
                                                "PAGE_ELEMENT_COUNT" => "99",
                                                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                                                "PRICE_CODE" => [    // Тип цены
                                                        0 => "PRICE_NEW",
                                                        1 => "PRICE_OLD",
                                                ],
                                                "PRICE_VAT_INCLUDE" => "Y",
                                                "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                                                "PRODUCT_ID_VARIABLE" => "id",
                                                "PRODUCT_PROPS_VARIABLE" => "prop",
                                                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                                                "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                                                "SECTION_CODE" => "",
                                                "SECTION_ID" => '0',
                                                "SECTION_ID_VARIABLE" => "SECTION_ID",
                                                "SECTION_URL" => "",
                                                "SECTION_USER_FIELDS" => [    // Свойства раздела
                                                        0 => "",
                                                        1 => "",
                                                ],
                                                "SEF_MODE" => "N",
                                                "SET_BROWSER_TITLE" => "N",
                                                "SET_LAST_MODIFIED" => "N",
                                                "SET_META_DESCRIPTION" => "N",
                                                "SET_META_KEYWORDS" => "N",
                                                "SET_STATUS_404" => "N",
                                                "SET_TITLE" => "N",
                                                "SHOW_404" => "N",
                                                "SHOW_ALL_WO_SECTION" => "N",
                                                "SHOW_PRICE_COUNT" => "1",
                                                "SHOW_SLIDER" => "Y",
                                                "SLIDER_INTERVAL" => "3000",
                                                "SLIDER_PROGRESS" => "N",
                                                "TEMPLATE_THEME" => "blue",
                                                "USE_ENHANCED_ECOMMERCE" => "N",
                                                "USE_MAIN_ELEMENT_SECTION" => "Y",
                                                "USE_PRICE_COUNT" => "N",
                                                "USE_PRODUCT_QUANTITY" => "N",
                                                "PROPERTY_CODE" => [
                                                        'CPU',
                                                        'RAM',
                                                        'BUILT_IN_HARD_DRIVE',
                                                ]

                                        ],
                                                false
                                        ); ?>


                                    </div>
                                    <div class="cd-use--div__SWIPER21_NAV">
                                        <button class="cd-use--button__SWIPER21_PREV swiper-button-disabled"
                                                disabled="" tabindex="-1" aria-label="Previous slide"
                                                aria-controls="swiper-wrapper-2e397d8c62b40696"
                                                aria-disabled="true">
                                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121"
                                                      stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                        </button>
                                        <div class="cd-use--div__SWIPER21_NAV_LINE"></div>
                                        <button class="cd-use--button__SWIPER21_NEXT" tabindex="0"
                                                aria-label="Next slide"
                                                aria-controls="swiper-wrapper-2e397d8c62b40696"
                                                aria-disabled="false">
                                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121"
                                                      stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endif; ?>

                    <? if (!empty($arResult['UF']['UF_RESHENIA'])): ?>
                        <div class="cd-use--div__SWIPER2_SLIDE swiper-slide">
                            <div class="cd-use--div__DES">
                                <div class="cd-use--div__SWIPER22 swiper">
                                    <div class="cd-use--div__SWIPER22_WRAPPER swiper-wrapper">


                                        <?
                                        $GLOBALS['arrFilterReshenia'] = [
                                                'ID' => $arResult['UF']['UF_RESHENIA']
                                        ];
                                        ?>
                                        <? $APPLICATION->IncludeComponent(
                                                "bitrix:catalog.section",
                                                "solutions_series", [
                                                "ACTION_VARIABLE" => "action",
                                                "ADD_PICT_PROP" => "-",
                                                "ADD_PROPERTIES_TO_BASKET" => "N",
                                                "ADD_SECTIONS_CHAIN" => "N",
                                                "AJAX_MODE" => "N",
                                                "AJAX_OPTION_ADDITIONAL" => "",
                                                "AJAX_OPTION_HISTORY" => "N",
                                                "AJAX_OPTION_JUMP" => "N",
                                                "AJAX_OPTION_STYLE" => "Y",
                                                "BACKGROUND_IMAGE" => "-",
                                                "BASKET_URL" => "/personal/basket.php",
                                                "BROWSER_TITLE" => "-",
                                                "CACHE_FILTER" => "N",
                                                "CACHE_GROUPS" => "Y",
                                                "CACHE_TIME" => "36000000",
                                                "CACHE_TYPE" => "A",
                                                "COMPATIBLE_MODE" => "N",
                                                "DETAIL_URL" => "",
                                                "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                                "DISPLAY_COMPARE" => "N",
                                                "DISPLAY_TOP_PAGER" => "N",
                                                "ELEMENT_SORT_FIELD" => "sort",
                                                "ELEMENT_SORT_FIELD2" => "id",
                                                "ELEMENT_SORT_ORDER" => "asc",
                                                "ELEMENT_SORT_ORDER2" => "desc",
                                                "ENLARGE_PRODUCT" => "STRICT",
                                                "FILTER_NAME" => "arrFilterReshenia",
                                                "IBLOCK_ID" => "3",
                                                "IBLOCK_TYPE" => "content",
                                                "INCLUDE_SUBSECTIONS" => "Y",
                                                "LABEL_PROP" => "",
                                                "LAZY_LOAD" => "N",
                                                "LINE_ELEMENT_COUNT" => "99",
                                                "LOAD_ON_SCROLL" => "N",
                                                "MESSAGE_404" => "",
                                                "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                                                "MESS_BTN_BUY" => "Купить",
                                                "MESS_BTN_DETAIL" => "Подробнее",
                                                "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                                                "MESS_BTN_SUBSCRIBE" => "Подписаться",
                                                "MESS_NOT_AVAILABLE" => "Нет в наличии",
                                                "MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
                                                "META_DESCRIPTION" => "-",
                                                "META_KEYWORDS" => "-",
                                                "OFFERS_LIMIT" => "99",
                                                "PAGER_BASE_LINK_ENABLE" => "N",
                                                "PAGER_DESC_NUMBERING" => "N",
                                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                                "PAGER_SHOW_ALL" => "N",
                                                "PAGER_SHOW_ALWAYS" => "N",
                                                "PAGER_TEMPLATE" => ".default",
                                                "PAGER_TITLE" => "Товары",
                                                "PAGE_ELEMENT_COUNT" => "99",
                                                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                                                "PRICE_CODE" => [    // Тип цены
                                                        0 => "PRICE_NEW",
                                                        1 => "PRICE_OLD",
                                                ],
                                                "PRICE_VAT_INCLUDE" => "Y",
                                                "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                                                "PRODUCT_ID_VARIABLE" => "id",
                                                "PRODUCT_PROPS_VARIABLE" => "prop",
                                                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                                                "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                                                "SECTION_CODE" => "",
                                                "SECTION_ID" => '0',
                                                "SECTION_ID_VARIABLE" => "SECTION_ID",
                                                "SECTION_URL" => "",
                                                "SECTION_USER_FIELDS" => [    // Свойства раздела
                                                        0 => "",
                                                        1 => "",
                                                ],
                                                "SEF_MODE" => "N",
                                                "SET_BROWSER_TITLE" => "N",
                                                "SET_LAST_MODIFIED" => "N",
                                                "SET_META_DESCRIPTION" => "N",
                                                "SET_META_KEYWORDS" => "N",
                                                "SET_STATUS_404" => "N",
                                                "SET_TITLE" => "N",
                                                "SHOW_404" => "N",
                                                "SHOW_ALL_WO_SECTION" => "N",
                                                "SHOW_PRICE_COUNT" => "1",
                                                "SHOW_SLIDER" => "Y",
                                                "SLIDER_INTERVAL" => "3000",
                                                "SLIDER_PROGRESS" => "N",
                                                "TEMPLATE_THEME" => "blue",
                                                "USE_ENHANCED_ECOMMERCE" => "N",
                                                "USE_MAIN_ELEMENT_SECTION" => "Y",
                                                "USE_PRICE_COUNT" => "N",
                                                "USE_PRODUCT_QUANTITY" => "N",
                                                "PROPERTY_CODE" => [
                                                        'CPU',
                                                        'RAM',
                                                        'BUILT_IN_HARD_DRIVE',
                                                ]

                                        ],
                                                false
                                        ); ?>
                                    </div>
                                    <div class="cd-use--div__SWIPER22_NAV">
                                        <button class="cd-use--button__SWIPER22_PREV swiper-button-disabled"
                                                disabled="" tabindex="-1" aria-label="Previous slide"
                                                aria-controls="swiper-wrapper-2e397d8c62b40696"
                                                aria-disabled="true">
                                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121"
                                                      stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                        </button>
                                        <div class="cd-use--div__SWIPER22_NAV_LINE"></div>
                                        <button class="cd-use--button__SWIPER22_NEXT" tabindex="0"
                                                aria-label="Next slide"
                                                aria-controls="swiper-wrapper-2e397d8c62b40696"
                                                aria-disabled="false">
                                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121"
                                                      stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endif; ?>

                    <? if (!empty($arResult['UF']['UF_ESPEHI'])): ?>
                        <div class="cd-use--div__SWIPER2_SLIDE swiper-slide">
                            <div class="cd-use--div__HST">
                                <div class="cd-use--div__SWIPER23 swiper">
                                    <div class="cd-use--div__SWIPER23_WRAPPER swiper-wrapper">
                                        <?
                                        $GLOBALS['arrFilterEspehi'] = [
                                                'ID' => $arResult['UF']['UF_ESPEHI']
                                        ];
                                        ?>
                                        <? $APPLICATION->IncludeComponent(
                                                "bitrix:catalog.section",
                                                "history_series", [
                                                "ACTION_VARIABLE" => "action",
                                                "ADD_PICT_PROP" => "-",
                                                "ADD_PROPERTIES_TO_BASKET" => "N",
                                                "ADD_SECTIONS_CHAIN" => "N",
                                                "AJAX_MODE" => "N",
                                                "AJAX_OPTION_ADDITIONAL" => "",
                                                "AJAX_OPTION_HISTORY" => "N",
                                                "AJAX_OPTION_JUMP" => "N",
                                                "AJAX_OPTION_STYLE" => "Y",
                                                "BACKGROUND_IMAGE" => "-",
                                                "BASKET_URL" => "/personal/basket.php",
                                                "BROWSER_TITLE" => "-",
                                                "CACHE_FILTER" => "N",
                                                "CACHE_GROUPS" => "Y",
                                                "CACHE_TIME" => "36000000",
                                                "CACHE_TYPE" => "A",
                                                "COMPATIBLE_MODE" => "N",
                                                "DETAIL_URL" => "",
                                                "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                                "DISPLAY_COMPARE" => "N",
                                                "DISPLAY_TOP_PAGER" => "N",
                                                "ELEMENT_SORT_FIELD" => "sort",
                                                "ELEMENT_SORT_FIELD2" => "id",
                                                "ELEMENT_SORT_ORDER" => "asc",
                                                "ELEMENT_SORT_ORDER2" => "desc",
                                                "ENLARGE_PRODUCT" => "STRICT",
                                                "FILTER_NAME" => "arrFilterEspehi",
                                                "IBLOCK_ID" => "4",
                                                "IBLOCK_TYPE" => "content",
                                                "INCLUDE_SUBSECTIONS" => "Y",
                                                "LABEL_PROP" => "",
                                                "LAZY_LOAD" => "N",
                                                "LINE_ELEMENT_COUNT" => "99",
                                                "LOAD_ON_SCROLL" => "N",
                                                "MESSAGE_404" => "",
                                                "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                                                "MESS_BTN_BUY" => "Купить",
                                                "MESS_BTN_DETAIL" => "Подробнее",
                                                "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                                                "MESS_BTN_SUBSCRIBE" => "Подписаться",
                                                "MESS_NOT_AVAILABLE" => "Нет в наличии",
                                                "MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
                                                "META_DESCRIPTION" => "-",
                                                "META_KEYWORDS" => "-",
                                                "OFFERS_LIMIT" => "99",
                                                "PAGER_BASE_LINK_ENABLE" => "N",
                                                "PAGER_DESC_NUMBERING" => "N",
                                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                                "PAGER_SHOW_ALL" => "N",
                                                "PAGER_SHOW_ALWAYS" => "N",
                                                "PAGER_TEMPLATE" => ".default",
                                                "PAGER_TITLE" => "Товары",
                                                "PAGE_ELEMENT_COUNT" => "99",
                                                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                                                "PRICE_CODE" => [    // Тип цены
                                                        0 => "PRICE_NEW",
                                                        1 => "PRICE_OLD",
                                                ],
                                                "PRICE_VAT_INCLUDE" => "Y",
                                                "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                                                "PRODUCT_ID_VARIABLE" => "id",
                                                "PRODUCT_PROPS_VARIABLE" => "prop",
                                                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                                                "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                                                "SECTION_CODE" => "",
                                                "SECTION_ID" => '0',
                                                "SECTION_ID_VARIABLE" => "SECTION_ID",
                                                "SECTION_URL" => "",
                                                "SECTION_USER_FIELDS" => [    // Свойства раздела
                                                        0 => "",
                                                        1 => "",
                                                ],
                                                "SEF_MODE" => "N",
                                                "SET_BROWSER_TITLE" => "N",
                                                "SET_LAST_MODIFIED" => "N",
                                                "SET_META_DESCRIPTION" => "N",
                                                "SET_META_KEYWORDS" => "N",
                                                "SET_STATUS_404" => "N",
                                                "SET_TITLE" => "N",
                                                "SHOW_404" => "N",
                                                "SHOW_ALL_WO_SECTION" => "N",
                                                "SHOW_PRICE_COUNT" => "1",
                                                "SHOW_SLIDER" => "Y",
                                                "SLIDER_INTERVAL" => "3000",
                                                "SLIDER_PROGRESS" => "N",
                                                "TEMPLATE_THEME" => "blue",
                                                "USE_ENHANCED_ECOMMERCE" => "N",
                                                "USE_MAIN_ELEMENT_SECTION" => "Y",
                                                "USE_PRICE_COUNT" => "N",
                                                "USE_PRODUCT_QUANTITY" => "N",
                                                "PROPERTY_CODE" => [
                                                        'CPU',
                                                        'RAM',
                                                        'BUILT_IN_HARD_DRIVE',
                                                ]

                                        ],
                                                false
                                        ); ?>
                                    </div>
                                    <div class="cd-use--div__SWIPER23_NAV">
                                        <button class="cd-use--button__SWIPER23_PREV swiper-button-disabled"
                                                disabled="" tabindex="-1" aria-label="Previous slide"
                                                aria-controls="swiper-wrapper-2e397d8c62b40696"
                                                aria-disabled="true">
                                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121"
                                                      stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                        </button>
                                        <div class="cd-use--div__SWIPER23_NAV_LINE"></div>
                                        <button class="cd-use--button__SWIPER23_NEXT" tabindex="0"
                                                aria-label="Next slide"
                                                aria-controls="swiper-wrapper-2e397d8c62b40696"
                                                aria-disabled="false">
                                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121"
                                                      stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ MAT ********** ---------- -->


<section class="cd-mat" id="cd-mat">
    <div class="cd-mat--div__CONT">
        <div class="cd-mat--div__CONT2">
            <div class="c-common--div__HEAD cd-mat--div__HEAD" role="button">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Материалы
                </h2>

                <a class="c-common--a__ALL cd-mat--a__ALL __C-SCRL DOWN" href="#">
                    ПОКАЗАТЬ ВСЕ
                </a>

                <svg class="cd-mat--svg__SUBMENU" width="28" height="14" viewBox="0 0 28 14" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"></path>
                </svg>
            </div>


            <form class="c-common--form__SUBMENU cd-mat--form__SUBMENU __C-SCRL DOWN" action="#" method=""
                  name="">
                <label class="cd-mat--label__SUBMENU">
                    <input class="cd-mat--input__SUBMENU" type="radio" name="1" value="">
                    <span class="cd-mat--span__SUBMENU">
                                        Все
                                    </span>
                </label>
                <? foreach ($arResult['UF']['UF_MATERIALS'] as $key => $materials): ?>
                    <label class="cd-mat--label__SUBMENU">
                        <input class="cd-mat--input__SUBMENU" type="radio" name="1" value="<?= $key ?>">
                        <span class="cd-mat--span__SUBMENU">
                            <?= $materials['name'] ?>
                        </span>
                    </label>
                <? endforeach; ?>
            </form>
            <div class="cd-mat--div__LINE1 __C-SCRL DOWN">
                <div class="cd-mat--div__LINE2"></div>
            </div>


            <div class="cd-mat--div__CARDS __C-SCRL DOWN">
                <? foreach ($arResult['UF']['UF_MATERIALS'] as $key => $materials): ?>
                    <? foreach ($materials['elements'] as $material): ?>
                        <a class="cd-mat--a__CARD" href="<?= $material['src'] ?>" target="_blank">
                            <div class="cd-mat--div__CARD_IMAGES">
                                <svg class="cd-mat--svg__CARD_IMAGE_1" width="34" height="41"
                                     viewBox="0 0 34 41"
                                     fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                                            fill="#0C0C0C"/>
                                    <path
                                            d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.9097 29.3302 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                                            fill="#0C0C0C"/>
                                    <path
                                            d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                                            fill="#0C0C0C"/>
                                    <path
                                            d="M28.76 13.31C28.9 13.31 29.01 13.2 29.01 13.06V9.16001C29.01 8.90001 28.95 8.63001 28.84 8.36001C28.84 8.36001 28.83 8.35001 28.82 8.34001C28.72 8.13001 28.6 7.94001 28.46 7.79001L22.48 1.48001C22.36 1.36001 22.21 1.26001 22.05 1.17001C22.03 1.16001 22.02 1.14001 22.01 1.13001C21.74 0.990007 21.46 0.920007 21.17 0.920007H1.87C0.84 0.910007 0 1.78001 0 2.85001V38.98C0 40.05 0.84 40.92 1.87 40.92H27.15C28.18 40.92 29.02 40.05 29.02 38.98V37.06C29.02 36.92 28.91 36.81 28.77 36.81C28.63 36.81 28.52 36.92 28.52 37.06V38.98C28.52 39.77 27.91 40.42 27.15 40.42H1.87C1.12 40.42 0.5 39.78 0.5 38.98V2.85001C0.5 2.06001 1.11 1.41001 1.87 1.41001H21.17C21.33 1.41001 21.49 1.45001 21.64 1.51001V7.79001C21.64 8.30001 22.04 8.71001 22.54 8.71001H28.44C28.49 8.86001 28.51 9.02001 28.51 9.16001V13.06C28.51 13.2 28.62 13.31 28.76 13.31ZM22.53 8.21001C22.31 8.21001 22.13 8.02001 22.13 7.79001V1.84001L28.1 8.14001C28.1 8.14001 28.14 8.19001 28.16 8.21001H22.53Z"
                                            fill="#0C0C0C"/>
                                </svg>
                                <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41"
                                     viewBox="0 0 34 41"
                                     fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                                            fill="#C82121"/>
                                    <path
                                            d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.8597 29.2902 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                                            fill="#C82121"/>
                                    <path
                                            d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                                            fill="#C82121"/>
                                    <path
                                            d="M28.76 13.3099C28.9 13.3099 29.01 13.1999 29.01 13.0599V9.15992C29.01 8.89992 28.95 8.62992 28.84 8.35992C28.84 8.35992 28.83 8.34992 28.82 8.33992C28.72 8.12992 28.6 7.93992 28.46 7.78992L22.48 1.47992C22.36 1.35992 22.21 1.25992 22.05 1.16992C22.03 1.15992 22.02 1.13992 22.01 1.12992C21.74 0.989922 21.46 0.919922 21.17 0.919922H1.87C0.84 0.919922 0 1.77992 0 2.84992V38.9799C0 40.0499 0.84 40.9199 1.87 40.9199H27.15C28.18 40.9199 29.02 40.0499 29.02 38.9799V37.0599C29.02 36.9199 28.91 36.8099 28.77 36.8099C28.63 36.8099 28.52 36.9199 28.52 37.0599V38.9799C28.52 39.7699 27.91 40.4199 27.15 40.4199H1.87C1.12 40.4199 0.5 39.7799 0.5 38.9799V2.84992C0.5 2.05992 1.11 1.40992 1.87 1.40992H21.17C21.33 1.40992 21.49 1.44992 21.64 1.50992V7.78992C21.64 8.29992 22.04 8.70992 22.54 8.70992H28.44C28.49 8.85992 28.51 9.01992 28.51 9.15992V13.0599C28.51 13.1999 28.62 13.3099 28.76 13.3099Z"
                                            fill="#C82121"/>
                                </svg>
                            </div>
                            <p class="cd-mat--p__CARD_TEXT">
                                <?= $material['name'] ?>
                            </p>
                        </a>
                    <? endforeach; ?>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ REG ********** ---------- -->


<section class="cd-reg" id="cd-reg">
    <div class="cd-reg--div__CONT">
        <div class="cd-reg--div__CONT2">
            <div class="c-common--div__HEAD">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Записи в реестре
                </h2>

                <a class="c-common--a__ALL __C-SCRL DOWN" href="#">
                    СМОТРЕТЬ ВСЕ
                </a>
            </div>


            <a class="cd-reg--a__TOP __C-SCRL DOWN" href="#">
                <p class="cd-reg--p__TOP">
                    Единый реестр радиоэлектронной продукции (ПП РФ №878 от 10.07.2019)
                </p>
                <img class="cd-reg--img__TOP" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-cat_icon.svg"
                     alt="ГИСП">
            </a>


            <div class="cd-reg--div__TABLE __C-SCRL DOWN">
                <div class="cd-reg--div__TABLE_LINE _DESC"></div>
                <p class="cd-reg--p__TABLE_TOP">
                    Продукт
                </p>
                <p class="cd-reg--p__TABLE_TOP">
                    Номер в реестре
                </p>
                <p class="cd-reg--p__TABLE_TOP">
                    Выписка
                </p>
                <p class="cd-reg--p__TABLE_TOP">
                    Сайт ГИСП
                </p>
                <div class="cd-reg--div__TABLE_LINE _DESC _2"></div>


                <? foreach ($arResult['UF']['UF_REGISTRY'] as $registry): ?>
                    <div class="cd-reg--div__TABLE_NAME">
                        <svg class="cd-reg--svg__TABLE_NAME" width="35" height="41" viewBox="0 0 35 41"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M34.76 10.1842L17.58 0.454201C17.58 0.454201 17.5 0.434201 17.46 0.454201L0.06 10.2842C0.06 10.2842 0 10.3442 0 10.3942V30.3742C0 30.3742 0.02 30.4642 0.06 30.4842L17.45 40.4242C17.45 40.4242 17.49 40.4442 17.51 40.4442C17.53 40.4442 17.55 40.4442 17.57 40.4242L34.75 30.4842C34.75 30.4842 34.81 30.4242 34.81 30.3742V10.2842C34.81 10.2842 34.79 10.1942 34.75 10.1742L34.76 10.1842ZM17.52 0.704201L34.46 10.2942L29.11 13.4542L12.24 3.6842L17.52 0.704201ZM17.52 20.2942L0.37 10.3942L6.21 7.0942L23.11 16.9942L17.51 20.2942H17.52ZM23.36 16.8442L6.46 6.9542L11.99 3.8242L28.86 13.5942L23.36 16.8442ZM23.48 17.0542L28.98 13.8042V23.9942L26.14 23.2042C26.14 23.2042 26.05 23.2042 26.02 23.2342L23.48 25.9042V17.0442V17.0542ZM0.25 10.6042L17.39 20.5042V40.0942L0.25 30.3042V10.6042ZM17.64 40.0942V20.5042L23.23 17.2042V26.2342C23.23 26.2842 23.26 26.3342 23.31 26.3542C23.32 26.3542 23.34 26.3542 23.36 26.3542C23.39 26.3542 23.43 26.3442 23.45 26.3142L26.15 23.4742L29.08 24.2842C29.08 24.2842 29.16 24.2842 29.19 24.2642C29.22 24.2442 29.24 24.2042 29.24 24.1642V13.6642L34.59 10.5042V30.2942L17.65 40.0842L17.64 40.0942Z"
                                    fill="#0C0C0C"/>
                            <path d="M8.77868 30.264L8.65527 30.4814L15.0386 34.1047L15.162 33.8873L8.77868 30.264Z"
                                  fill="#0C0C0C"/>
                        </svg>
                        <p class="cd-reg--p__TABLE_NAME">
                            <?= $registry['name'] ?>
                        </p>
                    </div>

                    <p class="cd-reg--p__TABLE_NUMBER">
                        <span class="cd-reg--span__TABLE_NUMBER_TOP">Номер в реестре:</span>
                        <span class="cd-reg--span__TABLE_NUMBER1"><?= $registry['number'] ?></span>
                        <!--                    от-->
                        <!--                    <span class="cd-reg--span__TABLE_NUMBER2">29.07.2025</span>-->
                    </p>

                    <a class="cd-reg--a__TABLE_PDF" href="<?= $registry['src'] ?>" download>
                        <img class="cd-reg--img__TABLE_PDF"
                             src="<?= SITE_TEMPLATE_PATH ?>/assets/images/card/cd-cnf_pdf.svg" alt="pdf">
                        <span>Выписка</span>
                    </a>

                    <a class="cd-reg--a__TABLE_GISP" href="<?= $registry['link'] ?>" target="_blank">
                        <span>НА САЙТЕ ГИСП</span>
                        <span>ПЕРЕЙТИ</span>
                        <svg width="29" height="23" viewBox="0 0 29 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.5 11.3457H28M28 11.3457L17.5 0.845703M28 11.3457L17.5 21.8457"
                                  stroke="#005792"
                                  stroke-width="0.5"/>
                        </svg>
                    </a>

                    <div class="cd-reg--div__TABLE_LINE"></div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ MED ********** ---------- -->


<section class="cd-med" id="cd-med">
    <div class="cd-med--div__CONT">
        <div class="cd-med--div__CONT2">
            <div class="c-common--div__HEAD cd-med--div__HEAD" role="button">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Медиа
                </h2>

                <a class="c-common--a__ALL cd-med--a__ALL  __C-SCRL DOWN" href="#">
                    СМОТРЕТЬ ВСЕ
                </a>

                <svg class="cd-med--svg__SUBMENU" width="28" height="14" viewBox="0 0 28 14" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"></path>
                </svg>
            </div>

            <?
            $GLOBALS['arrFilterNews'] = [
                    'ID' => $arResult['UF']['UF_NEWS']
            ];
            ?>
            <? $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section",
                    "press_series", [
                    "ACTION_VARIABLE" => "action",
                    "ADD_PICT_PROP" => "-",
                    "ADD_PROPERTIES_TO_BASKET" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BACKGROUND_IMAGE" => "-",
                    "BASKET_URL" => "/personal/basket.php",
                    "BROWSER_TITLE" => "-",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "COMPATIBLE_MODE" => "N",
                    "DETAIL_URL" => "",
                    "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_COMPARE" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_SORT_FIELD" => "sort",
                    "ELEMENT_SORT_FIELD2" => "id",
                    "ELEMENT_SORT_ORDER" => "asc",
                    "ELEMENT_SORT_ORDER2" => "desc",
                    "ENLARGE_PRODUCT" => "STRICT",
                    "FILTER_NAME" => "arrFilterNews",
                    "IBLOCK_ID" => "5",
                    "IBLOCK_TYPE" => "content",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "LABEL_PROP" => "",
                    "LAZY_LOAD" => "N",
                    "LINE_ELEMENT_COUNT" => "99",
                    "LOAD_ON_SCROLL" => "N",
                    "MESSAGE_404" => "",
                    "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                    "MESS_BTN_BUY" => "Купить",
                    "MESS_BTN_DETAIL" => "Подробнее",
                    "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                    "MESS_BTN_SUBSCRIBE" => "Подписаться",
                    "MESS_NOT_AVAILABLE" => "Нет в наличии",
                    "MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "OFFERS_LIMIT" => "99",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Товары",
                    "PAGE_ELEMENT_COUNT" => "99",
                    "PARTIAL_PRODUCT_PROPERTIES" => "N",
                    "PRICE_CODE" => [    // Тип цены
                            0 => "PRICE_NEW",
                            1 => "PRICE_OLD",
                    ],
                    "PRICE_VAT_INCLUDE" => "Y",
                    "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                    "PRODUCT_ID_VARIABLE" => "id",
                    "PRODUCT_PROPS_VARIABLE" => "prop",
                    "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                    "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                    "SECTION_CODE" => "",
                    "SECTION_ID" => '0',
                    "SECTION_ID_VARIABLE" => "SECTION_ID",
                    "SECTION_URL" => "",
                    "SECTION_USER_FIELDS" => [    // Свойства раздела
                            0 => "",
                            1 => "",
                    ],
                    "SEF_MODE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SHOW_ALL_WO_SECTION" => "N",
                    "SHOW_PRICE_COUNT" => "1",
                    "SHOW_SLIDER" => "Y",
                    "SLIDER_INTERVAL" => "3000",
                    "SLIDER_PROGRESS" => "N",
                    "TEMPLATE_THEME" => "blue",
                    "USE_ENHANCED_ECOMMERCE" => "N",
                    "USE_MAIN_ELEMENT_SECTION" => "Y",
                    "USE_PRICE_COUNT" => "N",
                    "USE_PRODUCT_QUANTITY" => "N",
                    "PROPERTY_CODE" => [
                            'CPU',
                            'RAM',
                            'BUILT_IN_HARD_DRIVE',
                    ]

            ],
                    false
            ); ?>


        </div>
    </div>
</section>