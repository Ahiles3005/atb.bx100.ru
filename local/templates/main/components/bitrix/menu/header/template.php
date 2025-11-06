<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

// Рекурсивный рендер пунктов меню (дерево)
/**
 * @param array $items
 * @param bool $isTop
 * @param string|null $parentTitle
 * @return void
 */
function renderMenuItems(array $items, $isTop = false, $parentTitle = null)
{
    if (empty($items)) {
        return;
    }

    $ulClass = $isTop ? 'c-header--ul__MENU' : 'c-header--ul__SUBMENU';
    echo '<ul class="' . $ulClass . '">';

    foreach ($items as $item) {
        $hasChildren = !empty($item['CHILDS']);
        $title = htmlspecialchars($item['TEXT']);
        $link = isset($item['LINK']) ? htmlspecialchars($item['LINK']) : '#';

        $liClass = $isTop ? 'c-header--li__MENU' : 'c-header--li__SUBMENU';
        $aClass = $isTop ? 'c-header--a__MENU' : 'c-header--a__SUBMENU';
        if (!$hasChildren && !$isTop) {
            $aClass .= ' c-header--a__SUBMENU_EMPTY';
        }

        echo '<li class="' . $liClass . '">';
        if (!empty($item['PARAMS']['CSS_CLASS'])) {
            $aClass = htmlspecialchars($item['PARAMS']['CSS_CLASS']);
        }
        // Если есть подпункты — href не выводим (для любого уровня)
        if ($hasChildren) {
            echo '<a class="' . $aClass . '">';
        } else {
            echo '<a class="' . $aClass . '" href="' . $link . '">';
        }
        echo '<span>' . $title . '</span>';
        // Иконка-указатель для пунктов с дочерними
        if ($hasChildren) {
            echo \Site\Template::showSvg('/assets/images/svg/chevron-right.svg');
        }
        echo '</a>';

        if ($hasChildren) {
            echo '<div class="c-header--div__SUBMENU">';
            // Кнопка назад (отображаем заголовок текущего раздела)
            $backTitle = $title;
            if (function_exists('mb_strtoupper')) {
                $backTitle = mb_strtoupper($backTitle);
            } else {
                $backTitle = strtoupper($backTitle);
            }
            echo '<a class="c-header--a__SUBMENU_BACK">';
            echo \Site\Template::showSvg('/assets/images/svg/chevron-left.svg');
            echo '<span>' . $backTitle . '</span>';
            echo '</a>';

            // Дочерний список
            renderMenuItems($item['CHILDS'], false, $title);

            echo '</div>';
        }

        echo '</li>';
    }

    echo '</ul>';
}

renderMenuItems($arResult, true);