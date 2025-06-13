<?php
namespace App\Entity;

class Review
{
    private ?int $id = null;
    private int $user_id;
    private int $product_id;
    private int $rating;
    private ?string $comment = null;
    private ?string $created_at = null;

    public function getId(): ?int { return $this->id; }

    public function getUserId(): int { return $this->user_id; }
    public function setUserId(int $user_id): void { $this->user_id = $user_id; }

    public function getProductId(): int { return $this->product_id; }
    public function setProductId(int $product_id): void { $this->product_id = $product_id; }

    public function getRating(): int { return $this->rating; }
    public function setRating(int $rating): void { $this->rating = $rating; }

    public function getComment(): ?string { return $this->comment; }
    public function setComment(?string $comment): void { $this->comment = $comment; }

    public function getCreatedAt(): ?string { return $this->created_at; }
    public function setCreatedAt(?string $created_at): void { $this->created_at = $created_at; }
}
