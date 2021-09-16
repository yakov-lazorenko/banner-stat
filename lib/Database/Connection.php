<?php

namespace Library\Database;


/**
 * Класс соединения с базой данных.
 */
class Connection implements IConnection
{
    protected $driver = null;

    protected $database_host;
    protected $database_name;
    protected $username;
    protected $password;


    public function __construct (
        $database_host,
        $database_name,
        $username,
        $password
    ){
        $this->connect($database_host, $database_name, $username, $password);

        $this->database_host = $database_host;
        $this->database_name = $database_name;
        $this->username = $username;
        $this->password = $password;
    }


    public function connect(
        $database_host,
        $database_name,
        $username,
        $password
    ){
        $dsn = "mysql:host=$database_host;dbname=$database_name;charset=utf8mb4";
        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
            \PDO::ATTR_PERSISTENT => false,
        ];
        $this->driver = new \PDO($dsn, $username, $password, $options);
    }

    public function closeConnection()
    {
        $this->driver = null;
    }


    public function isConnected()
    {
        return !is_null($this->driver);
    }


    public function getDriver()
    {
        return $this->driver;
    }


    public function setDriver($driver)
    {
        $this->driver = $driver;
    }

}
