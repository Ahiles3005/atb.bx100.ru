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

use Bitrix\Iblock\SectionPropertyTable;

$this->setFrameMode(true);


?>


<div class="hm-cat--div__LEFT ct-cat--div__LEFT">
    <div class="ct-cat--div__FILTER_BACK">
        <form id="ct-cat--form__FILTER" class="ct-cat--form__FILTER __C-SCRL DOWN"
              action="<? echo $arResult["FORM_ACTION"] ?>" method="get"
              name="ct-cat-filter">
            <div class="ct-cat--div__FILTER_TOP">
                <p class="ct-cat--p__FILTER_TOP">
                    ФИЛЬТРЫ
                </p>
                <button class="ct-cat--button__FILTER_CLOSE" type="button">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="19.6727" height="1.50269" rx="0.751343"
                              transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)" fill="#005792"/>
                        <rect width="19.6727" height="1.50269" rx="0.751343"
                              transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)" fill="#005792"/>
                    </svg>
                </button>
            </div>

            <div class="ct-cat--div__FILTER_BODY">

                <?


                //not prices
                foreach ($arResult["ITEMS"] as $key => $arItem) {
                    if (empty($arItem["VALUES"]) || $arItem["CODE"] == 'PRICE_NEW') {
                        continue;
                    }

                    if (
                            $arItem["DISPLAY_TYPE"] === SectionPropertyTable::NUMBERS_WITH_SLIDER
                            && ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)
                    ) {
                        continue;
                    }
                    ?>


                    <?
                    $arCur = current($arItem["VALUES"]);
                    ?>


                    <div class="ct-cat--div__FILTER_ITEM" data-type="checbox all">
                        <button class="ct-cat--button__FILTER_ITEM_TOP" type="button">
                            <div class="ct-cat--div__FILTER_ITEM_TOP">
                                <p class="ct-cat--p__FILTER_ITEM_TOP">
                                    <?= $arItem["NAME"] ?>
                                </p>
                                <svg class="ct-cat--svg__FILTER_ITEM_POPUP_OPEN" role="button" width="14" height="14"
                                     viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.04144 11.023C7.18814 11.023 7.31178 10.9723 7.41236 10.8709C7.51293 10.7697 7.56322 10.6456 7.56322 10.4988C7.56322 10.3521 7.51253 10.2284 7.41115 10.1279C7.30991 10.0273 7.18586 9.97701 7.03902 9.97701C6.89232 9.97701 6.76868 10.0277 6.6681 10.1291C6.56753 10.2303 6.51724 10.3544 6.51724 10.5012C6.51724 10.6479 6.56793 10.7716 6.66931 10.8721C6.77056 10.9727 6.8946 11.023 7.04144 11.023ZM6.71839 8.48851H7.28161C7.30843 8.16667 7.37883 7.90182 7.49282 7.69397C7.6068 7.48611 7.81801 7.22797 8.12644 6.91954C8.48851 6.55747 8.75335 6.23899 8.92098 5.96408C9.0886 5.68918 9.17241 5.37518 9.17241 5.0221C9.17241 4.42307 8.96523 3.93918 8.55086 3.5704C8.13649 3.20163 7.64636 3.01724 7.08046 3.01724C6.55747 3.01724 6.10489 3.1614 5.7227 3.44971C5.34052 3.73803 5.05556 4.06322 4.86782 4.42529L5.43103 4.66667C5.57854 4.35824 5.77299 4.1001 6.01437 3.89224C6.25575 3.68439 6.5977 3.58046 7.04023 3.58046C7.59004 3.58046 7.98899 3.73132 8.23707 4.03305C8.48515 4.33477 8.6092 4.66667 8.6092 5.02874C8.6092 5.31035 8.53544 5.55843 8.38793 5.77299C8.24042 5.98755 8.04598 6.20881 7.8046 6.43678C7.37548 6.83908 7.08716 7.19444 6.93966 7.50287C6.79215 7.8113 6.71839 8.13985 6.71839 8.48851ZM7.00342 14C6.03562 14 5.12556 13.8164 4.27322 13.4491C3.42088 13.0818 2.67951 12.5832 2.04911 11.9535C1.41857 11.3238 0.919454 10.5833 0.551753 9.73221C0.183917 8.88095 0 7.97135 0 7.00342C0 6.03562 0.183649 5.12556 0.550948 4.27322C0.918247 3.42088 1.41676 2.67951 2.04649 2.04911C2.67623 1.41857 3.41666 0.919454 4.26779 0.551753C5.11905 0.183917 6.02865 0 6.99658 0C7.96438 0 8.87444 0.18365 9.72678 0.550949C10.5791 0.918247 11.3205 1.41676 11.9509 2.04649C12.5814 2.67623 13.0805 3.41666 13.4482 4.26779C13.8161 5.11905 14 6.02865 14 6.99658C14 7.96438 13.8164 8.87444 13.4491 9.72678C13.0818 10.5791 12.5832 11.3205 11.9535 11.9509C11.3238 12.5814 10.5833 13.0805 9.73221 13.4482C8.88095 13.8161 7.97135 14 7.00342 14ZM7 13.4368C8.79694 13.4368 10.319 12.8132 11.5661 11.5661C12.8132 10.319 13.4368 8.79694 13.4368 7C13.4368 5.20307 12.8132 3.68103 11.5661 2.43391C10.319 1.18678 8.79694 0.563218 7 0.563218C5.20307 0.563218 3.68103 1.18678 2.43391 2.43391C1.18678 3.68103 0.563218 5.20307 0.563218 7C0.563218 8.79694 1.18678 10.319 2.43391 11.5661C3.68103 12.8132 5.20307 13.4368 7 13.4368Z"
                                          fill="#828282"/>
                                </svg>
                                <div class="ct-cat--div__FILTER_ITEM_POPUP">
                                    <p class="ct-cat--p__FILTER_ITEM_POPUP">
                                        <?= '' ?> что то надо дописать
                                    </p>
                                    <svg class="ct-cat--svg__FILTER_ITEM_POPUP_CLOSE" role="button" width="10"
                                         height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.391385 9.5498L0 9.15842L4.38352 4.7749L0 0.391385L0.391385 0L4.7749 4.38352L9.15842 0L9.5498 0.391385L5.16629 4.7749L9.5498 9.15842L9.15842 9.5498L4.7749 5.16629L0.391385 9.5498Z"
                                              fill="#828282"/>
                                    </svg>
                                </div>
                            </div>

                            <svg class="ct-cat--svg__FILTER_ITEM_TOP" width="19" height="9" viewBox="0 0 19 9"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25"
                                      stroke-linecap="round"/>
                            </svg>
                        </button>

                        <fieldset class="ct-cat--fieldset__FILTER_ITEM_BODY">

                            <? foreach ($arItem["VALUES"] as $val => $ar): ?>

                                <label class="ct-cat--label__FILTER_ITEM">
                                    <input class="ct-cat--input__FILTER_ITEM" type="checkbox"
                                           value="<? echo $ar["HTML_VALUE"] ?>"
                                           name="<? echo $ar["CONTROL_NAME"] ?>"
                                           id="<? echo $ar["CONTROL_ID"] ?>"
                                            <? echo $ar["CHECKED"] ? 'checked="checked"' : '' ?>
                                    >
                                    <div class="ct-cat--div__FILTER_SQUARE">
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792"
                                                  stroke-linecap="round"/>
                                        </svg>
                                    </div>
                                    <span class="ct-cat--span__FILTER_ITEM">
                                                        <?= $ar["VALUE"]; ?>
                                                    </span>
                                </label>

                            <? endforeach; ?>


                        </fieldset>

                        <button class="ct-cat--button__FILTER_ITEM_ELSE _1" type="button">
                            <span>Показать еще</span>
                            <span class="ct-cat--span__FILTER_ITEM_ELSE"></span>
                            <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.125 0.125L5.125 4.83088L10.125 0.125" stroke="#0C0C0C" stroke-width="0.25"
                                      stroke-linecap="round"/>
                            </svg>
                        </button>

                        <button class="ct-cat--button__FILTER_ITEM_ELSE _2" type="button">
                            <span>Свернуть</span>
                            <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.125 5L5.125 0.294117L10.125 5" stroke="#0C0C0C" stroke-width="0.25"
                                      stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>

                    <?
                }
                ?>



                <?
                foreach ($arResult["ITEMS"] as $key => $arItem)//prices
                {
                    $key = $arItem["ENCODED_ID"];

                    if ($arItem["CODE"] == 'PRICE_NEW'):
                        if ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0) {
                            continue;
                        }


                        ?>

                        <div class="ct-cat--div__FILTER_ITEM" data-type="price">
                            <button class="ct-cat--button__FILTER_ITEM_TOP_R" type="button">
                                <div class="ct-cat--div__FILTER_ITEM_TOP">
                                    <p class="ct-cat--p__FILTER_ITEM_TOP">
                                        цена, ₽
                                    </p>
                                </div>

                                <svg class="ct-cat--svg__FILTER_ITEM_TOP_R" width="19" height="9" viewBox="0 0 19 9"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C"
                                          stroke-width="0.25" stroke-linecap="round"/>
                                </svg>
                            </button>

                            <fieldset class="ct-cat--fieldset__FILTER_ITEM_BODY_R">
                                <div class="ct-cat--div__FILTER_INPUT_R">
                                    <label class="ct-cat--label__FILTER_INPUT_R">
                                        <span class="ct-cat--span__FILTER_INPUT_R min">От</span>
                                        <input class="ct-cat--input__FILTER_INPUT_R min" type="number"
                                               name="<?= $arItem["VALUES"]["MIN"]["CONTROL_NAME"] ?>"
                                               id="<?= $arItem["VALUES"]["MIN"]["CONTROL_ID"] ?>"
                                               value="<?= intval($arItem["VALUES"]["MIN"]["VALUE"]) ?>">
                                    </label>
                                    <label class="ct-cat--label__FILTER_INPUT_R">
                                        <span class="ct-cat--span__FILTER_INPUT_R max">До</span>
                                        <input class="ct-cat--input__FILTER_INPUT_R max"
                                               type="number"
                                               name="<?= $arItem["VALUES"]["MAX"]["CONTROL_NAME"] ?>"
                                               id="<?= $arItem["VALUES"]["MAX"]["CONTROL_ID"] ?>"
                                               value="<?= intval($arItem["VALUES"]["MAX"]["VALUE"]) ?>"
                                        >
                                    </label>
                                </div>

                                <input class="ct-cat--input__FILTER_RANGE min" type="range" name="minprice"
                                       min="<?= $arItem["VALUES"]["MIN"]['VALUE'] ?>"
                                       max="<?= $arItem["VALUES"]["MAX"]['VALUE'] ?>"
                                       value="<?= intval($arItem["VALUES"]["MIN"]["HTML_VALUE"]) ?>">
                                <input class="ct-cat--input__FILTER_RANGE max" type="range" name="maxprice"
                                       min="<?= $arItem["VALUES"]["MIN"]['VALUE'] ?>"
                                       max="<?= $arItem["VALUES"]["MAX"]['VALUE'] ?>"
                                       value="<?= intval($arItem["VALUES"]["MAX"]["HTML_VALUE"]) ?>">
                            </fieldset>
                        </div>

                    <?endif;
                }
                ?>


                <div class="ct-cat--div__FILTER_ITEM" data-type="checbox">
                    <fieldset class="ct-cat--fieldset__DES">
                        <label class="ct-cat--label__DES">
                                                    <span class="ct-cat--span__DES">
                                                        Только в наличии
                                                    </span>
                            <div class="ct-cat--div__DES">
                                <div class="ct-cat--div__ROUND"></div>
                            </div>
                            <input class="ct-cat--input__DES" type="checkbox" name="design" value="">
                        </label>
                    </fieldset>
                    <fieldset class="ct-cat--fieldset__DES">
                        <label class="ct-cat--label__DES">
                                                    <span class="ct-cat--span__DES">
                                                        Без предоплаты
                                                    </span>
                            <div class="ct-cat--div__DES">
                                <div class="ct-cat--div__ROUND"></div>
                            </div>
                            <input class="ct-cat--input__DES" type="checkbox" name="design" value="">
                        </label>
                    </fieldset>
                </div>


            </div>


            <div class="ct-cat--div__FILTER_BOTTOM">
                <button class="ct-cat--button__FILTER_BOTTOM" type="submit">
                    <span>ПОКАЗАТЬ</span>
                    <span class="ct-cat--span__FILTER_BOTTOM">9</span>
                    <span>МОДЕЛЕЙ</span>
                </button>
                <button class="ct-cat--button__FILTER_RESET" type="reset">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.391417 9.55059L0 9.15917L4.38388 4.77529L0 0.391417L0.391417 0L4.77529 4.38388L9.15917 0L9.55059 0.391417L5.16671 4.77529L9.55059 9.15917L9.15917 9.55059L4.77529 5.16671L0.391417 9.55059Z"
                              fill="#0C0C0C"/>
                    </svg>
                    <span>Сбросить все фильтры</span>
                </button>
            </div>
        </form>
    </div>
</div>

