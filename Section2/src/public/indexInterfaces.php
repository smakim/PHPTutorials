<?php

// declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';


echo "<h4>Interfaces</h4>";

$collectionAgency = new \App\Interfaces\CollectionAgency();
echo $collectionAgency->collect(100) . '<br />';

echo '<h5>collect debt using service class</h5>';
$service = new \App\Interfaces\DebtCollectionService();
$service->collectDebt(new \App\Interfaces\RockyCollector());

$service->collectDebt(new \App\Interfaces\CollectionAgency());

