<?php

namespace App\Anonymous;

class ClassA
{

    public function __construct(public int $x, public int $y) {
        echo 'ClassA constructor called <br />';
    }
    public function methodA(): string
    {
        return 'ClassA methodA called <br />';
    }

    public function methodB(): object
    {
        return new class {

        };
    }

    public function methodC(): object
    {
        return new class ($this->x, $this->y) extends ClassA {
            public function __construct(public int $x, public int $y) {
                parent::__construct($x, $y);
                echo $this->methodA();
            }
        };
    }
}
