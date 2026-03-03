<?php

namespace App\Interfaces;

class CollectionAgency implements DebtCollector {
	public function __construct() {
        // do nothing
	}

	public function collect(float $owedAmount): float {
        // implement this method to return atleast half of the owed amount
        $guaranteedAmount = $owedAmount * 0.5;

        // generate some random nbr between guaranteed and owed amounts
        return mt_rand($guaranteedAmount, $owedAmount);
	}

    // Implementing class can't override constants defined in the interface
    public const MY_CONSTANT = 5;


}