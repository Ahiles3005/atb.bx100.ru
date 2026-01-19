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
$descriptionsFile = '/path/to/descriptions.txt';  // файл с описаниями
$photosFile = '/path/to/photos.txt';             // файл с путями к фото

// Читаем файлы с данными
$descriptions = [];
if (file_exists($descriptionsFile)) {
    $descriptions = explode("\n", trim(file_get_contents($descriptionsFile)));
    $descriptions = array_filter($descriptions); // убираем пустые строки
}

$photos = [];
if (file_exists($photosFile)) {
    $photos = explode("\n", trim(file_get_contents($photosFile)));
    $photos = array_filter($photos);
}

if (empty($descriptions) || empty($photos)) {
    die('Не найдены файлы с описаниями или фото');
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
    $isSeria = !empty($section['UF_SERIA']); // проверяем тип раздела
    $needUpdate = false;

    echo "Обработка раздела ID: {$sectionId} ";

    // Проверяем детальное описание
    if (empty($section['DESCRIPTION_TYPE']) || empty($section['DESCRIPTION'])) {
        $randomDescription = $descriptions[array_rand($descriptions)];

        $updateFields = [
            'DESCRIPTION_TYPE' => 'html',
            'DESCRIPTION' => $randomDescription,
            'UF_LAST_UPDATE' => date('d.m.Y H:i:s') // поле для отметки обновления (если есть)
        ];
        $needUpdate = true;
        echo "(добавлено описание) ";
    }

    // Проверяем детальное фото (UF_DET_PHOTO или DETAIL_PICTURE)
    $photoField = !empty($section['UF_DET_PHOTO']) ? 'UF_DET_PHOTO' : 'DETAIL_PICTURE';
    $currentPhoto = $section[$photoField];

    if (empty($currentPhoto)) {
        $randomPhoto = $photos[array_rand($photos)];

        // Проверяем существование файла
        $fullPhotoPath = $_SERVER['DOCUMENT_ROOT'] . $randomPhoto;
        if (file_exists($fullPhotoPath)) {
            $updateFields[$photoField] = [
                'name' => basename($randomPhoto),
                'tmp_name' => $fullPhotoPath,
                'del' => 'Y'
            ];
            $needUpdate = true;
            echo "(добавлено фото) ";
        } else {
            echo "(фото не найдено: {$randomPhoto}) ";
        }
    }

    // Для серийных разделов добавляем дополнительные поля (при необходимости)
    if ($isSeria && $needUpdate) {
        $updateFields['UF_SERIA_TYPE'] = 'series'; // пример дополнительного поля
        echo "(серийный раздел) ";
    }

    if ($needUpdate) {
        $bs = new CIBlockSection;
        $updateResult = $bs->Update($sectionId, $updateFields);

        if ($updateResult) {
            echo "- обновлен успешно<br>\n";
            $counter++;
        } else {
            echo "- ОШИБКА: " . $bs->LAST_ERROR . "<br>\n";
        }
    } else {
        echo "- все поля заполнены<br>\n";
    }
}

echo "<br>Обработка завершена. Обновлено разделов: {$counter}<br>\n";
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog.php';
?>
