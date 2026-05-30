<?php

$BLOCK_1_Z = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_Z']['VALUE']);
$BLOCK_2_Z = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_2_Z']['VALUE']);
$BLOCK_3_Z = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_Z']['VALUE']);
$BLOCK_4_Z = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_4_Z']['VALUE']);
$BLOCK_5_Z = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_5_Z']['VALUE']);

$BLOCK_1_S = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_S']['VALUE']);
$BLOCK_2_S = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_2_S']['VALUE']);
$BLOCK_3_S = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_S']['VALUE']);
$BLOCK_4_S = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_4_S']['VALUE']);
$BLOCK_5_S = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_5_S']['VALUE']);


$BLOCK_2_F = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_2_F']['VALUE']);
$BLOCK_3_F = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_3_F']['VALUE']);
$BLOCK_4_F = !empty($arResult["DISPLAY_PROPERTIES"]['BLOCK_4_F']['VALUE']);



?>




<section class="srv2-hero">
    <div class="srv2-hero--div__CONT C-CONTAINER">
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
                <a class="c-common--a__TABS"  href="/services/">
                    услуги
                </a>
                <a class="c-common--a__TABS _ACT _MARK" >
                    контрактное производство
                </a>
                <a class="c-common--a__TABS" href="/services/custom-development/">
                    заказные разработки
                </a>
                <a class="c-common--a__TABS" href="/services/oem-odm-contracts/">
                    OEM/ODM – контракты
                </a>
                <div class="c-common--div__TABS_FRAME"></div>
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



        <div class="srv2-hero--div__MAIN">
            <div class="srv2-hero--div__SCHEME_MOB">
                <div class="srv2-hero--div__SCHEME_MOB_ITEM __C-SCRL DOWN">
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY">
                        <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_LINE">
                            <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_POINT"></div>
                        </div>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_POINT"></div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_CIRCLE">
                                <span class="srv2-hero--span__SCHEME_MOB_ITEM_CIRCLE">
                                    1
                                </span>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_IMAGE">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch1.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch1n.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_LINE"></div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_TEXT">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_TEXT" src="/images/srv/srv2/srv2-hero_sch01m.svg" alt="" loading="lazy">
                    </div>
                </div>


                <div class="srv2-hero--div__SCHEME_MOB_ITEM __C-SCRL DOWN">
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY">
                        <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_LINE">
                            <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_POINT"></div>
                        </div>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_POINT"></div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_CIRCLE">
                                <span class="srv2-hero--span__SCHEME_MOB_ITEM_CIRCLE">
                                    2
                                </span>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_IMAGE">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch2.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch2n.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_LINE"></div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_TEXT">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_TEXT" src="/images/srv/srv2/srv2-hero_sch02m.svg" alt="" loading="lazy">
                    </div>
                </div>


                <div class="srv2-hero--div__SCHEME_MOB_ITEM __C-SCRL DOWN">
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY">
                        <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_LINE">
                            <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_POINT"></div>
                        </div>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_POINT"></div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_CIRCLE">
                                <span class="srv2-hero--span__SCHEME_MOB_ITEM_CIRCLE">
                                    3
                                </span>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_IMAGE">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch3.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch3n.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_LINE"></div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_TEXT">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_TEXT" src="/images/srv/srv2/srv2-hero_sch03m.svg" alt="" loading="lazy">
                    </div>
                </div>


                <div class="srv2-hero--div__SCHEME_MOB_ITEM __C-SCRL DOWN">
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY">
                        <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_LINE">
                            <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_POINT"></div>
                        </div>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_POINT"></div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_CIRCLE">
                                <span class="srv2-hero--span__SCHEME_MOB_ITEM_CIRCLE">
                                    4
                                </span>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_IMAGE">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch4.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch4n.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_LINE"></div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_TEXT">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_TEXT" src="/images/srv/srv2/srv2-hero_sch04m.svg" alt="" loading="lazy">
                    </div>
                </div>


                <div class="srv2-hero--div__SCHEME_MOB_ITEM __C-SCRL DOWN">
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY">
                        <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_LINE">
                            <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_POINT"></div>
                        </div>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_POINT"></div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_CIRCLE">
                                <span class="srv2-hero--span__SCHEME_MOB_ITEM_CIRCLE">
                                    5
                                </span>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_IMAGE">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch5.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch5n.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_LINE"></div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_TEXT">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_TEXT" src="/images/srv/srv2/srv2-hero_sch05m.svg" alt="" loading="lazy">
                    </div>
                </div>


                <div class="srv2-hero--div__SCHEME_MOB_ITEM __C-SCRL DOWN">
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY">
                        <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_LINE">
                            <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_POINT"></div>
                        </div>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_POINT"></div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_CIRCLE">
                                <span class="srv2-hero--span__SCHEME_MOB_ITEM_CIRCLE">
                                    6
                                </span>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_IMAGE">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch6.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch6n.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_LINE"></div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_TEXT">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_TEXT" src="/images/srv/srv2/srv2-hero_sch06m.svg" alt="" loading="lazy">
                    </div>
                </div>


                <div class="srv2-hero--div__SCHEME_MOB_ITEM __C-SCRL DOWN">
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY">
                        <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_LINE">
                            <div class="srv2-hero--div__SCHEME_MOB_ITEM_EMPTY_POINT"></div>
                        </div>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_POINT"></div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_CIRCLE">
                                <span class="srv2-hero--span__SCHEME_MOB_ITEM_CIRCLE">
                                    7
                                </span>
                    </div>

                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_IMAGE">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch7.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_IMAGE" src="/images/srv/srv2/srv2-hero_sch7n.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_LINE"></div>
                    <div class="srv2-hero--div__SCHEME_MOB_ITEM_TEXT">
                        <img class="srv2-hero--img__SCHEME_MOB_ITEM_TEXT" src="/images/srv/srv2/srv2-hero_sch07m.svg" alt="" loading="lazy">
                    </div>
                </div>
            </div>

            <div class="srv2-hero--div__SCHEME_DESK __C-SCRL DOWN">
                <div class="srv2-hero--div__SCHEME_DESK_ITEM">
                    <div class="srv2-hero--div__SCHEME_DESK_EMPTY">
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_LINE"></div>
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_POINT"></div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_POINT"></div>


                    <div class="srv2-hero--div__SCHEME_DESK_TEXT">
                        <img class="srv2-hero--img__SCHEME_DESK_TEXT" src="/images/srv/srv2/srv2-hero_sch01d.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_LINE">
                        <div class="srv2-hero--div__SCHEME_DESK_CIRCLE">
                                    <span class="srv2-hero--span__SCHEME_DESK_CIRCLE">
                                        1
                                    </span>
                        </div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_IMAGE">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch1.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch1n.svg" alt="" loading="lazy">
                    </div>
                </div>


                <div class="srv2-hero--div__SCHEME_DESK_ITEM">
                    <div class="srv2-hero--div__SCHEME_DESK_EMPTY">
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_LINE"></div>
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_POINT"></div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_POINT"></div>


                    <div class="srv2-hero--div__SCHEME_DESK_IMAGE">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch2.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch2n.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_LINE">
                        <div class="srv2-hero--div__SCHEME_DESK_CIRCLE">
                                    <span class="srv2-hero--span__SCHEME_DESK_CIRCLE">
                                        2
                                    </span>
                        </div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_TEXT">
                        <img class="srv2-hero--img__SCHEME_DESK_TEXT" src="/images/srv/srv2/srv2-hero_sch02d.svg" alt="" loading="lazy">
                    </div>
                </div>


                <div class="srv2-hero--div__SCHEME_DESK_ITEM">
                    <div class="srv2-hero--div__SCHEME_DESK_EMPTY">
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_LINE"></div>
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_POINT"></div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_POINT"></div>


                    <div class="srv2-hero--div__SCHEME_DESK_TEXT">
                        <img class="srv2-hero--img__SCHEME_DESK_TEXT" src="/images/srv/srv2/srv2-hero_sch03d.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_LINE">
                        <div class="srv2-hero--div__SCHEME_DESK_CIRCLE">
                                    <span class="srv2-hero--span__SCHEME_DESK_CIRCLE">
                                        3
                                    </span>
                        </div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_IMAGE">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch3.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch3n.svg" alt="" loading="lazy">
                    </div>
                </div>


                <div class="srv2-hero--div__SCHEME_DESK_ITEM">
                    <div class="srv2-hero--div__SCHEME_DESK_EMPTY">
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_LINE"></div>
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_POINT"></div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_POINT"></div>


                    <div class="srv2-hero--div__SCHEME_DESK_IMAGE">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch4.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch4n.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_LINE">
                        <div class="srv2-hero--div__SCHEME_DESK_CIRCLE">
                                    <span class="srv2-hero--span__SCHEME_DESK_CIRCLE">
                                        4
                                    </span>
                        </div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_TEXT">
                        <img class="srv2-hero--img__SCHEME_DESK_TEXT" src="/images/srv/srv2/srv2-hero_sch04d.svg" alt="" loading="lazy">
                    </div>
                </div>


                <div class="srv2-hero--div__SCHEME_DESK_ITEM">
                    <div class="srv2-hero--div__SCHEME_DESK_EMPTY">
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_LINE"></div>
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_POINT"></div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_POINT"></div>


                    <div class="srv2-hero--div__SCHEME_DESK_TEXT">
                        <img class="srv2-hero--img__SCHEME_DESK_TEXT" src="/images/srv/srv2/srv2-hero_sch05d.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_LINE">
                        <div class="srv2-hero--div__SCHEME_DESK_CIRCLE">
                                    <span class="srv2-hero--span__SCHEME_DESK_CIRCLE">
                                        5
                                    </span>
                        </div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_IMAGE">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch5.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch5n.svg" alt="" loading="lazy">
                    </div>
                </div>


                <div class="srv2-hero--div__SCHEME_DESK_ITEM">
                    <div class="srv2-hero--div__SCHEME_DESK_EMPTY">
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_LINE"></div>
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_POINT"></div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_POINT"></div>


                    <div class="srv2-hero--div__SCHEME_DESK_IMAGE">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch6.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch6n.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_LINE">
                        <div class="srv2-hero--div__SCHEME_DESK_CIRCLE">
                                    <span class="srv2-hero--span__SCHEME_DESK_CIRCLE">
                                        6
                                    </span>
                        </div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_TEXT">
                        <img class="srv2-hero--img__SCHEME_DESK_TEXT" src="/images/srv/srv2/srv2-hero_sch06d.svg" alt="" loading="lazy">
                    </div>
                </div>


                <div class="srv2-hero--div__SCHEME_DESK_ITEM">
                    <div class="srv2-hero--div__SCHEME_DESK_EMPTY">
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_LINE"></div>
                        <div class="srv2-hero--div__SCHEME_DESK_EMPTY_POINT"></div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_POINT"></div>


                    <div class="srv2-hero--div__SCHEME_DESK_TEXT">
                        <img class="srv2-hero--img__SCHEME_DESK_TEXT" src="/images/srv/srv2/srv2-hero_sch07d.svg" alt="" loading="lazy">
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_LINE">
                        <div class="srv2-hero--div__SCHEME_DESK_CIRCLE">
                                    <span class="srv2-hero--span__SCHEME_DESK_CIRCLE">
                                        7
                                    </span>
                        </div>
                    </div>
                    <div class="srv2-hero--div__SCHEME_DESK_IMAGE">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch7.svg" alt="" loading="lazy">
                        <img class="srv2-hero--img__SCHEME_DESK_IMAGE" src="/images/srv/srv2/srv2-hero_sch7n.svg" alt="" loading="lazy">
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
                    <button class="cdn-reg--button__REQUEST _OPEN_FRM _FORM_COMMON">
                        Отправить запрос
                    </button>
                </div>
            </div>



            <div class="srv2-hero--div__SUBSECT">

                <?php if ($BLOCK_1_Z): ?>
                    <h3 class="c-common--h3 __C-SCRL RIGHT">
                        <?=$arResult["DISPLAY_PROPERTIES"]['BLOCK_1_Z']['VALUE']?>
                    </h3>
                <?php endif ?>

                <?php if ($BLOCK_1_S): ?>
                    <div class="st-main--div__GRID1">
                        <?php foreach ($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_S']['~VALUE'] as $value): ?>
                          <div class="st-main--div__GRID1_ITEM">
                           <?=$value['TEXT']?>
                          </div>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
            </div>



            <div class="srv2-hero--div__SUBSECT">
                <?php if ($BLOCK_2_Z): ?>
                    <h3 class="c-common--h3 __C-SCRL RIGHT">
                        <?=$arResult["DISPLAY_PROPERTIES"]['BLOCK_2_Z']['VALUE']?>
                    </h3>
                <?php endif ?>

                <?php if ($BLOCK_2_S): ?>
                    <div class="st-main--div__GRID1">
                        <?php foreach ($arResult["DISPLAY_PROPERTIES"]['BLOCK_1_S']['~VALUE'] as $value): ?>
                            <div class="st-main--div__GRID1_ITEM">
                                <?=$value['TEXT']?>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="st-main--div__IMAGE4 second">
                        <div class="st-main--div__IMAGE4_TEXT __C-SCRL DOWN">
                            <div class="srv2-hero--div__LIST">
                                <?
                                $half = ceil(count($arResult["DISPLAY_PROPERTIES"]["BLOCK_2_S"]['VALUE']) / 2); // Округление в большую сторону
                                $part1 = array_slice($arResult["DISPLAY_PROPERTIES"]["BLOCK_2_S"]['VALUE'], 0, $half);
                                $part2 = array_slice($arResult["DISPLAY_PROPERTIES"]["BLOCK_2_S"]['VALUE'], $half);
                                ?>
                                <?php if ($part1): ?>
                                    <ul class="st-main--ul__DESCR3">
                                        <?php foreach ($part1 as $value): ?>
                                            <li class="st-main--li__DESCR3">
                                                <div class="st-main--div__DESCR3_POINT"></div>
                                                <span class="st-main--span__DESCR3">
                                               <?= $value ?>
                                            </span>
                                            </li>
                                        <?php endforeach ?>

                                    </ul>
                                <?php endif ?>

                                <?php if ($part2): ?>
                                    <ul class="st-main--ul__DESCR3">
                                        <?php foreach ($part2 as $value): ?>
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

                        <?php if ($BLOCK_2_F): ?>
                            <div class="st-main--div__IMAGE4_CONT __C-SCRL DOWN">
                                <img class="st-main--img__IMAGE4" src="<?=$arResult["DISPLAY_PROPERTIES"]['BLOCK_2_F']['FILE_VALUE']['SRC']?>" alt=""
                                     loading="lazy">
                            </div>
                        <?php endif ?>
                    </div>
                <?php endif ?>

            </div>



            <div class="srv2-hero--div__SUBSECT _SECOND">
                <?php if ($BLOCK_3_Z): ?>
                    <h3 class="c-common--h3 __C-SCRL RIGHT">
                        <?=$arResult["DISPLAY_PROPERTIES"]['BLOCK_3_Z']['VALUE']?>
                    </h3>
                <?php endif ?>

                <div class="st-main--div__IMAGE4 second">
                    <div class="st-main--div__IMAGE4_TEXT __C-SCRL DOWN">
                        <div class="srv2-hero--div__LIST">
                            <?
                            $half = ceil(count($arResult["DISPLAY_PROPERTIES"]["BLOCK_3_S"]['VALUE']) / 2); // Округление в большую сторону
                            $part1 = array_slice($arResult["DISPLAY_PROPERTIES"]["BLOCK_3_S"]['VALUE'], 0, $half);
                            $part2 = array_slice($arResult["DISPLAY_PROPERTIES"]["BLOCK_3_S"]['VALUE'], $half);
                            ?>
                            <?php if ($part1): ?>
                                <ul class="st-main--ul__DESCR3">
                                    <?php foreach ($part1 as $value): ?>
                                        <li class="st-main--li__DESCR3">
                                            <div class="st-main--div__DESCR3_POINT"></div>
                                            <span class="st-main--span__DESCR3">
                                               <?= $value ?>
                                            </span>
                                        </li>
                                    <?php endforeach ?>

                                </ul>
                            <?php endif ?>

                            <?php if ($part2): ?>
                                <ul class="st-main--ul__DESCR3">
                                    <?php foreach ($part2 as $value): ?>
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

                    <?php if ($BLOCK_2_F): ?>
                        <div class="st-main--div__IMAGE4_CONT __C-SCRL DOWN">
                            <img class="st-main--img__IMAGE4" src="<?=$arResult["DISPLAY_PROPERTIES"]['BLOCK_3_F']['FILE_VALUE']['SRC']?>" alt=""
                                 loading="lazy">
                        </div>
                    <?php endif ?>
                </div>
            </div>



            <div class="srv2-hero--div__SUBSECT _THIRD">
                <?php if ($BLOCK_4_Z): ?>
                    <h3 class="c-common--h3 __C-SCRL RIGHT">
                        <?=$arResult["DISPLAY_PROPERTIES"]['BLOCK_4_Z']['VALUE']?>
                    </h3>
                <?php endif ?>

                <div class="st-main--div__IMAGE4 second">
                    <div class="st-main--div__IMAGE4_TEXT __C-SCRL DOWN">
                        <div class="srv2-hero--div__LIST">
                            <?
                            $half = ceil(count($arResult["DISPLAY_PROPERTIES"]["BLOCK_4_S"]['~VALUE']) / 2); // Округление в большую сторону
                            $part1 = array_slice($arResult["DISPLAY_PROPERTIES"]["BLOCK_4_S"]['~VALUE'], 0, $half);
                            $part2 = array_slice($arResult["DISPLAY_PROPERTIES"]["BLOCK_4_S"]['~VALUE'], $half);
                            ?>
                            <?php if ($part1): ?>
                                <ul class="st-main--ul__DESCR3">
                                    <?php foreach ($part1 as $value): ?>
                                        <div class="st-main--div__GRID1_ITEM">
                                            <?= $value['TEXT'] ?>
                                        </div>
                                    <?php endforeach ?>

                                </ul>
                            <?php endif ?>

                            <?php if ($part2): ?>
                                <ul class="st-main--ul__DESCR3">
                                    <?php foreach ($part2 as $value): ?>
                                        <div class="st-main--div__GRID1_ITEM">
                                            <?= $value['TEXT'] ?>
                                        </div>
                                    <?php endforeach ?>

                                </ul>
                            <?php endif ?>
                        </div>
                    </div>

                    <?php if ($BLOCK_2_F): ?>
                        <div class="st-main--div__IMAGE4_CONT __C-SCRL DOWN">
                            <img class="st-main--img__IMAGE4" src="<?=$arResult["DISPLAY_PROPERTIES"]['BLOCK_4_F']['FILE_VALUE']['SRC']?>" alt=""
                                 loading="lazy">
                        </div>
                    <?php endif ?>
                </div>
            </div>



            <div class="srv2-hero--div__SUBSECT">
                <?php if ($BLOCK_5_Z): ?>
                    <h3 class="c-common--h3 __C-SCRL RIGHT">
                        <?=$arResult["DISPLAY_PROPERTIES"]['BLOCK_5_Z']['VALUE']?>
                    </h3>
                <?php endif ?>
                <?php if ($BLOCK_5_S): ?>

                    <div class="hr-adv--div__MAIN">
                        <ul class="hr-adv--ul__LIST">
                            <?php foreach ($arResult["DISPLAY_PROPERTIES"]['BLOCK_5_S']['~VALUE'] as $value): ?>

                                <li class="hr-adv--li__LIST __C-SCRL DOWN">
                                    <?=$value['TEXT']?>
                                </li>
                            <?php endforeach ?>


                        </ul>
                    </div>
                <?php endif ?>

            </div>
        </div>
    </div>
</section>

