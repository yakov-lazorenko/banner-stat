<?php

namespace App\Services;

/**
 * Класс роутера для изображений.
 * Роутер определяет путь к файлу изображения исходя из URL
 * страницы на которой размещен баннер.
 */
class ImageRouter
{
    /**
     * @var array $routes Имена файлов картинок для всех страниц сайта, где размещен баннер
     */
    protected $routes = [];

    /**
     * Конструктор
     * 
     * @param string $routes_file Путь к файлу в котором заданы названия файлов для страниц,
     * на которых размещен баннер.
     * @return void
     */
    public function __construct(string $routes_file)
    {
        $this->routes = include($routes_file);
    }

    /**
     * Получить путь к файлу изображения исходя из URL
     * страницы на которой размещен баннер.
     * 
     * @param string $page_url URL страницы (на которой размещен баннер)
     * @return string
     */
    public function getImageFilePath(string $page_url): string
    {
        return ROOT_DIR . '/public/images/banners/' . $this->routes[$page_url];
    }
}
