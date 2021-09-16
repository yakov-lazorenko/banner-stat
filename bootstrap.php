<?php

// Подключение автозагрузчика PSR-4.
require_once ROOT_DIR . '/lib/Autoloader/Psr4AutoloaderClass.php';
$classAutoLoader = new Library\Autoloader\Psr4AutoloaderClass;

// Регистрация автозагрузчика.
$classAutoLoader->register();

// Register the base directories for the namespace prefix.
$classAutoLoader->addNamespace('App', ROOT_DIR . '/app');
$classAutoLoader->addNamespace('Library', ROOT_DIR . '/lib');

// Установка обработчика ошибок.
set_error_handler([new App\Services\ErrorHandler(), 'handle']);

// Загрузка всех сервисов приложения.
(new App\AppLoader())->load();
