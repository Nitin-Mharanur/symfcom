<?php
namespace App\Entity;

class OrderItem
{
    private ?int $id = null;
    private int $order_id;
    private int $product_id;
    private ?int $variant_id = null;
    private int $quantity;
    private float $price;

    public function getId(): ?int { return $this->id; }

    public function getOrderId(): int { return $this->order_id; }
    public function setOrderId(int $order_id): void { $this->order_id = $order_id; }

    public function getProductId(): int { return $this->product_id; }
    public function setProductId(int $product_id): void { $this->product_id = $product_id; }

    public function getVariantId(): ?int { return $this->variant_id; }
    public function setVariantId(?int $variant_id): void { $this->variant_id = $variant_id; }

    public function getQuantity(): int { return $this->quantity; }
    public function setQuantity(int $quantity): void { $this->quantity = $quantity; }

    public function getPrice(): float { return $this->price; }
    public function setPrice(float $price): void { $this->price = $price; }
}
