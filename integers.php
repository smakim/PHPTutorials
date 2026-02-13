<?php
    echo "<h1>Integers in PHP</h1>";

    echo "max integer: " . PHP_INT_MAX . "<br>";
    echo "min integer: " . PHP_INT_MIN . "<br>";
    echo "integer size: " . PHP_INT_SIZE . " bytes<br>";

    $x = 10;
    echo "Value of x: " . $x . "<br>";

    $y = 0x1A; // hexadecimal
    echo "Value of y (hexadecimal 0x1A): " . $y . "<br>";

    $z = 012; // octal
    echo "Value of z (octal 012): " . $z . "<br>";

    $a = 1e3; // scientific notation
    echo "Value of a (scientific notation 1e3): " . $a . "<br>";

    $b = 0b1010; // binary
    echo "Value of b (binary 0b1010): " . $b . "<br>";

    $c = -5; // negative integer
    var_dump(is_int($c)); // true

    $d = null;
    var_dump(is_int($d)); // false

    $e = 232_123_12;
    var_dump($e); // integer




?>
