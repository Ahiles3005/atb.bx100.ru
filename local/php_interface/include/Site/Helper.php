<?php

namespace Site;

final class Helper
{
	public static function isEmail($str = '')
	{
		return check_email($str);
	}

	public static function isPhone($str = '')
	{
		$phone = preg_replace('/[^0-9]+/isu', '', $str);

		return mb_strlen($phone) > 5;
	}

	public static function phoneForLink($phone = '')
	{
		$phone = preg_replace('/[^0-9+]+/isu', '', $phone);

		if (str_starts_with($phone, '880'))
			return $phone;

		if (str_starts_with($phone, '8'))
			return '+' . substr_replace($phone, '7', 0, 1);

		return $phone;
	}

	public static function emailForLink($email = '')
	{
		return trim($email);
	}

	public static function getCoordinates($str = '')
	{
		$str = trim($str);
		if (empty($str))
			return [
				'LAT' => 0,
				'LON' => 0,
			];

		[$lat, $lon] = explode(',', $str);

		return [
			'LAT' => trim($lat),
			'LON' => trim($lon),
		];
	}
}