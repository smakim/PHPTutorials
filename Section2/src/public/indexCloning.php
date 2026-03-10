<?php

require_once __DIR__ . '/../vendor/autoload.php';

echo "<h1>Object Cloning</h1>";
echo "More documentation at: <a href='https://www.php.net/manual/en/language.oop5.cloning.php'>Cloning Reference</a> <br>";
echo "Tutorial video: <a href='https://youtu.be/vLmIoy6Bnog?si=14crNqY8x7GnFva0'>https://youtu.be/vLmIoy6Bnog?si=14crNqY8x7GnFva0</a> <br>";

$invoice = new App\ObjectCloning\Invoice();

$invoice2 = new $invoice();

var_dump($invoice, $invoice2, App\ObjectCloning\Invoice::create()); echo '<br />';

$invoice3 = $invoice;

var_dump($invoice, $invoice3, $invoice === $invoice3); echo '<br />';

echo "<h2>Object Cloning creates a copy of the object but does not call the constructor.</h2>";
$invoice4 = clone $invoice;

var_dump($invoice, $invoice4, $invoice === $invoice4, $invoice == $invoice4); echo '<br />';

echo "<h2>Object Cloning that calls __clone() magic method</h2>";
$invoice21 = new App\ObjectCloning\Invoice2();
$invoice22 = clone $invoice21;

var_dump($invoice21, $invoice22, $invoice21 === $invoice22, $invoice21 == $invoice22); echo '<br />';
