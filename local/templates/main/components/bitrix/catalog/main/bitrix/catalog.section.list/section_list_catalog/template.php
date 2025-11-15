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

                <ul class="hm-cat--ul__MENU __C-SCRL LEFT">
                    <? foreach ($arResult["SECTIONS"] as $arSection) : ?>
                        <?
                        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
                        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), ["CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')]);
                        ?>

                        <li class="hm-cat--li__MENU_ITEM __C-SCRL DOWN" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
                            <button class="hm-cat--button__MENU_ITEM" data-href="<?=$arSection['SECTION_PAGE_URL']?>">
                                <div class="hm-cat--div__MENU_ITEM">
                                    <img src="<?= $arSection['RESIZE_PICTURE']['src'] ?>"
                                         alt="<?= $arSection['NAME'] ?>">
                                </div>
                                <span class="hm-cat--span__MENU_ITEM">
                                    <?= $arSection['~UF_NAME_MENU_HOME'] ?? $arSection['NAME'] ?>
                        </span>
                                <?= \Site\Template::showSvg('/local/templates/main/assets/<?=SITE_TEMPLATE_PATH?>/assets/images/svg/inline-svg-003.svg') ?>
                            </button>
                            <form class="hm-cat--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                            <? if (isset($arSection['childs']) && !empty($arSection['childs'])): ?>

                                    <? foreach ($arSection['childs'] as $childSection) : ?>
                                        <label class="hm-cat--label__SUBMENU" data-sectionid="<?=$childSection['ID']?>" data-href="<?=$childSection['SECTION_PAGE_URL']?>">
                                            <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="" >
                                            <span class="hm-cat--span__SUBMENU"><?= $childSection['NAME'] ?></span>
                                            <a class="hm-cat--a__SUBMENU"
                                               href="<?= $childSection['SECTION_PAGE_URL'] ?>">Перейти в раздел</a>
                                        </label>
                                    <? endforeach; ?>

                            <? endif; ?>
                            </form>
                        </li>

                    <? endforeach; ?>

                </ul>

<? endif; ?>


