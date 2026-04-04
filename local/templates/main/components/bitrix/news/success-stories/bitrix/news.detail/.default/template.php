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


<!-- ---------- ********** СЕКЦИЯ ADV ********** ---------- -->


<section class="in-adv">
    <div class="in-adv--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Преимущества
        </h2>


        <div class="in-adv--div__TEXT">
            <p class="st-main--p__DESCR1 __C-SCRL DOWN">

                <?= $arResult["DISPLAY_PROPERTIES"]['PREI_TEXT_1']['~VALUE']['TEXT'] ?>
            </p>
            <p class="st-main--p__DESCR2 __C-SCRL DOWN">

                <?= $arResult["DISPLAY_PROPERTIES"]['PREI_TEXT_1']['~VALUE']['TEXT'] ?>
            </p>
        </div>


        <div class="st-main--div__GRID2_CONT">
            <div class="st-main--div__GRID2">
                <? foreach ($arResult["PROPERTIES"]['ELEMENTY_PREIM']['DATA'] as $data): ?>
                    <div class="st-main--div__GRID2_ITEM __C-SCRL DOWN">
                        <button class="st-main--button__GRID2_ITEM_TOP">
                            <div class="st-main--div__GRID2_ITEM_IMAGE">
                                <img class="st-main--img__GRID2_ITEM_IMAGE"
                                     src="<?= $data['UF_ICON'] ?>" alt="" loading="lazy">

                            </div>
                            <p class="st-main--p__GRID2_ITEM_TOP">
                                <?= $data['UF_DESCRIPTION'] ?>
                            </p>
                            <svg class="st-main--svg__GRID2_ITEM_TOP" width="27" height="13" viewBox="0 0 27 13"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.0859375 0.0910645L13.0859 12.3264L26.0859 0.0910645" stroke="#0C0C0C"
                                      stroke-width="0.25"/>
                            </svg>
                        </button>
                        <p class="st-main--p__GRID2_ITEM_BODY">
                            <?= $data['UF_FULL_DESCRIPTION'] ?>
                        </p>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ TSK ********** ---------- -->


<section class="in-tsk">
    <div class="in-tsk--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Задачи
        </h2>






        <p class="st-main--p__DESCR1 __C-SCRL DOWN">
            <?= $arResult["DISPLAY_PROPERTIES"]['TASK_TEXT_1']['~VALUE']['TEXT'] ?>

        </p>

        <p class="st-main--p__DESCR2 __C-SCRL DOWN">
            <?= $arResult["DISPLAY_PROPERTIES"]['TASK_TEXT_2']['~VALUE']['TEXT'] ?>

        </p>

        <div class="st-main--div__DESCR3">
            <?= $arResult["DISPLAY_PROPERTIES"]['TASK_TEXT_3']['~VALUE']['TEXT'] ?>

        </div>


        <?= $arResult["DISPLAY_PROPERTIES"]['TASK_TEXT_4']['~VALUE']['TEXT'] ?>

    </div>
</section>


<!-- ---------- ********** СЕКЦИЯ DES ********** ---------- -->


<section class="in-des">
    <div class="in-des--div__CONT C-CONTAINER">
        <h2 class="c-common--h2 __C-SCRL RIGHT">
            Решение
        </h2>

        <?= $arResult["DISPLAY_PROPERTIES"]['SOLUTION_TEXT']['~VALUE']['TEXT'] ?>



        <h3 class="c-common--h3 __C-SCRL RIGHT">
            Продукты
        </h3>

        <p class="in-des--p__TOP1 __C-SCRL DOWN">
            Вас могут заинтересовать следующие товары:
        </p>




