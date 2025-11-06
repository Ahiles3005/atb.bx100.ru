<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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


<?php if(isset($arResult["ITEMS"]) && !empty($arResult["ITEMS"])):?>

    <section class="hm-hero">
        <div class="hm-hero--div__SWIPER swiper">
            <div class="hm-hero--div__SWIPER_WRAPPER swiper-wrapper">

                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>

                    <div class="hm-hero--div__SWIPER_SLIDE swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="hm-hero--div__SWIPER_CONT C-CONTAINER">
                            <div class="hm-hero--div__IMAGE __hm-hero--div__IMAGE">
                                <img class="hm-hero--img__MAIN" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" loading="lazy">
                                <img class="hm-hero--img__CIRCLE1" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_circle1.svg" alt="Вращающийся круг №1">
                                <img class="hm-hero--img__CIRCLE2" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_circle2.svg" alt="Вращающийся круг №2">
                            </div>

                            <div class="hm-hero--div__TEXT">
                                <h1 class="hm-hero--h1">
                                    <?=$arItem["TITLE"]?>
                                </h1>

                                <div class="hm-hero--div__COUNTS">
                                    <div class="hm-hero--div__COUNT">
                                <span class="hm-hero--span__COUNT" data-finl="<?=$arItem["DISPLAY_PROPERTIES"]['NUMBER_1']['VALUE']?>">
                                    <?=$arItem["DISPLAY_PROPERTIES"]['NUMBER_1']['VALUE']?> +
                                </span>
                                        <div class="c-common--div__LINE1">
                                            <div class="c-common--div__LINE11"></div>
                                        </div>
                                        <p class="hm-hero--p__COUNT">
                                            <?=$arItem["DISPLAY_PROPERTIES"]['TEXT_1']['VALUE']?>
                                        </p>
                                    </div>

                                    <div class="hm-hero--div__COUNT">
                                <span class="hm-hero--span__COUNT" data-finl="<?=$arItem["DISPLAY_PROPERTIES"]['NUMBER_2']['VALUE']?>">
                                    <?=$arItem["DISPLAY_PROPERTIES"]['NUMBER_2']['VALUE']?> +
                                </span>
                                        <div class="c-common--div__LINE1">
                                            <div class="c-common--div__LINE11"></div>
                                        </div>
                                        <p class="hm-hero--p__COUNT">
                                            <?=$arItem["DISPLAY_PROPERTIES"]['TEXT_2']['VALUE']?>
                                        </p>
                                    </div>
                                </div>

                                <a class="hm-hero--a__TOCHAPTER" href="<?=$arItem["DISPLAY_PROPERTIES"]['URL']['VALUE']?>">
                                    ПЕРЕЙТИ В РАЗДЕЛ
                                </a>
                            </div>
                        </div>
                    </div>
                <?endforeach;?>

            </div>

            <button class="hm-hero--button__NEXT">
                <?= \Site\Template::showSvg('/assets/images/svg/next.svg') ?>
            </button>
            <button class="hm-hero--button__PREV">
                <?= \Site\Template::showSvg('/assets/images/svg/prev.svg') ?>
            </button>

            <div class="hm-hero--div__SWIPER_PAGINATION swiper-pagination"></div>
        </div>
    </section>


<?php endif?>

