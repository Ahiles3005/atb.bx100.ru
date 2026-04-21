<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("КОНТАКТЫ");
?>


    <!-- ---------- ********** СЕКЦИЯ HERO ********** ---------- -->


    <section class="hrx-hero">
        <div class="hrx-hero--div__CONT C-CONTAINER">
            <? $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    ".default",
                    [
                            "PATH" => "",
                            "SITE_ID" => "s1",
                            "START_FROM" => "0"
                    ]
            ); ?>


            <div class="c-common--div__TABS __C-SCRL DOWN">
                <div class="c-common--div__TABS_TOP">
                    <a class="c-common--a__TABS" href="/about/team/#hr-hero">
                        команда
                    </a>
                    <a class="c-common--a__TABS" href="/about/team/#hr-adv">
                        преимущества
                    </a>
                    <a class="c-common--a__TABS" href="/about/team/#hr-hst">
                        истории роста
                    </a>
                    <a class="c-common--a__TABS" href="/about/team/#hr-faq">
                        f.a.q.
                    </a>
                    <a class="c-common--a__TABS" href="/about/team/#hr-blog">
                        hr-блог
                    </a>
                    <a class="c-common--a__TABS _ACT _MARK" href="#hrx-vac">
                        вакансии
                    </a>
                    <div class="c-common--div__TABS_FRAME"></div>
                </div>
                <button class="c-common--button__TABS_LEFT">
                    <svg width="54" height="20" viewBox="0 0 54 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M36 4.5L41 10L36 15.5" stroke="#005792" stroke-width="1.5"
                              stroke-linecap="round"></path>
                    </svg>
                </button>
                <button class="c-common--button__TABS_RIGHT">
                    <svg width="54" height="20" viewBox="0 0 54 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M36 4.5L41 10L36 15.5" stroke="#005792" stroke-width="1.5"
                              stroke-linecap="round"></path>
                    </svg>
                </button>
            </div>


            <div class="hrx-hero--div__MAIN">
                <div class="hrx-hero--div__RIGHT">
                    <h1 class="hrx-hero--h1 __C-SCRL RIGHT">
                        <? $APPLICATION->ShowTitle(false); ?>
                    </h1>
                    <p class="hrx-hero--p__TOP __C-SCRL DOWN">
                        Мы рады видеть в нашей команде ярких, творческих,
                        грамотных и мотивированных профессионалов, готовых
                        расти и развиваться вместе с компанией - ждём вас!
                    </p>
                </div>

                <div class="hrx-hero--div__IMAGES __C-SCRL DOWN">
                    <div class="hrx-hero--div__IMAGE_CONT">
                        <img class="hrx-hero--img__IMAGE" src="/local/templates/main/assets/images/hr/hr-hero_4.jpg" alt="" loading="lazy">
                    </div>
                    <div class="hrx-hero--div__IMAGE_ADD1"></div>
                    <div class="hrx-hero--div__IMAGE_ADD2"></div>
                </div>
            </div>
        </div>
    </section>

<? $APPLICATION->IncludeComponent(
	"bitrix:news", 
	"hr", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "nasha_komanda",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "DOHOD",
			1 => "NAPRAVLENIE",
			2 => "GOROD",
			3 => "FORMAT_RABOTY",
			4 => "OSNOVNIY_KOMPETENCYY",
			5 => "VAKANCIY",
			6 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/about/team/hr/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "hr",
		"FILTER_NAME" => "hrFilter",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#",
		)
	),
	false
); ?><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>