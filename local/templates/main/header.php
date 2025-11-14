<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;


$mainId = $APPLICATION->GetProperty('mainid') ?? 'other';


//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/atb.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/libs/swiper/swiper-bundle.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/variables.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/base.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/common.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/header.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/footer.css');

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/card.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/catalog.css');

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/swiper/swiper-bundle.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/common.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/header.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/footer.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/home.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/card.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/catalog.js');
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <meta charset="<?= LANG_CHARSET ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
</head>
<body class="body">
<?php $APPLICATION->ShowPanel(); ?>

<!-- HEADER -->
<header class="c-header">
    <div class="c-header--div__SHADOW">
        <div class="c-header--div__SUBMENU_BACK"></div>
        <div class="c-header--div__SUBMENU_BACK2_MOB"></div>
        <div class="c-header--div__SUBMENU_BACK2_DESC"></div>
        <nav class="c-header--nav C-CONTAINER">
            <a class="c-header--a__LOGO" href="#">
                <img class="c-header--img__LOGO" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/header/c-header_logo.svg"
                     alt="логотип">
            </a>

            <!-- МЕНЮ -->
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:menu',
                'header',
                [
                    'ROOT_MENU_TYPE' => 'header',
                    'CHILD_MENU_TYPE' => 'child',
                    'MAX_LEVEL' => '4',
                    'USE_EXT' => 'Y',
                    'DELAY' => 'N',
                    'ALLOW_MULTI_SELECT' => 'N',
                    'MENU_CACHE_TYPE' => 'N',
                    'MENU_CACHE_TIME' => '3600',
                    'MENU_CACHE_USE_GROUPS' => 'Y',
                ],
                false
            );
            ?>

            <!-- ПОИСК -->
            <button class="c-header--button__SEARCH_OPEN">
                <?= \Site\Template::showSvg('/assets/images/svg/search.svg') ?>
            </button>
            <form class="c-header--form__SEARCH" action="#" method="post" name="header-search" role="search">
                <div class="c-header--div__SEARCH C-CONTAINER">
                    <input class="c-header--input__SEARCH" type="search" name="search" placeholder="Поиск" required>
                    <button class="c-header--button__SEARCH" type="submit">
                        НАЙТИ
                    </button>
                    <button class="c-header--button__SEARCH_CLOSE" type="button">
                        <?= \Site\Template::showSvg('/assets/images/svg/close.svg') ?>
                    </button>
                </div>
            </form>
            <div class="c-header--div__SEARCH_BACK"></div>


            <a class="c-header--a__CONTACTS" href="#">
                КОНТАКТЫ
            </a>


            <button class="c-header--button__BURGER">
                <?= \Site\Template::showSvg('/assets/images/svg/burger.svg') ?>
            </button>
        </nav>
    </div>
</header>


<main id="<?=$mainId?>">
<?php if($APPLICATION->GetCurPage() == '/' || $APPLICATION->GetCurPage() == '/index.php'):?>
    <?require_once($_SERVER['DOCUMENT_ROOT'].'/'.SITE_TEMPLATE_PATH.'/include/home/index.php')?>
<?php endif?>
