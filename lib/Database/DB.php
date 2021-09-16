<?php

namespace Library\Database;

/**
 * Инструмент, упрощающий работу с базой данных.
 */
class DB
{
    protected $connection;


    public function __construct (IConnection $connection)
    {
        $this->connection = $connection;
    }


    public function getConnection()
    {
        return $this->connection;
    }


    public function setConnection(IConnection $connection)
    {
        $this->connection = $connection;
    }


    public function closeConnection()
    {
        return $this->connection->closeConnection();
    }


    public function isConnected()
    {
        return $this->connection->isConnected();
    }

    /**
     * Выполняет SQL-комманду SELECT и возвращает массив строк.
     */
    public function select(string $queryString, array $queryParams = [])
    {
        $stmt = $this->connection->getDriver()->prepare($queryString);
        $stmt->execute($queryParams);
        return $stmt->fetchAll();
    }

    /**
     * Выполняет SQL-запрос и возвращает количество затронутых строк.
     */
    public function executeQuery(string $queryString, array $queryParams = [])
    {
        $stmt = $this->connection->getDriver()->prepare($queryString);
        $stmt->execute($queryParams);
        return $stmt->rowCount();
    }

}
