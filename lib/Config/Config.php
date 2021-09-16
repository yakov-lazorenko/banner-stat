<?php

namespace Library\Config;

/**
 * Класс настроек приложения.
 */
class Config
{
    /**
     * @var array Опции настроек приложения.
     * Элементом массива может быть либо строка, либо массив строк.
     */
    protected $settings;

    public function __construct(string $file)
    {
        $this->settings = include($file);
    }


    /**
     * Получить нужную опцию настройки прилождения.
     * 
     * @param string $setting_name Название опции настройки.
     * @return string|array Значение опции настройки.
     */
    public function get(string $setting_name)
    {
        return $this->settings[$setting_name] ?? null;
    }


    /**
     * Установить настройку прилождения.
     * 
     * @param string $setting_name Название опции настройки.
     * @param string|array $setting_value Значение опции настройки.
     */
    public function set(string $setting_name, $setting_value)
    {
        $this->settings[$setting_name] = $setting_value;
    }


    public function all()
    {
        return $this->settings;
    }

}