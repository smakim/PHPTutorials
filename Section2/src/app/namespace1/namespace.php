<?php
declare(strict_types = 1);

namespace namespace1;

class ExampleNamespace2 {
    public function __construct()
    {
        var_dump(\explode(',', 'hello, world')); // use explode function from the global namespace
    }
}

function explode($separator, $str) {
    echo 'foo!';
}