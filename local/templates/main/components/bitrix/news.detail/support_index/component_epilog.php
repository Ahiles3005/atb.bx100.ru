<?php

$TEXT_1 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_1']['~VALUE']['TEXT']);
$TEXT_2 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_2']['~VALUE']['TEXT']);
$TEXT_3 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_3']['~VALUE']['TEXT']);
$TEXT_4 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_4']['~VALUE']['TEXT']);
$TEXT_5 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_5']['~VALUE']['TEXT']);
$TEXT_6 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_6']['~VALUE']['TEXT']);
$TEXT_7 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_7']['~VALUE']['TEXT']);
$TEXT_8 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_8']['~VALUE']['TEXT']);
$TEXT_9 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_9']['~VALUE']['TEXT']);
$TEXT_10 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_10']['~VALUE']['TEXT']);
$TEXT_11 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_11']['~VALUE']['TEXT']);
$TEXT_12 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_12']['~VALUE']['TEXT']);

$SPISOK_1 = !empty($arResult["DISPLAY_PROPERTIES"]["SPISOK_1"]['VALUE']);
$SPISOK_2 = !empty($arResult["DISPLAY_PROPERTIES"]["SPISOK_2"]['VALUE']);
$SPISOK_3 = !empty($arResult["DISPLAY_PROPERTIES"]["SPISOK_3"]['VALUE']);
$SPISOK_4 = !empty($arResult["DISPLAY_PROPERTIES"]["SPISOK_4"]['VALUE']);

?>


<!-- ---------- ********** СЕКЦИЯ SUP ********** ---------- -->


<section class="sup-sup" id="sup-sup">
    <div class="sup-sup--div__CONT C-CONTAINER">
        <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                ".default",
                [
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                ]
        ); ?>


        <div class="c-common--div__TABS __C-SCRL DOWN">
            <div class="c-common--div__TABS_TOP">
                <a class="c-common--a__TABS _ACT _MARK" href="#sup-sup">
                    поддержка
                </a>
                <a class="c-common--a__TABS" href="#sup-org">
                    организация сервиса
                </a>
                <a class="c-common--a__TABS" href="#sup-adp">
                    адаптация решений
                </a>
                <a class="c-common--a__TABS" href="#sup-srv">
                    сервисный центр
                </a>
                <a class="c-common--a__TABS" href="#sup-cent">
                    центр загрузки
                </a>
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

        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Поддержка
        </h2>

        <div class="sup-sup--div__MAIN">
            <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_1']['~VALUE']['TEXT'] ?>

            <div class="sup-sup--div__SCHEME_MOB __C-SCRL DOWN">
                <div class="sup-sup--div__SCHEME_MOB_CONT">
                    <div class="sup-sup--div__SCHEME_MOB_TOP">
                        <svg class="sup-sup--svg__SCHEME_MOB_TOP" width="10" height="8" viewBox="0 0 10 8" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.08838 3.71493L0 0L2.15588 3.71493L0 7.42783L9.08838 3.71493Z" fill="#0C0C0C"/>
                        </svg>
                    </div>
                    <div class="sup-sup--div__SCHEME_MOB_ITEMS">
                        <div class="sup-sup--div__SCHEME_MOB_ITEM">
                            <div class="sup-sup--div__SCHEME_MOB_IMAGE">
                                <img class="sup-sup--img__SCHEME_MOB_IMAGE" src="images/support/sup-sup_1.svg" alt=""
                                     loading="lazy">
                                <img class="sup-sup--img__SCHEME_MOB_IMAGE" src="images/support/sup-sup_1n.svg" alt=""
                                     loading="lazy">
                            </div>
                            <div class="sup-sup--div__SCHEME_MOB_ITEM_CENTER">
                                <div class="sup-sup--div__SCHEME_MOB_ITEM_CIRCLE">1</div>
                                <svg class="sup-sup--svg__SCHEME_MOB_ITEM_CENTER" width="8" height="99"
                                     viewBox="0 0 8 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.71484 0V92.5241" stroke="#0C0C0C" stroke-width="0.5"
                                          stroke-miterlimit="10"/>
                                    <path d="M3.71493 98.9751L0 89.8867L3.71493 92.0426L7.42783 89.8867L3.71493 98.9751Z"
                                          fill="#0C0C0C"/>
                                </svg>
                            </div>
                            <div class="sup-sup--div__SCHEME_MOB_TEXT">
                                <img class="sup-sup--img__SCHEME_MOB_TEXT" src="/images/support/sup-sup_text1.svg"
                                     alt="" loading="lazy">
                            </div>
                        </div>


                        <div class="sup-sup--div__SCHEME_MOB_ITEM">
                            <div class="sup-sup--div__SCHEME_MOB_IMAGE">
                                <img class="sup-sup--img__SCHEME_MOB_IMAGE" src="/images/support/sup-sup_2.svg" alt=""
                                     loading="lazy">
                                <img class="sup-sup--img__SCHEME_MOB_IMAGE" src="/images/support/sup-sup_2n.svg" alt=""
                                     loading="lazy">
                            </div>
                            <div class="sup-sup--div__SCHEME_MOB_ITEM_CENTER">
                                <div class="sup-sup--div__SCHEME_MOB_ITEM_CIRCLE">2</div>
                                <svg class="sup-sup--svg__SCHEME_MOB_ITEM_CENTER" width="8" height="99"
                                     viewBox="0 0 8 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.71484 0V92.5241" stroke="#0C0C0C" stroke-width="0.5"
                                          stroke-miterlimit="10"/>
                                    <path d="M3.71493 98.9751L0 89.8867L3.71493 92.0426L7.42783 89.8867L3.71493 98.9751Z"
                                          fill="#0C0C0C"/>
                                </svg>
                            </div>
                            <div class="sup-sup--div__SCHEME_MOB_TEXT">
                                <img class="sup-sup--img__SCHEME_MOB_TEXT" src="/images/support/sup-sup_text2.svg"
                                     alt="" loading="lazy">
                            </div>
                        </div>


                        <div class="sup-sup--div__SCHEME_MOB_ITEM">
                            <div class="sup-sup--div__SCHEME_MOB_IMAGE">
                                <img class="sup-sup--img__SCHEME_MOB_IMAGE" src="/images/support/sup-sup_3.svg" alt=""
                                     loading="lazy">
                                <img class="sup-sup--img__SCHEME_MOB_IMAGE" src="/images/support/sup-sup_3n.svg" alt=""
                                     loading="lazy">
                            </div>
                            <div class="sup-sup--div__SCHEME_MOB_ITEM_CENTER">
                                <div class="sup-sup--div__SCHEME_MOB_ITEM_CIRCLE">3</div>
                                <svg class="sup-sup--svg__SCHEME_MOB_ITEM_CENTER" width="8" height="99"
                                     viewBox="0 0 8 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.71484 0V92.5241" stroke="#0C0C0C" stroke-width="0.5"
                                          stroke-miterlimit="10"/>
                                    <path d="M3.71493 98.9751L0 89.8867L3.71493 92.0426L7.42783 89.8867L3.71493 98.9751Z"
                                          fill="#0C0C0C"/>
                                </svg>
                            </div>
                            <div class="sup-sup--div__SCHEME_MOB_TEXT">
                                <img class="sup-sup--img__SCHEME_MOB_TEXT" src="/images/support/sup-sup_text3.svg"
                                     alt="" loading="lazy">
                            </div>
                        </div>


                        <div class="sup-sup--div__SCHEME_MOB_ITEM">
                            <div class="sup-sup--div__SCHEME_MOB_IMAGE">
                                <img class="sup-sup--img__SCHEME_MOB_IMAGE" src="/images/support/sup-sup_4.svg" alt=""
                                     loading="lazy">
                                <img class="sup-sup--img__SCHEME_MOB_IMAGE" src="/images/support/sup-sup_4n.svg" alt=""
                                     loading="lazy">
                            </div>
                            <div class="sup-sup--div__SCHEME_MOB_ITEM_CENTER">
                                <div class="sup-sup--div__SCHEME_MOB_ITEM_CIRCLE">4</div>
                                <svg class="sup-sup--svg__SCHEME_MOB_ITEM_CENTER" width="8" height="99"
                                     viewBox="0 0 8 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.71484 0V92.5241" stroke="#0C0C0C" stroke-width="0.5"
                                          stroke-miterlimit="10"/>
                                    <path d="M3.71493 98.9751L0 89.8867L3.71493 92.0426L7.42783 89.8867L3.71493 98.9751Z"
                                          fill="#0C0C0C"/>
                                </svg>
                            </div>
                            <div class="sup-sup--div__SCHEME_MOB_TEXT">
                                <img class="sup-sup--img__SCHEME_MOB_TEXT" src="/images/support/sup-sup_text4.svg"
                                     alt="" loading="lazy">
                            </div>
                        </div>


                        <div class="sup-sup--div__SCHEME_MOB_ITEM">
                            <div class="sup-sup--div__SCHEME_MOB_IMAGE">
                                <img class="sup-sup--img__SCHEME_MOB_IMAGE" src="/images/support/sup-sup_5.svg" alt=""
                                     loading="lazy">
                                <img class="sup-sup--img__SCHEME_MOB_IMAGE" src="/images/support/sup-sup_5n.svg" alt=""
                                     loading="lazy">
                            </div>
                            <div class="sup-sup--div__SCHEME_MOB_ITEM_CENTER">
                                <div class="sup-sup--div__SCHEME_MOB_ITEM_CIRCLE">5</div>
                                <svg class="sup-sup--svg__SCHEME_MOB_ITEM_CENTER" width="8" height="99"
                                     viewBox="0 0 8 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.71484 0V92.5241" stroke="#0C0C0C" stroke-width="0.5"
                                          stroke-miterlimit="10"/>
                                    <path d="M3.71493 98.9751L0 89.8867L3.71493 92.0426L7.42783 89.8867L3.71493 98.9751Z"
                                          fill="#0C0C0C"/>
                                </svg>
                            </div>
                            <div class="sup-sup--div__SCHEME_MOB_TEXT">
                                <img class="sup-sup--img__SCHEME_MOB_TEXT" src="/images/support/sup-sup_text5.svg"
                                     alt="" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="sup-sup--div__SCHEME_DESK __C-SCRL DOWN">
                <div class="sup-sup--div__SCHEME_DESK_FIRST">
                    <div class="sup-sup--div__SCHEME_DESK_ITEM">
                        <div class="sup-sup--div__SCHEME_DESK_IMAGES">
                            <img class="sup-sup--img__SCHEME_DESK_IMAGE" src="/images/support/sup-sup_1.svg" alt=""
                                 loading="lazy">
                            <img class="sup-sup--img__SCHEME_DESK_IMAGE" src="/images/support/sup-sup_1n.svg" alt=""
                                 loading="lazy">
                        </div>
                        <div class="sup-sup--div__SCHEME_DESK_TEXT">
                            <img class="sup-sup--img__SCHEME_DESK_TEXT" src="/images/support/sup-sup_text1n.svg" alt=""
                                 loading="lazy">
                        </div>
                    </div>


                    <div class="sup-sup--div__SCHEME_DESK_ITEM">
                        <div class="sup-sup--div__SCHEME_DESK_IMAGES">
                            <img class="sup-sup--img__SCHEME_DESK_IMAGE" src="/images/support/sup-sup_2.svg" alt=""
                                 loading="lazy">
                            <img class="sup-sup--img__SCHEME_DESK_IMAGE" src="/images/support/sup-sup_2n.svg" alt=""
                                 loading="lazy">
                        </div>
                        <div class="sup-sup--div__SCHEME_DESK_TEXT">
                            <img class="sup-sup--img__SCHEME_DESK_TEXT" src="/images/support/sup-sup_text2n.svg" alt=""
                                 loading="lazy">
                        </div>
                    </div>


                    <div class="sup-sup--div__SCHEME_DESK_ITEM">
                        <div class="sup-sup--div__SCHEME_DESK_IMAGES">
                            <img class="sup-sup--img__SCHEME_DESK_IMAGE" src="/images/support/sup-sup_3.svg" alt=""
                                 loading="lazy">
                            <img class="sup-sup--img__SCHEME_DESK_IMAGE" src="/images/support/sup-sup_3n.svg" alt=""
                                 loading="lazy">
                        </div>
                        <div class="sup-sup--div__SCHEME_DESK_TEXT">
                            <img class="sup-sup--img__SCHEME_DESK_TEXT" src="/images/support/sup-sup_text3n.svg" alt=""
                                 loading="lazy">
                        </div>
                    </div>
                </div>


                <div class="sup-sup--div__SCHEME_DESK_SECOND">
                    <div class="sup-sup--div__SCHEME_DESK_ITEM">
                        <div class="sup-sup--div__SCHEME_DESK_IMAGES">
                            <img class="sup-sup--img__SCHEME_DESK_IMAGE" src="/images/support/sup-sup_4.svg" alt=""
                                 loading="lazy">
                            <img class="sup-sup--img__SCHEME_DESK_IMAGE" src="/images/support/sup-sup_4n.svg" alt=""
                                 loading="lazy">
                        </div>
                        <div class="sup-sup--div__SCHEME_DESK_TEXT">
                            <img class="sup-sup--img__SCHEME_DESK_TEXT" src="/images/support/sup-sup_text4n.svg" alt=""
                                 loading="lazy">
                        </div>
                    </div>


                    <div class="sup-sup--div__SCHEME_DESK_ITEM">
                        <div class="sup-sup--div__SCHEME_DESK_IMAGES">
                            <img class="sup-sup--img__SCHEME_DESK_IMAGE" src="/images/support/sup-sup_5.svg" alt=""
                                 loading="lazy">
                            <img class="sup-sup--img__SCHEME_DESK_IMAGE" src="/images/support/sup-sup_5n.svg" alt=""
                                 loading="lazy">
                        </div>
                        <div class="sup-sup--div__SCHEME_DESK_TEXT">
                            <img class="sup-sup--img__SCHEME_DESK_TEXT" src="/images/support/sup-sup_text5n.svg" alt=""
                                 loading="lazy">
                        </div>
                    </div>
                </div>


                <div class="sup-sup--div__SCHEME_DESK_ARRS">
                    <div class="sup-sup--div__SCHEME_DESK_CIRCLE">1</div>
                    <div class="sup-sup--div__SCHEME_DESK_CIRCLE">2</div>
                    <div class="sup-sup--div__SCHEME_DESK_CIRCLE">3</div>
                    <div class="sup-sup--div__SCHEME_DESK_CIRCLE">4</div>
                    <div class="sup-sup--div__SCHEME_DESK_CIRCLE">5</div>

                    <div class="sup-sup--div__SCHEME_DESK_ARR">
                        <svg class="sup-sup--svg__SCHEME_DESK_ARR" width="16" height="13" viewBox="0 0 16 13"
                             fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.7939 6.4523L0 12.9046L3.7465 6.4523L0 0L15.7939 6.4523Z" fill="#0C0C0C"/>
                        </svg>
                    </div>
                    <div class="sup-sup--div__SCHEME_DESK_ARR">
                        <svg class="sup-sup--svg__SCHEME_DESK_ARR" width="16" height="13" viewBox="0 0 16 13"
                             fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.7939 6.4523L0 12.9046L3.7465 6.4523L0 0L15.7939 6.4523Z" fill="#0C0C0C"/>
                        </svg>
                    </div>
                    <div class="sup-sup--div__SCHEME_DESK_ARR">
                        <svg class="sup-sup--svg__SCHEME_DESK_ARR" width="16" height="13" viewBox="0 0 16 13"
                             fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.7939 6.4523L0 12.9046L3.7465 6.4523L0 0L15.7939 6.4523Z" fill="#0C0C0C"/>
                        </svg>
                    </div>
                    <div class="sup-sup--div__SCHEME_DESK_ARR">
                        <svg class="sup-sup--svg__SCHEME_DESK_ARR" width="16" height="13" viewBox="0 0 16 13"
                             fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.7939 6.4523L0 12.9046L3.7465 6.4523L0 0L15.7939 6.4523Z" fill="#0C0C0C"/>
                        </svg>
                    </div>
                    <div class="sup-sup--div__SCHEME_DESK_ARR">
                        <svg class="sup-sup--svg__SCHEME_DESK_ARR" width="16" height="13" viewBox="0 0 16 13"
                             fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.7939 6.4523L0 12.9046L3.7465 6.4523L0 0L15.7939 6.4523Z" fill="#0C0C0C"/>
                        </svg>
                    </div>

                    <div class="sup-sup--div__SCHEME_DESK_EMP"></div>
                </div>
            </div>
        </div>

        <div class="cdn-reg--div__REQUEST">
            <div class="cdn-reg--div__IMAGE __C-SCRL LEFT">
                <img class="cdn-reg--img__IMAGE" src="/images/dih/dh-hst_request.webp" alt="">
            </div>
            <div class="cdn-reg--div__TEXT __C-SCRL RIGHT">
                <h3 class="cdn-reg--h3">
                    Свяжитесь с сервисной службой
                </h3>
                <p class="cdn-reg--p__REQUEST">
                    Напишите нам, чтобы получить профессиональную техническую консультацию
                </p>
                <button class="cdn-reg--button__REQUEST">
                    Отправить запрос
                </button>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ ORG ********** ---------- -->


<section class="sup-org" id="sup-org">
    <div class="sup-org--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Организация сервиса
        </h2>


        <? if ($SPISOK_1): ?>
            <div class="sup-org--div__MAIN">
                <ul class="sup-org--ul__LIST">
                    <? foreach ($arResult["PROPERTIES"]['SPISOK_1']['~VALUE'] as $value): ?>
                        <li class="sup-org--li__LIST __C-SCRL DOWN">
                            <?= $value['TEXT'] ?>
                        </li>
                    <? endforeach; ?>
                </ul>
            </div>
        <? endif ?>

    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ ADAPTATION ********** ---------- -->


<section class="sup-adp" id="sup-adp">
    <div class="sup-adp--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Адаптация решений
        </h2>


        <div class="sup-adp--div__MAIN">
            <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_2']['~VALUE']['TEXT'] ?? '' ?>

            <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_3']['~VALUE']['TEXT'] ?? '' ?>


            <? if ($TEXT_4): ?>
                <div class="st-main--div__GRID1">
                    <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_4']['~VALUE']['TEXT'] ?? '' ?>
                </div>
            <? endif ?>

        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ SERVICE ********** ---------- -->


<section class="sup-srv" id="sup-srv">
    <div class="sup-srv--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Сервисный центр
        </h2>


        <div class="sup-srv--div__MAIN">
            <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_5']['~VALUE']['TEXT'] ?? '' ?>

            <? if ($SPISOK_2 || $TEXT_6): ?>
                <div class="st-main--div__SPH">
                    <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_6']['~VALUE']['TEXT'] ?? '' ?>

                    <? if ($SPISOK_2): ?>
                        <ul class="st-main--ul__SPH __C-SCRL DOWN">
                            <? foreach ($arResult["PROPERTIES"]['SPISOK_2']['VALUE'] as $value): ?>
                                <li class="st-main--li__SPH">
                                    <svg class="st-main--svg__SPH" width="9" height="10" viewBox="0 0 9 10" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z"
                                              fill="#62BE37"></path>
                                    </svg>

                                    <div class="st-main--div__SPH_TEXT">
                                        <p class="st-main--p__SPH_TEXT1">
                                            <?= $value ?>
                                        </p>
                                    </div>
                                </li>
                            <? endforeach; ?>
                        </ul>
                    <? endif ?>
                </div>
            <? endif ?>

            <div class="sup-srv--div__ITEM">
                <h3 class="c-common--h3 __C-SCRL RIGHT">
                    Гарантийный ремонт
                </h3>

                <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_7']['~VALUE']['TEXT'] ?? '' ?>
            </div>


            <div class="sup-srv--div__ITEM">
                <h3 class="c-common--h3 __C-SCRL RIGHT">
                    Постгарантийное обслуживание
                </h3>

                <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_8']['~VALUE']['TEXT'] ?? '' ?>
            </div>


            <div class="sup-srv--div__ITEM">
                <h3 class="c-common--h3 __C-SCRL RIGHT">
                    Сервисные контракты
                </h3>

                <div class="st-main--div__SPH">
                    <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_9']['~VALUE']['TEXT'] ?? '' ?>



                    <? if ($SPISOK_3): ?>
                        <ul class="st-main--ul__SPH __C-SCRL DOWN">
                            <? foreach ($arResult["PROPERTIES"]['SPISOK_3']['VALUE'] as $value): ?>
                                <li class="st-main--li__SPH">
                                    <svg class="st-main--svg__SPH" width="9" height="10" viewBox="0 0 9 10" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z"
                                              fill="#62BE37"></path>
                                    </svg>

                                    <div class="st-main--div__SPH_TEXT">
                                        <p class="st-main--p__SPH_TEXT1">
                                            <?= $value ?>
                                        </p>
                                    </div>
                                </li>
                            <? endforeach; ?>
                        </ul>
                    <? endif ?>
                </div>
            </div>


            <div class="sup-srv--div__ITEM">
                <h3 class="c-common--h3 __C-SCRL RIGHT">
                    Модернизация и доработки
                </h3>

                <div class="st-main--div__SPH">
                    <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_10']['~VALUE']['TEXT'] ?? '' ?>

                    <? if ($SPISOK_4): ?>
                        <ul class="st-main--ul__SPH __C-SCRL DOWN">
                            <? foreach ($arResult["PROPERTIES"]['SPISOK_4']['VALUE'] as $value): ?>
                                <li class="st-main--li__SPH">
                                    <svg class="st-main--svg__SPH" width="9" height="10" viewBox="0 0 9 10" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z"
                                              fill="#62BE37"></path>
                                    </svg>

                                    <div class="st-main--div__SPH_TEXT">
                                        <p class="st-main--p__SPH_TEXT1">
                                            <?= $value ?>
                                        </p>
                                    </div>
                                </li>
                            <? endforeach; ?>
                        </ul>

                    <? endif ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ CENTER ********** ---------- -->


<section class="sup-cent" id="sup-cent">
    <div class="sup-cent--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Центр загрузки
        </h2>


        <div class="sup-cent--div__MAIN">
            <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_11']['~VALUE']['TEXT'] ?? '' ?>
            <div class="st-main--div__ATTENTION __C-SCRL DOWN">
                <svg class="st-main--svg__ATTENTION" width="66" height="81" viewBox="0 0 66 81" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 80.1433V71.8943H65.9914V80.1433H0ZM32.9957 65.9914L4.12446 28.8712H20.6223V0H45.3691V28.8712H61.8669L32.9957 65.9914Z"
                          fill="#F5F7F9"/>
                </svg>
                <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_12']['~VALUE']['TEXT'] ?? '' ?>
            </div>
        </div>
    </div>
</section>



