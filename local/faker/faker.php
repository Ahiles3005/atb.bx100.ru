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

    'CPU' => [
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

    'RAM' => [
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

    'BUILT_IN_HARD_DRIVE' => [
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

    'OPERATING_TEMPERATURE_RANGE' => [
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

    'COOLING' => [
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

    'NETWORK_CONTROLLER' => [
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
    ],

    'ARTICLE' => [
        rand(1111111, 99999999),
        rand(1111111, 99999999),
        rand(1111111, 99999999),
        rand(1111111, 99999999),
        rand(1111111, 99999999),
        rand(1111111, 99999999),
        rand(1111111, 99999999),
        rand(1111111, 99999999),
        rand(1111111, 99999999),
    ],

    // Сетевой интерфейс = NETWORK_INTERFACE
    'NETWORK_INTERFACE' => [
        '3 x Ethernet 1G/100M RJ45',
        '2 x Ethernet 10G SFP+ + 2 x Ethernet 1G RJ45',
        '4 x Ethernet 1G/100M/10M RJ45',
        '1 x Ethernet 10G SFP+ + 4 x Ethernet 1G RJ45',
        '2 x Ethernet 10GbE RJ45 + 2 x Ethernet 1GbE RJ45',
        '8 x Ethernet 1G/100M RJ45',
        '1 x Ethernet 25G SFP28 + 2 x Ethernet 1G RJ45',
        '6 x Ethernet 1G/100M/10M RJ45 с поддержкой PoE',
        '2 x Ethernet 10G SFP+ + 4 x Ethernet 1G/100M RJ45',
        '4 x Ethernet 10G SFP+',
    ],

    // Слоты расширения = EXPANSION_SLOTS (множественное)
    'EXPANSION_SLOTS' => [
        [
            '1 x mini PCIe (интерфейсы PCIe, USB 2.0, SPI, SIM, I2C); 1 x PLS-5 (интерфейс USB 2.0)',
            '2 x mini PCIe (PCIe x1, USB 2.0, SIM); 1 x M.2 2242 (SATA/PCIe)',
            '1 x PCIe x8 слот; 2 x mini PCIe',
            '3 x mini PCIe (PCIe, USB, SPI, I2C, SIM); 1 x mSATA',
            '2 x PCIe x4 слота; 1 x mini PCIe',
            '1 x PCIe x16 слот; 2 x mini PCIe (с поддержкой SIM)',
            '4 x mini PCIe с различными интерфейсами (PCIe, USB, SPI, I2C)',
            '1 x PCIe x8 + 1 x PCIe x4; 2 x mini PCIe',
            '2 x mPCIe + 1 x M.2 2280 (PCIe x1, SATA, USB 2.0)',
            'Слот 1 (mPCIe): USB 2.0, PCIе x 1, SPI, I2C, SIM1 или SIM2; Слот 2 (mPCIe): USB 2.0, PCIе x 1, I2C, SIM2; Слот 3 (M.2 2280): PCIе x 1, SATA, USB 2.0',
        ],
    ],

    // Консольный порт = CONSOLE_PORT
    'CONSOLE_PORT' => [
        '1 x RS-232C (RJ-45)',
        '1 x RS-232 (DB9)',
        '1 x RS-485 (клеммная колодка)',
        '1 x USB Console (micro-USB)',
        '1 x RS-232/485 (переключаемый)',
        '2 x RS-232C (RJ-45)',
        '1 x RS-422/485 (витая пара)',
        '1 x USB-C Console',
        '1 x RJ-45 Console (совместим с Cisco)',
        '1 x RS-232 (DB9) + 1 x RJ-45 Console',
    ],

    // Аудио интерфейс = AUDIO_INTERFACE (множественное)
    'AUDIO_INTERFACE' => [
        [
            '1 x выход для наушников или внешних динамиков (опция); 1 x вход микрофона (опция); 1 х встроенный динамик (опция)',
            '1 x линейный выход (Line Out); 1 x линейный вход (Line In); 1 x встроенный микрофон',
            '1 x HDMI Audio; 1 x разъем 3.5мм для наушников',
            '2 x динамика 2W; 1 x микрофонный вход',
            '1 x выход на динамики 4 Ом; 1 x вход микрофона с усилением',
            'Поддержка HDMI Audio с поддержкой 7.1; 1 x оптический выход',
            '1 x аналоговый выход 3.5мм; встроенный моно динамик',
            '2 x линии Line Out; 1 x микрофонный вход с поддержкой Phantom Power',
            'HDMI Audio + 1 x 3.5mm стерео выход',
            'Встроенный стерео динамик 2x3W; 1 x вход для микрофона',
        ],
    ],

    // Программное обеспечение = SOFTWARE
    'SOFTWARE' => [
        'Базовая система ввода-вывода АТОМ (BIOS UEFI / LEGACY с подготовкой к установке ОС)',
        'UEFI BIOS с поддержкой Secure Boot; ACM (Authenticated Code Module)',
        'BIOS с функцией автоматического восстановления после сбоев',
        'Прошивка UEFI 2.7 с поддержкой Legacy Mode; драйверы для Linux/Windows',
        'Система BIOS с поддержкой удаленного управления (IPMI 2.0)',
        'UEFI Firmware с функцией Platform Trust Technology (PTT)',
        'BIOS с поддержкой Wake-on-LAN; автоматическое восстановление питания',
        'Прошивка с поддержкой TPM 2.0; комплект драйверов для Windows Server',
        'BIOS UEFI с графическим интерфейсом и поддержкой мыши',
        'Система BIOS с функцией автоматического отключения при перегреве',
    ],

    // Видео интерфейс = VIDEO_INTERFACE (множественное)
    'VIDEO_INTERFACE' => [
        [
            '1 x HDMI 2.1; 1080p@120Гц и 4096x2304@60Гц Mali-G610',
            '2 x HDMI 2.0; 4K@60Гц; поддержка 3 независимых дисплеев',
            '1 x DisplayPort 1.4; 5K@60Гц; HDMI 2.0 выход',
            '1 x VGA + 1 x HDMI 1.4; поддержка двух мониторов',
            '2 x DP++ (DisplayPort++) + 1 x HDMI 2.1',
            '1 x LVDS (для встроенного дисплея) + 1 x HDMI 2.0',
            '3 x HDMI 1.4b + 1 x еDP (внутренний дисплей)',
            '1 x USB Type-C с поддержкой DisplayPort Alt Mode',
            'DVI-I + HDMI 2.0 + VGA через адаптер',
            '1 x HDMI 2.1 + 1 x DisplayPort 1.4; поддержка HDR10',
        ],
    ],

    // Модуль расширения = EXPANSION_MODULE (множественное)
    'EXPANSION_MODULE' => [
        [
            'Слот 1 (mPCIe): USB 2.0, PCIе x 1, SPI, I2C, SIM1 или SIM2; Слот 2 (mPCIe): USB 2.0, PCIе x 1, I2C, SIM2; Слот 3 (M.2 2280): PCIе x 1, SATA, USB 2.0; 2 х внутренних слота расширения сетевых интерфейсов: 2xPCIe x1 Lane, 2 x USB2.0, 1 x UART 4 pin, 1 x SPI, 1 x I2C; 1xPCIe x1 Lane, 2 x USB2.0, 1 x UART 4 pin, 1 x SPI, 1 x I2C, 1 x I2S',
            'Слот 1: mini-PCIe (USB 2.0, PCIe x1); Слот 2: mini-PCIe (USB 2.0, PCIe x1, SIM); Слот 3: M.2 2230 (WiFi/BT)',
            '4 x слота расширения: 2x PCIe x1, 1x PCIe x4, 1x mini-PCIe',
            'Система модулей: слот A (PCIe x4), слот B (PCIe x2), 2 x слота mini-PCIe с поддержкой SIM',
            'Модульная система: 2 x слота M.2 2280 (PCIe/SATA), 1 x mini-PCIe',
            '3 x PCIe слота (x8, x4, x1), 1 x слот для модуля WiFi',
            '2 x слота расширения PCIe x8 + 2 x mini-PCIe с поддержкой различных интерфейсов',
            'Слоты: 1 x PCIe x16, 2 x mini-PCIe, 1 x M.2 для SSD',
            '4 x слота mini-PCIe с различными конфигурациями (PCIe, USB, SPI, I2C, SIM)',
            'Система модулей расширения: основной слот PCIe x8, дополнительный PCIe x4, 2 x mini-PCIe',
        ],
    ],
];

// ============================================================================
// НАСТРОЙКА ПУТЕЙ К ФАЙЛАМ (множественные свойства типа файл)
// ============================================================================

// Пути к файлам фотографий для свойства MORE_PHOTO
// Укажите массив путей к файлам относительно корня сайта или абсолютные пути
$morePhotoFiles = [
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-2100/АТБ-2100_1.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-2100/АТБ-2100_2.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-2100/АТБ-2100_3.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-2100/АТБ-2100_4.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-2100/АТБ-2100_5.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-2100/АТБ-2100_6.webp',
    //
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-2400/АТБ-2400_1.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-2400/АТБ-2400_2.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-2400/АТБ-2400_3.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-2400/АТБ-2400_4.webp',
    ///
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568-MPC-G/АТБ-RK3568-MPC-G_1.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568-MPC-G/АТБ-RK3568-MPC-G_2.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568-MPC-G/АТБ-RK3568-MPC-G_3.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568-MPC-G/АТБ-RK3568-MPC-G_4.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568-MPC-G/АТБ-RK3568-MPC-G_5.webp',
    ///

    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568-MPC-M/АТБ-RK3568-MPC-M_1.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568-MPC-M/АТБ-RK3568-MPC-M_2.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568-MPC-M/АТБ-RK3568-MPC-M_3.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568-MPC-M/АТБ-RK3568-MPC-M_4.webp',
///
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568J-SMC/АТБ-RK3568J-SMC_1.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568J-SMC/АТБ-RK3568J-SMC_2.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568J-SMC/АТБ-RK3568J-SMC_3.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568J-SMC/АТБ-RK3568J-SMC_4.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3568J-SMC/АТБ-RK3568J-SMC_5.webp',
///
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_1.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_2.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_3.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_4.webp',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_5.webp',

];

// Пути к файлам 3D для свойства MORE_3D
// Поддерживаемые форматы: .obj, .fbx, .gltf, .glb, .stl и другие
$more3dFiles = [
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/3d/images/atb-gsm-lcs_3d.glb',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/3d/images/atb-lw-bs_3d.glb',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/3d/images/atb-lw-m_3d.glb',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/3d/images/atom.glb',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/3d/images/car.glb',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/3d/images/car2.glb',
];

// Пути к видеофайлам для свойства MORE_VIDEO
// Поддерживаемые форматы: .mp4, .avi, .mov, .mkv и другие
$moreVideoFiles = [
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/video/vp-specs-video.mp4',
    '/var/www/free/data/www/atb.bx100.ru/ATB3-38/video/vp-specs-video.webm',
];

// ============================================================================
// ГЛОБАЛЬНЫЙ КЕШ ЗАГРУЖЕННЫХ ФАЙЛОВ (md5_hash => file_id)
// ============================================================================
$GLOBALS['fakerFileCache'] = [];

// ============================================================================
// ФУНКЦИЯ ЗАГРУЗКИ ФАЙЛОВ В СВОЙСТВА
// ============================================================================

/**
 * Загружает файлы в множественное свойство типа файл
 * При повторной загрузке того же файла переиспользует существующий ID
 *
 * @param int $elementId ID элемента инфоблока
 * @param int $iblockId ID инфоблока
 * @param string $propCode Код свойства
 * @param array $filesArray Массив путей к файлам
 * @param int $maxFiles Максимальное количество файлов для загрузки (0 = все)
 * @return array Массив ID загруженных файлов
 */
function loadFilesToProperty($elementId, $iblockId, $propCode, $filesArray, $maxFiles = 0)
{
    $fileIds = [];

    if (empty($filesArray)) {
        return $fileIds;
    }

    // Определяем количество файлов для загрузки
    $filesToLoad = $filesArray;
    if ($maxFiles > 0 && count($filesArray) > $maxFiles) {
        shuffle($filesArray);
        $filesToLoad = array_slice($filesArray, 0, $maxFiles);
    }

    // Загружаем файлы
    foreach ($filesToLoad as $filePath) {
        // Проверяем существование файла
        if (!file_exists($filePath)) {
            echo "  warning: Файл не найден: {$filePath}<br>\n";
            continue;
        }

        // Вычисляем MD5 хеш файла для проверки дубликатов
        $fileHash = md5_file($filePath);

        // Проверяем кеш - если файл уже загружался, переиспользуем ID
        if (isset($GLOBALS['fakerFileCache'][$fileHash])) {
            $fileId = $GLOBALS['fakerFileCache'][$fileHash];
        } else {
            // Файл еще не загружался - загружаем новый
            $fileArray = CFile::MakeFileArray($filePath);

            if ($fileArray) {
                $fileId = CFile::SaveFile($fileArray, 'iblock');

                if ($fileId) {
                    // Сохраняем в кеш
                    $GLOBALS['fakerFileCache'][$fileHash] = $fileId;
                } else {
                    echo "  error: Не удалось загрузить файл: {$filePath}<br>\n";
                    continue;
                }
            }
        }

        if ($fileId) {
            $fileIds[] = [
                'VALUE' => $fileId,
                'DESCRIPTION' => ''
            ];
        }
    }

    return $fileIds;
}

/**
 * Загружает детальное описание из HTML файла
 *
 * @param int $elementId ID элемента инфоблока
 * @return string|null Содержимое файла или null в случае ошибки
 */
function loadDetailTextFromHtml($elementId)
{
    // Определяем путь к файлу в той же директории, где находится этот скрипт
    $scriptDir = dirname(__FILE__);
    $htmlFilePath = $scriptDir . '/detail_text.html';

    if (!file_exists($htmlFilePath)) {
        echo "  warning: HTML файл не найден: {$htmlFilePath}<br>\n";
        return null;
    }

    $content = file_get_contents($htmlFilePath);

    if ($content === false) {
        echo "  error: Не удалось прочитать HTML файл: {$htmlFilePath}<br>\n";
        return null;
    }

    return $content;
}

// Получаем все элементы инфоблока
$elements = CIBlockElement::GetList(
    ['ID' => 'ASC'],
    ['IBLOCK_ID' => $iblockId, 'ACTIVE' => 'Y'],
    false,
    false,
    ['ID', 'NAME', 'IBLOCK_ID', 'DETAIL_TEXT']
);

echo "Начинаем обработку элементов...<br>\n";

$el = new CIBlockElement;
$counter = 0;

while ($element = $elements->GetNext()) {
    $elementId = $element['ID'];
    $elementName = $element['NAME'];
    $updatedProps = [];

    echo "Элемент ID: {$elementId}<br>\n";

    // Получаем все существующие свойства элемента
    $props = CIBlockElement::GetProperty(
        $iblockId,
        $elementId,
        [],
        []
    );

    $existingProps = [];
    while ($prop = $props->Fetch()) {
        // Для множественных свойств собираем все значения
        if ($prop['MULTIPLE'] == 'Y') {
            $existingProps[$prop['CODE']][] = $prop['VALUE'];
        } else {
            $existingProps[$prop['CODE']] = $prop['VALUE'];
        }
    }

    // ============================================================================
    // ПРОВЕРКА И ЗАПОЛНЕНИЕ СВОЙСТВ (только пустых)
    // ============================================================================

    // Проверяем и заполняем свойства из массива $data
    foreach ($data as $propCode => $values) {
        $propValue = $existingProps[$propCode] ?? null;

        if (empty($propValue)) {
            // Для множественных свойств берем случайный элемент из вложенного массива
            if (is_array($values) && isset($values[0]) && is_array($values[0])) {
                // Множественное свойство (массив массивов)
                $valueToSet = $values[array_rand($values)];
                $valueToSet = array_map(function ($item) {
                    return ['VALUE' => $item];
                }, $valueToSet);
            } else {
                $valueToSet = $values[array_rand($values)];
            }

            CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, [$propCode => $valueToSet]);
            $updatedProps[] = $propCode;

            if (is_array($valueToSet)) {
                echo "  + {$propCode}: [множественное значение]<br>\n";
            } else {
                echo "  + {$propCode}: {$valueToSet}<br>\n";
            }
        }
    }

    // Проверяем и заполняем CATEGORY
    if (empty($existingProps['CATEGORY'])) {
        $categoryValues = [1, 2];
        $valueToSet = $categoryValues[array_rand($categoryValues)];
        CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, ['CATEGORY' => $valueToSet]);
        $updatedProps[] = 'CATEGORY';
        echo "  + CATEGORY: {$valueToSet}<br>\n";
    }

    // Проверяем и заполняем AVAILABILITY
    if (empty($existingProps['AVAILABILITY'])) {
        $AVAILABILITYValues = [7, 8, 9];
        $valueToSet = $AVAILABILITYValues[array_rand($AVAILABILITYValues)];
        CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, ['AVAILABILITY' => $valueToSet]);
        $updatedProps[] = 'AVAILABILITY';
        echo "  + AVAILABILITY: {$valueToSet}<br>\n";
    }

    // Проверяем и заполняем TEGI_DLA_FOTO (множественное)
    if (empty($existingProps['TEGI_DLA_FOTO']) || !array_filter($existingProps['TEGI_DLA_FOTO'])) {
        $tegiValues = [10, 11, 12];
        $selectedValues = [];
        $numValues = rand(1, 3);
        for ($i = 0; $i < $numValues; $i++) {
            $selectedValues[] = $tegiValues[array_rand($tegiValues)];
        }
        $selectedValues = array_values(array_unique($selectedValues));
        CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, ['TEGI_DLA_FOTO' => $selectedValues]);
        $updatedProps[] = 'TEGI_DLA_FOTO';
        echo "  + TEGI_DLA_FOTO: " . implode(', ', $selectedValues) . "<br>\n";
    }

    // Проверяем и заполняем SVOISTVA_DLA_DETALNO (множественное)
    if (empty($existingProps['SVOISTVA_DLA_DETALNO']) || !array_filter($existingProps['SVOISTVA_DLA_DETALNO'])) {
        $valueToSet = [
            [
                'VALUE' => [
                    'Процессор' . rand(1, 99),
                    'Intel Atom E3845' . rand(1, 99),
                    '4 ядра, 2 Мб кэш, 1.91 ГГц' . rand(1, 99)
                ]
            ],
            [
                'VALUE' => [
                    'Оперативная память' . rand(1, 99),
                    'DDR3L SODIMM' . rand(1, 99),
                    'до 8 Гб' . rand(1, 99)
                ]
            ],
            [
                'VALUE' => [
                    'Встроенный жесткий диск' . rand(1, 99),
                    'SSD М.2 2242' . rand(1, 99),
                    'до 256 Гб' . rand(1, 99)
                ]
            ],
        ];
        CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, ['SVOISTVA_DLA_DETALNO' => $valueToSet]);
        $updatedProps[] = 'SVOISTVA_DLA_DETALNO';
        echo "  + SVOISTVA_DLA_DETALNO<br>\n";
    }

    // ============================================================================
    // ЗАПОЛНЕНИЕ СВОЙСТВ OSNOV_HARAKTR И OPCII
    // ============================================================================

    // Проверяем и заполняем OSNOV_HARAKTR (множественное свойство с 7 подпунктами)
    if (empty($existingProps['OSNOV_HARAKTR']) || !array_filter($existingProps['OSNOV_HARAKTR'])) {
        $osnovHaraktrKeys = [
            'SOFTWARE',
            'AUDIO_INTERFACE',
            'CONSOLE_PORT',
            'EXPANSION_SLOTS',
            'NETWORK_INTERFACE',
            'NETWORK_CONTROLLER',
            'OPERATING_TEMPERATURE_RANGE'
        ];

        CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, ['OSNOV_HARAKTR' => json_encode($osnovHaraktrKeys)]);
        $updatedProps[] = 'OSNOV_HARAKTR';
        echo "  + OSNOV_HARAKTR: 7 подпунктов<br>\n";
    }

    // Проверяем и заполняем OPCII (множественное свойство с 2 подпунктами)
    if (empty($existingProps['OPCII']) || !array_filter($existingProps['OPCII'])) {
        $opciiKeys = ['EXPANSION_MODULE', 'VIDEO_INTERFACE'];

        CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, ['OPCII' => json_encode($opciiKeys)]);
        $updatedProps[] = 'OPCII';
        echo "  + OPCII: 2 подпункта<br>\n";
    }

    // ============================================================================
    // ЗАГРУЗКА ФАЙЛОВ В СВОЙСТВА (только если пустые)
    // ============================================================================

    // Проверяем MORE_PHOTO (множественное свойство файла)
    $morePhotoEmpty = empty($existingProps['MORE_PHOTO']) || !array_filter($existingProps['MORE_PHOTO']);
    if ($morePhotoEmpty && !empty($morePhotoFiles)) {
        $photoCount = rand(3, min(5, count($morePhotoFiles)));
        $loadedPhotos = loadFilesToProperty($elementId, $iblockId, 'MORE_PHOTO', $morePhotoFiles, $photoCount);
        if (!empty($loadedPhotos)) {
            CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, ['MORE_PHOTO' => $loadedPhotos]);
            $updatedProps[] = 'MORE_PHOTO';
            echo "  + MORE_PHOTO: загружено " . count($loadedPhotos) . " файлов<br>\n";
        }
    }

    // Проверяем MORE_3D (множественное свойство файла)
    $more3dEmpty = empty($existingProps['MORE_3D']) || !array_filter($existingProps['MORE_3D']);
    if ($more3dEmpty && !empty($more3dFiles)) {
        $modelCount = rand(1, min(2, count($more3dFiles)));
        $loaded3d = loadFilesToProperty($elementId, $iblockId, 'MORE_3D', $more3dFiles, $modelCount);
        if (!empty($loaded3d)) {
            CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, ['MORE_3D' => $loaded3d]);
            $updatedProps[] = 'MORE_3D';
            echo "  + MORE_3D: загружено " . count($loaded3d) . " файлов<br>\n";
        }
    }

    // Проверяем MORE_VIDEO (множественное свойство файла)
    $moreVideoEmpty = empty($existingProps['MORE_VIDEO']) || !array_filter($existingProps['MORE_VIDEO']);
    if ($moreVideoEmpty && !empty($moreVideoFiles)) {
        $videoCount = rand(1, min(3, count($moreVideoFiles)));
        $loadedVideo = loadFilesToProperty($elementId, $iblockId, 'MORE_VIDEO', $moreVideoFiles, $videoCount);
        if (!empty($loadedVideo)) {
            CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, ['MORE_VIDEO' => $loadedVideo]);
            $updatedProps[] = 'MORE_VIDEO';
            echo "  + MORE_VIDEO: загружено " . count($loadedVideo) . " файлов<br>\n";
        }
    }

    // Обновляем PREVIEW_TEXT и DETAIL_TEXT если были обновления
    if (!empty($updatedProps)) {
        $updateFields = [
            'PREVIEW_TEXT' => 'Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании форм развития. Идейные соображения высшего порядка, а также сложившаяся структура организации позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач. Задача организации, в особенности же постоянное информационно-пропагандистское обеспечение нашей деятельности требуют от нас анализа систем массового участия.',
        ];

        // Проверяем и заполняем DETAIL_TEXT из файла
        if (empty($element['DETAIL_TEXT'])) {
            $detailText = loadDetailTextFromHtml($elementId);
            if ($detailText !== null) {
                $detailText = str_replace('#REPLACE#', $elementName, $detailText);
                $updateFields['DETAIL_TEXT'] = $detailText;
                $updateFields['DETAIL_TEXT_TYPE'] = 'html';
                echo "  + DETAIL_TEXT: загружен из detail_text.html<br>\n";
            }
        }

        $el->Update($elementId, $updateFields);
        $counter++;
    } else {
        echo "  (все свойства уже заполнены)<br>\n";
    }
    echo "<br>\n";
}

echo "<br>\nОбработка завершена. Обновлено элементов: {$counter}<br>\n";
