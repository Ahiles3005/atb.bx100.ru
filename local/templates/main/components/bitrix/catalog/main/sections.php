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

//$this->addExternalCss(SITE_TEMPLATE_PATH. "/bitrix/css/main/bootstrap.css");


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
                <div class="hm-cat--div__LEFT ct-cat--div__LEFT">
                    <div class="ct-cat--div__FILTER_BACK">
                        <form class="ct-cat--form__FILTER __C-SCRL DOWN" action="#" method="post" name="ct-cat-filter">
                            <div class="ct-cat--div__FILTER_TOP">
                                <p class="ct-cat--p__FILTER_TOP">
                                    ФИЛЬТРЫ
                                </p>
                                <button class="ct-cat--button__FILTER_CLOSE" type="button">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)" fill="#005792"/>
                                        <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)" fill="#005792"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="ct-cat--div__FILTER_BODY">
                                <button class="ct-cat--button__FILTER_RESET" type="reset">
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.391417 9.55059L0 9.15917L4.38388 4.77529L0 0.391417L0.391417 0L4.77529 4.38388L9.15917 0L9.55059 0.391417L5.16671 4.77529L9.55059 9.15917L9.15917 9.55059L4.77529 5.16671L0.391417 9.55059Z" fill="#0C0C0C"/>
                                    </svg>
                                    <span>Сбросить все фильтры</span>
                                </button>


                                <div class="ct-cat--div__FILTER_ITEM">
                                    <button class="ct-cat--button__FILTER_ITEM_TOP" type="button">
                                        <div class="ct-cat--div__FILTER_ITEM_TOP">
                                            <p class="ct-cat--p__FILTER_ITEM_TOP">
                                                Процессор
                                            </p>
                                            <svg class="ct-cat--svg__FILTER_ITEM_POPUP_OPEN" role="button" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.04144 11.023C7.18814 11.023 7.31178 10.9723 7.41236 10.8709C7.51293 10.7697 7.56322 10.6456 7.56322 10.4988C7.56322 10.3521 7.51253 10.2284 7.41115 10.1279C7.30991 10.0273 7.18586 9.97701 7.03902 9.97701C6.89232 9.97701 6.76868 10.0277 6.6681 10.1291C6.56753 10.2303 6.51724 10.3544 6.51724 10.5012C6.51724 10.6479 6.56793 10.7716 6.66931 10.8721C6.77056 10.9727 6.8946 11.023 7.04144 11.023ZM6.71839 8.48851H7.28161C7.30843 8.16667 7.37883 7.90182 7.49282 7.69397C7.6068 7.48611 7.81801 7.22797 8.12644 6.91954C8.48851 6.55747 8.75335 6.23899 8.92098 5.96408C9.0886 5.68918 9.17241 5.37518 9.17241 5.0221C9.17241 4.42307 8.96523 3.93918 8.55086 3.5704C8.13649 3.20163 7.64636 3.01724 7.08046 3.01724C6.55747 3.01724 6.10489 3.1614 5.7227 3.44971C5.34052 3.73803 5.05556 4.06322 4.86782 4.42529L5.43103 4.66667C5.57854 4.35824 5.77299 4.1001 6.01437 3.89224C6.25575 3.68439 6.5977 3.58046 7.04023 3.58046C7.59004 3.58046 7.98899 3.73132 8.23707 4.03305C8.48515 4.33477 8.6092 4.66667 8.6092 5.02874C8.6092 5.31035 8.53544 5.55843 8.38793 5.77299C8.24042 5.98755 8.04598 6.20881 7.8046 6.43678C7.37548 6.83908 7.08716 7.19444 6.93966 7.50287C6.79215 7.8113 6.71839 8.13985 6.71839 8.48851ZM7.00342 14C6.03562 14 5.12556 13.8164 4.27322 13.4491C3.42088 13.0818 2.67951 12.5832 2.04911 11.9535C1.41857 11.3238 0.919454 10.5833 0.551753 9.73221C0.183917 8.88095 0 7.97135 0 7.00342C0 6.03562 0.183649 5.12556 0.550948 4.27322C0.918247 3.42088 1.41676 2.67951 2.04649 2.04911C2.67623 1.41857 3.41666 0.919454 4.26779 0.551753C5.11905 0.183917 6.02865 0 6.99658 0C7.96438 0 8.87444 0.18365 9.72678 0.550949C10.5791 0.918247 11.3205 1.41676 11.9509 2.04649C12.5814 2.67623 13.0805 3.41666 13.4482 4.26779C13.8161 5.11905 14 6.02865 14 6.99658C14 7.96438 13.8164 8.87444 13.4491 9.72678C13.0818 10.5791 12.5832 11.3205 11.9535 11.9509C11.3238 12.5814 10.5833 13.0805 9.73221 13.4482C8.88095 13.8161 7.97135 14 7.00342 14ZM7 13.4368C8.79694 13.4368 10.319 12.8132 11.5661 11.5661C12.8132 10.319 13.4368 8.79694 13.4368 7C13.4368 5.20307 12.8132 3.68103 11.5661 2.43391C10.319 1.18678 8.79694 0.563218 7 0.563218C5.20307 0.563218 3.68103 1.18678 2.43391 2.43391C1.18678 3.68103 0.563218 5.20307 0.563218 7C0.563218 8.79694 1.18678 10.319 2.43391 11.5661C3.68103 12.8132 5.20307 13.4368 7 13.4368Z" fill="#828282"/>
                                            </svg>
                                            <div class="ct-cat--div__FILTER_ITEM_POPUP">
                                                <p class="ct-cat--p__FILTER_ITEM_POPUP">
                                                    Аудиоустройства продаются отдельно. (Аудиоустройства Samsung)
                                                    Технология μ-Symphony поддерживается саундбарами
                                                    Samsung с технологией Q-Symphony.
                                                </p>
                                                <svg class="ct-cat--svg__FILTER_ITEM_POPUP_CLOSE" role="button" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.391385 9.5498L0 9.15842L4.38352 4.7749L0 0.391385L0.391385 0L4.7749 4.38352L9.15842 0L9.5498 0.391385L5.16629 4.7749L9.5498 9.15842L9.15842 9.5498L4.7749 5.16629L0.391385 9.5498Z" fill="#828282"/>
                                                </svg>
                                            </div>
                                        </div>

                                        <svg class="ct-cat--svg__FILTER_ITEM_TOP" width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>

                                    <fieldset class="ct-cat--fieldset__FILTER_ITEM_BODY">
                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry jlkajflsidf jfkd df8jhlk ao qoi af89 aioyhaosifhakef hjasfh uhafih o8awerlahsf
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>
                                    </fieldset>

                                    <button class="ct-cat--button__FILTER_ITEM_ELSE _1" type="button">
                                        <span>Показать еще</span>
                                        <span class="ct-cat--span__FILTER_ITEM_ELSE"></span>
                                        <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 0.125L5.125 4.83088L10.125 0.125" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>

                                    <button class="ct-cat--button__FILTER_ITEM_ELSE _2" type="button">
                                        <span>Свернуть</span>
                                        <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 5L5.125 0.294117L10.125 5" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                </div>


                                <div class="ct-cat--div__FILTER_ITEM">
                                    <button class="ct-cat--button__FILTER_ITEM_TOP" type="button">
                                        <div class="ct-cat--div__FILTER_ITEM_TOP">
                                            <p class="ct-cat--p__FILTER_ITEM_TOP">
                                                Процессор
                                            </p>
                                            <svg class="ct-cat--svg__FILTER_ITEM_POPUP_OPEN" role="button" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.04144 11.023C7.18814 11.023 7.31178 10.9723 7.41236 10.8709C7.51293 10.7697 7.56322 10.6456 7.56322 10.4988C7.56322 10.3521 7.51253 10.2284 7.41115 10.1279C7.30991 10.0273 7.18586 9.97701 7.03902 9.97701C6.89232 9.97701 6.76868 10.0277 6.6681 10.1291C6.56753 10.2303 6.51724 10.3544 6.51724 10.5012C6.51724 10.6479 6.56793 10.7716 6.66931 10.8721C6.77056 10.9727 6.8946 11.023 7.04144 11.023ZM6.71839 8.48851H7.28161C7.30843 8.16667 7.37883 7.90182 7.49282 7.69397C7.6068 7.48611 7.81801 7.22797 8.12644 6.91954C8.48851 6.55747 8.75335 6.23899 8.92098 5.96408C9.0886 5.68918 9.17241 5.37518 9.17241 5.0221C9.17241 4.42307 8.96523 3.93918 8.55086 3.5704C8.13649 3.20163 7.64636 3.01724 7.08046 3.01724C6.55747 3.01724 6.10489 3.1614 5.7227 3.44971C5.34052 3.73803 5.05556 4.06322 4.86782 4.42529L5.43103 4.66667C5.57854 4.35824 5.77299 4.1001 6.01437 3.89224C6.25575 3.68439 6.5977 3.58046 7.04023 3.58046C7.59004 3.58046 7.98899 3.73132 8.23707 4.03305C8.48515 4.33477 8.6092 4.66667 8.6092 5.02874C8.6092 5.31035 8.53544 5.55843 8.38793 5.77299C8.24042 5.98755 8.04598 6.20881 7.8046 6.43678C7.37548 6.83908 7.08716 7.19444 6.93966 7.50287C6.79215 7.8113 6.71839 8.13985 6.71839 8.48851ZM7.00342 14C6.03562 14 5.12556 13.8164 4.27322 13.4491C3.42088 13.0818 2.67951 12.5832 2.04911 11.9535C1.41857 11.3238 0.919454 10.5833 0.551753 9.73221C0.183917 8.88095 0 7.97135 0 7.00342C0 6.03562 0.183649 5.12556 0.550948 4.27322C0.918247 3.42088 1.41676 2.67951 2.04649 2.04911C2.67623 1.41857 3.41666 0.919454 4.26779 0.551753C5.11905 0.183917 6.02865 0 6.99658 0C7.96438 0 8.87444 0.18365 9.72678 0.550949C10.5791 0.918247 11.3205 1.41676 11.9509 2.04649C12.5814 2.67623 13.0805 3.41666 13.4482 4.26779C13.8161 5.11905 14 6.02865 14 6.99658C14 7.96438 13.8164 8.87444 13.4491 9.72678C13.0818 10.5791 12.5832 11.3205 11.9535 11.9509C11.3238 12.5814 10.5833 13.0805 9.73221 13.4482C8.88095 13.8161 7.97135 14 7.00342 14ZM7 13.4368C8.79694 13.4368 10.319 12.8132 11.5661 11.5661C12.8132 10.319 13.4368 8.79694 13.4368 7C13.4368 5.20307 12.8132 3.68103 11.5661 2.43391C10.319 1.18678 8.79694 0.563218 7 0.563218C5.20307 0.563218 3.68103 1.18678 2.43391 2.43391C1.18678 3.68103 0.563218 5.20307 0.563218 7C0.563218 8.79694 1.18678 10.319 2.43391 11.5661C3.68103 12.8132 5.20307 13.4368 7 13.4368Z" fill="#828282"/>
                                            </svg>
                                            <div class="ct-cat--div__FILTER_ITEM_POPUP">
                                                <p class="ct-cat--p__FILTER_ITEM_POPUP">
                                                    Аудиоустройства продаются отдельно. (Аудиоустройства Samsung)
                                                    Технология μ-Symphony поддерживается саундбарами
                                                    Samsung с технологией Q-Symphony.
                                                </p>
                                                <svg class="ct-cat--svg__FILTER_ITEM_POPUP_CLOSE" role="button" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.391385 9.5498L0 9.15842L4.38352 4.7749L0 0.391385L0.391385 0L4.7749 4.38352L9.15842 0L9.5498 0.391385L5.16629 4.7749L9.5498 9.15842L9.15842 9.5498L4.7749 5.16629L0.391385 9.5498Z" fill="#828282"/>
                                                </svg>
                                            </div>
                                        </div>

                                        <svg class="ct-cat--svg__FILTER_ITEM_TOP" width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>

                                    <fieldset class="ct-cat--fieldset__FILTER_ITEM_BODY">
                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry jlkajflsidf jfkd df8jhlk ao qoi af89 aioyhaosifhakef hjasfh uhafih o8awerlahsf
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>
                                    </fieldset>

                                    <button class="ct-cat--button__FILTER_ITEM_ELSE _1" type="button">
                                        <span>Показать еще</span>
                                        <span class="ct-cat--span__FILTER_ITEM_ELSE"></span>
                                        <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 0.125L5.125 4.83088L10.125 0.125" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>

                                    <button class="ct-cat--button__FILTER_ITEM_ELSE _2" type="button">
                                        <span>Свернуть</span>
                                        <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 5L5.125 0.294117L10.125 5" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                </div>


                                <div class="ct-cat--div__FILTER_ITEM">
                                    <button class="ct-cat--button__FILTER_ITEM_TOP" type="button">
                                        <div class="ct-cat--div__FILTER_ITEM_TOP">
                                            <p class="ct-cat--p__FILTER_ITEM_TOP">
                                                Процессор
                                            </p>
                                            <svg class="ct-cat--svg__FILTER_ITEM_POPUP_OPEN" role="button" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.04144 11.023C7.18814 11.023 7.31178 10.9723 7.41236 10.8709C7.51293 10.7697 7.56322 10.6456 7.56322 10.4988C7.56322 10.3521 7.51253 10.2284 7.41115 10.1279C7.30991 10.0273 7.18586 9.97701 7.03902 9.97701C6.89232 9.97701 6.76868 10.0277 6.6681 10.1291C6.56753 10.2303 6.51724 10.3544 6.51724 10.5012C6.51724 10.6479 6.56793 10.7716 6.66931 10.8721C6.77056 10.9727 6.8946 11.023 7.04144 11.023ZM6.71839 8.48851H7.28161C7.30843 8.16667 7.37883 7.90182 7.49282 7.69397C7.6068 7.48611 7.81801 7.22797 8.12644 6.91954C8.48851 6.55747 8.75335 6.23899 8.92098 5.96408C9.0886 5.68918 9.17241 5.37518 9.17241 5.0221C9.17241 4.42307 8.96523 3.93918 8.55086 3.5704C8.13649 3.20163 7.64636 3.01724 7.08046 3.01724C6.55747 3.01724 6.10489 3.1614 5.7227 3.44971C5.34052 3.73803 5.05556 4.06322 4.86782 4.42529L5.43103 4.66667C5.57854 4.35824 5.77299 4.1001 6.01437 3.89224C6.25575 3.68439 6.5977 3.58046 7.04023 3.58046C7.59004 3.58046 7.98899 3.73132 8.23707 4.03305C8.48515 4.33477 8.6092 4.66667 8.6092 5.02874C8.6092 5.31035 8.53544 5.55843 8.38793 5.77299C8.24042 5.98755 8.04598 6.20881 7.8046 6.43678C7.37548 6.83908 7.08716 7.19444 6.93966 7.50287C6.79215 7.8113 6.71839 8.13985 6.71839 8.48851ZM7.00342 14C6.03562 14 5.12556 13.8164 4.27322 13.4491C3.42088 13.0818 2.67951 12.5832 2.04911 11.9535C1.41857 11.3238 0.919454 10.5833 0.551753 9.73221C0.183917 8.88095 0 7.97135 0 7.00342C0 6.03562 0.183649 5.12556 0.550948 4.27322C0.918247 3.42088 1.41676 2.67951 2.04649 2.04911C2.67623 1.41857 3.41666 0.919454 4.26779 0.551753C5.11905 0.183917 6.02865 0 6.99658 0C7.96438 0 8.87444 0.18365 9.72678 0.550949C10.5791 0.918247 11.3205 1.41676 11.9509 2.04649C12.5814 2.67623 13.0805 3.41666 13.4482 4.26779C13.8161 5.11905 14 6.02865 14 6.99658C14 7.96438 13.8164 8.87444 13.4491 9.72678C13.0818 10.5791 12.5832 11.3205 11.9535 11.9509C11.3238 12.5814 10.5833 13.0805 9.73221 13.4482C8.88095 13.8161 7.97135 14 7.00342 14ZM7 13.4368C8.79694 13.4368 10.319 12.8132 11.5661 11.5661C12.8132 10.319 13.4368 8.79694 13.4368 7C13.4368 5.20307 12.8132 3.68103 11.5661 2.43391C10.319 1.18678 8.79694 0.563218 7 0.563218C5.20307 0.563218 3.68103 1.18678 2.43391 2.43391C1.18678 3.68103 0.563218 5.20307 0.563218 7C0.563218 8.79694 1.18678 10.319 2.43391 11.5661C3.68103 12.8132 5.20307 13.4368 7 13.4368Z" fill="#828282"/>
                                            </svg>
                                            <div class="ct-cat--div__FILTER_ITEM_POPUP">
                                                <p class="ct-cat--p__FILTER_ITEM_POPUP">
                                                    Аудиоустройства продаются отдельно. (Аудиоустройства Samsung)
                                                    Технология μ-Symphony поддерживается саундбарами
                                                    Samsung с технологией Q-Symphony.
                                                </p>
                                                <svg class="ct-cat--svg__FILTER_ITEM_POPUP_CLOSE" role="button" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.391385 9.5498L0 9.15842L4.38352 4.7749L0 0.391385L0.391385 0L4.7749 4.38352L9.15842 0L9.5498 0.391385L5.16629 4.7749L9.5498 9.15842L9.15842 9.5498L4.7749 5.16629L0.391385 9.5498Z" fill="#828282"/>
                                                </svg>
                                            </div>
                                        </div>

                                        <svg class="ct-cat--svg__FILTER_ITEM_TOP" width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>

                                    <fieldset class="ct-cat--fieldset__FILTER_ITEM_BODY">
                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry jlkajflsidf jfkd df8jhlk ao qoi af89 aioyhaosifhakef hjasfh uhafih o8awerlahsf
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>
                                    </fieldset>

                                    <button class="ct-cat--button__FILTER_ITEM_ELSE _1" type="button">
                                        <span>Показать еще</span>
                                        <span class="ct-cat--span__FILTER_ITEM_ELSE"></span>
                                        <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 0.125L5.125 4.83088L10.125 0.125" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>

                                    <button class="ct-cat--button__FILTER_ITEM_ELSE _2" type="button">
                                        <span>Свернуть</span>
                                        <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 5L5.125 0.294117L10.125 5" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                </div>


                                <div class="ct-cat--div__FILTER_ITEM">
                                    <button class="ct-cat--button__FILTER_ITEM_TOP" type="button">
                                        <div class="ct-cat--div__FILTER_ITEM_TOP">
                                            <p class="ct-cat--p__FILTER_ITEM_TOP">
                                                Процессор
                                            </p>
                                            <svg class="ct-cat--svg__FILTER_ITEM_POPUP_OPEN" role="button" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.04144 11.023C7.18814 11.023 7.31178 10.9723 7.41236 10.8709C7.51293 10.7697 7.56322 10.6456 7.56322 10.4988C7.56322 10.3521 7.51253 10.2284 7.41115 10.1279C7.30991 10.0273 7.18586 9.97701 7.03902 9.97701C6.89232 9.97701 6.76868 10.0277 6.6681 10.1291C6.56753 10.2303 6.51724 10.3544 6.51724 10.5012C6.51724 10.6479 6.56793 10.7716 6.66931 10.8721C6.77056 10.9727 6.8946 11.023 7.04144 11.023ZM6.71839 8.48851H7.28161C7.30843 8.16667 7.37883 7.90182 7.49282 7.69397C7.6068 7.48611 7.81801 7.22797 8.12644 6.91954C8.48851 6.55747 8.75335 6.23899 8.92098 5.96408C9.0886 5.68918 9.17241 5.37518 9.17241 5.0221C9.17241 4.42307 8.96523 3.93918 8.55086 3.5704C8.13649 3.20163 7.64636 3.01724 7.08046 3.01724C6.55747 3.01724 6.10489 3.1614 5.7227 3.44971C5.34052 3.73803 5.05556 4.06322 4.86782 4.42529L5.43103 4.66667C5.57854 4.35824 5.77299 4.1001 6.01437 3.89224C6.25575 3.68439 6.5977 3.58046 7.04023 3.58046C7.59004 3.58046 7.98899 3.73132 8.23707 4.03305C8.48515 4.33477 8.6092 4.66667 8.6092 5.02874C8.6092 5.31035 8.53544 5.55843 8.38793 5.77299C8.24042 5.98755 8.04598 6.20881 7.8046 6.43678C7.37548 6.83908 7.08716 7.19444 6.93966 7.50287C6.79215 7.8113 6.71839 8.13985 6.71839 8.48851ZM7.00342 14C6.03562 14 5.12556 13.8164 4.27322 13.4491C3.42088 13.0818 2.67951 12.5832 2.04911 11.9535C1.41857 11.3238 0.919454 10.5833 0.551753 9.73221C0.183917 8.88095 0 7.97135 0 7.00342C0 6.03562 0.183649 5.12556 0.550948 4.27322C0.918247 3.42088 1.41676 2.67951 2.04649 2.04911C2.67623 1.41857 3.41666 0.919454 4.26779 0.551753C5.11905 0.183917 6.02865 0 6.99658 0C7.96438 0 8.87444 0.18365 9.72678 0.550949C10.5791 0.918247 11.3205 1.41676 11.9509 2.04649C12.5814 2.67623 13.0805 3.41666 13.4482 4.26779C13.8161 5.11905 14 6.02865 14 6.99658C14 7.96438 13.8164 8.87444 13.4491 9.72678C13.0818 10.5791 12.5832 11.3205 11.9535 11.9509C11.3238 12.5814 10.5833 13.0805 9.73221 13.4482C8.88095 13.8161 7.97135 14 7.00342 14ZM7 13.4368C8.79694 13.4368 10.319 12.8132 11.5661 11.5661C12.8132 10.319 13.4368 8.79694 13.4368 7C13.4368 5.20307 12.8132 3.68103 11.5661 2.43391C10.319 1.18678 8.79694 0.563218 7 0.563218C5.20307 0.563218 3.68103 1.18678 2.43391 2.43391C1.18678 3.68103 0.563218 5.20307 0.563218 7C0.563218 8.79694 1.18678 10.319 2.43391 11.5661C3.68103 12.8132 5.20307 13.4368 7 13.4368Z" fill="#828282"/>
                                            </svg>
                                            <div class="ct-cat--div__FILTER_ITEM_POPUP">
                                                <p class="ct-cat--p__FILTER_ITEM_POPUP">
                                                    Аудиоустройства продаются отдельно. (Аудиоустройства Samsung)
                                                    Технология μ-Symphony поддерживается саундбарами
                                                    Samsung с технологией Q-Symphony.
                                                </p>
                                                <svg class="ct-cat--svg__FILTER_ITEM_POPUP_CLOSE" role="button" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.391385 9.5498L0 9.15842L4.38352 4.7749L0 0.391385L0.391385 0L4.7749 4.38352L9.15842 0L9.5498 0.391385L5.16629 4.7749L9.5498 9.15842L9.15842 9.5498L4.7749 5.16629L0.391385 9.5498Z" fill="#828282"/>
                                                </svg>
                                            </div>
                                        </div>

                                        <svg class="ct-cat--svg__FILTER_ITEM_TOP" width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>

                                    <fieldset class="ct-cat--fieldset__FILTER_ITEM_BODY">
                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry jlkajflsidf jfkd df8jhlk ao qoi af89 aioyhaosifhakef hjasfh uhafih o8awerlahsf
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>
                                    </fieldset>

                                    <button class="ct-cat--button__FILTER_ITEM_ELSE _1" type="button">
                                        <span>Показать еще</span>
                                        <span class="ct-cat--span__FILTER_ITEM_ELSE"></span>
                                        <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 0.125L5.125 4.83088L10.125 0.125" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>

                                    <button class="ct-cat--button__FILTER_ITEM_ELSE _2" type="button">
                                        <span>Свернуть</span>
                                        <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 5L5.125 0.294117L10.125 5" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                </div>


                                <div class="ct-cat--div__FILTER_ITEM">
                                    <button class="ct-cat--button__FILTER_ITEM_TOP" type="button">
                                        <div class="ct-cat--div__FILTER_ITEM_TOP">
                                            <p class="ct-cat--p__FILTER_ITEM_TOP">
                                                Процессор
                                            </p>
                                            <svg class="ct-cat--svg__FILTER_ITEM_POPUP_OPEN" role="button" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.04144 11.023C7.18814 11.023 7.31178 10.9723 7.41236 10.8709C7.51293 10.7697 7.56322 10.6456 7.56322 10.4988C7.56322 10.3521 7.51253 10.2284 7.41115 10.1279C7.30991 10.0273 7.18586 9.97701 7.03902 9.97701C6.89232 9.97701 6.76868 10.0277 6.6681 10.1291C6.56753 10.2303 6.51724 10.3544 6.51724 10.5012C6.51724 10.6479 6.56793 10.7716 6.66931 10.8721C6.77056 10.9727 6.8946 11.023 7.04144 11.023ZM6.71839 8.48851H7.28161C7.30843 8.16667 7.37883 7.90182 7.49282 7.69397C7.6068 7.48611 7.81801 7.22797 8.12644 6.91954C8.48851 6.55747 8.75335 6.23899 8.92098 5.96408C9.0886 5.68918 9.17241 5.37518 9.17241 5.0221C9.17241 4.42307 8.96523 3.93918 8.55086 3.5704C8.13649 3.20163 7.64636 3.01724 7.08046 3.01724C6.55747 3.01724 6.10489 3.1614 5.7227 3.44971C5.34052 3.73803 5.05556 4.06322 4.86782 4.42529L5.43103 4.66667C5.57854 4.35824 5.77299 4.1001 6.01437 3.89224C6.25575 3.68439 6.5977 3.58046 7.04023 3.58046C7.59004 3.58046 7.98899 3.73132 8.23707 4.03305C8.48515 4.33477 8.6092 4.66667 8.6092 5.02874C8.6092 5.31035 8.53544 5.55843 8.38793 5.77299C8.24042 5.98755 8.04598 6.20881 7.8046 6.43678C7.37548 6.83908 7.08716 7.19444 6.93966 7.50287C6.79215 7.8113 6.71839 8.13985 6.71839 8.48851ZM7.00342 14C6.03562 14 5.12556 13.8164 4.27322 13.4491C3.42088 13.0818 2.67951 12.5832 2.04911 11.9535C1.41857 11.3238 0.919454 10.5833 0.551753 9.73221C0.183917 8.88095 0 7.97135 0 7.00342C0 6.03562 0.183649 5.12556 0.550948 4.27322C0.918247 3.42088 1.41676 2.67951 2.04649 2.04911C2.67623 1.41857 3.41666 0.919454 4.26779 0.551753C5.11905 0.183917 6.02865 0 6.99658 0C7.96438 0 8.87444 0.18365 9.72678 0.550949C10.5791 0.918247 11.3205 1.41676 11.9509 2.04649C12.5814 2.67623 13.0805 3.41666 13.4482 4.26779C13.8161 5.11905 14 6.02865 14 6.99658C14 7.96438 13.8164 8.87444 13.4491 9.72678C13.0818 10.5791 12.5832 11.3205 11.9535 11.9509C11.3238 12.5814 10.5833 13.0805 9.73221 13.4482C8.88095 13.8161 7.97135 14 7.00342 14ZM7 13.4368C8.79694 13.4368 10.319 12.8132 11.5661 11.5661C12.8132 10.319 13.4368 8.79694 13.4368 7C13.4368 5.20307 12.8132 3.68103 11.5661 2.43391C10.319 1.18678 8.79694 0.563218 7 0.563218C5.20307 0.563218 3.68103 1.18678 2.43391 2.43391C1.18678 3.68103 0.563218 5.20307 0.563218 7C0.563218 8.79694 1.18678 10.319 2.43391 11.5661C3.68103 12.8132 5.20307 13.4368 7 13.4368Z" fill="#828282"/>
                                            </svg>
                                            <div class="ct-cat--div__FILTER_ITEM_POPUP">
                                                <p class="ct-cat--p__FILTER_ITEM_POPUP">
                                                    Аудиоустройства продаются отдельно. (Аудиоустройства Samsung)
                                                    Технология μ-Symphony поддерживается саундбарами
                                                    Samsung с технологией Q-Symphony.
                                                </p>
                                                <svg class="ct-cat--svg__FILTER_ITEM_POPUP_CLOSE" role="button" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.391385 9.5498L0 9.15842L4.38352 4.7749L0 0.391385L0.391385 0L4.7749 4.38352L9.15842 0L9.5498 0.391385L5.16629 4.7749L9.5498 9.15842L9.15842 9.5498L4.7749 5.16629L0.391385 9.5498Z" fill="#828282"/>
                                                </svg>
                                            </div>
                                        </div>

                                        <svg class="ct-cat--svg__FILTER_ITEM_TOP" width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>

                                    <fieldset class="ct-cat--fieldset__FILTER_ITEM_BODY">
                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry jlkajflsidf jfkd df8jhlk ao qoi af89 aioyhaosifhakef hjasfh uhafih o8awerlahsf
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>
                                    </fieldset>

                                    <button class="ct-cat--button__FILTER_ITEM_ELSE _1" type="button">
                                        <span>Показать еще</span>
                                        <span class="ct-cat--span__FILTER_ITEM_ELSE"></span>
                                        <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 0.125L5.125 4.83088L10.125 0.125" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>

                                    <button class="ct-cat--button__FILTER_ITEM_ELSE _2" type="button">
                                        <span>Свернуть</span>
                                        <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 5L5.125 0.294117L10.125 5" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                </div>


                                <div class="ct-cat--div__FILTER_ITEM">
                                    <button class="ct-cat--button__FILTER_ITEM_TOP" type="button">
                                        <div class="ct-cat--div__FILTER_ITEM_TOP">
                                            <p class="ct-cat--p__FILTER_ITEM_TOP">
                                                Процессор
                                            </p>
                                            <svg class="ct-cat--svg__FILTER_ITEM_POPUP_OPEN" role="button" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.04144 11.023C7.18814 11.023 7.31178 10.9723 7.41236 10.8709C7.51293 10.7697 7.56322 10.6456 7.56322 10.4988C7.56322 10.3521 7.51253 10.2284 7.41115 10.1279C7.30991 10.0273 7.18586 9.97701 7.03902 9.97701C6.89232 9.97701 6.76868 10.0277 6.6681 10.1291C6.56753 10.2303 6.51724 10.3544 6.51724 10.5012C6.51724 10.6479 6.56793 10.7716 6.66931 10.8721C6.77056 10.9727 6.8946 11.023 7.04144 11.023ZM6.71839 8.48851H7.28161C7.30843 8.16667 7.37883 7.90182 7.49282 7.69397C7.6068 7.48611 7.81801 7.22797 8.12644 6.91954C8.48851 6.55747 8.75335 6.23899 8.92098 5.96408C9.0886 5.68918 9.17241 5.37518 9.17241 5.0221C9.17241 4.42307 8.96523 3.93918 8.55086 3.5704C8.13649 3.20163 7.64636 3.01724 7.08046 3.01724C6.55747 3.01724 6.10489 3.1614 5.7227 3.44971C5.34052 3.73803 5.05556 4.06322 4.86782 4.42529L5.43103 4.66667C5.57854 4.35824 5.77299 4.1001 6.01437 3.89224C6.25575 3.68439 6.5977 3.58046 7.04023 3.58046C7.59004 3.58046 7.98899 3.73132 8.23707 4.03305C8.48515 4.33477 8.6092 4.66667 8.6092 5.02874C8.6092 5.31035 8.53544 5.55843 8.38793 5.77299C8.24042 5.98755 8.04598 6.20881 7.8046 6.43678C7.37548 6.83908 7.08716 7.19444 6.93966 7.50287C6.79215 7.8113 6.71839 8.13985 6.71839 8.48851ZM7.00342 14C6.03562 14 5.12556 13.8164 4.27322 13.4491C3.42088 13.0818 2.67951 12.5832 2.04911 11.9535C1.41857 11.3238 0.919454 10.5833 0.551753 9.73221C0.183917 8.88095 0 7.97135 0 7.00342C0 6.03562 0.183649 5.12556 0.550948 4.27322C0.918247 3.42088 1.41676 2.67951 2.04649 2.04911C2.67623 1.41857 3.41666 0.919454 4.26779 0.551753C5.11905 0.183917 6.02865 0 6.99658 0C7.96438 0 8.87444 0.18365 9.72678 0.550949C10.5791 0.918247 11.3205 1.41676 11.9509 2.04649C12.5814 2.67623 13.0805 3.41666 13.4482 4.26779C13.8161 5.11905 14 6.02865 14 6.99658C14 7.96438 13.8164 8.87444 13.4491 9.72678C13.0818 10.5791 12.5832 11.3205 11.9535 11.9509C11.3238 12.5814 10.5833 13.0805 9.73221 13.4482C8.88095 13.8161 7.97135 14 7.00342 14ZM7 13.4368C8.79694 13.4368 10.319 12.8132 11.5661 11.5661C12.8132 10.319 13.4368 8.79694 13.4368 7C13.4368 5.20307 12.8132 3.68103 11.5661 2.43391C10.319 1.18678 8.79694 0.563218 7 0.563218C5.20307 0.563218 3.68103 1.18678 2.43391 2.43391C1.18678 3.68103 0.563218 5.20307 0.563218 7C0.563218 8.79694 1.18678 10.319 2.43391 11.5661C3.68103 12.8132 5.20307 13.4368 7 13.4368Z" fill="#828282"/>
                                            </svg>
                                            <div class="ct-cat--div__FILTER_ITEM_POPUP">
                                                <p class="ct-cat--p__FILTER_ITEM_POPUP">
                                                    Аудиоустройства продаются отдельно. (Аудиоустройства Samsung)
                                                    Технология μ-Symphony поддерживается саундбарами
                                                    Samsung с технологией Q-Symphony.
                                                </p>
                                                <svg class="ct-cat--svg__FILTER_ITEM_POPUP_CLOSE" role="button" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.391385 9.5498L0 9.15842L4.38352 4.7749L0 0.391385L0.391385 0L4.7749 4.38352L9.15842 0L9.5498 0.391385L5.16629 4.7749L9.5498 9.15842L9.15842 9.5498L4.7749 5.16629L0.391385 9.5498Z" fill="#828282"/>
                                                </svg>
                                            </div>
                                        </div>

                                        <svg class="ct-cat--svg__FILTER_ITEM_TOP" width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>

                                    <fieldset class="ct-cat--fieldset__FILTER_ITEM_BODY">
                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry jlkajflsidf jfkd df8jhlk ao qoi af89 aioyhaosifhakef hjasfh uhafih o8awerlahsf
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>

                                        <label class="ct-cat--label__FILTER_ITEM">
                                            <input class="ct-cat--input__FILTER_ITEM" type="checkbox" name="ct-cat-1" value="">
                                            <div class="ct-cat--div__FILTER_SQUARE">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span class="ct-cat--span__FILTER_ITEM">
                                                        Satry
                                                    </span>
                                        </label>
                                    </fieldset>

                                    <button class="ct-cat--button__FILTER_ITEM_ELSE _1" type="button">
                                        <span>Показать еще</span>
                                        <span class="ct-cat--span__FILTER_ITEM_ELSE"></span>
                                        <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 0.125L5.125 4.83088L10.125 0.125" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>

                                    <button class="ct-cat--button__FILTER_ITEM_ELSE _2" type="button">
                                        <span>Свернуть</span>
                                        <svg class="ct-cat--svg__FILTER_ITEM_ELSE" width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 5L5.125 0.294117L10.125 5" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                </div>


                                <div class="ct-cat--div__FILTER_ITEM">
                                    <button class="ct-cat--button__FILTER_ITEM_TOP_R" type="button">
                                        <div class="ct-cat--div__FILTER_ITEM_TOP">
                                            <p class="ct-cat--p__FILTER_ITEM_TOP">
                                                цена, ₽
                                            </p>
                                        </div>

                                        <svg class="ct-cat--svg__FILTER_ITEM_TOP_R" width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25" stroke-linecap="round"/>
                                        </svg>
                                    </button>

                                    <fieldset class="ct-cat--fieldset__FILTER_ITEM_BODY_R">
                                        <div class="ct-cat--div__FILTER_INPUT_R">
                                            <label class="ct-cat--label__FILTER_INPUT_R">
                                                <span class="ct-cat--span__FILTER_INPUT_R min">От</span>
                                                <input class="ct-cat--input__FILTER_INPUT_R min" type="number" name="ct-cat-range-min" value="0">
                                            </label>
                                            <label class="ct-cat--label__FILTER_INPUT_R">
                                                <span class="ct-cat--span__FILTER_INPUT_R max">До</span>
                                                <input class="ct-cat--input__FILTER_INPUT_R max" type="number" name="ct-cat-range-max" value="550000">
                                            </label>
                                        </div>

                                        <input class="ct-cat--input__FILTER_RANGE min" type="range" name="minprice" min="0" max="550000" value="0">
                                        <input class="ct-cat--input__FILTER_RANGE max" type="range" name="maxprice" min="0" max="550000" value="550000">
                                    </fieldset>
                                </div>


                                <div class="ct-cat--div__FILTER_ITEM">
                                    <fieldset class="ct-cat--fieldset__DES">
                                        <label class="ct-cat--label__DES">
                                                    <span class="ct-cat--span__DES">
                                                        Только в наличии
                                                    </span>
                                            <div class="ct-cat--div__DES">
                                                <div class="ct-cat--div__ROUND"></div>
                                            </div>
                                            <input class="ct-cat--input__DES" type="checkbox" name="design" value="">
                                        </label>
                                    </fieldset>
                                    <fieldset class="ct-cat--fieldset__DES">
                                        <label class="ct-cat--label__DES">
                                                    <span class="ct-cat--span__DES">
                                                        Без предоплаты
                                                    </span>
                                            <div class="ct-cat--div__DES">
                                                <div class="ct-cat--div__ROUND"></div>
                                            </div>
                                            <input class="ct-cat--input__DES" type="checkbox" name="design" value="">
                                        </label>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="ct-cat--div__FILTER_BOTTOM">
                                <button class="ct-cat--button__FILTER_BOTTOM" type="submit">
                                    <span>ПОКАЗАТЬ</span>
                                    <span class="ct-cat--span__FILTER_BOTTOM">9</span>
                                    <span>МОДЕЛЕЙ</span>
                                </button>
                                <button class="ct-cat--button__FILTER_RESET" type="reset">
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.391417 9.55059L0 9.15917L4.38388 4.77529L0 0.391417L0.391417 0L4.77529 4.38388L9.15917 0L9.55059 0.391417L5.16671 4.77529L9.55059 9.15917L9.15917 9.55059L4.77529 5.16671L0.391417 9.55059Z" fill="#0C0C0C"/>
                                    </svg>
                                    <span>Сбросить все фильтры</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
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
                                <span class="ct-cat--span__IND1">2</span>
                                из
                                <span class="ct-cat--span__IND2">10</span>
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
                </div>

            </div>




        </div>




    </div>
</section>







<!-- ---------- ********** СЕКЦИЯ WRT ********** ---------- -->


<section class="ct-wrt">
    <div class="ct-wrt--div__CONT C-CONTAINER">
        <div class="ct-wrt--div__CONT2 __C-SCRL DOWN">
            <h2 class="ct-wrt--h2">
                Напишите нам
            </h2>
            <p class="ct-wrt--p">
                Свяжитесь с нами, чтобы получить персональное решение для вашей организации
            </p>
            <button class="ct-wrt--button">
                Отправить запрос
            </button>
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