<?php

namespace Site;

use Bitrix\Main\Loader;

/**
 *
 */
final class Settings
{
    /**
     * @param $code
     * @return mixed|string|null
     * @throws \Bitrix\Main\LoaderException
     */
    protected static function getValue($code)
    {
        static $values = [];

        if (!Loader::includeModule('askaron.settings'))
        {
            throw new \Exception('Модуль `askaron.settings` не установлен');
        }

        $code = mb_strtoupper($code);

        if (!isset($values[ $code ]))
        {
            $value = \Bitrix\Main\Config\Option::get('askaron.settings', 'UF_' . $code);
            $values[ $code ] = $value;
        }

        return $values[ $code ] ?? null;
    }

    /**
     * @param $fileId
     * @return mixed|string
     */
    protected static function formatFile($fileId)
    {
        $fileId = (int)$fileId;
        if ($fileId > 0)
            $file = \CFile::GetFileArray($fileId);

        return $file['SRC'] ?? '';
    }

    /**
     * @param $phone
     * @return string
     */
    protected static function formatPhone($phone)
    {
        return '<a href="tel:' . Helper::phoneForLink($phone) . '">' . $phone . '</a>';
    }

    /**
     * @param $email
     * @return string
     */
    protected static function formatEmail($email)
    {
        return '<a href="mailto:' . $email . '">' . $email . '</a>';
    }

    protected static function formatAddress($address)
    {
        return nl2br($address);
    }

    /**
     * @param $code
     * @return bool
     * @throws \Bitrix\Main\LoaderException
     */
    public static function exists($code)
    {
        return !empty(self::getValue($code));
    }

    /**
     * @param $code
     * @param string $formatType file|phone|email
     * @return array|false|mixed|string|null
     * @throws \Exception
     */
    public static function get($code, $formatType = '')
    {
        $value = self::getValue($code);

        $formatType = trim($formatType);
        $formatType = mb_convert_case($formatType, MB_CASE_TITLE);
        if ($formatType && method_exists(__CLASS__, 'format' . $formatType))
        {
            if (is_array($value))
            {
                $value = array_map([__CLASS__, 'format' . $formatType], $value);
            }
            else
            {
                $value = call_user_func([__CLASS__, 'format' . $formatType], $value);
            }
        }

        return is_array($value) ? implode('', $value) : $value;
    }

    /**
     * @param $code
     * @param string $formatType file|phone|email
     * @throws \Bitrix\Main\LoaderException
     */
    public static function show($code, $formatType = '')
    {
        if (self::exists($code))
            echo self::get($code, $formatType);
    }
}