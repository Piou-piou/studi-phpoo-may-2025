<?php

namespace App\Database;

use PDO;

class DbConnection
{
    private static $instance = null;

    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=mysql;dbname=php_object;port=3306', 'root', '');
    }

    public static function getInstance(): DbConnection
    {
        return self::createOrReturnInstance();
    }

    public static function getPdo(): PDO
    {
        return self::createOrReturnInstance()->pdo;
    }

    private static function createOrReturnInstance(): DbConnection
    {
        if (!self::$instance) {
            self::$instance = new DbConnection();
        }

        return self::$instance;
    }
}