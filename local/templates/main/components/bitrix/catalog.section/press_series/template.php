<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Catalog\ProductTable;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |    Attention!
 * |    The following comments are for system use
 * |    and are required for the component to work correctly in ajax mode:
 * |    <!-- items-container -->
 * |    <!-- pagination-container -->
 * |    <!-- component-end -->
 */

$this->setFrameMode(true);

$elementEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$elementDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$elementDeleteParams = ['CONFIRM' => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM')];

?>




<?
if (!empty($arResult['ITEMS'])) {
    foreach ($arResult['ITEMS'] as $item) {
        $uniqueId = $item['ID'] . '_' . md5($this->randString() . $component->getAction());
        $this->AddEditAction($uniqueId, $item['EDIT_LINK'], $elementEdit);
        $this->AddDeleteAction($uniqueId, $item['DELETE_LINK'], $elementDelete, $elementDeleteParams);

        ?>


        <article class="hm-pre--article__CARD __C-SCRL DOWN" id="<?= $this->GetEditAreaId($uniqueId); ?>">

        </article>

        <?
    }
}

?>


<form class="c-common--form__SUBMENU cd-med--form__SUBMENU __C-SCRL DOWN" action="#" method=""
      name="">


    <? foreach ($arResult['NEWS_DATA'] as $data): ?>
        <label class="cd-med--label__SUBMENU">
            <input class="cd-med--input__SUBMENU" type="radio" name="1" value="">
            <span class="cd-med--span__SUBMENU">
                                        <?= $data['name'] ?>
                                    </span>
        </label>
    <? endforeach; ?>
</form>
<div class="cd-med--div__LINE1 __C-SCRL DOWN">
    <div class="cd-med--div__LINE2"></div>
</div>


<div class="cd-med--div__SWIPER2 swiper __C-SCRL DOWN">
    <div class="cd-med--div__SWIPER2_WRAPPER swiper-wrapper">
        <? foreach ($arResult['NEWS_DATA'] as $data): ?>
            <div class="cd-med--div__SWIPER2_SLIDE swiper-slide">
                <div class="cd-med--div__VIDEOS">
                    <div class="cd-med--div__SWIPER21 swiper">
                        <div class="cd-med--div__SWIPER21_WRAPPER swiper-wrapper">
                            <? foreach ($data['items'] as $item): ?>
                                <div class="cd-med--div__SWIPER21_SLIDE swiper-slide">
                                    <article class="hm-pre--article__CARD DOWN">
                                        <a class="hm-pre--a__CARD" href="<?= $item['DETAIL_PAGE_URL'] ?>"></a>
                                        <div class="hm-pre--div__CARD_IMAGE">
                                            <img src="<?= $item['DETAIL_PICTURE']['SRC'] ?>" alt="<?= $item['NAME'] ?>"
                                                 loading="lazy">
                                        </div>
                                        <a class="hm-pre--a__CARD_TAG1" href="#">
                                            <?= $item['DISPLAY_PROPERTIES']['PRESS_TYPE']['VALUE'] ?? '' ?>
                                        </a>
                                        <p class="hm-pre--p__CARD_NAME">
                                            <?= $item['NAME'] ?>
                                        </p>
                                        <div class="hm-pre--div__CARD_BOTTOM">
                                            <a class="hm-pre--a__CARD_TAG color-yellow" href="#">
                                                <div class="hm-pre--div__CARD_TAG_CIRCLE"></div>
                                                <span class="hm-pre--span__CARD_TAG">
                                <?= $item['DISPLAY_PROPERTIES']['TAG_KRASOTA']['VALUE'] ?? '' ?>
                            </span>
                                            </a>
                                            <span class="hm-pre--span__CARD_DATE">
                           <?= $item['DATE'] ?>

                        </span>
                                        </div>
                                    </article>
                                </div>
                            <? endforeach; ?>
                        </div>
                        <div class="cd-med--div__SWIPER21_NAV">
                            <button class="cd-med--button__SWIPER21_PREV swiper-button-disabled"
                                    disabled="" tabindex="-1" aria-label="Previous slide"
                                    aria-controls="swiper-wrapper-2e397d8c62b40696"
                                    aria-disabled="true">
                                <svg width="12" height="22" viewBox="0 0 12 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.2002 1.65002L10.0002 11L1.2002 20.35" stroke="#C82121"
                                          stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </button>
                            <div class="cd-med--div__SWIPER21_NAV_LINE"></div>
                            <button class="cd-med--button__SWIPER21_NEXT" tabindex="0"
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
            </div>
        <? endforeach; ?>


    </div>
</div>