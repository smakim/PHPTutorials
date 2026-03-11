<?php

declare(strict_types=1);

namespace App\ErrorHandling;

class Customer
{
    public function __construct(private array $billingInfo = [])
    {
    }

    public function getBillingInfo(): array
    {
        return $this->billingInfo;
    }
}