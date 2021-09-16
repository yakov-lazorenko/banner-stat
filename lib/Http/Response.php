<?php

namespace Library\Http;

use Library\File\File;
use Library\Image\Image;

/**
 * Класс позволяющий сформировать и отправить HTTP ответ (response).
 */
class Response
{
    /**
     * Вернуть пользователю HTTP ответ в виде содержимого графического файла.
     */
    public function retrieveImageFile(string $imageFilePath, bool $disable_cache = false): void
    {
        $fileService = new File;

        $file_name = $fileService->getFileNameFromPath($imageFilePath);

        $mime_type = (new Image())->getMimeTypeByFileName($file_name);

        $fp = fopen($imageFilePath, 'rb');

        header('Content-Type: ' . $mime_type);
        header('Content-Length: ' . filesize($imageFilePath));

        if ($disable_cache) {
            header("Cache-Control: no-cache, no-store, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header('Expires: Wed, 01 Sep 2021 00:00:00 GMT');
            header('Pragma: no-cache');
        }

        fpassthru($fp);
        exit;
    }
}
