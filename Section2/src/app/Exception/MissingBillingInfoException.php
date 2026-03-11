<?php

namespace App\Exception;

use Exception;

class MissingBillingInfoException extends Exception
{
    protected $message = 'Missing billing info';
}