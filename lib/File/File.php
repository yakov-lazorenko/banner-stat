<?php

namespace Library\File;

/**
 * Класс для работы с файловой системой.
 */
class File
{

    public function getFileExtension(string $filename)
    {
        $dotpos = strrpos($filename, '.');
        return $dotpos !== false ? substr($filename, $dotpos + 1) : '';
    }


    public function getFileNameWithoutExtension(string $filename)
    {
        $dotpos = strrpos($filename, '.');
        return $dotpos !== false ? substr($filename, 0, $dotpos) : $filename;
    }


    public function isFileExists(string $file_path)
    {
        return file_exists($file_path);
    }


    public function makeDir(string $dir_path, int $mode = 0777, bool $recursive = false)
    {
        return mkdir($dir_path, $mode, $recursive);
    }


    public function isDir(string $dir_path)
    {
        return is_dir($dir_path);
    }


    public function delete(string $file_path)
    {
        unlink($file_path);
    }


    public function getFileDir(string $file_path)
    {
        return dirname($file_path);
    }


    public function getFileNameFromPath(string $file_path)
    {
        return basename($file_path);
    }
}
