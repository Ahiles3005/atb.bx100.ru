<?php

namespace Site\Catalog;

use Bitrix\Main\Application;
use Bitrix\Main\Grid\Declension;
use Site\Iblock;

final class Section
{
	public static function getAwardsCount($sectionId)
	{
		$text = '';

		$cache = \Bitrix\Main\Data\Cache::createInstance();
		$cacheId = md5(serialize([__METHOD__, $sectionId]));
		$cacheDir = 'site/catalog/section';
		if ($cache->initCache(0, $cacheId, $cacheDir))
		{
			return $cache->getVars();
		}
		elseif ($cache->startDataCache())
		{
			$taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
			$taggedCache->startTagCache($cacheDir);
			$taggedCache->registerTag('iblock_id_' . Iblock::get('awards'));

			/**
			 * Получение списка всех наград для всех вин
			 */
			$awards = [];
			$awardsProducts = \CIBlockElement::GetList(false,
				[
					'IBLOCK_ID'             => Iblock::get('awards'),
					'SECTION_GLOBAL_ACTIVE' => 'Y',
					'SECTION_ACTIVE'        => 'Y',
					'ACTIVE'                => 'Y',
					'INCLUDE_SUBSECTIONS'   => 'Y'
				],
				false,
				false,
				['ID', 'IBLOCK_ID']
			);
			while ($awardsProduct = $awardsProducts->GetNextElement())
			{
				$fields = $awardsProduct->GetFields();
				$properties = $awardsProduct->GetProperties(false, ['CODE' => 'LINK_PRODUCTS']);
				$awards[ $fields['ID'] ] = (array)$properties['LINK_PRODUCTS']['VALUE'];
			}

			/**
			 * Получение всех товаров раздела
			 */
			$awardsList = [];

			$products = \CIBlockElement::GetList(false,
				[
					'IBLOCK_ID'             => Iblock::get('products'),
					'SECTION_ID'            => $sectionId,
					'SECTION_GLOBAL_ACTIVE' => 'Y',
					'SECTION_ACTIVE'        => 'Y',
					'ACTIVE'                => 'Y',
					'INCLUDE_SUBSECTIONS'   => 'Y'
				],
				false,
				false,
				['ID', 'IBLOCK_ID']
			);
			while ($product = $products->GetNext())
			{

				foreach ($awards as $awardId => $awardProducts)
					if (in_array($product['ID'], $awardProducts))
						$awardsList[] = $awardId;
			}

			if (empty($awardsList))
			{
				$taggedCache->abortTagCache();
				$cache->abortDataCache();
			}
			else
			{
				$count = count($awardsList);
				$text = "{$count} " . (new Declension('награда', 'награды', 'наград'))->get($count);
			}

			$taggedCache->endTagCache();
			$cache->endDataCache($text);
		}

		return $text;
	}
}