<?php


$ZAGOLOVOK_1 = !empty($arResult["DISPLAY_PROPERTIES"]['ZAGOLOVOK_1']['VALUE']);
$ZAGOLOVOK_2 = !empty($arResult["DISPLAY_PROPERTIES"]['ZAGOLOVOK_2']['VALUE']);
$ZAGOLOVOK_3 = !empty($arResult["DISPLAY_PROPERTIES"]['ZAGOLOVOK_3']['VALUE']);

$SPISOK_1_1 = !empty($arResult["DISPLAY_PROPERTIES"]["SPISOK_1_1"]['VALUE']);
$SPISOK_2_1 = !empty($arResult["DISPLAY_PROPERTIES"]['SPISOK_2_1']['VALUE']);
$SPISOK_3_1 = !empty($arResult["DISPLAY_PROPERTIES"]['SPISOK_3_1']['VALUE']);

$TEXT_1_1 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_1_1']['~VALUE']['TEXT']);
$TEXT_1_2 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_1_2']['~VALUE']['TEXT']);
$TEXT_1_3 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_1_3']['~VALUE']['TEXT']);
$TEXT_2_1 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_2_1']['~VALUE']['TEXT']);
$TEXT_2_2 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_2_2']['~VALUE']['TEXT']);
$TEXT_2_3 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_2_3']['~VALUE']['TEXT']);
$TEXT_2_4 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_2_4']['~VALUE']['TEXT']);
$TEXT_3_1 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_3_1']['~VALUE']['TEXT']);
$TEXT_3_2 = !empty($arResult["DISPLAY_PROPERTIES"]['TEXT_3_2']['~VALUE']['TEXT']);

$isNotEmptyFOTO_1_1 = is_array($arResult["PROPERTIES"]['FOTO_1_1']['VALUE']) && !empty($arResult["PROPERTIES"]['FOTO_1_1']['VALUE']);
$isNotEmptyVIDEO_1_1 = is_array($arResult["PROPERTIES"]['VIDEO_1_1']['VALUE']) && !empty($arResult["PROPERTIES"]['VIDEO_1_1']['VALUE']);

$isNotEmptyFOTO_2_1 = is_array($arResult["PROPERTIES"]['FOTO_2_1']['VALUE']) && !empty($arResult["PROPERTIES"]['FOTO_2_1']['VALUE']);
$isNotEmptyVIDEO_2_1 = is_array($arResult["PROPERTIES"]['VIDEO_2_1']['VALUE']) && !empty($arResult["PROPERTIES"]['VIDEO_2_1']['VALUE']);

$isNotEmptyFOTO_3_1 = is_array($arResult["PROPERTIES"]['FOTO_3_1']['VALUE']) && !empty($arResult["PROPERTIES"]['FOTO_3_1']['VALUE']);
$isNotEmptyVIDEO_3_1 = is_array($arResult["PROPERTIES"]['VIDEO_3_1']['VALUE']) && !empty($arResult["PROPERTIES"]['VIDEO_3_1']['VALUE']);


if ($isNotEmptyFOTO_1_1 && count($arResult["PROPERTIES"]['FOTO_1_1']['VALUE']) == 1) {
    $_array = $arResult["DISPLAY_PROPERTIES"]['FOTO_1_1']['FILE_VALUE'];
    $arResult["DISPLAY_PROPERTIES"]['FOTO_1_1']['FILE_VALUE'] = [$_array];
}
if ($isNotEmptyFOTO_2_1 && count($arResult["PROPERTIES"]['FOTO_2_1']['VALUE']) == 1) {
    $_array = $arResult["DISPLAY_PROPERTIES"]['FOTO_2_1']['FILE_VALUE'];
    $arResult["DISPLAY_PROPERTIES"]['FOTO_2_1']['FILE_VALUE'] = [$_array];
}
if ($isNotEmptyFOTO_3_1 && count($arResult["PROPERTIES"]['FOTO_3_1']['VALUE']) == 1) {
    $_array = $arResult["DISPLAY_PROPERTIES"]['FOTO_3_1']['FILE_VALUE'];
    $arResult["DISPLAY_PROPERTIES"]['FOTO_3_1']['FILE_VALUE'] = [$_array];
}


if ($isNotEmptyVIDEO_1_1 && count($arResult["PROPERTIES"]['VIDEO_1_1']['VALUE']) == 1) {
    $_array = $arResult["DISPLAY_PROPERTIES"]['VIDEO_1_1']['FILE_VALUE'];
    $arResult["DISPLAY_PROPERTIES"]['VIDEO_1_1']['FILE_VALUE'] = [$_array];
}

if ($isNotEmptyVIDEO_2_1 && count($arResult["PROPERTIES"]['VIDEO_2_1']['VALUE']) == 1) {
    $_array = $arResult["DISPLAY_PROPERTIES"]['VIDEO_2_1']['FILE_VALUE'];
    $arResult["DISPLAY_PROPERTIES"]['VIDEO_2_1']['FILE_VALUE'] = [$_array];
}

if ($isNotEmptyVIDEO_3_1 && count($arResult["PROPERTIES"]['VIDEO_3_1']['VALUE']) == 1) {
    $_array = $arResult["DISPLAY_PROPERTIES"]['VIDEO_3_1']['FILE_VALUE'];
    $arResult["DISPLAY_PROPERTIES"]['VIDEO_3_1']['FILE_VALUE'] = [$_array];
}


?>


<!-- ---------- ********** СЕКЦИЯ DEV ********** ---------- -->

<section class="te-dev" id="te-dev">
    <div class="te-dev--div__CONT C-CONTAINER">
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
                <a class="c-common--a__TABS _ACT _MARK" href="#te-dev">
                    <?= $arResult["DISPLAY_PROPERTIES"]['ZAGOLOVOK_1']['VALUE'] ?>
                </a>
                <a class="c-common--a__TABS" href="#te-prod">
                    <?= $arResult["DISPLAY_PROPERTIES"]['ZAGOLOVOK_2']['VALUE'] ?>
                </a>
                <a class="c-common--a__TABS" href="#te-qm">
                    <?= $arResult["DISPLAY_PROPERTIES"]['ZAGOLOVOK_3']['VALUE'] ?>
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


        <? if ($ZAGOLOVOK_1): ?>
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                <?= $arResult["DISPLAY_PROPERTIES"]['ZAGOLOVOK_1']['VALUE'] ?>
            </h2>
        <? endif ?>


        <div class="te-dev--div__MAIN">
            <? if ($TEXT_1_1): ?>
                <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_1_1']['~VALUE']['TEXT'] ?>
            <? endif ?>



            <? if ($TEXT_1_2): ?>
                <div class="st-main--div__IMAGE6 second">
                    <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_1_2']['~VALUE']['TEXT'] ?>
                </div>
            <? endif; ?>


            <? if ($TEXT_1_3): ?>
                <div class="st-main--div__IMGLIST">
                    <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_1_3']['~VALUE']['TEXT'] ?>
                </div>
            <? endif; ?>


            <? if ($SPISOK_1_1): ?>
                <ul class="te-common--ul__LIST">
                    <? foreach ($arResult["PROPERTIES"]['SPISOK_1_1']['~VALUE'] as $value): ?>
                        <li class="te-common--li__LIST __C-SCRL DOWN">
                            <?= $value['TEXT'] ?>
                        </li>
                    <? endforeach; ?>
                </ul>
            <? endif ?>

            <div class="te-common--div__GALLERY">
                <? if ($isNotEmptyFOTO_1_1 || $isNotEmptyVIDEO_1_1): ?>
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
                                <? if ($isNotEmptyFOTO_1_1): ?>
                                    <label class="mc-pk--label__SUBMENU">
                                        <input class="mc-pk--input__SUBMENU" type="radio" name="1" value="">
                                        <span class="mc-pk--span__SUBMENU">
                                    Фотогалерея
                                </span>
                                    </label>
                                <? endif ?>
                                <? if ($isNotEmptyVIDEO_1_1): ?>
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
                            <? if ($isNotEmptyFOTO_1_1): ?>
                                <div class="mc-pk--div__SWIPER1_SLIDE swiper-slide">
                                    <div class="mc-pk--div__GALLERY">
                                        <div class="c-common--div__GLR_CONT2 __C-SCRL LEFT">
                                            <div class="c-common--div__GLR_SWIPER swiper">
                                                <div class="c-common--div__GLR_SWIPER_WRAPPER swiper-wrapper">

                                                    <? foreach ($arResult["DISPLAY_PROPERTIES"]['FOTO_1_1']['FILE_VALUE'] as $slide): ?>
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
                            <? if ($isNotEmptyVIDEO_1_1): ?>
                                <div class="mc-pk--div__SWIPER1_SLIDE swiper-slide">
                                    <div class="mc-pk--div__GALLERY">
                                        <div class="c-common--div__GLR_CONT2 __C-SCRL LEFT">
                                            <div class="c-common--div__GLR_SWIPER swiper">
                                                <div class="c-common--div__GLR_SWIPER_WRAPPER swiper-wrapper">

                                                    <? foreach ($arResult["DISPLAY_PROPERTIES"]['VIDEO_1_1']['FILE_VALUE'] as $slide): ?>
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


<!-- ---------- ********** СЕКЦИЯ PROD ********** ---------- -->

<section class="te-prod" id="te-prod">
    <div class="te-dev--div__CONT C-CONTAINER">

        <? if ($ZAGOLOVOK_2): ?>
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                <?= $arResult["DISPLAY_PROPERTIES"]['ZAGOLOVOK_2']['VALUE'] ?>
            </h2>
        <? endif ?>


        <div class="te-prod--div__MAIN">
            <? if ($TEXT_2_1): ?>
                <div class="st-main--div__IMGLIST">
                    <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_2_1']['~VALUE']['TEXT'] ?>
                </div>
            <? endif; ?>


            <? if ($TEXT_2_2): ?>
                <div class="st-main--div__IMAGE6">
                    <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_2_2']['~VALUE']['TEXT'] ?>
                </div>
            <? endif; ?>


            <div class="st-main--div__THESES">


                <? if ($TEXT_2_3): ?>
                    <div class="st-main--div__DESCR3 __C-SCRL DOWN">
                        <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_2_3']['~VALUE']['TEXT'] ?>
                    </div>
                <? endif; ?>

                <? if ($TEXT_2_4): ?>
                    <div class="st-main--div__THESES_CONT">
                        <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_2_4']['~VALUE']['TEXT'] ?>
                    </div>
                <? endif; ?>


            </div>


            <? if ($SPISOK_2_1): ?>
                <ul class="te-common--ul__LIST">

                    <? foreach ($arResult["PROPERTIES"]['SPISOK_2_1']['~VALUE'] as $value): ?>
                        <li class="te-common--li__LIST __C-SCRL DOWN">
                            <?= $value['TEXT'] ?>
                        </li>
                    <? endforeach; ?>
                </ul>
            <? endif ?>


            <div class="te-common--div__GALLERY">
                <? if ($isNotEmptyFOTO_2_1 || $isNotEmptyVIDEO_2_1): ?>
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
                                <? if ($isNotEmptyFOTO_2_1): ?>
                                    <label class="mc-pk--label__SUBMENU">
                                        <input class="mc-pk--input__SUBMENU" type="radio" name="1" value="">
                                        <span class="mc-pk--span__SUBMENU">
                                    Фотогалерея
                                </span>
                                    </label>
                                <? endif ?>
                                <? if ($isNotEmptyVIDEO_2_1): ?>
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
                            <? if ($isNotEmptyFOTO_2_1): ?>
                                <div class="mc-pk--div__SWIPER1_SLIDE swiper-slide">
                                    <div class="mc-pk--div__GALLERY">
                                        <div class="c-common--div__GLR_CONT2 __C-SCRL LEFT">
                                            <div class="c-common--div__GLR_SWIPER swiper">
                                                <div class="c-common--div__GLR_SWIPER_WRAPPER swiper-wrapper">

                                                    <? foreach ($arResult["DISPLAY_PROPERTIES"]['FOTO_2_1']['FILE_VALUE'] as $slide): ?>
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
                            <? if ($isNotEmptyVIDEO_2_1): ?>
                                <div class="mc-pk--div__SWIPER1_SLIDE swiper-slide">
                                    <div class="mc-pk--div__GALLERY">
                                        <div class="c-common--div__GLR_CONT2 __C-SCRL LEFT">
                                            <div class="c-common--div__GLR_SWIPER swiper">
                                                <div class="c-common--div__GLR_SWIPER_WRAPPER swiper-wrapper">

                                                    <? foreach ($arResult["DISPLAY_PROPERTIES"]['VIDEO_2_1']['FILE_VALUE'] as $slide): ?>
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


<!-- ---------- ********** СЕКЦИЯ QM ********** ---------- -->

<section class="te-qm" id="te-qm">
    <div class="te-qm--div__CONT C-CONTAINER">

        <? if ($ZAGOLOVOK_3): ?>
            <h2 class="c-common--h2 __C-SCRL RIGHT">
                <?= $arResult["DISPLAY_PROPERTIES"]['ZAGOLOVOK_3']['VALUE'] ?>
            </h2>
        <? endif ?>


        <div class="te-qm--div__MAIN">

            <? if ($TEXT_3_1): ?>
                <div class="st-main--div__DESCR3 __C-SCRL DOWN">
                    <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_3_1']['~VALUE']['TEXT'] ?>
                </div>
            <? endif; ?>



            <? if ($TEXT_3_2): ?>
                <div class="st-main--div__IMAGE6 second">
                    <?= $arResult["DISPLAY_PROPERTIES"]['TEXT_3_2']['~VALUE']['TEXT'] ?>
                </div>
            <? endif; ?>



            <? if ($SPISOK_3_1): ?>
                <ul class="te-common--ul__LIST">
                    <? foreach ($arResult["PROPERTIES"]['SPISOK_3_1']['~VALUE'] as $value): ?>
                        <li class="te-common--li__LIST __C-SCRL DOWN">
                            <?= $value['TEXT'] ?>
                        </li>
                    <? endforeach; ?>
                </ul>
            <? endif ?>


            <div class="te-common--div__GALLERY">
                <? if ($isNotEmptyFOTO_3_1 || $isNotEmptyVIDEO_3_1): ?>
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
                                <? if ($isNotEmptyFOTO_3_1): ?>
                                    <label class="mc-pk--label__SUBMENU">
                                        <input class="mc-pk--input__SUBMENU" type="radio" name="1" value="">
                                        <span class="mc-pk--span__SUBMENU">
                                    Фотогалерея
                                </span>
                                    </label>
                                <? endif ?>
                                <? if ($isNotEmptyVIDEO_3_1): ?>
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
                            <? if ($isNotEmptyFOTO_3_1): ?>
                                <div class="mc-pk--div__SWIPER1_SLIDE swiper-slide">
                                    <div class="mc-pk--div__GALLERY">
                                        <div class="c-common--div__GLR_CONT2 __C-SCRL LEFT">
                                            <div class="c-common--div__GLR_SWIPER swiper">
                                                <div class="c-common--div__GLR_SWIPER_WRAPPER swiper-wrapper">

                                                    <? foreach ($arResult["DISPLAY_PROPERTIES"]['FOTO_3_1']['FILE_VALUE'] as $slide): ?>
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
                            <? if ($isNotEmptyVIDEO_3_1): ?>
                                <div class="mc-pk--div__SWIPER1_SLIDE swiper-slide">
                                    <div class="mc-pk--div__GALLERY">
                                        <div class="c-common--div__GLR_CONT2 __C-SCRL LEFT">
                                            <div class="c-common--div__GLR_SWIPER swiper">
                                                <div class="c-common--div__GLR_SWIPER_WRAPPER swiper-wrapper">

                                                    <? foreach ($arResult["DISPLAY_PROPERTIES"]['VIDEO_3_1']['FILE_VALUE'] as $slide): ?>
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
