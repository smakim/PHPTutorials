<?php

declare(strict_types=1);

namespace App\ErrorHandling;

use App\Exception\MissingBillingInfoException;

class Invoice
{

    public function __construct(public Customer $customer)
    {
    }

    public function process(float $amount): void {
        if ($amount <= 0) {
            throw new \InvalidArgumentException('Invalid invoice amount');
        }

        if (empty($this->customer->getBillingInfo())) {
            throw new MissingBillingInfoException();
        }
        echo 'Processing $' . $amount . ' invoice -' . '<br />' ;
        sleep(1);
        echo 'OK' . '<br />';
    }
}