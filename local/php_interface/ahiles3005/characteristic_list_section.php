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

    /**
     * Описание типа пользовательского поля
     */
    public static function GetUserTypeDescription()
    {
        return [
                'USER_TYPE_ID' => self::USER_TYPE_ID,
                'CLASS_NAME' => __CLASS__,
                'DESCRIPTION' => 'Список характеристик (для разделов)',
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
     * HTML для редактирования в админке
     */
    public static function GetEditFormHTML($arUserField, $arHtmlControl)
    {
        $fieldName = htmlspecialchars($arHtmlControl['NAME']);

        // Получаем текущие значения
        $groups = [];
        if (!empty($arHtmlControl['VALUE'])) {
            if (is_array($arHtmlControl['VALUE'])) {
                $groups = $arHtmlControl['VALUE'];
            } else {
                $decodedValue = htmlspecialchars_decode($arHtmlControl['VALUE'], ENT_QUOTES);
                $unserialized = unserialize($decodedValue, ['allowed_classes' => false]);
                if (is_array($unserialized)) {
                    $groups = $unserialized;
                }
            }
        }

        // Если нет групп, добавляем одну пустую
        if (empty($groups)) {
            $groups[] = ['name' => '', 'values' => ['']];
        }

        ob_start();
        ?>
        <div class="characteristic-list-section-wrapper">
            <div class="groups-container">
                <?php foreach ($groups as $groupIndex => $group): ?>
                    <?php
                    $groupName = $group['name'] ?? '';
                    $values = $group['values'] ?? [''];
                    if (!is_array($values)) $values = [$values];
                    ?>
                    <div class="characteristic-group" data-group-index="<?php echo $groupIndex; ?>">
                        <div class="group-header">
                            <input
                                    type="text"
                                    class="group-name-input"
                                    name="<?php echo $fieldName; ?>[<?php echo $groupIndex; ?>][name]"
                                    value="<?php echo htmlspecialchars($groupName); ?>"
                                    placeholder="Название характеристики"
                                    style="width: 300px;"
                            >
                            <button type="button" class="delete-group-btn">Удалить группу</button>
                        </div>
                        <div class="group-values">
                            <?php foreach ($values as $valueIndex => $val): ?>
                                <div class="value-item">
                                    <input
                                            type="text"
                                            class="value-input"
                                            name="<?php echo $fieldName; ?>[<?php echo $groupIndex; ?>][values][<?php echo $valueIndex; ?>]"
                                            value="<?php echo htmlspecialchars($val); ?>"
                                            placeholder="Значение"
                                            style="width: 400px;"
                                    >
                                    <button type="button" class="delete-value-btn">×</button>
                                </div>
                            <?php endforeach; ?>
                            <button type="button" class="add-value-btn">+ Добавить значение</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="button" class="add-group-btn">+ Добавить группу</button>
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
                const wrapper = document.querySelector('.characteristic-list-section-wrapper');
                if (!wrapper) return;

                const container = wrapper.querySelector('.groups-container');
                const addGroupBtn = wrapper.querySelector('.add-group-btn');

                let groupIndex = wrapper.querySelectorAll('.characteristic-group').length;

                // Добавление новой группы
                addGroupBtn.addEventListener('click', function() {
                    const newGroup = document.createElement('div');
                    newGroup.className = 'characteristic-group';
                    newGroup.dataset.groupIndex = groupIndex;

                    const firstInput = wrapper.querySelector('.group-name-input');
                    if (!firstInput) return;

                    const fieldNameMatch = firstInput.name.match(/^(.+)\]\[\d+\]\[name\]$/);
                    if (!fieldNameMatch) return;
                    const fieldNameBase = fieldNameMatch[1];

                    newGroup.innerHTML = `
						<div class="group-header">
							<input
								type="text"
								class="group-name-input"
								name="${fieldNameBase}[${groupIndex}][name]"
								value=""
								placeholder="Название характеристики"
								style="width: 300px;"
							>
							<button type="button" class="delete-group-btn">Удалить группу</button>
						</div>
						<div class="group-values">
							<div class="value-item">
								<input
									type="text"
									class="value-input"
									name="${fieldNameBase}[${groupIndex}][values][0]"
									value=""
									placeholder="Значение"
									style="width: 400px;"
								>
								<button type="button" class="delete-value-btn">×</button>
							</div>
							<button type="button" class="add-value-btn">+ Добавить значение</button>
						</div>
					`;

                    container.appendChild(newGroup);
                    groupIndex++;
                });

                // Удаление группы
                container.addEventListener('click', function(e) {
                    if (e.target.classList.contains('delete-group-btn')) {
                        const group = e.target.closest('.characteristic-group');
                        if (container.querySelectorAll('.characteristic-group').length > 1) {
                            group.remove();
                        } else {
                            alert('Должна остаться минимум одна группа!');
                        }
                    }
                });

                // Добавление значения
                container.addEventListener('click', function(e) {
                    if (e.target.classList.contains('add-value-btn')) {
                        const groupValues = e.target.closest('.group-values');

                        const valueInput = groupValues.querySelector('.value-input');
                        if (!valueInput) return;

                        const fieldNameMatch = valueInput.name.match(/^(.+)\]\[values\]\[\d+\]$/);
                        if (!fieldNameMatch) return;
                        const fieldNameBase = fieldNameMatch[1];
                        const valueIndex = groupValues.querySelectorAll('.value-item').length;

                        const newValue = document.createElement('div');
                        newValue.className = 'value-item';
                        newValue.innerHTML = `
							<input
								type="text"
								class="value-input"
								name="${fieldNameBase}[values][${valueIndex}]"
								value=""
								placeholder="Значение"
								style="width: 400px;"
							>
							<button type="button" class="delete-value-btn">×</button>
						`;

                        e.target.insertAdjacentElement('beforebegin', newValue);
                    }
                });

                // Удаление значения
                container.addEventListener('click', function(e) {
                    if (e.target.classList.contains('delete-value-btn')) {
                        const valueItem = e.target.closest('.value-item');
                        const groupValues = valueItem.closest('.group-values');
                        if (groupValues.querySelectorAll('.value-item').length > 1) {
                            valueItem.remove();
                        } else {
                            valueItem.querySelector('.value-input').value = '';
                        }
                    }
                });
            })();
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
        if (empty($value)) {
            return '';
        }

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

            return serialize($cleaned);
        }

        // Если значение строка - проверяем, может уже сериализовано
        if (is_string($value)) {
            $unserialized = unserialize($value, ['allowed_classes' => false]);
            if (is_array($unserialized)) {
                return $value; // Уже сериализовано
            }
        }

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
