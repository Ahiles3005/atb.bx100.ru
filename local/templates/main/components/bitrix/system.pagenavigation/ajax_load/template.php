<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>



<? if ($arResult["NavPageCount"] > 1): ?>

    <? if ($arResult["NavPageNomer"] + 1 <= $arResult["nEndPage"]): ?>
        <?
        $plus = $arResult["NavPageNomer"] + 1;
        $pageUrl = "PAGEN_" . $arResult["NavNum"] . "=" . $plus;

        ?>

        <div class="ct-cat--div__BOTTOM __C-SCRL DOWN">
            <div class="ct-cat--div__IND">
                <p class="ct-cat--p__IND">
                    Вы посмотрели
                    <span class="ct-cat--span__IND1">0</span>
                    из
                    <span class="ct-cat--span__IND2"><?= $arResult['NavRecordCount'] ?></span>
                    товаров
                </p>

                <div class="ct-cat--div__LINE0">
                    <div class="ct-cat--div__LINE1" style="width: 20%;">

                    </div>
                </div>
            </div>

            <button class="ct-cat--button__ELSE ahiles3005_load_more" data-url="<?= $pageUrl ?>">
                        <span class="ct-cat--span__ELSE">
                            ПОКАЗАТЬ ЕЩЕ
                        </span>
                <svg width="22" height="33" viewBox="0 0 22 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 0.5L11 33M11 33L0.5 22.5M11 33L21.5 22.5" stroke="#005792"
                          stroke-width="0.5"></path>
                </svg>
            </button>
        </div>
    <? endif ?>


<? endif ?>


