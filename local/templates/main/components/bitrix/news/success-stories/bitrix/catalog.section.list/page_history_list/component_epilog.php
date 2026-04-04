<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (isset($arResult["SECTIONS"]) && !empty($arResult["SECTIONS"])): ?>
    <section class="hm-hst">
        <div class="hm-hst--div__CONT C-CONTAINER">
            <div class="c-common--div__HEAD">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Истории успеха
                </h2>
            </div>


            <div class="hm-hst--div__BODY">
                <ul class="hm-hst--ul__MENU __C-SCRL LEFT">


                    <? foreach ($arResult["SECTIONS"] as $ksection => $arSection) : ?>
                        <?
                        if ($arSection["ELEMENT_CNT"] == 0) {
                            continue;
                        }

                        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
                        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), ["CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')]);

                        ?>

                        <li class="hm-hst--li__MENU_ITEM" id="<?= $this->GetEditAreaId($arSection['ID']); ?>">
                            <button class="hm-hst--button__MENU_ITEM">
                        <span class="hm-hst--span__MENU_ITEM">
                            <?= $arSection['NAME'] ?>
                        </span>
                                <svg class="hm-hst--svg__MENU_ITEM" width="28" height="14" viewBox="0 0 28 14"
                                     fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"/>
                                </svg>
                            </button>

                            <form class="hm-hst--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">


                                <? if (isset($arSection['childs']) && !empty($arSection['childs'])): ?>

                                    <? foreach ($arSection['childs'] as $k => $childSection) : ?>
                                        <label class="hm-hst--label__SUBMENU"
                                               data-sectionid="<?= $childSection['ID'] ?>">
                                            <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                            <span class="hm-hst--span__SUBMENU"><?= $childSection['NAME'] ?></span>
                                            <a class="hm-hst--a__SUBMENU"
                                               href="<?= $childSection['SECTION_PAGE_URL'] ?>">Перейти в раздел</a>
                                        </label>
                                    <? endforeach; ?>

                                <? endif; ?>

                            </form>

                            <? if ($ksection == count($arResult["SECTIONS"]) - 1): ?>
                                <div class="hm-hst--div__SUBMENU_BACK"></div>
                            <? endif ?>
                        </li>


                    <? endforeach; ?>
                    <div class="hm-hst--div__LINE"></div>
                </ul>


                <div class="hm-hst--div__MAIN">
                    <div class="hm-hst--div__LEFT"></div>


                    <div class="hm-hst--div__CONTENT">
                        <div class="dh-hst--div__SWIPER swiper __C-SCRL DOWN">
                            <div class="dh-hst--div__SWIPER_WRAPPER swiper-wrapper">

                                <? foreach ($arResult["SECTIONS"] as $ksection => $arSection) : ?>
                                    <?
                                    if ($arSection["ELEMENT_CNT"] == 0) {
                                        continue;
                                    }
                                    ?>
                                    <? if (isset($arSection['childs']) && !empty($arSection['childs'])): ?>

                                        <? foreach ($arSection['childs'] as $k => $childSection) : ?>
                                            <label class="hm-hst--label__SUBMENU"
                                                   data-sectionid="<?= $childSection['ID'] ?>">
                                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                                <span class="hm-hst--span__SUBMENU"><?= $childSection['NAME'] ?></span>
                                                <a class="hm-hst--a__SUBMENU"
                                                   href="<?= $childSection['SECTION_PAGE_URL'] ?>">Перейти в раздел</a>
                                            </label>

                                            <div class="dh-hst--div__SWIPER_SLIDE swiper-slide">
                                                <div class="cd-use--div__SWIPER23 swiper">
                                                    <div class="cd-use--div__SWIPER23_WRAPPER swiper-wrapper">
                                                        <?
                                                        $APPLICATION->IncludeComponent("bitrix:catalog.section", "history_element", [
                                                                "CACHE_FILTER" => "N",
                                                                "CACHE_GROUPS" => "Y",
                                                                "CACHE_TIME" => "36000000",
                                                                "CACHE_TYPE" => "A",
                                                                "COMPATIBLE_MODE" => "N",
                                                                "ELEMENT_SORT_FIELD" => "sort",
                                                                "ELEMENT_SORT_FIELD2" => "id",
                                                                "ELEMENT_SORT_ORDER" => "asc",
                                                                "ELEMENT_SORT_ORDER2" => "desc",
                                                                "ENLARGE_PRODUCT" => "STRICT",
                                                                "FILTER_NAME" => "arrFilter",
                                                                "IBLOCK_ID" => "4",
                                                                "IBLOCK_TYPE" => "content",
                                                                "INCLUDE_SUBSECTIONS" => "Y",
                                                                "SECTION_CODE" => "",
                                                                "SECTION_ID" => $childSection['ID'],
                                                                "SECTION_ID_VARIABLE" => "SECTION_ID",
                                                                "SECTION_URL" => "",
                                                                "SECTION_USER_FIELDS" => [
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


                                                        ],
                                                                $component->GetParent()
                                                        );
                                                        ?>


                                                    </div>
                                                    <div class="cd-use--div__SWIPER23_NAV">
                                                        <button class="cd-use--button__SWIPER23_PREV swiper-button-disabled"
                                                                disabled="" tabindex="-1" aria-label="Previous slide"
                                                                aria-controls="swiper-wrapper-2e397d8c62b40696"
                                                                aria-disabled="true">
                                                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35"
                                                                      stroke="#C82121" stroke-width="1.5"
                                                                      stroke-linecap="round"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="cd-use--div__SWIPER23_NAV_LINE"></div>
                                                        <button class="cd-use--button__SWIPER23_NEXT" tabindex="0"
                                                                aria-label="Next slide"
                                                                aria-controls="swiper-wrapper-2e397d8c62b40696"
                                                                aria-disabled="false">
                                                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35"
                                                                      stroke="#C82121" stroke-width="1.5"
                                                                      stroke-linecap="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        <? endforeach; ?>

                                    <? endif; ?>

                                <? endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="cdn-reg--div__REQUEST">
                    <div class="cdn-reg--div__IMAGE __C-SCRL LEFT">
                        <img class="cdn-reg--img__IMAGE" src="images/dih/dh-hst_request.webp" alt="">
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


                <h3 class="c-common--h3 __C-SCRL RIGHT">
                    Атб-атом-1
                </h3>


                <div class="ct-abt--div__MAIN">
                    <div class="ct-abt--div__MAIN_TOP">
                        <div class="ct-abt--div__MAIN_TOP_TEXT">
                            <p class="st-main--p__DESCR1 __C-SCRL DOWN">
                                АТБ-АТОМ-1 является сетевой вычислительной платформой,
                                включённой в единый реестр российской радиоэлектронной
                                продукции (ПП РФ №878 от 10.07.2019), что допускает
                                применение на объектах критической информационной
                                инфраструктуры.
                            </p>

                            <p class="st-main--p__DESCR2 __C-SCRL DOWN">
                                <a class="st-main--a__DESCR2" href="#">
                                    Платформа совместима с российскими операционными системами
                                </a>
                                и может использоваться в роли маршрутизатора, межсетевого
                                экрана или шлюза совместно со специализированным российским ПО.
                                АТБ-АТОМ-1 поддерживает до 8 Гб оперативной памяти и до 256 Гб
                                накопителя SSD ться в роли маршрутизатора, межсетевого экрана или
                                шлюза совместно со специализированным российским ПО. АТБ-АТОМ-1
                                поддерживает до 8 Гб оперативной памяти и до 256 Гб накопителя
                                SSDться в роли маршрутизатора, межсетевого экрана или шлюза
                                совместно со специализированным российским ПО. АТБ-АТОМ-1
                                поддерживает до 8 Гб оперативной памяти и до 256 Гб накопителя SSD.
                            </p>
                        </div>
                    </div>


                    <div class="st-main--div__DESCR3">
                        <p class="st-main--p__DESCR3_TOP __C-SCRL DOWN">
                            Под требования заказчика АТБ-АТОМ-1 может быть доукомплектован опциональными модулями:
                        </p>

                        <ul class="st-main--ul__DESCR3 __C-SCRL DOWN">
                            <li class="st-main--li__DESCR3">
                                <div class="st-main--div__DESCR3_POINT"></div>
                                <span class="st-main--span__DESCR3">
                                        АТБ-WiFi/BT - модуль беспроводной передачи данных WiFi/BT с внешней антенной;
                                    </span>
                            </li>
                            <li class="st-main--li__DESCR3">
                                <div class="st-main--div__DESCR3_POINT"></div>
                                <span class="st-main--span__DESCR3">
                                        АТБ-LTE (GPS) – модуль LTE (GPS) с внешней антенной и слотом под SIM-карту;
                                    </span>
                            </li>
                            <li class="st-main--li__DESCR3">
                                <div class="st-main--div__DESCR3_POINT"></div>
                                <span class="st-main--span__DESCR3">
                                        АТБ-AUDIO – аудио-карта с динамиком или разъемами Audio-jack 3.5 мм;
                                    </span>
                            </li>
                            <li class="st-main--li__DESCR3">
                                <div class="st-main--div__DESCR3_POINT"></div>
                                <span class="st-main--span__DESCR3">
                                        АТБ-МУВВ — модуль мониторинга условий эксплуатации и внешних воздействий (t◦C, U, мех. воздействия, вскрытия);
                                    </span>
                            </li>
                            <li class="st-main--li__DESCR3">
                                <div class="st-main--div__DESCR3_POINT"></div>
                                <span class="st-main--span__DESCR3">
                                        АТБ-GSM — GSM-модем отечественного производства;
                                    </span>
                            </li>
                            <li class="st-main--li__DESCR3">
                                <div class="st-main--div__DESCR3_POINT"></div>
                                <span class="st-main--span__DESCR3">
                                        АТБ-LW — базовая станция LoRaWAN.
                                    </span>
                            </li>
                        </ul>
                    </div>

                    <div class="st-main--div__SPH">
                        <p class="st-main--p__SPH_TOP __C-SCRL DOWN">
                            Сочетание технических параметров, форм-фактора и условий эксплуатации открывают возможности
                            для применения АТБ-АТОМ-1 и в различных сферах:
                        </p>

                        <ul class="st-main--ul__SPH __C-SCRL DOWN">
                            <li class="st-main--li__SPH">
                                <svg class="st-main--svg__SPH" width="9" height="10" viewBox="0 0 9 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z"
                                          fill="#62BE37"></path>
                                </svg>

                                <div class="st-main--div__SPH_TEXT">
                                    <p class="st-main--p__SPH_TEXT1">
                                        В системах информационной безопасности
                                    </p>
                                    <p class="st-main--p__SPH_TEXT2">
                                        в роли межсетевого экрана, шлюза, ловушки, монитора сетевых запросов и трафика;
                                    </p>
                                </div>
                            </li>
                            <li class="st-main--li__SPH">
                                <svg class="st-main--svg__SPH" width="9" height="10" viewBox="0 0 9 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z"
                                          fill="#62BE37"></path>
                                </svg>

                                <div class="st-main--div__SPH_TEXT">
                                    <p class="st-main--p__SPH_TEXT1">
                                        В системах контроля доступа и видеонаблюдения
                                    </p>
                                    <p class="st-main--p__SPH_TEXT2">
                                        в роли вычислительного узла сбора данных, управления и маршрутизациа;
                                    </p>
                                </div>
                            </li>
                            <li class="st-main--li__SPH">
                                <svg class="st-main--svg__SPH" width="9" height="10" viewBox="0 0 9 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z"
                                          fill="#62BE37"></path>
                                </svg>

                                <div class="st-main--div__SPH_TEXT">
                                    <p class="st-main--p__SPH_TEXT1">
                                        в банкоматах, платежных автоматах и постаматах
                                    </p>
                                    <p class="st-main--p__SPH_TEXT2">
                                        в роли межсетевого экрана, шлюза, маршрутизатора, вычислительного узла;
                                    </p>
                                </div>
                            </li>
                            <li class="st-main--li__SPH">
                                <svg class="st-main--svg__SPH" width="9" height="10" viewBox="0 0 9 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z"
                                          fill="#62BE37"></path>
                                </svg>

                                <div class="st-main--div__SPH_TEXT">
                                    <p class="st-main--p__SPH_TEXT1">
                                        на прозводстве и в офисе
                                    </p>
                                    <p class="st-main--p__SPH_TEXT2">
                                        в роли рабочего автоматизированного места, терминала или тонкого клиента.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </section>

<? endif; ?>
