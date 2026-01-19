<?php
// Подключаем ядро Битрикс
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use Bitrix\Main\Loader;

// Инициализируем модуль инфоблоков
if (!Loader::includeModule('iblock')) {
    die('Модуль инфоблоков не установлен');
}

// ID инфоблока
$iblockId = 1;

// Пути к файлам - УКАЖИТЕ СВОИ ПУТИ
$descriptionsFile = __DIR__ . '/file1.html';  // файл с описаниями
$photosFile = '/path/to/photos.txt';             // файл с путями к фото

// Читаем файлы с данными
$description = '';
if (file_exists($descriptionsFile)) {
    $description = file_get_contents($descriptionsFile);
}

$photos = [];
if (file_exists($photosFile)) {
    $photos = explode("\n", trim(file_get_contents($photosFile)));
    $photos = array_filter($photos);
}

if (empty($description) && empty($photos)) {
    die('Не найдены файлы с описаниями и фото');
}

echo "Начинаем обработку разделов...<br>\n";

// Получаем все разделы инфоблока (включая подразделы)
$sections = CIBlockSection::GetList(
    ['LEFT_MARGIN' => 'ASC'], // сортировка по древовидной структуре
    [
        'IBLOCK_ID' => $iblockId,
        'ACTIVE' => 'Y',
        'DEPTH_LEVEL' => ['1', '2', '3'] // можно ограничить уровни вложенности
    ],
    false,
    ['ID', 'IBLOCK_ID', 'UF_SERIA', 'UF_*'] // получаем все UF поля
);

$counter = 0;
while ($section = $sections->Fetch()) {
    $sectionId = $section['ID'];
    $isSeria = boolval($section['UF_SERIA']); // проверяем тип раздела
    if ($isSeria) {
        continue;
    }


    echo "Обработка раздела ID: {$sectionId} ";
    // Проверяем детальное описание
    if (empty($section['DESCRIPTION_TYPE']) || empty($section['DESCRIPTION'])) {
        $updateFields = [
            'DESCRIPTION_TYPE' => 'html',
            'DESCRIPTION' => $description,
        ];

        echo "(добавлено описание) ";
    }


    $bs = new CIBlockSection;
    $updateResult = $bs->Update($sectionId, $updateFields);

    if ($updateResult) {
        echo "- обновлен успешно<br>\n";
        $counter++;
    } else {
        echo "- ОШИБКА: " . $bs->LAST_ERROR . "<br>\n";
    }

    echo "- все поля заполнены<br>\n";

}

echo "<br>Обработка завершена. Обновлено разделов: {$counter}<br>\n";
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog.php';
?>
