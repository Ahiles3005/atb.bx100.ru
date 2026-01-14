<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

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


$sectionListParams = array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"CACHE_TYPE" => $arParams["CACHE_TYPE"],
	"CACHE_TIME" => $arParams["CACHE_TIME"],
	"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
	"COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
	"TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
	"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
	"VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
	"SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
	"HIDE_SECTION_NAME" => ($arParams["SECTIONS_HIDE_SECTION_NAME"] ?? "N"),
	"ADD_SECTIONS_CHAIN" => ($arParams["ADD_SECTIONS_CHAIN"] ?? '')
);
if ($sectionListParams["COUNT_ELEMENTS"] === "Y")
{
	$sectionListParams["COUNT_ELEMENTS_FILTER"] = "CNT_ACTIVE";
	if ($arParams["HIDE_NOT_AVAILABLE"] == "Y")
	{
		$sectionListParams["COUNT_ELEMENTS_FILTER"] = "CNT_AVAILABLE";
	}
}

if ($arParams["USE_COMPARE"] === "Y")
{
	$APPLICATION->IncludeComponent(
		"bitrix:catalog.compare.list",
		"",
		array(
			"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			"IBLOCK_ID" => $arParams["IBLOCK_ID"],
			"NAME" => $arParams["COMPARE_NAME"],
			"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
			"COMPARE_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["compare"],
			"ACTION_VARIABLE" => (!empty($arParams["ACTION_VARIABLE"]) ? $arParams["ACTION_VARIABLE"] : "action"),
			"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
			'POSITION_FIXED' => $arParams['COMPARE_POSITION_FIXED'] ?? '',
			'POSITION' => $arParams['COMPARE_POSITION'] ?? ''
		),
		$component,
		array("HIDE_ICONS" => "Y")
	);
}


?>

<!-- ---------- ********** СЕКЦИЯ CAT ********** ---------- -->


<?php
/*
 TODO
   - 2) при выводе подразделов  указывать активный раздел
   - 3) подгрузку элементов для активного раздела с изменение ссылки в поисковой строке
    4) подгрузка доп элементов раздела
    5) напишите нам
    6) фильтр
    7) облако тегов


*/


?>

<section class="hm-cat ct-cat">
    <div class="hm-cat--div__CONT C-CONTAINER">

        <?$APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                ".default",
                Array(
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                )
        );?>


        <h2 class="ct-cat--h2 c-common--h2 __C-SCRL RIGHT">
            <?php $APPLICATION->ShowTitle(false); ?>
        </h2>


        <div class="hm-cat--div__BODY">

            <?
            $sectionListParams['HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS'] = 'Y';
            $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "section_list_catalog",
                    $sectionListParams,
                    $component
            );
            unset($sectionListParams);
            ?>

<!--            облако тегов start-->
            <ul class="ct-cat--ul__TAGS __C-SCRL DOWN">
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        Дрели-шуруповерты аккумуляторные
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        Италия
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        Масляные
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        4 кВт
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        10 кВт
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        Деревянные
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        Россия
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        С осушителем
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        С прямым приводом
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        Масляные
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        кВт
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        10 кВт
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        Деревянные
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        Россия
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        С осуш
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        С
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        Сп
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        Масляные
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        4 кВт
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        10 кВт
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        Деревянные
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        Россия
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        С осушителем
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        С прямым приводом
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        С осушителем
                    </a>
                </li>
                <li class="ct-cat--li__TAGS">
                    <a class="ct-cat--a__TAGS" href="#">
                        С прямым приводом
                    </a>
                </li>
            </ul>

            <!--            облако тегов  end-->


            <div class="hm-cat--div__MAIN">

                <!--                список подразделов старт-->
                <? include($_SERVER["DOCUMENT_ROOT"] . "/" . $this->GetFolder() . "/filter.php"); ?>
                <!--                список подразделов энд-->

                <div class="ct-cat--div__CONTENT0">
                    <div class="ct-cat--div__BUTTONS __C-SCRL DOWN">
                        <form class="ct-cat--form__SELECT" action="#" method="post" name="ct-cat-sort">
                            <button class="ct-cat--button__SELECT" type="button">
                                <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.2501 16.6844L11.5 10.9344L11.9441 10.4903L16.9228 15.469V0.392578H17.5773V15.4456L22.556 10.4669L23.0001 10.9344L17.2501 16.6844Z" fill="#0C0C0C"/>
                                    <path d="M5.75007 0.00111198L0 5.75118L0.444111 6.19529L5.42283 1.21657V16.293H6.07731V1.23995L11.056 6.21866L11.5001 5.75118L5.75007 0.00111198Z" fill="#0C0C0C"/>
                                </svg>
                                <span class="ct-cat--span__SELECT">Сортировка</span>
                            </button>


                            <div class="ct-cat--div__SELECT">
                                <label class="ct-cat--label__SELECT">
                                    По умолчанию
                                    <input class="ct-cat--input__SELECT" type="radio" name="sort" value="default">
                                </label>
                                <label class="ct-cat--label__SELECT">
                                    По популярности
                                    <input class="ct-cat--input__SELECT" type="radio" name="sort" value="popular">
                                </label>
                                <label class="ct-cat--label__SELECT">
                                    По возрастанию цены
                                    <input class="ct-cat--input__SELECT" type="radio" name="sort" value="price-up">
                                </label>
                                <label class="ct-cat--label__SELECT">
                                    По убыванию цены
                                    <input class="ct-cat--input__SELECT" type="radio" name="sort" value="price-down">
                                </label>
                                <label class="ct-cat--label__SELECT">
                                    По наличию
                                    <input class="ct-cat--input__SELECT" type="radio" name="sort" value="is-there">
                                </label>
                                <label class="ct-cat--label__SELECT">
                                    По новизне
                                    <input class="ct-cat--input__SELECT" type="radio" name="sort" value="new">
                                </label>
                            </div>
                        </form>


                        <button class="ct-cat--button__FILTER">
                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5426 17.1584C16.5745 17.1584 15.7563 16.8242 15.0879 16.1558C14.4195 15.4874 14.0853 14.6692 14.0853 13.7011C14.0853 12.7331 14.4195 11.9149 15.0879 11.2464C15.7563 10.578 16.5745 10.2438 17.5426 10.2438C18.5106 10.2438 19.3288 10.578 19.9972 11.2464C20.6656 11.9149 20.9998 12.7331 20.9998 13.7011C20.9998 14.6692 20.6656 15.4874 19.9972 16.1558C19.3288 16.8242 18.5106 17.1584 17.5426 17.1584ZM17.5394 16.2621C18.2458 16.2621 18.8497 16.0124 19.3512 15.513C19.8527 15.0136 20.1035 14.4107 20.1035 13.7043C20.1035 12.9979 19.8538 12.394 19.3544 11.8924C18.855 11.3909 18.2521 11.1402 17.5458 11.1402C16.8394 11.1402 16.2354 11.3899 15.7339 11.8892C15.2324 12.3886 14.9816 12.9915 14.9816 13.6979C14.9816 14.4043 15.2313 15.0083 15.7307 15.5098C16.2301 16.0113 16.833 16.2621 17.5394 16.2621ZM1.92072 14.1493V13.253H10.8841V14.1493H1.92072ZM3.45729 6.91458C2.48925 6.91458 1.67102 6.58038 1.00261 5.91197C0.334205 5.24356 0 4.42533 0 3.45729C0 2.48925 0.334205 1.67102 1.00261 1.00261C1.67102 0.334205 2.48925 0 3.45729 0C4.42533 0 5.24356 0.334205 5.91197 1.00261C6.58038 1.67102 6.91458 2.48925 6.91458 3.45729C6.91458 4.42533 6.58038 5.24356 5.91197 5.91197C5.24356 6.58038 4.42533 6.91458 3.45729 6.91458ZM3.45409 6.01825C4.16049 6.01825 4.76445 5.76855 5.26597 5.26917C5.76749 4.76978 6.01825 4.16689 6.01825 3.46049C6.01825 2.7541 5.76855 2.15014 5.26917 1.64862C4.76978 1.1471 4.16689 0.896335 3.46049 0.896335C2.7541 0.896335 2.15014 1.14603 1.64862 1.64542C1.1471 2.1448 0.896335 2.74769 0.896335 3.45409C0.896335 4.16049 1.14603 4.76445 1.64541 5.26597C2.1448 5.76749 2.74769 6.01825 3.45409 6.01825ZM10.1158 3.90546V3.00912H19.0791V3.90546H10.1158Z" fill="#0C0C0C"/>
                            </svg>
                            <span class="ct-cat--span__FILTER">
                                        Фильтры
                                    </span>
                        </button>


                        <div class="ct-cat--div__VIEWS">
                            <button class="ct-cat--button__VIEWS _STR">
                                <svg width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.2625 21.3354C8.95644 21.3354 8.70833 21.0873 8.70833 20.7812C8.70833 20.4752 8.95644 20.2271 9.2625 20.2271H23.8292C24.1352 20.2271 24.3833 20.4752 24.3833 20.7812C24.3833 21.0873 24.1352 21.3354 23.8292 21.3354H9.2625ZM9.2625 11.8354C8.95644 11.8354 8.70833 11.5873 8.70833 11.2812C8.70833 10.9752 8.95644 10.7271 9.2625 10.7271H23.8292C24.1352 10.7271 24.3833 10.9752 24.3833 11.2812C24.3833 11.5873 24.1352 11.8354 23.8292 11.8354H9.2625ZM9.2625 2.33542C8.95644 2.33542 8.70833 2.08731 8.70833 1.78125C8.70833 1.47519 8.95644 1.22708 9.2625 1.22708H23.8292C24.1352 1.22708 24.3833 1.47519 24.3833 1.78125C24.3833 2.08731 24.1352 2.33542 23.8292 2.33542H9.2625ZM1.78125 22.5625C1.29147 22.5625 0.872153 22.3881 0.523292 22.0392C0.174431 21.6903 0 21.271 0 20.7812C0 20.2915 0.174431 19.8722 0.523292 19.5233C0.872153 19.1744 1.29147 19 1.78125 19C2.27103 19 2.69035 19.1744 3.03921 19.5233C3.38807 19.8722 3.5625 20.2915 3.5625 20.7812C3.5625 21.271 3.38807 21.6903 3.03921 22.0392C2.69035 22.3881 2.27103 22.5625 1.78125 22.5625ZM1.78125 13.0625C1.29147 13.0625 0.872153 12.8881 0.523292 12.5392C0.174431 12.1903 0 11.771 0 11.2812C0 10.7915 0.174431 10.3722 0.523292 10.0233C0.872153 9.67443 1.29147 9.5 1.78125 9.5C2.27103 9.5 2.69035 9.67443 3.03921 10.0233C3.38807 10.3722 3.5625 10.7915 3.5625 11.2812C3.5625 11.771 3.38807 12.1903 3.03921 12.5392C2.69035 12.8881 2.27103 13.0625 1.78125 13.0625ZM1.78125 3.5625C1.29147 3.5625 0.872153 3.38807 0.523292 3.03921C0.174431 2.69035 0 2.27103 0 1.78125C0 1.29147 0.174431 0.872151 0.523292 0.52329C0.872153 0.174429 1.29147 0 1.78125 0C2.27103 0 2.69035 0.174429 3.03921 0.52329C3.38807 0.872151 3.5625 1.29147 3.5625 1.78125C3.5625 2.27103 3.38807 2.69035 3.03921 3.03921C2.69035 3.38807 2.27103 3.5625 1.78125 3.5625Z" fill="#0C0C0C"/>
                                </svg>
                            </button>
                            <button class="ct-cat--button__VIEWS _GRD">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.6083C0.89543 10.6083 0 9.7129 0 8.60833V2C0 0.89543 0.895431 0 2 0H8.60833C9.7129 0 10.6083 0.895431 10.6083 2V8.60833C10.6083 9.7129 9.7129 10.6083 8.60833 10.6083H2ZM2 24.3833C0.89543 24.3833 0 23.4879 0 22.3833V15.775C0 14.6704 0.895431 13.775 2 13.775H8.60833C9.7129 13.775 10.6083 14.6704 10.6083 15.775V22.3833C10.6083 23.4879 9.7129 24.3833 8.60833 24.3833H2ZM15.775 10.6083C14.6704 10.6083 13.775 9.7129 13.775 8.60833V2C13.775 0.89543 14.6704 0 15.775 0H22.3833C23.4879 0 24.3833 0.895431 24.3833 2V8.60833C24.3833 9.7129 23.4879 10.6083 22.3833 10.6083H15.775ZM15.775 24.3833C14.6704 24.3833 13.775 23.4879 13.775 22.3833V15.775C13.775 14.6704 14.6704 13.775 15.775 13.775H22.3833C23.4879 13.775 24.3833 14.6704 24.3833 15.775V22.3833C24.3833 23.4879 23.4879 24.3833 22.3833 24.3833H15.775ZM1.10833 8.5C1.10833 9.05229 1.55605 9.5 2.10833 9.5H8.5C9.05229 9.5 9.5 9.05229 9.5 8.5V2.10833C9.5 1.55605 9.05229 1.10833 8.5 1.10833H2.10833C1.55605 1.10833 1.10833 1.55605 1.10833 2.10833V8.5ZM14.8833 8.5C14.8833 9.05229 15.3311 9.5 15.8833 9.5H22.275C22.8273 9.5 23.275 9.05229 23.275 8.5V2.10833C23.275 1.55605 22.8273 1.10833 22.275 1.10833H15.8833C15.3311 1.10833 14.8833 1.55605 14.8833 2.10833V8.5ZM14.8833 22.275C14.8833 22.8273 15.3311 23.275 15.8833 23.275H22.275C22.8273 23.275 23.275 22.8273 23.275 22.275V15.8833C23.275 15.3311 22.8273 14.8833 22.275 14.8833H15.8833C15.3311 14.8833 14.8833 15.3311 14.8833 15.8833V22.275ZM1.10833 22.275C1.10833 22.8273 1.55605 23.275 2.10833 23.275H8.5C9.05229 23.275 9.5 22.8273 9.5 22.275V15.8833C9.5 15.3311 9.05229 14.8833 8.5 14.8833H2.10833C1.55605 14.8833 1.10833 15.3311 1.10833 15.8833V22.275Z" fill="#0C0C0C"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="ct-cat--div__CONTENT _STR" id="products-html">

                    </div>
                    <div class="ct-cat--div__BOTTOM __C-SCRL DOWN">
                        <div class="ct-cat--div__IND">
                            <p class="ct-cat--p__IND">
                                Вы посмотрели
                                <span class="ct-cat--span__IND1">0</span>
                                из
                                <span class="ct-cat--span__IND2">0</span>
                                товаров
                            </p>

                            <div class="ct-cat--div__LINE0">
                                <div class="ct-cat--div__LINE1" style="width: 20%;">

                                </div>
                            </div>
                        </div>

                        <button class="ct-cat--button__ELSE">
                                    <span class="ct-cat--span__ELSE">
                                        ПОКАЗАТЬ ЕЩЕ
                                    </span>
                            <svg width="22" height="33" viewBox="0 0 22 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 0.5L11 33M11 33L0.5 22.5M11 33L21.5 22.5" stroke="#005792" stroke-width="0.5"></path>
                            </svg>
                        </button>
                    </div>


                    <div class="cdn-reg--div__REQUEST">
                        <div class="cdn-reg--div__TEXT __C-SCRL RIGHT">
                            <h3 class="cdn-reg--h3">
                                Напишите нам
                            </h3>
                            <p class="cdn-reg--p__REQUEST">
                                Свяжитесь с нами, чтобы получить персональное решение для вашей организации
                            </p>
                            <button class="cdn-reg--button__REQUEST">
                                Отправить запрос
                            </button>
                        </div>
                    </div>
                </div>

            </div>


        </div>




    </div>
</section>







<!-- ---------- ********** СЕКЦИЯ ABT ********** ---------- -->


<section class="ct-abt">
    <div class="ct-abt--div__CONT C-CONTAINER">
        <h2 class="ct-abt--h2 __C-SCRL RIGHT">
            Атб-atom-1
        </h2>


        <div class="ct-abt--div__MAIN __C-SCRL DOWN">
            <div class="ct-abt--div__MAIN_TOP">
                <div class="ct-abt--div__IMAGE_CONT">
                    <img src="images/home/ATB-2100/АТБ-2100_1.webp" alt="">
                </div>
                <div class="ct-abt--div__MAIN_TOP_TEXT">
                    <p class="ct-abt--p__1_1">
                        АТБ-АТОМ-1 является сетевой вычислительной платформой,
                        включённой в единый реестр российской радиоэлектронной
                        продукции (ПП РФ №878 от 10.07.2019), что допускает
                        применение на объектах критической информационной
                        инфраструктуры.
                    </p>
                    <p class="ct-abt--p__1_2">
                        <a class="ct-abt--a__1_2" href="#">
                            Платформа совместима с российскими операционными системами
                        </a>
                        и может использоваться в роли маршрутизатора, межсетевого
                        экрана или шлюза совместно со специализированным российским ПО.
                        АТБ-АТОМ-1 поддерживает до 8 Гб оперативной памяти и до 256 Гб
                        накопителя SSD ться в роли маршрутизатора, межсетевого экрана или
                        шлюза совместно со специализированным российским ПО. АТБ-АТОМ-1
                        поддерживает до 8 Гб оперативной памяти и до 256 Гб накопителя
                        SSDться в роли маршрутизатора, межсетевого экрана или шлюза
                        совместно со специализированным российским ПО. АТБ-АТОМ-1
                        поддерживает до 8 Гб оперативной памяти и до 256 Гб накопителя SSD.
                    </p>
                </div>
            </div>


            <div class="ct-abt--div__1_3">
                <p class="ct-abt--p__1_TOP">
                    Под требования заказчика АТБ-АТОМ-1 может быть доукомплектован опциональными модулями:
                </p>

                <ul class="ct-abt--ul__1_3">
                    <li class="ct-abt--li__1_3">
                        <div class="ct-abt--div__POINT"></div>
                        <span class="ct-abt--span__1_3">
                                    АТБ-WiFi/BT - модуль беспроводной передачи данных WiFi/BT с внешней антенной;
                                </span>
                    </li>
                    <li class="ct-abt--li__1_3">
                        <div class="ct-abt--div__POINT"></div>
                        <span class="ct-abt--span__1_3">
                                    АТБ-LTE (GPS) – модуль LTE (GPS) с внешней антенной и слотом под SIM-карту;
                                </span>
                    </li>
                    <li class="ct-abt--li__1_3">
                        <div class="ct-abt--div__POINT"></div>
                        <span class="ct-abt--span__1_3">
                                    АТБ-AUDIO – аудио-карта с динамиком или разъемами Audio-jack 3.5 мм;
                                </span>
                    </li>
                    <li class="ct-abt--li__1_3">
                        <div class="ct-abt--div__POINT"></div>
                        <span class="ct-abt--span__1_3">
                                    АТБ-МУВВ — модуль мониторинга условий эксплуатации и внешних воздействий (t◦C, U, мех. воздействия, вскрытия);
                                </span>
                    </li>
                    <li class="ct-abt--li__1_3">
                        <div class="ct-abt--div__POINT"></div>
                        <span class="ct-abt--span__1_3">
                                    АТБ-GSM — GSM-модем отечественного производства;
                                </span>
                    </li>
                    <li class="ct-abt--li__1_3">
                        <div class="ct-abt--div__POINT"></div>
                        <span class="ct-abt--span__1_3">
                                    АТБ-LW — базовая станция LoRaWAN.
                                </span>
                    </li>
                </ul>
            </div>

            <div class="ct-abt--div__1_4">
                <p class="ct-abt--p__1_TOP">
                    Сочетание технических параметров, форм-фактора и условий эксплуатации открывают возможности для применения АТБ-АТОМ-1 и в различных сферах:
                </p>

                <ul class="ct-abt--ul__1_4_1">
                    <li class="ct-abt--li__1_4_1">
                        <svg class="ct-abt--svg__CORNER" width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z" fill="#62BE37"></path>
                        </svg>

                        <div class="ct-abt--div__1_4_1_TEXT">
                            <p class="ct-abt--p__1_4_1_TEXT1">
                                В системах информационной безопасности
                            </p>
                            <p class="ct-abt--p__1_4_1_TEXT2">
                                в роли межсетевого экрана, шлюза, ловушки, монитора сетевых запросов и трафика;
                            </p>
                        </div>
                    </li>
                    <li class="ct-abt--li__1_4_1">
                        <svg class="ct-abt--svg__CORNER" width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z" fill="#62BE37"></path>
                        </svg>

                        <div class="ct-abt--div__1_4_1_TEXT">
                            <p class="ct-abt--p__1_4_1_TEXT1">
                                В системах контроля доступа и видеонаблюдения
                            </p>
                            <p class="ct-abt--p__1_4_1_TEXT2">
                                в роли вычислительного узла сбора данных, управления и маршрутизациа;
                            </p>
                        </div>
                    </li>
                    <li class="ct-abt--li__1_4_1">
                        <svg class="ct-abt--svg__CORNER" width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z" fill="#62BE37"></path>
                        </svg>

                        <div class="ct-abt--div__1_4_1_TEXT">
                            <p class="ct-abt--p__1_4_1_TEXT1">
                                в банкоматах, платежных автоматах и постаматах
                            </p>
                            <p class="ct-abt--p__1_4_1_TEXT2">
                                в роли межсетевого экрана, шлюза, маршрутизатора, вычислительного узла;
                            </p>
                        </div>
                    </li>
                    <li class="ct-abt--li__1_4_1">
                        <svg class="ct-abt--svg__CORNER" width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.29289 2.40703C8.92286 1.77707 8.47669 0.699922 7.58579 0.699922L0.999999 0.699922C0.447714 0.699922 -5.36129e-07 1.14764 -5.60271e-07 1.69992L-8.48144e-07 8.28571C-8.87087e-07 9.17661 1.07714 9.62278 1.70711 8.99281L8.29289 2.40703Z" fill="#62BE37"></path>
                        </svg>

                        <div class="ct-abt--div__1_4_1_TEXT">
                            <p class="ct-abt--p__1_4_1_TEXT1">
                                на прозводстве и в офисе
                            </p>
                            <p class="ct-abt--p__1_4_1_TEXT2">
                                в роли рабочего автоматизированного места, терминала или тонкого клиента.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
