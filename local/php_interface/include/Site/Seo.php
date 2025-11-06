<?php

namespace Site;

final class Seo
{
	public static function getSectionTitle($section)
	{
		if (
			isset($section['IPROPERTY_VALUES']['SECTION_PAGE_TITLE'])
			&& $section['IPROPERTY_VALUES']['SECTION_PAGE_TITLE'] !== ''
		)
		{
			return $section['IPROPERTY_VALUES']['SECTION_PAGE_TITLE'];
		}
		elseif (isset($section['FIELDS']['NAME']))
		{
			return $section['FIELDS']['NAME'];
		}
		elseif (isset($section['NAME']))
		{
			return $section['NAME'];
		}
	}

	public static function getElementTitle($element)
	{
		if (
			isset($element['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
			&& $element['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] !== ''
		)
		{
			return $element['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'];
		}
		elseif (isset($element['FIELDS']['NAME']))
		{
			return $element['FIELDS']['NAME'];
		}
		elseif (isset($element['NAME']))
		{
			return $element['NAME'];
		}

		return '{EMPTY TITLE}';
	}

	public static function getPreviewImageAlt($element)
	{
		if (
			isset($element['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_ALT'])
			&& $element['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_ALT'] !== ''
		)
		{
			return $element['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_ALT'];
		}
		elseif (isset($element['FIELDS']['NAME']))
		{
			return $element['FIELDS']['NAME'];
		}
		elseif (isset($element['NAME']))
		{
			return $element['NAME'];
		}
	}

	public static function getPreviewImageTitle($element)
	{
		if (
			isset($element['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE'])
			&& $element['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE'] !== ''
		)
		{
			return $element['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE'];
		}
		elseif (isset($element['FIELDS']['NAME']))
		{
			return $element['FIELDS']['NAME'];
		}
		elseif (isset($element['NAME']))
		{
			return $element['NAME'];
		}
	}

	public static function getDetailImageAlt($element)
	{
		if (
			isset($element['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'])
			&& $element['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'] !== ''
		)
		{
			return $element['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'];
		}
		elseif (isset($element['FIELDS']['NAME']))
		{
			return $element['FIELDS']['NAME'];
		}
		elseif (isset($element['NAME']))
		{
			return $element['NAME'];
		}
	}

	public static function getDetailImageTitle($element)
	{
		if (
			isset($element['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'])
			&& $element['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'] !== ''
		)
		{
			return $element['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'];
		}
		elseif (isset($element['FIELDS']['NAME']))
		{
			return $element['FIELDS']['NAME'];
		}
		elseif (isset($element['NAME']))
		{
			return $element['NAME'];
		}
	}
}