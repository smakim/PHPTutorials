<?php
    echo "<h1>NULLs in PHP</h1>";

    // null constant
    $x = null;
    echo "Value of x: " . $x . "<br>"; // prints nothing
    var_dump($x); // null
    var_dump(is_null($x)); // true

    echo "<br>";
    var_dump($x === null); // true

    var_dump($y); // undefined variable, results in Notice and null

    $z = "Hello";
    var_dump($z); // string(5) "Hello"
    unset($z); // unsets the variable, making it null
    var_dump($z); // undefined variable, results in Notice and null 
    echo "<br>";

    var_dump((int)null); // casts null to integer, results in 0
    echo "<br>";
    var_dump((float)null); // casts null to float, results in 0.0
    echo "<br>";
    var_dump((string)null); // casts null to string, results in empty string ""
    echo "<br>";
    var_dump((bool)null); // casts null to boolean, results in false
    echo "<br>";
    var_dump((array)null); // casts null to array, results in empty array []
    echo "<br>";

  
?>
