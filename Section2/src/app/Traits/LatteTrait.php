<?php

namespace App\Traits;

trait LatteTrait{

    protected string $milkType = 'whole-milk';

    public static int $x = 10;

    public function makeLatte()
    {
        echo static::class . ' is making Latte with '. $this->milkType . ' using LatteTrait.<br>';
    }

    // This method will override the method in the parent class
    public function makeCoffee()
    {
        echo static::class . ' is making Coffee (LatteTrait).<br>';
    }

    public static function staticFunction()
    {
        echo static::class . ' is static function in LatteTrait.<br>';
    }

}