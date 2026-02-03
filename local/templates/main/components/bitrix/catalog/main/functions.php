<?php


function getSliderDataForElements($arFields, $arProps)
{
    $result = [
        'count' => 0,
        'images' => [],
        '3d' => [],
        'video' => [],
    ];

    $imageIds = [];

    if (!empty($arFields['DETAIL_PICTURE'])) {
        $imageIds[] = $arFields['DETAIL_PICTURE'];
    }

    if (!empty($arProps['MORE_PHOTO']['VALUE']) && is_array($arProps['MORE_PHOTO']['VALUE'])) {
        foreach ($arProps['MORE_PHOTO']['VALUE'] as $photoId) {
            if (!empty($photoId)) {
                $imageIds[] = $photoId;
            }
        }
    }

    foreach ($imageIds as $imageId) {
        $originalPath = CFile::GetPath($imageId);

        $resizedImage = CFile::ResizeImageGet(
            $imageId,
            ['width' => 150, 'height' => 150],
            BX_RESIZE_IMAGE_PROPORTIONAL
        );

        $result['images'][] = [
            'original' => $originalPath,
            'resize' => $resizedImage['src']
        ];
    }

    if (!empty($arProps['MORE_3D']['VALUE']) && is_array($arProps['MORE_3D']['VALUE'])) {
        foreach ($arProps['MORE_3D']['VALUE'] as $fileId) {
            if (!empty($fileId)) {
                $result['3d'][] = CFile::GetPath($fileId);
            }
        }
    }

    if (!empty($arProps['MORE_VIDEO']['VALUE']) && is_array($arProps['MORE_VIDEO']['VALUE'])) {
        foreach ($arProps['MORE_VIDEO']['VALUE'] as $fileId) {
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

                $result['video'][] = [
                    'src' => CFile::GetPath($fileId),
                    'type' => $type
                ];
            }
        }
    }

    // Подсчитываем общее количество элементов (изображения + 3d + видео)
    $result['count'] = count($result['images']) + count($result['3d']) + count($result['video']);

    return $result;
}


function getSchemesData($schemes)
{
    $elementsIds = $schemes['VALUE'] ?? [];
    if (empty($elementsIds)) {
        return [];
    }

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

    return $elementsData;

}

function getMaterialsData($materials)
{
    $elementsIds = $materials['VALUE'] ?? [];
    if (empty($elementsIds)) {
        return [];
    }

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

    return $elementsData;

}

function getRegistryData($registry)
{
    $elementsIds = $registry['VALUE'] ?? [];
    if (empty($elementsIds)) {
        return [];
    }

    $elementsData = [];

    Bitrix\Main\Loader::includeModule('iblock');

    $elements = CIBlockElement::GetList([], ['IBLOCK_ID' => 9, 'ID' => $elementsIds, 'ACTIVE' => 'Y']);

    while ($element = $elements->GetNextElement()) {
        $arFields = $element->GetFields();
        $arProps = $element->GetProperties();


        $fileid = $arProps['FILE']['VALUE'] ?? false;
        $link = $arProps['LINK']['VALUE'] ?? false;
        $number = $arProps['NUMBER']['VALUE_XML_ID'] ?? false;

        $originalPath = CFile::GetPath($fileid);

        $elementsData[] = [
            'name' => $arFields['NAME'],
            'link' => $link,
            'number' => $number,
            'src' => $originalPath,
        ];

    }

    return $elementsData;

}

