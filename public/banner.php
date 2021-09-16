<?php

// Корневая директория приложения
define('ROOT_DIR' , realpath('../'));

// Подключение атозагрузчика PSR-4, обработчика ошибок,
// загрузка всех необходимых сервисов.
require ROOT_DIR . '/bootstrap.php';

// Запуск ядра приложения.
(new App\Application())->run();
