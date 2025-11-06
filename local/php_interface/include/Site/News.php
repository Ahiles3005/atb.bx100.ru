<?php

namespace Site;

use Bitrix\Main\Application;

final class News
{
	public static function getFilterProducts($elementId)
	{
		if (empty($elementId))
			return null;

		$filter = [];

		$cacheId = md5(serialize([__METHOD__, func_get_args()]));
		$cache = \Bitrix\Main\Data\Cache::createInstance();
		if ($cache->initCache(259200, $cacheId, 'site/news'))
		{
			$filter = $cache->getVars();
		}
		elseif ($cache->startDataCache())
		{
			$taggedCache = Application::getInstance()->getTaggedCache();
			$taggedCache->startTagCache('site/news');
			$taggedCache->registerTag('iblock_id_' . Iblock::get('news'));

			$elements = \CIBlockElement::GetList(
				['SORT' => 'ASC'],
				['IBLOCK_ID' => Iblock::get('news'), '=ID' => $elementId],
				false,
				false,
				['ID', 'IBLOCK_ID']
			);
			if ($element = $elements->GetNextElement())
			{
				$properties = $element->GetProperties(false, ['CODE' => 'LINK_PRODUCTS']);
				if (empty($properties['LINK_PRODUCTS']['VALUE']))
				{
					$taggedCache->abortTagCache();
					$cache->abortDataCache();
				}
				else
				{
					$filter['ID'] = $properties['LINK_PRODUCTS']['VALUE'];
				}
			}
			else
			{
				$taggedCache->abortTagCache();
				$cache->abortDataCache();
			}
			$taggedCache->endTagCache();
			$cache->endDataCache($filter);
		}

		return $filter;
	}

	public static function getFilterNews($elementId)
	{
        $elements = \CIBlockElement::GetList(
                ['SORT' => 'ASC'],
                ['IBLOCK_ID' => Iblock::get('news'), '=ID' => $elementId],
                false,
                false,
                ['ID', 'IBLOCK_ID']
            );
            if ($element = $elements->GetNextElement())
            {
                $properties = $element->GetProperties(false, ['CODE' => 'SAME_NEWS']);
                if(!empty($properties['SAME_NEWS']['VALUE'])) {
                    return ['ID' => $properties['SAME_NEWS']['VALUE']];    
                }
                else {
                    return ['!ID' => $elementId];
                }                                                
            } 
		
	}

	public static function getFilterAwards($elementId)
	{
		if (empty($elementId))
			return null;

		$filter = [];

		$cacheId = md5(serialize([__METHOD__, func_get_args()]));
		$cache = \Bitrix\Main\Data\Cache::createInstance();
		if ($cache->initCache(2592000, $cacheId, 'site/news'))
		{
			$filter = $cache->getVars();
		}
		elseif ($cache->startDataCache())
		{
			$taggedCache = Application::getInstance()->getTaggedCache();
			$taggedCache->startTagCache('site/news');
			$taggedCache->registerTag('iblock_id_' . Iblock::get('news'));

			$elements = \CIBlockElement::GetList(
				['SORT' => 'ASC'],
				['IBLOCK_ID' => Iblock::get('news'), '=ID' => $elementId, '!PROPERTY_LINK_AWARDS' => false],
				false,
				false,
				['ID', 'PROPERTY_LINK_AWARDS']
			);
			if ($element = $elements->GetNext())
			{
				$filter['ID'] = $element['PROPERTY_LINK_AWARDS_VALUE'];
			}
			else
			{
				$taggedCache->abortTagCache();
				$cache->abortDataCache();
			}
			$taggedCache->endTagCache();
			$cache->endDataCache($filter);
		}

		return $filter;
	}
}