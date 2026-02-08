<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\UserField\TypeBase;

Loc::loadMessages(__FILE__);

/**
 * Список характеристик для пользовательских полей разделов
 * Поддерживает группы с названием и несколькими значениями
 */
class CharacteristicListSection extends TypeBase
{
    const USER_TYPE_ID = 'characteristic_list_section';
    const LOG_FILE = '/bitrix/logs/characteristic_list_section.log';

    /**
     * Логирование
     */
    private static function log($message, $data = [])
    {
        $logFile = $_SERVER['DOCUMENT_ROOT'] . self::LOG_FILE;
        $dir = dirname($logFile);
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $timestamp = date('Y-m-d H:i:s');
        $entry = "[{$timestamp}] {$message}\n";
        if (!empty($data)) {
            $entry .= print_r($data, true) . "\n";
        }
        $entry .= str_repeat('-', 80) . "\n";

        //file_put_contents($logFile, $entry, FILE_APPEND);
    }

    /**
     * Описание типа пользовательского поля
     */
    public static function GetUserTypeDescription()
    {
        self::log("GetUserTypeDescription вызван");

        $description = [
                'USER_TYPE_ID' => self::USER_TYPE_ID,
                'CLASS_NAME' => __CLASS__,
                'DESCRIPTION' => 'Список характеристик (для разделов)',
                'BASE_TYPE' => 'string',
                'EDIT_CALLBACK' => [__CLASS__, 'GetPublicEditHTML'],
                'VIEW_CALLBACK' => [__CLASS__, 'GetPublicViewHTML'],
                'SEARCH_CALLBACK' => [__CLASS__, 'OnSearch'],
                'MULTIPLE' => 'Y', // Множественное поле - каждое значение это одна группа
                'USER_TYPE' => 'Y', // Пользовательский тип
        ];

        self::log("Описание возвращено", $description);

        return $description;
    }

    /**
     * Тип данных в базе данных
     */
    public static function GetDBColumnType($arUserField)
    {
        self::log("GetDBColumnType вызван", [
            'arUserField' => $arUserField,
        ]);

        return 'text';
    }

    /**
     * Регистрация обработчика
     */
    public static function RegisterHandler()
    {
        \AddEventHandler('main', 'OnUserTypeBuildList', [__CLASS__, 'GetUserTypeDescription']);
    }

    /**
     * Указывает, что этот тип требует множественное хранение даже при одиночном поле
     */
    public static function PrepareSettings($arUserField)
    {
        return [];
    }

    /**
     * HTML для редактирования в админке
     */
    public static function GetEditFormHTML($arUserField, $arHtmlControl)
    {
        $fieldName = $arHtmlControl['NAME'];
        $isMultiple = ($arUserField['MULTIPLE'] ?? 'N') === 'Y';

        // Получаем данные группы
        $group = ['name' => '', 'values' => ['']];

        if (!empty($arHtmlControl['VALUE'])) {
            $decoded = htmlspecialchars_decode($arHtmlControl['VALUE'], ENT_QUOTES);
            $unserialized = unserialize($decoded, ['allowed_classes' => false]);
            if (is_array($unserialized)) {
                if ($isMultiple) {
                    $group = $unserialized;
                } else {
                    // Для одиночного поля берем первую группу, если она есть
                    $group = $unserialized[0] ?? $group;
                }
            }
        }

        $groupName = $group['name'] ?? '';
        $values = $group['values'] ?? [''];
        if (!is_array($values)) $values = [$values];

        ob_start();
        ?>
        <div class="characteristic-list-section-wrapper" data-field-name="<?php echo htmlspecialchars($fieldName); ?>">
            <div class="characteristic-group">
                <div class="group-header">
                    <input type="text" class="group-name-input" value="<?php echo htmlspecialchars($groupName); ?>" placeholder="Название характеристики" style="width: 300px;">
                    <button type="button" class="delete-group-btn">Удалить группу</button>
                </div>
                <div class="group-values">
                    <?php foreach ($values as $valueIndex => $val): ?>
                        <div class="value-item">
                            <input type="text" class="value-input" value="<?php echo htmlspecialchars($val); ?>" placeholder="Значение" style="width: 400px;">
                            <button type="button" class="delete-value-btn">×</button>
                        </div>
                    <?php endforeach; ?>
                    <button type="button" class="add-value-btn">+ Добавить значение</button>
                </div>
                <input type="hidden" class="field-name" data-field-name="<?php echo htmlspecialchars($fieldName); ?>" value="">
            </div>
        </div>

        <style>
            .characteristic-list-section-wrapper {
                margin: 10px 0;
            }
            .groups-container {
                margin-bottom: 15px;
            }
            .characteristic-group {
                border: 1px solid #d0d0d0;
                border-radius: 5px;
                padding: 15px;
                margin-bottom: 15px;
                background: #f9f9f9;
            }
            .group-header {
                display: flex;
                gap: 10px;
                align-items: center;
                margin-bottom: 10px;
                padding-bottom: 10px;
                border-bottom: 1px solid #e0e0e0;
            }
            .group-name-input {
                flex: 1;
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
            .characteristic-group.deleted {
                display: none;
            }
            .group-values {
                margin-left: 10px;
            }
            .value-item {
                display: flex;
                gap: 10px;
                margin-bottom: 8px;
                align-items: center;
            }
            .value-input {
                flex: 1;
            }
            .delete-value-btn {
                background: #ff5757;
                color: white;
                border: none;
                width: 24px;
                height: 24px;
                border-radius: 3px;
                cursor: pointer;
                font-size: 16px;
                line-height: 1;
            }
            .delete-value-btn:hover {
                background: #e64545;
            }
            .add-value-btn {
                background: #2fc6f6;
                color: white;
                border: none;
                padding: 5px 10px;
                border-radius: 3px;
                cursor: pointer;
                font-size: 12px;
                margin-top: 5px;
            }
            .add-value-btn:hover {
                background: #1db5e5;
            }
        </style>

        <script>
        // Глобальная инициализация (только один раз)
        if (typeof characteristicListSectionInitialized === 'undefined') {
            characteristicListSectionInitialized = true;

            // Перехват отправки формы - собираем данные и создаем скрытые поля
            document.addEventListener('submit', function(e) {
                const form = e.target;
                if (!form) return;

                // Собираем все группы по wrappers
                const wrappers = form.querySelectorAll('.characteristic-list-section-wrapper');
                wrappers.forEach(wrapper => {
                    const fieldName = wrapper.getAttribute('data-field-name');
                    if (!fieldName) return;

                    // Удаляем старые скрытые поля для этого fieldName
                    form.querySelectorAll('input[data-temp-field="' + fieldName + '"]').forEach(el => el.remove());

                    // Собираем все группы в этом wrapper (кроме удаленных)
                    const groups = [];
                    wrapper.querySelectorAll('.characteristic-group').forEach(group => {
                        // Пропускаем удаленные группы
                        if (group.classList.contains('deleted')) return;

                        const name = group.querySelector('.group-name-input').value;
                        const values = [];
                        group.querySelectorAll('.value-input').forEach(input => {
                            values.push(input.value);
                        });
                        groups.push({ name, values });
                    });

                    // Создаем скрытое поле с JSON данными
                    const hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';
                    hiddenInput.setAttribute('data-temp-field', fieldName);
                    hiddenInput.name = fieldName;
                    hiddenInput.value = JSON.stringify(groups);
                    form.appendChild(hiddenInput);
                });
            });

            // Делегирование событий на document
            document.addEventListener('click', function(e) {
                // Добавление значения
                if (e.target.classList.contains('add-value-btn')) {
                    const groupValues = e.target.closest('.group-values');
                    const newValue = document.createElement('div');
                    newValue.className = 'value-item';
                    newValue.innerHTML = `
                        <input type="text" class="value-input" value="" placeholder="Значение" style="width: 400px;">
                        <button type="button" class="delete-value-btn">×</button>
                    `;
                    e.target.insertAdjacentElement('beforebegin', newValue);
                }

                // Удаление значения
                if (e.target.classList.contains('delete-value-btn')) {
                    const valueItem = e.target.closest('.value-item');
                    const groupValues = valueItem.closest('.group-values');
                    if (groupValues.querySelectorAll('.value-item').length > 1) {
                        valueItem.remove();
                    } else {
                        valueItem.querySelector('.value-input').value = '';
                    }
                }

                // Удаление группы
                if (e.target.classList.contains('delete-group-btn')) {
                    const group = e.target.closest('.characteristic-group');
                    // Очищаем все поля
                    group.querySelector('.group-name-input').value = '';
                    group.querySelectorAll('.value-input').forEach(input => {
                        input.value = '';
                    });
                    // Скрываем группу через CSS класс
                    group.classList.add('deleted');
                }
            });
        }
        </script>
        <?php
        return ob_get_clean();
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
     * HTML для просмотра значения
     */
    public static function GetViewHTML($arUserField, $arHtmlControl)
    {
        if (empty($arHtmlControl['VALUE'])) {
            return '';
        }

        $values = $arHtmlControl['VALUE'];

        // Распаковываем сериализованные данные
        if (!is_array($values)) {
            $decodedValue = htmlspecialchars_decode($values, ENT_QUOTES);
            $values = unserialize($decodedValue, ['allowed_classes' => false]);
        }

        if (!is_array($values) || empty($values)) {
            return '';
        }

        $html = '<div style="margin: 10px 0;">';

        foreach ($values as $group) {
            $groupName = $group['name'] ?? '';
            $vals = $group['values'] ?? [];
            if (!is_array($vals)) $vals = [$vals];

            $filtered = array_filter($vals, function($v) { return trim($v) !== ''; });
            if (empty($filtered) && trim($groupName) === '') continue;

            $html .= '<div style="margin-bottom: 10px;">';
            if (trim($groupName) !== '') {
                $html .= '<strong>' . htmlspecialchars($groupName) . ':</strong> ';
            }
            $html .= implode(', ', array_map('htmlspecialchars', $filtered));
            $html .= '</div>';
        }

        $html .= '</div>';

        return $html;
    }

    /**
     * Подготовка значения к сохранению в БД
     */
    public static function OnBeforeSave($arUserField, $value)
    {
        self::log("OnBeforeSave вызван", [
            'value' => $value,
            'value_type' => gettype($value),
        ]);

        if (empty($value)) {
            self::log("Значение пустое, возвращаем пустую строку");
            return '';
        }

        // Пробуем декодировать JSON (новый формат из JavaScript)
        if (is_string($value)) {
            $jsonDecoded = json_decode($value, true);

            if (is_array($jsonDecoded) && json_last_error() === JSON_ERROR_NONE) {
                self::log("Успешно декодирован JSON", ['data' => $jsonDecoded]);

                // Фильтруем пустые группы
                $filteredGroups = [];
                foreach ($jsonDecoded as $group) {
                    if (!is_array($group)) continue;

                    $name = trim($group['name'] ?? '');
                    $vals = $group['values'] ?? [];
                    if (!is_array($vals)) $vals = [$vals];

                    // Фильтруем пустые значения
                    $filteredVals = array_filter($vals, function($v) {
                        return trim($v) !== '';
                    });

                    // Если есть имя или значения, сохраняем группу
                    if ($name !== '' || !empty($filteredVals)) {
                        $filteredGroups[] = [
                            'name' => $name,
                            'values' => array_values($filteredVals)
                        ];
                    }
                }

                if (empty($filteredGroups)) {
                    self::log("Все группы пустые, возвращаем пустую строку");
                    return '';
                }

                // Сохраняем как массив сериализованных групп
                $result = [];
                foreach ($filteredGroups as $group) {
                    $result[] = serialize($group);
                }

                self::log("Сохраняем группы", ['groups' => $filteredGroups]);

                // Для множественного поля возвращаем массив
                if (count($result) === 1) {
                    return $result[0];
                }
                return $result;
            }
        }

        // Если массив (старый формат для множественных полей)
        if (is_array($value)) {
            // Проверяем, есть ли хотя бы одно заполненное поле
            $hasValue = false;

            foreach ($value as $group) {
                if (!is_array($group)) continue;

                // Проверяем название
                if (trim($group['name'] ?? '') !== '') {
                    $hasValue = true;
                    break;
                }

                // Проверяем значения
                $vals = $group['values'] ?? [];
                if (!is_array($vals)) $vals = [$vals];

                foreach ($vals as $v) {
                    if (trim($v) !== '') {
                        $hasValue = true;
                        break 2;
                    }
                }
            }

            // Если все пустое - не сохраняем
            if (!$hasValue) {
                return '';
            }

            // Подготавливаем данные к сохранению
            $cleaned = [];
            foreach ($value as $group) {
                if (!is_array($group)) continue;

                $cleaned[] = [
                        'name' => $group['name'] ?? '',
                        'values' => $group['values'] ?? []
                ];
            }

            $serialized = serialize($cleaned);
            self::log("Сериализуем данные", [
                'cleaned' => $cleaned,
                'serialized' => $serialized,
            ]);

            return $serialized;
        }

        // Если значение строка - проверяем, может уже сериализовано
        if (is_string($value)) {
            self::log("Пытаемся unserialize строку", [
                'value' => $value,
                'length' => strlen($value)
            ]);

            // Пробуем сначала без декодирования
            $unserialized = unserialize($value, ['allowed_classes' => false]);

            if ($unserialized === false) {
                // Если не получилось, пробуем html_entity_decode
                self::log("unserialize failed, пробуем html_entity_decode");
                $decoded = html_entity_decode($value, ENT_QUOTES);
                $unserialized = unserialize($decoded, ['allowed_classes' => false]);
            }

            if ($unserialized === false) {
                // Пробуем htmlspecialchars_decode
                self::log("Все еще failed, пробуем htmlspecialchars_decode");
                $decoded = htmlspecialchars_decode($value, ENT_QUOTES);
                $unserialized = unserialize($decoded, ['allowed_classes' => false]);
            }

            if (is_array($unserialized)) {
                self::log("Значение успешно десериализовано", ['data' => $unserialized]);

                // Проверяем, есть ли хотя бы одно непустое значение
                $hasValue = false;

                // Определяем структуру: одна группа или массив групп
                if (isset($unserialized['name']) && isset($unserialized['values'])) {
                    // Это одна группа
                    self::log("Одна группа");
                    if (trim($unserialized['name']) !== '') {
                        $hasValue = true;
                    } else {
                        $vals = $unserialized['values'] ?? [];
                        if (!is_array($vals)) $vals = [$vals];
                        foreach ($vals as $v) {
                            if (trim($v) !== '') {
                                $hasValue = true;
                                break;
                            }
                        }
                    }
                } else {
                    // Это массив групп
                    self::log("Массив групп");
                    foreach ($unserialized as $group) {
                        if (!is_array($group)) continue;
                        if (trim($group['name'] ?? '') !== '') {
                            $hasValue = true;
                            break;
                        }
                        $vals = $group['values'] ?? [];
                        if (!is_array($vals)) $vals = [$vals];
                        foreach ($vals as $v) {
                            if (trim($v) !== '') {
                                $hasValue = true;
                                break 2;
                            }
                        }
                    }
                }

                if (!$hasValue) {
                    self::log("Все значения пустые, возвращаем пустую строку");
                    return '';
                }

                self::log("Значения валидны, сохраняем");
                // Сериализуем обратно и возвращаем
                return serialize($unserialized);
            }
        }

        self::log("Возвращаем пустую строку (не удалось обработать)");
        return '';
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

        // Распаковываем сериализованные данные
        if (!is_array($values)) {
            $decodedValue = htmlspecialchars_decode($values, ENT_QUOTES);
            $values = unserialize($decodedValue, ['allowed_classes' => false]);
        }

        if (!is_array($values) || empty($values)) {
            return '';
        }

        $count = count($values);
        $firstGroup = $values[0];

        $result = '<strong>' . $count . ' групп(ы)</strong><br>';

        if (!empty($firstGroup['name'])) {
            $result .= htmlspecialchars($firstGroup['name']) . ': ';
        }

        $vals = $firstGroup['values'] ?? [];
        if (!is_array($vals)) $vals = [$vals];

        $filtered = array_filter($vals, function($v) { return trim($v) !== ''; });
        if (!empty($filtered)) {
            $result .= implode(' | ', array_map('htmlspecialchars', array_slice($filtered, 0, 2)));
            if (count($filtered) > 2) {
                $result .= ' ...';
            }
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

        return '%' . trim($value) . '%';
    }

    /**
     * Проверка валидности значения
     */
    public static function CheckFields($arUserField, $value)
    {
        return [];
    }

    /**
     * Получение длины значения
     */
    public static function GetLength($arUserField, $value)
    {
        if (is_array($value)) {
            $length = 0;
            foreach ($value as $group) {
                if (!is_array($group)) continue;
                $length += mb_strlen($group['name'] ?? '');
                $vals = $group['values'] ?? [];
                foreach ($vals as $v) {
                    $length += mb_strlen($v);
                }
            }
            return $length;
        }

        return mb_strlen($value);
    }
}

// Регистрация обработчика
\CharacteristicListSection::RegisterHandler();
