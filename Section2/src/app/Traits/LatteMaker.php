<?php

namespace App\Traits;

Class LatteMaker extends CoffeeMaker
{
    use LatteTrait;
    
    // this will throw an error since we are changing the value from the trait
    // in this class. The visibility, type and the value must be the same.
    // protected string $milkType = 'milk';
}