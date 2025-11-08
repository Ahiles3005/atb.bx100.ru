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
     <section class="hm-pre">
        <div class="hm-pre--div__CONT C-CONTAINER">
            <div class="c-common--div__HEAD">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Пресс-центр
                </h2>

                <a class="c-common--a__ALL __C-SCRL DOWN" href="#">
                    СМОТРЕТЬ ВСЕ
                </a>
            </div>


            <div class="hm-pre--div__BODY">
                <form class="hm-pre--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                    <label class="hm-pre--label__SUBMENU1" data-sectionid="0">
                        <input class="hm-pre--input__SUBMENU" type="radio" name="1" value="">
                        <span class="hm-pre--span__SUBMENU hm-pre--span__SUBMENU1">
                       Все
                    </span>
                        <svg class="hm-pre--svg__SUBMENU" width="28" height="14" viewBox="0 0 28 14" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"/>
                        </svg>
                    </label>

                    <div class="hm-pre--div__FORM_BODY">

                        <? foreach ($arResult["SECTIONS"] as $arSection) : ?>
                            <label class="hm-pre--label__SUBMENU" role="button" data-sectionid="<?=$arSection['ID']?>">
                                <input class="hm-pre--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-pre--span__SUBMENU">
                             <?= $arSection['NAME'] ?>
                        </span>
                                <div class="hm-pre--div__TRI"></div>
                            </label>
                        <? endforeach; ?>

                    </div>

                    <div class="hm-pre--div__LINE"></div>
                </form>


                <div class="hm-pre--div__CONTENT" id="press_html">

                </div>
            </div>


        </div>
    </section>
<? endif; ?>


