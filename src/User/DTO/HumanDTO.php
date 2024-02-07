<?php

namespace App\User\DTO;

class HumanDTO
{
    private float $weight;
    private ?int $age;
    private string $name;
    private ?int $height;

    public function __construct(
        string $name,
        float $weight,
        ?int $age = null,
        ?int $height = null
    ) {
        $this->name = $name;
        $this->weight = $weight;
        $this->age = $age;
        $this->height = $height;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }
    public function getAge(): ?int
    {
        return $this->age;
    }
    public function getWeight(): float
    {
        return $this->weight;
    }
}