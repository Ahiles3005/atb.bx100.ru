<?php

namespace Site;

final class Iblock
{
	protected static $iblocks = [
		'products'                 => 1,
		'news'                     => 4,
		'awards'                   => 6,
		'partners'                 => 7,
		'persons'                  => 8,
		'branches'                 => 9,
		'tours'                    => 10,
		'history'                  => 11,
		'production'               => 12,
		'documents'                => 13,
		'banners_catalog_sections' => 14,
		'hr_center_vacancies'      => 16,
		'shops'                    => 18,
		'hr_center_tabs'           => 20,
	];

	public static function getId($code)
	{
		if (empty($code))
			return null;

		$code = mb_strtolower($code);
		$iblockId = self::$iblocks[ $code ];

		if (empty($iblockId))
			throw new \Exception('Не задан ID информационного блока для кода `' . $code . '`');

		return $iblockId;
	}
}