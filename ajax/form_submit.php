<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Loader;
use Bitrix\Iblock\PropertyTable;
use CIBlockElement;
use CFile;


//проверка на пост
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    success('Заявка добавелена: ' . rand(111111111, 222222222));
}

//проверка ключа
if (!isset($_SESSION['form_submit_key']) || $_SESSION['form_submit_key'] !== true) {

    success('Заявка добавелена: ' . rand(222222222, 333333333));
}

//проверка хонепота (должен заполнять робот автоматом)
if (!isset($_POST['age_old']) || strlen($_POST['age_old']) > 0) {
    success('Заявка добавелена: ' . rand(333333333, 444444444));
}


//проверка согласия
if (!isset($_POST['feedback-approve1']) || $_POST['feedback-approve1'] != 1) {
    success('Заявка добавелена: ' . rand(444444444, 555555555));
}


// Подключаем модуль инфоблоков
if (!Loader::includeModule('form')) {
    success('Заявка добавелена: ' . rand(555555555, 666666666));
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

    $formData = [];

    $FORM_ID = $_POST['form_id'] ?? 0;

    switch ($FORM_ID) {
        case 1:
            $formData = [
                'form_text_1' => $_POST['feedback-inn'],
                'form_text_2' => $_POST['feedback-org'],
                'form_text_3' => $_POST['feedback-name'],
                'form_text_4' => $_POST['feedback-surname'],
                'form_text_5' => $_POST['feedback-mail'],
                'form_text_6' => $_POST['feedback-tel'],
                'form_textarea_7' => $_POST['feedback-textarea'],
            ];
            break;
        case 2:
            $formData = [
                'form_text_8' => $_POST['feedback-name'],
                'form_text_9' => $_POST['feedback-surname'],
                'form_text_10' => $_POST['feedback-mail'],
                'form_text_11' => $_POST['feedback-tel'],
                'form_text_12' => $_POST['feedback-comp'],
                'form_text_13' => $_POST['feedback-post'],
                'form_textarea_14' => $_POST['feedback-textarea'],
            ];
            break;
        case 3:
            $file = $_FILES['feedback-resm'] ?? '';
            if (is_array($file)) {
                $arFile = CFile::MakeFileArray($file['tmp_name'], $file['type']);
                $arFile['name'] = $file['name'];
            }
            $formData = [
                'form_file_15' => $arFile ?? [],
                'form_text_16' => $_POST['feedback-name'],
                'form_text_17' => $_POST['feedback-surname'],
                'form_text_18' => $_POST['feedback-mail'],
                'form_text_19' => $_POST['feedback-tel'],
                'form_textarea_20' => $_POST['feedback-textarea'],
            ];
            break;
        case 4:
            $formData = [
                'form_text_23' => $_POST['feedback-name'],
                'form_text_24' => $_POST['feedback-surname'],
                'form_text_25' => $_POST['feedback-mail'],
            ];
            break;
        case 5:
            $file = $_FILES['feedback-doc'] ?? '';
            if (is_array($file)) {
                $arFile = CFile::MakeFileArray($file['tmp_name'], $file['type']);
                $arFile['name'] = $file['name'];
            }
            $formData = [
                'form_text_28' => $_POST['feedback-name'],
                'form_text_29' => $_POST['feedback-surname'],
                'form_text_30' => $_POST['feedback-mail'],
                'form_text_31' => $_POST['feedback-tel'],
                'form_text_32' => $_POST['feedback-comp'],
                'form_text_33' => $_POST['feedback-post'],
                'form_text_34' => $_POST['feedback-num'],
                'form_file_35' => $arFile ?? [],
                'form_textarea_36' => $_POST['feedback-textarea'],
            ];
            break;
        default:
            success('Заявка добавелена: ' . rand(666666666, 777777777));
    }


    if ($RESULT_ID = CFormResult::Add($FORM_ID, $formData)) {
        CFormCrm::AddLead($FORM_ID, $RESULT_ID);
        success('Заявка добавелена: ' . $RESULT_ID);
    } else {
        global $strError;
        success($strError, false);
    }
}