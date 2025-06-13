<?php
// src/Entity/Product.php
namespace App\Entity;

class Product
{
    private ?int $id = null;
    private int $category_id;
    private string $title;
    private string $slug;
    private ?string $description = null;
    private ?string $brand = null;
    private float $price;
    private ?float $discount = null;
    private ?string $sku = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;

    public function getId(): ?int { return $this->id; }
    public function getCategoryId(): int { return $this->category_id; }
    public function setCategoryId(int $category_id): void { $this->category_id = $category_id; }
    public function getTitle(): string { return $this->title; }
    public function setTitle(string $title): void { $this->title = $title; }
    public function getSlug(): string { return $this->slug; }
    public function setSlug(string $slug): void { $this->slug = $slug; }
    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $description): void { $this->description = $description; }
    public function getBrand(): ?string { return $this->brand; }
    public function setBrand(?string $brand): void { $this->brand = $brand; }
    public function getPrice(): float { return $this->price; }
    public function setPrice(float $price): void { $this->price = $price; }
    public function getDiscount(): ?float { return $this->discount; }
    public function setDiscount(?float $discount): void { $this->discount = $discount; }
    public function getSku(): ?string { return $this->sku; }
    public function setSku(?string $sku): void { $this->sku = $sku; }
    public function getCreatedAt(): ?string { return $this->created_at; }
    public function setCreatedAt(?string $created_at): void { $this->created_at = $created_at; }
    public function getUpdatedAt(): ?string { return $this->updated_at; }
    public function setUpdatedAt(?string $updated_at): void { $this->updated_at = $updated_at; }
}
