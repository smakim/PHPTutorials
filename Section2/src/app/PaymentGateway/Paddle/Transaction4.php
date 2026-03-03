<?php
declare(strict_types = 1);

namespace App\PaymentGateway\Paddle;

class Transaction4{

    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function process() {
        echo "processing ". $this->amount . " paddle transaction." . '<br>';
        $this->generateReceipt();

    }

    public function copyFrom(Transaction4 $srcTransaction) {
        // you can access private properties and functions of other
        // objects of the same class
        var_dump($srcTransaction->amount, $srcTransaction->generateReceipt());
    }

    private function generateReceipt() {
        echo "Receipt generated for amount: " . $this->amount . '<br>';
        return true;
    }
}