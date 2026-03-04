<?php

namespace App\StaticBinding;

class ClassB extends ClassA {
    protected string $name = "B";
    protected static string $staticName = "B";
    protected static string $nameStatic2 = "B";
}
