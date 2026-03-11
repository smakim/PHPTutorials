<?php

declare(strict_types=1);

namespace App\ErrorHandling;

use App\Exception\InvoiceException;
use App\Exception\MissingBillingInfoException;

class Invoice2
{

    public function __construct(public Customer $customer) {}

    public function process(float $amount): void
    {
        if ($amount <= 0) {
            // throw exception using a static method
            throw InvoiceException::invalidInvoiceAmount();
        }

        if (empty($this->customer->getBillingInfo())) {
            // throw exception using a static method
            throw InvoiceException::missingBillingInfo();
        }
        echo 'Processing $' . $amount . ' invoice -' . '<br />';
        sleep(1);
        echo 'OK' . '<br />';
    }
}
