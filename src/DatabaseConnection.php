<?php

namespace src;

use PDO;
use PDOException;

class DatabaseConnection
{
    public static function createConnection()
    {
        try {
            $username = 'root';
            return new PDO("mysql:host=localhost;dbname=orders_management", $username);
        } catch (PDOException $e) {
            echo ('Ocorreu um erro na conexão do banco de dados!'.$e->getMessage());
        }
    }
}

