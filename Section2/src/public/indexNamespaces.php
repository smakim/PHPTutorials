<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

echo "<h1>Namespaces</h1>";
echo "More documentation at: <a href='https://www.php.net/manual/en/language.namespaces.php'>Namespaces Reference</a> <br>";
echo "Tutorial video: <a href='https://youtu.be/Jni9c0-NjrY?si=Dx35bhW_SizumE9M'>https://youtu.be/Jni9c0-NjrY?si=Dx35bhW_SizumE9M</a> <br>";

use App\Enums\Status;
use App\namespace1\ExampleNamespace;

var_dump(new ExampleNamespace());

$id = new \Ramsey\Uuid\UuidFactory();
echo $id->uuid4();

use namespace1\ExampleNamespace2;

require_once '../app/namespace1/namespace.php';
var_dump(new ExampleNamespace2());

use App\PaymentGateway\Paddle\Transaction;

echo "<h4>Const class properties</h4>";
echo Transaction::STATUS_PAID . '<br>';
$transaction = new Transaction();
echo $transaction::STATUS_DECLINED . '<br>';
$transaction->setStatus(Transaction::STATUS_DECLINED);
var_dump($transaction);
// $transaction->setStatus('somejunk'); //this will throw exception and stop the script

// Encapulation so private properties can't be modified outside of the class
// Class constant properties refactored as enums
use App\PaymentGateway\Paddle\Transaction2;

echo "<h4>Encapsulation and const class properties refactored</h4>";
$transaction2 = new Transaction2();
$transaction2->setStatus(Status::PAID);
var_dump($transaction2);

// Static class properties
use App\PaymentGateway\Paddle\Transaction3;

echo "<h4>Static class properties</h4>";
$transaction3 = new Transaction3(25, 'Transaction 3');
var_dump($transaction3);
// var_dump($transaction3::$count); // Can't access private property
var_dump(Transaction3::getCount());
var_dump($transaction3::$count2);


// Reflection apis to get access to private properties
use App\PaymentGateway\Paddle\Transaction4;

echo "<h4>Reflection APIs</h4>";
$transaction4 = new Transaction4(25);
// $transaction4->amount = 55; // this will throw fatal error, can't access private property
$reflectionProperty = new ReflectionProperty(Transaction4::class, 'amount');
$reflectionProperty->setAccessible(true); //make it public
$reflectionProperty->setValue($transaction4, 55); // this will change the value to 55
$transaction4->process();
$transaction4->copyFrom(new Transaction4((120)));


/*
phpinfo();

echo "<pre>";
print_r($_SERVER);
echo "</pre>";
*/
