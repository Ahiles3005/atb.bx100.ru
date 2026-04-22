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
$filterName = $arResult["FILTER_NAME"] . '_pf';

$nameNAPRAVLENIE = $filterName . '[NAPRAVLENIE]';
$nameGOROD = $filterName . '[GOROD]';
$nameFORMAT_RABOTY = $filterName . '[FORMAT_RABOTY]';

$delete = $_REQUEST['del_filter'] ?? false;

if (!$delete) {
    $valueNAPRAVLENIE = $_REQUEST[$filterName]['NAPRAVLENIE'];
    $valueGOROD = $_REQUEST[$filterName]['GOROD'];
    $valueFORMAT_RABOTY = $_REQUEST[$filterName]['FORMAT_RABOTY'];
}


//var_dump($valueNAPRAVLENIE);
//var_dump($valueGOROD);
//var_dump($valueFORMAT_RABOTY);
//

?>


<form id="hrx-vac--form__FILTER" class="hrx-vac--form__FILTER" action="<? echo $arResult["FORM_ACTION"] ?>"
      method="get" name="<? echo $arResult["FILTER_NAME"] . "_form" ?>">
    <!--    <input type="hidden" name="set_filter" value="Y"/>&nbsp;-->
    <? /*foreach ($arResult["ITEMS"] as $arItem):
        if (array_key_exists("HIDDEN", $arItem)):
            echo $arItem["INPUT"];
        endif;
    endforeach; */ ?>

    <div class="hrx-vac--div__FILTER_BODY">

        <? foreach ($arResult["ITEMS"] as $arItem): ?>

            <?
            if (is_array($arItem["LIST"])) {
                $arItem["LIST"] = array_filter($arItem["LIST"], fn($k) => !empty($k), ARRAY_FILTER_USE_KEY);
            }
            ?>
            <? //=$arItem["INPUT"]?>
            <? if ($arItem['NAME'] == 'Направление'): ?>
                <fieldset class="hrx-vac--fieldset__SELECT _TYPE __C-SCRL DOWN">
                    <button class="hrx-vac--button__SELECT" type="button">


                        <? if (isset($arItem["LIST"][$valueNAPRAVLENIE])): ?>
                            <span class="hrx-vac--span__SELECT __hrx-vac--span__SELECT">
                                        <?= $arItem["LIST"][$valueNAPRAVLENIE] ?>
                                    </span>
                        <? else : ?>
                            <span class="hrx-vac--span__SELECT">
                                        Направление
                                    </span>
                        <? endif ?>


                        <svg class="hrx-vac--svg__SELECT" width="19" height="9" viewBox="0 0 19 9" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#005792" stroke-width="0.25"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>

                    <div class="hrx-vac--div__SELECT">
                        <? foreach ($arItem["LIST"] as $kList => $list): ?>

                            <label class="hrx-vac--label__SELECT _TYPE">
                                <?= $list ?>
                                <input class="hrx-vac--input__SELECT _TYPE" type="radio" name="<?= $nameNAPRAVLENIE ?>"
                                       value="<?= $kList ?>"
                                        <?= $valueNAPRAVLENIE == $kList ? 'checked' : '' ?>>
                            </label>
                        <? endforeach ?>
                    </div>
                </fieldset>
            <? endif ?>

            <? if ($arItem['NAME'] == 'Город'): ?>
                <fieldset class="hrx-vac--fieldset__SELECT _LOC __C-SCRL DOWN">
                    <button class="hrx-vac--button__SELECT" type="button">
                        <? if (isset($arItem["LIST"][$valueGOROD])): ?>
                            <span class="hrx-vac--span__SELECT __hrx-vac--span__SELECT">

                                        <?= $arItem["LIST"][$valueGOROD] ?>
                                    </span>
                        <? else : ?>
                            <span class="hrx-vac--span__SELECT">
                                        Город
                                    </span>
                        <? endif ?>


                        <svg class="hrx-vac--svg__SELECT" width="19" height="9" viewBox="0 0 19 9" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#005792" stroke-width="0.25"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>

                    <div class="hrx-vac--div__SELECT">
                        <? foreach ($arItem["LIST"] as $kList => $list): ?>

                            <label class="hrx-vac--label__SELECT _LOC">
                                <?= $list ?>
                                <input class="hrx-vac--input__SELECT _LOC" type="radio" name="<?= $nameGOROD ?>"
                                       value="<?= $kList ?>"
                                        <?= $valueGOROD == $kList ? 'checked' : '' ?>>
                            </label>
                        <? endforeach ?>
                    </div>
                </fieldset>
            <? endif ?>

            <? if ($arItem['NAME'] == 'Формат работы'): ?>
                <? $arItem["LIST"]['0'] = 'Любой' ?>

                <fieldset class="hrx-vac--fieldset__SELECT _TIMING __C-SCRL DOWN">
                    <button class="hrx-vac--button__SELECT" type="button">

                        <? if (isset($arItem["LIST"][$valueFORMAT_RABOTY])): ?>
                            <span class="hrx-vac--span__SELECT __hrx-vac--span__SELECT">
                                 <?= $arItem["LIST"][$valueFORMAT_RABOTY] ?>
                                  </span>
                        <? else : ?>
                            <span class="hrx-vac--span__SELECT">
                                        Формат работы
                                    </span>
                        <? endif ?>


                        <svg class="hrx-vac--svg__SELECT" width="19" height="9" viewBox="0 0 19 9" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#005792" stroke-width="0.25"
                                  stroke-linecap="round"></path>
                        </svg>
                    </button>

                    <div class="hrx-vac--div__SELECT">

                        <? foreach ($arItem["LIST"] as $kList => $list): ?>

                            <label class="hrx-vac--label__SELECT _TIMING">
                                <?= $list ?>
                                <input class="hrx-vac--input__SELECT _TIMING" type="radio"
                                       name="<?= $nameFORMAT_RABOTY ?>"
                                       value="<?= $kList ?>"
                                        <?= (strlen($valueFORMAT_RABOTY) > 0 && $valueFORMAT_RABOTY == $kList) ? 'checked' : '' ?>>
                            </label>
                        <? endforeach ?>
                    </div>
                </fieldset>
            <? endif ?>

        <? endforeach; ?>
    </div>


    <div class="hrx-vac--div__FILTER_BOTTOM">
        <button class="hrx-vac--button__FILTER_BOTTOM __C-SCRL DOWN" type="submit" name="set_filter" value="Y">
            <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.9101 18C16.7651 18 15.7972 17.6197 15.0064 16.8591C14.2159 16.0983 13.8206 15.1671 13.8206 14.0655C13.8206 12.9636 14.2159 12.0324 15.0064 11.2718C15.7972 10.511 16.7651 10.1306 17.9101 10.1306C19.0554 10.1306 20.0233 10.511 20.8138 11.2718C21.6046 12.0324 22 12.9636 22 14.0655C22 15.1671 21.6046 16.0983 20.8138 16.8591C20.0233 17.6197 19.0554 18 17.9101 18ZM17.9089 16.2362C18.5318 16.2362 19.0639 16.0244 19.5051 15.6009C19.9462 15.1772 20.1667 14.6658 20.1667 14.0666C20.1667 13.4673 19.9465 12.9554 19.5061 12.5309C19.0659 12.1066 18.5343 11.8945 17.9114 11.8945C17.2884 11.8945 16.7565 12.1063 16.3154 12.53C15.8744 12.9536 15.6539 13.465 15.6539 14.0643C15.6539 14.6636 15.874 15.1754 16.3142 15.5997C16.7546 16.024 17.2862 16.2362 17.9089 16.2362ZM1.83333 14.9474V13.1835H11.1412V14.9474H1.83333ZM4.08986 7.86938C2.94464 7.86938 1.97674 7.48898 1.18617 6.72817C0.395389 5.96756 0 5.03636 0 3.93454C0 2.83293 0.395389 1.90171 1.18617 1.14091C1.97674 0.380304 2.94464 0 4.08986 0C5.23488 0 6.20278 0.380304 6.99356 1.14091C7.78413 1.90171 8.17942 2.83293 8.17942 3.93454C8.17942 5.03636 7.78413 5.96756 6.99356 6.72817C6.20278 7.48898 5.23488 7.86938 4.08986 7.86938ZM4.08864 6.10554C4.71156 6.10554 5.24354 5.89368 5.68456 5.46996C6.12557 5.04645 6.34608 4.53503 6.34608 3.93572C6.34608 3.3364 6.12598 2.8246 5.68578 2.40029C5.24537 1.97599 4.71381 1.76384 4.09108 1.76384C3.46816 1.76384 2.93608 1.9756 2.49486 2.39912C2.05384 2.82283 1.83333 3.33425 1.83333 3.93337C1.83333 4.53268 2.05354 5.04459 2.49394 5.46908C2.93415 5.89339 3.46571 6.10554 4.08864 6.10554ZM10.8588 4.81646V3.05262H20.1667V4.81646H10.8588Z"
                      fill="#0C0C0C"/>
            </svg>
            <span>ПОКАЗАТЬ</span>
            <span class="ct-cat--span__FILTER_BOTTOM">20</span>
            <span>ВАКАНСИЙ</span>
        </button>
        <button class="hrx-vac--button__FILTER_RESET __C-SCRL DOWN" type="submit" name="del_filter" value="Y">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.391417 9.55059L0 9.15917L4.38388 4.77529L0 0.391417L0.391417 0L4.77529 4.38388L9.15917 0L9.55059 0.391417L5.16671 4.77529L9.55059 9.15917L9.15917 9.55059L4.77529 5.16671L0.391417 9.55059Z"
                      fill="#0C0C0C"></path>
            </svg>
            <span>Сбросить все фильтры</span>
        </button>
    </div>
</form>
