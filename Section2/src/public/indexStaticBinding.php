<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';


echo "<h1>Late Static Binding</h1>";
echo "More documentation at: <a href='https://www.php.net/manual/en/language.oop5.late-static-bindings.php'>Late Static Binding Reference</a> <br>";
echo "Tutorial video: <a href='https://youtu.be/4W5t8g3Rp_0?si=ZxIpXMDFgBJ5bG_t'>https://youtu.be/4W5t8g3Rp_0?si=ZxIpXMDFgBJ5bG_t</a> <br>";

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


