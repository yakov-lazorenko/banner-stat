<?php

namespace Library\DependencyInjection;

use Library\DependencyInjection\IContainer;

/**
 * Класс для управления внедрением зависимостей.
 */
class DI
{
    /**
     * @var IContainer Контейнер внедрения зависимостей.
     */
    protected static $container;

    /**
     * Подключить контейнер внедрения зависимостей.
     * 
     * @param IContainer Контейнер внедрения зависимостей.
     */
    public static function setContainer(IContainer $container): void
    {
        static::$container = $container;
    }

    /**
     * Получить контейнер внедрения зависимостей.
     * 
     * @return IContainer Контейнер внедрения зависимостей.
     */
    public static function getContainer(): IContainer
    {
        return static::$container;
    }

}
