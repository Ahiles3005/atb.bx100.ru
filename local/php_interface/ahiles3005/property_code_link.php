<?php


use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Loader;
use Bitrix\Iblock\PropertyTable;
use Bitrix\Iblock\PropertyEnumerationTable;

Loc::loadMessages(__FILE__);

class PropertyCodeLink
{
    const USER_TYPE = 'CustomPropertyCodeLink';

    /**
     * Регистрация типа свойства
     */
    public static function GetIBlockPropertyDescription()
    {
        return [
            'PROPERTY_TYPE' => 'E', // Используем тип как привязка к элементам
            'USER_TYPE' => self::USER_TYPE,
            'DESCRIPTION' => 'Привязка к кодам свойств',
            'CHECK_CREDENTIALS' => 'N',
            'ConvertFromDB' => [__CLASS__, 'ConvertFromDB'],
            'ConvertToDB' => [__CLASS__, 'ConvertToDB'],
            'GetPropertyFieldHtml' => [__CLASS__, 'GetPropertyFieldHtml'],
            'GetPropertyFieldHtmlMulty' => [__CLASS__, 'GetPropertyFieldHtmlMulty'],
            'GetAdminListViewHTML' => [__CLASS__, 'GetAdminListViewHTML'],
            'GetSettingsHTML' => [__CLASS__, 'GetSettingsHTML'],
            'PrepareSettings' => [__CLASS__, 'PrepareSettings'],
            'GetUIFilterProperty' => [__CLASS__, 'GetUIFilterProperty'],
            'GetUIEntityEditorProperty' => [__CLASS__, 'GetUIEntityEditorProperty'],
            'AddFilterFields' => [__CLASS__, 'AddFilterFields'],
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
            'target_iblock_id' => intval($arProperty['USER_TYPE_SETTINGS']['target_iblock_id'] ?? 0),
            'show_code' => $arProperty['USER_TYPE_SETTINGS']['show_code'] ?? 'Y',
        ];

        return $settings;
    }

    /**
     * HTML настроек свойства
     */
    public static function GetSettingsHTML($arProperty, $strHTMLControlName, &$arPropertyFields)
    {
        $settings = self::PrepareSettings($arProperty);

        $iblockId = intval($arProperty['IBLOCK_ID']);

        // Получаем список всех свойств инфоблока
        $properties = [];
        if ($iblockId > 0 && Loader::includeModule('iblock')) {
            $res = PropertyTable::getList([
                'select' => ['ID', 'NAME', 'CODE', 'PROPERTY_TYPE', 'USER_TYPE'],
                'filter' => [
                    '=IBLOCK_ID' => $iblockId,
                    '!ID' => $arProperty['ID'], // Исключаем текущее свойство
                ],
                'order' => ['SORT' => 'ASC', 'NAME' => 'ASC']
            ]);

            while ($prop = $res->fetch()) {
                $properties[] = $prop;
            }
        }

        $html = '<tr>';
        $html .= '<td>Привязка к инфоблоку (источнику свойств):</td>';
        $html .= '<td>';

        if (Loader::includeModule('iblock')) {
            $html .= '<select name="' . htmlspecialchars($strHTMLControlName['NAME']) . '[target_iblock_id]">';
            $html .= '<option value="">(не выбрано)</option>';

            $res = \Bitrix\Iblock\IblockTable::getList([
                'select' => ['ID', 'NAME', 'TYPE'],
                'order' => ['NAME' => 'ASC']
            ]);

            $currentIblockId = $settings['target_iblock_id'];
            while ($iblock = $res->fetch()) {
                $selected = ($iblock['ID'] == $currentIblockId) ? ' selected' : '';
                $html .= '<option value="' . $iblock['ID'] . '"' . $selected . '>';
                $html .= '[' . $iblock['ID'] . '] ' . htmlspecialchars($iblock['NAME']);
                $html .= ' (' . $iblock['TYPE'] . ')';
                $html .= '</option>';
            }

            $html .= '</select>';
            $html .= '<br><small class="note">Выберите инфоблок, свойства которого будут доступны для выбора</small>';
        }

        $html .= '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Показывать код свойства:</td>';
        $html .= '<td>';
        $checked = ($settings['show_code'] === 'Y') ? ' checked' : '';
        $html .= '<input type="checkbox" name="' . htmlspecialchars($strHTMLControlName['NAME']) . '[show_code]" value="Y"' . $checked . '>';
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

        // Фильтруем пустые значения
        $value = array_filter($value, function($item) {
            return !empty($item);
        });

        return serialize($value);
    }

    /**
     * Получение списка свойств для выбора
     */
    protected static function getPropertyCodesList($arProperty)
    {
        $settings = self::PrepareSettings($arProperty);
        $targetIblockId = intval($settings['target_iblock_id']);

        $result = [];

        if ($targetIblockId > 0 && Loader::includeModule('iblock')) {
            $res = PropertyTable::getList([
                'select' => ['ID', 'NAME', 'CODE', 'PROPERTY_TYPE'],
                'filter' => [
                    '=IBLOCK_ID' => $targetIblockId,
                ],
                'order' => ['SORT' => 'ASC', 'NAME' => 'ASC']
            ]);

            while ($prop = $res->fetch()) {
                $displayValue = '[' . $prop['CODE'] . '] ' . $prop['NAME'];
                $result[] = [
                    'ID' => $prop['CODE'],
                    'NAME' => $displayValue,
                    'CODE' => $prop['CODE'],
                ];
            }
        }

        return $result;
    }

    /**
     * HTML для множественного свойства
     */
    public static function GetPropertyFieldHtmlMulty($arProperty, $value, $strHTMLControlName)
    {
        $settings = self::PrepareSettings($arProperty);
        $showCode = ($settings['show_code'] === 'Y');

        $propertyCodes = self::getPropertyCodesList($arProperty);

        $currentValues = [];
        if (!empty($value['VALUE'])) {
            if (is_array($value['VALUE'])) {
                $currentValues = $value['VALUE'];
            } else {
                $currentValues = unserialize($value['VALUE'], ['allowed_classes' => false]);

                $currentValues = $currentValues['VALUE'];
                if (!is_array($currentValues)) {
                    $currentValues = [];
                }
            }
        }

        $fieldName = htmlspecialchars($strHTMLControlName['VALUE']);

        $normalName = [];
        foreach ($propertyCodes as $prop) {
            $normalName[$prop['CODE']] = $prop['NAME'];
        }

        ob_start();
        ?>
        <div class="custom-property-codes-wrapper" data-field-name="<?php echo $fieldName; ?>">
            <div class="custom-property-codes-list">
                <?php foreach ($currentValues as $code): ?>
                    <?php if (!empty($code)): ?>
                        <div class="custom-property-code-item">
                            <span class="code-value"><?php echo htmlspecialchars($normalName[$code]); ?></span>
                            <button type="button" class="delete-btn" data-code="<?php echo htmlspecialchars($code); ?>">
                                Удалить
                            </button>
                            <input type="hidden" name="<?php echo $fieldName; ?>[]" value="<?php echo htmlspecialchars($code); ?>">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <div class="custom-property-codes-add">
                <select class="property-codes-select">
                    <option value="">-- Выберите свойство --</option>
                    <?php foreach ($propertyCodes as $prop): ?>
                        <option value="<?php echo htmlspecialchars($prop['CODE']); ?>">
                            <?php echo htmlspecialchars($prop['NAME']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <button type="button" class="add-btn">
                    Добавить
                </button>
            </div>
        </div>

        <style>
            .custom-property-codes-wrapper {
                margin: 10px 0;
            }
            .custom-property-codes-list {
                margin-bottom: 10px;
                min-height: 30px;
            }
            .custom-property-code-item {
                display: flex;
                align-items: center;
                padding: 5px;
                margin-bottom: 5px;
                background: #f5f5f5;
                border: 1px solid #ddd;
                border-radius: 3px;
            }
            .code-value {
                flex: 1;
                margin-right: 10px;
                font-family: monospace;
            }
            .delete-btn {
                background: #ff5757;
                color: white;
                border: none;
                padding: 5px 10px;
                border-radius: 3px;
                cursor: pointer;
                font-size: 12px;
            }
            .delete-btn:hover {
                background: #e64545;
            }
            .custom-property-codes-add {
                display: flex;
                gap: 10px;
            }
            .property-codes-select {
                flex: 1;
                max-width: 400px;
                padding: 5px;
            }
            .add-btn {
                background: #2fc6f6;
                color: white;
                border: none;
                padding: 5px 15px;
                border-radius: 3px;
                cursor: pointer;
            }
            .add-btn:hover {
                background: #1db5e5;
            }
        </style>

        <script>
            (function() {
                const wrapper = document.querySelector('[data-field-name="<?php echo $fieldName; ?>"]');
                if (!wrapper) return;

                const list = wrapper.querySelector('.custom-property-codes-list');
                const select = wrapper.querySelector('.property-codes-select');
                const addBtn = wrapper.querySelector('.add-btn');
                const fieldName = wrapper.dataset.fieldName;

                // Проверка дубликатов
                function isDuplicate(code) {
                    const existing = list.querySelectorAll('.code-value');
                    for (let item of existing) {
                        if (item.textContent.trim() === code) {
                            return true;
                        }
                    }
                    return false;
                }

                // Добавление свойства
                addBtn.addEventListener('click', function() {
                    const code = select.value;
                    if (!code) {
                        alert('Выберите свойство из списка');
                        return;
                    }

                    if (isDuplicate(code)) {
                        alert('Это свойство уже добавлено');
                        return;
                    }

                    const text = select.options[select.selectedIndex].text;

                    const item = document.createElement('div');
                    item.className = 'custom-property-code-item';
                    item.innerHTML = `
                          <span class="code-value">${text}</span>
                          <button type="button" class="delete-btn" data-code="${code}">Удалить</button>                                                                                                                             
                          <input type="hidden" name="${fieldName}[]" value="${code}">                                                                                                                                               
                      `;

                    list.appendChild(item);
                    select.value = '';
                });

                // Удаление свойства
                list.addEventListener('click', function(e) {
                    if (e.target.classList.contains('delete-btn')) {
                        const item = e.target.closest('.custom-property-code-item');
                        item.remove();
                    }
                });
            })();
        </script>
        <?php
        return ob_get_clean();
    }

    /**
     * HTML для одиночного свойства (если понадобится)
     */
    public static function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
        return self::GetPropertyFieldHtmlMulty($arProperty, $value, $strHTMLControlName);
    }

    /**
     * HTML для отображения в списке админки
     */
    public static function GetAdminListViewHTML($arProperty, $value, $strHTMLControlName)
    {
        if (empty($value['VALUE'])) {
            return '';
        }

        $values = is_array($value['VALUE']) ? $value['VALUE'] : unserialize($value['VALUE'], ['allowed_classes' => false]);

        if (!is_array($values)) {
            return '';
        }

        return implode(', ', array_map('htmlspecialchars', $values));
    }

    /**
     * Поддержка UI фильтра
     */
    public static function GetUIFilterProperty($arProperty, $controlOptions, $fieldOptions)
    {
        return [];
    }

    /**
     * Поддержка Entity Editor
     */
    public static function GetUIEntityEditorProperty($params)
    {
        return [];
    }

    /**
     * Фильтрация
     */
    public static function AddFilterFields($arProperty, $strHTMLControlName, &$arFilter, &$filtered)
    {
        return false;
    }
}

// Регистрация обработчика
\PropertyCodeLink::RegisterHandler();
