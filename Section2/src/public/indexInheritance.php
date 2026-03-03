<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';


echo "<h4>Inheritance</h4>";

use App\Inheritance\Toaster;
use App\Inheritance\ToasterPro2;

// $toaster = new Toaster();
$toaster = new ToasterPro2();
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
// $toaster->toast();
$toaster->toastBagel();

