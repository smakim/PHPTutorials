<?php

namespace App\Traits;

class CappuccinoMaker extends CoffeeMaker
{
    use CappuccinoTrait{
        // changing the visibility of the trait method to public
        CappuccinoTrait::makeDoubleCappuccino as public;
        
        // changing the name of the trait method
        // from makeStrongCappuccino to makeTripleCappuccino
        CappuccinoTrait::makeStrongCappuccino as makeTripleCappuccino;
    }

    // This method will override the method in the CappuccinoTrait
    public function makeCappuccino()
    {
        echo static::class . ' is making Cappuccino (CappuccinoMaker).<br>';
    }
}