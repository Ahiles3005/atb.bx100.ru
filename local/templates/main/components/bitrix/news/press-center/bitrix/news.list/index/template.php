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
?>






<? if (!empty($arResult["ITEMS"])): ?>

    <section class="mc-news" id="mc-news">
        <div class="mc-news--div__CONT C-CONTAINER">

            <div class="mc-common--div__GRID">

                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
                    ?>

                    <article class="hm-pre--article__CARD __C-SCRL DOWN"
                             id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <a class="hm-pre--a__CARD" href="<?= $arItem["DETAIL_PAGE_URL"] ?>"></a>
                        <div class="hm-pre--div__CARD_IMAGE">
                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? AHILES3005_NO_IMAGE ?>" alt=""
                                 loading="lazy">
                        </div>
                        <a class="hm-pre--a__CARD_TAG1" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                            <?= $arItem["DISPLAY_PROPERTIES"]['PRESS_TYPE']['DISPLAY_VALUE'] ?>
                        </a>
                        <p class="hm-pre--p__CARD_NAME">
                            <?= $arItem["NAME"] ?>
                        </p>
                        <div class="hm-pre--div__CARD_BOTTOM">
                            <a class="hm-pre--a__CARD_TAG color-green" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                                <div class="hm-pre--div__CARD_TAG_CIRCLE"></div>
                                <span class="hm-pre--span__CARD_TAG">
                                    <?= $arItem["DISPLAY_PROPERTIES"]['TAG_KRASOTA']['DISPLAY_VALUE'] ?>
                                </span>
                            </a>
                            <span class="hm-pre--span__CARD_DATE">
                                <?= $arItem["DISPLAY_ACTIVE_FROM"] ?>
                            </span>
                        </div>
                    </article>
                <? endforeach; ?>


            </div>


            <div class="ct-cat--div__BOTTOM __C-SCRL DOWN">
                <div class="ct-cat--div__IND">
                    <p class="ct-cat--p__IND">
                        Вы посмотрели
                        <span class="ct-cat--span__IND1">2</span>
                        из
                        <span class="ct-cat--span__IND2">10</span>
                        товаров
                    </p>

                    <div class="ct-cat--div__LINE0">
                        <div class="ct-cat--div__LINE1" style="width: 20%;">

                        </div>
                    </div>
                </div>

                <button class="ct-cat--button__ELSE">
                        <span class="ct-cat--span__ELSE">
                            ПОКАЗАТЬ ЕЩЕ
                        </span>
                    <svg width="22" height="33" viewBox="0 0 22 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 0.5L11 33M11 33L0.5 22.5M11 33L21.5 22.5" stroke="#005792"
                              stroke-width="0.5"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>
<? endif ?>

