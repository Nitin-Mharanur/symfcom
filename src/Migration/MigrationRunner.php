<?php

namespace App\Migration;

use App\Service\DatabaseService;
use PDO;

class MigrationRunner
{
    private PDO $pdo;
    private string $migrationPath;

    public function __construct(DatabaseService $db)
    {
        $this->pdo = $db->getConnection();
        $this->migrationPath = __DIR__ . '/migrations';

        $this->initializeMigrationTable();
    }

    private function initializeMigrationTable(): void
    {
        $this->pdo->exec("
            CREATE TABLE IF NOT EXISTS migrations (
                id INT AUTO_INCREMENT PRIMARY KEY,
                filename VARCHAR(255) UNIQUE NOT NULL,
                executed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ");
    }

    public function run(): void
    {
        $files = scandir($this->migrationPath);
        $applied = $this->getAppliedMigrations();

        foreach ($files as $file) {
            if (!str_ends_with($file, '.sql') || in_array($file, $applied)) {
                continue;
            }

            $sql = file_get_contents($this->migrationPath . '/' . $file);
            try {
                $this->pdo->exec($sql);
                $this->recordMigration($file);
                echo "✅ Applied migration: $file\n";
            } catch (\Throwable $e) {
                echo "❌ Error applying $file: " . $e->getMessage() . "\n";
                break;
            }
        }
    }

    private function getAppliedMigrations(): array
    {
        $stmt = $this->pdo->query("SELECT filename FROM migrations");
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    private function recordMigration(string $filename): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO migrations (filename) VALUES (?)");
        $stmt->execute([$filename]);
    }
}
