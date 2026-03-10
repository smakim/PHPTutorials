<?php

namespace App\Serialization;

class Invoice
{
    private string $id;

    protected string $id2 = 'id2Vaue';

    public string $id3 = 'id3Value';
    

    public function __construct()
    {
        $this->id = uniqid('invoice_');
    }

}