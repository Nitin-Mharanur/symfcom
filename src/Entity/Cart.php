<?php
namespace App\Entity;

class Cart
{
    private ?int $id = null;
    private int $user_id;
    private ?string $created_at = null;

    public function getId(): ?int { return $this->id; }
    public function getUserId(): int { return $this->user_id; }
    public function setUserId(int $user_id): void { $this->user_id = $user_id; }

    public function getCreatedAt(): ?string { return $this->created_at; }
    public function setCreatedAt(?string $created_at): void { $this->created_at = $created_at; }
}
