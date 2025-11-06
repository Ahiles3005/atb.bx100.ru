<?php

namespace Site;

use Bitrix\Main\Application;

final class Template
{
	public static function showSvg($file)
	{
		$svg = Application::getDocumentRoot() . SITE_TEMPLATE_PATH . '/' . $file;
		$svg = preg_replace('#/{2,}#', '/', $svg);
		if (file_exists($svg)) {
			$content = file_get_contents($svg);
			// Удаляем XML-декларацию и завершающие переводы строк/пробелы
			$content = preg_replace('/^<\?xml[^>]*>\s*/i', '', $content);
			return rtrim($content);
		}

		$svg = Application::getDocumentRoot() . $file;
		if (file_exists($svg)) {
			$content = file_get_contents($svg);
			// Удаляем XML-декларацию и завершающие переводы строк/пробелы
			$content = preg_replace('/^<\?xml[^>]*>\s*/i', '', $content);
			return rtrim($content);
		}

		return '';
	}
}