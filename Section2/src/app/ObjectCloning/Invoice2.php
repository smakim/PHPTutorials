<?php

namespace App\ObjectCloning;

class Invoice2
{
    private string $id;

    public function __construct()
    {
        $this->id = uniqid('invoice_');
    }

    public function __clone()
    {
        echo ' __clone() called <br />';
        $this->id = uniqid('invoice_');
    }

}