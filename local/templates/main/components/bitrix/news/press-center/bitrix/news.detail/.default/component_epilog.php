<?php

$isEmptyBLOCK_1 = empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_1']['~VALUE']['TEXT']);
$isEmptyBLOCK_2 = empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_2']['~VALUE']['TEXT']);
$isEmptyBLOCK_3 = empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_3']['~VALUE']['TEXT']);
$isEmptyBLOCK_4 = empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_4']['~VALUE']['TEXT']);
$isEmptyBLOCK_5 = empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_5']['~VALUE']['TEXT']);
$isEmptyBLOCK_6 = empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_6']['~VALUE']['TEXT']);
$isEmptyBLOCK_7 = empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_7']['~VALUE']['TEXT']);
$isEmptyBLOCK_8 = empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_8']['~VALUE']['TEXT']);
$isEmptyBLOCK_9 = empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_9']['~VALUE']['TEXT']);
$isEmptyBLOCK_10 = empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_10']['~VALUE']['TEXT']);
$isEmptyBLOCK_11 = empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_11']['~VALUE']['TEXT']);
$isEmptyBLOCK_12 = empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_12']['~VALUE']['TEXT']);
$isEmptyBLOCK_13 = empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_13']['~VALUE']['TEXT']);

$isNotEmptyPRODUCTS = is_array($arResult["PROPERTIES"]['PRODUCTS']['VALUE']) && !empty($arResult["PROPERTIES"]['PRODUCTS']['VALUE']);
$isNotEmptyOTRASLI_ELEMENTS = is_array($arResult["PROPERTIES"]['OTRASLI_ELEMENTS']['VALUE']) && !empty($arResult["PROPERTIES"]['OTRASLI_ELEMENTS']['VALUE']);
$isNotEmptyRESHENIA = is_array($arResult["PROPERTIES"]['RESHENIA']['VALUE']) && !empty($arResult["PROPERTIES"]['RESHENIA']['VALUE']);


$isNotEmptyGALLARY_FOTO = is_array($arResult["PROPERTIES"]['GALLARY_FOTO']['VALUE']) && !empty($arResult["PROPERTIES"]['GALLARY_FOTO']['VALUE']);
$isNotEmptyGALLARY_VIDEO = is_array($arResult["PROPERTIES"]['GALLARY_VIDEO']['VALUE']) && !empty($arResult["PROPERTIES"]['GALLARY_VIDEO']['VALUE']);


if ($isNotEmptyGALLARY_FOTO && count($arResult["PROPERTIES"]['GALLARY_FOTO']['VALUE']) == 1) {
    $_array = $arResult["DISPLAY_PROPERTIES"]['GALLARY_FOTO']['FILE_VALUE'];
    $arResult["DISPLAY_PROPERTIES"]['GALLARY_FOTO']['FILE_VALUE'] = [$_array];
}


if ($isNotEmptyGALLARY_FOTO && count($arResult["PROPERTIES"]['GALLARY_VIDEO']['VALUE']) == 1) {
    $_array = $arResult["DISPLAY_PROPERTIES"]['GALLARY_VIDEO']['FILE_VALUE'];
    $arResult["DISPLAY_PROPERTIES"]['GALLARY_VIDEO']['FILE_VALUE'] = [$_array];
}

?>

<section class="ane-main">
    <div class="ane-main--div__CONT C-CONTAINER">

        <!--        блок 1-->
        <? if (!$isEmptyBLOCK_1): ?>
            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_1']['~VALUE']['TEXT'] ?>
        <? endif ?>

        <!--        блок 1-->

        <!--        блок 2-->
        <? if (!$isEmptyBLOCK_2): ?>
            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_2']['~VALUE']['TEXT'] ?>
        <? endif ?>
        <!--        блок 2-->

        <!--        блок 3-->
        <? if (!$isEmptyBLOCK_3): ?>
            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_3']['~VALUE']['TEXT'] ?>
        <? endif ?>

        <!--        блок 3-->

        <!--        блок 4-->
        <? if (!$isEmptyBLOCK_4): ?>
            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_4']['~VALUE']['TEXT'] ?>
        <? endif ?>

        <!--        блок 5-->

        <? if (!$isEmptyBLOCK_5): ?>
            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_5']['~VALUE']['TEXT'] ?>
        <? endif ?>
        <!--        блок 5-->

        <!--        блок 6-->
        <? if (!$isEmptyBLOCK_6): ?>
            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_6']['~VALUE']['TEXT'] ?>
        <? endif ?>
        <!--        блок 6-->
        <!--        блок 7-->

        <? if (!$isEmptyBLOCK_7): ?>
            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_7']['~VALUE']['TEXT'] ?>
        <? endif ?>
        <!--        блок 7-->

        <!--        блок 8-->
        <? if (!$isEmptyBLOCK_8): ?>
            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_8']['~VALUE']['TEXT'] ?>
        <? endif ?>
        <!--        блок 8-->

        <!--        блок 9-->
        <? if (!$isEmptyBLOCK_5): ?>
            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_5']['~VALUE']['TEXT'] ?>
        <? endif ?>
        <!--        блок 9-->
        <!--        блок 10-->
        <? if (!$isEmptyBLOCK_10): ?>
            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_10']['~VALUE']['TEXT'] ?>
        <? endif ?>
        <!--        блок 10-->

        <!--        блок 11-->
        <? if (!$isEmptyBLOCK_11): ?>
            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_11']['~VALUE']['TEXT'] ?>
        <? endif ?>
        <!--        блок 11-->

        <!--        блок 12-->
        <? if (!$isEmptyBLOCK_12): ?>
            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_12']['~VALUE']['TEXT'] ?>
        <? endif ?>
        <!--        блок 12-->

        <!--        блок 13 + галерея-->


        <? if ($isNotEmptyGALLARY_FOTO || $isNotEmptyGALLARY_VIDEO): ?>
            <div class="mc-pk--div__FILES">
                <button class="mc-pk--button__OPEN">
                        <span class="mc-pk--span__OPEN __C-SCRL RIGHT">
                            Галерея
                        </span>
                    <svg class="mc-pk--svg__OPEN" width="27" height="13" viewBox="0 0 27 13" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0859375 0.0917969L13.0859 12.3271L26.0859 0.0917969" stroke="#0C0C0C"
                              stroke-width="0.25"></path>
                    </svg>
                </button>

                <div class="mc-pk--div__BODY __C-SCRL LEFT">
                    <form class="c-common--form__SUBMENU mc-pk--form__SUBMENU" action="#" method="" name="">
                        <? if ($isNotEmptyGALLARY_FOTO): ?>
                            <label class="mc-pk--label__SUBMENU">
                                <input class="mc-pk--input__SUBMENU" type="radio" name="1" value="">
                                <span class="mc-pk--span__SUBMENU">
                                    Фотогалерея
                                </span>
                            </label>
                        <? endif ?>
                        <? if ($isNotEmptyGALLARY_VIDEO): ?>
                            <label class="mc-pk--label__SUBMENU">
                                <input class="mc-pk--input__SUBMENU" type="radio" name="1" value="">
                                <span class="mc-pk--span__SUBMENU">
                                    Видеогалерея
                                </span>
                            </label>
                        <? endif ?>
                    </form>
                    <div class="mc-pk--div__LINE1">
                        <div class="mc-pk--div__LINE2"></div>
                    </div>
                </div>
            </div>

            <div class="mc-pk--div__SWIPER1 swiper">
                <div class="mc-pk--div__SWIPER1_WRAPPER swiper-wrapper">
                    <? if ($isNotEmptyGALLARY_FOTO): ?>
                        <div class="mc-pk--div__SWIPER1_SLIDE swiper-slide">
                            <div class="mc-pk--div__GALLERY">
                                <div class="c-common--div__GLR_CONT2 __C-SCRL LEFT">
                                    <div class="c-common--div__GLR_SWIPER swiper">
                                        <div class="c-common--div__GLR_SWIPER_WRAPPER swiper-wrapper">

                                            <? foreach ($arResult["DISPLAY_PROPERTIES"]['GALLARY_FOTO']['FILE_VALUE'] as $slide): ?>
                                                <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                    <div class="c-common--div__GLR_IMAGE">
                                                        <img class="c-common--img__GLR_IMAGE"
                                                             src="<?= $slide['SRC'] ?>"
                                                             alt="" loading="lazy">
                                                    </div>
                                                </div>
                                            <? endforeach ?>
                                        </div>
                                        <button class="c-common--button__GLR_LEFT">
                                            <svg width="30" height="47" viewBox="0 0 30 47" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_dd_2757_2526)">
                                                    <path d="M5.4375 5.41125L21.4375 22.4113L5.4375 39.4113"
                                                          stroke="white"
                                                          stroke-width="1.2"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_dd_2757_2526" x="0" y="0" width="29.2578"
                                                            height="46.8225" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset/>
                                                        <feGaussianBlur stdDeviation="0.4"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_2757_2526"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset dx="1" dy="1"/>
                                                        <feGaussianBlur stdDeviation="3"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
                                                        <feBlend mode="hard-light" in2="effect1_dropShadow_2757_2526"
                                                                 result="effect2_dropShadow_2757_2526"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect2_dropShadow_2757_2526" result="shape"/>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </button>
                                        <button class="c-common--button__GLR_RIGHT">
                                            <svg width="30" height="47" viewBox="0 0 30 47" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_dd_2757_2526)">
                                                    <path d="M5.4375 5.41125L21.4375 22.4113L5.4375 39.4113"
                                                          stroke="white"
                                                          stroke-width="1.2"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_dd_2757_2526" x="0" y="0" width="29.2578"
                                                            height="46.8225" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset/>
                                                        <feGaussianBlur stdDeviation="0.4"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_2757_2526"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset dx="1" dy="1"/>
                                                        <feGaussianBlur stdDeviation="3"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
                                                        <feBlend mode="hard-light" in2="effect1_dropShadow_2757_2526"
                                                                 result="effect2_dropShadow_2757_2526"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect2_dropShadow_2757_2526" result="shape"/>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="c-common--div__GLR_SWIPER_PAGINATION swiper-pagination dragscroll"></div>
                                </div>


                                <div class="mc-pk--div__GALLERY_TEXT __C-SCRL RIGHT">
                                    <? if (!$isEmptyBLOCK_13): ?>
                                        <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_13']['~VALUE']['TEXT'] ?>
                                    <? endif ?>
                                </div>
                            </div>
                        </div>
                    <? endif ?>
                    <? if ($isNotEmptyGALLARY_VIDEO): ?>
                        <div class="mc-pk--div__SWIPER1_SLIDE swiper-slide">
                            <div class="mc-pk--div__GALLERY">
                                <div class="c-common--div__GLR_CONT2 __C-SCRL LEFT">
                                    <div class="c-common--div__GLR_SWIPER swiper">
                                        <div class="c-common--div__GLR_SWIPER_WRAPPER swiper-wrapper">

                                            <? foreach ($arResult["DISPLAY_PROPERTIES"]['GALLARY_VIDEO']['FILE_VALUE'] as $slide): ?>
                                                <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                    <div class="c-common--div__GLR_IMAGE">
                                                        <img class="c-common--img__GLR_IMAGE"
                                                             src="<?= $slide['SRC'] ?>"
                                                             alt="" loading="lazy">
                                                    </div>
                                                </div>
                                            <? endforeach ?>
                                        </div>
                                        <button class="c-common--button__GLR_LEFT">
                                            <svg width="30" height="47" viewBox="0 0 30 47" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_dd_2757_2526)">
                                                    <path d="M5.4375 5.41125L21.4375 22.4113L5.4375 39.4113"
                                                          stroke="white"
                                                          stroke-width="1.2"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_dd_2757_2526" x="0" y="0" width="29.2578"
                                                            height="46.8225" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset/>
                                                        <feGaussianBlur stdDeviation="0.4"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_2757_2526"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset dx="1" dy="1"/>
                                                        <feGaussianBlur stdDeviation="3"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
                                                        <feBlend mode="hard-light" in2="effect1_dropShadow_2757_2526"
                                                                 result="effect2_dropShadow_2757_2526"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect2_dropShadow_2757_2526" result="shape"/>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </button>
                                        <button class="c-common--button__GLR_RIGHT">
                                            <svg width="30" height="47" viewBox="0 0 30 47" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_dd_2757_2526)">
                                                    <path d="M5.4375 5.41125L21.4375 22.4113L5.4375 39.4113"
                                                          stroke="white"
                                                          stroke-width="1.2"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_dd_2757_2526" x="0" y="0" width="29.2578"
                                                            height="46.8225" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset/>
                                                        <feGaussianBlur stdDeviation="0.4"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_2757_2526"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset dx="1" dy="1"/>
                                                        <feGaussianBlur stdDeviation="3"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
                                                        <feBlend mode="hard-light" in2="effect1_dropShadow_2757_2526"
                                                                 result="effect2_dropShadow_2757_2526"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect2_dropShadow_2757_2526" result="shape"/>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="c-common--div__GLR_SWIPER_PAGINATION swiper-pagination dragscroll"></div>
                                </div>


                                <div class="mc-pk--div__GALLERY_TEXT __C-SCRL RIGHT">
                                    <? if (!$isEmptyBLOCK_13): ?>
                                        <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_13']['~VALUE']['TEXT'] ?>
                                    <? endif ?>
                                </div>
                            </div>
                        </div>
                    <? endif ?>
                </div>
            </div>
        <? endif ?>
        <!--        блок 13 галерея-->

        <? if ($isNotEmptyPRODUCTS): ?>
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
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                    <div class="cd-rec--div__SWIPER_NAV_LINE"></div>
                    <button class="cd-rec--button__SWIPER_NEXT" tabindex="0" aria-label="Next slide"
                            aria-controls="swiper-wrapper-30d27127650a4060" aria-disabled="false">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        <? endif ?>
        <div class="cdn-reg--div__REQUEST  __C-SCRL DOWN">
            <div class="cdn-reg--div__TEXT RIGHT">
                <h3 class="cdn-reg--h3">
                    Зарегистрируйтесь
                </h3>
                <p class="cdn-reg--p__REQUEST">
                    Отправьте запрос на участие в мероприятии
                </p>
                <button class="cdn-reg--button__REQUEST">
                    Зарегистрироваться
                </button>
            </div>
        </div>


        <? if ($isNotEmptyOTRASLI_ELEMENTS): ?>
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
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                    <div class="cd-use--div__SWIPER21_NAV_LINE"></div>
                    <button class="cd-use--button__SWIPER21_NEXT" tabindex="0" aria-label="Next slide"
                            aria-controls="swiper-wrapper-2e397d8c62b40696" aria-disabled="false">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        <? endif ?>
        <? if ($isNotEmptyRESHENIA): ?>
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
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                    <div class="cd-use--div__SWIPER22_NAV_LINE"></div>
                    <button class="cd-use--button__SWIPER22_NEXT" tabindex="0" aria-label="Next slide"
                            aria-controls="swiper-wrapper-2e397d8c62b40696" aria-disabled="false">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        <? endif ?>
    </div>
</section>