<?php

declare(strict_types=1);

namespace App;

class ConnectionSingleton
{
    /** @var ConnectionSingleton */
    private static $instance;

    /** @var \PDO */
    private $conn;

    /**
     * ConnectionSingleton constructor.
     */
    private function __construct()
    {
        // Altere os dados de conexão para testes
        $this->conn = new \PDO(
            "mysql:host=localhost;dbname=test",
            'root',
            ''
        );
    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }

    /**
     * @return ConnectionSingleton
     */
    public static function getInstance(): ConnectionSingleton
    {
        if (static::$instance === null) {
                static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * @return \PDO
     */
    public function getConnection(): \PDO
    {
        return $this->conn;
    }
}
