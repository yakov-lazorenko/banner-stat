<?php

namespace App;

use App\Controllers\BannerController;

/**
 * Класс ядра приложения.
 */
class Application
{
    /**
     * Запустить приложение.
     * 
     * @return void
     */
    public function run(): void
    {
        try {

            // Запустить контроллер для показа баннера.
            (new BannerController())->display();

        } catch (\Throwable $e) {

            // TODO: Обработка исключений
            exit;

        }
    }
}
