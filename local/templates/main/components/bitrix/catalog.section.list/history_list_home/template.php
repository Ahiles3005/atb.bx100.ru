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
    <section class="hm-hst">
        <div class="hm-hst--div__CONT C-CONTAINER">
            <div class="c-common--div__HEAD">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Истории успеха
                </h2>

                <a class="c-common--a__ALL __C-SCRL DOWN" href="#">
                    СМОТРЕТЬ ВСЕ
                </a>
            </div>


            <div class="hm-hst--div__BODY">
                <ul class="hm-hst--ul__MENU __C-SCRL LEFT">


                    <? foreach ($arResult["SECTIONS"] as $ksection => $arSection) : ?>
                        <?
                        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
                        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), ["CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')]);

                        ?>

                        <li class="hm-hst--li__MENU_ITEM" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
                            <button class="hm-hst--button__MENU_ITEM">
                        <span class="hm-hst--span__MENU_ITEM">
                            <?= $arSection['NAME'] ?>
                        </span>
                                <svg class="hm-hst--svg__MENU_ITEM" width="28" height="14" viewBox="0 0 28 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"/>
                                </svg>
                            </button>

                            <form class="hm-hst--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">


                                <? if (isset($arSection['childs']) && !empty($arSection['childs'])): ?>

                                    <? foreach ($arSection['childs'] as $k=> $childSection) : ?>
                                        <label class="hm-hst--label__SUBMENU" data-sectionid="<?=$childSection['ID']?>">
                                            <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                            <span class="hm-hst--span__SUBMENU"><?= $childSection['NAME'] ?></span>
                                            <a class="hm-hst--a__SUBMENU" href="<?= $childSection['SECTION_PAGE_URL'] ?>">Перейти в раздел</a>
                                        </label>
                                    <? endforeach; ?>

                                <? endif; ?>

                            </form>

                            <?if($ksection == count($arResult["SECTIONS"])-1):?>
                            <div class="hm-hst--div__SUBMENU_BACK"></div>
                            <?endif?>
                        </li>


                    <? endforeach; ?>
                    <div class="hm-hst--div__LINE"></div>
                </ul>


                <div class="hm-hst--div__MAIN">
                    <div class="hm-hst--div__LEFT"></div>
                    <div class="hm-hst--div__CONTENT" id="history-html">
                    </div>
                </div>
            </div>


        </div>
    </section>

<? endif; ?>


