<?php

$BLOCK_2_Z = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_2_Z']['VALUE']);
$BLOCK_3_Z = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_Z']['VALUE']);

$BLOCK_1_S = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_S']['VALUE']);
$BLOCK_2_S = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_2_S']['VALUE']);

$BLOCK_1_F_1 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_F_1']['VALUE']);
$BLOCK_1_F_2 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_F_2']['VALUE']);
$BLOCK_2_F_1 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_2_F_1']['VALUE']);
$BLOCK_2_F_2 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_2_F_2']['VALUE']);
$BLOCK_3_F_1 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_F_1']['VALUE']);
$BLOCK_3_F_2 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_F_2']['VALUE']);

$BLOCK_1_T_1 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_T_1']['~VALUE']['TEXT']);
$BLOCK_1_T_2 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_T_2']['~VALUE']['TEXT']);
$BLOCK_1_T_3 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_T_3']['VALUE']);
$BLOCK_2_T_1 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_2_T_1']['~VALUE']['TEXT']);
$BLOCK_2_T_2 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_2_T_2']['VALUE']);
$BLOCK_2_T_3 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_2_T_3']['VALUE']);
$BLOCK_3_T_1 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_T_1']['~VALUE']['TEXT']);
$BLOCK_3_T_2 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_T_2']['~VALUE']['TEXT']);
$BLOCK_3_T_3 = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_T_3']['~VALUE']['TEXT']);


?>


<section class="srv4-hero">
    <div class="srv4-hero--div__CONT C-CONTAINER">
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
                <a class="c-common--a__TABS" href="/services/contract-manufacturing/">
                    контрактное производство
                </a>
                <a class="c-common--a__TABS" href="/services/custom-development/">
                    заказные разработки
                </a>
                <a class="c-common--a__TABS _ACT _MARK">
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


        <div class="srv4-hero--div__MAIN">
            <div class="srv4-hero--div__HERO">
                <div class="srv4-hero--div__HERO_TOP">
                    <div class="srv4-hero--div__HERO_IMAGES __C-SCRL DOWN">
                        <?php if ($BLOCK_1_F_1): ?>
                            <div class="srv4-hero--div__HERO_IMAGE1">
                                <img class="srv4-hero--img__HERO_IMAGE1"
                                     src="<?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_1_F_1']['FILE_VALUE']['SRC'] ?>"
                                     alt=""
                                     loading="lazy">
                            </div>
                        <?php endif ?>
                        <?php if ($BLOCK_1_F_2): ?>
                            <div class="srv4-hero--div__HERO_IMAGE2">
                                <img class="srv4-hero--img__HERO_IMAGE2"
                                     src="<?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_1_F_2']['FILE_VALUE']['SRC'] ?>"
                                     alt=""
                                     loading="lazy">
                            </div>
                        <?php endif ?>
                    </div>

                    <div class="srv4-hero--div__HERO_PARTNERS">
                        <?php if ($BLOCK_1_T_3): ?>
                            <p class="srv4-hero--p__HERO_PARTNERS_TOP __C-SCRL DOWN">
                                <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_1_T_3']['VALUE'] ?>
                            </p>
                        <?php endif ?>
                        <?php if ($BLOCK_1_S): ?>
                            <div class="srv4-hero--div__HERO_PARTNERS_ITEMS">
                                <?php foreach ($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_S']['~VALUE'] as $value): ?>
                                    <div class="srv4-hero--div__HERO_PARTNERS_ITEM __C-SCRL DOWN">
                                        <div class="c-common--div__LINE1">
                                            <div class="c-common--div__LINE11"></div>
                                        </div>
                                        <?= $value['TEXT'] ?>
                                    </div>
                                <?php endforeach ?>

                            </div>
                        <?php endif ?>
                    </div>
                </div>


                <div class="srv4-hero--div__HERO_TEXT __C-SCRL LEFT">
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
                            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_1_T_2']['~VALUE']['TEXT'] ?>
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


            <div class="srv4-hero--div__SUBSECT1">
                <?php if ($BLOCK_2_Z): ?>
                    <h3 class="c-common--h3 __C-SCRL RIGHT">
                        <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_2_Z']['VALUE'] ?>
                    </h3>
                <?php endif ?>


                <div class="st-main--div__IMAGE6">
                    <div class="st-main--div__IMAGE6_BIG_IMAGE_CONT __C-SCRL LEFT">


                        <?php if ($BLOCK_2_F_1): ?>
                            <img class="st-main--img__IMAGE6_MAIN_IMAGE"
                                 src="<?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_2_F_1']['FILE_VALUE']['SRC'] ?>" alt=""
                                 loading="lazy">
                        <?php endif ?>
                    </div>


                    <div class="st-main--div__IMAGE6_MAIN">
                        <div class="st-main--div__IMAGE6_MAIN_IMAGE_CONT __C-SCRL DOWN">
                            <?php if ($BLOCK_2_F_2): ?>
                                <img class="st-main--img__IMAGE6_BIG_IMAGE"
                                     src="<?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_2_F_2']['FILE_VALUE']['SRC'] ?>"
                                     alt=""
                                     loading="lazy">
                            <?php endif ?>
                        </div>
                        <div class="st-main--div__IMAGE6_MAIN_BORDER first __C-SCRL DOWN">
                            <svg class="st-main--svg__IMAGE6_MAIN_TEXT" width="379" height="7" viewBox="0 0 379 7"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.53144 4.49697V6.52686L0 2.03007L0 0.000189781L6.53144 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M13.0603 4.49697V6.52686L6.53125 2.03007V0.000189781L13.0603 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M19.5939 4.49697V6.52686L13.0625 2.03007V0.000189781L19.5939 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M26.1252 4.49697V6.52686L19.5938 2.03007V0.000189781L26.1252 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M32.6541 4.49697V6.52686L26.125 2.03007V0.000189781L32.6541 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M39.1877 4.49697V6.52686L32.6562 2.03007V0.000189781L39.1877 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M45.7189 4.49697V6.52686L39.1875 2.03007V0.000189781L45.7189 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M52.2478 4.49697V6.52686L45.7188 2.03007V0.000189781L52.2478 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M58.7736 4.49697V6.52686L52.2422 2.03007V0.000189781L58.7736 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M65.3025 4.49697V6.52686L58.7734 2.03007V0.000189781L65.3025 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M71.8361 4.49697V6.52686L65.3047 2.03007V0.000189781L71.8361 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M78.3674 4.49697V6.52686L71.8359 2.03007V0.000189781L78.3674 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M84.8962 4.49697V6.52686L78.3672 2.03007V0.000189781L84.8962 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M91.4299 4.49697V6.52686L84.8984 2.03007V0.000189781L91.4299 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M97.9611 4.49697V6.52686L91.4297 2.03007V0.000189781L97.9611 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M104.49 4.49697V6.52686L97.9609 2.03007V0.000189781L104.49 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M111.024 4.49697V6.52686L104.492 2.03007V0.000189781L111.024 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M117.555 4.49697V6.52686L111.023 2.03007V0.000189781L117.555 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M124.084 4.49697V6.52686L117.555 2.03007V0.000189781L124.084 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M130.61 4.49697V6.52686L124.078 2.03007V0.000189781L130.61 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M137.141 4.49697V6.52686L130.609 2.03007V0.000189781L137.141 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M143.67 4.49697V6.52686L137.141 2.03007V0.000189781L143.67 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M150.203 4.49697V6.52686L143.672 2.03007V0.000189781L150.203 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M156.732 4.49697V6.52686L150.203 2.03007V0.000189781L156.732 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M163.266 4.49697V6.52686L156.734 2.03007V0.000189781L163.266 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M169.797 4.49697V6.52686L163.266 2.03007V0.000189781L169.797 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M176.326 4.49697V6.52686L169.797 2.03007V0.000189781L176.326 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M182.86 4.49697V6.52686L176.328 2.03007V0.000189781L182.86 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M189.391 4.49697V6.52686L182.859 2.03007V0.000189781L189.391 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M195.92 4.49697V6.52686L189.391 2.03007V0.000189781L195.92 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M202.445 4.49697V6.52686L195.914 2.03007V0.000189781L202.445 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M208.977 4.49697V6.52686L202.445 2.03007V0.000189781L208.977 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M215.506 4.49697V6.52686L208.977 2.03007V0.000189781L215.506 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M222.039 4.49697V6.52686L215.508 2.03007V0.000189781L222.039 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M228.57 4.49697V6.52686L222.039 2.03007V0.000189781L228.57 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M235.099 4.49697V6.52686L228.57 2.03007V0.000189781L235.099 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M241.633 4.49697V6.52686L235.102 2.03007V0.000189781L241.633 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M248.164 4.49697V6.52686L241.633 2.03007V0.000189781L248.164 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M254.693 4.49697V6.52686L248.164 2.03007V0.000189781L254.693 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M261.227 4.49697V6.52686L254.695 2.03007V0.000189781L261.227 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M267.756 4.49697V6.52686L261.227 2.03007V0.000189781L267.756 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M274.281 4.49697V6.52686L267.75 2.03007V0.000189781L274.281 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M280.813 4.49697V6.52686L274.281 2.03007V0.000189781L280.813 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M287.342 4.49697V6.52686L280.812 2.03007V0.000189781L287.342 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M293.873 4.49697V6.52686L287.344 2.03007V0.000189781L293.873 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M300.406 4.49697V6.52686L293.875 2.03007V0.000189781L300.406 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M306.938 4.49697V6.52686L300.406 2.03007V0.000189781L306.938 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M313.467 4.49697V6.52686L306.938 2.03007V0.000189781L313.467 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M320 4.49697V6.52686L313.469 2.03007V0.000189781L320 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M326.531 4.49697V6.52686L320 2.03007V0.000189781L326.531 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M333.06 4.49697V6.52686L326.531 2.03007V0.000189781L333.06 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M339.586 4.49697V6.52686L333.055 2.03007V0.000189781L339.586 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M346.117 4.49697V6.52686L339.586 2.03007V0.000189781L346.117 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M352.646 4.49697V6.52686L346.117 2.03007V0.000189781L352.646 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M359.18 4.49697V6.52686L352.648 2.03007V0.000189781L359.18 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M365.709 4.49697V6.52686L359.18 2.03007V0.000189781L365.709 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M372.242 4.49697V6.52686L365.711 2.03007V0.000189781L372.242 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M378.774 4.49697V6.52686L372.242 2.03007V0.000189781L378.774 4.49697Z"
                                      fill="#B6CDBD"></path>
                            </svg>
                        </div>
                        <div class="st-main--div__IMAGE6_MAIN_TEXT __C-SCRL DOWN">
                            <div class="st-main--div__IMAGE6_MAIN_BORDER">
                                <svg class="st-main--svg__IMAGE6_MAIN_TEXT" width="7" height="288" viewBox="0 0 7 288"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.02988 13.0603H0L4.49678 6.53125H6.52667L2.02988 13.0603Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 6.53144H0L4.49678 0H6.52667L2.02988 6.53144Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 26.1227H0L4.49678 19.5913H6.52667L2.02988 26.1227Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 19.592H0L4.49678 13.0605H6.52667L2.02988 19.592Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 32.6526H0L4.49678 26.1235H6.52667L2.02988 32.6526Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 45.7155H0L4.49678 39.1841H6.52667L2.02988 45.7155Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 39.1843H0L4.49678 32.6528H6.52667L2.02988 39.1843Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 52.2439H0L4.49678 45.7148H6.52667L2.02988 52.2439Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 65.3054H0L4.49678 58.7764H6.52667L2.02988 65.3054Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 58.7756H0L4.49678 52.2441H6.52667L2.02988 58.7756Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 71.8361H0L4.49678 65.3047H6.52667L2.02988 71.8361Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 78.3684H0L4.49678 71.8369H6.52667L2.02988 78.3684Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 91.4284H0L4.49678 84.897H6.52667L2.02988 91.4284Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 84.8967H0L4.49678 78.3677H6.52667L2.02988 84.8967Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 104.489H0L4.49678 97.9595H6.52667L2.02988 104.489Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 97.9597H0L4.49678 91.4282H6.52667L2.02988 97.9597Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 111.02H0L4.49678 104.489H6.52667L2.02988 111.02Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 124.081H0L4.49678 117.552H6.52667L2.02988 124.081Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 117.551H0L4.49678 111.02H6.52667L2.02988 117.551Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 130.612H0L4.49678 124.081H6.52667L2.02988 130.612Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 143.673H0L4.49678 137.144H6.52667L2.02988 143.673Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 137.144H0L4.49678 130.612H6.52667L2.02988 137.144Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 150.204H0L4.49678 143.672H6.52667L2.02988 150.204Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 163.264H0L4.49678 156.733H6.52667L2.02988 163.264Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 156.734H0L4.49678 150.205H6.52667L2.02988 156.734Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 169.796H0L4.49678 163.265H6.52667L2.02988 169.796Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 182.856H0L4.49678 176.324H6.52667L2.02988 182.856Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 176.325H0L4.49678 169.796H6.52667L2.02988 176.325Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 189.388H0L4.49678 182.856H6.52667L2.02988 189.388Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 202.448H0L4.49678 195.917H6.52667L2.02988 202.448Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 195.917H0L4.49678 189.388H6.52667L2.02988 195.917Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 208.98H0L4.49678 202.449H6.52667L2.02988 208.98Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 222.041H0L4.49678 215.509H6.52667L2.02988 222.041Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 215.509H0L4.49678 208.98H6.52667L2.02988 215.509Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 228.571H0L4.49678 222.04H6.52667L2.02988 228.571Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 235.101H0L4.49678 228.572H6.52667L2.02988 235.101Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 248.164H0L4.49678 241.633H6.52667L2.02988 248.164Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 241.632H0L4.49678 235.101H6.52667L2.02988 241.632Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 261.224H0L4.49678 254.692H6.52667L2.02988 261.224Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 254.693H0L4.49678 248.164H6.52667L2.02988 254.693Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 267.753H0L4.49678 261.224H6.52667L2.02988 267.753Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 280.816H0L4.49678 274.285H6.52667L2.02988 280.816Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 274.285H0L4.49678 267.753H6.52667L2.02988 274.285Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 287.345H0L4.49678 280.816H6.52667L2.02988 287.345Z"
                                          fill="#B6CDBD"></path>
                                </svg>
                            </div>

                            <div class="st-main--div__IMAGE6_MAIN_TEXT_CONT">
                                <?php if ($BLOCK_1_T_1): ?>
                                    <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_1_T_1']['~VALUE']['TEXT'] ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="srv4-hero--div__LIST">

                    <?php if ($BLOCK_2_T_2): ?>
                        <p class="srv4-hero--p__LIST_NAME __C-SCRL DOWN">
                            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_2_T_2']['VALUE'] ?>
                        </p>
                    <?php endif ?>


                    <?php if ($BLOCK_2_T_3): ?>
                        <p class="st-main--p__DESCR2 __C-SCRL DOWN">
                            <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_2_T_3']['VALUE'] ?>
                        </p>
                    <?php endif ?>




                    <?php if ($BLOCK_2_S): ?>
                        <?

                        $half = ceil(count($arResult["DISPLAY_PROPERTIES"]["BLOCK_2_S"]['~VALUE']) / 2); // Округление в большую сторону
                        $part1 = array_slice($arResult["DISPLAY_PROPERTIES"]["BLOCK_2_S"]['~VALUE'], 0, $half);
                        $part2 = array_slice($arResult["DISPLAY_PROPERTIES"]["BLOCK_2_S"]['~VALUE'], $half);
//                        echo '<pre>';
//                        var_dump($arResult["DISPLAY_PROPERTIES"]["BLOCK_2_S"])
                        ?>

                        <div class="srv4-hero--div__LIST_CONT">
                            <div class="srv4-hero--div__LIST_COL">
                                <? foreach ($part1 as $value): ?>
                                    <div class="srv4-hero--div__LIST_ITEM __C-SCRL DOWN">
                                        <?= $value['TEXT'] ?>
                                    </div>
                                <? endforeach; ?>
                            </div>


                            <?php if ($part2): ?>

                                <div class="srv4-hero--div__LIST_COL">
                                    <? foreach ($part2 as $value): ?>
                                        <div class="srv4-hero--div__LIST_ITEM __C-SCRL DOWN">
                                            <?= $value['TEXT'] ?>
                                        </div>
                                    <? endforeach; ?>
                                </div>

                            <?php endif ?>
                        </div>

                    <?php endif ?>
                </div>


                <div class="cdn-reg--div__REQUEST">
                    <div class="cdn-reg--div__IMAGE __C-SCRL LEFT">
                        <img class="cdn-reg--img__IMAGE" src="/images/dih/dh-hst_request.webp" alt="">
                    </div>
                    <div class="cdn-reg--div__TEXT __C-SCRL RIGHT">
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
            </div>


            <div class="srv4-hero--div__SUBSECT2">
                <?php if ($BLOCK_3_Z): ?>
                    <h3 class="c-common--h3 __C-SCRL RIGHT">
                        <?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_3_Z']['VALUE'] ?>
                    </h3>
                <?php endif ?>


                <div class="st-main--div__IMAGE6 second">
                    <div class="st-main--div__IMAGE6_BIG_IMAGE_CONT __C-SCRL LEFT">
                        <?php if ($BLOCK_3_F_1): ?>
                            <img class="st-main--img__IMAGE6_BIG_IMAGE" src="<?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_3_F_1']['FILE_VALUE']['SRC'] ?>" alt=""
                                 loading="lazy">
                        <?php endif ?>
                    </div>


                    <div class="st-main--div__IMAGE6_MAIN">
                        <div class="st-main--div__IMAGE6_MAIN_IMAGE_CONT __C-SCRL DOWN">
                            <?php if ($BLOCK_3_F_2): ?>
                                <img class="st-main--img__IMAGE6_MAIN_IMAGE" src="<?= $arResult["DISPLAY_PROPERTIES"]['BLOCK_3_F_2']['FILE_VALUE']['SRC'] ?>"
                                     alt=""
                                     loading="lazy">
                            <?php endif ?>
                        </div>

                        <div class="st-main--div__IMAGE6_MAIN_BORDER first DOWN">
                            <svg class="st-main--svg__IMAGE6_MAIN_TEXT" width="379" height="7" viewBox="0 0 379 7"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.53144 4.49697V6.52686L0 2.03007L0 0.000189781L6.53144 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M13.0603 4.49697V6.52686L6.53125 2.03007V0.000189781L13.0603 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M19.5939 4.49697V6.52686L13.0625 2.03007V0.000189781L19.5939 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M26.1252 4.49697V6.52686L19.5938 2.03007V0.000189781L26.1252 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M32.6541 4.49697V6.52686L26.125 2.03007V0.000189781L32.6541 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M39.1877 4.49697V6.52686L32.6562 2.03007V0.000189781L39.1877 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M45.7189 4.49697V6.52686L39.1875 2.03007V0.000189781L45.7189 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M52.2478 4.49697V6.52686L45.7188 2.03007V0.000189781L52.2478 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M58.7736 4.49697V6.52686L52.2422 2.03007V0.000189781L58.7736 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M65.3025 4.49697V6.52686L58.7734 2.03007V0.000189781L65.3025 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M71.8361 4.49697V6.52686L65.3047 2.03007V0.000189781L71.8361 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M78.3674 4.49697V6.52686L71.8359 2.03007V0.000189781L78.3674 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M84.8962 4.49697V6.52686L78.3672 2.03007V0.000189781L84.8962 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M91.4299 4.49697V6.52686L84.8984 2.03007V0.000189781L91.4299 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M97.9611 4.49697V6.52686L91.4297 2.03007V0.000189781L97.9611 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M104.49 4.49697V6.52686L97.9609 2.03007V0.000189781L104.49 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M111.024 4.49697V6.52686L104.492 2.03007V0.000189781L111.024 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M117.555 4.49697V6.52686L111.023 2.03007V0.000189781L117.555 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M124.084 4.49697V6.52686L117.555 2.03007V0.000189781L124.084 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M130.61 4.49697V6.52686L124.078 2.03007V0.000189781L130.61 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M137.141 4.49697V6.52686L130.609 2.03007V0.000189781L137.141 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M143.67 4.49697V6.52686L137.141 2.03007V0.000189781L143.67 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M150.203 4.49697V6.52686L143.672 2.03007V0.000189781L150.203 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M156.732 4.49697V6.52686L150.203 2.03007V0.000189781L156.732 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M163.266 4.49697V6.52686L156.734 2.03007V0.000189781L163.266 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M169.797 4.49697V6.52686L163.266 2.03007V0.000189781L169.797 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M176.326 4.49697V6.52686L169.797 2.03007V0.000189781L176.326 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M182.86 4.49697V6.52686L176.328 2.03007V0.000189781L182.86 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M189.391 4.49697V6.52686L182.859 2.03007V0.000189781L189.391 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M195.92 4.49697V6.52686L189.391 2.03007V0.000189781L195.92 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M202.445 4.49697V6.52686L195.914 2.03007V0.000189781L202.445 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M208.977 4.49697V6.52686L202.445 2.03007V0.000189781L208.977 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M215.506 4.49697V6.52686L208.977 2.03007V0.000189781L215.506 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M222.039 4.49697V6.52686L215.508 2.03007V0.000189781L222.039 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M228.57 4.49697V6.52686L222.039 2.03007V0.000189781L228.57 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M235.099 4.49697V6.52686L228.57 2.03007V0.000189781L235.099 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M241.633 4.49697V6.52686L235.102 2.03007V0.000189781L241.633 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M248.164 4.49697V6.52686L241.633 2.03007V0.000189781L248.164 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M254.693 4.49697V6.52686L248.164 2.03007V0.000189781L254.693 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M261.227 4.49697V6.52686L254.695 2.03007V0.000189781L261.227 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M267.756 4.49697V6.52686L261.227 2.03007V0.000189781L267.756 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M274.281 4.49697V6.52686L267.75 2.03007V0.000189781L274.281 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M280.813 4.49697V6.52686L274.281 2.03007V0.000189781L280.813 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M287.342 4.49697V6.52686L280.812 2.03007V0.000189781L287.342 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M293.873 4.49697V6.52686L287.344 2.03007V0.000189781L293.873 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M300.406 4.49697V6.52686L293.875 2.03007V0.000189781L300.406 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M306.938 4.49697V6.52686L300.406 2.03007V0.000189781L306.938 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M313.467 4.49697V6.52686L306.938 2.03007V0.000189781L313.467 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M320 4.49697V6.52686L313.469 2.03007V0.000189781L320 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M326.531 4.49697V6.52686L320 2.03007V0.000189781L326.531 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M333.06 4.49697V6.52686L326.531 2.03007V0.000189781L333.06 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M339.586 4.49697V6.52686L333.055 2.03007V0.000189781L339.586 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M346.117 4.49697V6.52686L339.586 2.03007V0.000189781L346.117 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M352.646 4.49697V6.52686L346.117 2.03007V0.000189781L352.646 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M359.18 4.49697V6.52686L352.648 2.03007V0.000189781L359.18 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M365.709 4.49697V6.52686L359.18 2.03007V0.000189781L365.709 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M372.242 4.49697V6.52686L365.711 2.03007V0.000189781L372.242 4.49697Z"
                                      fill="#B6CDBD"></path>
                                <path d="M378.774 4.49697V6.52686L372.242 2.03007V0.000189781L378.774 4.49697Z"
                                      fill="#B6CDBD"></path>
                            </svg>
                        </div>

                        <div class="st-main--div__IMAGE6_MAIN_TEXT __C-SCRL DOWN">
                            <div class="st-main--div__IMAGE6_MAIN_BORDER">
                                <svg class="st-main--svg__IMAGE6_MAIN_TEXT" width="7" height="288" viewBox="0 0 7 288"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.02988 13.0603H0L4.49678 6.53125H6.52667L2.02988 13.0603Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 6.53144H0L4.49678 0H6.52667L2.02988 6.53144Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 26.1227H0L4.49678 19.5913H6.52667L2.02988 26.1227Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 19.592H0L4.49678 13.0605H6.52667L2.02988 19.592Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 32.6526H0L4.49678 26.1235H6.52667L2.02988 32.6526Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 45.7155H0L4.49678 39.1841H6.52667L2.02988 45.7155Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 39.1843H0L4.49678 32.6528H6.52667L2.02988 39.1843Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 52.2439H0L4.49678 45.7148H6.52667L2.02988 52.2439Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 65.3054H0L4.49678 58.7764H6.52667L2.02988 65.3054Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 58.7756H0L4.49678 52.2441H6.52667L2.02988 58.7756Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 71.8361H0L4.49678 65.3047H6.52667L2.02988 71.8361Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 78.3684H0L4.49678 71.8369H6.52667L2.02988 78.3684Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 91.4284H0L4.49678 84.897H6.52667L2.02988 91.4284Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 84.8967H0L4.49678 78.3677H6.52667L2.02988 84.8967Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 104.489H0L4.49678 97.9595H6.52667L2.02988 104.489Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 97.9597H0L4.49678 91.4282H6.52667L2.02988 97.9597Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 111.02H0L4.49678 104.489H6.52667L2.02988 111.02Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 124.081H0L4.49678 117.552H6.52667L2.02988 124.081Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 117.551H0L4.49678 111.02H6.52667L2.02988 117.551Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 130.612H0L4.49678 124.081H6.52667L2.02988 130.612Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 143.673H0L4.49678 137.144H6.52667L2.02988 143.673Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 137.144H0L4.49678 130.612H6.52667L2.02988 137.144Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 150.204H0L4.49678 143.672H6.52667L2.02988 150.204Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 163.264H0L4.49678 156.733H6.52667L2.02988 163.264Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 156.734H0L4.49678 150.205H6.52667L2.02988 156.734Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 169.796H0L4.49678 163.265H6.52667L2.02988 169.796Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 182.856H0L4.49678 176.324H6.52667L2.02988 182.856Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 176.325H0L4.49678 169.796H6.52667L2.02988 176.325Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 189.388H0L4.49678 182.856H6.52667L2.02988 189.388Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 202.448H0L4.49678 195.917H6.52667L2.02988 202.448Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 195.917H0L4.49678 189.388H6.52667L2.02988 195.917Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 208.98H0L4.49678 202.449H6.52667L2.02988 208.98Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 222.041H0L4.49678 215.509H6.52667L2.02988 222.041Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 215.509H0L4.49678 208.98H6.52667L2.02988 215.509Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 228.571H0L4.49678 222.04H6.52667L2.02988 228.571Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 235.101H0L4.49678 228.572H6.52667L2.02988 235.101Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 248.164H0L4.49678 241.633H6.52667L2.02988 248.164Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 241.632H0L4.49678 235.101H6.52667L2.02988 241.632Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 261.224H0L4.49678 254.692H6.52667L2.02988 261.224Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 254.693H0L4.49678 248.164H6.52667L2.02988 254.693Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 267.753H0L4.49678 261.224H6.52667L2.02988 267.753Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 280.816H0L4.49678 274.285H6.52667L2.02988 280.816Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 274.285H0L4.49678 267.753H6.52667L2.02988 274.285Z"
                                          fill="#B6CDBD"></path>
                                    <path d="M2.02988 287.345H0L4.49678 280.816H6.52667L2.02988 287.345Z"
                                          fill="#B6CDBD"></path>
                                </svg>
                            </div>
                            <div class="st-main--div__IMAGE6_MAIN_TEXT_CONT">
                                <div class="st-main--div__IMAGE6_MAIN_BORDER second"></div>
                                <?php if ($BLOCK_3_T_1): ?>
                                    <?=$arResult["DISPLAY_PROPERTIES"]['BLOCK_3_T_1']['~VALUE']['TEXT']?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
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
                        <?php if ($BLOCK_3_T_2): ?>
                            <?=$arResult["DISPLAY_PROPERTIES"]['BLOCK_3_T_2']['~VALUE']['TEXT']?>
                        <?php endif ?>
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


                <?php if ($BLOCK_3_T_3): ?>
                    <?=$arResult["DISPLAY_PROPERTIES"]['BLOCK_3_T_3']['~VALUE']['TEXT']?>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>