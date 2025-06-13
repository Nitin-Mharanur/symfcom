<?php
// src/Entity/Category.php
namespace App\Entity;

class Category
{
    private ?int $id = null;
    private ?int $parent_id = null;
    private string $name;
    private string $slug;
    private ?string $created_at = null;

    public function getId(): ?int { return $this->id; }
    public function getParentId(): ?int { return $this->parent_id; }
    public function setParentId(?int $parent_id): void { $this->parent_id = $parent_id; }
    public function getName(): string { return $this->name; }
    public function setName(string $name): void { $this->name = $name; }
    public function getSlug(): string { return $this->slug; }
    public function setSlug(string $slug): void { $this->slug = $slug; }
    public function getCreatedAt(): ?string { return $this->created_at; }
    public function setCreatedAt(?string $created_at): void { $this->created_at = $created_at; }
}
