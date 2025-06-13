<?php
class ProductVariant
{
    private ?int $id = null;
    private int $product_id;
    private ?string $color = null;
    private ?string $size = null;
    private int $stock;
    private ?float $price = null;
    private ?string $sku = null;
    private ?string $created_at = null;

    public function getId(): ?int { return $this->id; }
    public function getProductId(): int { return $this->product_id; }
    public function setProductId(int $product_id): void { $this->product_id = $product_id; }
    public function getColor(): ?string { return $this->color; }
    public function setColor(?string $color): void { $this->color = $color; }
    public function getSize(): ?string { return $this->size; }
    public function setSize(?string $size): void { $this->size = $size; }
    public function getStock(): int { return $this->stock; }
    public function setStock(int $stock): void { $this->stock = $stock; }
    public function getPrice(): ?float { return $this->price; }
    public function setPrice(?float $price): void { $this->price = $price; }
    public function getSku(): ?string { return $this->sku; }
    public function setSku(?string $sku): void { $this->sku = $sku; }
    public function getCreatedAt(): ?string { return $this->created_at; }
    public function setCreatedAt(?string $created_at): void { $this->created_at = $created_at; }
}
