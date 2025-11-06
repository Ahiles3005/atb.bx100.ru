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
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>


<!-- ---------- ********** СЕКЦИЯ HERO ********** ---------- -->
<section class="hm-hero">
    <div class="hm-hero--div__SWIPER swiper">
        <div class="hm-hero--div__SWIPER_WRAPPER swiper-wrapper">
            <div class="hm-hero--div__SWIPER_SLIDE swiper-slide">
                <div class="hm-hero--div__SWIPER_CONT C-CONTAINER">
                    <div class="hm-hero--div__IMAGE __hm-hero--div__IMAGE">
                        <img class="hm-hero--img__MAIN" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_1.png" alt="" loading="lazy">
                        <img class="hm-hero--img__CIRCLE1" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_circle1.svg" alt="Вращающийся круг №1">
                        <img class="hm-hero--img__CIRCLE2" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_circle2.svg" alt="Вращающийся круг №2">
                    </div>

                    <div class="hm-hero--div__TEXT">
                        <h1 class="hm-hero--h1">
                            АТБ Электроника – российский разработчик
                            и производитель устройств для автоматизации
                            процессов и информационной безопасности
                        </h1>

                        <div class="hm-hero--div__COUNTS">
                            <div class="hm-hero--div__COUNT">
                                <span class="hm-hero--span__COUNT" data-finl="100">
                                    0 +
                                </span>
                                <div class="c-common--div__LINE1">
                                    <div class="c-common--div__LINE11"></div>
                                </div>
                                <p class="hm-hero--p__COUNT">
                                    различных устройств собственной разработки
                                </p>
                            </div>

                            <div class="hm-hero--div__COUNT">
                                <span class="hm-hero--span__COUNT" data-finl="2000000">
                                    0 +
                                </span>
                                <div class="c-common--div__LINE1">
                                    <div class="c-common--div__LINE11"></div>
                                </div>
                                <p class="hm-hero--p__COUNT">
                                    различных устройств собственной разработки
                                </p>
                            </div>
                        </div>

                        <a class="hm-hero--a__TOCHAPTER" href="#">
                            ПЕРЕЙТИ В РАЗДЕЛ
                        </a>
                    </div>
                </div>
            </div>

            <div class="hm-hero--div__SWIPER_SLIDE swiper-slide">
                <div class="hm-hero--div__SWIPER_CONT C-CONTAINER">
                    <div class="hm-hero--div__IMAGE __hm-hero--div__IMAGE">
                        <img class="hm-hero--img__MAIN" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_21.png" alt="" loading="lazy">
                        <img class="hm-hero--img__CIRCLE1" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_circle1.svg" alt="Вращающийся круг №1">
                        <img class="hm-hero--img__CIRCLE2" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_circle2.svg" alt="Вращающийся круг №2">
                    </div>

                    <div class="hm-hero--div__TEXT">
                        <p class="hm-hero--h1">
                            Полный цикл высокотехнологичного производства электронной продукции
                        </p>

                        <div class="hm-hero--div__COUNTS">
                            <div class="hm-hero--div__COUNT">
                                <span class="hm-hero--span__COUNT" data-finl="20">
                                    0 +
                                </span>
                                <div class="c-common--div__LINE1">
                                    <div class="c-common--div__LINE11"></div>
                                </div>
                                <p class="hm-hero--p__COUNT">
                                    лет экспертизы в производстве промышленной электроники
                                </p>
                            </div>

                            <div class="hm-hero--div__COUNT">
                                <span class="hm-hero--span__COUNT" data-finl="4500">
                                    0 +
                                </span>
                                <div class="c-common--div__LINE1">
                                    <div class="c-common--div__LINE11"></div>
                                </div>
                                <p class="hm-hero--p__COUNT">
                                    м2 - площадь производства полного цикла и R&D центра
                                </p>
                            </div>
                        </div>

                        <a class="hm-hero--a__TOCHAPTER" href="#">
                            ПЕРЕЙТИ В РАЗДЕЛ
                        </a>
                    </div>
                </div>
            </div>

            <div class="hm-hero--div__SWIPER_SLIDE swiper-slide">
                <div class="hm-hero--div__SWIPER_CONT C-CONTAINER">
                    <div class="hm-hero--div__IMAGE __hm-hero--div__IMAGE">
                        <img class="hm-hero--img__MAIN" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_31.png" alt="" loading="lazy">
                        <img class="hm-hero--img__CIRCLE1" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_circle1.svg" alt="Вращающийся круг №1">
                        <img class="hm-hero--img__CIRCLE2" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_circle2.svg" alt="Вращающийся круг №2">
                    </div>

                    <div class="hm-hero--div__TEXT">
                        <p class="hm-hero--h1">
                            Аппаратные платформы &#171;АТБ Электроника&#187; применяются в составе ДПАК на объектах КИИ РФ
                        </p>

                        <div class="hm-hero--div__COUNTS">
                            <div class="hm-hero--div__COUNT">
                                <span class="hm-hero--span__COUNT" data-finl="4">
                                    0+
                                </span>
                                <div class="c-common--div__LINE1">
                                    <div class="c-common--div__LINE11"></div>
                                </div>
                                <p class="hm-hero--p__COUNT">
                                    современные производственные линии с SMD - монтажом
                                </p>
                            </div>

                            <div class="hm-hero--div__COUNT">
                                <span class="hm-hero--span__COUNT" data-finl="300000">
                                    0+
                                </span>
                                <div class="c-common--div__LINE1">
                                    <div class="c-common--div__LINE11"></div>
                                </div>
                                <p class="hm-hero--p__COUNT">
                                    компонентов в час - максимальная производительность линий
                                </p>
                            </div>
                        </div>

                        <a class="hm-hero--a__TOCHAPTER" href="#">
                            ПЕРЕЙТИ В РАЗДЕЛ
                        </a>
                    </div>
                </div>
            </div>

            <div class="hm-hero--div__SWIPER_SLIDE swiper-slide">
                <div class="hm-hero--div__SWIPER_CONT C-CONTAINER">
                    <div class="hm-hero--div__IMAGE __hm-hero--div__IMAGE">
                        <img class="hm-hero--img__MAIN" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_41.png" alt="" loading="lazy">
                        <img class="hm-hero--img__CIRCLE1" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_circle1.svg" alt="Вращающийся круг №1">
                        <img class="hm-hero--img__CIRCLE2" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_circle2.svg" alt="Вращающийся круг №2">
                    </div>

                    <div class="hm-hero--div__TEXT">
                        <p class="hm-hero--h1">
                            Разработчик и производитель устройств для АСУ ТП, сетевой безопасности, IIOT и вычислительных систем
                        </p>

                        <div class="hm-hero--div__COUNTS">
                            <div class="hm-hero--div__COUNT">
                                <span class="hm-hero--span__COUNT" data-finl="20000">
                                    0+
                                </span>
                                <div class="c-common--div__LINE1">
                                    <div class="c-common--div__LINE11"></div>
                                </div>
                                <p class="hm-hero--p__COUNT">
                                    реализованных проектов для ведущих российских компаний
                                </p>
                            </div>

                            <div class="hm-hero--div__COUNT">
                                <span class="hm-hero--span__COUNT" data-finl="2000000">
                                    0+
                                </span>
                                <div class="c-common--div__LINE1">
                                    <div class="c-common--div__LINE11"></div>
                                </div>
                                <p class="hm-hero--p__COUNT">
                                    изделий произведено и поставлено заказчикам
                                </p>
                            </div>
                        </div>

                        <a class="hm-hero--a__TOCHAPTER" href="#">
                            ПЕРЕЙТИ В РАЗДЕЛ
                        </a>
                    </div>
                </div>
            </div>

            <div class="hm-hero--div__SWIPER_SLIDE swiper-slide">
                <div class="hm-hero--div__SWIPER_CONT C-CONTAINER">
                    <div class="hm-hero--div__IMAGE __hm-hero--div__IMAGE">
                        <img class="hm-hero--img__MAIN" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_51.png" alt="" loading="lazy">
                        <img class="hm-hero--img__CIRCLE1" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_circle1.svg" alt="Вращающийся круг №1">
                        <img class="hm-hero--img__CIRCLE2" src="<?=SITE_TEMPLATE_PATH?>/assets/images/home/hm-hero_circle2.svg" alt="Вращающийся круг №2">
                    </div>

                    <div class="hm-hero--div__TEXT">
                        <p class="hm-hero--h1">
                            Оборудование &#171;АТБ Электроника&#187; находится в реестре Российской продукции - 2 уровень локализации
                        </p>

                        <div class="hm-hero--div__COUNTS">
                            <div class="hm-hero--div__COUNT">
                                <span class="hm-hero--span__COUNT" data-finl="80">
                                    0+
                                </span>
                                <div class="c-common--div__LINE1">
                                    <div class="c-common--div__LINE11"></div>
                                </div>
                                <p class="hm-hero--p__COUNT">
                                    компетентных инженеров в команде разработки
                                </p>
                            </div>

                            <div class="hm-hero--div__COUNT">
                                <span class="hm-hero--span__COUNT" data-finl="100">
                                    0+
                                </span>
                                <div class="c-common--div__LINE1">
                                    <div class="c-common--div__LINE11"></div>
                                </div>
                                <p class="hm-hero--p__COUNT">
                                    устройств собственной разработки в портфеле продуктов
                                </p>
                            </div>
                        </div>

                        <a class="hm-hero--a__TOCHAPTER" href="#">
                            ПЕРЕЙТИ В РАЗДЕЛ
                        </a>
                    </div>
                </div>
            </div>
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
