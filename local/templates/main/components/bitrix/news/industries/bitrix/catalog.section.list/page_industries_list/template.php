<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

$strTitle = "";
$thisSectionsId = $arResult["SECTIONS"][0]['ID'] ?? 0;
if ($arParams['THIS_SECTION_ID']) {
    $thisSectionsId = $arParams['THIS_SECTION_ID'];
}

?>


<? if (isset($arResult["SECTIONS"]) && !empty($arResult["SECTIONS"])): ?>
    <section class="hm-ind">
        <div class="hm-ind--div__CONT C-CONTAINER">
            <div class="c-common--div__HEAD hm-ind--div__HEAD" role="button">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Отрасли
                </h2>

                <svg class="hm-ind--svg__SUBMENU" width="28" height="14" viewBox="0 0 28 14" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"></path>
                </svg>
            </div>

            <form class="c-common--form__SUBMENU hm-ind--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                <? foreach ($arResult["SECTIONS"] as $arSection) : ?>
                    <?
                    if ($arSection["ELEMENT_CNT"] == 0) {
                        continue;
                    }

                    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
                    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), ["CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')]);

                    ?>
                    <label class="hm-ind--label__SUBMENU <?= $thisSectionsId == $arSection['ID'] ? 'active' : '' ?>"
                           id="<?= $this->GetEditAreaId($arSection['ID']); ?>"
                           data-sectionid="<?= $arSection['ID'] ?>">
                        <input class="hm-ind--input__SUBMENU" type="radio" name="1" value="">
                        <span class="hm-ind--span__SUBMENU">
                    <?= $arSection['NAME'] ?>
                </span>
                        <a class="hm-ind--a__SUBMENU" href="<?= $arSection['SECTION_PAGE_URL'] ?>">Перейти в раздел</a>
                    </label>
                <? endforeach; ?>
            </form>
            <div class="hm-ind--div__SUBMENU_BACK"></div>


            <div class="с-common--div__SECT_MAIN hm-ind--div__MAIN">
                <div class="с-common--div__SECT_LEFT hm-ind--div__LEFT"></div>


                <div class="с-common--div__SECT_CONTENT hm-ind--div__CONTENT" id="ind-html">
                    <div class="dh-ind--div__SWIPER swiper">
                        <div class="dh-ind--div__SWIPER_WRAPPER swiper-wrapper">

                            <? foreach ($arResult["SECTIONS"] as $arSection) : ?>
                                <?
                                if ($arSection["ELEMENT_CNT"] == 0) {
                                    continue;
                                }
                                ?>
                                <div class="dh-ind--div__SWIPER_SLIDE swiper-slide">
                                    <div class="cd-use--div__SWIPER21 swiper __C-SCRL DOWN">
                                        <div class="cd-use--div__SWIPER21_WRAPPER swiper-wrapper">
                                            <? foreach ($arResult['SECTIONS_WITH_ITEMS'][$arSection['ID']]['ITEMS'] as $item) : ?>

                                                <div class="cd-use--div__SWIPER21_SLIDE swiper-slide">
                                                    <article class="hm-ind--article__CARD">
                                                        <?
                                                        $otrasl = $arResult["PROPERTIES"]['OTRASLI_NAME']['DATA'][$item['PROPERTIES']['OTRASLI_NAME']['VALUE']] ?? [];
                                                        ?>

                                                        <? if (!empty($item['PROPERTIES']['OTRASLI_NAME']['VALUE'])): ?>
                                                            <a class="hm-ind--a__CARD_TAG color-yellow" href="<?= $item['DETAIL_PAGE_URL'] ?>" style="color:<?=$otrasl['UF_DESCRIPTION']?>">
                                                                <div class="hm-ind--div__CARD_TAG_CIRCLE" style="background-color: <?=$otrasl['UF_DESCRIPTION']?>"></div>
                                                                <span class="hm-ind--span__CARD_TAG">
                            <?= $otrasl['UF_NAME'] ?? '' ?>
                        </span>
                                                            </a>
                                                        <?endif ?>

                                                        <a class="hm-ind--p__CARD_NAME" href="<?= $item['DETAIL_PAGE_URL'] ?>">
                                                            <?= $item['NAME'] ?>
                                                        </a>
                                                        <p class="hm-ind--p__CARD_TEXT">
                                                            <?= $item['PREVIEW_TEXT'] ?>
                                                        </p>

                                                        <div class="hm-ind--div__CARD_IMAGE">
                                                            <a class="hm-ind--a__MORE"
                                                               href="<?= $item['DETAIL_PAGE_URL'] ?>">
                                                                <span class="hm-ind--span__MORE">ПОДРОБНЕЕ</span>
                                                                <svg width="27" height="20" viewBox="0 0 27 20"
                                                                     fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M0 10H26M26 10L16.0727 1M26 10L16.0727 19"
                                                                          stroke="white" stroke-width="0.55"/>
                                                                </svg>
                                                            </a>
                                                            <img src="<?= $item['DETAIL_PICTURE_SRC'] ?? AHILES3005_NO_IMAGE ?>"
                                                                 alt="Отрасли 1"
                                                                 loading="lazy">
                                                        </div>
                                                    </article>
                                                </div>
                                            <? endforeach; ?>

                                        </div>

                                        <div class="cd-use--div__SWIPER21_NAV">
                                            <button class="cd-use--button__SWIPER21_PREV swiper-button-disabled"
                                                    disabled="" tabindex="-1" aria-label="Previous slide"
                                                    aria-controls="swiper-wrapper-2e397d8c62b40696"
                                                    aria-disabled="true">
                                                <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121"
                                                          stroke-width="1.5" stroke-linecap="round"></path>
                                                </svg>
                                            </button>
                                            <div class="cd-use--div__SWIPER21_NAV_LINE"></div>
                                            <button class="cd-use--button__SWIPER21_NEXT" tabindex="0"
                                                    aria-label="Next slide"
                                                    aria-controls="swiper-wrapper-2e397d8c62b40696"
                                                    aria-disabled="false">
                                                <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121"
                                                          stroke-width="1.5" stroke-linecap="round"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <? endforeach; ?>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
<? endif; ?>










