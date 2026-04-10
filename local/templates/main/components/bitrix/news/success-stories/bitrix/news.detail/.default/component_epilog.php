<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!-- ---------- ********** СЕКЦИЯ ORG ********** ---------- -->


<section class="hs-org" id="hs-org">
    <div class="hs-org--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Организация
        </h2>


        <div class="hs-org--div__MAIN">
            <div class="hs-org--div__IMAGE __C-SCRL DOWN">

                <img class="hs-org--img__IMAGE"
                     src="<?= $arResult["DISPLAY_PROPERTIES"]['ORGANIZACIA_2_1']['FILE_VALUE']['SRC'] ?? AHILES3005_NO_IMAGE ?>"
                     alt="">
            </div>
            <div class="hs-org--div__TEXT __C-SCRL RIGHT">
                <?= $arResult["DISPLAY_PROPERTIES"]['ORGANIZACIA_2_2']['~VALUE']['TEXT'] ?>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ SIT ********** ---------- -->


<section class="in-tsk" id="hs-sit">
    <div class="in-tsk--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Описание ситуации
        </h2>

        <?= $arResult["DISPLAY_PROPERTIES"]['SITTYACIA_1']['~VALUE']['TEXT'] ?>

    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ TSK ********** ---------- -->


<section class="in-des" id="hs-tsk">
    <div class="in-des--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Задача
        </h2>


        <?= $arResult["DISPLAY_PROPERTIES"]['TASK_1']['~VALUE']['TEXT'] ?>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ DES ********** ---------- -->


<section class="in-des" id="hs-des">
    <div class="in-des--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Решение
        </h2>


        <?= $arResult["DISPLAY_PROPERTIES"]['RESHENIE_1']['~VALUE']['TEXT'] ?>


        <h3 class="c-common--h3  __C-SCRL RIGHT">
            Продукты
        </h3>

        <p class="in-des--p__TOP1 __C-SCRL DOWN">
            Вас могут заинтересовать следующие товары:
        </p>


        <div class="cd-rec--div__SWIPER swiper __C-SCRL DOWN">
            <div class="cd-rec--div__SWIPER_WRAPPER swiper-wrapper">
                <?
                $GLOBALS['arrFilterRecommend'] = [
                        'ID' => $arResult["PROPERTIES"]['PRODUCTS']['VALUE'] ?? 0
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
                    <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                              stroke-linecap="round"></path>
                    </svg>
                </button>
                <div class="cd-rec--div__SWIPER_NAV_LINE"></div>
                <button class="cd-rec--button__SWIPER_NEXT" tabindex="0" aria-label="Next slide"
                        aria-controls="swiper-wrapper-30d27127650a4060" aria-disabled="false">
                    <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                              stroke-linecap="round"></path>
                    </svg>
                </button>
            </div>
        </div>


        <div class="cdn-reg--div__REQUEST  __C-SCRL DOWN">
            <div class="cdn-reg--div__TEXT RIGHT">
                <h3 class="cdn-reg--h3">
                    Напишите нам
                </h3>
                <p class="cdn-reg--p__REQUEST">
                    Свяжитесь с нами, чтобы получить персональное решение для вашей организации
                </p>
                <button class="cdn-reg--button__REQUEST">
                    Отправить запрос
                </button>
            </div>
        </div>


        <h3 class="c-common--h3 __C-SCRL RIGHT">
            Отрасли
        </h3>


        <div class="cd-use--div__SWIPER21 swiper __C-SCRL DOWN">
            <div class="cd-use--div__SWIPER21_WRAPPER swiper-wrapper">
                <?
                $GLOBALS['arrFilterOtrasli'] = [
                        'ID' => $arResult["PROPERTIES"]['OTRASLI_ELEMENTS']['VALUE'] ?? 0
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
                <button class="cd-use--button__SWIPER21_PREV swiper-button-disabled" disabled="" tabindex="-1"
                        aria-label="Previous slide" aria-controls="swiper-wrapper-2e397d8c62b40696"
                        aria-disabled="true">
                    <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                              stroke-linecap="round"></path>
                    </svg>
                </button>
                <div class="cd-use--div__SWIPER21_NAV_LINE"></div>
                <button class="cd-use--button__SWIPER21_NEXT" tabindex="0" aria-label="Next slide"
                        aria-controls="swiper-wrapper-2e397d8c62b40696" aria-disabled="false">
                    <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                              stroke-linecap="round"></path>
                    </svg>
                </button>
            </div>
        </div>


        <h3 class="c-common--h3 __C-SCRL RIGHT">
            Эффективные решения
        </h3>


        <div class="cd-use--div__SWIPER22 swiper __C-SCRL DOWN">
            <div class="cd-use--div__SWIPER22_WRAPPER swiper-wrapper">
                <?
                $GLOBALS['arrFilterReshenia'] = [
                        'ID' => $arResult["PROPERTIES"]['RESHENIA']['VALUE'] ?? 0
                ];
                ?>
                <? $APPLICATION->IncludeComponent(
                        "bitrix:catalog.section",
                        "history_solutions", [
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
                <button class="cd-use--button__SWIPER22_PREV swiper-button-disabled" disabled="" tabindex="-1"
                        aria-label="Previous slide" aria-controls="swiper-wrapper-2e397d8c62b40696"
                        aria-disabled="true">
                    <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                              stroke-linecap="round"></path>
                    </svg>
                </button>
                <div class="cd-use--div__SWIPER22_NAV_LINE"></div>
                <button class="cd-use--button__SWIPER22_NEXT" tabindex="0" aria-label="Next slide"
                        aria-controls="swiper-wrapper-2e397d8c62b40696" aria-disabled="false">
                    <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                              stroke-linecap="round"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ RES ********** ---------- -->


<section class="hs-res" id="hs-res">
    <div class="hs-res--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Результат
        </h2>


        <div class="st-main--div__GRID2_CONT">
            <div class="st-main--div__GRID2">
                <? foreach ($arResult["PROPERTIES"]['ELEMENTY_PREIM']['DATA'] as $data): ?>
                    <div class="st-main--div__GRID2_ITEM __C-SCRL DOWN">
                        <button class="st-main--button__GRID2_ITEM_TOP">
                            <div class="st-main--div__GRID2_ITEM_IMAGE">
                                <img class="st-main--img__GRID2_ITEM_IMAGE"
                                     src="<?= $data['UF_ICON'] ?>" alt="" loading="lazy">

                            </div>
                            <p class="st-main--p__GRID2_ITEM_TOP">
                                <?= $data['UF_DESCRIPTION'] ?>
                            </p>
                            <svg class="st-main--svg__GRID2_ITEM_TOP" width="27" height="13" viewBox="0 0 27 13"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.0859375 0.0910645L13.0859 12.3264L26.0859 0.0910645" stroke="#0C0C0C"
                                      stroke-width="0.25"/>
                            </svg>
                        </button>
                        <p class="st-main--p__GRID2_ITEM_BODY">
                            <?= $data['UF_FULL_DESCRIPTION'] ?>
                        </p>
                    </div>
                <? endforeach; ?>
            </div>
        </div>

        <?= $arResult["DISPLAY_PROPERTIES"]['RESULT_2']['~VALUE']['TEXT'] ?>

    </div>
</section>