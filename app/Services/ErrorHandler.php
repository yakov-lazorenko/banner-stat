<?php

namespace App\Services;

/**
 * Обработчик ошибок
 */
class ErrorHandler
{
    /**
     * Callback-функция обработчика ошибок.
     * 
     * @param int $errno Уровень ошибки.
     * @param string $errstr Сообщение об ошибке.
     * @param string $errfile Файл с ошибкой.
     * @param int $errline Номер строки с ошибкой.
     */
    public function handle(
        int $errno,
        string $errstr,
        string $errfile,
        int $errline
    ) {

        // TODO: Обработка ошибок

        exit;
    }
}