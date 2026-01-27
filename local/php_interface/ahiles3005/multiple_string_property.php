<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Loader;

Loc::loadMessages(__FILE__);

/**
 * Множественные строки вместо одного
 * Кастомный тип свойства инфоблока
 */
class MultipleString
{
    const USER_TYPE = 'CustomMultipleString';

    /**
     * Регистрация типа свойства
     */
    public static function GetIBlockPropertyDescription()
    {
        return [
                'PROPERTY_TYPE' => 'S',
                'USER_TYPE' => self::USER_TYPE,
                'DESCRIPTION' => 'Множественные строки',
                'CHECK_CREDENTIALS' => 'N',
                'ConvertFromDB' => [__CLASS__, 'ConvertFromDB'],
                'ConvertToDB' => [__CLASS__, 'ConvertToDB'],
                'GetPropertyFieldHtml' => [__CLASS__, 'GetPropertyFieldHtml'],
                'GetPropertyFieldHtmlMulty' => [__CLASS__, 'GetPropertyFieldHtmlMulty'],
                'GetAdminListViewHTML' => [__CLASS__, 'GetAdminListViewHTML'],
                'GetSettingsHTML' => [__CLASS__, 'GetSettingsHTML'],
                'PrepareSettings' => [__CLASS__, 'PrepareSettings'],
                'GetLength' => [__CLASS__, 'GetLength'],
        ];
    }

    /**
     * Регистрация обработчика
     */
    public static function RegisterHandler()
    {
        \AddEventHandler('iblock', 'OnIBlockPropertyBuildList', [__CLASS__, 'GetIBlockPropertyDescription']);
    }

    /**
     * Подготовка настроек свойства
     */
    public static function PrepareSettings($arProperty)
    {
        $settings = [
                'count' => intval($arProperty['USER_TYPE_SETTINGS']['count'] ?? 3),
                'width' => intval($arProperty['USER_TYPE_SETTINGS']['width'] ?? 100),
                'rows' => intval($arProperty['USER_TYPE_SETTINGS']['rows'] ?? 1),
                'placeholder' => trim($arProperty['USER_TYPE_SETTINGS']['placeholder'] ?? ''),
        ];

        // Минимум 1 поле
        if ($settings['count'] < 1) {
            $settings['count'] = 1;
        }

        // Максимум 50 полей
        if ($settings['count'] > 50) {
            $settings['count'] = 50;
        }

        return $settings;
    }

    /**
     * HTML настроек свойства
     */
    public static function GetSettingsHTML($arProperty, $strHTMLControlName, &$arPropertyFields)
    {
        $settings = self::PrepareSettings($arProperty);

        $html = '';

        // Количество полей в одной группе
        $html .= '<tr>';
        $html .= '<td>Количество полей в группе:</td>';
        $html .= '<td>';
        $html .= '<input type="number" name="' . htmlspecialchars($strHTMLControlName['NAME']) . '[count]" ';
        $html .= 'value="' . $settings['count'] . '" min="1" max="50" style="width: 100px;">';
        $html .= '<br><small class="note">Укажите количество полей ввода в одной группе (1-50)</small>';
        $html .= '</td>';
        $html .= '</tr>';

        // Ширина полей
        $html .= '<tr>';
        $html .= '<td>Ширина полей (%):</td>';
        $html .= '<td>';
        $html .= '<input type="number" name="' . htmlspecialchars($strHTMLControlName['NAME']) . '[width]" ';
        $html .= 'value="' . $settings['width'] . '" min="10" max="100" style="width: 100px;">';
        $html .= '<br><small class="note">Ширина поля в процентах (10-100)</small>';
        $html .= '</td>';
        $html .= '</tr>';

        // Количество строк (для textarea)
        $html .= '<tr>';
        $html .= '<td>Количество строк:</td>';
        $html .= '<td>';
        $html .= '<input type="number" name="' . htmlspecialchars($strHTMLControlName['NAME']) . '[rows]" ';
        $html .= 'value="' . $settings['rows'] . '" min="1" max="20" style="width: 100px;">';
        $html .= '<br><small class="note">1 = обычное поле ввода, больше 1 = текстовая область</small>';
        $html .= '</td>';
        $html .= '</tr>';

        // Placeholder
        $html .= '<tr>';
        $html .= '<td>Placeholder:</td>';
        $html .= '<td>';
        $html .= '<input type="text" name="' . htmlspecialchars($strHTMLControlName['NAME']) . '[placeholder]" ';
        $html .= 'value="' . htmlspecialchars($settings['placeholder']) . '" style="width: 300px;">';
        $html .= '<br><small class="note">Текст-подсказка (необязательно)</small>';
        $html .= '</td>';
        $html .= '</tr>';

        return $html;
    }

    /**
     * Конвертация из БД
     */
    public static function ConvertFromDB($arProperty, $value)
    {
        if (!is_array($value)) {
            $value = unserialize($value, ['allowed_classes' => false]);
            if (!is_array($value)) {
                $value = [];
            }
        }

        return $value;
    }

    /**
     * Конвертация в БД
     */
    public static function ConvertToDB($arProperty, $value)
    {
        if (!is_array($value)) {
            $value = [];
        }

        return serialize($value);
    }

    /**
     * HTML для НЕ множественного свойства (одна группа)
     */
    public static function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
        $settings = self::PrepareSettings($arProperty);
        $fieldCount = $settings['count'];
        $width = $settings['width'];
        $rows = $settings['rows'];
        $placeholder = htmlspecialchars($settings['placeholder']);

        // Получаем текущие значения
        $currentValues = [];
        if (!empty($value['VALUE'])) {
            if (is_array($value['VALUE'])) {
                $currentValues = $value['VALUE'];
            } else {
                $currentValues = unserialize($value['VALUE'], ['allowed_classes' => false]);
                if (!is_array($currentValues)) {
                    $currentValues = [];
                }
            }
        }

        $fieldName = htmlspecialchars($strHTMLControlName['VALUE']);

        ob_start();
        ?>
        <div class="custom-multiple-string-wrapper" data-field-count="<?php echo $fieldCount; ?>">
            <?php for ($i = 0; $i < $fieldCount; $i++): ?>
                <div class="custom-multiple-string-item">
                    <span class="field-number"><?php echo $i + 1; ?>.</span>
                    <?php if ($rows > 1): ?>
                        <textarea
                                class="custom-multiple-string-field"
                                name="<?php echo $fieldName; ?>[<?php echo $i; ?>]"
                                rows="<?php echo $rows; ?>"
                                style="width: <?php echo $width; ?>%;"
                                placeholder="<?php echo $placeholder; ?>"
                        ><?php echo isset($currentValues[$i]) ? htmlspecialchars($currentValues[$i]) : ''; ?></textarea>
                    <?php else: ?>
                        <input
                                type="text"
                                class="custom-multiple-string-field"
                                name="<?php echo $fieldName; ?>[<?php echo $i; ?>]"
                                value="<?php echo isset($currentValues[$i]) ? htmlspecialchars($currentValues[$i]) : ''; ?>"
                                style="width: <?php echo $width; ?>%;"
                                placeholder="<?php echo $placeholder; ?>"
                        >
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>

        <style>
            .custom-multiple-string-wrapper {
                margin: 10px 0;
            }
            .custom-multiple-string-item {
                display: flex;
                align-items: flex-start;
                margin-bottom: 8px;
                gap: 10px;
            }
            .custom-multiple-string-item .field-number {
                min-width: 30px;
                font-weight: bold;
                color: #555;
                padding-top: 5px;
            }
            .custom-multiple-string-field {
                flex: 1;
                max-width: 100%;
            }
        </style>
        <?php
        return ob_get_clean();
    }

    /**
     * HTML для множественного свойства (несколько групп)
     */
    public static function GetPropertyFieldHtmlMulty($arProperty, $value, $strHTMLControlName)
    {
        $settings = self::PrepareSettings($arProperty);
        $fieldCount = $settings['count'];
        $width = $settings['width'];
        $rows = $settings['rows'];
        $placeholder = htmlspecialchars($settings['placeholder']);

        // Получаем текущие группы значений
        $groups = [];
        if (!empty($value['VALUE']) && is_array($value['VALUE'])) {
            foreach ($value['VALUE'] as $val) {
                if (is_array($val)) {
                    $groups[] = $val;
                } else {
                    $unserialized = unserialize($val, ['allowed_classes' => false]);
                    if (is_array($unserialized)) {
                        $groups[] = $unserialized;
                    } else {
                        $groups[] = [$val];
                    }
                }
            }
        }

        // Если нет групп, добавляем одну пустую
        if (empty($groups)) {
            $groups[] = [];
        }

        $fieldNameBase = htmlspecialchars($strHTMLControlName['VALUE']);

        ob_start();
        ?>
        <div class="custom-multiple-string-multy-wrapper" data-field-count="<?php echo $fieldCount; ?>">
            <div class="groups-container">
                <?php foreach ($groups as $groupIndex => $groupValues): ?>
                    <div class="custom-multiple-string-group" data-group-index="<?php echo $groupIndex; ?>">
                        <div class="group-header">
                            <span class="group-title">Группа <?php echo $groupIndex + 1; ?></span>
                            <button type="button" class="delete-group-btn">Удалить группу</button>
                        </div>
                        <div class="group-fields">
                            <?php for ($i = 0; $i < $fieldCount; $i++): ?>
                                <div class="custom-multiple-string-item">
                                    <span class="field-number"><?php echo $i + 1; ?>.</span>
                                    <?php
                                    $fieldValue = isset($groupValues[$i]) ? $groupValues[$i] : '';
                                    ?>
                                    <?php if ($rows > 1): ?>
                                        <textarea
                                                class="custom-multiple-string-field"
                                                name="<?php echo $fieldNameBase; ?>[<?php echo $groupIndex; ?>][<?php echo $i; ?>]"
                                                rows="<?php echo $rows; ?>"
                                                style="width: <?php echo $width; ?>%;"
                                                placeholder="<?php echo $placeholder; ?>"
                                        ><?php echo htmlspecialchars($fieldValue); ?></textarea>
                                    <?php else: ?>
                                        <input
                                                type="text"
                                                class="custom-multiple-string-field"
                                                name="<?php echo $fieldNameBase; ?>[<?php echo $groupIndex; ?>][<?php echo $i; ?>]"
                                                value="<?php echo htmlspecialchars($fieldValue); ?>"
                                                style="width: <?php echo $width; ?>%;"
                                                placeholder="<?php echo $placeholder; ?>"
                                        >
                                    <?php endif; ?>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <button type="button" class="add-group-btn">+ Добавить группу</button>
        </div>

        <style>
            .custom-multiple-string-multy-wrapper {
                margin: 10px 0;
            }
            .groups-container {
                margin-bottom: 15px;
            }
            .custom-multiple-string-group {
                border: 1px solid #d0d0d0;
                border-radius: 5px;
                padding: 15px;
                margin-bottom: 15px;
                background: #f9f9f9;
            }
            .group-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px;
                padding-bottom: 10px;
                border-bottom: 1px solid #e0e0e0;
            }
            .group-title {
                font-weight: bold;
                color: #333;
                font-size: 14px;
            }
            .delete-group-btn {
                background: #ff5757;
                color: white;
                border: none;
                padding: 5px 10px;
                border-radius: 3px;
                cursor: pointer;
                font-size: 12px;
            }
            .delete-group-btn:hover {
                background: #e64545;
            }
            .group-fields {
                margin-left: 10px;
            }
            .custom-multiple-string-item {
                display: flex;
                align-items: flex-start;
                margin-bottom: 8px;
                gap: 10px;
            }
            .custom-multiple-string-item .field-number {
                min-width: 30px;
                font-weight: bold;
                color: #555;
                padding-top: 5px;
            }
            .custom-multiple-string-field {
                flex: 1;
                max-width: 100%;
            }
            .add-group-btn {
                background: #2fc6f6;
                color: white;
                border: none;
                padding: 8px 15px;
                border-radius: 3px;
                cursor: pointer;
                font-size: 14px;
            }
            .add-group-btn:hover {
                background: #1db5e5;
            }
        </style>

        <script>
            (function() {
                const wrapper = document.querySelector('.custom-multiple-string-multy-wrapper');
                if (!wrapper) return;

                const container = wrapper.querySelector('.groups-container');
                const addBtn = wrapper.querySelector('.add-group-btn');
                const fieldCount = parseInt(wrapper.dataset.fieldCount);
                const fieldNameBase = wrapper.querySelector('.custom-multiple-string-group input, .custom-multiple-string-group textarea').name.match(/^(.+)\[\d+\]\[\d+\]$/)[1];

                let groupIndex = wrapper.querySelectorAll('.custom-multiple-string-group').length;

                // Добавление новой группы
                addBtn.addEventListener('click', function() {
                    const newGroup = document.createElement('div');
                    newGroup.className = 'custom-multiple-string-group';
                    newGroup.dataset.groupIndex = groupIndex;

                    let fieldsHTML = '';
                    for (let i = 0; i < fieldCount; i++) {
                        fieldsHTML += `
                        <div class="custom-multiple-string-item">
                            <span class="field-number">${i + 1}.</span>
                            <input
                                type="text"
                                class="custom-multiple-string-field"
                                name="${fieldNameBase}[${groupIndex}][${i}]"
                                value=""
                                style="width: 100%;"
                                placeholder=""
                            >
                        </div>
                    `;
                    }

                    newGroup.innerHTML = `
                    <div class="group-header">
                        <span class="group-title">Группа ${groupIndex + 1}</span>
                        <button type="button" class="delete-group-btn">Удалить группу</button>
                    </div>
                    <div class="group-fields">
                        ${fieldsHTML}
                    </div>
                `;

                    container.appendChild(newGroup);
                    groupIndex++;
                    updateGroupNumbers();
                });

                // Удаление группы
                container.addEventListener('click', function(e) {
                    if (e.target.classList.contains('delete-group-btn')) {
                        const group = e.target.closest('.custom-multiple-string-group');
                        if (container.querySelectorAll('.custom-multiple-string-group').length > 1) {
                            group.remove();
                            updateGroupNumbers();
                        } else {
                            alert('Должна остаться минимум одна группа!');
                        }
                    }
                });

                // Обновление номеров групп
                function updateGroupNumbers() {
                    const groups = container.querySelectorAll('.custom-multiple-string-group');
                    groups.forEach((group, index) => {
                        const title = group.querySelector('.group-title');
                        if (title) {
                            title.textContent = 'Группа ' + (index + 1);
                        }
                    });
                }
            })();
        </script>
        <?php
        return ob_get_clean();
    }

    /**
     * HTML для отображения в списке админки
     */
    public static function GetAdminListViewHTML($arProperty, $value, $strHTMLControlName)
    {
        if (empty($value['VALUE'])) {
            return '';
        }

        $values = $value['VALUE'];
        if (!is_array($values)) {
            $values = unserialize($values, ['allowed_classes' => false]);
        }

        if (!is_array($values)) {
            return '';
        }

        // Проверяем, это множественное свойство или нет
        $isMultiple = $arProperty['MULTIPLE'] == 'Y';

        if ($isMultiple) {
            // Множественное свойство - показываем количество групп
            $groups = [];
            foreach ($values as $val) {
                if (is_array($val)) {
                    $groups[] = $val;
                } else {
                    $unserialized = unserialize($val, ['allowed_classes' => false]);
                    if (is_array($unserialized)) {
                        $groups[] = $unserialized;
                    }
                }
            }

            if (empty($groups)) {
                return '';
            }

            $result = '<strong>' . count($groups) . ' групп(ы)</strong><br>';

            // Показываем первую группу
            $firstGroup = $groups[0];
            $filtered = array_filter($firstGroup, function($val) {
                return trim($val) !== '';
            });

            if (!empty($filtered)) {
                $result .= implode(' | ', array_map('htmlspecialchars', array_slice($filtered, 0, 3)));
                if (count($filtered) > 3) {
                    $result .= ' ...';
                }
            }

            return $result;
        } else {
            // Одиночное свойство
            if (!is_array($values)) {
                return htmlspecialchars($values);
            }

            $filtered = array_filter($values, function($val) {
                return trim($val) !== '';
            });

            if (empty($filtered)) {
                return '';
            }

            $display = array_slice($filtered, 0, 3);
            $result = implode(' | ', array_map('htmlspecialchars', $display));

            if (count($filtered) > 3) {
                $result .= ' ... (всего: ' . count($filtered) . ')';
            }

            return $result;
        }
    }

    /**
     * Получение длины значения
     */
    public static function GetLength($arProperty, $value)
    {
        if (is_array($value)) {
            $length = 0;
            foreach ($value as $val) {
                if (is_array($val)) {
                    foreach ($val as $v) {
                        $length += mb_strlen($v);
                    }
                } else {
                    $length += mb_strlen($val);
                }
            }
            return $length;
        }

        return mb_strlen($value);
    }
}

// Регистрация обработчика
\MultipleString::RegisterHandler();
