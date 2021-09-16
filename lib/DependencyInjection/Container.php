<?php

namespace Library\DependencyInjection;

use Library\DependencyInjection\IContainer;

/**
 * Контейнер внедрения зависимостей.
 * Содержит объекты-сервисы, которые нужно использовать в приложении.
 */
class Container implements IContainer
{
    /**
     * @var array $objects Массив с объектами (сервисами).
     */
    protected $objects;

    /**
     * 
     */
    public function __construct()
    {
        $objects = [];
    }

    /**
     * Определяет, подключен ли объект к контейнеру.
     * 
     * @return bool Если true, то объект подключен.
     */
    public function has(string $object_name): bool
    {
        return isset($this->objects[$object_name]);
    }

    /**
     * Получить объект по его названию.
     * 
     * @param string $object_name Название объекта.
     * @return object
     */
    public function get(string $object_name): object
    {
        return $this->objects[$object_name];
    }

    /**
     * Подключить объект к контейнеру.
     * 
     * @param string $object_name Название объекта.
     * @param object $object_instance Экземпляр объекта.
     * @return void
     */
    public function set(string $object_name, object $object_instance): void
    {
        $this->objects[$object_name] = $object_instance;
    }


    /**
     * Регистрация объекта(сервиса) в контейнере
     */
    public function registerObject(string $object_name, object $object_instance): void
    {
        $this->set($object_name, $object_instance);
    }


    /**
     * Регистрация набора объектов в контейнере
     */
    public function registerObjects(array $objects): void
    {
        foreach ($objects as $object_name => $object_instance) {
            $this->set($object_name, $object_instance);
        }
    }


    public function delete(string $object_name): void
    {
        $this->objects[$object_name] = null;
    }


    public function getObjects(): array
    {
        return $this->objects;
    }

}
