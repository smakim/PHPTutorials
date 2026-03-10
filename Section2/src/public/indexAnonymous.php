<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Anonymous\MyClass;
use App\Anonymous\MyInterface;
use App\Anonymous\MyTrait;
use App\Anonymous\ClassA;

echo "<h1>Anonymous Classes & Functions</h1>";
echo "More documentation at: <a href='https://www.php.net/manual/en/language.oop5.anonymous.php'>Anonymous Classes Reference</a> <br>";
echo "Tutorial video: <a href='https://youtu.be/zQ4Znj3RT3E?si=RH7uy9scQ5aX29RY'>https://youtu.be/zQ4Znj3RT3E?si=RH7uy9scQ5aX29RY</a> <br>";

// Anonymous Classes can extend other classes, implement interfaces and use traits
echo "<h2>Anonymous Class</h2>";
echo "<h3>Anonymous Classes can extend other classes, implement interfaces and use traits</h3> <br />";
$obj = new class(1, 2, 3) extends MyClass implements MyInterface {
    use MyTrait;
    public function __construct(public int $a, public int $b, public int $c)
    {
        echo 'Anonymous Class Constructor called <br />';
    }
    public function myMethodInterface()
    {
        echo 'myMethodInterface defined in the anonymous class called<br />';
    }
};
echo var_dump($obj) . '<br />';
echo 'anonymous class: ' . var_dump(get_class($obj)) . '<br />';
$obj->myMethodClass(); // will print "myMethodClass() called"
$obj->myMethodTrait(); // will print "myMethodTrait() called"
$obj->myMethodInterface(); // will print "myMethodInterface defined in the anonymous class called"

// Anonymous Class can be passed as an argument to a function that expects an interface using typehint
function myFunction(MyInterface $obj)
{
    echo var_dump($obj) . '<br />'; // will print the anonymous class
}
myFunction($obj); // passing the anonymous class as an argument

$obj2 = new ClassA(1, 2);
echo var_dump($obj2->methodB()) . '<br />';

$obj3 = new ClassA(3, 4);
echo var_dump($obj3->methodC()) . '<br />';


echo "<h2>Anonymous Functions</h2>";
$anonymousFunction = function () {
    echo 'Anonymous Function called <br />';
};
$anonymousFunction();

echo "<h2>Anonymous Class with Anonymous Function</h2>";
$anonymousClass = new class {
    public function __construct()
    {
        $anonymousFunction = function () {
            echo 'Anonymous Function within anonymous class called <br />';
        };
        $anonymousFunction();
    }
};
echo var_dump($anonymousClass) . '<br />';
