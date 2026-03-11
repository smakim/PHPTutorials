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


echo "<h2>Global exception handler</h2>";

echo "<h3>Important to use Throable as the type hint to be able to catch all exceptions and errors.</h3>";
set_exception_handler(function (\Throwable $e) { // \Throwable is the parent class of all exceptions and errors
    echo 'Exception handler called' . '<br />';
    echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . '<br />';
});

echo array_rand([], 10);
