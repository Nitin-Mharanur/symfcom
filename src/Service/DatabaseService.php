<?php
namespace App\Service;

use PDO;

class DatabaseService
{
    private PDO $conn;

    public function __construct(string $dsn, string $user, string $password)
    {
        $this->conn = new PDO($dsn, $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function getConnection(): PDO
    {
        return $this->conn;
    }
}
