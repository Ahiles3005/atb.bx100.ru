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

        <article class="hm-des--article__CARD __C-SCRL DOWN" id="<?= $this->GetEditAreaId($uniqueId); ?>">
            <div class="hm-des--div__CARD_TEXT">
                <a class="hm-des--a__CARD_TAG color-green" href="<?= $item['DETAIL_PAGE_URL'] ?>">
                    <div class="hm-des--div__CARD_TAG_CIRCLE"></div>
                    <span class="hm-des--span__CARD_TAG">
                                НАДО УТОЧНИТЬ
                            </span>
                </a>
                <p class="hm-des--p__CARD_NAME">
                    <?= $item['NAME'] ?>
                </p>
                <ul class="hm-des--ul__CARD_LIST">
                    <? foreach ($item['PROPERTIES']['TEXT_BOTTOM_NEXT']['VALUE'] as $k => $value): ?>
                        <li class="hm-des--li__CARD_LIST">
                            <?= $value ?>
                        </li>
                        <? if ($k >= 0 && $k <= 2): ?>
                            <div class="hm-des--div__CARD_LIST"></div>
                        <? endif ?>
                    <? endforeach; ?>

                </ul>
                <p class="hm-des--p__CARD_TEXT">
                    <?= $item['PREVIEW_TEXT'] ?>
                </p>
            </div>


            <div class="hm-des--div__CARD_IMAGE">
                <a class="hm-des--a__MORE" href="<?= $item['DETAIL_PAGE_URL'] ?>">
                    <span class="hm-des--span__MORE">ПОДРОБНЕЕ</span>
                    <svg width="27" height="20" viewBox="0 0 27 20" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 10H26M26 10L16.0727 1M26 10L16.0727 19" stroke="white"
                              stroke-width="0.55"/>
                    </svg>
                </a>
                <img src="<?= $item['DETAIL_PICTURE']['SRC'] ?>" alt="<?= $item['NAME'] ?>"
                     loading="lazy">
            </div>
        </article>
        <?
    }
}

?>




