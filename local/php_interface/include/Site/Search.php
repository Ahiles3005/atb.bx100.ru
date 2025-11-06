<?php

namespace Site;

final class Search
{
	public static function getGroupsName()
	{
		return [
			'PRODUCTS' => 'Вина',
			'NEWS'     => 'Новости',
			'TOURS'    => 'Винные туры'
		];
	}

	public static function groupResult($search)
	{
		$groups = [
			'PRODUCTS' => [],
			'NEWS'     => [],
			'TOURS'    => []
		];

		if (!is_array($search))
			return null;

		foreach ($search as $item)
		{
			if (!isset($item['PARAM2']))
				continue;

			switch ($item['PARAM2'])
			{
				case Iblock::get('products'):
					$groups['PRODUCTS'][ $item['ITEM_ID'] ] = $item;
					break;
				case Iblock::get('news'):
					$groups['NEWS'][ $item['ITEM_ID'] ] = $item;
					break;
				case Iblock::get('tours'):
					$groups['TOURS'][ $item['ITEM_ID'] ] = $item;
					break;
			}
		}

		return $groups;
	}

	public static function groupResultId($search)
	{
		$result = [];

		$groups = self::groupResult($search);

		foreach ($groups as $group => $items)
			$result[ $group ] = array_keys($items);

		return $result;
	}
}