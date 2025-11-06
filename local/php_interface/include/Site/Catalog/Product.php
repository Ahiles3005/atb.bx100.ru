<?php

namespace Site\Catalog;

use Bitrix\Iblock\PropertyTable;
use Bitrix\Main\Grid\Declension;

final class Product
{
	protected static $product = null;

	public static function set($product)
	{
		if (is_array($product))
			self::$product = $product;
	}

	public static function get()
	{
		if (is_array(self::$product))
			return self::$product;

		throw new \Exception('$product is not array');
	}

	public static function getBaseSectionUrl()
	{
		$path = (array)self::$product['SECTION']['PATH'];
		$section = array_shift($path);

		if (!empty($section['SECTION_PAGE_URL']))
			return $section['SECTION_PAGE_URL'];

		return null;
	}

	public static function getFilterUrl($code, $value, $suffix = '')
	{
		$baseSectionUrl = self::getBaseSectionUrl();
		if (empty($baseSectionUrl))
			return null;

		$baseSectionUrl = trim($baseSectionUrl, '/');

		$codeLower = mb_strtolower($code);
		if (empty($codeLower))
			return null;

		$valueLower = mb_strtolower($value);
		if (empty($valueLower))
			return null;

		$xmlId = mb_strtolower(self::$product['DISPLAY_PROPERTIES'][ $code ]['VALUE_XML_ID']);

		switch (self::$product['DISPLAY_PROPERTIES'][ $code ]['PROPERTY_TYPE'])
		{
			case PropertyTable::LISTBOX:
				return sprintf(
					'<a href="/%s/filter/%s-is-%s/">%s%s</a>',
					$baseSectionUrl, $codeLower, rawurlencode($xmlId), $value, $suffix
				);
				break;
			case PropertyTable::CHECKBOX:
			case PropertyTable::TYPE_ELEMENT:
			case PropertyTable::TYPE_STRING:
				return sprintf(
					'<a href="/%s/filter/%s-is-%s/">%s%s</a>',
					$baseSectionUrl, $codeLower, rawurlencode($valueLower), $value, $suffix
				);
			case PropertyTable::TYPE_NUMBER:
				return sprintf(
					'<a href="/%s/filter/%s-from-%s-to-%s/">%s%s</a>',
					$baseSectionUrl, $codeLower, $valueLower, $value, $value, $suffix
				);
		}
	}

	public static function hasDisplayValue($code)
	{
		$value = self::$product['DISPLAY_PROPERTIES'][ $code ]['DISPLAY_VALUE'] ?: null;

		return !empty($value);
	}

	public static function getDisplayName($code)
	{
		return self::$product['DISPLAY_PROPERTIES'][ $code ]['NAME'] ?: null;
	}

	public static function getDisplayValue($code)
	{
		$value = self::$product['DISPLAY_PROPERTIES'][ $code ]['DISPLAY_VALUE'] ?? null;

		switch ($code)
		{
			case 'CVET':
			case 'PARAM_MESTO_PROIZVODTSVA':
			case 'PARAM_PERIOD_SBORA':
			case 'PARAM_SPOSOB_SBORA':
			case 'PARAM_VOZRAT_LOZ':
			case 'PARAM_T_PODACHI':
				return self::getFilterUrl($code, $value);
			case 'KREPOST':
				return self::getFilterUrl($code, $value, '%');
			case 'SAHAR_PROC':
				return self::getFilterUrl($code, $value, ' г/дм3');
			case 'VIDERZHKA':
				return self::getFilterUrl($code, $value, ' мес');
			case 'SORT_VINOGRADA':
				$values = (array)self::$product['DISPLAY_PROPERTIES'][ $code ]['DISPLAY_VALUE'];
				$values = array_map('strip_tags', $values);
				$values = array_map(function ($value) use ($code) {
					return self::getFilterUrl($code, $value);
				}, $values);

				return implode(', ', $values);
			case 'OBIEM':
				return (array)self::$product['DISPLAY_PROPERTIES'][ $code ]['DISPLAY_VALUE'];
			default:
				return self::$product['DISPLAY_PROPERTIES'][ $code ]['DISPLAY_VALUE'] ?: [];
		}
	}

	public static function getXmlIdValue($code, $valueIndex = null)
	{
		if (is_numeric($valueIndex))
			return self::$product['DISPLAY_PROPERTIES'][ $code ]['VALUE_XML_ID'][ $valueIndex ] ?: null;
		else
			return self::$product['DISPLAY_PROPERTIES'][ $code ]['VALUE_XML_ID'] ?: [];
	}

	public static function getFile($code)
	{
		return self::$product['DISPLAY_PROPERTIES'][ $code ]['FILE_VALUE'] ?: [];
	}

	public static function getFileSrc($code)
	{
		return self::$product['DISPLAY_PROPERTIES'][ $code ]['FILE_VALUE']['SRC'] ?: '';
	}

	public static function getImageSrc($code)
	{
		return self::$product['DISPLAY_PROPERTIES'][ $code ]['FILE_VALUE']['SRC'] ?: \Site\Settings::get('empty_image', 'file');
	}

	public static function getFileName($code)
	{
		return htmlspecialcharsbx(self::$product['DISPLAY_PROPERTIES'][ $code ]['FILE_VALUE']['ORIGINAL_NAME'] ?? '');
	}

	public static function getImages()
	{
		$emptyImage = [
			'ID'    => 0,
			'SRC'   => \Site\Settings::get('empty_image', 'file'),
			'ALT'   => \Site\Seo::getDetailImageAlt(self::$product),
			'TITLE' => \Site\Seo::getDetailImageTitle(self::$product),
		];

		return [
			'0_5'  => self::getFile('BASE_IMAGE_0_5') ?: $emptyImage,
			'0_75' => self::$product['DETAIL_PICTURE'] ?: $emptyImage,
			'1_0'  => self::getFile('BASE_IMAGE_1_0') ?: $emptyImage,
		];
	}
}