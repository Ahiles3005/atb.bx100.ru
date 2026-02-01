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

    // Собираем ID детальной картинки
    if (!empty($arFields['DETAIL_PICTURE'])) {
        $imageIds[] = $arFields['DETAIL_PICTURE'];
    }

    // Собираем ID из свойства MORE_PHOTO
    if (!empty($arProps['MORE_PHOTO']['VALUE']) && is_array($arProps['MORE_PHOTO']['VALUE'])) {
        foreach ($arProps['MORE_PHOTO']['VALUE'] as $photoId) {
            if (!empty($photoId)) {
                $imageIds[] = $photoId;
            }
        }
    }

    // Обрабатываем изображения: оригинал + ресайз 150x150
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

    // Собираем 3D объекты
    if (!empty($arProps['MORE_3D']['VALUE']) && is_array($arProps['MORE_3D']['VALUE'])) {
        foreach ($arProps['MORE_3D']['VALUE'] as $fileId) {
            if (!empty($fileId)) {
                $result['3d'][] = CFile::GetPath($fileId);
            }
        }
    }

    // Собираем видео
    // Собираем видео
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