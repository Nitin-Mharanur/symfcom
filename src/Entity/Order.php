<?php
namespace App\Entity;

class Order
{
    private ?int $id = null;
    private int $user_id;
    private string $status;
    private float $total;
    private ?string $created_at = null;

    public function getId(): ?int { return $this->id; }
    public function getUserId(): int { return $this->user_id; }
    public function setUserId(int $user_id): void { $this->user_id = $user_id; }

    public function getStatus(): string { return $this->status; }
    public function setStatus(string $status): void { $this->status = $status; }

    public function getTotal(): float { return $this->total; }
    public function setTotal(float $total): void { $this->total = $total; }

    public function getCreatedAt(): ?string { return $this->created_at; }
    public function setCreatedAt(?string $created_at): void { $this->created_at = $created_at; }
}
