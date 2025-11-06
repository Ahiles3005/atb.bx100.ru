<?php

namespace Site;

final class Ajax
{
	public static function isAjax()
	{
		$request = \Bitrix\Main\Context::getCurrent()->getRequest();

		return (
			$request->isAjaxRequest() ||
			(
				isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
				strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
			) ||
			(
				isset($_REQUEST['ajax']) &&
				strtolower($_REQUEST['ajax']) == 'y'
			) ||
			(
				isset($_REQUEST['ajax_get']) &&
				strtolower($_REQUEST['ajax_get']) == 'y'
			) || isset($_REQUEST['bxajaxid'])
		);
	}

	public static function restartBuffer($part)
	{
		global $APPLICATION;

		switch ($part)
		{
			case 'start':
				if (self::isAjax())
					$APPLICATION->RestartBuffer();
				break;
			case 'end':
				if (self::isAjax())
					die;
		}
	}
}