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
$APPLICATION->SetPageProperty('mainid', 'mc');
?>


<section class="mc-hero">
    <div class="mc-hero--div__CONT C-CONTAINER">
        <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                ".default",
                [
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "1"
                ]
        ); ?>


        <!--        <h1 class="mc-hero--h1 __C-SCRL RIGHT">-->
        <!--            --><? // $APPLICATION->ShowTitle(false); ?>
        <!--        </h1>-->


        <div class="mc-hero--div__IMAGES __C-SCRL DOWN">
            <div class="mc-hero--div__IMAGES1">
                <div class="mc-hero--div__IMAGE _1 __C-SCRL RIGHT">
                    <img class="mc-hero--img__IMAGE" src="/images/mc/mc-hero_1.png" alt=""
                         loading="lazy">
                </div>

                <div class="mc-hero--div__IMAGES1_1">
                    <div class="mc-hero--div__IMAGE _2 __C-SCRL TOP">
                        <img class="mc-hero--img__IMAGE" src="/images/mc/mc-hero_2.png"
                             alt="" loading="lazy">
                    </div>
                    <div class="mc-hero--div__IMAGE _3 __C-SCRL LEFT">
                        <img class="mc-hero--img__IMAGE" src="/images/mc/mc-hero_3.png"
                             alt="" loading="lazy">
                    </div>
                </div>
            </div>


            <div class="mc-hero--div__IMAGES2">
                <div class="mc-hero--div__IMAGE _4 __C-SCRL DOWN">
                    <img class="mc-hero--img__IMAGE" src="/images/mc/mc-hero_4.png" alt=""
                         loading="lazy">
                </div>

                <div class="mc-hero--div__IMAGES2_1">
                    <div class="mc-hero--div__IMAGE _5 __C-SCRL LEFT">
                        <img class="mc-hero--img__IMAGE" src="/images/mc/mc-hero_5.png"
                             alt="" loading="lazy">
                    </div>
                    <div class="mc-hero--div__IMAGE _6 __C-SCRL RIGHT">
                        <img class="mc-hero--img__IMAGE" src="/images/mc/mc-hero_6.png"
                             alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </div>


        <div class="c-common--div__TABS __C-SCRL DOWN">
            <div class="c-common--div__TABS_TOP">
                <a class="c-common--a__TABS " href="<?= $arParams['SEF_FOLDER'] ?>novosti/">
                    новости
                </a>
                <a class="c-common--a__TABS" href="<?= $arParams['SEF_FOLDER'] ?>meropriyatiya/">
                    мероприятия
                </a>
                <a class="c-common--a__TABS" href="<?= $arParams['SEF_FOLDER'] ?>stati/">
                    статьи
                </a>
                <!--                    <a class="c-common--a__TABS" href="#mc-video">-->
                <!--                        видео-->
                <!--                    </a>-->
                <!--                    <a class="c-common--a__TABS" href="#mc-pk">-->
                <!--                        пресс-кит-->
                <!--                    </a>-->
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
    </div>
</section>
<section class="mc-news" id="mc-news">
    <div class="mc-news--div__CONT C-CONTAINER">
        <h1 class="c-common--h2 RIGHT">  <? $APPLICATION->ShowTitle(false); ?></h1>
        <!--        <form class="mc-common--form__SELECT _NEWS" action="#" method="post" name="mc-news">-->
        <!--            <fieldset class="mc-common--fieldset__SELECT _NEWS _YEAR __C-SCRL DOWN">-->
        <!--                <button class="mc-common--button__SELECT" type="button">-->
        <!--                            <span class="mc-common--span__SELECT">-->
        <!--                                Год-->
        <!--                            </span>-->
        <!--                    <svg class="mc-common--svg__SELECT" width="19" height="9" viewBox="0 0 19 9" fill="none"-->
        <!--                         xmlns="http://www.w3.org/2000/svg">-->
        <!--                        <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25"-->
        <!--                              stroke-linecap="round"/>-->
        <!--                    </svg>-->
        <!--                </button>-->
        <!---->
        <!--                <div class="mc-common--div__SELECT">-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _YEAR">-->
        <!--                        За все время-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _YEAR" type="radio" name="mc-news-years"-->
        <!--                               value="all">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _YEAR">-->
        <!--                        2026-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _YEAR" type="radio" name="mc-news-years"-->
        <!--                               value="2026">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _YEAR">-->
        <!--                        2025-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _YEAR" type="radio" name="mc-news-years"-->
        <!--                               value="2025">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _YEAR">-->
        <!--                        2024-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _YEAR" type="radio" name="mc-news-years"-->
        <!--                               value="2024">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _YEAR">-->
        <!--                        2023-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _YEAR" type="radio" name="mc-news-years"-->
        <!--                               value="2023">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _YEAR">-->
        <!--                        2022-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _YEAR" type="radio" name="mc-news-years"-->
        <!--                               value="2022">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _YEAR">-->
        <!--                        2021-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _YEAR" type="radio" name="mc-news-years"-->
        <!--                               value="2021">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _YEAR">-->
        <!--                        2020-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _YEAR" type="radio" name="mc-news-years"-->
        <!--                               value="2020">-->
        <!--                    </label>-->
        <!--                </div>-->
        <!--            </fieldset>-->
        <!---->
        <!---->
        <!--            <fieldset class="mc-common--fieldset__SELECT _NEWS _IND __C-SCRL DOWN">-->
        <!--                <button class="mc-common--button__SELECT" type="button">-->
        <!--                            <span class="mc-common--span__SELECT">-->
        <!--                                Отрасли-->
        <!--                            </span>-->
        <!--                    <svg class="mc-common--svg__SELECT" width="19" height="9" viewBox="0 0 19 9" fill="none"-->
        <!--                         xmlns="http://www.w3.org/2000/svg">-->
        <!--                        <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25"-->
        <!--                              stroke-linecap="round"/>-->
        <!--                    </svg>-->
        <!--                </button>-->
        <!---->
        <!--                <div class="mc-common--div__SELECT">-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _IND">-->
        <!--                        Добыча и переработка полезных ископаемых-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _IND" type="radio" name="mc-news-ind"-->
        <!--                               value="minerals">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _IND">-->
        <!--                        Строительство и ЖКХ-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _IND" type="radio" name="mc-news-ind"-->
        <!--                               value="construction">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _IND">-->
        <!--                        Железнодорожный транспорт-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _IND" type="radio" name="mc-news-ind"-->
        <!--                               value="railway">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _IND">-->
        <!--                        Медицинская техника-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _IND" type="radio" name="mc-news-ind"-->
        <!--                               value="medicine">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _IND">-->
        <!--                        Банки и финансовый сектор-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _IND" type="radio" name="mc-news-ind"-->
        <!--                               value="banks">-->
        <!--                    </label>-->
        <!--                </div>-->
        <!--            </fieldset>-->
        <!---->
        <!---->
        <!--            <fieldset class="mc-common--fieldset__SELECT _NEWS _DES __C-SCRL DOWN">-->
        <!--                <button class="mc-common--button__SELECT" type="button">-->
        <!--                            <span class="mc-common--span__SELECT">-->
        <!--                                Решения-->
        <!--                            </span>-->
        <!--                    <svg class="mc-common--svg__SELECT" width="19" height="9" viewBox="0 0 19 9" fill="none"-->
        <!--                         xmlns="http://www.w3.org/2000/svg">-->
        <!--                        <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25"-->
        <!--                              stroke-linecap="round"/>-->
        <!--                    </svg>-->
        <!--                </button>-->
        <!---->
        <!--                <div class="mc-common--div__SELECT">-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _DES">-->
        <!--                        Пограничные вычисления-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _DES" type="radio" name="mc-news-des" value="ec">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _DES">-->
        <!--                        Информационная безопасность (ИБ)-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _DES" type="radio" name="mc-news-des" value="is">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _DES">-->
        <!--                        Автоматизация процессов (АСУ ТП)-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _DES" type="radio" name="mc-news-des" value="pa">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _DES">-->
        <!--                        Контроль и мониторинг-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _DES" type="radio" name="mc-news-des"-->
        <!--                               value="control">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _DES">-->
        <!--                        Отопление, вентиляция, охлаждение (HVAC)-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _DES" type="radio" name="mc-news-des" value="hvac">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _DES">-->
        <!--                        Промышленный интернет вещей (IIOT)-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _DES" type="radio" name="mc-news-des" value="iiot">-->
        <!--                    </label>-->
        <!--                </div>-->
        <!--            </fieldset>-->
        <!---->
        <!---->
        <!--            <fieldset class="mc-common--fieldset__SELECT _NEWS _TOPIC __C-SCRL DOWN">-->
        <!--                <button class="mc-common--button__SELECT" type="button">-->
        <!--                            <span class="mc-common--span__SELECT">-->
        <!--                                Тема-->
        <!--                            </span>-->
        <!--                    <svg class="mc-common--svg__SELECT" width="19" height="9" viewBox="0 0 19 9" fill="none"-->
        <!--                         xmlns="http://www.w3.org/2000/svg">-->
        <!--                        <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25"-->
        <!--                              stroke-linecap="round"/>-->
        <!--                    </svg>-->
        <!--                </button>-->
        <!---->
        <!--                <div class="mc-common--div__SELECT">-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _TOPIC">-->
        <!--                        Что-то-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _TOPIC" type="radio" name="mc-news-topic"-->
        <!--                               value="something">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _TOPIC">-->
        <!--                        Что-то-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _TOPIC" type="radio" name="mc-news-topic"-->
        <!--                               value="something">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _TOPIC">-->
        <!--                        Что-то-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _TOPIC" type="radio" name="mc-news-topic"-->
        <!--                               value="something">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _TOPIC">-->
        <!--                        Что-то-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _TOPIC" type="radio" name="mc-news-topic"-->
        <!--                               value="something">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _TOPIC">-->
        <!--                        Что-то-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _TOPIC" type="radio" name="mc-news-topic"-->
        <!--                               value="something">-->
        <!--                    </label>-->
        <!--                    <label class="mc-common--label__SELECT _NEWS _TOPIC">-->
        <!--                        Что-то-->
        <!--                        <input class="mc-common--input__SELECT _NEWS _TOPIC" type="radio" name="mc-news-topic"-->
        <!--                               value="something">-->
        <!--                    </label>-->
        <!--                </div>-->
        <!--            </fieldset>-->
        <!--        </form>-->

        <?php
        $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "press-center",
                [
                        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                        "NEWS_COUNT" => $arParams["NEWS_COUNT"],
                        "SORT_BY1" => $arParams["SORT_BY1"],
                        "SORT_ORDER1" => $arParams["SORT_ORDER1"],
                        "SORT_BY2" => $arParams["SORT_BY2"],
                        "SORT_ORDER2" => $arParams["SORT_ORDER2"],
                        "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
                        "PROPERTY_CODE" => ['TAG_KRASOTA', 'PRESS_TYPE'],
                        "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
                        "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                        "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
                        "SET_TITLE" => $arParams["SET_TITLE"],
                        "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                        "MESSAGE_404" => $arParams["MESSAGE_404"],
                        "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                        "SHOW_404" => $arParams["SHOW_404"],
                        "FILE_404" => $arParams["FILE_404"],
                        "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
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
                        "ACTIVE_DATE_FORMAT" => 'd.m.Y',
                        "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                        "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                        "FILTER_NAME" => $arParams["FILTER_NAME"],
                        "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
                        "CHECK_DATES" => $arParams["CHECK_DATES"],
                ],
                $component
        );

        ?>


    </div>
</section>


<script>
    window.addEventListener("load", function () {
        window.mcCommonCardOpener(".mc-news", <?=$arParams['NEWS_COUNT']?>);
        document.addEventListener("click", function (event) {

            const loadMoreBtn = event.target.closest('.ahiles3005_load_more');

            if (loadMoreBtn) {
                // event.preventDefault();

                let arParams = '<?=base64_encode(serialize($arParams))?>';
                let arResult = '<?=base64_encode(serialize($arResult))?>';
                let url = '<?=$templateFolder?>/ajax.php?' + loadMoreBtn.dataset.url;

                let formData = new FormData();
                formData.append('arParams', arParams);
                formData.append('arResult', arResult);
                formData.append('action', 'load_more');

                fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(response.statusText);
                        }
                        return response.text();
                    })
                    .then(html => {
                        // Создаем временный DOM элемент для парсинга
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');

                        // 1. Вытаскиваем HTML из .mc-common--div__GRID
                        const newGridContent = doc.querySelector('.mc-common--div__GRID');
                        if (newGridContent) {
                            // Получаем внутренний HTML (все article элементы)
                            const gridHtml = newGridContent.innerHTML;

                            // Добавляем новые элементы в существующий GRID
                            const currentGrid = document.querySelector('.mc-common--div__GRID');
                            if (currentGrid) {
                                currentGrid.insertAdjacentHTML('beforeend', gridHtml);
                            }
                        }

                        // 2. Вытаскиваем data-url из новой кнопки .ahiles3005_load_more
                        const newLoadMoreBtn = doc.querySelector('.ahiles3005_load_more');
                        if (newLoadMoreBtn) {
                            const newDataUrl = newLoadMoreBtn.dataset.url;

                            // Обновляем data-url у существующей кнопки
                            const currentLoadMoreBtn = document.querySelector('.ahiles3005_load_more');
                            if (currentLoadMoreBtn && newDataUrl) {
                                currentLoadMoreBtn.dataset.url = newDataUrl;
                            }
                        }

                    })
                    .catch(error => {
                        console.error('Fetch error:', error);
                    });
            }
        });
    })

</script>