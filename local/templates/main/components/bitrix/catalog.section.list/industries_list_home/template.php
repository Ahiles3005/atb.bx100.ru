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

$strTitle = "";
?>


<? if (isset($arResult["SECTIONS"]) && !empty($arResult["SECTIONS"])): ?>
    <section class="hm-ind">
        <div class="hm-ind--div__CONT C-CONTAINER">
            <div class="c-common--div__HEAD hm-ind--div__HEAD" role="button">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Отрасли
                </h2>

                <a class="c-common--a__ALL hm-ind--a__ALL __C-SCRL DOWN" href="#">
                    СМОТРЕТЬ ВСЕ
                </a>

                <svg class="hm-ind--svg__SUBMENU" width="28" height="14" viewBox="0 0 28 14" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"></path>
                </svg>

                <!-- <img class="hm-ind--img__ATOMS" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-ind_atoms.svg" alt="Молекула"> -->
            </div>
            <form class="c-common--form__SUBMENU hm-ind--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                <? foreach ($arResult["SECTIONS"] as $arSection) : ?>
                    <?
                    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
                    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), ["CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')]);

                    ?>
                    <label class="hm-ind--label__SUBMENU" id="<?=$this->GetEditAreaId($arSection['ID']);?>" data-sectionid="<?=$arSection['ID']?>">
                        <input class="hm-ind--input__SUBMENU" type="radio" name="1" value="">
                        <span class="hm-ind--span__SUBMENU">
                    <?= $arSection['NAME'] ?>
                </span>
                        <a class="hm-ind--a__SUBMENU" href="<?= $arSection['SECTION_PAGE_URL'] ?>">Перейти в раздел</a>
                    </label>
                <? endforeach; ?>
            </form>
            <div class="hm-ind--div__SUBMENU_BACK"></div>


            <div class="с-common--div__SECT_MAIN hm-ind--div__MAIN">
                <div class="с-common--div__SECT_LEFT hm-ind--div__LEFT"></div>


                <div class="с-common--div__SECT_CONTENT hm-ind--div__CONTENT" id="ind-html">



                </div>
            </div>
        </div>
    </section>
<? endif; ?>


