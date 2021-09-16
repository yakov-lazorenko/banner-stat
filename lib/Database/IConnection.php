<?php

namespace Library\Database;

/**
 * Интерфейс соединения с базой данных.
 */
interface IConnection
{

    public function connect(
        string $database_host,
        string $database_name,
        string $username,
        string $password
    );

    public function closeConnection();

    public function isConnected();

    public function getDriver();

    public function setDriver($driver);

}
