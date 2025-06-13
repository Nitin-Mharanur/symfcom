<?php
class ProductImage
{
    private ?int $id = null;
    private int $product_id;
    private string $url;
    private bool $is_primary = false;
    private ?string $created_at = null;

    public function getId(): ?int { return $this->id; }
    public function getProductId(): int { return $this->product_id; }
    public function setProductId(int $product_id): void { $this->product_id = $product_id; }
    public function getUrl(): string { return $this->url; }
    public function setUrl(string $url): void { $this->url = $url; }
    public function isPrimary(): bool { return $this->is_primary; }
    public function setPrimary(bool $is_primary): void { $this->is_primary = $is_primary; }
    public function getCreatedAt(): ?string { return $this->created_at; }
    public function setCreatedAt(?string $created_at): void { $this->created_at = $created_at; }
}
