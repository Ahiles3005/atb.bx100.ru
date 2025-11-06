<?php
use Bitrix\Main\Loader;

// Регистрируем классы проекта через Bitrix Autoloader
Loader::registerAutoLoadClasses(null, [
	'Site\\Ajax' => '/local/php_interface/include/Site/Ajax.php',
	'Site\\Data' => '/local/php_interface/include/Site/Data.php',
	'Site\\Helper' => '/local/php_interface/include/Site/Helper.php',
	'Site\\Iblock' => '/local/php_interface/include/Site/Iblock.php',
	'Site\\News' => '/local/php_interface/include/Site/News.php',
	'Site\\Page' => '/local/php_interface/include/Site/Page.php',
	'Site\\Search' => '/local/php_interface/include/Site/Search.php',
	'Site\\Seo' => '/local/php_interface/include/Site/Seo.php',
	'Site\\Settings' => '/local/php_interface/include/Site/Settings.php',
	'Site\\Template' => '/local/php_interface/include/Site/Template.php',
	'Site\\Catalog\\Product' => '/local/php_interface/include/Site/Catalog/Product.php',
	'Site\\Catalog\\Section' => '/local/php_interface/include/Site/Catalog/Section.php',
]);
