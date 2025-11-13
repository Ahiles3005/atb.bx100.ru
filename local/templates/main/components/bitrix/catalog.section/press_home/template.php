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
                                <?=$item['DISPLAY_PROPERTIES']['TAG_KRASOTA']['VALUE'] ?? ''?>
                            </span>
                </a>
                <span class="hm-pre--span__CARD_DATE">
                           <?= $item['DATE'] ?>

                        </span>
            </div>
        </article>

        <?
    }
}

?>




