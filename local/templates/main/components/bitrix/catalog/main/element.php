<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

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

use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;


$this->setFrameMode(true);
$APPLICATION->SetPageProperty('mainid', 'card-n');


?>


<?


$componentElementParams = [
    'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
    'IBLOCK_ID' => $arParams['IBLOCK_ID'],
    'PROPERTY_CODE' => (isset($arParams['DETAIL_PROPERTY_CODE']) ? $arParams['DETAIL_PROPERTY_CODE'] : []),
    'META_KEYWORDS' => $arParams['DETAIL_META_KEYWORDS'],
    'META_DESCRIPTION' => $arParams['DETAIL_META_DESCRIPTION'],
    'BROWSER_TITLE' => $arParams['DETAIL_BROWSER_TITLE'],
    'SET_CANONICAL_URL' => $arParams['DETAIL_SET_CANONICAL_URL'],
    'BASKET_URL' => $arParams['BASKET_URL'],
    'SHOW_SKU_DESCRIPTION' => $arParams['SHOW_SKU_DESCRIPTION'],
    'ACTION_VARIABLE' => $arParams['ACTION_VARIABLE'],
    'PRODUCT_ID_VARIABLE' => $arParams['PRODUCT_ID_VARIABLE'],
    'SECTION_ID_VARIABLE' => $arParams['SECTION_ID_VARIABLE'],
    'CHECK_SECTION_ID_VARIABLE' => (isset($arParams['DETAIL_CHECK_SECTION_ID_VARIABLE']) ? $arParams['DETAIL_CHECK_SECTION_ID_VARIABLE'] : ''),
    'PRODUCT_QUANTITY_VARIABLE' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
    'PRODUCT_PROPS_VARIABLE' => $arParams['PRODUCT_PROPS_VARIABLE'],
    'CACHE_TYPE' => $arParams['CACHE_TYPE'],
    'CACHE_TIME' => $arParams['CACHE_TIME'],
    'CACHE_GROUPS' => $arParams['CACHE_GROUPS'],
    'SET_TITLE' => $arParams['SET_TITLE'],
    'SET_LAST_MODIFIED' => $arParams['SET_LAST_MODIFIED'],
    'MESSAGE_404' => $arParams['~MESSAGE_404'],
    'SET_STATUS_404' => $arParams['SET_STATUS_404'],
    'SHOW_404' => $arParams['SHOW_404'],
    'FILE_404' => $arParams['FILE_404'],
    'PRICE_CODE' => $arParams['~PRICE_CODE'],
    'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
    'SHOW_PRICE_COUNT' => $arParams['SHOW_PRICE_COUNT'],
    'PRICE_VAT_INCLUDE' => $arParams['PRICE_VAT_INCLUDE'],
    'PRICE_VAT_SHOW_VALUE' => $arParams['PRICE_VAT_SHOW_VALUE'],
    'USE_PRODUCT_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
    'PRODUCT_PROPERTIES' => (isset($arParams['PRODUCT_PROPERTIES']) ? $arParams['PRODUCT_PROPERTIES'] : []),
    'ADD_PROPERTIES_TO_BASKET' => (isset($arParams['ADD_PROPERTIES_TO_BASKET']) ? $arParams['ADD_PROPERTIES_TO_BASKET'] : ''),
    'PARTIAL_PRODUCT_PROPERTIES' => (isset($arParams['PARTIAL_PRODUCT_PROPERTIES']) ? $arParams['PARTIAL_PRODUCT_PROPERTIES'] : ''),
    'LINK_IBLOCK_TYPE' => $arParams['LINK_IBLOCK_TYPE'],
    'LINK_IBLOCK_ID' => $arParams['LINK_IBLOCK_ID'],
    'LINK_PROPERTY_SID' => $arParams['LINK_PROPERTY_SID'],
    'LINK_ELEMENTS_URL' => $arParams['LINK_ELEMENTS_URL'],

    'OFFERS_CART_PROPERTIES' => (isset($arParams['OFFERS_CART_PROPERTIES']) ? $arParams['OFFERS_CART_PROPERTIES'] : []),
    'OFFERS_FIELD_CODE' => $arParams['DETAIL_OFFERS_FIELD_CODE'],
    'OFFERS_PROPERTY_CODE' => (isset($arParams['DETAIL_OFFERS_PROPERTY_CODE']) ? $arParams['DETAIL_OFFERS_PROPERTY_CODE'] : []),
    'OFFERS_SORT_FIELD' => $arParams['OFFERS_SORT_FIELD'],
    'OFFERS_SORT_ORDER' => $arParams['OFFERS_SORT_ORDER'],
    'OFFERS_SORT_FIELD2' => $arParams['OFFERS_SORT_FIELD2'],
    'OFFERS_SORT_ORDER2' => $arParams['OFFERS_SORT_ORDER2'],

    'ELEMENT_ID' => $arResult['VARIABLES']['ELEMENT_ID'],
    'ELEMENT_CODE' => $arResult['VARIABLES']['ELEMENT_CODE'],
    'SECTION_ID' => $arResult['VARIABLES']['SECTION_ID'],
    'SECTION_CODE' => $arResult['VARIABLES']['SECTION_CODE'],
    'SECTION_URL' => $arResult['FOLDER'] . $arResult['URL_TEMPLATES']['section'],
    'DETAIL_URL' => $arResult['FOLDER'] . $arResult['URL_TEMPLATES']['element'],
    'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
    'CURRENCY_ID' => $arParams['CURRENCY_ID'],
    'HIDE_NOT_AVAILABLE' => $arParams['HIDE_NOT_AVAILABLE'],
    'HIDE_NOT_AVAILABLE_OFFERS' => $arParams['HIDE_NOT_AVAILABLE_OFFERS'],
    'USE_ELEMENT_COUNTER' => $arParams['USE_ELEMENT_COUNTER'],
    'SHOW_DEACTIVATED' => $arParams['SHOW_DEACTIVATED'],
    'USE_MAIN_ELEMENT_SECTION' => $arParams['USE_MAIN_ELEMENT_SECTION'],
    'STRICT_SECTION_CHECK' => (isset($arParams['DETAIL_STRICT_SECTION_CHECK']) ? $arParams['DETAIL_STRICT_SECTION_CHECK'] : ''),
    'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
    'LABEL_PROP' => $arParams['LABEL_PROP'],
    'LABEL_PROP_MOBILE' => $arParams['LABEL_PROP_MOBILE'],
    'LABEL_PROP_POSITION' => $arParams['LABEL_PROP_POSITION'],
    'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
    'OFFER_TREE_PROPS' => (isset($arParams['OFFER_TREE_PROPS']) ? $arParams['OFFER_TREE_PROPS'] : []),
    'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
    'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
    'DISCOUNT_PERCENT_POSITION' => (isset($arParams['DISCOUNT_PERCENT_POSITION']) ? $arParams['DISCOUNT_PERCENT_POSITION'] : ''),
    'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
    'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
    'MESS_SHOW_MAX_QUANTITY' => (isset($arParams['~MESS_SHOW_MAX_QUANTITY']) ? $arParams['~MESS_SHOW_MAX_QUANTITY'] : ''),
    'RELATIVE_QUANTITY_FACTOR' => (isset($arParams['RELATIVE_QUANTITY_FACTOR']) ? $arParams['RELATIVE_QUANTITY_FACTOR'] : ''),
    'MESS_RELATIVE_QUANTITY_MANY' => (isset($arParams['~MESS_RELATIVE_QUANTITY_MANY']) ? $arParams['~MESS_RELATIVE_QUANTITY_MANY'] : ''),
    'MESS_RELATIVE_QUANTITY_FEW' => (isset($arParams['~MESS_RELATIVE_QUANTITY_FEW']) ? $arParams['~MESS_RELATIVE_QUANTITY_FEW'] : ''),
    'MESS_BTN_BUY' => (isset($arParams['~MESS_BTN_BUY']) ? $arParams['~MESS_BTN_BUY'] : ''),
    'MESS_BTN_ADD_TO_BASKET' => (isset($arParams['~MESS_BTN_ADD_TO_BASKET']) ? $arParams['~MESS_BTN_ADD_TO_BASKET'] : ''),
    'MESS_BTN_SUBSCRIBE' => (isset($arParams['~MESS_BTN_SUBSCRIBE']) ? $arParams['~MESS_BTN_SUBSCRIBE'] : ''),
    'MESS_BTN_DETAIL' => (isset($arParams['~MESS_BTN_DETAIL']) ? $arParams['~MESS_BTN_DETAIL'] : ''),
    'MESS_NOT_AVAILABLE' => $arParams['~MESS_NOT_AVAILABLE'] ?? '',
    'MESS_NOT_AVAILABLE_SERVICE' => $arParams['~MESS_NOT_AVAILABLE_SERVICE'] ?? '',
    'MESS_BTN_COMPARE' => (isset($arParams['~MESS_BTN_COMPARE']) ? $arParams['~MESS_BTN_COMPARE'] : ''),
    'MESS_PRICE_RANGES_TITLE' => (isset($arParams['~MESS_PRICE_RANGES_TITLE']) ? $arParams['~MESS_PRICE_RANGES_TITLE'] : ''),
    'MESS_DESCRIPTION_TAB' => (isset($arParams['~MESS_DESCRIPTION_TAB']) ? $arParams['~MESS_DESCRIPTION_TAB'] : ''),
    'MESS_PROPERTIES_TAB' => (isset($arParams['~MESS_PROPERTIES_TAB']) ? $arParams['~MESS_PROPERTIES_TAB'] : ''),
    'MESS_COMMENTS_TAB' => (isset($arParams['~MESS_COMMENTS_TAB']) ? $arParams['~MESS_COMMENTS_TAB'] : ''),
    'MAIN_BLOCK_PROPERTY_CODE' => (isset($arParams['DETAIL_MAIN_BLOCK_PROPERTY_CODE']) ? $arParams['DETAIL_MAIN_BLOCK_PROPERTY_CODE'] : ''),
    'MAIN_BLOCK_OFFERS_PROPERTY_CODE' => (isset($arParams['DETAIL_MAIN_BLOCK_OFFERS_PROPERTY_CODE']) ? $arParams['DETAIL_MAIN_BLOCK_OFFERS_PROPERTY_CODE'] : ''),
    'USE_VOTE_RATING' => $arParams['DETAIL_USE_VOTE_RATING'],
    'VOTE_DISPLAY_AS_RATING' => (isset($arParams['DETAIL_VOTE_DISPLAY_AS_RATING']) ? $arParams['DETAIL_VOTE_DISPLAY_AS_RATING'] : ''),
    'USE_COMMENTS' => $arParams['DETAIL_USE_COMMENTS'],
    'BLOG_USE' => (isset($arParams['DETAIL_BLOG_USE']) ? $arParams['DETAIL_BLOG_USE'] : ''),
    'BLOG_URL' => (isset($arParams['DETAIL_BLOG_URL']) ? $arParams['DETAIL_BLOG_URL'] : ''),
    'BLOG_EMAIL_NOTIFY' => (isset($arParams['DETAIL_BLOG_EMAIL_NOTIFY']) ? $arParams['DETAIL_BLOG_EMAIL_NOTIFY'] : ''),
    'VK_USE' => (isset($arParams['DETAIL_VK_USE']) ? $arParams['DETAIL_VK_USE'] : ''),
    'VK_API_ID' => (isset($arParams['DETAIL_VK_API_ID']) ? $arParams['DETAIL_VK_API_ID'] : 'API_ID'),
    'FB_USE' => (isset($arParams['DETAIL_FB_USE']) ? $arParams['DETAIL_FB_USE'] : ''),
    'FB_APP_ID' => (isset($arParams['DETAIL_FB_APP_ID']) ? $arParams['DETAIL_FB_APP_ID'] : ''),
    'BRAND_USE' => (isset($arParams['DETAIL_BRAND_USE']) ? $arParams['DETAIL_BRAND_USE'] : 'N'),
    'BRAND_PROP_CODE' => (isset($arParams['DETAIL_BRAND_PROP_CODE']) ? $arParams['DETAIL_BRAND_PROP_CODE'] : ''),
    'DISPLAY_NAME' => (isset($arParams['DETAIL_DISPLAY_NAME']) ? $arParams['DETAIL_DISPLAY_NAME'] : ''),
    'IMAGE_RESOLUTION' => (isset($arParams['DETAIL_IMAGE_RESOLUTION']) ? $arParams['DETAIL_IMAGE_RESOLUTION'] : ''),
    'PRODUCT_INFO_BLOCK_ORDER' => (isset($arParams['DETAIL_PRODUCT_INFO_BLOCK_ORDER']) ? $arParams['DETAIL_PRODUCT_INFO_BLOCK_ORDER'] : ''),
    'PRODUCT_PAY_BLOCK_ORDER' => (isset($arParams['DETAIL_PRODUCT_PAY_BLOCK_ORDER']) ? $arParams['DETAIL_PRODUCT_PAY_BLOCK_ORDER'] : ''),
    'ADD_DETAIL_TO_SLIDER' => (isset($arParams['DETAIL_ADD_DETAIL_TO_SLIDER']) ? $arParams['DETAIL_ADD_DETAIL_TO_SLIDER'] : ''),
    'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
    'ADD_SECTIONS_CHAIN' => (isset($arParams['ADD_SECTIONS_CHAIN']) ? $arParams['ADD_SECTIONS_CHAIN'] : ''),
    'ADD_ELEMENT_CHAIN' => (isset($arParams['ADD_ELEMENT_CHAIN']) ? $arParams['ADD_ELEMENT_CHAIN'] : ''),
    'DISPLAY_PREVIEW_TEXT_MODE' => (isset($arParams['DETAIL_DISPLAY_PREVIEW_TEXT_MODE']) ? $arParams['DETAIL_DISPLAY_PREVIEW_TEXT_MODE'] : ''),
    'DETAIL_PICTURE_MODE' => (isset($arParams['DETAIL_DETAIL_PICTURE_MODE']) ? $arParams['DETAIL_DETAIL_PICTURE_MODE'] : []),
    'ADD_TO_BASKET_ACTION' => $basketAction,
    'ADD_TO_BASKET_ACTION_PRIMARY' => (isset($arParams['DETAIL_ADD_TO_BASKET_ACTION_PRIMARY']) ? $arParams['DETAIL_ADD_TO_BASKET_ACTION_PRIMARY'] : null),
    'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
    'DISPLAY_COMPARE' => (isset($arParams['USE_COMPARE']) ? $arParams['USE_COMPARE'] : ''),
    'COMPARE_PATH' => $arResult['FOLDER'] . $arResult['URL_TEMPLATES']['compare'],
    'USE_COMPARE_LIST' => 'Y',
    'BACKGROUND_IMAGE' => (isset($arParams['DETAIL_BACKGROUND_IMAGE']) ? $arParams['DETAIL_BACKGROUND_IMAGE'] : ''),
    'COMPATIBLE_MODE' => (isset($arParams['COMPATIBLE_MODE']) ? $arParams['COMPATIBLE_MODE'] : ''),
    'DISABLE_INIT_JS_IN_COMPONENT' => (isset($arParams['DISABLE_INIT_JS_IN_COMPONENT']) ? $arParams['DISABLE_INIT_JS_IN_COMPONENT'] : ''),
    'SET_VIEWED_IN_COMPONENT' => (isset($arParams['DETAIL_SET_VIEWED_IN_COMPONENT']) ? $arParams['DETAIL_SET_VIEWED_IN_COMPONENT'] : ''),
    'SHOW_SLIDER' => (isset($arParams['DETAIL_SHOW_SLIDER']) ? $arParams['DETAIL_SHOW_SLIDER'] : ''),
    'SLIDER_INTERVAL' => (isset($arParams['DETAIL_SLIDER_INTERVAL']) ? $arParams['DETAIL_SLIDER_INTERVAL'] : ''),
    'SLIDER_PROGRESS' => (isset($arParams['DETAIL_SLIDER_PROGRESS']) ? $arParams['DETAIL_SLIDER_PROGRESS'] : ''),
    'USE_ENHANCED_ECOMMERCE' => (isset($arParams['USE_ENHANCED_ECOMMERCE']) ? $arParams['USE_ENHANCED_ECOMMERCE'] : ''),
    'DATA_LAYER_NAME' => (isset($arParams['DATA_LAYER_NAME']) ? $arParams['DATA_LAYER_NAME'] : ''),
    'BRAND_PROPERTY' => (isset($arParams['BRAND_PROPERTY']) ? $arParams['BRAND_PROPERTY'] : ''),

    'USE_GIFTS_DETAIL' => $arParams['USE_GIFTS_DETAIL'] ?: 'Y',
    'USE_GIFTS_MAIN_PR_SECTION_LIST' => $arParams['USE_GIFTS_MAIN_PR_SECTION_LIST'] ?: 'Y',
    'GIFTS_SHOW_DISCOUNT_PERCENT' => $arParams['GIFTS_SHOW_DISCOUNT_PERCENT'],
    'GIFTS_SHOW_OLD_PRICE' => $arParams['GIFTS_SHOW_OLD_PRICE'],
    'GIFTS_DETAIL_PAGE_ELEMENT_COUNT' => $arParams['GIFTS_DETAIL_PAGE_ELEMENT_COUNT'],
    'GIFTS_DETAIL_HIDE_BLOCK_TITLE' => $arParams['GIFTS_DETAIL_HIDE_BLOCK_TITLE'],
    'GIFTS_DETAIL_TEXT_LABEL_GIFT' => $arParams['GIFTS_DETAIL_TEXT_LABEL_GIFT'],
    'GIFTS_DETAIL_BLOCK_TITLE' => $arParams['GIFTS_DETAIL_BLOCK_TITLE'],
    'GIFTS_SHOW_NAME' => $arParams['GIFTS_SHOW_NAME'],
    'GIFTS_SHOW_IMAGE' => $arParams['GIFTS_SHOW_IMAGE'],
    'GIFTS_MESS_BTN_BUY' => $arParams['~GIFTS_MESS_BTN_BUY'],
    'GIFTS_PRODUCT_BLOCKS_ORDER' => $arParams['LIST_PRODUCT_BLOCKS_ORDER'],
    'GIFTS_SHOW_SLIDER' => $arParams['LIST_SHOW_SLIDER'],
    'GIFTS_SLIDER_INTERVAL' => isset($arParams['LIST_SLIDER_INTERVAL']) ? $arParams['LIST_SLIDER_INTERVAL'] : '',
    'GIFTS_SLIDER_PROGRESS' => isset($arParams['LIST_SLIDER_PROGRESS']) ? $arParams['LIST_SLIDER_PROGRESS'] : '',

    'GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT' => $arParams['GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT'],
    'GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE' => $arParams['GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE'],
    'GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE' => $arParams['GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE'],
];

if (isset($arParams['USER_CONSENT'])) {
    $componentElementParams['USER_CONSENT'] = $arParams['USER_CONSENT'];
}
if (isset($arParams['USER_CONSENT_ID'])) {
    $componentElementParams['USER_CONSENT_ID'] = $arParams['USER_CONSENT_ID'];
}

if (isset($arParams['USER_CONSENT_IS_CHECKED'])) {
    $componentElementParams['USER_CONSENT_IS_CHECKED'] = $arParams['USER_CONSENT_IS_CHECKED'];
}

if (isset($arParams['USER_CONSENT_IS_LOADED'])) {
    $componentElementParams['USER_CONSENT_IS_LOADED'] = $arParams['USER_CONSENT_IS_LOADED'];
}

?>

<section class="cd-hero">
    <div class="cd-hero--div__CONT C-CONTAINER">
        <? $APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            ".default",
            [
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0"
            ]
        ); ?>


        <div class="cd-hero--div__MAIN">
            <div class="cd-hero--div__LEFT">
                <div class="cd-hero--div__LEFT_CONT">
                    <div class="cd-hero--div__TOP">
                        <h1 class="cd-hero--h1 __C-SCRL LEFT">
                            АТБ-АТОМ-1.3
                        </h1>
                        <div class="cdn-hero--div__TOP_2 __C-SCRL LEFT">
                            <p class="cd-hero--p__TOP">
                                Мини-компьютер.
                            </p>
                            <button class="cdn-hero--button__ARTIC">
                                        <span class="cdn-hero--span__ARTIC_1">
                                            Код:
                                        </span>
                                <span class="cdn-hero--span__ARTIC_2">
                                            34576567
                                        </span>
                                <svg width="9" height="12" viewBox="0 0 9 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.8855 9.98758C2.58779 9.98758 2.3416 9.88199 2.14695 9.67081C1.95229 9.45963 1.85496 9.19255 1.85496 8.86957V1.11801C1.85496 0.795031 1.95229 0.52795 2.14695 0.31677C2.3416 0.10559 2.58779 0 2.8855 0H7.96947C8.26718 0 8.51336 0.10559 8.70801 0.31677C8.90267 0.52795 9 0.795031 9 1.11801V8.86957C9 9.19255 8.90267 9.45963 8.70801 9.67081C8.51336 9.88199 8.26718 9.98758 7.96947 9.98758H2.8855ZM2.8855 9.46584H7.96947C8.10687 9.46584 8.23282 9.40373 8.34733 9.2795C8.46183 9.15528 8.51908 9.01863 8.51908 8.86957V1.11801C8.51908 0.968944 8.46183 0.832298 8.34733 0.708075C8.23282 0.583851 8.10687 0.521739 7.96947 0.521739H2.8855C2.74809 0.521739 2.62214 0.583851 2.50763 0.708075C2.39313 0.832298 2.33588 0.968944 2.33588 1.11801V8.86957C2.33588 9.01863 2.39313 9.15528 2.50763 9.2795C2.62214 9.40373 2.74809 9.46584 2.8855 9.46584ZM1.03053 12C0.732824 12 0.486641 11.8944 0.291985 11.6832C0.0973282 11.472 0 11.205 0 10.882V2.6087H0.480916V10.882C0.480916 11.0311 0.538168 11.1677 0.652672 11.2919C0.767176 11.4161 0.89313 11.4783 1.03053 11.4783H6.59542V12H1.03053Z"
                                        fill="#828282"/>
                                </svg>
                            </button>
                        </div>
                        <div class="cdn-hero--div__CARD_PRICE __C-SCRL DOWN">
                            <p class="cdn-hero--p__CARD_PRICE_CUR">
                                <span class="cdn-hero--span__CARD_PRICE_CUR">100000</span>
                                <sup>*</sup>
                                <span class="cdn-hero--span__CARD_PRICE_CUR">
                                            ₽
                                        </span>
                            </p>
                            <p class="cdn-hero--p__CARD_PRICE_OLD">
                                <span class="cdn-hero--span__CARD_PRICE_OLD">250000</span>
                                <span class="cdn-hero--span__CARD_PRICE_OLD">
                                            ₽
                                        </span>
                            </p>
                            <button class="cdn-hero--button__CARD_PRICE">
                                %
                            </button>
                        </div>
                    </div>


                    <div class="cdn-hero--div__DESCR">
                        <p class="cdn-hero--p__DESCR __C-SCRL DOWN">
                            АТБ-АТОМ-1.3 является сетевой вычислительной платформой,
                            включённой в единый реестр российской радиоэлектронной
                            продукции (ПП РФ №878 от 10.07.2019), что допускает её
                            применение на объектах критической информационной инфраструктуры (КИИ).
                            Платформа совместима с российскими операционными системами и
                            может использоваться в роли маршрутизатора, межсетевого экрана
                            или шлюза совместно со специализированным российским ПО.
                            АТБ-АТОМ-1 поддерживает до 8 Гб оперативной памяти и
                            до 256 Гб накопителя SSD.
                        </p>
                        <a class="cdn-hero--a__NAME __C-SCRL DOWN" href="#">
                            Аппаратные платформы АТБ-АТОМ-1
                        </a>
                        <a class="cdn-hero--a__TO_SERIES __C-SCRL DOWN" href="#">
                            ПЕРЕЙТИ В СЕРИЮ
                        </a>
                    </div>


                    <div class="cd-hero--div__PARAMS">
                        <div class="cd-hero--div__PARAMS_ITEM __C-SCRL DOWN">
                            <p class="cd-hero--p__PARAMS_NAME">
                                Процессор
                            </p>
                            <p class="cd-hero--p__PARAMS_MODEL">
                                Intel Atom E3845
                            </p>
                            <p class="cd-hero--p__PARAMS_PROPS">
                                4 ядра, 2 Мб кэш, 1.91 ГГц
                            </p>
                        </div>
                        <div class="cd-hero--div__PARAMS_ITEM __C-SCRL DOWN">
                            <p class="cd-hero--p__PARAMS_NAME">
                                Оперативная память
                            </p>
                            <p class="cd-hero--p__PARAMS_MODEL">
                                DDR3L SODIMM
                            </p>
                            <p class="cd-hero--p__PARAMS_PROPS">
                                до 8 Гб
                            </p>
                        </div>
                        <div class="cd-hero--div__PARAMS_ITEM __C-SCRL DOWN">
                            <p class="cd-hero--p__PARAMS_NAME">
                                Встроенный жесткий диск
                            </p>
                            <p class="cd-hero--p__PARAMS_MODEL">
                                SSD М.2 2242
                            </p>
                            <p class="cd-hero--p__PARAMS_PROPS">
                                до 256 Гб
                            </p>
                        </div>
                    </div>


                    <div class="cd-hero--div__IMAGES __C-SCRL DOWN">
                        <div class="cd-hero--div__IMAGES_TOP_CONT">
                            <div class="cd-hero--div__IMAGES_TOP">
                                <img class="cd-hero--img__IMAGES_TOP" src="images/home/ATB-2100/АТБ-2100_1.webp" alt="">
                                <div class="cd-hero--div__CARD_TAG">
                                    <a class="cd-hero--a__CARD_TAG" href="#">
                                        В реестре
                                    </a>
                                    <a class="cd-hero--a__CARD_TAG" href="#">
                                        Хит!
                                    </a>
                                    <a class="cd-hero--a__CARD_TAG" href="#">
                                        Новинка
                                    </a>
                                </div>
                                <div class="cd-hero--div__CARD_BTNS">
                                    <button class="cd-hero--button__CARD_COMPARISON">
                                        <svg class="cd-hero--svg__CARD_COMPARISON" width="23" height="28"
                                             viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"></path>
                                            <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"></path>
                                            <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"></path>
                                        </svg>
                                    </button>

                                    <button class="cd-hero--button__CARD_FAVOURITES">
                                        <svg class="cd-hero--svg__CARD_FAVOURITES" width="28" height="28"
                                             viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                                fill="#BFBFBF"></path>
                                            <path
                                                d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                                fill="#BFBFBF"></path>
                                            <path
                                                d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                                fill="#BFBFBF"></path>
                                            <path
                                                d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                                fill="#BFBFBF"></path>
                                        </svg>
                                    </button>
                                </div>
                                <img class="cd-hero--img__CARD_GISP" src="images/home/hm-cat_icon.svg" alt="ГИСП">
                            </div>
                            <button class="cd-hero--button__IMAGES_TOP_CONT"></button>
                        </div>


                        <div class="cd-hero--div__IMAGES_BOTTOM">
                            <button class="cd-hero--button__IMAGES cd-hero__IMG">
                                <img class="cd-hero--img__IMAGES" src="images/home/ATB-2100/АТБ-2100_1.webp" alt="">
                            </button>
                            <button class="cd-hero--button__IMAGES cd-hero__IMG">
                                <img class="cd-hero--img__IMAGES" src="images/home/ATB-2100/АТБ-2100_2.webp" alt="">
                            </button>
                            <button class="cd-hero--button__IMAGES cd-hero__VID"></button>
                            <button class="cd-hero--button__IMAGES cd-hero__3D"></button>
                            <button class="cd-hero--button__IMAGES cd-hero__MORE">
                                <span>+ 6</span>
                                <span>больше</span>
                            </button>
                        </div>
                    </div>


                    <div class="cd-hero--div__LINKS">
                        <a class="cd-hero--a__LINK __C-SCRL DOWN" href="#">
                            ОСТАВИТЬ ЗАЯВКУ
                        </a>
                    </div>
                </div>
            </div>


            <div class="cd-hero--div__RIGHT"></div>


            <div class="cd-hero--div__POPUP">
                <div class="cd-hero--div__POPUP_BODY">
                    <p class="cd-hero--p__POPUP_TOP"></p>

                    <div class="cd-hero--div__POPUP_MAIN">
                        <button class="cd-hero--button__POPUP_CLOSE">
                            <svg class="cd-hero--svg__POPUP_CLOSE" width="20" height="20" viewBox="0 0 20 20"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="18.55" width="26.1834" height="2" rx="1" transform="rotate(-45 0 18.55)"
                                      fill="#005792"/>
                                <rect width="26.1834" height="2" rx="1"
                                      transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 20 18.55)"
                                      fill="#005792"/>
                            </svg>
                        </button>
                        <div class="cd-hero--div__SWIPER swiper">
                            <div class="cd-hero--div__SWIPER_WRAPPER swiper-wrapper">
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <img class="cd-hero--img__SWIPER_IMAGE" src="images/home/ATB-2100/АТБ-2100_1.webp"
                                         alt="" loading="lazy">
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <img class="cd-hero--img__SWIPER_IMAGE" src="images/home/ATB-2100/АТБ-2100_2.webp"
                                         alt="" loading="lazy">
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <img class="cd-hero--img__SWIPER_IMAGE" src="images/home/ATB-2100/АТБ-2100_3.webp"
                                         alt="" loading="lazy">
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <img class="cd-hero--img__SWIPER_IMAGE" src="images/home/ATB-2100/АТБ-2100_4.webp"
                                         alt="" loading="lazy">
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <img class="cd-hero--img__SWIPER_IMAGE" src="images/home/ATB-2100/АТБ-2100_5.webp"
                                         alt="" loading="lazy">
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <img class="cd-hero--img__SWIPER_IMAGE" src="images/home/ATB-2100/АТБ-2100_6.webp"
                                         alt="" loading="lazy">
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <img class="cd-hero--img__SWIPER_IMAGE" src="images/home/ATB-2100/АТБ-2100_3.webp"
                                         alt="" loading="lazy">
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <img class="cd-hero--img__SWIPER_IMAGE" src="images/home/ATB-2100/АТБ-2100_4.webp"
                                         alt="" loading="lazy">
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <img class="cd-hero--img__SWIPER_IMAGE" src="images/home/ATB-2100/АТБ-2100_5.webp"
                                         alt="" loading="lazy">
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <img class="cd-hero--img__SWIPER_IMAGE" src="images/home/ATB-2100/АТБ-2100_6.webp"
                                         alt="" loading="lazy">
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <img class="cd-hero--img__SWIPER_IMAGE" src="images/home/ATB-2100/АТБ-2100_3.webp"
                                         alt="" loading="lazy">
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <img class="cd-hero--img__SWIPER_IMAGE" src="images/home/ATB-2100/АТБ-2100_4.webp"
                                         alt="" loading="lazy">
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <video class="cd-hero--video" preload="none" width="100%" controls muted>
                                        <source src="video/vp-specs-video.webm" type="video/webm">
                                        <source src="video/vp-specs-video.mp4" type="video/mp4">
                                        Ваш браузер не поддерживает встроенные видео.
                                    </video>
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <video class="cd-hero--video" preload="none" width="100%" controls muted>
                                        <source src="video/vp-specs-video.webm" type="video/webm">
                                        <source src="video/vp-specs-video.mp4" type="video/mp4">
                                        Ваш браузер не поддерживает встроенные видео.
                                    </video>
                                </div>
                                <div class="cd-hero--div__SWIPER_SLIDE swiper-slide">
                                    <canvas class="cd-hero--canvas" data-d="3d/images/atom.glb"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="cd-hero--div__SWIPER_PAGINATION swiper-pagination"></div>
                        <button class="cd-hero--button__POPUP_MORE">
                            <span class="cd-hero--span__POPUP_MORE">Показать больше</span>
                            <svg width="20" height="25" viewBox="0 0 20 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 0L10 24M10 24L19 14.8364M10 24L1 14.8364" stroke="#005792"
                                      stroke-width="0.5"/>
                            </svg>
                        </button>
                        <button class="cd-hero--button__POPUP_LESS">
                            <span class="cd-hero--span__POPUP_LESS">Показать меньше</span>
                            <svg width="20" height="25" viewBox="0 0 20 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 25L10 1M10 1L19 10.1636M10 1L1 10.1636" stroke="#005792"
                                      stroke-width="0.5"/>
                            </svg>
                        </button>
                    </div>

                    <div class="cd-hero--div__POPUP_CONTROL">
                        <div class="cd-hero--div__POPUP_CONTROL_SLIDE">
                            <button class="cd-hero--button__PREV">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 1L1 7.46154L7 13" stroke="#0C0C0C" stroke-width="0.25"
                                          stroke-linecap="round"/>
                                </svg>
                            </button>
                            <button class="cd-hero--button__NEXT">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7.46154L1 13" stroke="#0C0C0C" stroke-width="0.25"
                                          stroke-linecap="round"/>
                                </svg>
                            </button>
                        </div>

                        <div class="cd-hero--div__LINE"></div>

                        <div class="cd-hero--div__POPUP_CONTROL_ZOOM">
                            <button class="cd-hero--button__PLUS">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <line x1="0.125" y1="6.875" x2="13.875" y2="6.875" stroke="#0C0C0C"
                                          stroke-width="0.25" stroke-linecap="round"/>
                                    <line x1="6.875" y1="13.875" x2="6.875" y2="0.125" stroke="#0C0C0C"
                                          stroke-width="0.25" stroke-linecap="round"/>
                                </svg>
                            </button>
                            <button class="cd-hero--button__MINUS">
                                <svg width="14" height="1" viewBox="0 0 14 1" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <line x1="0.125" y1="0.875" x2="13.875" y2="0.875" stroke="#0C0C0C"
                                          stroke-width="0.25" stroke-linecap="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ ABOUT (ABT) ********** ---------- -->


<section class="cd-abt">
    <div class="cd-abt--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            О продукте
        </h2>


        <div class="c-common--div__TABS __C-SCRL DOWN">
            <div class="c-common--div__TABS_TOP">
                <button class="c-common--button__TABS _ACT">
                    Описание
                </button>
                <button class="c-common--button__TABS">
                    Характеристики
                </button>
                <button class="c-common--button__TABS">
                    Схемы
                </button>
                <button class="c-common--button__TABS">
                    Совместимое ПО
                </button>
                <div class="c-common--div__TABS_FRAME"></div>
            </div>
            <button class="c-common--button__TABS_LEFT">
                <svg width="54" height="20" viewBox="0 0 54 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M36 4.5L41 10L36 15.5" stroke="#005792" stroke-width="1.5" stroke-linecap="round"></path>
                </svg>
            </button>
            <button class="c-common--button__TABS_RIGHT">
                <svg width="54" height="20" viewBox="0 0 54 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M36 4.5L41 10L36 15.5" stroke="#005792" stroke-width="1.5" stroke-linecap="round"></path>
                </svg>
            </button>
        </div>


        <div class="cd-abt--div__SWIPER2 swiper __C-SCRL DOWN">
            <div class="cd-abt--div__SWIPER2_WRAPPER swiper-wrapper">
                <div class="cd-abt--div__SWIPER2_SLIDE swiper-slide">
                    <p class="cd-abt--p__SWIPER2_SLIDE1_1">
                        АТБ-АТОМ-1 является сетевой вычислительной платформой,
                        включённой в единый реестр российской радиоэлектронной
                        продукции (ПП РФ №878 от 10.07.2019), что допускает
                        применение на объектах критической информационной
                        инфраструктуры.
                    </p>
                    <p class="cd-abt--p__SWIPER2_SLIDE1_2">
                        <a class="cd-abt--a__SWIPER2_SLIDE1_2" href="#">
                            Платформа совместима с российскими операционными системами
                        </a>
                        и может использоваться в роли маршрутизатора, межсетевого
                        экрана или шлюза совместно со специализированным российским ПО.
                        АТБ-АТОМ-1 поддерживает до 8 Гб оперативной памяти и до 256 Гб
                        накопителя SSD.
                    </p>

                    <div class="cd-abt--div__SWIPER2_SLIDE1_3">
                        <p class="cd-abt--p__SWIPER2_SLIDE1_TOP">
                            Под требования заказчика АТБ-АТОМ-1 может быть доукомплектован опциональными модулями:
                        </p>

                        <ul class="cd-abt--ul__SWIPER2_SLIDE1_3">
                            <li class="cd-abt--li__SWIPER2_SLIDE1_3">
                                <div class="cd-abt--div__POINT"></div>
                                <span class="cd-abt--li__SWIPER2_SLIDE1_3">
                                            АТБ-WiFi/BT - модуль беспроводной передачи данных WiFi/BT с внешней антенной;
                                        </span>
                            </li>
                            <li class="cd-abt--li__SWIPER2_SLIDE1_3">
                                <div class="cd-abt--div__POINT"></div>
                                <span class="cd-abt--li__SWIPER2_SLIDE1_3">
                                            АТБ-LTE (GPS) – модуль LTE (GPS) с внешней антенной и слотом под SIM-карту;
                                        </span>
                            </li>
                            <li class="cd-abt--li__SWIPER2_SLIDE1_3">
                                <div class="cd-abt--div__POINT"></div>
                                <span class="cd-abt--li__SWIPER2_SLIDE1_3">
                                            АТБ-AUDIO – аудио-карта с динамиком или разъемами Audio-jack 3.5 мм;
                                        </span>
                            </li>
                            <li class="cd-abt--li__SWIPER2_SLIDE1_3">
                                <div class="cd-abt--div__POINT"></div>
                                <span class="cd-abt--li__SWIPER2_SLIDE1_3">
                                            АТБ-МУВВ — модуль мониторинга условий эксплуатации и внешних воздействий (t◦C, U, мех. воздействия, вскрытия);
                                        </span>
                            </li>
                            <li class="cd-abt--li__SWIPER2_SLIDE1_3">
                                <div class="cd-abt--div__POINT"></div>
                                <span class="cd-abt--li__SWIPER2_SLIDE1_3">
                                            АТБ-GSM — GSM-модем отечественного производства;
                                        </span>
                            </li>
                            <li class="cd-abt--li__SWIPER2_SLIDE1_3">
                                <div class="cd-abt--div__POINT"></div>
                                <span class="cd-abt--li__SWIPER2_SLIDE1_3">
                                            АТБ-LW — базовая станция LoRaWAN.
                                        </span>
                            </li>
                        </ul>
                    </div>

                    <div class="cd-abt--div__SWIPER2_SLIDE1_4">
                        <p class="cd-abt--p__SWIPER2_SLIDE1_TOP">
                            Сочетание технических параметров, форм-фактора и условий эксплуатации открывают возможности
                            для применения АТБ-АТОМ-1 и в различных сферах:
                        </p>

                        <ul class="cd-abt--ul__SWIPER2_SLIDE1_4_1">
                            <li class="cd-abt--li__SWIPER2_SLIDE1_4_1">
                                <svg class="cd-abt--svg__CORNER" width="9" height="10" viewBox="0 0 9 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z"
                                        fill="#62BE37"/>
                                </svg>

                                <div class="cd-abt--div__SWIPER2_SLIDE1_4_1_TEXT">
                                    <p class="cd-abt--p__SWIPER2_SLIDE1_4_1_TEXT1">
                                        В системах информационной безопасности
                                    </p>
                                    <p class="cd-abt--p__SWIPER2_SLIDE1_4_1_TEXT2">
                                        в роли межсетевого экрана, шлюза, ловушки, монитора сетевых запросов и трафика;
                                    </p>
                                </div>
                            </li>
                            <li class="cd-abt--li__SWIPER2_SLIDE1_4_1">
                                <svg class="cd-abt--svg__CORNER" width="9" height="10" viewBox="0 0 9 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z"
                                        fill="#62BE37"/>
                                </svg>

                                <div class="cd-abt--div__SWIPER2_SLIDE1_4_1_TEXT">
                                    <p class="cd-abt--p__SWIPER2_SLIDE1_4_1_TEXT1">
                                        В системах контроля доступа и видеонаблюдения
                                    </p>
                                    <p class="cd-abt--p__SWIPER2_SLIDE1_4_1_TEXT2">
                                        в роли вычислительного узла сбора данных, управления и маршрутизациа;
                                    </p>
                                </div>
                            </li>
                            <li class="cd-abt--li__SWIPER2_SLIDE1_4_1">
                                <svg class="cd-abt--svg__CORNER" width="9" height="10" viewBox="0 0 9 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z"
                                        fill="#62BE37"/>
                                </svg>

                                <div class="cd-abt--div__SWIPER2_SLIDE1_4_1_TEXT">
                                    <p class="cd-abt--p__SWIPER2_SLIDE1_4_1_TEXT1">
                                        в банкоматах, платежных автоматах и постаматах
                                    </p>
                                    <p class="cd-abt--p__SWIPER2_SLIDE1_4_1_TEXT2">
                                        в роли межсетевого экрана, шлюза, маршрутизатора, вычислительного узла;
                                    </p>
                                </div>
                            </li>
                            <li class="cd-abt--li__SWIPER2_SLIDE1_4_1">
                                <svg class="cd-abt--svg__CORNER" width="9" height="10" viewBox="0 0 9 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z"
                                        fill="#62BE37"/>
                                </svg>

                                <div class="cd-abt--div__SWIPER2_SLIDE1_4_1_TEXT">
                                    <p class="cd-abt--p__SWIPER2_SLIDE1_4_1_TEXT1">
                                        на прозводстве и в офисе
                                    </p>
                                    <p class="cd-abt--p__SWIPER2_SLIDE1_4_1_TEXT2">
                                        в роли рабочего автоматизированного места, терминала или тонкого клиента.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="cd-abt--div__SWIPER2_SLIDE swiper-slide">
                    <div class="cd-abt--div__TABLE">
                        <div class="cd-abt--div__TABLE1">
                            <button class="cd-abt--button__TABLE_HEAD">
                                        <span class="cd-abt--span__TABLE_HEAD">
                                            основные характеристики
                                        </span>
                                <svg class="cd-abt--svg__TABLE_HEAD" width="28" height="13" viewBox="0 0 28 13"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 12.5L14 0.264706L27 12.5" stroke="#0C0C0C" stroke-width="0.25"/>
                                </svg>
                            </button>

                            <div class="cd-abt--div__TABLE_BODY">
                                <div class="cd-abt--div__TABLE_ITEM">
                                    <p class="cd-abt--p__TABLE_ITEM_NAME">
                                        Процессор
                                    </p>
                                    <p class="cd-abt--p__TABLE_ITEM_TEXT">
                                        Intel Atom E3845 — 4 ядра, 2 Мб кэш, 1.91 ГГц
                                    </p>
                                </div>
                                <div class="cd-abt--div__TABLE_ITEM">
                                    <p class="cd-abt--p__TABLE_ITEM_NAME">
                                        Оперативная память
                                    </p>
                                    <p class="cd-abt--p__TABLE_ITEM_TEXT">
                                        DDR3L SODIMM до 8 Гб
                                    </p>
                                </div>
                                <div class="cd-abt--div__TABLE_ITEM">
                                    <p class="cd-abt--p__TABLE_ITEM_NAME">
                                        Встроенный жесткий диск
                                    </p>
                                    <p class="cd-abt--p__TABLE_ITEM_TEXT">
                                        SSD М.2 2242 до 256 Гб
                                    </p>
                                </div>
                                <div class="cd-abt--div__TABLE_ITEM">
                                    <p class="cd-abt--p__TABLE_ITEM_NAME">
                                        Сетевые интерфейсы
                                    </p>
                                    <p class="cd-abt--p__TABLE_ITEM_TEXT">
                                        3 x Ethernet 1G/100M RJ45
                                    </p>
                                </div>
                                <div class="cd-abt--div__TABLE_ITEM">
                                    <p class="cd-abt--p__TABLE_ITEM_NAME">
                                        Слоты расширения
                                    </p>
                                    <ul class="cd-abt--ul__TABLE_ITEM_TEXT">
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        1 x mini PCIe (интерфейсы PCIe, USB 2.0, SPI, SIM, I2C);
                                                    </span>
                                        </li>
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        1 x PLS-5 (интерфейс USB 2.0)
                                                    </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cd-abt--div__TABLE_ITEM">
                                    <p class="cd-abt--p__TABLE_ITEM_NAME">
                                        Консольный порт
                                    </p>
                                    <p class="cd-abt--p__TABLE_ITEM_TEXT">
                                        1 x RS-232C (RJ-45)
                                    </p>
                                </div>
                                <div class="cd-abt--div__TABLE_ITEM">
                                    <p class="cd-abt--p__TABLE_ITEM_NAME">
                                        Аудио интерфейс
                                    </p>
                                    <ul class="cd-abt--ul__TABLE_ITEM_TEXT">
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        1 x выход для наушников или внешних динамиков (опция);
                                                    </span>
                                        </li>
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        1 x вход микрофона (опция);
                                                    </span>
                                        </li>
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        1 х встроенный динамик (опция)
                                                    </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cd-abt--div__TABLE_ITEM">
                                    <p class="cd-abt--p__TABLE_ITEM_NAME">
                                        Программное обеспечение
                                    </p>
                                    <p class="cd-abt--p__TABLE_ITEM_TEXT">
                                        Базовая система ввода-вывода АТОМ (BIOS UEFI / LEGACY с подготовкой к установке
                                        ОС)
                                    </p>
                                </div>
                                <div class="cd-abt--div__TABLE_ITEM">
                                    <p class="cd-abt--p__TABLE_ITEM_NAME">
                                        Сетевые контроллеры
                                    </p>
                                    <ul class="cd-abt--ul__TABLE_ITEM_TEXT">
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        АТБ-АТОМ-1.3 - 3 x GBE (i226)
                                                    </span>
                                        </li>
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        АТБ-АТОМ-1.3 - 3 x GBE (i226)
                                                    </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cd-abt--div__TABLE_ITEM">
                                    <p class="cd-abt--p__TABLE_ITEM_NAME">
                                        АТБ-АТОМ-1.3 - 3 x GBE (i226)
                                    </p>
                                    <ul class="cd-abt--ul__TABLE_ITEM_TEXT">
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        АТБ-АТОМ-1.3 - 3 x GBE (i226)
                                                    </span>
                                        </li>
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        АТБ-АТОМ-1.3 - 3 x GBE (i226)
                                                    </span>
                                        </li>
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        АТБ-АТОМ-1.3 - 3 x GBE (i226)
                                                    </span>
                                        </li>
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        АТБ-АТОМ-1.3 - 3 x GBE (i226)
                                                    </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="cd-abt--div__TABLE1">
                            <button class="cd-abt--button__TABLE_HEAD">
                                        <span class="cd-abt--span__TABLE_HEAD">
                                            Опции
                                        </span>
                                <svg class="cd-abt--svg__TABLE_HEAD" width="28" height="13" viewBox="0 0 28 13"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 12.5L14 0.264706L27 12.5" stroke="#0C0C0C" stroke-width="0.25"/>
                                </svg>
                            </button>

                            <div class="cd-abt--div__TABLE_BODY">
                                <div class="cd-abt--div__TABLE_ITEM">
                                    <p class="cd-abt--p__TABLE_ITEM_NAME">
                                        Видео интерфейс
                                    </p>
                                    <ul class="cd-abt--ul__TABLE_ITEM_TEXT">
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        1 x HDMI 2.1;
                                                    </span>
                                        </li>
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        1080p@120Гц и 4096x2304@60Гц Mali-G610
                                                    </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cd-abt--div__TABLE_ITEM">
                                    <p class="cd-abt--p__TABLE_ITEM_NAME">
                                        Модуль расширения
                                    </p>
                                    <ul class="cd-abt--ul__TABLE_ITEM_TEXT">
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        Слот 1 (mPCIe): USB 2.0, PCIе x 1, SPI, I2C, SIM1 или SIM2;
                                                    </span>
                                        </li>
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        Слот 2 (mPCIe): USB 2.0, PCIе x 1, I2C, SIM2;
                                                    </span>
                                        </li>
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        Слот 3 (M.2 2280): PCIе x 1, SATA, USB 2.0;
                                                    </span>
                                        </li>
                                        <li class="cd-abt--li__TABLE_ITEM_TEXT">
                                            <div class="cd-abt--div__POINT"></div>
                                            <span class="cd-abt--span__TABLE_ITEM_TEXT">
                                                        2 х внутренних слота расширения сетевых интерфейсов: 2xPCIe x1 Lane,
                                                        2 x USB2.0, 1 x UART 4 pin, 1 x SPI, 1 x I2C; 1xPCIe x1 Lane, 2 x USB2.0,
                                                        1 x UART 4 pin, 1 x SPI, 1 x I2C, 1 x I2S
                                                    </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="cd-abt--div__SWIPER2_SLIDE swiper-slide">
                    <div class="cd-abt--div__SCHEMES">
                        <div class="cd-abt--div__SWIPER3 swiper">
                            <div class="cd-abt--div__SWIPER3_WRAPPER swiper-wrapper">
                                <div class="cd-abt--div__SWIPER3_SLIDE swiper-slide">
                                    <button class="cd-abt--button__SCHEMES">
                                        Система шлюзов <br>для банкоматов, постаматов
                                    </button>
                                </div>
                                <div class="cd-abt--div__SWIPER3_SLIDE swiper-slide">
                                    <button class="cd-abt--button__SCHEMES">
                                        Система контроля доступа <br>и видеонаблюдения
                                    </button>
                                </div>
                                <div class="cd-abt--div__SWIPER3_SLIDE swiper-slide">
                                    <button class="cd-abt--button__SCHEMES">
                                        Система информационной <br>безопасности
                                    </button>
                                </div>
                                <div class="cd-abt--div__SWIPER3_SLIDE swiper-slide">
                                    <button class="cd-abt--button__SCHEMES">
                                        Система информационной <br>безопасности
                                    </button>
                                </div>
                                <div class="cd-abt--div__SWIPER3_SLIDE swiper-slide">
                                    <button class="cd-abt--button__SCHEMES">
                                        Система контроля доступа <br>и видеонаблюдения
                                    </button>
                                </div>
                                <div class="cd-abt--div__SWIPER3_LINE"></div>
                            </div>
                        </div>


                        <div class="cd-abt--div__SWIPER3_NAV">
                            <button class="cd-abt--button__SWIPER3_PREV">
                                <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121"
                                          stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </button>
                            <div class="cd-abt--div__SWIPER3_NAV_LINE"></div>
                            <button class="cd-abt--button__SWIPER3_NEXT">
                                <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121"
                                          stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </button>
                        </div>


                        <div class="cd-abt--div__SWIPER4 swiper">
                            <div class="cd-abt--div__SWIPER4_WRAPPER swiper-wrapper">
                                <div class="cd-abt--div__SWIPER4_SLIDE swiper-slide">
                                    <div class="cd-abt--div__SWIPER4_IMAGE">
                                        <img src="images/home/menu/Аппаратные-платформы.png" alt="">
                                    </div>
                                </div>
                                <div class="cd-abt--div__SWIPER4_SLIDE swiper-slide">
                                    <div class="cd-abt--div__SWIPER4_IMAGE">
                                        <img src="images/home/menu/АСУ-ТП.png" alt="">
                                    </div>
                                </div>
                                <div class="cd-abt--div__SWIPER4_SLIDE swiper-slide">
                                    <div class="cd-abt--div__SWIPER4_IMAGE">
                                        <img src="images/home/menu/АСУНО.png" alt="">
                                    </div>
                                </div>
                                <div class="cd-abt--div__SWIPER4_SLIDE swiper-slide">
                                    <div class="cd-abt--div__SWIPER4_IMAGE">
                                        <img src="images/home/menu/Вычислительные-системы.png" alt="">
                                    </div>
                                </div>
                                <div class="cd-abt--div__SWIPER4_SLIDE swiper-slide">
                                    <div class="cd-abt--div__SWIPER4_IMAGE">
                                        <img src="images/home/menu/Контроль-и-мониторинг.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="cd-abt--div__SWIPER2_SLIDE swiper-slide">
                    4
                </div>
            </div>
        </div>


        <div class="cdn-abt--div__GATHER __C-SCRL RIGHT">
            <h3 class="cdn-abt--h3">
                Собери свою конфигурацию
            </h3>
            <p class="cdn-abt--p__GATHER">
                Вы можете выбрать необходиме опции
                и собрать конфигурацию в соответствии
                с вашими задачами на странице серии продукта
            </p>
            <a class="cdn-abt--a__GATHER" href="#">
                ПЕРЕЙТИ
            </a>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ MAT ********** ---------- -->


<section class="cd-mat">
    <div class="cd-mat--div__CONT C-CONTAINER">
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


        <form class="c-common--form__SUBMENU cd-mat--form__SUBMENU __C-SCRL LEFT" action="#" method="" name="">
            <label class="cd-mat--label__SUBMENU">
                <input class="cd-mat--input__SUBMENU" type="radio" name="1" value="">
                <span class="cd-mat--span__SUBMENU">
                            Все
                        </span>
            </label>
            <label class="cd-mat--label__SUBMENU">
                <input class="cd-mat--input__SUBMENU" type="radio" name="1" value="">
                <span class="cd-mat--span__SUBMENU">
                            Буклеты
                        </span>
            </label>
            <label class="cd-mat--label__SUBMENU">
                <input class="cd-mat--input__SUBMENU" type="radio" name="1" value="">
                <span class="cd-mat--span__SUBMENU">
                            Руководства
                        </span>
            </label>
            <label class="cd-mat--label__SUBMENU">
                <input class="cd-mat--input__SUBMENU" type="radio" name="1" value="">
                <span class="cd-mat--span__SUBMENU">
                            Документы
                        </span>
            </label>
            <label class="cd-mat--label__SUBMENU">
                <input class="cd-mat--input__SUBMENU" type="radio" name="1" value="">
                <span class="cd-mat--span__SUBMENU">
                            Сертификаты
                        </span>
            </label>
            <label class="cd-mat--label__SUBMENU">
                <input class="cd-mat--input__SUBMENU" type="radio" name="1" value="">
                <span class="cd-mat--span__SUBMENU">
                            Презентации
                        </span>
            </label>
        </form>
        <div class="cd-mat--div__LINE1 __C-SCRL LEFT">
            <div class="cd-mat--div__LINE2"></div>
        </div>


        <div class="cd-mat--div__CARDS __C-SCRL DOWN">
            <a class="cd-mat--a__CARD" href="#">
                <div class="cd-mat--div__CARD_IMAGES">
                    <svg class="cd-mat--svg__CARD_IMAGE_1" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    979 Акт проведения испытаний ПАК АТБ АТОМ1.3 и Аккорд-АМДЗ (GX5 ALT ФСТЭК UEFI)
                </p>
            </a>
            <a class="cd-mat--a__CARD" href="#">
                <div class="cd-mat--div__CARD_IMAGES">
                    <svg class="cd-mat--svg__CARD_IMAGE_1" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    979 Акт проведения испытаний ПАК АТБ АТОМ1.3 и Аккорд-АМДЗ (GX5 ALT ФСТЭК UEFI)
                </p>
            </a>
            <a class="cd-mat--a__CARD" href="#">
                <div class="cd-mat--div__CARD_IMAGES">
                    <svg class="cd-mat--svg__CARD_IMAGE_1" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    979 Акт проведения испытаний ПАК АТБ АТОМ1.3 и Аккорд-АМДЗ (GX5 ALT ФСТЭК UEFI)
                </p>
            </a>
            <a class="cd-mat--a__CARD" href="#">
                <div class="cd-mat--div__CARD_IMAGES">
                    <svg class="cd-mat--svg__CARD_IMAGE_1" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    Декларация о соответствии АТОМ-1
                </p>
            </a>
            <a class="cd-mat--a__CARD" href="#">
                <div class="cd-mat--div__CARD_IMAGES">
                    <svg class="cd-mat--svg__CARD_IMAGE_1" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    Декларация о соответствии АТОМ-1
                </p>
            </a>
            <a class="cd-mat--a__CARD" href="#">
                <div class="cd-mat--div__CARD_IMAGES">
                    <svg class="cd-mat--svg__CARD_IMAGE_1" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    979 Акт проведения испытаний ПАК АТБ АТОМ1.3 и Аккорд-АМДЗ (GX5 ALT ФСТЭК UEFI)
                </p>
            </a>
            <a class="cd-mat--a__CARD" href="#">
                <div class="cd-mat--div__CARD_IMAGES">
                    <svg class="cd-mat--svg__CARD_IMAGE_1" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    979 Акт проведения испытаний ПАК АТБ АТОМ1.3 и Аккорд-АМДЗ (GX5 ALT ФСТЭК UEFI)
                </p>
            </a>
            <a class="cd-mat--a__CARD" href="#">
                <div class="cd-mat--div__CARD_IMAGES">
                    <svg class="cd-mat--svg__CARD_IMAGE_1" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    979 Акт проведения испытаний ПАК АТБ АТОМ1.3 и Аккорд-АМДЗ (GX5 ALT ФСТЭК UEFI)
                </p>
            </a>
            <a class="cd-mat--a__CARD" href="#">
                <div class="cd-mat--div__CARD_IMAGES">
                    <svg class="cd-mat--svg__CARD_IMAGE_1" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    Декларация о соответствии АТОМ-1
                </p>
            </a>
            <a class="cd-mat--a__CARD" href="#">
                <div class="cd-mat--div__CARD_IMAGES">
                    <svg class="cd-mat--svg__CARD_IMAGE_1" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
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
                    Декларация о соответствии АТОМ-1
                </p>
            </a>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ REG ********** ---------- -->


<section class="cd-reg">
    <div class="cd-reg--div__CONT C-CONTAINER">
        <div class="c-common--div__HEAD">
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                Записи в реестре
            </h2>
        </div>


        <a class="cd-reg--a__TOP __C-SCRL DOWN" href="#">
            <p class="cd-reg--p__TOP">
                Единый реестр радиоэлектронной продукции (ПП РФ №878 от 10.07.2019)
            </p>
            <img class="cd-reg--img__TOP" src="images/home/hm-cat_icon.svg" alt="ГИСП">
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


            <div class="cd-reg--div__TABLE_NAME">
                <svg class="cd-reg--svg__TABLE_NAME" width="35" height="41" viewBox="0 0 35 41" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M34.76 10.1842L17.58 0.454201C17.58 0.454201 17.5 0.434201 17.46 0.454201L0.06 10.2842C0.06 10.2842 0 10.3442 0 10.3942V30.3742C0 30.3742 0.02 30.4642 0.06 30.4842L17.45 40.4242C17.45 40.4242 17.49 40.4442 17.51 40.4442C17.53 40.4442 17.55 40.4442 17.57 40.4242L34.75 30.4842C34.75 30.4842 34.81 30.4242 34.81 30.3742V10.2842C34.81 10.2842 34.79 10.1942 34.75 10.1742L34.76 10.1842ZM17.52 0.704201L34.46 10.2942L29.11 13.4542L12.24 3.6842L17.52 0.704201ZM17.52 20.2942L0.37 10.3942L6.21 7.0942L23.11 16.9942L17.51 20.2942H17.52ZM23.36 16.8442L6.46 6.9542L11.99 3.8242L28.86 13.5942L23.36 16.8442ZM23.48 17.0542L28.98 13.8042V23.9942L26.14 23.2042C26.14 23.2042 26.05 23.2042 26.02 23.2342L23.48 25.9042V17.0442V17.0542ZM0.25 10.6042L17.39 20.5042V40.0942L0.25 30.3042V10.6042ZM17.64 40.0942V20.5042L23.23 17.2042V26.2342C23.23 26.2842 23.26 26.3342 23.31 26.3542C23.32 26.3542 23.34 26.3542 23.36 26.3542C23.39 26.3542 23.43 26.3442 23.45 26.3142L26.15 23.4742L29.08 24.2842C29.08 24.2842 29.16 24.2842 29.19 24.2642C29.22 24.2442 29.24 24.2042 29.24 24.1642V13.6642L34.59 10.5042V30.2942L17.65 40.0842L17.64 40.0942Z"
                        fill="#0C0C0C"/>
                    <path d="M8.77868 30.264L8.65527 30.4814L15.0386 34.1047L15.162 33.8873L8.77868 30.264Z"
                          fill="#0C0C0C"/>
                </svg>
                <p class="cd-reg--p__TABLE_NAME">
                    Мини-компьютер АТБ-АТОМ-1.3
                </p>
            </div>

            <p class="cd-reg--p__TABLE_NUMBER">
                <span class="cd-reg--span__TABLE_NUMBER_TOP">Номер в реестре:</span>
                <span class="cd-reg--span__TABLE_NUMBER1">10668594</span>
                от
                <span class="cd-reg--span__TABLE_NUMBER2">29.07.2025</span>
            </p>

            <a class="cd-reg--a__TABLE_PDF" href="#" download>
                <img class="cd-reg--img__TABLE_PDF" src="images/card/cd-cnf_pdf.svg" alt="pdf">
                <span>Выписка</span>
            </a>

            <a class="cd-reg--a__TABLE_GISP" href="#">
                <span>НА САЙТЕ ГИСП</span>
                <span>ПЕРЕЙТИ</span>
                <svg width="29" height="23" viewBox="0 0 29 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 11.3457H28M28 11.3457L17.5 0.845703M28 11.3457L17.5 21.8457" stroke="#005792"
                          stroke-width="0.5"/>
                </svg>
            </a>

            <div class="cd-reg--div__TABLE_LINE"></div>


            <div class="cd-reg--div__TABLE_NAME">
                <svg class="cd-reg--svg__TABLE_NAME" width="35" height="41" viewBox="0 0 35 41" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M34.76 10.1842L17.58 0.454201C17.58 0.454201 17.5 0.434201 17.46 0.454201L0.06 10.2842C0.06 10.2842 0 10.3442 0 10.3942V30.3742C0 30.3742 0.02 30.4642 0.06 30.4842L17.45 40.4242C17.45 40.4242 17.49 40.4442 17.51 40.4442C17.53 40.4442 17.55 40.4442 17.57 40.4242L34.75 30.4842C34.75 30.4842 34.81 30.4242 34.81 30.3742V10.2842C34.81 10.2842 34.79 10.1942 34.75 10.1742L34.76 10.1842ZM17.52 0.704201L34.46 10.2942L29.11 13.4542L12.24 3.6842L17.52 0.704201ZM17.52 20.2942L0.37 10.3942L6.21 7.0942L23.11 16.9942L17.51 20.2942H17.52ZM23.36 16.8442L6.46 6.9542L11.99 3.8242L28.86 13.5942L23.36 16.8442ZM23.48 17.0542L28.98 13.8042V23.9942L26.14 23.2042C26.14 23.2042 26.05 23.2042 26.02 23.2342L23.48 25.9042V17.0442V17.0542ZM0.25 10.6042L17.39 20.5042V40.0942L0.25 30.3042V10.6042ZM17.64 40.0942V20.5042L23.23 17.2042V26.2342C23.23 26.2842 23.26 26.3342 23.31 26.3542C23.32 26.3542 23.34 26.3542 23.36 26.3542C23.39 26.3542 23.43 26.3442 23.45 26.3142L26.15 23.4742L29.08 24.2842C29.08 24.2842 29.16 24.2842 29.19 24.2642C29.22 24.2442 29.24 24.2042 29.24 24.1642V13.6642L34.59 10.5042V30.2942L17.65 40.0842L17.64 40.0942Z"
                        fill="#0C0C0C"/>
                    <path d="M8.77868 30.264L8.65527 30.4814L15.0386 34.1047L15.162 33.8873L8.77868 30.264Z"
                          fill="#0C0C0C"/>
                </svg>
                <p class="cd-reg--p__TABLE_NAME">
                    Мини-компьютер АТБ-АТОМ-1.3
                </p>
            </div>

            <p class="cd-reg--p__TABLE_NUMBER">
                <span class="cd-reg--span__TABLE_NUMBER_TOP">Номер в реестре:</span>
                <span class="cd-reg--span__TABLE_NUMBER1">10668594</span>
                от
                <span class="cd-reg--span__TABLE_NUMBER2">29.07.2025</span>
            </p>

            <a class="cd-reg--a__TABLE_PDF" href="#" download>
                <img class="cd-reg--img__TABLE_PDF" src="images/card/cd-cnf_pdf.svg" alt="pdf">
                <span>Выписка</span>
            </a>

            <a class="cd-reg--a__TABLE_GISP" href="#">
                <span>НА САЙТЕ ГИСП</span>
                <span>ПЕРЕЙТИ</span>
                <svg width="29" height="23" viewBox="0 0 29 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 11.3457H28M28 11.3457L17.5 0.845703M28 11.3457L17.5 21.8457" stroke="#005792"
                          stroke-width="0.5"/>
                </svg>
            </a>

            <div class="cd-reg--div__TABLE_LINE"></div>


            <div class="cd-reg--div__TABLE_NAME">
                <svg class="cd-reg--svg__TABLE_NAME" width="35" height="41" viewBox="0 0 35 41" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M34.76 10.1842L17.58 0.454201C17.58 0.454201 17.5 0.434201 17.46 0.454201L0.06 10.2842C0.06 10.2842 0 10.3442 0 10.3942V30.3742C0 30.3742 0.02 30.4642 0.06 30.4842L17.45 40.4242C17.45 40.4242 17.49 40.4442 17.51 40.4442C17.53 40.4442 17.55 40.4442 17.57 40.4242L34.75 30.4842C34.75 30.4842 34.81 30.4242 34.81 30.3742V10.2842C34.81 10.2842 34.79 10.1942 34.75 10.1742L34.76 10.1842ZM17.52 0.704201L34.46 10.2942L29.11 13.4542L12.24 3.6842L17.52 0.704201ZM17.52 20.2942L0.37 10.3942L6.21 7.0942L23.11 16.9942L17.51 20.2942H17.52ZM23.36 16.8442L6.46 6.9542L11.99 3.8242L28.86 13.5942L23.36 16.8442ZM23.48 17.0542L28.98 13.8042V23.9942L26.14 23.2042C26.14 23.2042 26.05 23.2042 26.02 23.2342L23.48 25.9042V17.0442V17.0542ZM0.25 10.6042L17.39 20.5042V40.0942L0.25 30.3042V10.6042ZM17.64 40.0942V20.5042L23.23 17.2042V26.2342C23.23 26.2842 23.26 26.3342 23.31 26.3542C23.32 26.3542 23.34 26.3542 23.36 26.3542C23.39 26.3542 23.43 26.3442 23.45 26.3142L26.15 23.4742L29.08 24.2842C29.08 24.2842 29.16 24.2842 29.19 24.2642C29.22 24.2442 29.24 24.2042 29.24 24.1642V13.6642L34.59 10.5042V30.2942L17.65 40.0842L17.64 40.0942Z"
                        fill="#0C0C0C"/>
                    <path d="M8.77868 30.264L8.65527 30.4814L15.0386 34.1047L15.162 33.8873L8.77868 30.264Z"
                          fill="#0C0C0C"/>
                </svg>
                <p class="cd-reg--p__TABLE_NAME">
                    Мини-компьютер АТБ-АТОМ-1.3
                </p>
            </div>

            <p class="cd-reg--p__TABLE_NUMBER">
                <span class="cd-reg--span__TABLE_NUMBER_TOP">Номер в реестре:</span>
                <span class="cd-reg--span__TABLE_NUMBER1">10668594</span>
                от
                <span class="cd-reg--span__TABLE_NUMBER2">29.07.2025</span>
            </p>

            <a class="cd-reg--a__TABLE_PDF" href="#" download>
                <img class="cd-reg--img__TABLE_PDF" src="images/card/cd-cnf_pdf.svg" alt="pdf">
                <span>Выписка</span>
            </a>

            <a class="cd-reg--a__TABLE_GISP" href="#">
                <span>НА САЙТЕ ГИСП</span>
                <span>ПЕРЕЙТИ</span>
                <svg width="29" height="23" viewBox="0 0 29 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 11.3457H28M28 11.3457L17.5 0.845703M28 11.3457L17.5 21.8457" stroke="#005792"
                          stroke-width="0.5"/>
                </svg>
            </a>

            <div class="cd-reg--div__TABLE_LINE"></div>
        </div>


        <a class="c-common--a__ALL __C-SCRL DOWN" href="#">
            ПОКАЗАТЬ ВСЕ
        </a>


        <div class="cdn-reg--div__REQUEST">
            <div class="cdn-reg--div__IMAGE __C-SCRL LEFT">
                <img class="cdn-reg--img__IMAGE" src="images/home/menu/Аппаратные-платформы.png" alt="">
            </div>
            <div class="cdn-reg--div__TEXT __C-SCRL RIGHT">
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
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ REC ********** ---------- -->


<section class="cd-rec" id="cd-rec">
    <div class="cd-rec--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Рекомендуем
        </h2>


        <p class="cd-rec--p__TOP __C-SCRL DOWN">
            Вас могут заинтересовать следующие товары
        </p>


        <div class="cd-rec--div__SWIPER swiper __C-SCRL DOWN">
            <div class="cd-rec--div__SWIPER_WRAPPER swiper-wrapper">
                <div class="cd-rec--div__SWIPER_SLIDE swiper-slide">
                    <article class="hm-cat--article__CARD" href="#">
                        <div class="hm-cat--div__CARD_IMAGE">
                            <div class="hm-cat--div__SWIPER swiper">
                                <div class="hm-cat--div__SWIPER_WRAPPER swiper-wrapper">
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_1.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_2.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_3.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_4.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_5.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="hm-cat--div__SWIPER_PAGINATION swiper-pagination"></div>
                            </div>


                            <div class="hm-cat--div__CARD_SENSOR"></div>


                            <a class="hm-cat--a__CARD_TAG" href="#">
                                В реестре
                            </a>
                            <div class="hm-cat--div__CARD_BTNS">
                                <button class="hm-cat--button__CARD_COMPARISON">
                                    <svg class="hm-cat--svg__CARD_COMPARISON" width="23" height="28" viewBox="0 0 23 28"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"/>
                                        <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"/>
                                        <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"/>
                                    </svg>
                                </button>

                                <button class="hm-cat--button__CARD_FAVOURITES">
                                    <svg class="hm-cat--svg__CARD_FAVOURITES" width="28" height="28" viewBox="0 0 28 28"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                            fill="#BFBFBF"/>
                                    </svg>
                                </button>
                            </div>
                            <img class="hm-cat--img__CARD_GISP" src="images/home/hm-cat_icon.svg" alt="ГИСП">
                        </div>

                        <a class="hm-cat--a__CARD_NAME" href="#">
                            <p class="hm-cat--p__CARD_NAME1">
                                АТБ-АТОМ-1.3
                            </p>
                            <p class="hm-cat--p__CARD_NAME2">
                                Сетевая вычислительная платформа
                            </p>
                        </a>

                        <p class="hm-cat--p__CARD_TEXT">
                            Является сетевой вычислительной платформой,
                            вклюоный рер российскиный реестр российскиный
                            реестр российскиный рапавпвпаррор вашщшщестр российск
                        </p>
                        <ul class="hm-cat--ul__CARD_PARAMS">
                            <li class="hm-cat--li__CARD_PARAM">
                                RK3568, 4 х Cortex-A55, 2.0 ГГц
                            </li>
                            <li class="hm-cat--li__CARD_PARAM">
                                LPDDR4 non-ECC, от 4 до 8 Гб
                            </li>
                            <li class="hm-cat--li__CARD_PARAM">
                                3 x Ethernet 1G/100M RJ45
                            </li>
                        </ul>
                        <div class="hm-cat--div__CARD_PRICE">
                            <p class="hm-cat--p__CARD_PRICE_CUR">
                                        <span class="hm-cat--span__CARD_PRICE_CUR">
                                            100000
                                        </span>
                                <span class="hm-cat--span__CARD_PRICE_CUR">
                                            ₽
                                        </span>
                            </p>
                            <p class="hm-cat--p__CARD_PRICE_OLD">
                                        <span class="hm-cat--span__CARD_PRICE_OLD">
                                            250000
                                        </span>
                                <span class="hm-cat--span__CARD_PRICE_OLD">
                                            ₽
                                        </span>
                            </p>
                            <button class="hm-cat--button__CARD_PRICE">
                                %
                            </button>
                        </div>
                        <a class="hm-cat--a__CARD" href="#">
                            <span>ПОДРОБНЕЕ</span>
                            <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.166992 11H27.667M27.667 11L17.167 0.5M27.667 11L17.167 21.5"
                                      stroke="#C82121" stroke-width="0.25"/>
                            </svg>
                        </a>
                    </article>
                </div>


                <div class="cd-rec--div__SWIPER_SLIDE swiper-slide">
                    <article class="hm-cat--article__CARD" href="#">
                        <div class="hm-cat--div__CARD_IMAGE">
                            <div class="hm-cat--div__SWIPER swiper">
                                <div class="hm-cat--div__SWIPER_WRAPPER swiper-wrapper">
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_1.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_2.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_3.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_4.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_5.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="hm-cat--div__SWIPER_PAGINATION swiper-pagination"></div>
                            </div>


                            <div class="hm-cat--div__CARD_SENSOR"></div>


                            <a class="hm-cat--a__CARD_TAG" href="#">
                                В реестре
                            </a>
                            <div class="hm-cat--div__CARD_BTNS">
                                <button class="hm-cat--button__CARD_COMPARISON">
                                    <svg class="hm-cat--svg__CARD_COMPARISON" width="23" height="28" viewBox="0 0 23 28"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"/>
                                        <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"/>
                                        <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"/>
                                    </svg>
                                </button>

                                <button class="hm-cat--button__CARD_FAVOURITES">
                                    <svg class="hm-cat--svg__CARD_FAVOURITES" width="28" height="28" viewBox="0 0 28 28"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                            fill="#BFBFBF"/>
                                    </svg>
                                </button>
                            </div>
                            <img class="hm-cat--img__CARD_GISP" src="images/home/hm-cat_icon.svg" alt="ГИСП">
                        </div>

                        <a class="hm-cat--a__CARD_NAME" href="#">
                            <p class="hm-cat--p__CARD_NAME1">
                                АТБ-АТОМ-1.3
                            </p>
                            <p class="hm-cat--p__CARD_NAME2">
                                Сетевая вычислительная платформа
                            </p>
                        </a>

                        <p class="hm-cat--p__CARD_TEXT">
                            Является сетевой вычислительной платформой,
                            вклюоный рер российскиный реестр российскиный
                            реестр российскиный рапавпвпаррор вашщшщестр российск
                        </p>
                        <ul class="hm-cat--ul__CARD_PARAMS">
                            <li class="hm-cat--li__CARD_PARAM">
                                RK3568, 4 х Cortex-A55, 2.0 ГГц
                            </li>
                            <li class="hm-cat--li__CARD_PARAM">
                                LPDDR4 non-ECC, от 4 до 8 Гб
                            </li>
                            <li class="hm-cat--li__CARD_PARAM">
                                3 x Ethernet 1G/100M RJ45
                            </li>
                        </ul>
                        <div class="hm-cat--div__CARD_PRICE">
                            <p class="hm-cat--p__CARD_PRICE_CUR">
                                        <span class="hm-cat--span__CARD_PRICE_CUR">
                                            100000
                                        </span>
                                <span class="hm-cat--span__CARD_PRICE_CUR">
                                            ₽
                                        </span>
                            </p>
                            <p class="hm-cat--p__CARD_PRICE_OLD">
                                        <span class="hm-cat--span__CARD_PRICE_OLD">
                                            250000
                                        </span>
                                <span class="hm-cat--span__CARD_PRICE_OLD">
                                            ₽
                                        </span>
                            </p>
                            <button class="hm-cat--button__CARD_PRICE">
                                %
                            </button>
                        </div>
                        <a class="hm-cat--a__CARD" href="#">
                            <span>ПОДРОБНЕЕ</span>
                            <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.166992 11H27.667M27.667 11L17.167 0.5M27.667 11L17.167 21.5"
                                      stroke="#C82121" stroke-width="0.25"/>
                            </svg>
                        </a>
                    </article>
                </div>


                <div class="cd-rec--div__SWIPER_SLIDE swiper-slide">
                    <article class="hm-cat--article__CARD" href="#">
                        <div class="hm-cat--div__CARD_IMAGE">
                            <div class="hm-cat--div__SWIPER swiper">
                                <div class="hm-cat--div__SWIPER_WRAPPER swiper-wrapper">
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_1.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_2.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_3.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_4.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_5.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="hm-cat--div__SWIPER_PAGINATION swiper-pagination"></div>
                            </div>


                            <div class="hm-cat--div__CARD_SENSOR"></div>


                            <a class="hm-cat--a__CARD_TAG" href="#">
                                В реестре
                            </a>
                            <div class="hm-cat--div__CARD_BTNS">
                                <button class="hm-cat--button__CARD_COMPARISON">
                                    <svg class="hm-cat--svg__CARD_COMPARISON" width="23" height="28" viewBox="0 0 23 28"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"/>
                                        <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"/>
                                        <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"/>
                                    </svg>
                                </button>

                                <button class="hm-cat--button__CARD_FAVOURITES">
                                    <svg class="hm-cat--svg__CARD_FAVOURITES" width="28" height="28" viewBox="0 0 28 28"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                            fill="#BFBFBF"/>
                                    </svg>
                                </button>
                            </div>
                            <img class="hm-cat--img__CARD_GISP" src="images/home/hm-cat_icon.svg" alt="ГИСП">
                        </div>

                        <a class="hm-cat--a__CARD_NAME" href="#">
                            <p class="hm-cat--p__CARD_NAME1">
                                АТБ-АТОМ-1.3
                            </p>
                            <p class="hm-cat--p__CARD_NAME2">
                                Сетевая вычислительная платформа
                            </p>
                        </a>

                        <p class="hm-cat--p__CARD_TEXT">
                            Является сетевой вычислительной платформой,
                            вклюоный рер российскиный реестр российскиный
                            реестр российскиный рапавпвпаррор вашщшщестр российск
                        </p>
                        <ul class="hm-cat--ul__CARD_PARAMS">
                            <li class="hm-cat--li__CARD_PARAM">
                                RK3568, 4 х Cortex-A55, 2.0 ГГц
                            </li>
                            <li class="hm-cat--li__CARD_PARAM">
                                LPDDR4 non-ECC, от 4 до 8 Гб
                            </li>
                            <li class="hm-cat--li__CARD_PARAM">
                                3 x Ethernet 1G/100M RJ45
                            </li>
                        </ul>
                        <div class="hm-cat--div__CARD_PRICE">
                            <p class="hm-cat--p__CARD_PRICE_CUR">
                                        <span class="hm-cat--span__CARD_PRICE_CUR">
                                            100000
                                        </span>
                                <span class="hm-cat--span__CARD_PRICE_CUR">
                                            ₽
                                        </span>
                            </p>
                            <p class="hm-cat--p__CARD_PRICE_OLD">
                                        <span class="hm-cat--span__CARD_PRICE_OLD">
                                            250000
                                        </span>
                                <span class="hm-cat--span__CARD_PRICE_OLD">
                                            ₽
                                        </span>
                            </p>
                            <button class="hm-cat--button__CARD_PRICE">
                                %
                            </button>
                        </div>
                        <a class="hm-cat--a__CARD" href="#">
                            <span>ПОДРОБНЕЕ</span>
                            <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.166992 11H27.667M27.667 11L17.167 0.5M27.667 11L17.167 21.5"
                                      stroke="#C82121" stroke-width="0.25"/>
                            </svg>
                        </a>
                    </article>
                </div>


                <div class="cd-rec--div__SWIPER_SLIDE swiper-slide">
                    <article class="hm-cat--article__CARD" href="#">
                        <div class="hm-cat--div__CARD_IMAGE">
                            <div class="hm-cat--div__SWIPER swiper">
                                <div class="hm-cat--div__SWIPER_WRAPPER swiper-wrapper">
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_1.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_2.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_3.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_4.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_5.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="hm-cat--div__SWIPER_PAGINATION swiper-pagination"></div>
                            </div>


                            <div class="hm-cat--div__CARD_SENSOR"></div>


                            <a class="hm-cat--a__CARD_TAG" href="#">
                                В реестре
                            </a>
                            <div class="hm-cat--div__CARD_BTNS">
                                <button class="hm-cat--button__CARD_COMPARISON">
                                    <svg class="hm-cat--svg__CARD_COMPARISON" width="23" height="28" viewBox="0 0 23 28"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"/>
                                        <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"/>
                                        <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"/>
                                    </svg>
                                </button>

                                <button class="hm-cat--button__CARD_FAVOURITES">
                                    <svg class="hm-cat--svg__CARD_FAVOURITES" width="28" height="28" viewBox="0 0 28 28"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                            fill="#BFBFBF"/>
                                    </svg>
                                </button>
                            </div>
                            <img class="hm-cat--img__CARD_GISP" src="images/home/hm-cat_icon.svg" alt="ГИСП">
                        </div>

                        <a class="hm-cat--a__CARD_NAME" href="#">
                            <p class="hm-cat--p__CARD_NAME1">
                                АТБ-АТОМ-1.3
                            </p>
                            <p class="hm-cat--p__CARD_NAME2">
                                Сетевая вычислительная платформа
                            </p>
                        </a>

                        <p class="hm-cat--p__CARD_TEXT">
                            Является сетевой вычислительной платформой,
                            вклюоный рер российскиный реестр российскиный
                            реестр российскиный рапавпвпаррор вашщшщестр российск
                        </p>
                        <ul class="hm-cat--ul__CARD_PARAMS">
                            <li class="hm-cat--li__CARD_PARAM">
                                RK3568, 4 х Cortex-A55, 2.0 ГГц
                            </li>
                            <li class="hm-cat--li__CARD_PARAM">
                                LPDDR4 non-ECC, от 4 до 8 Гб
                            </li>
                            <li class="hm-cat--li__CARD_PARAM">
                                3 x Ethernet 1G/100M RJ45
                            </li>
                        </ul>
                        <div class="hm-cat--div__CARD_PRICE">
                            <p class="hm-cat--p__CARD_PRICE_CUR">
                                        <span class="hm-cat--span__CARD_PRICE_CUR">
                                            100000
                                        </span>
                                <span class="hm-cat--span__CARD_PRICE_CUR">
                                            ₽
                                        </span>
                            </p>
                            <p class="hm-cat--p__CARD_PRICE_OLD">
                                        <span class="hm-cat--span__CARD_PRICE_OLD">
                                            250000
                                        </span>
                                <span class="hm-cat--span__CARD_PRICE_OLD">
                                            ₽
                                        </span>
                            </p>
                            <button class="hm-cat--button__CARD_PRICE">
                                %
                            </button>
                        </div>
                        <a class="hm-cat--a__CARD" href="#">
                            <span>ПОДРОБНЕЕ</span>
                            <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.166992 11H27.667M27.667 11L17.167 0.5M27.667 11L17.167 21.5"
                                      stroke="#C82121" stroke-width="0.25"/>
                            </svg>
                        </a>
                    </article>
                </div>


                <div class="cd-rec--div__SWIPER_SLIDE swiper-slide">
                    <article class="hm-cat--article__CARD" href="#">
                        <div class="hm-cat--div__CARD_IMAGE">
                            <div class="hm-cat--div__SWIPER swiper">
                                <div class="hm-cat--div__SWIPER_WRAPPER swiper-wrapper">
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_1.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_2.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_3.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_4.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_5.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="hm-cat--div__SWIPER_PAGINATION swiper-pagination"></div>
                            </div>


                            <div class="hm-cat--div__CARD_SENSOR"></div>


                            <a class="hm-cat--a__CARD_TAG" href="#">
                                В реестре
                            </a>
                            <div class="hm-cat--div__CARD_BTNS">
                                <button class="hm-cat--button__CARD_COMPARISON">
                                    <svg class="hm-cat--svg__CARD_COMPARISON" width="23" height="28" viewBox="0 0 23 28"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"/>
                                        <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"/>
                                        <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"/>
                                    </svg>
                                </button>

                                <button class="hm-cat--button__CARD_FAVOURITES">
                                    <svg class="hm-cat--svg__CARD_FAVOURITES" width="28" height="28" viewBox="0 0 28 28"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                            fill="#BFBFBF"/>
                                    </svg>
                                </button>
                            </div>
                            <img class="hm-cat--img__CARD_GISP" src="images/home/hm-cat_icon.svg" alt="ГИСП">
                        </div>

                        <a class="hm-cat--a__CARD_NAME" href="#">
                            <p class="hm-cat--p__CARD_NAME1">
                                АТБ-АТОМ-1.3
                            </p>
                            <p class="hm-cat--p__CARD_NAME2">
                                Сетевая вычислительная платформа
                            </p>
                        </a>

                        <p class="hm-cat--p__CARD_TEXT">
                            Является сетевой вычислительной платформой,
                            вклюоный рер российскиный реестр российскиный
                            реестр российскиный рапавпвпаррор вашщшщестр российск
                        </p>
                        <ul class="hm-cat--ul__CARD_PARAMS">
                            <li class="hm-cat--li__CARD_PARAM">
                                RK3568, 4 х Cortex-A55, 2.0 ГГц
                            </li>
                            <li class="hm-cat--li__CARD_PARAM">
                                LPDDR4 non-ECC, от 4 до 8 Гб
                            </li>
                            <li class="hm-cat--li__CARD_PARAM">
                                3 x Ethernet 1G/100M RJ45
                            </li>
                        </ul>
                        <div class="hm-cat--div__CARD_PRICE">
                            <p class="hm-cat--p__CARD_PRICE_CUR">
                                        <span class="hm-cat--span__CARD_PRICE_CUR">
                                            100000
                                        </span>
                                <span class="hm-cat--span__CARD_PRICE_CUR">
                                            ₽
                                        </span>
                            </p>
                            <p class="hm-cat--p__CARD_PRICE_OLD">
                                        <span class="hm-cat--span__CARD_PRICE_OLD">
                                            250000
                                        </span>
                                <span class="hm-cat--span__CARD_PRICE_OLD">
                                            ₽
                                        </span>
                            </p>
                            <button class="hm-cat--button__CARD_PRICE">
                                %
                            </button>
                        </div>
                        <a class="hm-cat--a__CARD" href="#">
                            <span>ПОДРОБНЕЕ</span>
                            <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.166992 11H27.667M27.667 11L17.167 0.5M27.667 11L17.167 21.5"
                                      stroke="#C82121" stroke-width="0.25"/>
                            </svg>
                        </a>
                    </article>
                </div>


                <div class="cd-rec--div__SWIPER_SLIDE swiper-slide">
                    <article class="hm-cat--article__CARD" href="#">
                        <div class="hm-cat--div__CARD_IMAGE">
                            <div class="hm-cat--div__SWIPER swiper">
                                <div class="hm-cat--div__SWIPER_WRAPPER swiper-wrapper">
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_1.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_2.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_3.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_4.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                        <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                            <img class="hm-cat--img__SWIPER_SLIDE"
                                                 src="images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_5.webp" alt=""
                                                 loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="hm-cat--div__SWIPER_PAGINATION swiper-pagination"></div>
                            </div>


                            <div class="hm-cat--div__CARD_SENSOR"></div>


                            <a class="hm-cat--a__CARD_TAG" href="#">
                                В реестре
                            </a>
                            <div class="hm-cat--div__CARD_BTNS">
                                <button class="hm-cat--button__CARD_COMPARISON">
                                    <svg class="hm-cat--svg__CARD_COMPARISON" width="23" height="28" viewBox="0 0 23 28"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"/>
                                        <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"/>
                                        <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"/>
                                    </svg>
                                </button>

                                <button class="hm-cat--button__CARD_FAVOURITES">
                                    <svg class="hm-cat--svg__CARD_FAVOURITES" width="28" height="28" viewBox="0 0 28 28"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                            fill="#BFBFBF"/>
                                        <path
                                            d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                            fill="#BFBFBF"/>
                                    </svg>
                                </button>
                            </div>
                            <img class="hm-cat--img__CARD_GISP" src="images/home/hm-cat_icon.svg" alt="ГИСП">
                        </div>

                        <a class="hm-cat--a__CARD_NAME" href="#">
                            <p class="hm-cat--p__CARD_NAME1">
                                АТБ-АТОМ-1.3
                            </p>
                            <p class="hm-cat--p__CARD_NAME2">
                                Сетевая вычислительная платформа
                            </p>
                        </a>

                        <p class="hm-cat--p__CARD_TEXT">
                            Является сетевой вычислительной платформой,
                            вклюоный рер российскиный реестр российскиный
                            реестр российскиный рапавпвпаррор вашщшщестр российск
                        </p>
                        <ul class="hm-cat--ul__CARD_PARAMS">
                            <li class="hm-cat--li__CARD_PARAM">
                                RK3568, 4 х Cortex-A55, 2.0 ГГц
                            </li>
                            <li class="hm-cat--li__CARD_PARAM">
                                LPDDR4 non-ECC, от 4 до 8 Гб
                            </li>
                            <li class="hm-cat--li__CARD_PARAM">
                                3 x Ethernet 1G/100M RJ45
                            </li>
                        </ul>
                        <div class="hm-cat--div__CARD_PRICE">
                            <p class="hm-cat--p__CARD_PRICE_CUR">
                                        <span class="hm-cat--span__CARD_PRICE_CUR">
                                            100000
                                        </span>
                                <span class="hm-cat--span__CARD_PRICE_CUR">
                                            ₽
                                        </span>
                            </p>
                            <p class="hm-cat--p__CARD_PRICE_OLD">
                                        <span class="hm-cat--span__CARD_PRICE_OLD">
                                            250000
                                        </span>
                                <span class="hm-cat--span__CARD_PRICE_OLD">
                                            ₽
                                        </span>
                            </p>
                            <button class="hm-cat--button__CARD_PRICE">
                                %
                            </button>
                        </div>
                        <a class="hm-cat--a__CARD" href="#">
                            <span>ПОДРОБНЕЕ</span>
                            <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.166992 11H27.667M27.667 11L17.167 0.5M27.667 11L17.167 21.5"
                                      stroke="#C82121" stroke-width="0.25"/>
                            </svg>
                        </a>
                    </article>
                </div>
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
    </div>
</section>



