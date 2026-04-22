<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<!-- ---------- ********** СЕКЦИЯ HERO ********** ---------- --> <section class="hrx-hero">
    <div class="hrx-hero--div__CONT C-CONTAINER">
        <?$APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                ".default",
                Array(
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                )
        );?>
        <div class="c-common--div__TABS __C-SCRL DOWN">
            <div class="c-common--div__TABS_TOP">
                <a class="c-common--a__TABS" href="/about/team/#hr-hero">
                    команда </a> <a class="c-common--a__TABS" href="/about/team/#hr-adv">
                    преимущества </a> <a class="c-common--a__TABS" href="/about/team/#hr-hst">
                    истории роста </a> <a class="c-common--a__TABS" href="/about/team/#hr-faq">
                    f.a.q. </a> <a class="c-common--a__TABS" href="/about/team/#hr-blog">
                    hr-блог </a> <a class="c-common--a__TABS _ACT _MARK" href="#hrx-vac">
                    вакансии </a>
                <div class="c-common--div__TABS_FRAME">
                </div>
            </div>
            <button class="c-common--button__TABS_LEFT"> </button> <button class="c-common--button__TABS_RIGHT"> </button>
        </div>
        <div class="hrx-hero--div__MAIN">
            <div class="hrx-hero--div__RIGHT">
                <h1 class="hrx-hero--h1 __C-SCRL RIGHT">
                    <? $APPLICATION->ShowTitle(false); ?> </h1>
                <p class="hrx-hero--p__TOP __C-SCRL DOWN">
                    Мы рады видеть в нашей команде ярких, творческих, грамотных и мотивированных профессионалов, готовых расти и развиваться вместе с компанией - ждём вас!
                </p>
            </div>
            <div class="hrx-hero--div__IMAGES __C-SCRL DOWN">
                <div class="hrx-hero--div__IMAGE_CONT">
                    <img src="/local/templates/main/assets/images/hr/hr-hero_4.jpg" class="hrx-hero--img__IMAGE" alt="" loading="lazy">
                </div>
                <div class="hrx-hero--div__IMAGE_ADD1">
                </div>
                <div class="hrx-hero--div__IMAGE_ADD2">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hrx-vac">
    <div class="hrx-vac--div__CONT C-CONTAINER">
        <div class="hrx-vac--div__MAIN">
            <?$APPLICATION->IncludeComponent(
                    "bitrix:catalog.filter",
                    "",
                    Array(
                            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                            "FILTER_NAME" => $arParams["FILTER_NAME"],
                            "FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
                            "PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
                            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                            "CACHE_TIME" => $arParams["CACHE_TIME"],
                            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                            "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                    ),
                    $component
            );
            ?>

            <div class="hrx-vac--div__RIGHT">
                <div class="hrx-vac--div__RESULT">

                    <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "",
                            Array(
                                    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                                    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                    "NEWS_COUNT" => $arParams["NEWS_COUNT"],
                                    "SORT_BY1" => $arParams["SORT_BY1"],
                                    "SORT_ORDER1" => $arParams["SORT_ORDER1"],
                                    "SORT_BY2" => $arParams["SORT_BY2"],
                                    "SORT_ORDER2" => $arParams["SORT_ORDER2"],
                                    "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
                                    "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
                                    "SET_TITLE" => $arParams["SET_TITLE"],
                                    "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                                    "MESSAGE_404" => $arParams["MESSAGE_404"],
                                    "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                                    "SHOW_404" => $arParams["SHOW_404"],
                                    "FILE_404" => $arParams["FILE_404"],
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
                                    "ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
                                    "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                                    "CACHE_TIME" => $arParams["CACHE_TIME"],
                                    "CACHE_FILTER" => $arParams["CACHE_FILTER"],
                                    "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                                    "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
                                    "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
                                    "PAGER_TITLE" => $arParams["PAGER_TITLE"],
                                    "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
                                    "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
                                    "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                                    "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
                                    "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
                                    "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
                                    "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                                    "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                                    "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                                    "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
                                    "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
                                    "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                                    "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                                    "FILTER_NAME" => $arParams["FILTER_NAME"],
                                    "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
                                    "CHECK_DATES" => $arParams["CHECK_DATES"],
                                    "STRICT_SECTION_CHECK" => $arParams["STRICT_SECTION_CHECK"],

                                    "PARENT_SECTION" => $arResult["VARIABLES"]["SECTION_ID"],
                                    "PARENT_SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
                                    "DETAIL_URL" => $arResult["FOLDER"].'#ELEMENT_CODE#/',
                                    "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                                    "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
                            ),
                            $component
                    );?>

                    <div class="hrx-vac--div__RESULT_0 __C-SCRL DOWN">
                        <p class="hrx-vac--p__RESULT_0_TOP">
                            Открытых вакансий сейчас нет
                        </p>
                        <p class="hrx-vac--p__RESULT_0_BODY">
                            Вы можете отправить нам ваше резюме
                            через форму обратной связи.
                        </p>
                    </div>
                </div>


                <div class="hrx-vac--div__REQUEST">
                    <div class="hrx-vac--div__IMAGES __C-SCRL DOWN">
                        <div class="hrx-vac--div__IMAGE_CONT">
                            <img class="hrx-vac--img__IMAGE" src="/local/templates/main/assets/images/hr/hr-hero_10.jpg" alt="" loading="lazy">
                        </div>
                        <div class="hrx-vac--div__IMAGE_ADD1"></div>
                        <div class="hrx-vac--div__IMAGE_ADD2"></div>
                    </div>
                    <div class="hrx-vac--div__TEXT __C-SCRL DOWN">
                        <h3 class="hrx-vac--h3">
                            Связаться с отделом персонала
                        </h3>
                        <p class="hrx-vac--p__REQUEST">
                            Расскажите нам о себе, задайте вопрос о работе и возможностях развития в «АТБ Электроника»
                        </p>
                        <button class="hrx-vac--button__REQUEST">
                            Откликнуться
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







