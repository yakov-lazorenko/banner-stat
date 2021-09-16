<?php

namespace Library\Image;

/**
 * Класс для выполнения различных операций с изображениями.
 */
class Image
{
    public function getMimeTypeByFileName(string $file_name) : string
    {
        $extension = explode('.', $file_name)[1];
        switch ($extension) {
            case 'jpg' :
                $tmpFileType = 'image/jpeg';
                break;
            case 'jpeg' :
                $tmpFileType = 'image/jpeg';
                break;
            case 'png':
                $tmpFileType = 'image/png';
                break;
            case 'gif':
                $tmpFileType = 'image/gif';
                break;
        }
        return $tmpFileType;
    }

}
