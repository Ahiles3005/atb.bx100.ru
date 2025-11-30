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


    <? foreach ($arResult["SECTIONS"] as $arSection) : ?>
        <?
        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), ["CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')]);
        ?>

        <form class="hm-cat--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
            <? if (isset($arSection['childs']) && !empty($arSection['childs'])): ?>
                <? foreach ($arSection['childs'] as $childSection) : ?>
                    <label class="hm-cat--label__SUBMENU" data-sectionid="<?= $childSection['ID'] ?>"
                           data-href="<?= $childSection['SECTION_PAGE_URL'] ?>"
                           data-elementcount="<?= (int)$childSection['ELEMENT_CNT'] ?>">
                        <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                        <span class="hm-cat--span__SUBMENU"><?= $childSection['NAME'] ?></span>
                        <a class="hm-cat--a__SUBMENU" href="<?= $childSection['SECTION_PAGE_URL'] ?>">Перейти в
                            раздел</a>
                    </label>
                <? endforeach; ?>

            <? endif; ?>
        </form>
    <? endforeach; ?>
<? endif; ?>




