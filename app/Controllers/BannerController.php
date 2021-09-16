<?php

namespace App\Controllers;

use App\Factories\BannerDisplayFactory;
use App\Repositories\BannerDisplayRepository;
use Library\DependencyInjection\DI;
use Library\Http\Response;

/**
 * Контроллер для обработки запроса на показ баннера
 */
class BannerController
{
    /**
     * Показать баннер пользователю.
     * 
     * @return void
     */
    public function display(): void
    {
        // Создать объект класса показа баннера BannerDisplay.
        $bannerDisplay = BannerDisplayFactory::build();

        // создать
        $repository = new BannerDisplayRepository();

        // Записать в БД статистику показа баннера.
        $repository->update($bannerDisplay);

        // Получить роутер для изображений из контейнера внедрения зависимостей.
        // Роутер определяет путь к файлу изображения исходя из URL
        // страницы на которой размещен баннер.
        $router = DI::getContainer()->get('image_router');

        // Получить с помощью роутера путь к файлу изображения.
        $imageFilePath = $router->getImageFilePath($bannerDisplay->getPageUrl());

        // Вернуть пользователю содержиимое графического файла.
        (new Response())->retrieveImageFile($imageFilePath, true);
    }

}
