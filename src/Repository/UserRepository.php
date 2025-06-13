<?php
namespace App\Repository;

use App\Entity\User;
use App\Service\DatabaseService;
use PDO;


class UserRepository
{
    private PDO $pdo;

    public function __construct(DatabaseService $db)
    {
        $this->pdo = $db->getConnection();
    }

    public function create(User $user): int {
        $stmt = $this->pdo->prepare("INSERT INTO users (name,email,password) VALUES (?, ?, ?)");
        $stmt->execute([$user->getName(), $user->getEmail(), $user->getPassword()]);
        return (int) $this->pdo->lastInsertId();
    }
}
