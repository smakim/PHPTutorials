<?php

// declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';


echo "<h1>Magic Methods</h1>";
echo "More documentation at: <a href='https://www.php.net/manual/en/language.oop5.magic.php'>Magic Method Reference</a> <br>";

echo "<h2>__get() and __set()</h2>";
$invoice = new App\MagicMethods\Invoice();
// echo $invoice->amount . '<br />';
echo $invoice->description . '<br />'; // description is not defined, it will call the __get() method

echo $invoice->amount = 15; // it will call the __set() method
echo $invoice->amount . '<br />';

echo "<h2>__isset() and __unset()</h2>";
var_dump(isset($invoice->amount2)); echo '<br />'; // it will call the __isset() method

$invoice->amount2 = 35;
var_dump($invoice); echo '<br />';

unset($invoice->amount2); // it will call the __unset() method
var_dump($invoice); echo '<br />';
echo "__get(), __set(), __isset(), __unset() don't get called on the static properties <br />";
// App\MagicMethods\Invoice::amount3;

echo "<h2>__call() and __callStatic()</h2>";
$invoice->process2("somejunk", "morejunk"); // calling a non defined method, it will call the __call() method

App\MagicMethods\Invoice::processStatic("somejunk", "morejunk"); // calling a non defined static method, it will call the __callStatic() method

$arguments = ['firstjunk', 'somejunk', 'morejunk'];
$invoice->process('deferredClass',$arguments);

echo "<h2>__toString()</h2>";
echo $invoice;
echo var_dump($invoice instanceof \Stringable). '<br />';

echo "<h2>__invoke()</h2>";
echo 'is callable: ' . var_dump(is_callable($invoice)). '<br />';
$invoice();

echo "<h2>__debugInfo()</h2>";
// the following line will call the __debugInfo() method
// if the _debugInfo() method is not defined, it will show the private
// and protected properties of the class as below
/*
object(App\MagicMethods\Invoice)#2 (1) 
{ ["amount":"App\MagicMethods\Invoice":private]=> uninitialized(float)
  ["id":"App\MagicMethods\Invoice":private]=> uninitialized(int)
  ["accountNbr":"App\MagicMethods\Invoice":private]=> uninitialized(string) 
  ["data":protected]=> array(1) { ["amount"]=> int(15) } }
*/
var_dump($invoice); echo '<br />';

echo '--------------- END ---------------<br />';
