<?php
// Подключаем ядро Битрикс
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use Bitrix\Main\Loader;
use Bitrix\Iblock\ElementTable;

// Инициализируем модуль инфоблоков
if (!Loader::includeModule('iblock')) {
    die('Модуль инфоблоков не установлен');
}

// ID инфоблока
$iblockId = 1;

// Данные для заполнения
$data = [
    // Множество вариантов для каждого поля
    'NAME_2' => [
        'Сервер промышленный HPE ProLiant DL380 Gen10',
        'Сервер Dell PowerEdge R740',
        'Сервер Supermicro X11DPi-N',
        'Сервер Fujitsu PRIMERGY RX2540 M5',
        'Сервер Huawei FusionServer Pro 2288H V5',
        'Сервер IBM Power System S822LC',
        'Сервер Lenovo ThinkSystem SR650',
        'Сервер Cisco UCS C240 M5',
        'Сервер ASUS RS720Q-E9',
        'Сервер ASUSTOR AS6212T'
    ],

    'PRICE_NEW' => [150000, 200000, 250000, 300000, 350000, 400000, 450000, 500000, 550000, 600000],
    'PRICE_OLD' => [180000, 220000, 280000, 320000, 380000, 420000, 480000, 520000, 580000, 650000],

    'PROCESSOR' => [
        'Intel Xeon Gold 6248R',
        'Intel Xeon Platinum 8280',
        'AMD EPYC 7763',
        'Intel Xeon Silver 4314',
        'AMD EPYC 7543',
        'Intel Xeon Gold 6338',
        'AMD EPYC 7713',
        'Intel Xeon W-3375',
        'AMD EPYC 7413',
        'Intel Xeon E-2388G'
    ],

    'OPER_PAMAT' => [
        '64 GB DDR4 ECC',
        '128 GB DDR4 ECC',
        '256 GB DDR4 ECC',
        '512 GB DDR4 ECC',
        '1 TB DDR4 ECC',
        '32 GB DDR4 ECC',
        '96 GB DDR4 ECC',
        '192 GB DDR4 ECC',
        '384 GB DDR4 ECC',
        '768 GB DDR4 ECC'
    ],

    'VSTROY_JOSTKIY_DISK' => [
        '2x 480 GB SSD',
        '4x 960 GB SSD',
        '8x 1.92 TB SSD',
        '12x 3.84 TB SSD',
        '24x 7.68 TB SSD',
        '2x 1 TB HDD',
        '4x 2 TB HDD',
        '8x 4 TB HDD',
        '12x 8 TB HDD',
        '24x 16 TB HDD'
    ],

    'RAB_DIAP_TEMP' => [
        '0°C до +35°C',
        '+5°C до +40°C',
        '-10°C до +45°C',
        '+10°C до +50°C',
        '-5°C до +55°C',
        '0°C до +60°C',
        '+15°C до +35°C',
        '-20°C до +40°C',
        '+5°C до +55°C',
        '-15°C до +50°C'
    ],

    'OHLOJDENIE' => [
        'Пассивное воздушное охлаждение',
        'Активное воздушное охлаждение',
        'Жидкостное охлаждение',
        'Гибридное охлаждение',
        'Термоэлектрическое охлаждение',
        'Фреоновое охлаждение',
        'Иммерсионное охлаждение',
        'Криогенное охлаждение',
        'Тепловые трубки',
        'Водяное охлаждение'
    ],

    'SETEVOI_KONTROLLER' => [
        'Intel X550 10GbE',
        'Broadcom 57416 10/25GbE',
        'Mellanox ConnectX-6 100GbE',
        'QLogic QL45212 25GbE',
        'Marvell FastLinQ 45000 10/25GbE',
        'Intel I350 1GbE',
        'Broadcom 57412 10GbE',
        'Mellanox ConnectX-5 25GbE',
        'QLogic QL45262 100GbE',
        'Marvell FastLinQ 41000 10GbE'
    ]
];

// Получаем все элементы инфоблока
$elements = CIBlockElement::GetList(
    ['ID' => 'ASC'],
    ['IBLOCK_ID' => $iblockId, 'ACTIVE' => 'Y'],
    false,
    false,
    ['ID', 'NAME', 'IBLOCK_ID']
);

echo "Начинаем обработку элементов...<br>\n";

$counter = 0;
while ($element = $elements->GetNext()) {
    $elementId = $element['ID'];
    $needUpdate = false;

    // Собираем данные для обновления
    $updateFields = [];

    // Проверяем и заполняем стандартные поля
    $props = CIBlockElement::GetProperty(
        $iblockId,
        $elementId,
        [],
        []
    );

    $existingProps = [];
    while ($prop = $props->Fetch()) {
        $existingProps[$prop['CODE']] = $prop['VALUE'];
    }

    // Проверяем и заполняем каждое свойство, если оно пустое
    foreach ($data as $propCode => $values) {
        if (empty($existingProps[$propCode])) {
            // Выбираем случайное значение
            $randomValue = $values[array_rand($values)];

            // Для числовых полей
            if ($propCode === 'PRICE_NEW' || $propCode === 'PRICE_OLD') {
                $updateFields[$propCode] = $randomValue;
            } else {
                // Для строковых полей
                $updateFields[$propCode] = $randomValue;
            }

            $needUpdate = true;
        }
    }

    // Проверяем и заполняем список CATEGORY, если пусто
    if (empty($existingProps['CATEGORY'])) {
        $categoryValues = [1, 2]; // ID значений
        $updateFields['CATEGORY'] = $categoryValues[array_rand($categoryValues)];
        $needUpdate = true;
    }

    // Проверяем и заполняем список NALICHIE, если пусто
    if (empty($existingProps['NALICHIE'])) {
        $nalichieValues = [7, 8, 9]; // ID значений
        $updateFields['NALICHIE'] = $nalichieValues[array_rand($nalichieValues)];
        $needUpdate = true;
    }

    // Проверяем и заполняем список TEGI_DLA_FOTO, если пусто
    if (empty($existingProps['TEGI_DLA_FOTO'])) {
        $tegiValues = [10, 11, 12]; // ID значений
        // Можно выбрать одно или несколько значений
        $selectedValues = [];
        $numValues = rand(1, 3); // От 1 до 3 тегов
        for ($i = 0; $i < $numValues; $i++) {
            $selectedValues[] = $tegiValues[array_rand($tegiValues)];
        }
        // Убираем дубликаты
        $selectedValues = array_unique($selectedValues);

        $updateFields['TEGI_DLA_FOTO'] = $selectedValues;
        $needUpdate = true;
    }

    // Обновляем элемент, если есть что обновлять
    if ($needUpdate) {
        $el = new CIBlockElement;

        // Подготавливаем свойства
        $properties = [];
        foreach ($updateFields as $code => $value) {
            $properties[$code] = $value;
        }

        $updateResult = $el->Update($elementId, [
            'IBLOCK_ID' => $iblockId,
            'PROPERTY_VALUES' => $properties
        ]);

        if ($updateResult) {
            echo "Элемент ID: {$elementId} - обновлен<br>\n";
            $counter++;
        } else {
            echo "Ошибка при обновлении элемента ID: {$elementId} - {$el->LAST_ERROR}<br>\n";
        }
    } else {
        echo "Элемент ID: {$elementId} - все поля уже заполнены<br>\n";
    }
}

echo "<br>\nОбработка завершена. Обновлено элементов: {$counter}<br>\n";

