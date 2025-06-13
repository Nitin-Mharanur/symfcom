<?php
namespace App\Entity;

class Address
{
    private ?int $id = null;
    private int $user_id;
    private string $name;
    private string $phone;
    private string $pincode;
    private string $address_line1;
    private ?string $address_line2 = null;
    private string $city;
    private string $state;
    private string $country;
    private string $type;

    public function getId(): ?int { return $this->id; }
    public function getUserId(): int { return $this->user_id; }
    public function setUserId(int $user_id): void { $this->user_id = $user_id; }

    public function getName(): string { return $this->name; }
    public function setName(string $name): void { $this->name = $name; }

    public function getPhone(): string { return $this->phone; }
    public function setPhone(string $phone): void { $this->phone = $phone; }

    public function getPincode(): string { return $this->pincode; }
    public function setPincode(string $pincode): void { $this->pincode = $pincode; }

    public function getAddressLine1(): string { return $this->address_line1; }
    public function setAddressLine1(string $address_line1): void { $this->address_line1 = $address_line1; }

    public function getAddressLine2(): ?string { return $this->address_line2; }
    public function setAddressLine2(?string $address_line2): void { $this->address_line2 = $address_line2; }

    public function getCity(): string { return $this->city; }
    public function setCity(string $city): void { $this->city = $city; }

    public function getState(): string { return $this->state; }
    public function setState(string $state): void { $this->state = $state; }

    public function getCountry(): string { return $this->country; }
    public function setCountry(string $country): void { $this->country = $country; }

    public function getType(): string { return $this->type; }
    public function setType(string $type): void { $this->type = $type; }
}
