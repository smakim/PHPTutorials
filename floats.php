<?php
    echo "<h1>Floats in PHP</h1>";
  
    $x = 13.5e3;
    echo "Value of x: " . $x . "<br>";

    $y = 13.5e-3;
    echo "Value of y: " . $y . "<br>";

    $z = 13_500e-3;

    var_dump($x, $y, $z);
    echo "<br>";

    echo "PHP_FLOAT_MAX: " . PHP_FLOAT_MAX . "<br>";
    echo "PHP_FLOAT_MIN: " . PHP_FLOAT_MIN . "<br>";
    echo "PHP_FLOAT_DIG: " . PHP_FLOAT_DIG . "<br>";

    $a = floor((0.1 + 0.7) * 10);
    echo "Value of a: " . $a . "<br>"; // prints 7 due to floating-point precision issues

    $b = ceil((0.1 + 0.2) * 10);
    echo "Value of b: " . $b . "<br>"; // prints 4 due to floating-point precision issues

    $c = 0.23;
    $d = 1 - 0.77;
    var_dump($c, $d); // shows that c and d are not exactly equal due to floating-point precision issues
    if ($c == $d) {
        echo "c and d are equal<br>";
    } else {
        echo "c and d are not equal<br>";
    }
    if (abs($c - $d) < 0.00001) {
        echo "c and d are approximately equal<br>";
    } else {
        echo "c and d are not approximately equal<br>";
    }

    echo NAN . "<br>"; // Not a Number
    echo INF . "<br>"; // Infinity
    echo -INF . "<br>"; // Negative Infinity
    echo log(-1) . "<br>"; // results in NAN
    echo PHP_FLOAT_MAX * 2 . "<br>"; // results in INF

    $e = log(-1);
    if (is_nan($e)) {
        echo "e is Not a Number (NAN)<br>";
    }

    $f = PHP_FLOAT_MAX * 2;
    if (is_infinite($f)) {
        echo "f is Infinite (INF)<br>";
    }
    


?>
