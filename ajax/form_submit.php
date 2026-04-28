<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Loader;
use Bitrix\Iblock\PropertyTable;
use CIBlockElement;
use CFile;


//проверка на пост
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    success('Заявка добавелена: '.rand(111111111,222222222));
}

//проверка ключа
if (!isset($_SESSION['form_submit_key']) || $_SESSION['form_submit_key'] !== true) {

    success('Заявка добавелена: '.rand(222222222,333333333));
}

//проверка хонепота (должен заполнять робот автоматом)
if (!isset($_POST['age_old']) || strlen($_POST['age_old']) > 0) {
    success('Заявка добавелена: '.rand(333333333,444444444));
}


//проверка согласия
if (!isset($_POST['feedback-approve1']) || $_POST['feedback-approve1'] != 1) {
    success('Заявка добавелена: '.rand(444444444,555555555));
}


// Подключаем модуль инфоблоков
if (!Loader::includeModule('iblock')) {
    success('Заявка добавелена: '.rand(555555555,666666666));
}


addElement();


function success($value = 'Заявка добавелена: ', $status = true)
{

    // Отправляем заголовок JSON
    header('Content-Type: application/json');

    // Формируем ответ
    $response = json_encode([
        'status' => $status,
        'message' => $value,
        'data' => null
    ]);

    // Выводим ответ и завершаем скрипт
    echo $response;
    exit(0);
}


function addElement()
{

    $iblockId = 14;


    $fieldNames = [
        'form_name' => 'Название формы',
        'feedback-comp' => 'Компания',
        'feedback-doc' => 'Документа', //файл
        'feedback-inn' => 'ИНН',
        'feedback-mail' => 'Email',
        'feedback-name' => 'Имя',
        'feedback-num' => 'Серийный номер изделия',
        'feedback-org' => 'Компания',
        'feedback-patr' => 'Отчество',
        'feedback-post' => 'Должность',
        'feedback-resm' => 'Резюме', //файл
        'feedback-surname' => 'Фамилия',
        'feedback-tel' => 'Телефон',
        'feedback-textarea' => 'Текст',
    ];

// Получаем название формы (обязательное поле)
    $formName = trim($_POST['form_name'] ?? '');
    if (empty($formName)) {
        var_dump($_POST['form_name']);
        success('Заявка добавелена: '.rand(666666666,777777777));
    }


    $detailText = "<h3>Данные формы: {$formName}</h3>\n";
    $detailText .= "<p><strong>Дата создания:</strong> " . date('d.m.Y H:i:s') . "</p>\n";
    $detailText .= "<hr>\n\n";


// Собираем все данные из POST, используя массив с русскими названиями
    foreach ($_POST as $key => $value) {

        if ($key === 'form_name' || !array_key_exists($key, $fieldNames)) {
            continue;
        }


        $label = $fieldNames[$key];

        if (is_array($value)) {
            $value = implode(', ', $value);
        }


        $detailText .= "<p><strong>{$label}:</strong> {$value}</p>\n";
    }

    $files = $_FILES['feedback-doc'] ?? [];
    $arFiles = [];

    foreach ($_FILES as $key => $file) {
        if (!array_key_exists($key, $fieldNames)) {
            continue;
        }

        if ($file['error'] === UPLOAD_ERR_OK) {
            $arFile = CFile::MakeFileArray($file['tmp_name'],$file['type']);
            $arFile['name'] = $file['name'];
            $arFiles[] = $arFile;
        }
    }


    $elementFields = [
        'IBLOCK_ID' => $iblockId,
        'NAME' => $formName . ' ' . date('d.m.Y H:i:s'),
        'ACTIVE' => 'Y',
        'DETAIL_TEXT' => $detailText,
        'DETAIL_TEXT_TYPE' => 'html',
        'PROPERTY_VALUES' => [
            'FILES' => $arFiles
        ]
    ];

// Создаем элемент
    $element = new CIBlockElement();
    if ($elementId = $element->Add($elementFields)) {
        success('Заявка добавелена: ' . $elementId);
    } else {
        success($el->LAST_ERROR, false);
    }
}