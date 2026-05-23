<?php

$TEXT_1 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_1']['~VALUE']['TEXT']);
$TEXT_2 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_2']['~VALUE']['TEXT']);
$TEXT_3 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_3']['~VALUE']['TEXT']);
$TEXT_4 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_4']['~VALUE']['TEXT']);

$FOTO_1 = !empty($arResult["DISPLAY_PROPERTIES"]['FOTO_1']['VALUE']);
$FOTO_2 = !empty($arResult["DISPLAY_PROPERTIES"]['FOTO_2']['VALUE']);


$SPISOK_6 = !empty($arResult["DISPLAY_PROPERTIES"]["SPISOK_6"]['VALUE']);

$isNotEmptyFOTO = is_array($arResult["PROPERTIES"]['FOTO']['VALUE']) && !empty($arResult["PROPERTIES"]['FOTO']['VALUE']);
$isNotEmptyVIDEO = is_array($arResult["PROPERTIES"]['VIDEO']['VALUE']) && !empty($arResult["PROPERTIES"]['VIDEO']['VALUE']);

if ($isNotEmptyGALLARY_FOTO && count($arResult["PROPERTIES"]['FOTO']['VALUE']) == 1) {
    $_array = $arResult["DISPLAY_PROPERTIES"]['FOTO']['FILE_VALUE'];
    $arResult["DISPLAY_PROPERTIES"]['FOTO']['FILE_VALUE'] = [$_array];
}

if ($isNotEmptyVIDEO && count($arResult["PROPERTIES"]['VIDEO']['VALUE']) == 1) {
    $_array = $arResult["DISPLAY_PROPERTIES"]['VIDEO']['FILE_VALUE'];
    $arResult["DISPLAY_PROPERTIES"]['VIDEO']['FILE_VALUE'] = [$_array];
}

?>


<section class="srv1-hero">
    <div class="srv1-hero--div__CONT C-CONTAINER">
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
                <a class="c-common--a__TABS _ACT _MARK">
                    услуги
                </a>
                <a class="c-common--a__TABS" href="/services/contract-manufacturing/">
                    контрактное производство
                </a>
                <a class="c-common--a__TABS" href="/services/custom-development/">
                    заказные разработки
                </a>
                <a class="c-common--a__TABS" href="/services/oem-odm-contracts/">
                    OEM/ODM – контракты
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
            Услуги
        </h2>

        <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_1']['~VALUE']['TEXT'] ?? '' ?>


        <div class="srv1-hero--div__MAIN">
            <div class="srv1-hero--div__HERO_MOB __C-SCRL DOWN">
                <div class="srv1-hero--div__HERO_MOB_IMAGES">
                    <div class="srv1-hero--div__HERO_MOB_IMAGE1">
                        <img class="srv1-hero--img__HERO_MOB_IMAGE1"
                             src="<?= $arResult["DISPLAY_PROPERTIES"]['FOTO_1']['VALUE']['SRC'] ?? AHILES3005_NO_IMAGE ?>"
                             alt=""
                             loading="lazy">
                    </div>
                    <div class="srv1-hero--div__HERO_MOB_IMAGE2">
                        <img class="srv1-hero--img__HERO_MOB_IMAGE2"
                             src="<?= $arResult["DISPLAY_PROPERTIES"]['FOTO_2']['VALUE']['SRC'] ?? AHILES3005_NO_IMAGE ?>"
                             alt=""
                             loading="lazy">
                    </div>
                </div>

                <p class="st-main--p__DESCR1 __C-SCRL DOWN">
                    <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_2']['~VALUE']['TEXT'] ?? '' ?>
                </p>

                <div class="st-main--div__QUOTE3 __C-SCRL DOWN">
                    <div class="st-main--div__QUOTE3_LINE_CONT">
                        <svg class="st-main--svg__QUOTE3" width="44" height="32" viewBox="0 0 44 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4202_2299)">
                                <mask id="mask0_4202_2299" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                                      y="0" width="44" height="32">
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
                        <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_3']['~VALUE']['TEXT'] ?? '' ?>
                    </blockquote>
                    <div class="st-main--div__QUOTE3_LINE_CONT">
                        <div class="st-main--div__QUOTE3_LINE1"></div>
                        <svg class="st-main--svg__QUOTE3 SEC" width="44" height="32" viewBox="0 0 44 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4202_2299)">
                                <mask id="mask0_4202_2299" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                                      y="0" width="44" height="32">
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
            </div>

            <div class="srv1-hero--div__HERO_DESK">
                <div class="srv1-hero--div__HERO_DESK_LEFT">
                    <div class="srv1-hero--div__HERO_DESK_LEFT_IMAGE __C-SCRL LEFT">
                        <img class="srv1-hero--img__HERO_DESK_LEFT_IMAGE"
                             src="<?= $arResult["DISPLAY_PROPERTIES"]['FOTO_1']['VALUE']['SRC'] ?? AHILES3005_NO_IMAGE ?>"
                             alt=""
                             loading="lazy">
                    </div>
                    <div class="st-main--div__QUOTE3 __C-SCRL DOWN">
                        <div class="st-main--div__QUOTE3_LINE_CONT">
                            <svg class="st-main--svg__QUOTE3" width="44" height="32" viewBox="0 0 44 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_4202_2299)">
                                    <mask id="mask0_4202_2299" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                          x="0" y="0" width="44" height="32">
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
                            <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_3']['~VALUE']['TEXT'] ?? '' ?>
                        </blockquote>
                        <div class="st-main--div__QUOTE3_LINE_CONT">
                            <div class="st-main--div__QUOTE3_LINE1"></div>
                            <svg class="st-main--svg__QUOTE3 SEC" width="44" height="32" viewBox="0 0 44 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_4202_2299)">
                                    <mask id="mask0_4202_2299" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                          x="0" y="0" width="44" height="32">
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
                </div>


                <div class="srv1-hero--div__HERO_DESK_RIGHT">
                    <p class="st-main--p__DESCR1 __C-SCRL RIGHT">
                        <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_2']['~VALUE']['TEXT'] ?? '' ?>
                    </p>
                    <div class="srv1-hero--div__HERO_DESK_RIGHT_IMAGE __C-SCRL DOWN">
                        <img class="srv1-hero--img__HERO_DESK_RIGHT_IMAGE"
                             src="<?= $arResult["DISPLAY_PROPERTIES"]['FOTO_2']['VALUE']['SRC'] ?? AHILES3005_NO_IMAGE ?>"
                             alt="" loading="lazy">
                    </div>
                </div>
            </div>


            <div class="srv1-hero--div__LIST">
                <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_4']['~VALUE']['TEXT'] ?? '' ?>

                <?
                $half = ceil(count($arResult["DISPLAY_PROPERTIES"]["SPISOK_6"]['~VALUE']) / 2); // Округление в большую сторону
                $part1 = array_slice($arResult["DISPLAY_PROPERTIES"]["SPISOK_6"]['~VALUE'], 0, $half);
                $part2 = array_slice($arResult["DISPLAY_PROPERTIES"]["SPISOK_6"]['~VALUE'], $half);
                ?>
                <? if ($SPISOK_6): ?>
                    <div class="srv1-hero--div__LIST_CONT">
                        <div class="srv1-hero--div__LIST_COL">
                            <? foreach ($part1 as $item): ?>
                                <div class="srv1-hero--div__LIST_ITEM __C-SCRL DOWN">
                                    <?= $item['TEXT'] ?>
                                </div>
                            <? endforeach; ?>
                        </div>

                        <? if ($part2): ?>
                            <div class="srv1-hero--div__LIST_COL">
                                <? foreach ($part2 as $item): ?>
                                    <div class="srv1-hero--div__LIST_ITEM __C-SCRL DOWN">
                                        <?= $item['TEXT'] ?>
                                    </div>
                                <? endforeach; ?>
                            </div>
                        <? endif; ?>
                    </div>
                <? endif; ?>

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


            <div class="srv1-hero--div__GALLERY">
                <? if ($isNotEmptyFOTO || $isNotEmptyVIDEO): ?>
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
                                <? if ($isNotEmptyFOTO): ?>
                                    <label class="mc-pk--label__SUBMENU">
                                        <input class="mc-pk--input__SUBMENU" type="radio" name="1" value="">
                                        <span class="mc-pk--span__SUBMENU">
                                    Фотогалерея
                                </span>
                                    </label>
                                <? endif ?>
                                <? if ($isNotEmptyVIDEO): ?>
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
                            <? if ($isNotEmptyFOTO): ?>
                                <div class="mc-pk--div__SWIPER1_SLIDE swiper-slide">
                                    <div class="mc-pk--div__GALLERY">
                                        <div class="c-common--div__GLR_CONT2 __C-SCRL LEFT">
                                            <div class="c-common--div__GLR_SWIPER swiper">
                                                <div class="c-common--div__GLR_SWIPER_WRAPPER swiper-wrapper">

                                                    <? foreach ($arResult["DISPLAY_PROPERTIES"]['FOTO']['FILE_VALUE'] as $slide): ?>
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
                                                            <filter id="filter0_dd_2757_2526" x="0" y="0"
                                                                    width="29.2578"
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
                                                                <feBlend mode="hard-light"
                                                                         in2="effect1_dropShadow_2757_2526"
                                                                         result="effect2_dropShadow_2757_2526"/>
                                                                <feBlend mode="normal" in="SourceGraphic"
                                                                         in2="effect2_dropShadow_2757_2526"
                                                                         result="shape"/>
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
                                                            <filter id="filter0_dd_2757_2526" x="0" y="0"
                                                                    width="29.2578"
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
                                                                <feBlend mode="hard-light"
                                                                         in2="effect1_dropShadow_2757_2526"
                                                                         result="effect2_dropShadow_2757_2526"/>
                                                                <feBlend mode="normal" in="SourceGraphic"
                                                                         in2="effect2_dropShadow_2757_2526"
                                                                         result="shape"/>
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="c-common--div__GLR_SWIPER_PAGINATION swiper-pagination dragscroll"></div>
                                        </div>

                                    </div>
                                </div>
                            <? endif ?>
                            <? if ($isNotEmptyVIDEO): ?>
                                <div class="mc-pk--div__SWIPER1_SLIDE swiper-slide">
                                    <div class="mc-pk--div__GALLERY">
                                        <div class="c-common--div__GLR_CONT2 __C-SCRL LEFT">
                                            <div class="c-common--div__GLR_SWIPER swiper">
                                                <div class="c-common--div__GLR_SWIPER_WRAPPER swiper-wrapper">

                                                    <? foreach ($arResult["DISPLAY_PROPERTIES"]['VIDEO']['FILE_VALUE'] as $slide): ?>
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
                                                            <filter id="filter0_dd_2757_2526" x="0" y="0"
                                                                    width="29.2578"
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
                                                                <feBlend mode="hard-light"
                                                                         in2="effect1_dropShadow_2757_2526"
                                                                         result="effect2_dropShadow_2757_2526"/>
                                                                <feBlend mode="normal" in="SourceGraphic"
                                                                         in2="effect2_dropShadow_2757_2526"
                                                                         result="shape"/>
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
                                                            <filter id="filter0_dd_2757_2526" x="0" y="0"
                                                                    width="29.2578"
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
                                                                <feBlend mode="hard-light"
                                                                         in2="effect1_dropShadow_2757_2526"
                                                                         result="effect2_dropShadow_2757_2526"/>
                                                                <feBlend mode="normal" in="SourceGraphic"
                                                                         in2="effect2_dropShadow_2757_2526"
                                                                         result="shape"/>
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="c-common--div__GLR_SWIPER_PAGINATION swiper-pagination dragscroll"></div>
                                        </div>


                                    </div>
                                </div>
                            <? endif ?>
                        </div>
                    </div>
                <? endif ?>
            </div>
        </div>
    </div>
</section>



