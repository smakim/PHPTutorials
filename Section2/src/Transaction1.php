<?php

declare(strict_types=1);
class Transaction1
{
    private float $amount;
    private string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function __destruct()
    {
        echo 'Desctucting transaction: ' . $this->description . PHP_EOL;
    }

    public function addTax(float $taxRate): Transaction1
    {
        $this->amount += $this->amount * $taxRate / 100;
        return $this;
    }

    public function applyDiscount(float $discountRate): Transaction1
    {
        $this->amount -= $this->amount * $discountRate / 100;
        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
}

class Transaction2
{

    public function __construct(
        private float $amount,
        private string $description
    ) {}
}
