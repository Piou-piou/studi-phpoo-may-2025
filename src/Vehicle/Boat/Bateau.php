<?php

namespace App\Vehicle\Boat;

use App\Vehicle\AvancerTrait;

class Bateau
{
    use AvancerTrait;

    public function __construct(
        private string $name,
        private int $buildYear,
        private string $type,
        private int $passengerNumber = 100,
        private ?int $destructionYear = null
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBuildYear(): int
    {
        return $this->buildYear;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getPassengerNumber(): int
    {
        return $this->passengerNumber;
    }
}