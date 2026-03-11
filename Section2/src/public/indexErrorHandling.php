<?php

declare(strict_types=1);
use App\ErrorHandling\Customer;
use App\ErrorHandling\Invoice;
use App\ErrorHandling\Invoice2;
use App\Exception\MissingBillingInfoException;

require_once __DIR__ . '/../vendor/autoload.php';

echo "<h1>Error Handling</h1>";
echo "More documentation at: <a href='https://www.php.net/manual/en/language.exceptions.php'>Error Handling Reference</a> <br>";
echo "Errors in PHP7 documentation at: <a href='https://www.php.net/manual/en/language.errors.php7.php'>https://www.php.net/manual/en/language.errors.php7.php</a> <br>";
echo "Tutorial video: <a href='https://youtu.be/XQ5Pd-6Hnjk?si=v_jjep8xlRfxVbty'>https://youtu.be/XQ5Pd-6Hnjk?si=v_jjep8xlRfxVbty</a> <br>";


$customer = new Customer();
$invoice = new Invoice($customer);
try {
    $invoice->process(15);
} catch (\InvalidArgumentException | MissingBillingInfoException $e) { // catch multiple exceptions
    echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . '<br />';
} finally {
    echo 'Finally block executed' . '<br />';
}

echo "<h2>Multiple return statements in a try-catch-finally block</h2>";

function process(int $amount) {
    $invoice2 = new Invoice(new Customer(['foo' => 'bar']));
    
    try {
        $invoice2->process($amount);
        return true;
    } catch (MissingBillingInfoException|\InvalidArgumentException $e) {
        echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . '<br />';
        return false;
    } finally {
        echo 'Process() Finally block executed' . '<br />';
        return -1;
    }
}

function process2(int $amount) {
    $invoice2 = new Invoice(new Customer(['foo' => 'bar']));
    
    try {
        $invoice2->process($amount);
        return true;
    } catch (MissingBillingInfoException|\InvalidArgumentException $e) {
        echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . '<br />';
        return false;
    } finally {
        echo 'Process2() Finally block executed' . '<br />';
    }
}

echo "<h4> If there is a return statement is in finally block, it will always return the value from the finally block.";
echo " Regardless of the return values from the try and catch blocks.</h4>";
var_dump(process(15)); echo '<br />';
var_dump(process(-15)); echo '<br />';

echo "<h4> If there is no return statement is in finally block, it will return the value from the catch block if exception is thrown.</h4>";
var_dump(process2(15)); echo '<br />';
var_dump(process2(-15)); echo '<br />';

echo "<h2>Custom exceptions using static methods</h2>";
$invoice3 = new Invoice2(new Customer([]));
$invoice3->process(15);

echo "<h2>Global exception handler</h2>";

echo "<h3>Important to use Throable as the type hint to be able to catch all exceptions ane errors.</h3>";
set_exception_handler(function (\Throwable $e) { // \Throwable is the parent class of all exceptions and errors
    echo 'Exception handler called' . '<br />';
    echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . '<br />';
});

echo array_rand([], 10);
