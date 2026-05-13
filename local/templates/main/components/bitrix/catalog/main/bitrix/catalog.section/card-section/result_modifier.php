<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

// Получаем список ID активных элементов в текущем разделе
if (isset($arResult['ID']) && !empty($arResult['ID'])) {
    $elementIds = [];

    $rsElements = CIBlockElement::GetList(
        [],
        [
            'IBLOCK_ID' => $arResult['IBLOCK_ID'],
            'SECTION_ID' => $arResult['ID'],
            'ACTIVE' => 'Y',
            'INCLUDE_SUBSECTIONS' => 'N'
        ],
        false,
        false,
        ['ID']
    );

    while ($element = $rsElements->Fetch()) {
        $elementIds[] = $element['ID'];
    }

    $arResult['SECTION_ELEMENT_IDS'] = $elementIds;
}

// Получаем UF свойства раздела
if (isset($arResult['ID']) && !empty($arResult['ID'])) {
    $sectionId = $arResult['ID'];

    // Получаем все UF свойства раздела
    $rsSection = CIBlockSection::GetList(
        [],
        [
            'ID' => $sectionId,
            'IBLOCK_ID' => $arResult['IBLOCK_ID']
        ],
        false,
        ['UF_*']
    );

    if ($section = $rsSection->Fetch()) {
        // Фильтруем и обрабатываем UF свойства
        $ufProperties = [];
        foreach ($section as $key => $value) {
            if (strpos($key, 'UF_') === 0) {
                // Обрабатываем файловые свойства
                if (in_array($key, ['UF_MORE_PHOTO', 'UF_MORE_3D']) && is_array($value)) {
                    $files = [];
                    foreach ($value as $fileId) {
                        if (!empty($fileId)) {
                            $file = CFile::GetFileArray($fileId);
                            if ($file) {
                                $files[] = $file;
                            }
                        }
                    }
                    $ufProperties[$key] = $files;
                } elseif (in_array($key, ['UF_MORE_VIDEO']) && is_array($value)) {
                    $files = [];
                    foreach ($value as $fileId) {
                        if (!empty($fileId)) {
                            $arFile = CFile::GetByID($fileId)->Fetch();
                            $extension = strtolower($arFile['FILE_NAME'] ?? '');

                            // Определяем MIME тип по расширению
                            $extension = pathinfo($extension, PATHINFO_EXTENSION);
                            $mimeTypes = [
                                'mp4' => 'video/mp4',
                                'webm' => 'video/webm',
                                'ogg' => 'video/ogg',
                                'ogv' => 'video/ogg',
                                'mov' => 'video/quicktime',
                                'avi' => 'video/x-msvideo',
                            ];
                            $type = $mimeTypes[$extension] ?? 'video/mp4';

                            $ufProperties[$key][] = [
                                'src' => CFile::GetPath($fileId),
                                'type' => $type
                            ];
                        }
                    }
                    $ufProperties[$key] = $files;
                } // Обрабатываем сериализованные свойства
                elseif (in_array($key, ['UF_PROPERTY', 'UF_OPTIONS', 'UF_SVOISTVA_DLA_DETALNO']) && is_array($value)) {
                    $unserialized = [];
                    foreach ($value as $item) {
                        if (!empty($item) && is_string($item)) {
                            $data = unserialize($item, ['allowed_classes' => false]);
                            if ($data !== false) {
                                $unserialized[] = $data;
                            }
                        }
                    }
                    $ufProperties[$key] = $unserialized;
                } // Обрабатываем свойства типа Список
                elseif (in_array($key, ['UF_TAG']) && is_array($value)) {
                    $enumValues = [];
                    foreach ($value as $enumId) {
                        if (!empty($enumId)) {
                            $rsEnum = CUserFieldEnum::GetList([], ['ID' => $enumId]);
                            if ($enum = $rsEnum->Fetch()) {
                                $enumValues[] = $enum;
                            }
                        }
                    }
                    $ufProperties[$key] = $enumValues;
                } // Остальные свойства как есть
                else {
                    $ufProperties[$key] = $value;
                }
            }
        }

        // Добавляем в arResult
        $arResult['UF'] = $ufProperties;

        // Обрабатываем UF_ADVANTAGES - множественная привязка к элементам Highload-блока
        if (isset($arResult['UF']['UF_ADVANTAGES']) && is_array($arResult['UF']['UF_ADVANTAGES']) && !empty($arResult['UF']['UF_ADVANTAGES'])) {
            CModule::IncludeModule("highloadblock");


            $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
                'filter' => ['=ID' => 1]
            ])->fetch();

            if ($hlBlock) {
                $entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlBlock);
                $entityClass = $entity->getDataClass();

                $advantagesData = [];
                foreach ($arResult['UF']['UF_ADVANTAGES'] as $elementId) {
                    if (empty($elementId)) continue;

                    $elementData = $entityClass::getById($elementId)->fetch();
                    if ($elementData) {
                        $advantagesData[] = $elementData;
                    }
                }

                $arResult['UF']['UF_ADVANTAGES'] = $advantagesData;
            }
        }

        if (isset($arResult['UF']['UF_SCHEMES']) && is_array($arResult['UF']['UF_SCHEMES']) && !empty($arResult['UF']['UF_SCHEMES'])) {
            $elementsIds = $arResult['UF']['UF_SCHEMES'];

            $elementsData = [];

            Bitrix\Main\Loader::includeModule('iblock');

            $elements = CIBlockElement::GetList([], ['IBLOCK_ID' => 7, 'ID' => $elementsIds, 'ACTIVE' => 'Y']);

            while ($element = $elements->GetNextElement()) {
                $arFields = $element->GetFields();
                $arProps = $element->GetProperties();

                $fileid = $arProps['SCHEME']['VALUE'] ?? false;
                $originalPath = CFile::GetPath($fileid);
                $elementsData[] = [
                    'name' => $arFields['NAME'],
                    'src' => $originalPath,
                ];


            }

            $arResult['UF']['UF_SCHEMES'] = $elementsData;
        }

        if (isset($arResult['UF']['UF_MATERIALS']) && is_array($arResult['UF']['UF_MATERIALS']) && !empty($arResult['UF']['UF_MATERIALS'])) {
            $elementsIds = $arResult['UF']['UF_MATERIALS'];

            $elementsData = [];

            Bitrix\Main\Loader::includeModule('iblock');

            $elements = CIBlockElement::GetList([], ['IBLOCK_ID' => 8, 'ID' => $elementsIds, 'ACTIVE' => 'Y']);

            while ($element = $elements->GetNextElement()) {
                $arFields = $element->GetFields();
                $arProps = $element->GetProperties();


                $fileid = $arProps['FILE']['VALUE'] ?? false;
                $type = $arProps['TYPE']['VALUE'] ?? false;
                $typeId = $arProps['TYPE']['VALUE_XML_ID'] ?? false;

                $originalPath = CFile::GetPath($fileid);
                $elementsData[$typeId]['name'] = $type;
                $elementsData[$typeId]['elements'][] = [
                    'name' => $arFields['NAME'],
                    'src' => $originalPath,
                ];

            }

            $arResult['UF']['UF_MATERIALS'] = $elementsData;
        }
        if (isset($arResult['UF']['UF_REGISTRY']) && is_array($arResult['UF']['UF_REGISTRY']) && !empty($arResult['UF']['UF_REGISTRY'])) {
            $elementsIds = $arResult['UF']['UF_REGISTRY'];

            $elementsData = [];

            Bitrix\Main\Loader::includeModule('iblock');

            $elements = CIBlockElement::GetList([], ['IBLOCK_ID' => 9, 'ID' => $elementsIds, 'ACTIVE' => 'Y']);

            while ($element = $elements->GetNextElement()) {
                $arFields = $element->GetFields();
                $arProps = $element->GetProperties();

                $fileid = $arProps['FILE']['VALUE'] ?? false;
                $link = $arProps['LINK']['VALUE'] ?? false;
                $number = $arProps['NUMBER']['VALUE'] ?? false;

                $originalPath = CFile::GetPath($fileid);

                $elementsData[] = [
                    'name' => $arFields['NAME'],
                    'link' => $link,
                    'number' => $number,
                    'src' => $originalPath,
                ];

            }

            $arResult['UF']['UF_REGISTRY'] = $elementsData;
        }

    }
}


// Сохраняем данные для использования в component_epilog.php
$cp = $this->__component;
if (method_exists($cp, 'SetResultCacheKeys')) {
    $cp->SetResultCacheKeys(['UF', 'SECTION_ELEMENT_IDS']);
}

// Также сохраняем в свойство компонента для component_epilog
if (isset($arResult['UF'])) {
    $cp->arResult['UF'] = $arResult['UF'];
}
if (isset($arResult['SECTION_ELEMENT_IDS'])) {
    $cp->arResult['SECTION_ELEMENT_IDS'] = $arResult['SECTION_ELEMENT_IDS'];
}
