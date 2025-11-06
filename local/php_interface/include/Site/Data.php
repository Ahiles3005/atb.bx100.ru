<?php

namespace Site;

use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Loader;
use Bitrix\Main\Config\Option,
    CFile;

final class Data 
{
    const MODULE_CODE = 'victory.options';
    
    public static function getDirectoryDisplayValue($userSettings, $filter = [], $ttl = 2592000)
    {
        if (!Loader::includeModule('highloadblock'))
        {
            ShowError('Модуль `highloadblock` не установлен');
        }

        $tableName = $userSettings['TABLE_NAME'] ?? null;

        if (empty($tableName))
            return null;

        $hlblock = HighloadBlockTable::getList(
            [
                'select' => ['*'],
                'filter' => ['=TABLE_NAME' => $tableName]
            ]
        )->fetch();

        if (empty($hlblock))
            return null;

        $dataClass = HighloadBlockTable::compileEntity($hlblock)->getDataClass();

        $row = $dataClass::getRow(
            [
                'select' => ['*'],
                'filter' => $filter,
                'order'  => ['UF_SORT' => 'ASC'],
                'cache'  => [
                    'ttl'         => $ttl,
                    'cache_joins' => true
                ]
            ]
        );

        if (isset($row['UF_FILE']) && $row['UF_FILE'] > 0)
            $row['UF_FILE'] = \CFile::GetFileArray($row['UF_FILE']);

        return $row;
    }

    public static function getDirectoryDisplayValues($userSettings, $filter = [], $ttl = 2592000)
    {
        if (!Loader::includeModule('highloadblock'))
        {
            ShowError('Модуль `highloadblock` не установлен');
        }

        $tableName = $userSettings['TABLE_NAME'] ?? null;

        if (empty($tableName))
            return null;

        $hlblock = HighloadBlockTable::getList(
            [
                'select' => ['*'],
                'filter' => ['=TABLE_NAME' => $tableName]
            ]
        )->fetch();

        if (empty($hlblock))
            return null;

        $dataClass = HighloadBlockTable::compileEntity($hlblock)->getDataClass();

        $rows = $dataClass::getList(
            [
                'select' => ['*'],
                'filter' => $filter,
                'order'  => ['UF_SORT' => 'ASC'],
                'cache'  => [
                    'ttl'         => $ttl,
                    'cache_joins' => true
                ]
            ]
        )->fetchAll();

        return array_map(function ($row) {
            if (isset($row['UF_FILE']) && $row['UF_FILE'] > 0)
                $row['UF_FILE'] = \CFile::GetFileArray($row['UF_FILE']);

            return $row;
        }, $rows);
    }

    public static function buildSectionsTree($sections)
    {
        $tree = [];
        $indexedById = [];

        $sections = (array)$sections;
        $sections = array_filter($sections);

        foreach ($sections as &$section)
        {
            $indexedById[ $section['ID'] ] = &$section;
            $section['CHILDS'] = [];
        }

        foreach ($sections as &$section)
        {
            if (array_key_exists($section['IBLOCK_SECTION_ID'], $indexedById))
            {
                $indexedById[ $section['IBLOCK_SECTION_ID'] ]['CHILDS'][] = &$section;
            }
            else
            {
                $tree[ $section['ID'] ] = &$section;
            }
        }

        return $tree;
    }

    public static function buildMenuTree($input, &$start = 0, $level = 0)
    {
        static $md5Items = [];

        if (!$level)
        {
            $lastDepthLevel = 1;
            if ($input && is_array($input))
            {
                foreach ($input as $i => $arItem)
                {
                    if ($arItem['DEPTH_LEVEL'] > $lastDepthLevel)
                    {
                        if ($i > 0)
                        {
                            $input[ $i - 1 ]['IS_PARENT'] = 1;
                        }
                    }
                    $lastDepthLevel = $arItem['DEPTH_LEVEL'];
                }
            }
        }

        $childs = [];
        $count = count($input);
        for ($i = $start; $i < $count; ++$i)
        {
            $item = $input[ $i ];
            if (!isset($item))
            {
                continue;
            }
            if ($level > $item['DEPTH_LEVEL'] - 1)
            {
                break;
            }
            else
            {
                if (!empty($item['IS_PARENT']))
                {
                    $i++;
                    $item['CHILDS'] = self::buildMenuTree($input, $i, $level + 1);
                    $i--;
                }

                $childs[] = $item;
            }
        }
        $start = $i;

        if (is_array($childs))
        {
            foreach ($childs as $j => $item)
            {
                if ($item['PARAMS'])
                {
                    $md5 = md5($item['TEXT'] . $item['LINK'] . $item['SELECTED'] . $item['PERMISSION'] . $item['ITEM_TYPE'] . $item['IS_PARENT'] . serialize($item['ADDITIONAL_LINKS']) . serialize($item['PARAMS']));
                    if (isset($md5Items[ $md5 ][ $item['PARAMS']['DEPTH_LEVEL'] ]))
                    {
                        if (isset($md5Items[ $md5 ][ $item['PARAMS']['DEPTH_LEVEL'] ][ $level ]) || ($item['DEPTH_LEVEL'] === 1 && !$level))
                        {
                            unset($childs[ $j ]);
                            continue;
                        }
                    }
                    if (!isset($md5Items[ $md5 ]))
                    {
                        $md5Items[ $md5 ] = [$item['PARAMS']['DEPTH_LEVEL'] => [$level => true]];
                    }
                    else
                    {
                        $md5Items[ $md5 ][ $item['PARAMS']['DEPTH_LEVEL'] ][ $level ] = true;
                    }
                }
            }
        }

        if (!$level)
        {
            $md5Items = [];
        }

        return $childs;
    }
    
    public static function getOptionValue($optionCode) {
        return htmlspecialchars_decode(Option::get(self::MODULE_CODE, $optionCode));
    }

    public static function showImage($optionCode, $alt = '', $className = '') {
        $imageID = Option::get(self::MODULE_CODE, $optionCode);
        $arImage = CFile::GetFileArray($imageID);
        if ($arImage['SRC'] && stristr($arImage['CONTENT_TYPE'], 'image/')) {
            if ($className) {
                $className = ' class="' . $className . '"';
            }
            return '<img src="' . $arImage['SRC'] . '"' . $className . ' alt="' . $alt . '">';
        }
        return false;
    }
    
    public static function getImage($optionCode) {
        $imageID = Option::get(self::MODULE_CODE, $optionCode);
        $arImage = CFile::GetFileArray($imageID);

        return $arImage;
    }    

    public static function getFileArray($optionCode) {
        $fileID = Option::get(self::MODULE_CODE, $optionCode);
        return CFile::GetFileArray($fileID);
    }
}