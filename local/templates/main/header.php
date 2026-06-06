<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <meta charset="<?= LANG_CHARSET ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>


    <script type="importmap">
        {
            "imports": {
                "three": "<?= SITE_TEMPLATE_PATH ?>/assets/3d/build/three.module.js",
                "orbitcontrolls": "<?= SITE_TEMPLATE_PATH ?>/assets/3d/build/OrbitControls.js",
                "objectloader": "<?= SITE_TEMPLATE_PATH ?>/assets/3d/build/OBJLoader.js",
                "gltfloader": "<?= SITE_TEMPLATE_PATH ?>/assets/3d/build/GLTFLoader.js",
                "dracoloader": "<?= SITE_TEMPLATE_PATH ?>/assets/3d/build/DRACOLoader.js"
            }
        }
    </script>
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
            <a class="c-header--a__LOGO" href="/">
                <img class="c-header--img__LOGO" src="/images/header/c-header_logo.svg"
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
                            'MENU_CACHE_USE_GROUPS' => 'N',
                    ],
                    false
            );
            ?>

            <!-- ПОИСК -->
            <button class="c-header--button__SEARCH_OPEN">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.0819 19L10.9113 11.8292C10.3615 12.3159 9.72039 12.6908 8.98803 12.954C8.25568 13.2172 7.49753 13.3488 6.7136 13.3488C4.83722 13.3488 3.24919 12.6995 1.94951 11.4007C0.649837 10.1018 0 8.52696 0 6.6762C0 4.82526 0.649376 3.24987 1.94813 1.95003C3.24688 0.650011 4.82377 0 6.67879 0C8.53363 0 10.1108 0.64955 11.4103 1.94865C12.7098 3.24776 13.3595 4.82315 13.3595 6.67482C13.3595 7.4488 13.2271 8.20242 12.9622 8.93568C12.6972 9.66895 12.3138 10.3331 11.8123 10.9283L19 18.0714L18.0819 19ZM6.69675 12.095C8.20622 12.095 9.48508 11.569 10.5333 10.5169C11.5816 9.46496 12.1057 8.18418 12.1057 6.67455C12.1057 5.16473 11.5816 3.88386 10.5333 2.83194C9.48508 1.77984 8.20622 1.25379 6.69675 1.25379C5.1777 1.25379 3.89073 1.77984 2.83585 2.83194C1.78116 3.88386 1.25381 5.16473 1.25381 6.67455C1.25381 8.18418 1.78116 9.46496 2.83585 10.5169C3.89073 11.569 5.1777 12.095 6.69675 12.095Z" fill="#0C0C0C"/>
                </svg>
            </button>

            <div class="c-header--div__SEARCH_BACK">
                <!-- Поисковая строка -->
                <form class="c-header--form__SEARCH" action="#" method="post" name="header-search" role="search">
                    <label class="c-header--label__SEARCH">
                        <input class="c-header--input__SEARCH" type="search" name="header-search">
                    </label>
                    <div class="c-header--div__PLACEHOLDER">
                        <p class="c-header--p__PLACEHOLDER">
                            Введите запрос
                        </p>
                    </div>
                    <button class="c-header--button__SEARCH_CLEAR" type="reset">
                        <svg class="c-header--svg__SEARCH_CLEAR" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.0713043" y="18.5117" width="26.1834" height="2" rx="1" transform="rotate(-45 0.0713043 18.5117)" fill="#BFBFBF"/>
                            <rect width="26.1834" height="2" rx="1" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 19.9287 18.5117)" fill="#BFBFBF"/>
                        </svg>
                    </button>
                    <button class="c-header--button__SEARCH_SUBMIT" type="submit">
                        <svg class="c-header--svg__SEARCH_SUBMIT" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.3139 30.8028L17.6891 19.1776C16.7978 19.9665 15.7585 20.5743 14.5712 21.001C13.3839 21.4277 12.1548 21.6411 10.8839 21.6411C7.84198 21.6411 5.2675 20.5883 3.1605 18.4828C1.0535 16.377 0 13.8239 0 10.8235C0 7.82271 1.05275 5.26869 3.15826 3.16139C5.26377 1.0538 7.82018 0 10.8275 0C13.8345 0 16.3914 1.05305 18.4981 3.15916C20.6048 5.26526 21.6581 7.81928 21.6581 10.8212C21.6581 12.076 21.4434 13.2978 21.014 14.4865C20.5843 15.6753 19.9629 16.7521 19.1498 17.7169L30.8023 29.2973L29.3139 30.8028ZM10.8566 19.6084C13.3037 19.6084 15.377 18.7556 17.0764 17.0499C18.7758 15.3446 19.6255 13.2682 19.6255 10.8208C19.6255 8.37305 18.7758 6.29651 17.0764 4.59115C15.377 2.88548 13.3037 2.03265 10.8566 2.03265C8.39396 2.03265 6.30756 2.88548 4.59742 4.59115C2.88757 6.29651 2.03265 8.37305 2.03265 10.8208C2.03265 13.2682 2.88757 15.3446 4.59742 17.0499C6.30756 18.7556 8.39396 19.6084 10.8566 19.6084Z" fill="white"/>
                        </svg>
                    </button>
                </form>

                <div class="c-header--div__SEARCH_RESULT">
                    <div class="c-header--div__SEARCH_RESULT_LEFT">
                        <p class="c-header--p__SEARCH_RESULT_LEFT">
                                <span class="c-header--span__SEARCH_RESULT_LEFT1">
                                    найдено по запросу:
                                </span>
                            <span class="c-header--span__SEARCH_RESULT_LEFT2">

                                </span>
                        </p>

                        <div class="c-header--div__COUNT">
                            <div class="c-header--div__COUNT_TOP">
                                <span class="c-header--span__COUNT" data-finl="280"></span>
                                <span class="c-header--span__COUNT_TEXT">
                                        результатов поиска
                                    </span>
                            </div>

                            <div class="c-common--div__LINE1">
                                <div class="c-common--div__LINE11"></div>
                            </div>
                        </div>
                    </div>


                    <a class="c-header--a__SEARCH_LINK" href="#">
                            <span class="c-header--span__SEARCH_LINK">
                                смотреть результаты
                            </span>
                        <svg class="c-header--svg__SEARCH_LINK" width="33" height="22" viewBox="0 0 33 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 10.6758L32.5 10.6758M22 0.175781L32.5 10.6758L22 21.1758" stroke="#005792" stroke-width="0.5"></path>
                        </svg>
                    </a>
                </div>
            </div>





            <a class="c-header--a__CONTACTS" href="/about/contacts/">
                КОНТАКТЫ
            </a>


            <button class="c-header--button__BURGER">
                <?= \Site\Template::showSvg('/images/svg/burger.svg') ?>
            </button>
        </nav>
    </div>
</header>


<main id="<? $APPLICATION->ShowProperty('mainid','other') ?>">
    <?php if ($APPLICATION->GetCurPage() == '/' || $APPLICATION->GetCurPage() == '/index.php'): ?>
        <? require_once($_SERVER['DOCUMENT_ROOT'] . '/' . SITE_TEMPLATE_PATH . '/include/home/index.php') ?>
    <?php endif ?>
