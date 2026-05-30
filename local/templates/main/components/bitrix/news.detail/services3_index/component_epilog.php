<?php


$BLOCK_2_Z = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_2_Z']['VALUE']);
$BLOCK_3_Z = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_Z']['VALUE']);
$BLOCK_4_Z = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_4_Z']['VALUE']);
$BLOCK_5_Z = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_5_Z']['VALUE']);


$BLOCK_2_S = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_2_S']['VALUE']);
$BLOCK_3_S_1 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_S_1']['VALUE']);
$BLOCK_3_S_2 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_S_2']['VALUE']);
$BLOCK_4_S = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_4_S']['VALUE']);
$BLOCK_5_S = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_5_S']['VALUE']);


$BLOCK_1_F_1 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_F_1']['VALUE']);
$BLOCK_1_F_2 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_F_2']['VALUE']);
$BLOCK_4_F_1 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_4_F_1']['VALUE']);
$BLOCK_5_F_1 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_5_F_1']['VALUE']);


$BLOCK_1_T_1 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_T_1']['~VALUE']['TEXT']);
$BLOCK_1_T_2 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_T_2']['~VALUE']['TEXT']);
$BLOCK_4_T_1 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_4_T_1']['~VALUE']['TEXT']);
$BLOCK_4_T_2 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_4_T_2']['~VALUE']['TEXT']);
$BLOCK_5_T = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_5_T']['~VALUE']['TEXT']);


?>


<section class="srv3-hero">
    <div class="srv3-hero--div__CONT C-CONTAINER">
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
                <a class="c-common--a__TABS" href="/services/">
                    услуги
                </a>
                <a class="c-common--a__TABS " href="/services/contract-manufacturing/">
                    контрактное производство
                </a>
                <a class="c-common--a__TABS _ACT _MARK">
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
            <? $APPLICATION->ShowTitle(false); ?>
        </h2>


        <div class="srv3-hero--div__MAIN">
            <div class="srv3-hero--div__HERO">
                <div class="srv3-hero--div__HERO_IMAGES __C-SCRL DOWN">
                    <div class="srv3-hero--div__HERO_IMAGE1 __C-SCRL LEFT">
                        <?php if ($BLOCK_1_F_1): ?>
                            <img class="srv3-hero--img__HERO_IMAGE1"
                                 src="<?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_1_F_1']['FILE_VALUE']['SRC'] ?>" alt=""
                                 loading="lazy">
                        <?php endif ?>
                    </div>
                    <div class="srv3-hero--div__HERO_IMAGE2 __C-SCRL RIGHT">
                        <?php if ($BLOCK_1_F_2): ?>
                            <img class="srv3-hero--img__HERO_IMAGE2"
                                 src="<?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_1_F_2']['FILE_VALUE']['SRC'] ?>" alt=""
                                 loading="lazy">
                        <?php endif ?>
                    </div>
                </div>


                <div class="srv3-hero--div__HERO_TEXT">
                    <?php if ($BLOCK_1_T_1): ?>

                        <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_1_T_1']['~VALUE']['TEXT'] ?>
                    <?php endif ?>
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
                            <?php if ($BLOCK_1_T_2): ?>
                                <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_1_T_2']['~VALUE']['TEXT'] ?>
                            <?php endif ?>
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
            </div>


            <div class="srv3-hero--div__SUBSECT1">
                <?php if ($BLOCK_2_Z): ?>
                    <h3 class="c-common--h3 __C-SCRL RIGHT">
                        <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_2_Z']['VALUE'] ?>
                    </h3>
                <?php endif ?>



                <?php if ($BLOCK_2_S): ?>
                    <div class="st-main--div__GRID2_CONT">
                        <div class="st-main--div__GRID2">
                            <? foreach ($arResult["PROPERTIES"]['BLOCK_2_S']['HIGH_DATA'] as $item): ?>
                                <div class="st-main--div__GRID2_ITEM __C-SCRL DOWN">
                                    <button class="st-main--button__GRID2_ITEM_TOP">
                                        <div class="st-main--div__GRID2_ITEM_IMAGE">
                                            <img class="st-main--img__GRID2_ITEM_IMAGE"
                                                 src="<?= $item['UF_FILE1']['SRC'] ?>" alt="" loading="lazy">
                                            <img class="st-main--img__GRID2_ITEM_IMAGE"
                                                 src="<?= $item['UF_FILE2']['SRC'] ?>" alt="" loading="lazy">
                                        </div>
                                        <p class="st-main--p__GRID2_ITEM_TOP">
                                            <?= $item['UF_NAME'] ?>
                                        </p>
                                        <svg class="st-main--svg__GRID2_ITEM_TOP" width="27" height="13"
                                             viewBox="0 0 27 13"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.0859375 0.0910645L13.0859 12.3264L26.0859 0.0910645"
                                                  stroke="#0C0C0C"
                                                  stroke-width="0.25"/>
                                        </svg>
                                    </button>
                                    <p class="st-main--p__GRID2_ITEM_BODY">

                                    </p>
                                </div>
                            <? endforeach; ?>


                        </div>
                    </div>
                <?php endif ?>
            </div>


            <div class="srv3-hero--div__SUBSECT2">

                <?php if ($BLOCK_3_Z): ?>
                    <h3 class="c-common--h3 __C-SCRL RIGHT">
                        <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_3_Z']['VALUE'] ?>
                    </h3>
                <?php endif ?>

                <div class="srv3-hero--div__LIST_BODY3_CONT">
                    <div class="st-main--div__SPH __C-SCRL DOWN">
                        <?php if ($BLOCK_3_S_1): ?>
                            <ul class="st-main--ul__SPH">
                                <?php foreach ($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_S_1']['VALUE'] as $k => $value): ?>
                                    <li class="st-main--li__SPH">
                                        <svg class="st-main--svg__SPH" width="9" height="10" viewBox="0 0 9 10"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z"
                                                  fill="#62BE37"></path>
                                        </svg>

                                        <div class="st-main--div__SPH_TEXT">
                                            <p class="st-main--p__SPH_TEXT1">
                                                <?= $value ?><sup><?= $k + 1 ?></sup>
                                            </p>
                                        </div>
                                    </li>
                                <?php endforeach ?>

                            </ul>
                        <?php endif ?>
                    </div>


                    <div class="st-main--div__FOOTNOTES1_FTNTS __C-SCRL DOWN">
                        <?php if ($BLOCK_3_S_2): ?>

                            <?php foreach ($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_S_2']['VALUE'] as $k => $values): ?>
                                <div class="srv3-hero--div__FOOTNOTES1_FTNTS">
                                    <sup class="srv3-hero--sup__FOOTNOTES1_FTNTS"><?= $k + 1 ?></sup>
                                    <ul class="srv3-hero--ul__FOOTNOTES1_FTNTS">
                                        <?php foreach ($values as $k => $value): ?>
                                            <li class="srv3-hero--li__FOOTNOTES1_FTNTS">
                                                <div class="srv3-hero--div__FOOTNOTES1_FTNTS_POINT"></div>
                                                <span class="srv3-hero--span__FOOTNOTES1_FTNTS">
                                                <?= $value ?>
                                            </span>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            <?php endforeach ?>

                        <?php endif ?>

                    </div>
                </div>
            </div>


            <div class="srv3-hero--div__SUBSECT2">
                <?php if ($BLOCK_4_Z): ?>
                    <h3 class="c-common--h3 __C-SCRL RIGHT">
                        <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_4_Z']['VALUE'] ?>
                    </h3>
                <?php endif ?>


                <div class="srv3-hero--div__LIST_BODY_COM _FIRST">

                    <div class="srv3-hero--div__LIST_BODY_TEXT __C-SCRL RIGHT">
                        <?php if ($BLOCK_4_T_1): ?>
                            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_4_T_1']['~VALUE']['TEXT'] ?>
                        <?php endif ?>
                        <div class="st-main--div__DESCR3">

                            <?php if ($BLOCK_4_T_1): ?>
                                <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_4_T_2']['~VALUE']['TEXT'] ?>
                            <?php endif ?>


                            <?php if ($BLOCK_4_S): ?>
                                <ul class="st-main--ul__DESCR3 __C-SCRL DOWN">
                                    <?php foreach ($arResult["DISPLAY_PROPERTIES"]['BLOCK_4_S']['VALUE'] as $value): ?>
                                        <li class="st-main--li__DESCR3">
                                            <div class="st-main--div__DESCR3_POINT"></div>
                                            <span class="st-main--span__DESCR3">
                                                <?= $value ?>
                                            </span>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            <?php endif ?>
                        </div>
                    </div>


                    <div class="srv3-hero--div__LIST_BODY_IMAGE __C-SCRL LEFT">
                        <?php if ($BLOCK_4_F_1): ?>
                            <img class="srv3-hero--img__LIST_BODY_IMAGE"
                                 src="<?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_4_F_1']['FILE_VALUE']['SRC'] ?>" alt=""
                                 loading="lazy">
                        <?php endif ?>
                    </div>
                </div>
            </div>


            <div class="cdn-reg--div__REQUEST __C-SCRL DOWN">
                <div class="cdn-reg--div__TEXT __C-SCRL">
                    <h3 class="cdn-reg--h3">
                        Напишите нам
                    </h3>
                    <p class="cdn-reg--p__REQUEST">
                        Свяжитесь с нами, чтобы получить персональное решение для вашей организации
                    </p>
                    <button class="cdn-reg--button__REQUEST _OPEN_FRM _FORM_COMMON">
                        Отправить запрос
                    </button>
                </div>
            </div>


            <div class="srv3-hero--div__SUBSECT3">
                <?php if ($BLOCK_5_Z): ?>
                    <h3 class="c-common--h3 __C-SCRL RIGHT">
                        <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_5_Z']['VALUE'] ?>
                    </h3>
                <?php endif ?>


                <div class="srv3-hero--div__LIST_BODY_COM">
                    <div class="srv3-hero--div__LIST_BODY_TEXT __C-SCRL LEFT">

                        <?php if ($BLOCK_5_S): ?>
                            <div class="st-main--div__DESCR3">
                                <ul class="st-main--ul__DESCR3 __C-SCRL DOWN">
                                    <?php foreach ($arResult["DISPLAY_PROPERTIES"]['BLOCK_5_S']['VALUE'] as $value): ?>
                                        <li class="st-main--li__DESCR3">
                                            <div class="st-main--div__DESCR3_POINT"></div>
                                            <span class="st-main--span__DESCR3">
                                                 <?= $value['TEXT'] ?>
                                            </span>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif ?>




                        <?php if ($BLOCK_5_T): ?>
                            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_5_T']['~VALUE']['TEXT'] ?>
                        <?php endif ?>
                    </div>


                    <div class="srv3-hero--div__LIST_BODY_IMAGE __C-SCRL RIGHT">
                        <?php if ($BLOCK_5_F_1): ?>
                            <img class="srv3-hero--img__LIST_BODY_IMAGE"
                                 src="<?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_5_F_1']['FILE_VALUE']['SRC'] ?>" alt=""
                                 loading="lazy">
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>