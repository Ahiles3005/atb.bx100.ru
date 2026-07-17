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

$class = $arParams['IS_AJAX'] == 'Y' ? '__mc-common--article__CARD' : '__C-SCRL';
?>


    <div class="mc-common--div__GRID">

        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
            ?>

            <article class="hm-pre--article__CARD <?= $class ?> DOWN"
                     id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <a class="hm-pre--a__CARD" href="<?= $arItem["DETAIL_PAGE_URL"] ?>"></a>
                <div class="hm-pre--div__CARD_IMAGE">
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? AHILES3005_NO_IMAGE ?>" alt=""
                         loading="lazy">
                </div>
                <a class="hm-pre--a__CARD_TAG1" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                    <?= $arItem["DISPLAY_PROPERTIES"]['PRESS_TYPE']['DISPLAY_VALUE'] ?>
                </a>
                <a class="hm-pre--p__CARD_NAME" href="<?= $item['DETAIL_PAGE_URL'] ?>">
                    <?= $arItem["NAME"] ?>
                </a>
                <div class="hm-pre--div__CARD_BOTTOM">
                    <? if (!empty($arItem["DISPLAY_PROPERTIES"]['TAG_KRASOTA']['DISPLAY_VALUE'])): ?>
                        <a class="hm-pre--a__CARD_TAG color-green" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                            <div class="hm-pre--div__CARD_TAG_CIRCLE"></div>
                            <span class="hm-pre--span__CARD_TAG">
                                    <?= $arItem["DISPLAY_PROPERTIES"]['TAG_KRASOTA']['DISPLAY_VALUE'] ?>
                                </span>
                        </a>
                    <? endif ?>

                    <span class="hm-pre--span__CARD_DATE">
                                <?= $arItem["DISPLAY_ACTIVE_FROM"] ?>
                            </span>
                </div>
            </article>
        <? endforeach; ?>


    </div>


<?= $arResult['NAV_STRING'] ?>