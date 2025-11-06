<?php

namespace Site;

final class Page
{
	public static function is404()
	{
		return \CSite::InDir('/404.php') || defined('ERROR_404');
	}

	public static function isIndex()
	{
		return \CSite::InDir(SITE_DIR . 'index.php');
	}

	public static function isSearch()
	{
		return \CSite::InDir(SITE_DIR . 'search/index.php');
	}

	public static function isAbout()
	{
		return \CSite::InDir(SITE_DIR . 'about/index.php');
	}

	public static function isAboutHistory()
	{
		return \CSite::InDir(SITE_DIR . 'about/history/index.php');
	}

	public static function isAboutProduction()
	{
		return \CSite::InDir(SITE_DIR . 'about/production/index.php');
	}

	public static function isBranchesList()
	{
		return \CSite::InDir(SITE_DIR . 'branches/index.php');
	}

	public static function showBreadcrumbs()
	{
		$methods = [
			'is404',
			'isIndex',
			'isAbout',
			'isSearch',
			'isAboutHistory',
			'isAboutProduction',
			'isBranchesList',
		];

		foreach ($methods as $method)
			if (method_exists(__CLASS__, $method) && self::$method() === true)
				return false;

		return true;
	}
}