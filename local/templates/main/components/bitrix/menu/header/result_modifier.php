<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

// Преобразуем плоский массив меню в дерево
$arResult = \Site\Data::buildMenuTree($arResult);