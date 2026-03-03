<?php

namespace App\Interfaces;

class RockyCollector implements DebtCollector
{
        public function __construct()
        {
                // do nothing
        }

        public function collect(float $owedAmount): float
        {
                echo 'Rocky Collector will collect the money!' . '<br>';
                // Rocky Collector returns atleast 65% of the owed amount
                return $owedAmount * 0.65;
        }

        // Implementing class can't override constants defined in the interface
        public const MY_CONSTANT = 5;
}
