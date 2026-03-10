<?php

// declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';


echo "<h1>Interfaces</h1>";
echo "More documentation at: <a href='https://www.php.net/manual/en/language.oop5.interfaces.php'>Interfaces Reference</a> <br>";
echo "Tutorial video: <a href='https://youtu.be/-AJic0FjuAA?si=9fYCR7ZjDOShFDw3'>https://youtu.be/-AJic0FjuAA?si=9fYCR7ZjDOShFDw3</a> <br>";

$collectionAgency = new \App\Interfaces\CollectionAgency();
echo $collectionAgency->collect(100) . '<br />';

echo '<h5>collect debt using service class</h5>';
$service = new \App\Interfaces\DebtCollectionService();
$service->collectDebt(new \App\Interfaces\RockyCollector());

$service->collectDebt(new \App\Interfaces\CollectionAgency());

