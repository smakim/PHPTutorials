<?php
declare(strict_types = 1);

namespace App\namespace1;

class ExampleNamespace
{
    public function __construct()
    {
        var_dump(\explode(',', 'hello, world'));
    }
}
