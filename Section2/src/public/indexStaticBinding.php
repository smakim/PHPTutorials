<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';


echo "<h4>Static Binding</h4>";

$classA = new App\StaticBinding\ClassA();
$classB = new App\StaticBinding\ClassB();
echo $classA->getName() . '<br />'; // it will pring "A"
echo $classB->getName() . '<br />'; // it will pring "B"

echo App\StaticBinding\ClassA::getNameStatic() . '<br />'; // it will pring "A"
echo App\StaticBinding\ClassB::getNameStatic() . '<br />'; // it will pring "A"
// Above is due to the static binding due to using the self keyword

echo App\StaticBinding\ClassA::getNameStatic2() . '<br />'; // it will pring "A"
echo App\StaticBinding\ClassB::getNameStatic2() . '<br />'; // it will pring "B"
// Above is due to the static binding due to using the static keyword

var_dump(App\StaticBinding\ClassA::make());
var_dump(App\StaticBinding\ClassB::make());
// both above will print the same class A object
echo '<br />';

var_dump(App\StaticBinding\ClassA::make2());
var_dump(App\StaticBinding\ClassB::make2());
// Using static keyword, the 2nd statement will print Class B object
echo '<br />';


