<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\UserField\TypeBase;

Loc::loadMessages(__FILE__);
//define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log.txt");
/**
 * Множественные строки для пользовательских полей разделов
 *
 * Регистрация через:
 * AddEventHandler('main', 'OnUserTypeBuildList', ['SectionMultipleString', 'GetUserTypeDescription']);
 */
class SectionMultipleString extends TypeBase
{
    const USER_TYPE_ID = 'section_multiple_string';

    /**
     * Описание типа пользовательского поля
     */
    public static function GetUserTypeDescription()
    {
        return [
                'USER_TYPE_ID' => self::USER_TYPE_ID,
                'CLASS_NAME' => __CLASS__,
                'DESCRIPTION' => 'Множественные строки (для разделов)',
                'BASE_TYPE' => 'string',
                'EDIT_CALLBACK' => [__CLASS__, 'GetPublicEditHTML'],
                'VIEW_CALLBACK' => [__CLASS__, 'GetPublicViewHTML'],
                'SEARCH_CALLBACK' => [__CLASS__, 'OnSearch'],
        ];
    }

    /**
     * Регистрация обработчика
     */
    public static function RegisterHandler()
    {
        \AddEventHandler('main', 'OnUserTypeBuildList', [__CLASS__, 'GetUserTypeDescription']);
    }

    /**
     * Получение настроек поля по умолчанию
     */
    public static function PrepareSettings($arUserField)
    {
        $settings = [
                'count' => intval($arUserField['SETTINGS']['count'] ?? 3),
                'width' => intval($arUserField['SETTINGS']['width'] ?? 100),
                'rows' => intval($arUserField['SETTINGS']['rows'] ?? 1),
                'placeholder' => trim($arUserField['SETTINGS']['placeholder'] ?? ''),
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
     * HTML настроек пользовательского поля
     */
    public static function GetSettingsHTML($arUserField, $arHtmlControl, $bVarsFromForm)
    {
        $settings = self::PrepareSettings($arUserField);

        $html = '';

        // Количество полей в одной группе
        $html .= '<tr>';
        $html .= '<td>Количество полей в группе:</td>';
        $html .= '<td>';
        $html .= '<input type="number" name="' . htmlspecialchars($arHtmlControl['NAME']) . '[count]" ';
        $html .= 'value="' . $settings['count'] . '" min="1" max="50" style="width: 100px;">';
        $html .= '<br><small style="color: #777;">Укажите количество полей ввода в одной группе (1-50)</small>';
        $html .= '</td>';
        $html .= '</tr>';

        // Ширина полей
        $html .= '<tr>';
        $html .= '<td>Ширина полей (%):</td>';
        $html .= '<td>';
        $html .= '<input type="number" name="' . htmlspecialchars($arHtmlControl['NAME']) . '[width]" ';
        $html .= 'value="' . $settings['width'] . '" min="10" max="100" style="width: 100px;">';
        $html .= '<br><small style="color: #777;">Ширина поля в процентах (10-100)</small>';
        $html .= '</td>';
        $html .= '</tr>';

        // Количество строк (для textarea)
        $html .= '<tr>';
        $html .= '<td>Количество строк:</td>';
        $html .= '<td>';
        $html .= '<input type="number" name="' . htmlspecialchars($arHtmlControl['NAME']) . '[rows]" ';
        $html .= 'value="' . $settings['rows'] . '" min="1" max="20" style="width: 100px;">';
        $html .= '<br><small style="color: #777;">1 = обычное поле ввода, больше 1 = текстовая область</small>';
        $html .= '</td>';
        $html .= '</tr>';

        // Placeholder
        $html .= '<tr>';
        $html .= '<td>Placeholder:</td>';
        $html .= '<td>';
        $html .= '<input type="text" name="' . htmlspecialchars($arHtmlControl['NAME']) . '[placeholder]" ';
        $html .= 'value="' . htmlspecialchars($settings['placeholder']) . '" style="width: 300px;">';
        $html .= '<br><small style="color: #777;">Текст-подсказка (необязательно)</small>';
        $html .= '</td>';
        $html .= '</tr>';

        return $html;
    }

    /**
     * HTML для редактирования в админке
     */
    public static function GetEditFormHTML($arUserField, $arHtmlControl)
    {
        $settings = self::PrepareSettings($arUserField);
        $fieldCount = $settings['count'];
        $width = $settings['width'];
        $rows = $settings['rows'];
        $placeholder = htmlspecialchars($settings['placeholder']);

        // Получаем текущие значения
        $currentValues = [];

        // Приоритет: значение из arHtmlControl
        if (!empty($arHtmlControl['VALUE'])) {
            if (is_array($arHtmlControl['VALUE'])) {
                $currentValues = $arHtmlControl['VALUE'];
            } else {
                // VALUE может быть сериализованной строкой с HTML-entities
                $stringValue = (string)$arHtmlControl['VALUE'];
                // Декодируем HTML-entities
                $decodedValue = htmlspecialchars_decode($stringValue, ENT_QUOTES);
                $unserialized = unserialize($decodedValue, ['allowed_classes' => false]);
                if (is_array($unserialized)) {
                    $currentValues = $unserialized;
                }
            }
        }
        // Если пусто и поле множественное - пробуем извлечь из arUserField по индексу
        elseif ($arUserField['MULTIPLE'] == 'Y' && !empty($arUserField['VALUE'])) {
            // Извлекаем индекс из NAME (например, UF_FIELD[0] -> 0)
            $fieldName = $arUserField['FIELD_NAME'];
            $controlName = $arHtmlControl['NAME'];

            // Проверяем, соответствует ли controlName шаблону UF_FIELD[n]
            if (preg_match('/^' . preg_quote($fieldName, '/') . '\[(\d+)\]$/', $controlName, $matches)) {
                $index = intval($matches[1]);
                if (isset($arUserField['VALUE'][$index])) {
                    $val = $arUserField['VALUE'][$index];
                    if (is_array($val)) {
                        $currentValues = $val;
                    } else {
                        $unserialized = unserialize($val, ['allowed_classes' => false]);
                        if (is_array($unserialized)) {
                            $currentValues = $unserialized;
                        }
                    }
                }
            }
        }

        $fieldName = htmlspecialchars($arHtmlControl['NAME']);

        ob_start();
        ?>
        <div class="section-multiple-string-wrapper" data-field-count="<?php echo $fieldCount; ?>">
            <?php for ($i = 0; $i < $fieldCount; $i++): ?>
                <div class="section-multiple-string-item">
                    <span class="field-number"><?php echo $i + 1; ?>.</span>
                    <?php if ($rows > 1): ?>
                        <textarea
                                class="section-multiple-string-field"
                                name="<?php echo $fieldName; ?>[<?php echo $i; ?>]"
                                rows="<?php echo $rows; ?>"
                                style="width: <?php echo $width; ?>%;"
                                placeholder="<?php echo $placeholder; ?>"
                        ><?php echo isset($currentValues[$i]) ? htmlspecialchars($currentValues[$i]) : ''; ?></textarea>
                    <?php else: ?>
                        <input
                                type="text"
                                class="section-multiple-string-field"
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
            .section-multiple-string-wrapper {
                margin: 10px 0;
            }
            .section-multiple-string-item {
                display: flex;
                align-items: flex-start;
                margin-bottom: 8px;
                gap: 10px;
            }
            .section-multiple-string-item .field-number {
                min-width: 30px;
                font-weight: bold;
                color: #555;
                padding-top: 5px;
            }
            .section-multiple-string-field {
                flex: 1;
                max-width: 100%;
            }
        </style>
        <?php
        return ob_get_clean();
    }

    /**
     * HTML для просмотра значения
     */
    public static function GetViewHTML($arUserField, $arHtmlControl)
    {
        if (empty($arHtmlControl['VALUE'])) {
            return '';
        }

        $values = $arHtmlControl['VALUE'];

        // Для множественных полей VALUE может быть массивом уже распакованных значений
        // Или сериализованной строкой для одного значения

        // Проверяем специальный случай множественного поля
        if ($arUserField['MULTIPLE'] == 'Y' && is_array($values)) {
            // Для множественных полей показываем все группы
            $result = '';
            foreach ($values as $idx => $groupValue) {
                $groupValues = [];

                if (is_array($groupValue)) {
                    $groupValues = $groupValue;
                } else {
                    $unserialized = unserialize($groupValue, ['allowed_classes' => false]);
                    if (is_array($unserialized)) {
                        $groupValues = $unserialized;
                    } elseif (trim($groupValue ?? '') !== '') {
                        $groupValues = [$groupValue];
                    }
                }

                $filtered = array_filter($groupValues, function($val) {
                    return trim($val ?? '') !== '';
                });

                if (!empty($filtered)) {
                    $display = array_slice($filtered, 0, 3);
                    $result .= '<strong>Группа ' . ($idx + 1) . ':</strong> ';
                    $result .= implode(' | ', array_map('htmlspecialchars', $display));
                    if (count($filtered) > 3) {
                        $result .= ' ... (+' . (count($filtered) - 3) . ')';
                    }
                    $result .= '<br>';
                }
            }

            return $result ?: '';
        }

        // Распаковываем сериализованные данные
        if (!is_array($values)) {
            $unserialized = unserialize($values, ['allowed_classes' => false]);
            if (is_array($unserialized)) {
                $values = $unserialized;
            }
        }

        if (!is_array($values)) {
            return '';
        }

        // Очищаем пустые значения
        $filtered = array_filter($values, function($val) {
            return trim($val ?? '') !== '';
        });

        if (empty($filtered)) {
            return '';
        }

        // Показываем максимум 5 значений
        $display = array_slice($filtered, 0, 5);
        $result = '<ul style="margin: 0; padding-left: 20px;">';
        foreach ($display as $val) {
            $result .= '<li>' . htmlspecialchars($val) . '</li>';
        }
        $result .= '</ul>';

        if (count($filtered) > 5) {
            $result .= '<small style="color: #777;">... всего ' . count($filtered) . ' значений</small>';
        }

        return $result;
    }

    /**
     * HTML для публичной части (редактирование)
     */
    public static function GetPublicEditHTML($arUserField, $arHtmlControl)
    {
        return self::GetEditFormHTML($arUserField, $arHtmlControl);
    }

    /**
     * HTML для публичной части (просмотр)
     */
    public static function GetPublicViewHTML($arUserField, $arHtmlControl)
    {
        return self::GetViewHTML($arUserField, $arHtmlControl);
    }

    /**
     * Подготовка значения к сохранению в БД
     */
    public static function OnBeforeSave($arUserField, $value)
    {
        // ОТЛАДКА - раскомментируйте для проверки
        // AddMessage2Log(['OnBeforeSave INPUT' => $value, 'USER_FIELD' => $arUserField], 'section_multiple_string');

        // Если значение пустое
        if (empty($value)) {
            return '';
        }

        // Если значение уже массив (напрямую из формы)
        if (is_array($value)) {
            // Сначала проверяем, нет ли ключа VALUE (старый формат)
            if (isset($value['VALUE'])) {
                $val = $value['VALUE'];
                if (is_array($val)) {
                    // Проверяем, есть ли хотя бы одно непустое значение
                    $hasValue = false;
                    foreach ($val as $v) {
                        if (trim($v ?? '') !== '') {
                            $hasValue = true;
                            break;
                        }
                    }
                    // Если все пустые - не сохраняем
                    if (!$hasValue) {
                        return '';
                    }
                    // Сохраняем все значения, включая пустые - для сохранения позиций
                    return serialize(array_values($val));
                } elseif (is_string($val) && trim($val) !== '') {
                    // Может быть уже сериализовано
                    $unserialized = unserialize($val, ['allowed_classes' => false]);
                    if (is_array($unserialized)) {
                        return $val;
                    }
                    return serialize([$val]);
                }
                return '';
            }

            // Обрабатываем массив значений - сохраняем ВСЕ, включая пустые
            // Но только если есть хотя бы одно заполненное поле
            $values = [];
            $hasValue = false;

            foreach ($value as $v) {
                $strVal = $v ?? '';
                $values[] = $strVal;
                if (trim($strVal) !== '') {
                    $hasValue = true;
                }
            }

            // Если все поля пустые - не сохраняем
            if (!$hasValue) {
                return '';
            }

            // Переиндексируем для сохранения последовательности
            $values = array_values($values);

            // ОТЛАДКА
            // AddMessage2Log(['OnBeforeSave CLEANED' => $values], 'section_multiple_string');

            // Сериализуем массив
            $result = serialize($values);
            // AddMessage2Log(['OnBeforeSave RESULT' => $result], 'section_multiple_string');
            return $result;
        }

        // Если значение строка - проверяем, может уже сериализовано
        if (is_string($value)) {
            $unserialized = unserialize($value, ['allowed_classes' => false]);
            if (is_array($unserialized)) {
                return $value; // Уже сериализовано
            }

            // Иначе это простая строка - заворачиваем в массив
            if (trim($value) !== '') {
                return serialize([$value]);
            }
        }

        return '';
    }

    /**
     * Получение значения из БД
     */
    public static function GetDBFormat($arUserField, $value)
    {
        if (empty($value)) {
            return [];
        }

        if (!is_array($value)) {
            $value = unserialize($value, ['allowed_classes' => false]);
            if (!is_array($value)) {
                return [];
            }
        }

        return $value;
    }

    /**
     * HTML для отображения в списке (таблица)
     */
    public static function GetAdminListViewHTML($arUserField, $arHtmlControl)
    {
        if (empty($arHtmlControl['VALUE'])) {
            return '';
        }

        $values = $arHtmlControl['VALUE'];

        // Для множественных полей VALUE может быть массивом уже распакованных значений
        if ($arUserField['MULTIPLE'] == 'Y' && is_array($values)) {
            $count = 0;
            $firstGroup = [];

            // Берем первую группу для отображения
            foreach ($values as $groupValue) {
                if (is_array($groupValue)) {
                    $groupValues = $groupValue;
                } else {
                    $unserialized = unserialize($groupValue, ['allowed_classes' => false]);
                    $groupValues = is_array($unserialized) ? $unserialized : [$groupValue];
                }

                $filtered = array_filter($groupValues, function($val) {
                    return trim($val ?? '') !== '';
                });

                if (!empty($filtered) && $count == 0) {
                    $firstGroup = array_values($filtered);
                }

                $count++;
            }

            if ($count == 0) {
                return '';
            }

            $result = '<strong>' . $count . ' групп(ы)</strong><br>';

            // Показываем первую группу
            $display = array_slice($firstGroup, 0, 3);
            $result .= implode(' | ', array_map('htmlspecialchars', $display));

            if (count($firstGroup) > 3) {
                $result .= ' ... (+' . (count($firstGroup) - 3) . ')';
            }

            return $result;
        }

        // Распаковываем сериализованные данные
        if (!is_array($values)) {
            $unserialized = unserialize($values, ['allowed_classes' => false]);
            if (is_array($unserialized)) {
                $values = $unserialized;
            }
        }

        if (!is_array($values)) {
            return '';
        }

        // Очищаем пустые значения
        $filtered = array_filter($values, function($val) {
            return trim($val ?? '') !== '';
        });

        if (empty($filtered)) {
            return '';
        }

        // Показываем максимум 3 значения
        $display = array_slice($filtered, 0, 3);
        $result = implode(' | ', array_map('htmlspecialchars', $display));

        if (count($filtered) > 3) {
            $result .= ' ... (всего: ' . count($filtered) . ')';
        }

        return $result;
    }

    /**
     * HTML для фильтра
     */
    public static function GetFilterHTML($arUserField, $arHtmlControl)
    {
        $fieldName = htmlspecialchars($arHtmlControl['NAME']);

        ob_start();
        ?>
        <input
                type="text"
                name="<?php echo $fieldName; ?>"
                value="<?php echo htmlspecialchars($arHtmlControl['VALUE'] ?? ''); ?>"
                style="width: 100%;"
                placeholder="Поиск по значениям..."
        >
        <?php
        return ob_get_clean();
    }

    /**
     * Поиск по значению
     */
    public static function OnSearch($arUserField, $value)
    {
        if (empty($value)) {
            return '';
        }

        // Ищем по сериализованным данным
        $searchValues = [];
        if (is_array($value)) {
            $searchValues = $value;
        } else {
            $searchValues[] = $value;
        }

        $result = [];
        foreach ($searchValues as $val) {
            $result[] = '%' . trim($val) . '%';
        }

        return $result;
    }

    /**
     * Проверка валидности значения
     */
    public static function CheckFields($arUserField, $value)
    {
        // Значение всегда валидно (можно добавить свою логику)
        return [];
    }

    /**
     * Получение длины значения
     */
    public static function GetLength($arUserField, $value)
    {
        if (is_array($value)) {
            $length = 0;
            foreach ($value as $val) {
                $length += mb_strlen($val);
            }
            return $length;
        }

        return mb_strlen($value);
    }
}

// Регистрация обработчика
\SectionMultipleString::RegisterHandler();
