<!-- ---------- ********** СЕКЦИЯ HERO ********** ---------- -->

<?php

$O_KOMPANII = !empty($arResult["DISPLAY_PROPERTIES"]['O_KOMPANII']['~VALUE']['TEXT']);
$VIDENIE_I_MISSIYA_1 = !empty($arResult["DISPLAY_PROPERTIES"]['VIDENIE_I_MISSIYA_1']['~VALUE']['TEXT']);
$VIDENIE_I_MISSIYA_2 = !empty($arResult["DISPLAY_PROPERTIES"]['VIDENIE_I_MISSIYA_2']['~VALUE']['TEXT']);
$VIDENIE_I_MISSIYA_3 = !empty($arResult["DISPLAY_PROPERTIES"]['VIDENIE_I_MISSIYA_3']['~VALUE']['TEXT']);
$VIDENIE_I_MISSIYA_4 = !empty($arResult["DISPLAY_PROPERTIES"]['VIDENIE_I_MISSIYA_4']['~VALUE']['TEXT']);
$PREIMUSHESTVO_KOMPANII = !empty($arResult["DISPLAY_PROPERTIES"]['PREIMUSHESTVO_KOMPANII']['VALUE']);

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

//echo '<pre>';
//var_dump();
//echo '</pre>';
?>

<section class="ab-hero" id="ab-hero">
    <div class="ab-hero--div__CONT C-CONTAINER">
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
                <a class="c-common--a__TABS _ACT _MARK" href="#ab-hero">
                    о компании
                </a>
                <a class="c-common--a__TABS" href="#ab-hst">
                    история
                </a>
                <a class="c-common--a__TABS" href="#ab-exp">
                    экспертиза
                </a>
                <a class="c-common--a__TABS" href="#ab-par">
                    партнеры
                </a>
                <a class="c-common--a__TABS" href="#ab-reg">
                    реестры
                </a>
                <a class="c-common--a__TABS" href="#ab-doc">
                    документы
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
            О компании
        </h2>

        <p class="ab-hero--p__TOP __C-SCRL LEFT">
            «АТБ Электроника» — российские решения для цифровой
            трансформации промышленности
        </p>


        <div class="ab-hero--div__MAIN">
            <div class="ab-hero--div__IMAGES __C-SCRL DOWN">
                <div class="ab-hero--div__IMAGE_MAIN __C-SCRL RIGHT">
                    <img class="ab-hero--img__IMAGE_MAIN" src="/images/about/about-hero_main.jpg" alt="" loading="lazy">
                </div>
                <div class="ab-hero--div__IMAGE_ADD __C-SCRL LEFT">
                    <img class="ab-hero--img__IMAGE_ADD" src="/images/about/about-hero_add.jpg" alt="" loading="lazy">
                </div>
            </div>

            <div class="ab-hero--div__TEXT">

                <?= $arResult["DISPLAY_PROPERTIES"]['O_KOMPANII']['~VALUE']['TEXT'] ?>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ QUOTE ********** ---------- -->


<section class="ab-quote">
    <div class="ab-quote--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Видение и миссия
        </h2>


        <div class="ab-quote--div__MAIN">
            <div class="ab-quote--div__SVG __C-SCRL DOWN">
                <svg class="ab-quote--svg__SVG" width="42" height="31" viewBox="0 0 42 31" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.1189 28.2678C27.2347 27.2566 33.1789 23.559 34.6311 16.6317H25.4394V0H42V10.1219C41.8347 24.291 30.0941 29.4274 26.1154 30.7606L25.1214 28.2678H25.1189Z"
                          fill="#4CC4D7"></path>
                    <path d="M-0.00123596 28.2678C2.11454 27.2566 8.05873 23.559 9.51098 16.6317H0.31926V0H16.8799V10.1219C16.7146 24.291 4.97396 29.4274 0.995309 30.7606L0.00127029 28.2678H-0.00123596Z"
                          fill="#4CC4D7"></path>
                </svg>
            </div>
            <div class="ab-quote--div__IMAGE __C-SCRL DOWN">

                <?= $arResult["DISPLAY_PROPERTIES"]['VIDENIE_I_MISSIYA_1']['~VALUE']['TEXT'] ?? '' ?>
            </div>


            <div class="ab-quote--div__TEXT __C-SCRL LEFT">
                <div class="ab-quote--div__DESCR __C-SCRL DOWN">
                    <?= $arResult["DISPLAY_PROPERTIES"]['VIDENIE_I_MISSIYA_2']['~VALUE']['TEXT'] ?? '' ?>
                </div>


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
                        <p class="st-main--p__QUOTE3">
                            <?= $arResult["DISPLAY_PROPERTIES"]['VIDENIE_I_MISSIYA_3']['~VALUE']['TEXT'] ?? '' ?>
                        </p>
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


                <div class="ab-quote--div__TEXT_BOTTOM __C-SCRL DOWN">
                    <?= $arResult["DISPLAY_PROPERTIES"]['VIDENIE_I_MISSIYA_4']['~VALUE']['TEXT'] ?? '' ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ ADV ********** ---------- -->

<? if ($PREIMUSHESTVO_KOMPANII): ?>
    <section class="ab-adv">
        <div class="ab-adv--div__CONT C-CONTAINER">
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                Преимущества
            </h2>


            <div class="st-main--div__GRID2_CONT">
                <div class="st-main--div__GRID2">
                    <? foreach ($arResult['PROPERTIES']['PREIMUSHESTVO_KOMPANII']['HIGH_DATA'] as $data): ?>
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
                                     fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.0859375 0.0910645L13.0859 12.3264L26.0859 0.0910645" stroke="#0C0C0C"
                                          stroke-width="0.25"/>
                                </svg>
                            </button>
                            <p class="st-main--p__GRID2_ITEM_BODY">

                            </p>
                        </div>
                    <? endforeach ?>
                </div>
            </div>
        </div>
    </section>
<? endif ?>

<!-- ---------- ********** СЕКЦИЯ MED ********** ---------- -->
<? if ($isNotEmptyGALLARY_FOTO || $isNotEmptyGALLARY_VIDEO): ?>

    <section class="ab-med">
        <div class="ab-med--div__CONT C-CONTAINER">
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                Медиагалерея
            </h2>


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

        </div>
    </section>
<? endif ?>

<!-- ---------- ********** СЕКЦИЯ HST ********** ---------- -->


<section class="ab-hst" id="ab-hst">
    <div class="ab-hst--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            История
        </h2>


        <div class="ab-hst--div__MOB __C-SCRL DOWN">
            <div class="ab-hst--div__SWIPER swiper">
                <div class="ab-hst--div__SWIPER_WRAPPER swiper-wrapper">
                    <div class="ab-hst--div__SWIPER_SLIDE swiper-slide">
                        <div class="ab-hst--div__MOB_ITEM">
                            <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                                <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                            </svg>
                            <p class="ab-hst--p__MOB_YEAR">
                                2025
                            </p>
                            <div class="ab-hst--div__MOB_LINE"></div>
                            <p class="ab-hst--p__MOB_TEXT">
                                «АТБ Электроника» разрабатывает и выводит на рынок
                                аппаратные платформы и комплексные решения для
                                автоматизации систем управления технологическими
                                процессами в электроэнергетике, ТЭК и промышленности.
                            </p>
                        </div>
                    </div>
                    <div class="ab-hst--div__SWIPER_SLIDE swiper-slide">
                        <div class="ab-hst--div__MOB_ITEM">
                            <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                                <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                            </svg>
                            <p class="ab-hst--p__MOB_YEAR">
                                2023
                            </p>
                            <div class="ab-hst--div__MOB_LINE"></div>
                            <p class="ab-hst--p__MOB_TEXT">
                                «АТБ Электроника» выходит на рынок с решениями
                                для автоматизации систем управления зданиями и
                                сооружениями и новой линейкой параметрических
                                контроллеров для управления системами вентиляции
                                АТБ-2100.
                            </p>
                        </div>
                    </div>
                    <div class="ab-hst--div__SWIPER_SLIDE swiper-slide">
                        <div class="ab-hst--div__MOB_ITEM">
                            <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                                <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                            </svg>
                            <p class="ab-hst--p__MOB_YEAR">
                                2022
                            </p>
                            <div class="ab-hst--div__MOB_LINE"></div>
                            <p class="ab-hst--p__MOB_TEXT">
                                «АТБ Электроника» открывает новое направление разработки
                                и производства — процессорные модули. Разработан модельный
                                ряд контроллеров и датчиков для автоматизированных систем
                                управления освещением (АСУНО).
                            </p>
                        </div>
                    </div>
                    <div class="ab-hst--div__SWIPER_SLIDE swiper-slide">
                        <div class="ab-hst--div__MOB_ITEM">
                            <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                                <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                            </svg>
                            <p class="ab-hst--p__MOB_YEAR">
                                2021
                            </p>
                            <div class="ab-hst--div__MOB_LINE"></div>
                            <p class="ab-hst--p__MOB_TEXT">
                                Разработан модельный ряд устройств для промышленного
                                интернета вещей (IIOT): модемы, базовые станции, датчики
                                и SOM-модули. Компания разрабатывает, выводит на рынок
                                и вносит в Реестр Российской продукции Минпромторга
                                платформы аппаратные и мини-компьютеры для систем
                                информационной безопасности и защиты критической
                                информационной инфраструктуры (КИИ).
                            </p>
                        </div>
                    </div>
                    <div class="ab-hst--div__SWIPER_SLIDE swiper-slide">
                        <div class="ab-hst--div__MOB_ITEM">
                            <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                                <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                            </svg>
                            <p class="ab-hst--p__MOB_YEAR">
                                2015
                            </p>
                            <div class="ab-hst--div__MOB_LINE"></div>
                            <p class="ab-hst--p__MOB_TEXT">
                                Принято решение о создании отдела проектирования (R&D центра)
                                для разработки электроники и корпусных решений под заказ.
                            </p>
                        </div>
                    </div>
                    <div class="ab-hst--div__SWIPER_SLIDE swiper-slide">
                        <div class="ab-hst--div__MOB_ITEM">
                            <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                                <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                            </svg>
                            <p class="ab-hst--p__MOB_YEAR">
                                2010
                            </p>
                            <div class="ab-hst--div__MOB_LINE"></div>
                            <p class="ab-hst--p__MOB_TEXT">
                                Руководством были приняты стратегические решения о приобретении
                                необходимого оборудования и запуске нового направления работ –
                                контрактной сборки электроники на собственных производственных
                                мощностях.
                            </p>
                        </div>
                    </div>
                    <div class="ab-hst--div__SWIPER_SLIDE swiper-slide">
                        <div class="ab-hst--div__MOB_ITEM">
                            <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                                <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                            </svg>
                            <p class="ab-hst--p__MOB_YEAR">
                                2005
                            </p>
                            <div class="ab-hst--div__MOB_LINE"></div>
                            <p class="ab-hst--p__MOB_TEXT">
                                Свою деятельность мы начали с поставок печатных плат
                                и электронных компонентов для производства электронного оборудования.
                            </p>
                        </div>
                    </div>


                </div>
                <div class="ab-hst--div__SWIPER_NAV">
                    <button class="ab-hst--button__SWIPER_PREV swiper-button-disabled" disabled="" tabindex="-1"
                            aria-label="Previous slide" aria-controls="swiper-wrapper-2e397d8c62b40696"
                            aria-disabled="true">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                    <div class="ab-hst--div__SWIPER_NAV_LINE"></div>
                    <button class="ab-hst--button__SWIPER_NEXT" tabindex="0" aria-label="Next slide"
                            aria-controls="swiper-wrapper-2e397d8c62b40696" aria-disabled="false">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>


        <div class="ab-hst--div__DESK">
            <div class="ab-hst--div__LEFT">
                <div class="ab-hst--div__LEFT_ITEM __C-SCRL DOWN">
                    <p class="ab-hst--p__LEFT_YEAR">
                        2025
                    </p>
                    <div class="c-common--div__LINE1">
                        <div class="c-common--div__LINE11"></div>
                        <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                            <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <p class="ab-hst--p__LEFT_TEXT">
                        «АТБ Электроника» разрабатывает и выводит на
                        рынок аппаратные платформы и комплексные решения
                        для автоматизации систем управления технологическими
                        процессами в электроэнергетике, ТЭК и промышленности.
                    </p>
                </div>

                <div class="ab-hst--div__LEFT_ITEM __C-SCRL DOWN">
                    <p class="ab-hst--p__LEFT_YEAR">
                        2022
                    </p>
                    <div class="c-common--div__LINE1">
                        <div class="c-common--div__LINE11"></div>
                        <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                            <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <p class="ab-hst--p__LEFT_TEXT">
                        «АТБ Электроника» открывает новое направление разработки
                        и производства — процессорные модули. Разработан модельный ряд
                        контроллеров и датчиков для автоматизированных систем
                        управления освещением (АСУНО).
                    </p>
                </div>

                <div class="ab-hst--div__LEFT_ITEM __C-SCRL DOWN">
                    <p class="ab-hst--p__LEFT_YEAR">
                        2015
                    </p>
                    <div class="c-common--div__LINE1">
                        <div class="c-common--div__LINE11"></div>
                        <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                            <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <p class="ab-hst--p__LEFT_TEXT">
                        Принято решение о создании отдела проектирования
                        (R&D центра) для разработки электроники и
                        корпусных решений под заказ.
                    </p>
                </div>

                <div class="ab-hst--div__LEFT_ITEM __C-SCRL DOWN">
                    <p class="ab-hst--p__LEFT_YEAR">
                        2005
                    </p>
                    <div class="c-common--div__LINE1">
                        <div class="c-common--div__LINE11"></div>
                        <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                            <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <p class="ab-hst--p__LEFT_TEXT">
                        Свою деятельность мы начали с поставок печатных
                        плат и электронных компонентов для производства
                        электронного оборудования.
                    </p>
                </div>
            </div>


            <div class="ab-hst--div__LINE"></div>


            <div class="ab-hst--div__RIGHT">
                <div class="ab-hst--div__RIGHT_ITEM __C-SCRL DOWN">
                    <p class="ab-hst--p__RIGHT_YEAR">
                        2023
                    </p>
                    <div class="c-common--div__LINE1">
                        <div class="c-common--div__LINE11"></div>
                        <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                            <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <p class="ab-hst--p__RIGHT_TEXT">
                        «АТБ Электроника» выходит на рынок с решениями
                        для автоматизации систем управления зданиями
                        и сооружениями и новой линейкой параметрических
                        контроллеров для управления системами вентиляции
                        АТБ-2100.
                    </p>
                </div>

                <div class="ab-hst--div__RIGHT_ITEM __C-SCRL DOWN">
                    <p class="ab-hst--p__RIGHT_YEAR">
                        2021
                    </p>
                    <div class="c-common--div__LINE1">
                        <div class="c-common--div__LINE11"></div>
                        <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                            <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <p class="ab-hst--p__RIGHT_TEXT">
                        Разработан модельный ряд устройств для промышленного интернета вещей (IIOT):
                        модемы, базовые станции, датчики и SOM-модули. Компания разрабатывает,
                        выводит на рынок и вносит в Реестр Российской продукции Минпромторга
                        платформы аппаратные и мини-компьютеры для систем информационной
                        безопасности и защиты критической информационной инфраструктуры (КИИ).
                    </p>
                </div>

                <div class="ab-hst--div__RIGHT_ITEM __C-SCRL DOWN">
                    <p class="ab-hst--p__RIGHT_YEAR">
                        2010
                    </p>
                    <div class="c-common--div__LINE1">
                        <div class="c-common--div__LINE11"></div>
                        <svg class="ab-hst--svg__ARR" width="16" height="16" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect x="16" width="16" height="16" rx="8" transform="rotate(90 16 0)" fill="#005792"/>
                            <path d="M6.72346 4L11 8.27654L6.72346 12.5531" stroke="white" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <p class="ab-hst--p__RIGHT_TEXT">
                        Руководством были приняты стратегические решения о
                        приобретении необходимого оборудования и запуске нового
                        направления работ – контрактной сборки электроники на
                        собственных производственных мощностях.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ EXP ********** ---------- -->


<section class="ab-exp" id="ab-exp">
    <div class="ab-exp--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Экспертиза
        </h2>


        <div class="st-main--div__DESCR3">
            <p class="st-main--p__DESCR3_TOP __C-SCRL DOWN">
                Мы сфокусированы на ключевых направлениях:
            </p>

            <ul class="st-main--ul__DESCR3 __C-SCRL DOWN">
                <li class="st-main--li__DESCR3">
                    <div class="st-main--div__DESCR3_POINT"></div>
                    <span class="st-main--span__DESCR3">
                                Аппаратные платформы для решений в области информационной безопасности и защиты КИИ;
                            </span>
                </li>
                <li class="st-main--li__DESCR3">
                    <div class="st-main--div__DESCR3_POINT"></div>
                    <span class="st-main--span__DESCR3">
                                Системы управления технологическими процессами (АСУ ТП);
                            </span>
                </li>
                <li class="st-main--li__DESCR3">
                    <div class="st-main--div__DESCR3_POINT"></div>
                    <span class="st-main--span__DESCR3">
                                Автоматизация инженерных систем зданий (АСУЗ);
                            </span>
                </li>
                <li class="st-main--li__DESCR3">
                    <div class="st-main--div__DESCR3_POINT"></div>
                    <span class="st-main--span__DESCR3">
                                Оборудование для промышленного интернета вещей (IIOT).
                            </span>
                </li>
            </ul>
        </div>


        <p class="st-main--p__DESCR2 __C-SCRL DOWN">
            Наши продукты включают пять поколений собственных
            промышленных контроллеров и программных платформ,
            успешно внедряются в КИИ, энергетике, нефтегазовой отрасли,
            промышленном производстве и смежных секторах.
        </p>


        <div class="st-main--div__GRID2">
            <div class="st-main--div__GRID2_ITEM __C-SCRL DOWN">
                <button class="st-main--button__GRID2_ITEM_TOP">
                    <div class="st-main--div__GRID2_ITEM_IMAGE">
                        <img class="st-main--img__GRID2_ITEM_IMAGE" src="/images/about/ab-exp_1.svg" alt=""
                             loading="lazy">
                        <img class="st-main--img__GRID2_ITEM_IMAGE" src="/images/about/ab-exp_1n.svg" alt=""
                             loading="lazy">
                    </div>
                    <p class="st-main--p__GRID2_ITEM_TOP">
                        Автоматизация электроэнергетики
                    </p>
                    <svg class="st-main--svg__GRID2_ITEM_TOP" width="27" height="13" viewBox="0 0 27 13" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0859375 0.0910645L13.0859 12.3264L26.0859 0.0910645" stroke="#0C0C0C"
                              stroke-width="0.25"></path>
                    </svg>
                </button>
                <div class="st-main--p__GRID2_ITEM_BODY">
                    <p class="st-main--p__DESCR2">
                        Решения для АСУ ТП в электроэнергетике:
                    </p>
                    <ul class="st-main--ul__DESCR3">
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Подстанционный уровень;
                                    </span>
                        </li>
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Уровень присоединения.
                                    </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="st-main--div__GRID2_ITEM __C-SCRL DOWN">
                <button class="st-main--button__GRID2_ITEM_TOP">
                    <div class="st-main--div__GRID2_ITEM_IMAGE">
                        <img class="st-main--img__GRID2_ITEM_IMAGE" src="/images/about/ab-exp_2.svg" alt=""
                             loading="lazy">
                        <img class="st-main--img__GRID2_ITEM_IMAGE" src="/images/about/ab-exp_2n.svg" alt=""
                             loading="lazy">
                    </div>
                    <p class="st-main--p__GRID2_ITEM_TOP">
                        Автоматизация инфраструктуры
                    </p>
                    <svg class="st-main--svg__GRID2_ITEM_TOP" width="27" height="13" viewBox="0 0 27 13" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0859375 0.0910645L13.0859 12.3264L26.0859 0.0910645" stroke="#0C0C0C"
                              stroke-width="0.25"></path>
                    </svg>
                </button>
                <div class="st-main--p__GRID2_ITEM_BODY">
                    <ul class="st-main--ul__DESCR3">
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        АСУ технологических процессов;
                                    </span>
                        </li>
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Решения и оборудование для промышленного интернета вещей;
                                    </span>
                        </li>
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Вычислительные системы и аппаратные платформы.
                                    </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="st-main--div__GRID2_ITEM __C-SCRL DOWN">
                <button class="st-main--button__GRID2_ITEM_TOP">
                    <div class="st-main--div__GRID2_ITEM_IMAGE">
                        <img class="st-main--img__GRID2_ITEM_IMAGE _THIRD" src="/images/about/ab-exp_3.svg" alt=""
                             loading="lazy">
                        <img class="st-main--img__GRID2_ITEM_IMAGE _THIRD" src="/images/about/ab-exp_3n.svg" alt=""
                             loading="lazy">
                    </div>
                    <p class="st-main--p__GRID2_ITEM_TOP">
                        Автоматизация зданий
                    </p>
                    <svg class="st-main--svg__GRID2_ITEM_TOP" width="27" height="13" viewBox="0 0 27 13" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0859375 0.0910645L13.0859 12.3264L26.0859 0.0910645" stroke="#0C0C0C"
                              stroke-width="0.25"></path>
                    </svg>
                </button>
                <div class="st-main--p__GRID2_ITEM_BODY">
                    <p class="st-main--p__DESCR2">
                        Решения для АСУ ТП зданий:
                    </p>
                    <ul class="st-main--ul__DESCR3">
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Для универсальных задач;
                                    </span>
                        </li>
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Для прикладных задач.
                                    </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="st-main--div__GRID2_ITEM DOWN __C-SCRL DOWN">
                <button class="st-main--button__GRID2_ITEM_TOP">
                    <div class="st-main--div__GRID2_ITEM_IMAGE">
                        <img class="st-main--img__GRID2_ITEM_IMAGE" src="/images/about/ab-exp_4.svg" alt=""
                             loading="lazy">
                        <img class="st-main--img__GRID2_ITEM_IMAGE" src="/images/about/ab-exp_4n.svg" alt=""
                             loading="lazy">
                    </div>
                    <p class="st-main--p__GRID2_ITEM_TOP">
                        Информационная безопасность
                    </p>
                    <svg class="st-main--svg__GRID2_ITEM_TOP" width="27" height="13" viewBox="0 0 27 13" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0859375 0.0910645L13.0859 12.3264L26.0859 0.0910645" stroke="#0C0C0C"
                              stroke-width="0.25"></path>
                    </svg>
                </button>
                <div class="st-main--p__GRID2_ITEM_BODY">
                    <p class="st-main--p__DESCR2">
                        Аппаратные платформы для сетевой безопасности:
                    </p>
                    <ul class="st-main--ul__DESCR3">
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Общего назначения;
                                    </span>
                        </li>
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        АСУ ТП.
                                    </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="st-main--div__GRID2_ITEM DOWN __C-SCRL DOWN">
                <button class="st-main--button__GRID2_ITEM_TOP">
                    <div class="st-main--div__GRID2_ITEM_IMAGE">
                        <img class="st-main--img__GRID2_ITEM_IMAGE" src="/images/about/ab-exp_5.svg" alt=""
                             loading="lazy">
                        <img class="st-main--img__GRID2_ITEM_IMAGE" src="/images/about/ab-exp_5n.svg" alt=""
                             loading="lazy">
                    </div>
                    <p class="st-main--p__GRID2_ITEM_TOP">
                        Транспорт и логистика
                    </p>
                    <svg class="st-main--svg__GRID2_ITEM_TOP" width="27" height="13" viewBox="0 0 27 13" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0859375 0.0910645L13.0859 12.3264L26.0859 0.0910645" stroke="#0C0C0C"
                              stroke-width="0.25"></path>
                    </svg>
                </button>
                <div class="st-main--p__GRID2_ITEM_BODY">
                    <ul class="st-main--ul__DESCR3">
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Оборудование и электроника для прикладных задач;
                                    </span>
                        </li>
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        АСУ основных технологических и производственных процессов;
                                    </span>
                        </li>
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Вычислительные системы и аппаратные платформы.
                                    </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="st-main--div__GRID2_ITEM DOWN __C-SCRL DOWN">
                <button class="st-main--button__GRID2_ITEM_TOP">
                    <div class="st-main--div__GRID2_ITEM_IMAGE">
                        <img class="st-main--img__GRID2_ITEM_IMAGE _SIXTH" src="/images/about/ab-exp_6.svg" alt=""
                             loading="lazy">
                        <img class="st-main--img__GRID2_ITEM_IMAGE _SIXTH" src="/images/about/ab-exp_6n.svg" alt=""
                             loading="lazy">
                    </div>
                    <p class="st-main--p__GRID2_ITEM_TOP">
                        Топливно-энергетический комплекс
                    </p>
                    <svg class="st-main--svg__GRID2_ITEM_TOP" width="27" height="13" viewBox="0 0 27 13" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0859375 0.0910645L13.0859 12.3264L26.0859 0.0910645" stroke="#0C0C0C"
                              stroke-width="0.25"></path>
                    </svg>
                </button>
                <div class="st-main--p__GRID2_ITEM_BODY">
                    <p class="st-main--p__DESCR2">
                        Решения для АСУ ТП в промышленности:
                    </p>
                    <ul class="st-main--ul__DESCR3">
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        АСУ основных технологических и производственных процессов;
                                    </span>
                        </li>
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        АСУ вторичных технологических процессов.
                                    </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="st-main--div__GRID2_ITEM DOWN __C-SCRL DOWN">
                <button class="st-main--button__GRID2_ITEM_TOP">
                    <div class="st-main--div__GRID2_ITEM_IMAGE">
                        <img class="st-main--img__GRID2_ITEM_IMAGE _SIXTH" src="/images/about/ab-exp_7.svg" alt=""
                             loading="lazy">
                        <img class="st-main--img__GRID2_ITEM_IMAGE _SIXTH" src="/images/about/ab-exp_7n.svg" alt=""
                             loading="lazy">
                    </div>
                    <p class="st-main--p__GRID2_ITEM_TOP">
                        Автоматизация промышленности
                    </p>
                    <svg class="st-main--svg__GRID2_ITEM_TOP" width="27" height="13" viewBox="0 0 27 13" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0859375 0.0910645L13.0859 12.3264L26.0859 0.0910645" stroke="#0C0C0C"
                              stroke-width="0.25"></path>
                    </svg>
                </button>
                <div class="st-main--p__GRID2_ITEM_BODY">
                    <p class="st-main--p__DESCR2">
                        Решения для АСУ ТП в промышленности:
                    </p>
                    <ul class="st-main--ul__DESCR3">
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        АСУ основных технологических и производственных процессов;
                                    </span>
                        </li>
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        АСУ вторичных технологических процессов;
                                    </span>
                        </li>
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Решения и оборудование для прикладных задач.
                                    </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="st-main--div__GRID2_ITEM DOWN __C-SCRL DOWN">
                <button class="st-main--button__GRID2_ITEM_TOP">
                    <div class="st-main--div__GRID2_ITEM_IMAGE">
                        <img class="st-main--img__GRID2_ITEM_IMAGE _SIXTH" src="/images/about/ab-exp_8.svg" alt=""
                             loading="lazy">
                        <img class="st-main--img__GRID2_ITEM_IMAGE _SIXTH" src="/images/about/ab-exp_8n.svg" alt=""
                             loading="lazy">
                    </div>
                    <p class="st-main--p__GRID2_ITEM_TOP">
                        Промышленная электроника
                    </p>
                    <svg class="st-main--svg__GRID2_ITEM_TOP" width="27" height="13" viewBox="0 0 27 13" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0859375 0.0910645L13.0859 12.3264L26.0859 0.0910645" stroke="#0C0C0C"
                              stroke-width="0.25"></path>
                    </svg>
                </button>
                <div class="st-main--p__GRID2_ITEM_BODY">
                    <ul class="st-main--ul__DESCR3">
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Вычислительные системы и аппаратные платформы;
                                    </span>
                        </li>
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Встраиваемые системы;
                                    </span>
                        </li>
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Электронные модули;
                                    </span>
                        </li>
                        <li class="st-main--li__DESCR3">
                            <div class="st-main--div__DESCR3_POINT"></div>
                            <span class="st-main--span__DESCR3">
                                        Оборудование для прикладных задач.
                                    </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ PAR ********** ---------- -->


<section class="ab-par" id="ab-par">
    <div class="ab-par--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Партнеры
        </h2>


        <div class="ab-par--div__MAIN">
            <div class="ab-par--div__MAIN_ITEM __C-SCRL DOWN">
                <h3 class="ab-par--h3">
                    Ассоциации, консорциумы и рабочие группы
                </h3>

                <div class="ab-par--div__SWIPER swiper">
                    <div class="ab-par--div__SWIPER_WRAPPER swiper-wrapper">
                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_1.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Ассоциация интернета вещей
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_2.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Консорциум радиоэлектронной промышленности
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_3.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Московский политехничексий университет
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_4.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    АНО Консорциум «Телекоммуникационные технологии»
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_1.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Ассоциация интернета вещей
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_2.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Консорциум радиоэлектронной промышленности
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="ab-par--div__SWIPER_NAV">
                        <button class="ab-par--button__SWIPER_PREV swiper-button-disabled" disabled="" tabindex="-1"
                                aria-label="Previous slide" aria-controls="swiper-wrapper-2e397d8c62b40696"
                                aria-disabled="true">
                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                      stroke-linecap="round"></path>
                            </svg>
                        </button>
                        <div class="ab-par--div__SWIPER_NAV_LINE"></div>
                        <button class="ab-par--button__SWIPER_NEXT" tabindex="0" aria-label="Next slide"
                                aria-controls="swiper-wrapper-2e397d8c62b40696" aria-disabled="false">
                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                      stroke-linecap="round"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>


            <div class="ab-par--div__MAIN_ITEM __C-SCRL DOWN">
                <h3 class="ab-par--h3">
                    Парнёры по разработке решений
                </h3>

                <div class="ab-par--div__SWIPER swiper">
                    <div class="ab-par--div__SWIPER_WRAPPER swiper-wrapper">
                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_3.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Московский политехничексий университет
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_1.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Ассоциация интернета вещей
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_2.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Консорциум радиоэлектронной промышленности
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_4.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    АНО Консорциум «Телекоммуникационные технологии»
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_1.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Ассоциация интернета вещей
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_2.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Консорциум радиоэлектронной промышленности
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="ab-par--div__SWIPER_NAV">
                        <button class="ab-par--button__SWIPER_PREV swiper-button-disabled" disabled="" tabindex="-1"
                                aria-label="Previous slide" aria-controls="swiper-wrapper-2e397d8c62b40696"
                                aria-disabled="true">
                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                      stroke-linecap="round"></path>
                            </svg>
                        </button>
                        <div class="ab-par--div__SWIPER_NAV_LINE"></div>
                        <button class="ab-par--button__SWIPER_NEXT" tabindex="0" aria-label="Next slide"
                                aria-controls="swiper-wrapper-2e397d8c62b40696" aria-disabled="false">
                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                      stroke-linecap="round"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>


            <div class="ab-par--div__MAIN_ITEM __C-SCRL DOWN">
                <h3 class="ab-par--h3">
                    Дистрибьюторы и дилеры
                </h3>

                <div class="ab-par--div__SWIPER swiper">
                    <div class="ab-par--div__SWIPER_WRAPPER swiper-wrapper">
                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_4.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    АНО Консорциум «Телекоммуникационные технологии»
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_3.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Московский политехничексий университет
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_1.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Ассоциация интернета вещей
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_2.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Консорциум радиоэлектронной промышленности
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_1.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Ассоциация интернета вещей
                                </p>
                            </a>
                        </div>

                        <div class="ab-par--div__SWIPER_SLIDE swiper-slide">
                            <a class="ab-par--a__ITEM" href="#">
                                <div class="ab-par--div__ITEM_IMAGE">
                                    <img class="ab-par--img__ITEM_IMAGE" src="/images/about/ab-par_2.svg" alt=""
                                         loading="lazy">
                                </div>

                                <p class="ab-par--p__ITEM_TEXT">
                                    Консорциум радиоэлектронной промышленности
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="ab-par--div__SWIPER_NAV">
                        <button class="ab-par--button__SWIPER_PREV swiper-button-disabled" disabled="" tabindex="-1"
                                aria-label="Previous slide" aria-controls="swiper-wrapper-2e397d8c62b40696"
                                aria-disabled="true">
                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                      stroke-linecap="round"></path>
                            </svg>
                        </button>
                        <div class="ab-par--div__SWIPER_NAV_LINE"></div>
                        <button class="ab-par--button__SWIPER_NEXT" tabindex="0" aria-label="Next slide"
                                aria-controls="swiper-wrapper-2e397d8c62b40696" aria-disabled="false">
                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                                      stroke-linecap="round"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ CERT ********** ---------- -->


<section class="ab-cert" id="ab-cert">
    <div class="ab-cert--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Сертификаты
        </h2>


        <div class="ab-cert--div__SWIPER swiper __C-SCRL DOWN">
            <div class="ab-cert--div__SWIPER_WRAPPER swiper-wrapper">
                <div class="ab-cert--div__SWIPER_SLIDE swiper-slide">
                    <button class="ab-cert--button__ITEM" href="#">
                        <div class="ab-cert--div__ITEM_IMAGE">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_1.png" alt=""
                                 loading="lazy">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_1n.png" alt=""
                                 loading="lazy">
                        </div>

                        <p class="ab-cert--p__ITEM_TEXT">
                            Сертификат совместимости модуля процессорного
                            АТБ-АТОМ-2.3 и операционной системы РЕД ОС
                        </p>
                    </button>
                </div>

                <div class="ab-cert--div__SWIPER_SLIDE swiper-slide">
                    <button class="ab-cert--button__ITEM" href="#">
                        <div class="ab-cert--div__ITEM_IMAGE">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_2.png" alt=""
                                 loading="lazy">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_2n.png" alt=""
                                 loading="lazy">
                        </div>

                        <p class="ab-cert--p__ITEM_TEXT">
                            Сертификат совместимости мини-компьютера АТБ-АТОМ-1.3
                            и операционной системы РЕД ОС
                        </p>
                    </button>
                </div>

                <div class="ab-cert--div__SWIPER_SLIDE swiper-slide">
                    <button class="ab-cert--button__ITEM" href="#">
                        <div class="ab-cert--div__ITEM_IMAGE">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_3.png" alt=""
                                 loading="lazy">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_3n.png" alt=""
                                 loading="lazy">
                        </div>

                        <p class="ab-cert--p__ITEM_TEXT">
                            Сертификат совместимости аппаратного обеспечения
                            и операционной системы Альт СП
                        </p>
                    </button>
                </div>

                <div class="ab-cert--div__SWIPER_SLIDE swiper-slide">
                    <button class="ab-cert--button__ITEM" href="#">
                        <div class="ab-cert--div__ITEM_IMAGE">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_4.png" alt=""
                                 loading="lazy">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_4n.png" alt=""
                                 loading="lazy">
                        </div>

                        <p class="ab-cert--p__ITEM_TEXT">
                            Сертификат технологического партнёра
                            ООО «РусБИТех-Астра»
                        </p>
                    </button>
                </div>

                <div class="ab-cert--div__SWIPER_SLIDE swiper-slide">
                    <button class="ab-cert--button__ITEM" href="#">
                        <div class="ab-cert--div__ITEM_IMAGE">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_5.png" alt=""
                                 loading="lazy">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_5n.png" alt=""
                                 loading="lazy">
                        </div>

                        <p class="ab-cert--p__ITEM_TEXT">
                            Сертификат совместимости модуля процессорного
                            АТБ-АPOLLO-SMC и операционной системы РЕД ОС
                        </p>
                    </button>
                </div>

                <div class="ab-cert--div__SWIPER_SLIDE swiper-slide">
                    <button class="ab-cert--button__ITEM" href="#">
                        <div class="ab-cert--div__ITEM_IMAGE">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_1.png" alt=""
                                 loading="lazy">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_1n.png" alt=""
                                 loading="lazy">
                        </div>

                        <p class="ab-cert--p__ITEM_TEXT">
                            Сертификат совместимости модуля процессорного
                            АТБ-АТОМ-2.3 и операционной системы РЕД ОС
                        </p>
                    </button>
                </div>

                <div class="ab-cert--div__SWIPER_SLIDE swiper-slide">
                    <button class="ab-cert--button__ITEM" href="#">
                        <div class="ab-cert--div__ITEM_IMAGE">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_2.png" alt=""
                                 loading="lazy">
                            <img class="ab-cert--img__ITEM_IMAGE" src="/images/about/ab-cert_2n.png" alt=""
                                 loading="lazy">
                        </div>

                        <p class="ab-cert--p__ITEM_TEXT">
                            Сертификат совместимости мини-компьютера АТБ-АТОМ-1.3
                            и операционной системы РЕД ОС
                        </p>
                    </button>
                </div>
            </div>


            <div class="ab-cert--div__SWIPER_NAV">
                <button class="ab-cert--button__SWIPER_PREV swiper-button-disabled" disabled="" tabindex="-1"
                        aria-label="Previous slide" aria-controls="swiper-wrapper-2e397d8c62b40696"
                        aria-disabled="true">
                    <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                              stroke-linecap="round"></path>
                    </svg>
                </button>
                <div class="ab-cert--div__SWIPER_NAV_LINE"></div>
                <button class="ab-cert--button__SWIPER_NEXT" tabindex="0" aria-label="Next slide"
                        aria-controls="swiper-wrapper-2e397d8c62b40696" aria-disabled="false">
                    <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121" stroke-width="1.5"
                              stroke-linecap="round"></path>
                    </svg>
                </button>
            </div>
        </div>


        <div class="ab-cert--div__POPUPS">
            <div class="ab-cert--div__POPUP">
                <div class="ab-cert--div__POPUP_CONT">
                    <button class="ab-cert--button__POPUP_CLOSE">
                        <svg class="ab-cert--svg__POPUP_CLOSE" width="15" height="15" viewBox="0 0 15 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)"
                                  fill="#005792"></rect>
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)"
                                  fill="#005792"></rect>
                        </svg>
                    </button>

                    <img class="ab-cert--img__POPUP" src="/images/about/ab-cert_1.png" alt="" loading="lazy">

                    <p class="ab-cert--p__POPUP">
                        Сертификат совместимости модуля процессорного
                        АТБ-АТОМ-2.3 и операционной системы РЕД ОС
                    </p>

                    <a class="ab-cert--a__DOWNLOAD" href="#" download="">
                                <span class="ab-cert--span__DOWNLOAD">
                                    Скачать
                                </span>
                        <svg class="ab-cert--svg__DOWNLOAD" width="25" height="23" viewBox="0 0 25 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.25 17.3984V21.5367C0.25 22.089 0.697715 22.5367 1.25 22.5367H23.25C23.8023 22.5367 24.25 22.089 24.25 21.5367V17.3984"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M7.10156 13.9531L12.2444 19.0914C13.9587 17.3786 17.3873 13.9531 17.3873 13.9531"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M12.25 0.25V19.0691" stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="ab-cert--div__POPUP">
                <div class="ab-cert--div__POPUP_CONT">
                    <button class="ab-cert--button__POPUP_CLOSE">
                        <svg class="ab-cert--svg__POPUP_CLOSE" width="15" height="15" viewBox="0 0 15 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)"
                                  fill="#005792"></rect>
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)"
                                  fill="#005792"></rect>
                        </svg>
                    </button>

                    <img class="ab-cert--img__POPUP" src="/images/about/ab-cert_2.png" alt="" loading="lazy">

                    <p class="ab-cert--p__POPUP">
                        Сертификат совместимости мини-компьютера
                        АТБ-АТОМ-1.3 и операционной системы РЕД ОС
                    </p>

                    <a class="ab-cert--a__DOWNLOAD" href="#" download="">
                                <span class="ab-cert--span__DOWNLOAD">
                                    Скачать
                                </span>
                        <svg class="ab-cert--svg__DOWNLOAD" width="25" height="23" viewBox="0 0 25 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.25 17.3984V21.5367C0.25 22.089 0.697715 22.5367 1.25 22.5367H23.25C23.8023 22.5367 24.25 22.089 24.25 21.5367V17.3984"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M7.10156 13.9531L12.2444 19.0914C13.9587 17.3786 17.3873 13.9531 17.3873 13.9531"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M12.25 0.25V19.0691" stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="ab-cert--div__POPUP">
                <div class="ab-cert--div__POPUP_CONT">
                    <button class="ab-cert--button__POPUP_CLOSE">
                        <svg class="ab-cert--svg__POPUP_CLOSE" width="15" height="15" viewBox="0 0 15 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)"
                                  fill="#005792"></rect>
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)"
                                  fill="#005792"></rect>
                        </svg>
                    </button>

                    <img class="ab-cert--img__POPUP" src="/images/about/ab-cert_3.png" alt="" loading="lazy">

                    <p class="ab-cert--p__POPUP">
                        Сертификат совместимости аппаратного обеспечения
                        и операционной системы Альт СП
                    </p>

                    <a class="ab-cert--a__DOWNLOAD" href="#" download="">
                                <span class="ab-cert--span__DOWNLOAD">
                                    Скачать
                                </span>
                        <svg class="ab-cert--svg__DOWNLOAD" width="25" height="23" viewBox="0 0 25 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.25 17.3984V21.5367C0.25 22.089 0.697715 22.5367 1.25 22.5367H23.25C23.8023 22.5367 24.25 22.089 24.25 21.5367V17.3984"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M7.10156 13.9531L12.2444 19.0914C13.9587 17.3786 17.3873 13.9531 17.3873 13.9531"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M12.25 0.25V19.0691" stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="ab-cert--div__POPUP">
                <div class="ab-cert--div__POPUP_CONT">
                    <button class="ab-cert--button__POPUP_CLOSE">
                        <svg class="ab-cert--svg__POPUP_CLOSE" width="15" height="15" viewBox="0 0 15 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)"
                                  fill="#005792"></rect>
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)"
                                  fill="#005792"></rect>
                        </svg>
                    </button>

                    <img class="ab-cert--img__POPUP" src="/images/about/ab-cert_4.png" alt="" loading="lazy">

                    <p class="ab-cert--p__POPUP">
                        Сертификат технологического партнёра ООО «РусБИТех-Астра»
                    </p>

                    <a class="ab-cert--a__DOWNLOAD" href="#" download="">
                                <span class="ab-cert--span__DOWNLOAD">
                                    Скачать
                                </span>
                        <svg class="ab-cert--svg__DOWNLOAD" width="25" height="23" viewBox="0 0 25 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.25 17.3984V21.5367C0.25 22.089 0.697715 22.5367 1.25 22.5367H23.25C23.8023 22.5367 24.25 22.089 24.25 21.5367V17.3984"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M7.10156 13.9531L12.2444 19.0914C13.9587 17.3786 17.3873 13.9531 17.3873 13.9531"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M12.25 0.25V19.0691" stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="ab-cert--div__POPUP">
                <div class="ab-cert--div__POPUP_CONT">
                    <button class="ab-cert--button__POPUP_CLOSE">
                        <svg class="ab-cert--svg__POPUP_CLOSE" width="15" height="15" viewBox="0 0 15 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)"
                                  fill="#005792"></rect>
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)"
                                  fill="#005792"></rect>
                        </svg>
                    </button>

                    <img class="ab-cert--img__POPUP" src="/images/about/ab-cert_5.png" alt="" loading="lazy">

                    <p class="ab-cert--p__POPUP">
                        Сертификат совместимости модуля процессорного
                        АТБ-АPOLLO-SMC и операционной системы РЕД ОС
                    </p>

                    <a class="ab-cert--a__DOWNLOAD" href="#" download="">
                                <span class="ab-cert--span__DOWNLOAD">
                                    Скачать
                                </span>
                        <svg class="ab-cert--svg__DOWNLOAD" width="25" height="23" viewBox="0 0 25 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.25 17.3984V21.5367C0.25 22.089 0.697715 22.5367 1.25 22.5367H23.25C23.8023 22.5367 24.25 22.089 24.25 21.5367V17.3984"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M7.10156 13.9531L12.2444 19.0914C13.9587 17.3786 17.3873 13.9531 17.3873 13.9531"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M12.25 0.25V19.0691" stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="ab-cert--div__POPUP">
                <div class="ab-cert--div__POPUP_CONT">
                    <button class="ab-cert--button__POPUP_CLOSE">
                        <svg class="ab-cert--svg__POPUP_CLOSE" width="15" height="15" viewBox="0 0 15 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)"
                                  fill="#005792"></rect>
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)"
                                  fill="#005792"></rect>
                        </svg>
                    </button>

                    <img class="ab-cert--img__POPUP" src="/images/about/ab-cert_1.png" alt="" loading="lazy">

                    <p class="ab-cert--p__POPUP">
                        Сертификат совместимости модуля процессорного
                        АТБ-АТОМ-2.3 и операционной системы РЕД ОС
                    </p>

                    <a class="ab-cert--a__DOWNLOAD" href="#" download="">
                                <span class="ab-cert--span__DOWNLOAD">
                                    Скачать
                                </span>
                        <svg class="ab-cert--svg__DOWNLOAD" width="25" height="23" viewBox="0 0 25 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.25 17.3984V21.5367C0.25 22.089 0.697715 22.5367 1.25 22.5367H23.25C23.8023 22.5367 24.25 22.089 24.25 21.5367V17.3984"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M7.10156 13.9531L12.2444 19.0914C13.9587 17.3786 17.3873 13.9531 17.3873 13.9531"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M12.25 0.25V19.0691" stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="ab-cert--div__POPUP">
                <div class="ab-cert--div__POPUP_CONT">
                    <button class="ab-cert--button__POPUP_CLOSE">
                        <svg class="ab-cert--svg__POPUP_CLOSE" width="15" height="15" viewBox="0 0 15 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)"
                                  fill="#005792"></rect>
                            <rect width="19.6727" height="1.50269" rx="0.751343"
                                  transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)"
                                  fill="#005792"></rect>
                        </svg>
                    </button>

                    <img class="ab-cert--img__POPUP" src="/images/about/ab-cert_2.png" alt="" loading="lazy">

                    <p class="ab-cert--p__POPUP">
                        Сертификат совместимости мини-компьютера
                        АТБ-АТОМ-1.3 и операционной системы РЕД ОС
                    </p>

                    <a class="ab-cert--a__DOWNLOAD" href="#" download="">
                                <span class="ab-cert--span__DOWNLOAD">
                                    Скачать
                                </span>
                        <svg class="ab-cert--svg__DOWNLOAD" width="25" height="23" viewBox="0 0 25 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.25 17.3984V21.5367C0.25 22.089 0.697715 22.5367 1.25 22.5367H23.25C23.8023 22.5367 24.25 22.089 24.25 21.5367V17.3984"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M7.10156 13.9531L12.2444 19.0914C13.9587 17.3786 17.3873 13.9531 17.3873 13.9531"
                                  stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                            <path d="M12.25 0.25V19.0691" stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ REG ********** ---------- -->


<section class="cd-reg" id="ab-reg">
    <div class="cd-reg--div__CONT C-CONTAINER">
        <div class="c-common--div__HEAD">
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                Реестры
            </h2>
        </div>


        <a class="cd-reg--a__TOP __C-SCRL DOWN" href="#">
            <p class="cd-reg--p__TOP">
                Единый реестр радиоэлектронной продукции (ПП РФ №878 от 10.07.2019)
            </p>
            <img class="cd-reg--img__TOP" src="/images/home/hm-cat_icon.svg" alt="ГИСП">
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
                    <path d="M34.76 10.1842L17.58 0.454201C17.58 0.454201 17.5 0.434201 17.46 0.454201L0.06 10.2842C0.06 10.2842 0 10.3442 0 10.3942V30.3742C0 30.3742 0.02 30.4642 0.06 30.4842L17.45 40.4242C17.45 40.4242 17.49 40.4442 17.51 40.4442C17.53 40.4442 17.55 40.4442 17.57 40.4242L34.75 30.4842C34.75 30.4842 34.81 30.4242 34.81 30.3742V10.2842C34.81 10.2842 34.79 10.1942 34.75 10.1742L34.76 10.1842ZM17.52 0.704201L34.46 10.2942L29.11 13.4542L12.24 3.6842L17.52 0.704201ZM17.52 20.2942L0.37 10.3942L6.21 7.0942L23.11 16.9942L17.51 20.2942H17.52ZM23.36 16.8442L6.46 6.9542L11.99 3.8242L28.86 13.5942L23.36 16.8442ZM23.48 17.0542L28.98 13.8042V23.9942L26.14 23.2042C26.14 23.2042 26.05 23.2042 26.02 23.2342L23.48 25.9042V17.0442V17.0542ZM0.25 10.6042L17.39 20.5042V40.0942L0.25 30.3042V10.6042ZM17.64 40.0942V20.5042L23.23 17.2042V26.2342C23.23 26.2842 23.26 26.3342 23.31 26.3542C23.32 26.3542 23.34 26.3542 23.36 26.3542C23.39 26.3542 23.43 26.3442 23.45 26.3142L26.15 23.4742L29.08 24.2842C29.08 24.2842 29.16 24.2842 29.19 24.2642C29.22 24.2442 29.24 24.2042 29.24 24.1642V13.6642L34.59 10.5042V30.2942L17.65 40.0842L17.64 40.0942Z"
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
                <img class="cd-reg--img__TABLE_PDF" src="/images/card/cd-cnf_pdf.svg" alt="pdf">
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
                    <path d="M34.76 10.1842L17.58 0.454201C17.58 0.454201 17.5 0.434201 17.46 0.454201L0.06 10.2842C0.06 10.2842 0 10.3442 0 10.3942V30.3742C0 30.3742 0.02 30.4642 0.06 30.4842L17.45 40.4242C17.45 40.4242 17.49 40.4442 17.51 40.4442C17.53 40.4442 17.55 40.4442 17.57 40.4242L34.75 30.4842C34.75 30.4842 34.81 30.4242 34.81 30.3742V10.2842C34.81 10.2842 34.79 10.1942 34.75 10.1742L34.76 10.1842ZM17.52 0.704201L34.46 10.2942L29.11 13.4542L12.24 3.6842L17.52 0.704201ZM17.52 20.2942L0.37 10.3942L6.21 7.0942L23.11 16.9942L17.51 20.2942H17.52ZM23.36 16.8442L6.46 6.9542L11.99 3.8242L28.86 13.5942L23.36 16.8442ZM23.48 17.0542L28.98 13.8042V23.9942L26.14 23.2042C26.14 23.2042 26.05 23.2042 26.02 23.2342L23.48 25.9042V17.0442V17.0542ZM0.25 10.6042L17.39 20.5042V40.0942L0.25 30.3042V10.6042ZM17.64 40.0942V20.5042L23.23 17.2042V26.2342C23.23 26.2842 23.26 26.3342 23.31 26.3542C23.32 26.3542 23.34 26.3542 23.36 26.3542C23.39 26.3542 23.43 26.3442 23.45 26.3142L26.15 23.4742L29.08 24.2842C29.08 24.2842 29.16 24.2842 29.19 24.2642C29.22 24.2442 29.24 24.2042 29.24 24.1642V13.6642L34.59 10.5042V30.2942L17.65 40.0842L17.64 40.0942Z"
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
                <img class="cd-reg--img__TABLE_PDF" src="/images/card/cd-cnf_pdf.svg" alt="pdf">
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
                    <path d="M34.76 10.1842L17.58 0.454201C17.58 0.454201 17.5 0.434201 17.46 0.454201L0.06 10.2842C0.06 10.2842 0 10.3442 0 10.3942V30.3742C0 30.3742 0.02 30.4642 0.06 30.4842L17.45 40.4242C17.45 40.4242 17.49 40.4442 17.51 40.4442C17.53 40.4442 17.55 40.4442 17.57 40.4242L34.75 30.4842C34.75 30.4842 34.81 30.4242 34.81 30.3742V10.2842C34.81 10.2842 34.79 10.1942 34.75 10.1742L34.76 10.1842ZM17.52 0.704201L34.46 10.2942L29.11 13.4542L12.24 3.6842L17.52 0.704201ZM17.52 20.2942L0.37 10.3942L6.21 7.0942L23.11 16.9942L17.51 20.2942H17.52ZM23.36 16.8442L6.46 6.9542L11.99 3.8242L28.86 13.5942L23.36 16.8442ZM23.48 17.0542L28.98 13.8042V23.9942L26.14 23.2042C26.14 23.2042 26.05 23.2042 26.02 23.2342L23.48 25.9042V17.0442V17.0542ZM0.25 10.6042L17.39 20.5042V40.0942L0.25 30.3042V10.6042ZM17.64 40.0942V20.5042L23.23 17.2042V26.2342C23.23 26.2842 23.26 26.3342 23.31 26.3542C23.32 26.3542 23.34 26.3542 23.36 26.3542C23.39 26.3542 23.43 26.3442 23.45 26.3142L26.15 23.4742L29.08 24.2842C29.08 24.2842 29.16 24.2842 29.19 24.2642C29.22 24.2442 29.24 24.2042 29.24 24.1642V13.6642L34.59 10.5042V30.2942L17.65 40.0842L17.64 40.0942Z"
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
                <img class="cd-reg--img__TABLE_PDF" src="/images/card/cd-cnf_pdf.svg" alt="pdf">
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
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ DOC ********** ---------- -->


<section class="cd-mat" id="ab-doc">
    <div class="cd-mat--div__CONT C-CONTAINER">
        <div class="c-common--div__HEAD cd-mat--div__HEAD" role="button">
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                Документы
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
                            Документы
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
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#0C0C0C"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.9097 29.3302 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#0C0C0C"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#0C0C0C"/>
                        <path d="M28.76 13.31C28.9 13.31 29.01 13.2 29.01 13.06V9.16001C29.01 8.90001 28.95 8.63001 28.84 8.36001C28.84 8.36001 28.83 8.35001 28.82 8.34001C28.72 8.13001 28.6 7.94001 28.46 7.79001L22.48 1.48001C22.36 1.36001 22.21 1.26001 22.05 1.17001C22.03 1.16001 22.02 1.14001 22.01 1.13001C21.74 0.990007 21.46 0.920007 21.17 0.920007H1.87C0.84 0.910007 0 1.78001 0 2.85001V38.98C0 40.05 0.84 40.92 1.87 40.92H27.15C28.18 40.92 29.02 40.05 29.02 38.98V37.06C29.02 36.92 28.91 36.81 28.77 36.81C28.63 36.81 28.52 36.92 28.52 37.06V38.98C28.52 39.77 27.91 40.42 27.15 40.42H1.87C1.12 40.42 0.5 39.78 0.5 38.98V2.85001C0.5 2.06001 1.11 1.41001 1.87 1.41001H21.17C21.33 1.41001 21.49 1.45001 21.64 1.51001V7.79001C21.64 8.30001 22.04 8.71001 22.54 8.71001H28.44C28.49 8.86001 28.51 9.02001 28.51 9.16001V13.06C28.51 13.2 28.62 13.31 28.76 13.31ZM22.53 8.21001C22.31 8.21001 22.13 8.02001 22.13 7.79001V1.84001L28.1 8.14001C28.1 8.14001 28.14 8.19001 28.16 8.21001H22.53Z"
                              fill="#0C0C0C"/>
                    </svg>
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#C82121"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.8597 29.2902 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#C82121"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#C82121"/>
                        <path d="M28.76 13.3099C28.9 13.3099 29.01 13.1999 29.01 13.0599V9.15992C29.01 8.89992 28.95 8.62992 28.84 8.35992C28.84 8.35992 28.83 8.34992 28.82 8.33992C28.72 8.12992 28.6 7.93992 28.46 7.78992L22.48 1.47992C22.36 1.35992 22.21 1.25992 22.05 1.16992C22.03 1.15992 22.02 1.13992 22.01 1.12992C21.74 0.989922 21.46 0.919922 21.17 0.919922H1.87C0.84 0.919922 0 1.77992 0 2.84992V38.9799C0 40.0499 0.84 40.9199 1.87 40.9199H27.15C28.18 40.9199 29.02 40.0499 29.02 38.9799V37.0599C29.02 36.9199 28.91 36.8099 28.77 36.8099C28.63 36.8099 28.52 36.9199 28.52 37.0599V38.9799C28.52 39.7699 27.91 40.4199 27.15 40.4199H1.87C1.12 40.4199 0.5 39.7799 0.5 38.9799V2.84992C0.5 2.05992 1.11 1.40992 1.87 1.40992H21.17C21.33 1.40992 21.49 1.44992 21.64 1.50992V7.78992C21.64 8.29992 22.04 8.70992 22.54 8.70992H28.44C28.49 8.85992 28.51 9.01992 28.51 9.15992V13.0599C28.51 13.1999 28.62 13.3099 28.76 13.3099Z"
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
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#0C0C0C"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.9097 29.3302 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#0C0C0C"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#0C0C0C"/>
                        <path d="M28.76 13.31C28.9 13.31 29.01 13.2 29.01 13.06V9.16001C29.01 8.90001 28.95 8.63001 28.84 8.36001C28.84 8.36001 28.83 8.35001 28.82 8.34001C28.72 8.13001 28.6 7.94001 28.46 7.79001L22.48 1.48001C22.36 1.36001 22.21 1.26001 22.05 1.17001C22.03 1.16001 22.02 1.14001 22.01 1.13001C21.74 0.990007 21.46 0.920007 21.17 0.920007H1.87C0.84 0.910007 0 1.78001 0 2.85001V38.98C0 40.05 0.84 40.92 1.87 40.92H27.15C28.18 40.92 29.02 40.05 29.02 38.98V37.06C29.02 36.92 28.91 36.81 28.77 36.81C28.63 36.81 28.52 36.92 28.52 37.06V38.98C28.52 39.77 27.91 40.42 27.15 40.42H1.87C1.12 40.42 0.5 39.78 0.5 38.98V2.85001C0.5 2.06001 1.11 1.41001 1.87 1.41001H21.17C21.33 1.41001 21.49 1.45001 21.64 1.51001V7.79001C21.64 8.30001 22.04 8.71001 22.54 8.71001H28.44C28.49 8.86001 28.51 9.02001 28.51 9.16001V13.06C28.51 13.2 28.62 13.31 28.76 13.31ZM22.53 8.21001C22.31 8.21001 22.13 8.02001 22.13 7.79001V1.84001L28.1 8.14001C28.1 8.14001 28.14 8.19001 28.16 8.21001H22.53Z"
                              fill="#0C0C0C"/>
                    </svg>
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#C82121"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.8597 29.2902 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#C82121"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#C82121"/>
                        <path d="M28.76 13.3099C28.9 13.3099 29.01 13.1999 29.01 13.0599V9.15992C29.01 8.89992 28.95 8.62992 28.84 8.35992C28.84 8.35992 28.83 8.34992 28.82 8.33992C28.72 8.12992 28.6 7.93992 28.46 7.78992L22.48 1.47992C22.36 1.35992 22.21 1.25992 22.05 1.16992C22.03 1.15992 22.02 1.13992 22.01 1.12992C21.74 0.989922 21.46 0.919922 21.17 0.919922H1.87C0.84 0.919922 0 1.77992 0 2.84992V38.9799C0 40.0499 0.84 40.9199 1.87 40.9199H27.15C28.18 40.9199 29.02 40.0499 29.02 38.9799V37.0599C29.02 36.9199 28.91 36.8099 28.77 36.8099C28.63 36.8099 28.52 36.9199 28.52 37.0599V38.9799C28.52 39.7699 27.91 40.4199 27.15 40.4199H1.87C1.12 40.4199 0.5 39.7799 0.5 38.9799V2.84992C0.5 2.05992 1.11 1.40992 1.87 1.40992H21.17C21.33 1.40992 21.49 1.44992 21.64 1.50992V7.78992C21.64 8.29992 22.04 8.70992 22.54 8.70992H28.44C28.49 8.85992 28.51 9.01992 28.51 9.15992V13.0599C28.51 13.1999 28.62 13.3099 28.76 13.3099Z"
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
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#0C0C0C"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.9097 29.3302 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#0C0C0C"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#0C0C0C"/>
                        <path d="M28.76 13.31C28.9 13.31 29.01 13.2 29.01 13.06V9.16001C29.01 8.90001 28.95 8.63001 28.84 8.36001C28.84 8.36001 28.83 8.35001 28.82 8.34001C28.72 8.13001 28.6 7.94001 28.46 7.79001L22.48 1.48001C22.36 1.36001 22.21 1.26001 22.05 1.17001C22.03 1.16001 22.02 1.14001 22.01 1.13001C21.74 0.990007 21.46 0.920007 21.17 0.920007H1.87C0.84 0.910007 0 1.78001 0 2.85001V38.98C0 40.05 0.84 40.92 1.87 40.92H27.15C28.18 40.92 29.02 40.05 29.02 38.98V37.06C29.02 36.92 28.91 36.81 28.77 36.81C28.63 36.81 28.52 36.92 28.52 37.06V38.98C28.52 39.77 27.91 40.42 27.15 40.42H1.87C1.12 40.42 0.5 39.78 0.5 38.98V2.85001C0.5 2.06001 1.11 1.41001 1.87 1.41001H21.17C21.33 1.41001 21.49 1.45001 21.64 1.51001V7.79001C21.64 8.30001 22.04 8.71001 22.54 8.71001H28.44C28.49 8.86001 28.51 9.02001 28.51 9.16001V13.06C28.51 13.2 28.62 13.31 28.76 13.31ZM22.53 8.21001C22.31 8.21001 22.13 8.02001 22.13 7.79001V1.84001L28.1 8.14001C28.1 8.14001 28.14 8.19001 28.16 8.21001H22.53Z"
                              fill="#0C0C0C"/>
                    </svg>
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#C82121"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.8597 29.2902 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#C82121"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#C82121"/>
                        <path d="M28.76 13.3099C28.9 13.3099 29.01 13.1999 29.01 13.0599V9.15992C29.01 8.89992 28.95 8.62992 28.84 8.35992C28.84 8.35992 28.83 8.34992 28.82 8.33992C28.72 8.12992 28.6 7.93992 28.46 7.78992L22.48 1.47992C22.36 1.35992 22.21 1.25992 22.05 1.16992C22.03 1.15992 22.02 1.13992 22.01 1.12992C21.74 0.989922 21.46 0.919922 21.17 0.919922H1.87C0.84 0.919922 0 1.77992 0 2.84992V38.9799C0 40.0499 0.84 40.9199 1.87 40.9199H27.15C28.18 40.9199 29.02 40.0499 29.02 38.9799V37.0599C29.02 36.9199 28.91 36.8099 28.77 36.8099C28.63 36.8099 28.52 36.9199 28.52 37.0599V38.9799C28.52 39.7699 27.91 40.4199 27.15 40.4199H1.87C1.12 40.4199 0.5 39.7799 0.5 38.9799V2.84992C0.5 2.05992 1.11 1.40992 1.87 1.40992H21.17C21.33 1.40992 21.49 1.44992 21.64 1.50992V7.78992C21.64 8.29992 22.04 8.70992 22.54 8.70992H28.44C28.49 8.85992 28.51 9.01992 28.51 9.15992V13.0599C28.51 13.1999 28.62 13.3099 28.76 13.3099Z"
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
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#0C0C0C"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.9097 29.3302 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#0C0C0C"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#0C0C0C"/>
                        <path d="M28.76 13.31C28.9 13.31 29.01 13.2 29.01 13.06V9.16001C29.01 8.90001 28.95 8.63001 28.84 8.36001C28.84 8.36001 28.83 8.35001 28.82 8.34001C28.72 8.13001 28.6 7.94001 28.46 7.79001L22.48 1.48001C22.36 1.36001 22.21 1.26001 22.05 1.17001C22.03 1.16001 22.02 1.14001 22.01 1.13001C21.74 0.990007 21.46 0.920007 21.17 0.920007H1.87C0.84 0.910007 0 1.78001 0 2.85001V38.98C0 40.05 0.84 40.92 1.87 40.92H27.15C28.18 40.92 29.02 40.05 29.02 38.98V37.06C29.02 36.92 28.91 36.81 28.77 36.81C28.63 36.81 28.52 36.92 28.52 37.06V38.98C28.52 39.77 27.91 40.42 27.15 40.42H1.87C1.12 40.42 0.5 39.78 0.5 38.98V2.85001C0.5 2.06001 1.11 1.41001 1.87 1.41001H21.17C21.33 1.41001 21.49 1.45001 21.64 1.51001V7.79001C21.64 8.30001 22.04 8.71001 22.54 8.71001H28.44C28.49 8.86001 28.51 9.02001 28.51 9.16001V13.06C28.51 13.2 28.62 13.31 28.76 13.31ZM22.53 8.21001C22.31 8.21001 22.13 8.02001 22.13 7.79001V1.84001L28.1 8.14001C28.1 8.14001 28.14 8.19001 28.16 8.21001H22.53Z"
                              fill="#0C0C0C"/>
                    </svg>
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#C82121"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.8597 29.2902 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#C82121"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#C82121"/>
                        <path d="M28.76 13.3099C28.9 13.3099 29.01 13.1999 29.01 13.0599V9.15992C29.01 8.89992 28.95 8.62992 28.84 8.35992C28.84 8.35992 28.83 8.34992 28.82 8.33992C28.72 8.12992 28.6 7.93992 28.46 7.78992L22.48 1.47992C22.36 1.35992 22.21 1.25992 22.05 1.16992C22.03 1.15992 22.02 1.13992 22.01 1.12992C21.74 0.989922 21.46 0.919922 21.17 0.919922H1.87C0.84 0.919922 0 1.77992 0 2.84992V38.9799C0 40.0499 0.84 40.9199 1.87 40.9199H27.15C28.18 40.9199 29.02 40.0499 29.02 38.9799V37.0599C29.02 36.9199 28.91 36.8099 28.77 36.8099C28.63 36.8099 28.52 36.9199 28.52 37.0599V38.9799C28.52 39.7699 27.91 40.4199 27.15 40.4199H1.87C1.12 40.4199 0.5 39.7799 0.5 38.9799V2.84992C0.5 2.05992 1.11 1.40992 1.87 1.40992H21.17C21.33 1.40992 21.49 1.44992 21.64 1.50992V7.78992C21.64 8.29992 22.04 8.70992 22.54 8.70992H28.44C28.49 8.85992 28.51 9.01992 28.51 9.15992V13.0599C28.51 13.1999 28.62 13.3099 28.76 13.3099Z"
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
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#0C0C0C"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.9097 29.3302 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#0C0C0C"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#0C0C0C"/>
                        <path d="M28.76 13.31C28.9 13.31 29.01 13.2 29.01 13.06V9.16001C29.01 8.90001 28.95 8.63001 28.84 8.36001C28.84 8.36001 28.83 8.35001 28.82 8.34001C28.72 8.13001 28.6 7.94001 28.46 7.79001L22.48 1.48001C22.36 1.36001 22.21 1.26001 22.05 1.17001C22.03 1.16001 22.02 1.14001 22.01 1.13001C21.74 0.990007 21.46 0.920007 21.17 0.920007H1.87C0.84 0.910007 0 1.78001 0 2.85001V38.98C0 40.05 0.84 40.92 1.87 40.92H27.15C28.18 40.92 29.02 40.05 29.02 38.98V37.06C29.02 36.92 28.91 36.81 28.77 36.81C28.63 36.81 28.52 36.92 28.52 37.06V38.98C28.52 39.77 27.91 40.42 27.15 40.42H1.87C1.12 40.42 0.5 39.78 0.5 38.98V2.85001C0.5 2.06001 1.11 1.41001 1.87 1.41001H21.17C21.33 1.41001 21.49 1.45001 21.64 1.51001V7.79001C21.64 8.30001 22.04 8.71001 22.54 8.71001H28.44C28.49 8.86001 28.51 9.02001 28.51 9.16001V13.06C28.51 13.2 28.62 13.31 28.76 13.31ZM22.53 8.21001C22.31 8.21001 22.13 8.02001 22.13 7.79001V1.84001L28.1 8.14001C28.1 8.14001 28.14 8.19001 28.16 8.21001H22.53Z"
                              fill="#0C0C0C"/>
                    </svg>
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#C82121"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.8597 29.2902 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#C82121"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#C82121"/>
                        <path d="M28.76 13.3099C28.9 13.3099 29.01 13.1999 29.01 13.0599V9.15992C29.01 8.89992 28.95 8.62992 28.84 8.35992C28.84 8.35992 28.83 8.34992 28.82 8.33992C28.72 8.12992 28.6 7.93992 28.46 7.78992L22.48 1.47992C22.36 1.35992 22.21 1.25992 22.05 1.16992C22.03 1.15992 22.02 1.13992 22.01 1.12992C21.74 0.989922 21.46 0.919922 21.17 0.919922H1.87C0.84 0.919922 0 1.77992 0 2.84992V38.9799C0 40.0499 0.84 40.9199 1.87 40.9199H27.15C28.18 40.9199 29.02 40.0499 29.02 38.9799V37.0599C29.02 36.9199 28.91 36.8099 28.77 36.8099C28.63 36.8099 28.52 36.9199 28.52 37.0599V38.9799C28.52 39.7699 27.91 40.4199 27.15 40.4199H1.87C1.12 40.4199 0.5 39.7799 0.5 38.9799V2.84992C0.5 2.05992 1.11 1.40992 1.87 1.40992H21.17C21.33 1.40992 21.49 1.44992 21.64 1.50992V7.78992C21.64 8.29992 22.04 8.70992 22.54 8.70992H28.44C28.49 8.85992 28.51 9.01992 28.51 9.15992V13.0599C28.51 13.1999 28.62 13.3099 28.76 13.3099Z"
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
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#0C0C0C"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.9097 29.3302 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#0C0C0C"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#0C0C0C"/>
                        <path d="M28.76 13.31C28.9 13.31 29.01 13.2 29.01 13.06V9.16001C29.01 8.90001 28.95 8.63001 28.84 8.36001C28.84 8.36001 28.83 8.35001 28.82 8.34001C28.72 8.13001 28.6 7.94001 28.46 7.79001L22.48 1.48001C22.36 1.36001 22.21 1.26001 22.05 1.17001C22.03 1.16001 22.02 1.14001 22.01 1.13001C21.74 0.990007 21.46 0.920007 21.17 0.920007H1.87C0.84 0.910007 0 1.78001 0 2.85001V38.98C0 40.05 0.84 40.92 1.87 40.92H27.15C28.18 40.92 29.02 40.05 29.02 38.98V37.06C29.02 36.92 28.91 36.81 28.77 36.81C28.63 36.81 28.52 36.92 28.52 37.06V38.98C28.52 39.77 27.91 40.42 27.15 40.42H1.87C1.12 40.42 0.5 39.78 0.5 38.98V2.85001C0.5 2.06001 1.11 1.41001 1.87 1.41001H21.17C21.33 1.41001 21.49 1.45001 21.64 1.51001V7.79001C21.64 8.30001 22.04 8.71001 22.54 8.71001H28.44C28.49 8.86001 28.51 9.02001 28.51 9.16001V13.06C28.51 13.2 28.62 13.31 28.76 13.31ZM22.53 8.21001C22.31 8.21001 22.13 8.02001 22.13 7.79001V1.84001L28.1 8.14001C28.1 8.14001 28.14 8.19001 28.16 8.21001H22.53Z"
                              fill="#0C0C0C"/>
                    </svg>
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#C82121"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.8597 29.2902 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#C82121"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#C82121"/>
                        <path d="M28.76 13.3099C28.9 13.3099 29.01 13.1999 29.01 13.0599V9.15992C29.01 8.89992 28.95 8.62992 28.84 8.35992C28.84 8.35992 28.83 8.34992 28.82 8.33992C28.72 8.12992 28.6 7.93992 28.46 7.78992L22.48 1.47992C22.36 1.35992 22.21 1.25992 22.05 1.16992C22.03 1.15992 22.02 1.13992 22.01 1.12992C21.74 0.989922 21.46 0.919922 21.17 0.919922H1.87C0.84 0.919922 0 1.77992 0 2.84992V38.9799C0 40.0499 0.84 40.9199 1.87 40.9199H27.15C28.18 40.9199 29.02 40.0499 29.02 38.9799V37.0599C29.02 36.9199 28.91 36.8099 28.77 36.8099C28.63 36.8099 28.52 36.9199 28.52 37.0599V38.9799C28.52 39.7699 27.91 40.4199 27.15 40.4199H1.87C1.12 40.4199 0.5 39.7799 0.5 38.9799V2.84992C0.5 2.05992 1.11 1.40992 1.87 1.40992H21.17C21.33 1.40992 21.49 1.44992 21.64 1.50992V7.78992C21.64 8.29992 22.04 8.70992 22.54 8.70992H28.44C28.49 8.85992 28.51 9.01992 28.51 9.15992V13.0599C28.51 13.1999 28.62 13.3099 28.76 13.3099Z"
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
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#0C0C0C"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.9097 29.3302 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#0C0C0C"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#0C0C0C"/>
                        <path d="M28.76 13.31C28.9 13.31 29.01 13.2 29.01 13.06V9.16001C29.01 8.90001 28.95 8.63001 28.84 8.36001C28.84 8.36001 28.83 8.35001 28.82 8.34001C28.72 8.13001 28.6 7.94001 28.46 7.79001L22.48 1.48001C22.36 1.36001 22.21 1.26001 22.05 1.17001C22.03 1.16001 22.02 1.14001 22.01 1.13001C21.74 0.990007 21.46 0.920007 21.17 0.920007H1.87C0.84 0.910007 0 1.78001 0 2.85001V38.98C0 40.05 0.84 40.92 1.87 40.92H27.15C28.18 40.92 29.02 40.05 29.02 38.98V37.06C29.02 36.92 28.91 36.81 28.77 36.81C28.63 36.81 28.52 36.92 28.52 37.06V38.98C28.52 39.77 27.91 40.42 27.15 40.42H1.87C1.12 40.42 0.5 39.78 0.5 38.98V2.85001C0.5 2.06001 1.11 1.41001 1.87 1.41001H21.17C21.33 1.41001 21.49 1.45001 21.64 1.51001V7.79001C21.64 8.30001 22.04 8.71001 22.54 8.71001H28.44C28.49 8.86001 28.51 9.02001 28.51 9.16001V13.06C28.51 13.2 28.62 13.31 28.76 13.31ZM22.53 8.21001C22.31 8.21001 22.13 8.02001 22.13 7.79001V1.84001L28.1 8.14001C28.1 8.14001 28.14 8.19001 28.16 8.21001H22.53Z"
                              fill="#0C0C0C"/>
                    </svg>
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#C82121"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.8597 29.2902 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#C82121"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#C82121"/>
                        <path d="M28.76 13.3099C28.9 13.3099 29.01 13.1999 29.01 13.0599V9.15992C29.01 8.89992 28.95 8.62992 28.84 8.35992C28.84 8.35992 28.83 8.34992 28.82 8.33992C28.72 8.12992 28.6 7.93992 28.46 7.78992L22.48 1.47992C22.36 1.35992 22.21 1.25992 22.05 1.16992C22.03 1.15992 22.02 1.13992 22.01 1.12992C21.74 0.989922 21.46 0.919922 21.17 0.919922H1.87C0.84 0.919922 0 1.77992 0 2.84992V38.9799C0 40.0499 0.84 40.9199 1.87 40.9199H27.15C28.18 40.9199 29.02 40.0499 29.02 38.9799V37.0599C29.02 36.9199 28.91 36.8099 28.77 36.8099C28.63 36.8099 28.52 36.9199 28.52 37.0599V38.9799C28.52 39.7699 27.91 40.4199 27.15 40.4199H1.87C1.12 40.4199 0.5 39.7799 0.5 38.9799V2.84992C0.5 2.05992 1.11 1.40992 1.87 1.40992H21.17C21.33 1.40992 21.49 1.44992 21.64 1.50992V7.78992C21.64 8.29992 22.04 8.70992 22.54 8.70992H28.44C28.49 8.85992 28.51 9.01992 28.51 9.15992V13.0599C28.51 13.1999 28.62 13.3099 28.76 13.3099Z"
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
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#0C0C0C"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.9097 29.3302 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#0C0C0C"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#0C0C0C"/>
                        <path d="M28.76 13.31C28.9 13.31 29.01 13.2 29.01 13.06V9.16001C29.01 8.90001 28.95 8.63001 28.84 8.36001C28.84 8.36001 28.83 8.35001 28.82 8.34001C28.72 8.13001 28.6 7.94001 28.46 7.79001L22.48 1.48001C22.36 1.36001 22.21 1.26001 22.05 1.17001C22.03 1.16001 22.02 1.14001 22.01 1.13001C21.74 0.990007 21.46 0.920007 21.17 0.920007H1.87C0.84 0.910007 0 1.78001 0 2.85001V38.98C0 40.05 0.84 40.92 1.87 40.92H27.15C28.18 40.92 29.02 40.05 29.02 38.98V37.06C29.02 36.92 28.91 36.81 28.77 36.81C28.63 36.81 28.52 36.92 28.52 37.06V38.98C28.52 39.77 27.91 40.42 27.15 40.42H1.87C1.12 40.42 0.5 39.78 0.5 38.98V2.85001C0.5 2.06001 1.11 1.41001 1.87 1.41001H21.17C21.33 1.41001 21.49 1.45001 21.64 1.51001V7.79001C21.64 8.30001 22.04 8.71001 22.54 8.71001H28.44C28.49 8.86001 28.51 9.02001 28.51 9.16001V13.06C28.51 13.2 28.62 13.31 28.76 13.31ZM22.53 8.21001C22.31 8.21001 22.13 8.02001 22.13 7.79001V1.84001L28.1 8.14001C28.1 8.14001 28.14 8.19001 28.16 8.21001H22.53Z"
                              fill="#0C0C0C"/>
                    </svg>
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#C82121"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.8597 29.2902 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#C82121"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#C82121"/>
                        <path d="M28.76 13.3099C28.9 13.3099 29.01 13.1999 29.01 13.0599V9.15992C29.01 8.89992 28.95 8.62992 28.84 8.35992C28.84 8.35992 28.83 8.34992 28.82 8.33992C28.72 8.12992 28.6 7.93992 28.46 7.78992L22.48 1.47992C22.36 1.35992 22.21 1.25992 22.05 1.16992C22.03 1.15992 22.02 1.13992 22.01 1.12992C21.74 0.989922 21.46 0.919922 21.17 0.919922H1.87C0.84 0.919922 0 1.77992 0 2.84992V38.9799C0 40.0499 0.84 40.9199 1.87 40.9199H27.15C28.18 40.9199 29.02 40.0499 29.02 38.9799V37.0599C29.02 36.9199 28.91 36.8099 28.77 36.8099C28.63 36.8099 28.52 36.9199 28.52 37.0599V38.9799C28.52 39.7699 27.91 40.4199 27.15 40.4199H1.87C1.12 40.4199 0.5 39.7799 0.5 38.9799V2.84992C0.5 2.05992 1.11 1.40992 1.87 1.40992H21.17C21.33 1.40992 21.49 1.44992 21.64 1.50992V7.78992C21.64 8.29992 22.04 8.70992 22.54 8.70992H28.44C28.49 8.85992 28.51 9.01992 28.51 9.15992V13.0599C28.51 13.1999 28.62 13.3099 28.76 13.3099Z"
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
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#0C0C0C"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.9097 29.3302 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#0C0C0C"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#0C0C0C"/>
                        <path d="M28.76 13.31C28.9 13.31 29.01 13.2 29.01 13.06V9.16001C29.01 8.90001 28.95 8.63001 28.84 8.36001C28.84 8.36001 28.83 8.35001 28.82 8.34001C28.72 8.13001 28.6 7.94001 28.46 7.79001L22.48 1.48001C22.36 1.36001 22.21 1.26001 22.05 1.17001C22.03 1.16001 22.02 1.14001 22.01 1.13001C21.74 0.990007 21.46 0.920007 21.17 0.920007H1.87C0.84 0.910007 0 1.78001 0 2.85001V38.98C0 40.05 0.84 40.92 1.87 40.92H27.15C28.18 40.92 29.02 40.05 29.02 38.98V37.06C29.02 36.92 28.91 36.81 28.77 36.81C28.63 36.81 28.52 36.92 28.52 37.06V38.98C28.52 39.77 27.91 40.42 27.15 40.42H1.87C1.12 40.42 0.5 39.78 0.5 38.98V2.85001C0.5 2.06001 1.11 1.41001 1.87 1.41001H21.17C21.33 1.41001 21.49 1.45001 21.64 1.51001V7.79001C21.64 8.30001 22.04 8.71001 22.54 8.71001H28.44C28.49 8.86001 28.51 9.02001 28.51 9.16001V13.06C28.51 13.2 28.62 13.31 28.76 13.31ZM22.53 8.21001C22.31 8.21001 22.13 8.02001 22.13 7.79001V1.84001L28.1 8.14001C28.1 8.14001 28.14 8.19001 28.16 8.21001H22.53Z"
                              fill="#0C0C0C"/>
                    </svg>
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#C82121"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.8597 29.2902 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#C82121"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#C82121"/>
                        <path d="M28.76 13.3099C28.9 13.3099 29.01 13.1999 29.01 13.0599V9.15992C29.01 8.89992 28.95 8.62992 28.84 8.35992C28.84 8.35992 28.83 8.34992 28.82 8.33992C28.72 8.12992 28.6 7.93992 28.46 7.78992L22.48 1.47992C22.36 1.35992 22.21 1.25992 22.05 1.16992C22.03 1.15992 22.02 1.13992 22.01 1.12992C21.74 0.989922 21.46 0.919922 21.17 0.919922H1.87C0.84 0.919922 0 1.77992 0 2.84992V38.9799C0 40.0499 0.84 40.9199 1.87 40.9199H27.15C28.18 40.9199 29.02 40.0499 29.02 38.9799V37.0599C29.02 36.9199 28.91 36.8099 28.77 36.8099C28.63 36.8099 28.52 36.9199 28.52 37.0599V38.9799C28.52 39.7699 27.91 40.4199 27.15 40.4199H1.87C1.12 40.4199 0.5 39.7799 0.5 38.9799V2.84992C0.5 2.05992 1.11 1.40992 1.87 1.40992H21.17C21.33 1.40992 21.49 1.44992 21.64 1.50992V7.78992C21.64 8.29992 22.04 8.70992 22.54 8.70992H28.44C28.49 8.85992 28.51 9.01992 28.51 9.15992V13.0599C28.51 13.1999 28.62 13.3099 28.76 13.3099Z"
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
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#0C0C0C"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.9097 29.3302 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#0C0C0C"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#0C0C0C"/>
                        <path d="M28.76 13.31C28.9 13.31 29.01 13.2 29.01 13.06V9.16001C29.01 8.90001 28.95 8.63001 28.84 8.36001C28.84 8.36001 28.83 8.35001 28.82 8.34001C28.72 8.13001 28.6 7.94001 28.46 7.79001L22.48 1.48001C22.36 1.36001 22.21 1.26001 22.05 1.17001C22.03 1.16001 22.02 1.14001 22.01 1.13001C21.74 0.990007 21.46 0.920007 21.17 0.920007H1.87C0.84 0.910007 0 1.78001 0 2.85001V38.98C0 40.05 0.84 40.92 1.87 40.92H27.15C28.18 40.92 29.02 40.05 29.02 38.98V37.06C29.02 36.92 28.91 36.81 28.77 36.81C28.63 36.81 28.52 36.92 28.52 37.06V38.98C28.52 39.77 27.91 40.42 27.15 40.42H1.87C1.12 40.42 0.5 39.78 0.5 38.98V2.85001C0.5 2.06001 1.11 1.41001 1.87 1.41001H21.17C21.33 1.41001 21.49 1.45001 21.64 1.51001V7.79001C21.64 8.30001 22.04 8.71001 22.54 8.71001H28.44C28.49 8.86001 28.51 9.02001 28.51 9.16001V13.06C28.51 13.2 28.62 13.31 28.76 13.31ZM22.53 8.21001C22.31 8.21001 22.13 8.02001 22.13 7.79001V1.84001L28.1 8.14001C28.1 8.14001 28.14 8.19001 28.16 8.21001H22.53Z"
                              fill="#0C0C0C"/>
                    </svg>
                    <svg class="cd-mat--svg__CARD_IMAGE_2" width="34" height="41" viewBox="0 0 34 41" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.8607 35.1H14.2207C13.5307 35.1 12.9707 34.54 12.9707 33.85V16.21C12.9707 15.52 13.5307 14.96 14.2207 14.96H31.8607C32.5507 14.96 33.1107 15.52 33.1107 16.21V33.85C33.1107 34.54 32.5507 35.1 31.8607 35.1ZM14.2207 15.46C13.8107 15.46 13.4707 15.8 13.4707 16.21V33.85C13.4707 34.26 13.8107 34.6 14.2207 34.6H31.8607C32.2707 34.6 32.6107 34.26 32.6107 33.85V16.21C32.6107 15.8 32.2707 15.46 31.8607 15.46H14.2207Z"
                              fill="#C82121"/>
                        <path d="M26.4797 25.4402C26.3797 25.3502 26.2197 25.3502 26.1297 25.4502L23.2897 28.4902V18.2402C23.2897 18.1002 23.1797 17.9902 23.0397 17.9902C22.8997 17.9902 22.7897 18.1002 22.7897 18.2402V28.4902L19.9497 25.4502C19.8597 25.3502 19.6997 25.3502 19.5997 25.4402C19.4997 25.5302 19.4897 25.6902 19.5897 25.7902L22.8597 29.2902C22.8597 29.2902 22.9697 29.3602 23.0297 29.3602C23.0897 29.3602 23.1497 29.3402 23.1997 29.2902L26.4797 25.7902C26.5697 25.6902 26.5697 25.5302 26.4697 25.4402H26.4797Z"
                              fill="#C82121"/>
                        <path d="M26.3795 32.1502H19.6895C18.4895 32.1502 17.5195 31.1802 17.5195 29.9902C17.5195 29.8502 17.6295 29.7402 17.7695 29.7402C17.9095 29.7402 18.0195 29.8502 18.0195 29.9902C18.0195 30.9002 18.7695 31.6502 19.6895 31.6502H26.3795C27.2995 31.6502 28.0495 30.9102 28.0495 29.9902C28.0495 29.8502 28.1595 29.7402 28.2995 29.7402C28.4395 29.7402 28.5495 29.8502 28.5495 29.9902C28.5495 31.1802 27.5795 32.1502 26.3795 32.1502Z"
                              fill="#C82121"/>
                        <path d="M28.76 13.3099C28.9 13.3099 29.01 13.1999 29.01 13.0599V9.15992C29.01 8.89992 28.95 8.62992 28.84 8.35992C28.84 8.35992 28.83 8.34992 28.82 8.33992C28.72 8.12992 28.6 7.93992 28.46 7.78992L22.48 1.47992C22.36 1.35992 22.21 1.25992 22.05 1.16992C22.03 1.15992 22.02 1.13992 22.01 1.12992C21.74 0.989922 21.46 0.919922 21.17 0.919922H1.87C0.84 0.919922 0 1.77992 0 2.84992V38.9799C0 40.0499 0.84 40.9199 1.87 40.9199H27.15C28.18 40.9199 29.02 40.0499 29.02 38.9799V37.0599C29.02 36.9199 28.91 36.8099 28.77 36.8099C28.63 36.8099 28.52 36.9199 28.52 37.0599V38.9799C28.52 39.7699 27.91 40.4199 27.15 40.4199H1.87C1.12 40.4199 0.5 39.7799 0.5 38.9799V2.84992C0.5 2.05992 1.11 1.40992 1.87 1.40992H21.17C21.33 1.40992 21.49 1.44992 21.64 1.50992V7.78992C21.64 8.29992 22.04 8.70992 22.54 8.70992H28.44C28.49 8.85992 28.51 9.01992 28.51 9.15992V13.0599C28.51 13.1999 28.62 13.3099 28.76 13.3099Z"
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


