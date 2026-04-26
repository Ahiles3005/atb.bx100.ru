<?php

$VALS = !empty($arResult["DISPLAY_PROPERTIES"]['NASHI_CENNOSTY']['VALUE']);
$POLT = !empty($arResult["DISPLAY_PROPERTIES"]['KOORP_POLITIKA_1']['~VALUE']['TEXT']) || !empty($arResult["DISPLAY_PROPERTIES"]['KOORP_POLITIKA_2']['~VALUE']['TEXT']);
$WORD = !empty($arResult["DISPLAY_PROPERTIES"]['SLOVO_KOMANDY']['VALUE']);
$ADV = !empty($arResult["DISPLAY_PROPERTIES"]['PREIMUSHESTVA']['VALUE']);
$HST = !empty($arResult["DISPLAY_PROPERTIES"]['ISTORIY_ROSTA']['VALUE']);
$FAQ = !empty($arResult["DISPLAY_PROPERTIES"]['PREIMUSHESTVA']['VALUE']);
$BLOG = !empty($arResult["BLOG_ITEMS"]);

//echo '<pre>';
//var_dump();
//echo '</pre>';
?>


<!-- ---------- ********** СЕКЦИЯ VALS ********** ---------- -->

<? if ($VALS): ?>

    <section class="hr-vals">
        <div class="hr-vals--div__CONT C-CONTAINER">
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                Наши ценности
            </h2>


            <div class="st-main--div__GRID2_CONT">
                <div class="st-main--div__GRID2">


                    <? foreach ($arResult['PROPERTIES']['NASHI_CENNOSTY']['HIGH_DATA'] as $data): ?>
                        <div class="st-main--div__GRID2_ITEM __C-SCRL DOWN">
                            <button class="st-main--button__GRID2_ITEM_TOP">
                                <div class="st-main--div__GRID2_ITEM_IMAGE">
                                    <img class="st-main--img__GRID2_ITEM_IMAGE" src="<?= $data['UF_SVG_1']['SRC'] ?>"
                                         alt=""
                                         loading="lazy">
                                    <img class="st-main--img__GRID2_ITEM_IMAGE" src="<?= $data['UF_SVG_2']['SRC'] ?>"
                                         alt=""
                                         loading="lazy">
                                </div>
                                <p class="st-main--p__GRID2_ITEM_TOP">
                                    <?= $data['UF_NAME'] ?>
                                </p>
                                <svg class="st-main--svg__GRID2_ITEM_TOP" width="27" height="13" viewBox="0 0 27 13"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.0859375 0.0910645L13.0859 12.3264L26.0859 0.0910645" stroke="#0C0C0C"
                                          stroke-width="0.25"/>
                                </svg>
                            </button>
                            <p class="st-main--p__GRID2_ITEM_BODY">
                                <?= $data['UF_TEXT'] ?>
                            </p>
                        </div>
                    <? endforeach ?>

                </div>
            </div>
        </div>
    </section>

<? endif ?>


<!-- ---------- ********** СЕКЦИЯ POLT ********** ---------- -->

<? if ($POLT): ?>
    <section class="hr-polt">
        <div class="hr-polt--div__CONT C-CONTAINER">
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                Корпоративная политика
            </h2>

            <? if (!empty($arResult["DISPLAY_PROPERTIES"]['KOORP_POLITIKA_1']['~VALUE']['TEXT'])): ?>
                <?= $arResult["DISPLAY_PROPERTIES"]['KOORP_POLITIKA_1']['~VALUE']['TEXT'] ?>
            <? endif; ?>

            <? if (!empty($arResult["DISPLAY_PROPERTIES"]['KOORP_POLITIKA_1']['~VALUE']['TEXT']) && !empty($arResult["DISPLAY_PROPERTIES"]['KOORP_POLITIKA_2']['~VALUE']['TEXT'])): ?>
                <button class="hr-polt--button__ELSE __C-SCRL DOWN">
                    <span class="hr-polt--span__ELSE">
                        читать полностью
                    </span>
                    <svg class="hr-polt--svg__ELSE" width="22" height="28" viewBox="0 0 22 28" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.6768 0L10.6768 27.5M10.6768 27.5L21.1768 17M10.6768 27.5L0.176758 17"
                              stroke="#005792"
                              stroke-width="0.5"/>
                    </svg>
                </button>
            <? endif; ?>


            <? if (!empty($arResult["DISPLAY_PROPERTIES"]['KOORP_POLITIKA_2']['~VALUE']['TEXT'])): ?>
                <div class="hr-polt--div__ELSE">
                    <?= $arResult["DISPLAY_PROPERTIES"]['KOORP_POLITIKA_2']['~VALUE']['TEXT'] ?>
                    <button class="hr-polt--button__ELSE _HIDE __C-SCRL DOWN">
                        <span class="hr-polt--span__ELSE">
                            скрыть
                        </span>
                        <svg class="hr-polt--svg__ELSE" width="22" height="28" viewBox="0 0 22 28" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.6768 0L10.6768 27.5M10.6768 27.5L21.1768 17M10.6768 27.5L0.176758 17"
                                  stroke="#005792"
                                  stroke-width="0.5"/>
                        </svg>
                    </button>
                </div>
            <? endif; ?>

        </div>
    </section>
<? endif ?>

<!-- ---------- ********** СЕКЦИЯ WORD ********** ---------- -->

<? if ($WORD): ?>
    <section class="hr-word" id="hr-word">
        <div class="hr-word--div__CONT C-CONTAINER">
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                Слово команды
            </h2>

            <div class="hr-word--div__SWIPER __C-SCRL DOWN swiper">
                <div class="hr-word--div__SWIPER_WRAPPER swiper-wrapper">

                    <? foreach ($arResult['PROPERTIES']['SLOVO_KOMANDY']['HIGH_DATA'] as $data): ?>
                        <div class="hr-word--div__SWIPER_SLIDE swiper-slide">
                            <div class="hr-word--div__CARD color-back-yellow">
                                <div class="hr-word--div__SVG">
                                    <svg class="hr-word--svg__SVG" width="42" height="31" viewBox="0 0 42 31"
                                         fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25.1189 28.2678C27.2347 27.2566 33.1789 23.559 34.6311 16.6317H25.4394V0H42V10.1219C41.8347 24.291 30.0941 29.4274 26.1154 30.7606L25.1214 28.2678H25.1189Z"
                                              fill="#FAC05E"/>
                                        <path d="M-0.00123596 28.2678C2.11454 27.2566 8.05873 23.559 9.51098 16.6317H0.31926V0H16.8799V10.1219C16.7146 24.291 4.97396 29.4274 0.995309 30.7606L0.00127029 28.2678H-0.00123596Z"
                                              fill="#FAC05E"/>
                                    </svg>
                                </div>
                                <div class="hr-word--div__CONTENT">
                                    <div class="hr-word--div__IMAGE_CONT">
                                        <img class="hr-word--img__IMAGE" src="<?= $data['UF_FILE']['SRC'] ?>" alt=""
                                             loading="lazy">
                                    </div>

                                    <div class="hr-word--div__TEXT">
                                        <div class="hr-word--div__QUOTE_TEXT">
                                            <p class="st-main--p__DESCR2">
                                                <?= $data['UF_TEXT_1'] ?>
                                            </p>

                                            <p class="st-main--p__DESCR2">
                                                <?= $data['UF_TEXT_2'] ?>
                                            </p>
                                        </div>

                                        <div class="hr-word--div__BOTTOM">
                                            <div class="hr-word--div__BOTTOM_LEFT">
                                                <p class="hr-word--p__NAME">
                                                    <?= $data['UF_NAME'] ?>
                                                </p>
                                                <p class="hr-word--p__POST">
                                                    <?= $data['UF_DOLJNOST'] ?>
                                                </p>
                                            </div>

                                            <a class="hr-word--a__TAG" href="#">
                                                #маркетинг
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endforeach ?>


                </div>

                <div class="hr-word--div__SWIPER_NAV">
                    <button class="hr-word--button__SWIPER_PREV">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                    <div class="hr-word--div__SWIPER_NAV_LINE"></div>
                    <button class="hr-word--button__SWIPER_NEXT">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
<? endif ?>

<!-- ---------- ********** СЕКЦИЯ ADV ********** ---------- -->

<? if ($ADV): ?>
    <section class="hr-adv" id="hr-adv">
        <div class="hr-adv--div__CONT C-CONTAINER">
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                Преимущества
            </h2>

            <div class="hr-adv--div__MAIN">
                <div class="hr-adv--div__RIGHT __C-SCRL DOWN">
                    <p class="hr-adv--p__RIGHT_TOP">
                        Чем привлекательна работа в «АТБ Электроника»?
                    </p>

                    <div class="hr-adv--div__IMAGES">
                        <div class="hr-adv--div__IMAGE_CONT">
                            <img class="hr-adv--img__IMAGE" src="/local/templates/main/assets/images/home/hm-des_2.png"
                                 alt="" loading="lazy">
                        </div>
                        <div class="hr-adv--div__IMAGE_ADD1"></div>
                        <div class="hr-adv--div__IMAGE_ADD2"></div>
                    </div>
                </div>


                <ul class="hr-adv--ul__LIST __C-SCRL LEFT">

                    <? foreach ($arResult['PROPERTIES']['PREIMUSHESTVA']['HIGH_DATA'] as $data): ?>
                        <li class="hr-adv--li__LIST __C-SCRL DOWN">
                            <button class="hr-adv--button__LIST_TOP">
                                <span class="hr-adv--span__LIST_TOP">
                                     <?= $data['UF_NAME'] ?>
                                </span>
                                <div class="hr-adv--div__LIST_TOP">
                                    <svg class="hr-adv--svg__LIST_TOP" width="14" height="7" viewBox="0 0 14 7"
                                         fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 0.5L7 6.61765L13.5 0.500001" stroke="white"
                                              stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </button>


                            <div class="hr-adv--div__LIST_BOTTOM">
                                <p class="st-main--p__DESCR2">
                                    <?= $data['UF_DESCRIPTION'] ?>
                                </p>
                            </div>
                        </li>

                    <? endforeach ?>
                </ul>
            </div>
        </div>
    </section>
<? endif ?>

<!-- ---------- ********** СЕКЦИЯ HST ********** ---------- -->

<? if ($HST): ?>
    <section class="hr-hst" id="hr-hst">
        <div class="hr-hst--div__CONT C-CONTAINER">
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                Истории роста
            </h2>


            <div class="hr-hst--div__SWIPER __C-SCRL DOWN swiper">
                <div class="hr-hst--div__SWIPER_WRAPPER swiper-wrapper">


                    <? foreach ($arResult['PROPERTIES']['ISTORIY_ROSTA']['HIGH_DATA'] as $data): ?>
                        <div class="hr-hst--div__SWIPER_SLIDE swiper-slide">
                            <div class="hr-hst--div__CARD color-back-blue __C-SCRL">
                                <button class="hr-hst--button__CARD">
                                    <p class="hr-hst--p__CARD_NAME">
                                        <?= $data['UF_NAME'] ?>
                                    </p>
                                    <p class="hr-hst--p__CARD_POST">
                                        <?= $data['UF_POST'] ?>
                                    </p>

                                    <svg class="hr-hst--svg__CARD_1" width="28" height="23" viewBox="0 0 28 23"
                                         fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.3141 2.70421C10.9428 3.22115 7.03193 5.22746 5.66704 9.61287L11.326 10.2076L10.1956 20.962L0 19.8904L0.68791 13.3454C1.75262 4.19405 9.32992 1.63245 11.87 1.02786L12.3126 2.70404L12.3141 2.70421Z"
                                              fill="hsla(0, 0%, 75%, 80%)"/>
                                        <path d="M27.776 4.32921C26.4047 4.84615 22.4938 6.85246 21.129 11.2379L26.7879 11.8326L25.6576 22.587L15.4619 21.5154L16.1498 14.9704C17.2145 5.81905 24.7918 3.25745 27.3319 2.65286L27.7745 4.32904L27.776 4.32921Z"
                                              fill="hsla(0, 0%, 75%, 80%)"/>
                                    </svg>

                                    <blockquote class="hr-hst--blockquote__CARD">
                                        <?= $data['UF_CITATA'] ?>
                                    </blockquote>

                                    <svg class="hr-hst--svg__CARD_2" width="31" height="31" viewBox="0 0 31 31"
                                         fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <rect x="2.9268" width="28" height="28" rx="6" transform="rotate(6 2.9268 0)"
                                              fill="hsla(0, 0%, 75%, 80%)"/>
                                        <line x1="8.04859" y1="14.6527" x2="22.7178" y2="16.1945" stroke="white"
                                              stroke-linecap="round"/>
                                        <line x1="14.6429" y1="22.7356" x2="16.1847" y2="8.06643" stroke="white"
                                              stroke-linecap="round"/>
                                    </svg>
                                </button>
                                <div class="hr-hst--div__IMAGE_CONT">
                                    <img class="hr-hst--img__IMAGE" src="<?= $data['UF_FILE']['SRC'] ?>" alt=""
                                         loading="lazy">
                                </div>
                            </div>
                        </div>

                    <? endforeach ?>
                </div>

                <div class="hr-hst--div__SWIPER_NAV">
                    <button class="hr-hst--button__SWIPER_PREV">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                    <div class="hr-hst--div__SWIPER_NAV_LINE"></div>
                    <button class="hr-hst--button__SWIPER_NEXT">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                </div>
            </div>


            <div class="hr-hst--div__POPUPS">
                <? foreach ($arResult['PROPERTIES']['ISTORIY_ROSTA']['HIGH_DATA'] as $data): ?>
                    <div class="hr-hst--div__POPUP">
                        <div class="hr-hst--div__POPUP_CONT">
                            <button class="hr-hst--button__POPUP_CLOSE">
                                <svg class="hr-hst--svg__POPUP_CLOSE" width="15" height="15" viewBox="0 0 15 15"
                                     fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect width="19.6727" height="1.50269" rx="0.751343"
                                          transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)"
                                          fill="#005792"></rect>
                                    <rect width="19.6727" height="1.50269" rx="0.751343"
                                          transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)"
                                          fill="#005792"></rect>
                                </svg>
                            </button>

                            <div class="hr-hst--div__POPUP_TOP">
                                <div class="hr-hst--div__POPUP_TOP_TEXT __C-SCRL LEFT">
                                    <p class="hr-hst--p__POPUP_TOP_NAME">
                                        <?= $data['UF_NAME'] ?>
                                    </p>
                                    <p class="hr-hst--p__POPUP_TOP_POST">
                                        <?= $data['UF_POST'] ?>
                                    </p>
                                </div>

                                <div class="hr-hst--div__POPUP_IMAGES __C-SCRL RIGHT">
                                    <div class="hr-hst--div__POPUP_IMAGE_CONT">
                                        <img class="hr-hst--img__POPUP_IMAGE" src="<?= $data['UF_FILE']['SRC'] ?>"
                                             alt=""
                                             loading="lazy">
                                    </div>
                                    <div class="hr-hst--div__POPUP_IMAGE_ADD1"></div>
                                    <div class="hr-hst--div__POPUP_IMAGE_ADD2"></div>
                                </div>
                            </div>

                            <div class="hr-hst--div__POPUP_BODY">
                                <div class="st-main--div__QUOTE3 __C-SCRL DOWN">
                                    <div class="st-main--div__QUOTE3_LINE_CONT">
                                        <svg class="st-main--svg__QUOTE3" width="44" height="32" viewBox="0 0 44 32"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_4202_2299)">
                                                <mask id="mask0_4202_2299" style="mask-type:luminance"
                                                      maskUnits="userSpaceOnUse" x="0" y="0" width="44" height="32">
                                                    <path d="M44 0H0V32H44V0Z" fill="white"></path>
                                                </mask>
                                                <g mask="url(#mask0_4202_2299)">
                                                    <path d="M17.685 29.4068C15.4685 28.3549 9.2412 24.5083 7.7198 17.3018H17.3492V0H0V10.5297C0.173125 25.2698 12.4729 30.6131 16.641 32L17.6824 29.4068H17.685Z"
                                                          fill="#4CC4D7"></path>
                                                    <path d="M43.9975 29.4068C41.781 28.3549 35.5537 24.5083 34.0323 17.3018H43.6617V0H26.3125V10.5297C26.4856 25.2698 38.7854 30.6131 42.9535 32L43.9949 29.4068H43.9975Z"
                                                          fill="#4CC4D7"></path>
                                                </g>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4202_2299">
                                                    <rect width="44" height="32" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <div class="st-main--div__QUOTE3_LINE1"></div>
                                    </div>
                                    <blockquote class="st-main--blockquote__QUOTE3">
                                        <p class="st-main--p__QUOTE3">
                                            <?= $data['UF_CITATA'] ?>
                                        </p>
                                    </blockquote>
                                    <div class="st-main--div__QUOTE3_LINE_CONT">
                                        <div class="st-main--div__QUOTE3_LINE1"></div>
                                        <svg class="st-main--svg__QUOTE3 SEC" width="44" height="32" viewBox="0 0 44 32"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_4202_2299)">
                                                <mask id="mask0_4202_2299" style="mask-type:luminance"
                                                      maskUnits="userSpaceOnUse" x="0" y="0" width="44" height="32">
                                                    <path d="M44 0H0V32H44V0Z" fill="white"></path>
                                                </mask>
                                                <g mask="url(#mask0_4202_2299)">
                                                    <path d="M17.685 29.4068C15.4685 28.3549 9.2412 24.5083 7.7198 17.3018H17.3492V0H0V10.5297C0.173125 25.2698 12.4729 30.6131 16.641 32L17.6824 29.4068H17.685Z"
                                                          fill="#4CC4D7"></path>
                                                    <path d="M43.9975 29.4068C41.781 28.3549 35.5537 24.5083 34.0323 17.3018H43.6617V0H26.3125V10.5297C26.4856 25.2698 38.7854 30.6131 42.9535 32L43.9949 29.4068H43.9975Z"
                                                          fill="#4CC4D7"></path>
                                                </g>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4202_2299">
                                                    <rect width="44" height="32" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="hr-hst--div__POPUP_BODY_TEXT __C-SCRL DOWN">
                                    <? foreach ($data['UF_TEXT'] as $text): ?>
                                        <p class="st-main--p__DESCR2">
                                            <?= $text ?>
                                        </p>
                                    <? endforeach ?>


                                </div>
                            </div>
                        </div>
                    </div>

                <? endforeach ?>


            </div>
        </div>
    </section>
<? endif ?>

<!-- ---------- ********** СЕКЦИЯ FAQ ********** ---------- -->

<? if ($FAQ): ?>
    <section class="hr-faq" id="hr-faq">
        <div class="hr-faq--div__CONT C-CONTAINER">
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                F.A.Q.
            </h2>


            <div class="hr-faq--div__MAIN">
                <div class="hr-faq--div__LEFT __C-SCRL DOWN">
                    <p class="hr-faq--p__LEFT_TOP">
                        Отвечаем на важные вопросы
                    </p>

                    <div class="hr-faq--div__IMAGES">
                        <div class="hr-faq--div__IMAGE_CONT">
                            <img class="hr-faq--img__IMAGE" src="/local/templates/main/assets/images/home/hm-des_2.png"
                                 alt="" loading="lazy">
                        </div>
                        <div class="hr-faq--div__IMAGE_ADD1"></div>
                        <div class="hr-faq--div__IMAGE_ADD2"></div>
                    </div>
                </div>


                <ul class="hr-faq--ul__LIST __C-SCRL RIGHT">

                    <? foreach ($arResult['PROPERTIES']['FAQ']['HIGH_DATA'] as $data): ?>

                        <li class="hr-faq--li__LIST __C-SCRL DOWN">
                            <button class="hr-faq--button__LIST_TOP">
                                <p class="hr-faq--p__LIST_TOP">
                                    <span class="hr-faq--span__LIST_TOP">
                                       <?= $data['UF_NAME'] ?>
                                    </span>
                                </p>

                                <div class="hr-faq--div__LIST_TOP">
                                    <svg class="hr-faq--svg__LIST_TOP" width="14" height="7" viewBox="0 0 14 7"
                                         fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 0.5L7 6.61765L13.5 0.500001" stroke="white"
                                              stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </button>


                            <div class="hr-faq--div__LIST_BOTTOM">
                                <? foreach ($data['UF_TEXT'] as $text): ?>
                                    <p class="st-main--p__DESCR2">
                                        <?= $text ?>
                                    </p>
                                <? endforeach ?>


                            </div>
                        </li>

                    <? endforeach ?>


                </ul>
            </div>


            <div class="hr-faq--div__REQUEST __C-SCRL DOWN">
                <div class="hr-faq--div__TEXT RIGHT">
                    <h3 class="hr-faq--h3">
                        Связаться с отделом персонала
                    </h3>
                    <p class="hr-faq--p__REQUEST">
                        Расскажите нам о себе, задайте вопрос о работе и возможностях развития в «АТБ Электроника»
                    </p>
                    <button class="hr-faq--button__REQUEST">
                        Отправить запрос
                    </button>
                </div>
            </div>
        </div>
    </section>
<? endif ?>

<!-- ---------- ********** СЕКЦИЯ BLOG ********** ---------- -->

<? if ($BLOG): ?>
    <section class="hr-blog" id="hr-blog">
        <div class="hr-blog--div__CONT C-CONTAINER">
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                HR-блог
            </h2>


            <div class="hr-blog--div__MOB">
                <div class="hr-blog--div__GRID">
                    <? foreach ($arResult['BLOG_ITEMS'] as $blogItem): ?>
                        <article class="hr-blog--article__CARD color-back-blue5 __C-SCRL DOWN">
                            <button class="hr-blog--button__CARD"></button>
                            <div class="hr-blog--div__CARD_IMAGE_CONT">
                                <img class="hr-blog--img__CARD_IMAGE"
                                     src="<?= $blogItem['DETAIL_PICTURE'] ?>" alt="" loading="lazy">
                            </div>
                            <p class="hr-blog--p__CARD_NAME">
                                <?= $blogItem['NAME'] ?>
                            </p>
                            <div class="hr-blog--div__CARD_BOTTOM">
                                <span class="hr-blog--span__CARD_DATE">
                                    <?= $blogItem['DATE'] ?>
                                </span>
                            </div>
                        </article>
                    <? endforeach; ?>
                </div>


                <div class="hr-blog--div__BOTTOM __C-SCRL DOWN">
                    <div class="hr-blog--div__IND">
                        <p class="hr-blog--p__IND">
                            Вы посмотрели
                            <span class="hr-blog--span__IND1">2</span>
                            из
                            <span class="hr-blog--span__IND2">10</span>
                            товаров
                        </p>

                        <div class="hr-blog--div__LINE0">
                            <div class="hr-blog--div__LINE1" style="width: 20%;"></div>
                        </div>
                    </div>

                    <button class="hr-blog--button__ELSE">
                            <span class="hr-blog--span__ELSE">
                                ПОКАЗАТЬ ЕЩЕ
                            </span>
                        <svg width="22" height="33" viewBox="0 0 22 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 0.5L11 33M11 33L0.5 22.5M11 33L21.5 22.5" stroke="#005792"
                                  stroke-width="0.5"></path>
                        </svg>
                    </button>
                </div>
            </div>


            <div class="hr-blog--div__SWIPER swiper __C-SCRL DOWN">
                <div class="hr-blog--div__SWIPER_WRAPPER swiper-wrapper">
                </div>
                <div class="hr-blog--div__SWIPER_NAV">
                    <button class="hr-blog--button__SWIPER_PREV">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                    <div class="hr-blog--div__SWIPER_NAV_LINE"></div>
                    <button class="hr-blog--button__SWIPER_NEXT">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                </div>
            </div>


            <div class="hr-blog--div__POPUPS">
                <? foreach ($arResult['BLOG_ITEMS'] as $blogItem): ?>
                    <div class="hr-blog--div__POPUP">
                        <div class="hr-blog--div__POPUP_CONT">
                            <button class="hr-blog--button__POPUP_CLOSE">
                                <svg class="hr-blog--svg__POPUP_CLOSE" width="15" height="15" viewBox="0 0 15 15"
                                     fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect width="19.6727" height="1.50269" rx="0.751343"
                                          transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)"
                                          fill="#005792"></rect>
                                    <rect width="19.6727" height="1.50269" rx="0.751343"
                                          transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)"
                                          fill="#005792"></rect>
                                </svg>
                            </button>

                            <div class="hr-blog--div__POPUP_TOP">
                                <p class="hr-blog--p__POPUP_NAME __C-SCRL DOWN">
                                    <?= $blogItem['NAME'] ?>
                                </p>
                                <p class="hr-blog--p__POPUP_DATE __C-SCRL DOWN">
                                    <?= $blogItem['DATE'] ?>
                                </p>
                            </div>

                            <? if (!empty($blogItem['TEXT_1'])): ?>
                                <div class="hr-blog--div__POPUP_TEXT1">
                                    <?= $blogItem['TEXT_1'] ?>
                                </div>
                            <? endif ?>

                            <? if (!empty($blogItem['TEXT_2'])): ?>
                                <div class="hr-polt--div__IMAGES_MAIN">
                                    <?= $blogItem['TEXT_2'] ?>
                                </div>
                            <? endif ?>

                            <? if (!empty($blogItem['TEXT_3'])): ?>
                                <div class="hr-polt--div__IMAGES_MAIN _SECOND">
                                    <?= $blogItem['TEXT_3'] ?>
                                </div>
                            <? endif ?>

                            <? if (!empty($blogItem['TEXT_4'])): ?>
                                <div class="hr-blog--div__POPUP_TEXT2">
                                    <?= $blogItem['TEXT_4'] ?>
                                </div>
                            <? endif ?>

                            <? if (!empty($blogItem['IMAGES']) && !empty($blogItem['VIDEO'])): ?>
                                <div class="mc-pk--div__FILES">
                                    <button class="mc-pk--button__OPEN">
                                    <span class="mc-pk--span__OPEN __C-SCRL RIGHT">
                                        Галерея
                                    </span>
                                        <svg class="mc-pk--svg__OPEN" width="27" height="13" viewBox="0 0 27 13"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.0859375 0.0917969L13.0859 12.3271L26.0859 0.0917969"
                                                  stroke="#0C0C0C"
                                                  stroke-width="0.25"></path>
                                        </svg>
                                    </button>

                                    <div class="mc-pk--div__BODY __C-SCRL LEFT">
                                        <form class="c-common--form__SUBMENU mc-pk--form__SUBMENU" action="#" method=""
                                              name="">
                                            <? if (!empty($blogItem['IMAGES'])): ?>
                                                <label class="mc-pk--label__SUBMENU">
                                                    <input class="mc-pk--input__SUBMENU" type="radio" name="1" value="">
                                                    <span class="mc-pk--span__SUBMENU">
                                                Фотогалерея
                                            </span>
                                                </label>
                                            <? endif ?>
                                            <? if (!empty($blogItem['VIDEO'])): ?>
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

                                <div class="hr-blog--div__POPUP_SWIPER_CONT">
                                    <div class="mc-pk--div__SWIPER1 swiper">
                                        <div class="mc-pk--div__SWIPER1_WRAPPER swiper-wrapper">
                                            <? if (!empty($blogItem['IMAGES'])): ?>
                                                <div class="mc-pk--div__SWIPER1_SLIDE swiper-slide">
                                                    <div class="mc-pk--div__GALLERY">
                                                        <div class="c-common--div__GLR_CONT2 __C-SCRL LEFT">
                                                            <div class="c-common--div__GLR_SWIPER swiper">
                                                                <div class="c-common--div__GLR_SWIPER_WRAPPER swiper-wrapper">
                                                                    <?foreach($blogItem['IMAGES'] as $image):?>
                                                                    <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                                        <div class="c-common--div__GLR_IMAGE">
                                                                            <img class="c-common--img__GLR_IMAGE"
                                                                                 src="<?=$image['SRC']?>"
                                                                                 alt=""
                                                                                 loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                    <?endforeach?>
                                                                </div>
                                                                <button class="c-common--button__GLR_LEFT">
                                                                    <svg width="30" height="47" viewBox="0 0 30 47"
                                                                         fill="none"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <g filter="url(#filter0_dd_2757_2526)">
                                                                            <path d="M5.4375 5.41125L21.4375 22.4113L5.4375 39.4113"
                                                                                  stroke="white" stroke-width="1.2"/>
                                                                        </g>
                                                                        <defs>
                                                                            <filter id="filter0_dd_2757_2526" x="0"
                                                                                    y="0"
                                                                                    width="29.2578" height="46.8225"
                                                                                    filterUnits="userSpaceOnUse"
                                                                                    color-interpolation-filters="sRGB">
                                                                                <feFlood flood-opacity="0"
                                                                                         result="BackgroundImageFix"/>
                                                                                <feColorMatrix in="SourceAlpha"
                                                                                               type="matrix"
                                                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                                               result="hardAlpha"/>
                                                                                <feOffset/>
                                                                                <feGaussianBlur stdDeviation="0.4"/>
                                                                                <feComposite in2="hardAlpha"
                                                                                             operator="out"/>
                                                                                <feColorMatrix type="matrix"
                                                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0"/>
                                                                                <feBlend mode="normal"
                                                                                         in2="BackgroundImageFix"
                                                                                         result="effect1_dropShadow_2757_2526"/>
                                                                                <feColorMatrix in="SourceAlpha"
                                                                                               type="matrix"
                                                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                                               result="hardAlpha"/>
                                                                                <feOffset dx="1" dy="1"/>
                                                                                <feGaussianBlur stdDeviation="3"/>
                                                                                <feComposite in2="hardAlpha"
                                                                                             operator="out"/>
                                                                                <feColorMatrix type="matrix"
                                                                                               values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
                                                                                <feBlend mode="hard-light"
                                                                                         in2="effect1_dropShadow_2757_2526"
                                                                                         result="effect2_dropShadow_2757_2526"/>
                                                                                <feBlend mode="normal"
                                                                                         in="SourceGraphic"
                                                                                         in2="effect2_dropShadow_2757_2526"
                                                                                         result="shape"/>
                                                                            </filter>
                                                                        </defs>
                                                                    </svg>
                                                                </button>
                                                                <button class="c-common--button__GLR_RIGHT">
                                                                    <svg width="30" height="47" viewBox="0 0 30 47"
                                                                         fill="none"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <g filter="url(#filter0_dd_2757_2526)">
                                                                            <path d="M5.4375 5.41125L21.4375 22.4113L5.4375 39.4113"
                                                                                  stroke="white" stroke-width="1.2"/>
                                                                        </g>
                                                                        <defs>
                                                                            <filter id="filter0_dd_2757_2526" x="0"
                                                                                    y="0"
                                                                                    width="29.2578" height="46.8225"
                                                                                    filterUnits="userSpaceOnUse"
                                                                                    color-interpolation-filters="sRGB">
                                                                                <feFlood flood-opacity="0"
                                                                                         result="BackgroundImageFix"/>
                                                                                <feColorMatrix in="SourceAlpha"
                                                                                               type="matrix"
                                                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                                               result="hardAlpha"/>
                                                                                <feOffset/>
                                                                                <feGaussianBlur stdDeviation="0.4"/>
                                                                                <feComposite in2="hardAlpha"
                                                                                             operator="out"/>
                                                                                <feColorMatrix type="matrix"
                                                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0"/>
                                                                                <feBlend mode="normal"
                                                                                         in2="BackgroundImageFix"
                                                                                         result="effect1_dropShadow_2757_2526"/>
                                                                                <feColorMatrix in="SourceAlpha"
                                                                                               type="matrix"
                                                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                                               result="hardAlpha"/>
                                                                                <feOffset dx="1" dy="1"/>
                                                                                <feGaussianBlur stdDeviation="3"/>
                                                                                <feComposite in2="hardAlpha"
                                                                                             operator="out"/>
                                                                                <feColorMatrix type="matrix"
                                                                                               values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
                                                                                <feBlend mode="hard-light"
                                                                                         in2="effect1_dropShadow_2757_2526"
                                                                                         result="effect2_dropShadow_2757_2526"/>
                                                                                <feBlend mode="normal"
                                                                                         in="SourceGraphic"
                                                                                         in2="effect2_dropShadow_2757_2526"
                                                                                         result="shape"/>
                                                                            </filter>
                                                                        </defs>
                                                                    </svg>
                                                                </button>
                                                            </div>

                                                            <div class="c-common--div__GLR_SWIPER_PAGINATION swiper-pagination dragscroll"></div>
                                                        </div>


                                                        <div class="mc-pk--div__GALLERY_TEXT __C-SCRL RIGHT">
<!--                                                            <div class="mc-pk--div__GALLERY_TEXT_TOP">-->
<!--                                                                <p class="mc-pk--p__GALLERY_TEXT_TOP">-->
<!--                                                                    Презентация сетевой вычислительной платформы-->
<!--                                                                    АТБ-АТОМ-1-->
<!--                                                                </p>-->
<!--                                                            </div>-->
<!--                                                            <p class="mc-pk--p__GALLERY_TEXT_INFO">-->
<!--                                                                Межсетевого экрана или шлюза совместно со-->
<!--                                                                специализированным российским ПО. АТБ-АТОМ-1-->
<!--                                                                поддерживает до 8 Гб оперативной памяти и до 256 Гб-->
<!--                                                                накопителя SSD-->
<!--                                                            </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            <? endif ?>

                                            <? if (!empty($blogItem['VIDEO'])): ?>
                                                <div class="mc-pk--div__SWIPER1_SLIDE swiper-slide">
                                                    <div class="mc-pk--div__GALLERY">
                                                        <div class="c-common--div__GLR_CONT2 __C-SCRL LEFT">
                                                            <div class="c-common--div__GLR_SWIPER swiper">
                                                                <div class="c-common--div__GLR_SWIPER_WRAPPER swiper-wrapper">
                                                                    <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                                        <div class="c-common--div__GLR_IMAGE">
                                                                            <img class="c-common--img__GLR_IMAGE"
                                                                                 src="/local/templates/main/assets/images/home/ATB-2100/АТБ-2100_2.webp"
                                                                                 alt=""
                                                                                 loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                    <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                                        <div class="c-common--div__GLR_IMAGE">
                                                                            <img class="c-common--img__GLR_IMAGE"
                                                                                 src="/local/templates/main/assets/images/home/ATB-2100/АТБ-2100_3.webp"
                                                                                 alt=""
                                                                                 loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                    <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                                        <div class="c-common--div__GLR_IMAGE">
                                                                            <img class="c-common--img__GLR_IMAGE"
                                                                                 src="/local/templates/main/assets/images/home/ATB-2100/АТБ-2100_4.webp"
                                                                                 alt=""
                                                                                 loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                    <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                                        <div class="c-common--div__GLR_IMAGE">
                                                                            <img class="c-common--img__GLR_IMAGE"
                                                                                 src="/local/templates/main/assets/images/home/ATB-2100/АТБ-2100_5.webp"
                                                                                 alt=""
                                                                                 loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                    <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                                        <div class="c-common--div__GLR_IMAGE">
                                                                            <img class="c-common--img__GLR_IMAGE"
                                                                                 src="/local/templates/main/assets/images/home/ATB-2100/АТБ-2100_6.webp"
                                                                                 alt=""
                                                                                 loading="lazy">
                                                                        </div>
                                                                    </div>

                                                                    <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                                        <div class="c-common--div__GLR_IMAGE">
                                                                            <img class="c-common--img__GLR_IMAGE"
                                                                                 src="/local/templates/main/assets/images/home/ATB-2100/АТБ-2100_1.webp"
                                                                                 alt=""
                                                                                 loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                    <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                                        <div class="c-common--div__GLR_IMAGE">
                                                                            <img class="c-common--img__GLR_IMAGE"
                                                                                 src="/local/templates/main/assets/images/home/ATB-2100/АТБ-2100_2.webp"
                                                                                 alt=""
                                                                                 loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                    <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                                        <div class="c-common--div__GLR_IMAGE">
                                                                            <img class="c-common--img__GLR_IMAGE"
                                                                                 src="/local/templates/main/assets/images/home/ATB-2100/АТБ-2100_3.webp"
                                                                                 alt=""
                                                                                 loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                    <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                                        <div class="c-common--div__GLR_IMAGE">
                                                                            <img class="c-common--img__GLR_IMAGE"
                                                                                 src="/local/templates/main/assets/images/home/ATB-2100/АТБ-2100_4.webp"
                                                                                 alt=""
                                                                                 loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                    <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                                        <div class="c-common--div__GLR_IMAGE">
                                                                            <img class="c-common--img__GLR_IMAGE"
                                                                                 src="/local/templates/main/assets/images/home/ATB-2100/АТБ-2100_5.webp"
                                                                                 alt=""
                                                                                 loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                    <div class="c-common--div__GLR_SWIPER_SLIDE swiper-slide">
                                                                        <div class="c-common--div__GLR_IMAGE">
                                                                            <img class="c-common--img__GLR_IMAGE"
                                                                                 src="/local/templates/main/assets/images/home/ATB-2100/АТБ-2100_6.webp"
                                                                                 alt=""
                                                                                 loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button class="c-common--button__GLR_LEFT">
                                                                    <svg width="30" height="47" viewBox="0 0 30 47"
                                                                         fill="none"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <g filter="url(#filter0_dd_2757_2526)">
                                                                            <path d="M5.4375 5.41125L21.4375 22.4113L5.4375 39.4113"
                                                                                  stroke="white" stroke-width="1.2"/>
                                                                        </g>
                                                                        <defs>
                                                                            <filter id="filter0_dd_2757_2526" x="0"
                                                                                    y="0"
                                                                                    width="29.2578" height="46.8225"
                                                                                    filterUnits="userSpaceOnUse"
                                                                                    color-interpolation-filters="sRGB">
                                                                                <feFlood flood-opacity="0"
                                                                                         result="BackgroundImageFix"/>
                                                                                <feColorMatrix in="SourceAlpha"
                                                                                               type="matrix"
                                                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                                               result="hardAlpha"/>
                                                                                <feOffset/>
                                                                                <feGaussianBlur stdDeviation="0.4"/>
                                                                                <feComposite in2="hardAlpha"
                                                                                             operator="out"/>
                                                                                <feColorMatrix type="matrix"
                                                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0"/>
                                                                                <feBlend mode="normal"
                                                                                         in2="BackgroundImageFix"
                                                                                         result="effect1_dropShadow_2757_2526"/>
                                                                                <feColorMatrix in="SourceAlpha"
                                                                                               type="matrix"
                                                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                                               result="hardAlpha"/>
                                                                                <feOffset dx="1" dy="1"/>
                                                                                <feGaussianBlur stdDeviation="3"/>
                                                                                <feComposite in2="hardAlpha"
                                                                                             operator="out"/>
                                                                                <feColorMatrix type="matrix"
                                                                                               values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
                                                                                <feBlend mode="hard-light"
                                                                                         in2="effect1_dropShadow_2757_2526"
                                                                                         result="effect2_dropShadow_2757_2526"/>
                                                                                <feBlend mode="normal"
                                                                                         in="SourceGraphic"
                                                                                         in2="effect2_dropShadow_2757_2526"
                                                                                         result="shape"/>
                                                                            </filter>
                                                                        </defs>
                                                                    </svg>
                                                                </button>
                                                                <button class="c-common--button__GLR_RIGHT">
                                                                    <svg width="30" height="47" viewBox="0 0 30 47"
                                                                         fill="none"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <g filter="url(#filter0_dd_2757_2526)">
                                                                            <path d="M5.4375 5.41125L21.4375 22.4113L5.4375 39.4113"
                                                                                  stroke="white" stroke-width="1.2"/>
                                                                        </g>
                                                                        <defs>
                                                                            <filter id="filter0_dd_2757_2526" x="0"
                                                                                    y="0"
                                                                                    width="29.2578" height="46.8225"
                                                                                    filterUnits="userSpaceOnUse"
                                                                                    color-interpolation-filters="sRGB">
                                                                                <feFlood flood-opacity="0"
                                                                                         result="BackgroundImageFix"/>
                                                                                <feColorMatrix in="SourceAlpha"
                                                                                               type="matrix"
                                                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                                               result="hardAlpha"/>
                                                                                <feOffset/>
                                                                                <feGaussianBlur stdDeviation="0.4"/>
                                                                                <feComposite in2="hardAlpha"
                                                                                             operator="out"/>
                                                                                <feColorMatrix type="matrix"
                                                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0"/>
                                                                                <feBlend mode="normal"
                                                                                         in2="BackgroundImageFix"
                                                                                         result="effect1_dropShadow_2757_2526"/>
                                                                                <feColorMatrix in="SourceAlpha"
                                                                                               type="matrix"
                                                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                                               result="hardAlpha"/>
                                                                                <feOffset dx="1" dy="1"/>
                                                                                <feGaussianBlur stdDeviation="3"/>
                                                                                <feComposite in2="hardAlpha"
                                                                                             operator="out"/>
                                                                                <feColorMatrix type="matrix"
                                                                                               values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
                                                                                <feBlend mode="hard-light"
                                                                                         in2="effect1_dropShadow_2757_2526"
                                                                                         result="effect2_dropShadow_2757_2526"/>
                                                                                <feBlend mode="normal"
                                                                                         in="SourceGraphic"
                                                                                         in2="effect2_dropShadow_2757_2526"
                                                                                         result="shape"/>
                                                                            </filter>
                                                                        </defs>
                                                                    </svg>
                                                                </button>
                                                            </div>

                                                            <div class="c-common--div__GLR_SWIPER_PAGINATION swiper-pagination dragscroll"></div>
                                                        </div>


                                                        <div class="mc-pk--div__GALLERY_TEXT __C-SCRL RIGHT">
                                                            <div class="mc-pk--div__GALLERY_TEXT_TOP">
                                                                <p class="mc-pk--p__GALLERY_TEXT_TOP">
                                                                    Презентация сетевой вычислительной платформы
                                                                    АТБ-АТОМ-1
                                                                </p>
                                                            </div>
                                                            <p class="mc-pk--p__GALLERY_TEXT_INFO">
                                                                Межсетевого экрана или шлюза совместно со
                                                                специализированным российским ПО. АТБ-АТОМ-1
                                                                поддерживает до 8 Гб оперативной памяти и до 256 Гб
                                                                накопителя SSD
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <? endif ?>
                                        </div>
                                    </div>
                                </div>
                            <? endif ?>

                        </div>
                    </div>
                <? endforeach; ?>


            </div>
        </div>
    </section>
<? endif ?>
