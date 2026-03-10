<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';


echo "<h1>Traits</h1>";
echo "More documentation at: <a href='https://www.php.net/manual/en/language.oop5.traits.php'>Traits Reference</a> <br>";
echo "Tutorial video: <a href='https://youtu.be/PMruqUC4Qpc?si=qWbsu1CUF4b8QAo_'>https://youtu.be/PMruqUC4Qpc?si=qWbsu1CUF4b8QAo_</a> <br>";

$coffeeMaker = new \App\Traits\CoffeeMaker();
$coffeeMaker->makeCoffee();

$latteMaker = new \App\Traits\LatteMaker();
$latteMaker->makeCoffee();
$latteMaker->makeLatte();

$cappuccinoMaker = new \App\Traits\CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappuccino();
$cappuccinoMaker->makeDoubleCappuccino();
$cappuccinoMaker->makeTripleCappuccino();

$allInOneCoffeeMaker = new \App\Traits\AllInOneCoffeeMaker();
$allInOneCoffeeMaker->makeCoffee();
$allInOneCoffeeMaker->makeLatte();
$allInOneCoffeeMaker->makeCappuccino();

echo "<h2>Static Functions in Traits</h2>";
\App\Traits\LatteMaker::staticFunction();

echo "<h2>Static Properties in Traits</h2>";
echo \App\Traits\LatteMaker::$x . '<br />';