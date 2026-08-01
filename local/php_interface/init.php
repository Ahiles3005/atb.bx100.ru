<?php
/**
 * Файл инициализации сайта
 * Подключается автоматически при каждом запросе
 */

// Регистрация обработчиков событий, подключение дополнительных классов и т.д.

// Установка локали для корректного отображения дат
setlocale(LC_TIME, 'ru_RU.UTF-8');

// Автозагрузка классов проекта
require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/autoload.php';


define('AHILES3005_NO_IMAGE','/images/home/hm-ind_3.png');


if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/ahiles3005/property_code_link.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/ahiles3005/property_code_link.php';
}
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/ahiles3005/multiple_string_property.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/ahiles3005/multiple_string_property.php';
}
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/ahiles3005/section_multiple_string.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/ahiles3005/section_multiple_string.php';
}
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/ahiles3005/characteristic_list_property.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/ahiles3005/characteristic_list_property.php';
}
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/ahiles3005/characteristic_list_section.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/ahiles3005/characteristic_list_section.php';
}

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/ahiles3005/Helper.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/ahiles3005/Helper.php';
}

