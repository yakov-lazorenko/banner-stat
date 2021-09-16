<?php

namespace App;

use App\Services\ImageRouter;
use Library\DependencyInjection\DI;
use Library\DependencyInjection\Container;
use Library\Database\Connection as DatabaseConnection;
use Library\Database\DB; // Data Access Class
use Library\Config\Config;

/**
 * Класс инициализации и загрузки сервисов приложения.
 */
class AppLoader
{
    /**
     * Инициализация и загрузка необходимых сервисов приложения.
     * 
     * @return void
     */
    public function load(): void
    {
        // Создание контейнера внедрения зависимостей.
        DI::setContainer(new Container());

        // Подключение класса содержащего настройки приложения.
        $config = new Config(ROOT_DIR . '/config.php');

        // Создание класса соединения с БД.
        $connection = new DatabaseConnection(
            $config->get('db_host'),
            $config->get('db_name'),
            $config->get('db_username'),
            $config->get('db_password')
        );

        // Создание класса реализующего управление БД.
        $db = new DB($connection); // Data Access Class

        // Создание роутера для изображений.
        // Роутер определяет путь к файлу изображения исходя из URL
        // страницы на которой размещен баннер.
        $router = new ImageRouter(ROOT_DIR . '/image_routes.php');

        //Регистрация объектов в контейнере внедрения зависимостей.
        DI::getContainer()->registerObjects([
            'config' => $config,
            'image_router' => $router,
            'db' => $db,
        ]);
    }
}
