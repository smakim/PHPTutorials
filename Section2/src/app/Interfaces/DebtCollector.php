<?php

namespace App\Interfaces;

interface DebtCollector {

    // All methods must be public
    public function collect(float $amount): float;

    // If your interface class has constructor method, all
    // implementation classes must have a constructor as well.
    public function __construct();

    // Interfaces may only include hooked properties, properties are not allowd
    // public int $x;

    // Constanta are allowed
    public const MY_CONSTANT = 1;
}
