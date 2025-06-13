<?php
namespace App\Entity;

class CartItem
{
    private ?int $id = null;
    private int $cart_id;
    private int $product_id;
    private ?int $variant_id = null;
    private int $quantity;

    public function getId(): ?int { return $this->id; }

    public function getCartId(): int { return $this->cart_id; }
    public function setCartId(int $cart_id): void { $this->cart_id = $cart_id; }

    public function getProductId(): int { return $this->product_id; }
    public function setProductId(int $product_id): void { $this->product_id = $product_id; }

    public function getVariantId(): ?int { return $this->variant_id; }
    public function setVariantId(?int $variant_id): void { $this->variant_id = $variant_id; }

    public function getQuantity(): int { return $this->quantity; }
    public function setQuantity(int $quantity): void { $this->quantity = $quantity; }
}
