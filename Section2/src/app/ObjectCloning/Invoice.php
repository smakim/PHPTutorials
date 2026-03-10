<?php

namespace App\ObjectCloning;

class Invoice
{
    private string $id;

    public function __construct()
    {
        echo ' Constructor called <br />';
        $this->id = uniqid('invoice_');
    }

    public static function create(): static {
        return new static();
    }
}