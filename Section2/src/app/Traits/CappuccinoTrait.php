<?php

namespace App\Traits;

trait CappuccinoTrait{

    public function makeCappuccino()
    {
        // using static::class will print the class name
        echo static::class . ' is making Cappuccino using CappuccinoTrait.<br>';
    }
    private function makeDoubleCappuccino()
    {
        // using __CLASS__ will print the class name
        echo __CLASS__ . ' is making Double Cappuccino using CappuccinoTrait.<br>';
    }

    public function makeStrongCappuccino()
    {
        echo static::class . ' is making Strong Cappuccino using CappuccinoTrait.<br>';
    }


}