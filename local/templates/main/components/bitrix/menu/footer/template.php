<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

// Рекурсивный рендер пунктов меню для футера (уровни и классы отличаются от шапки)
/**
 * @param array $items
 * @param int $level
 * @return void
 */
function renderFooterMenuItems(array $items, $level = 1)
{
    if (empty($items)) {
        return;
    }

    // Карта классов UL по уровню меню
    // 1-й уровень: блоки разделов → далее рисуем список 2-го уровня
    // 2-й уровень: список подразделов
    // 3+ уровни: списки-подразделы того же типа, что и 3-й
    $ulClass = $level === 2 ? 'c-footer--ul__2' : 'c-footer--ul__3';
    if ($level === 1) {
        // На 1-м уровне списки не рисуем сразу — сначала шапка раздела, потом ul 2-го уровня
        foreach ($items as $item) {
            $hasChildren = !empty($item['CHILDS']);
            $title = htmlspecialchars($item['TEXT']);
            $link = isset($item['LINK']) ? htmlspecialchars($item['LINK']) : '#';

            echo '<div class="c-footer--div__01">';
            echo '<div class="c-footer--div__1">';

            $aClass = 'c-footer--a__1';
            if (!empty($item['PARAMS']['CSS_CLASS'])) {
                $aClass = htmlspecialchars($item['PARAMS']['CSS_CLASS']);
            }

            if ($hasChildren) {
                echo '<a class="' . $aClass . '">';
            } else {
                echo '<a class="' . $aClass . '" href="' . $link . '">';
            }
            echo $title;
            echo '</a>';

            if ($hasChildren) {
                echo '<button class="c-footer--button__1">';
                echo \Site\Template::showSvg('/assets/images/svg/chevron-down.svg');
                echo '</button>';
                echo '<div class="c-footer--div__LINE"></div>';
            }

            echo '</div>';

            if ($hasChildren) {
                // Рисуем 2-й уровень (подразделы)
                echo '<ul class="c-footer--ul__2">';
                foreach ($item['CHILDS'] as $child) {
                    $childHasChildren = !empty($child['CHILDS']);
                    $childTitle = htmlspecialchars($child['TEXT']);
                    $childLink = isset($child['LINK']) ? htmlspecialchars($child['LINK']) : '#';

                    echo '<li class="c-footer--li__2">';
                    echo '<div class="c-footer--div__2">';

                    $childAClass = 'c-footer--a__2';
                    if (!empty($child['PARAMS']['CSS_CLASS'])) {
                        $childAClass = htmlspecialchars($child['PARAMS']['CSS_CLASS']);
                    }

                    if ($childHasChildren) {
                        echo '<a class="' . $childAClass . '">';
                    } else {
                        echo '<a class="' . $childAClass . '" href="' . $childLink . '">';
                    }
                    echo $childTitle;
                    echo '</a>';

                    if ($childHasChildren) {
                        echo '<button class="c-footer--button__2">';
                        echo \Site\Template::showSvg('/assets/images/svg/chevron-down.svg');
                        echo '</button>';
                    }

                    echo '</div>';

                    if ($childHasChildren) {
                        // 3-й уровень и глубже — простой список ссылок
                        renderFooterMenuItems($child['CHILDS'], 3);
                    }

                    echo '</li>';
                }
                echo '</ul>';
            }

            echo '</div>';
        }
        return;
    }

    // Уровни 2+ рисуем как списки ссылок
    echo '<ul class="' . $ulClass . '">';
    foreach ($items as $item) {
        $hasChildren = !empty($item['CHILDS']);
        $title = htmlspecialchars($item['TEXT']);
        $link = isset($item['LINK']) ? htmlspecialchars($item['LINK']) : '#';

        $liClass = $level === 2 ? 'c-footer--li__2' : 'c-footer--li__3';
        $aClass = $level === 2 ? 'c-footer--a__2' : 'c-footer--a__3';
        $divClass = $level === 2 ? 'c-footer--div__2' : 'c-footer--div__3';

        echo '<li class="' . $liClass . '">';

        if ($level === 2) {
            echo '<div class="' . $divClass . '">';
            if (!empty($item['PARAMS']['CSS_CLASS'])) {
                $aClass = htmlspecialchars($item['PARAMS']['CSS_CLASS']);
            }
            if ($hasChildren) {
                echo '<a class="' . $aClass . '">';
            } else {
                echo '<a class="' . $aClass . '" href="' . $link . '">';
            }
            echo $title;
            echo '</a>';
            if ($hasChildren) {
                echo '<button class="c-footer--button__2">';
                echo \Site\Template::showSvg('/assets/images/svg/chevron-down.svg');
                echo '</button>';
            }
            echo '</div>';
        } else {
            if (!empty($item['PARAMS']['CSS_CLASS'])) {
                $aClass = htmlspecialchars($item['PARAMS']['CSS_CLASS']);
            }
            echo '<div class="' . $divClass . '">';
            echo '<a class="' . $aClass . '" href="' . $link . '">';
            echo $title;
            echo '</a>';
            echo '</div>';
        }

        if ($hasChildren) {
            renderFooterMenuItems($item['CHILDS'], $level + 1);
        }

        echo '</li>';
    }
    echo '</ul>';
}

// Внешний контейнер задаётся в footer.php.
// Колонки: первая запись — отдельная колонка, далее по 2 записи в колонке.
if (!empty($arResult)) {
    // Первая колонка: только первый пункт
    echo '<div class="c-footer--div__COL">';
    renderFooterMenuItems([ $arResult[0] ], 1);
    echo '</div>';

    // Остальные: группируем по 2
    $remaining = array_slice($arResult, 1);
    if (!empty($remaining)) {
        $chunks = array_chunk($remaining, 2);
        foreach ($chunks as $chunk) {
            echo '<div class="c-footer--div__COL">';
            renderFooterMenuItems($chunk, 1);
            echo '</div>';
        }
    }
}


