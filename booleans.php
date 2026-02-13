<?php
    echo "<h1>Booleans in PHP</h1>";
    /*Booleans represent two possible states: true or false. They are often used in conditional statements and logical operations. In PHP, the following values are considered false:
- The boolean false itself
- The integer 0 (zero)
- The float 0.0 (zero)
- The empty string "" and the string "0"
- An empty array []
- The special type NULL (including unset variables)*/   

    $isTrue = true;
    $isFalse = false;

    echo "Value of isTrue: " . $isTrue . "<br>";
    echo "Value of isFalse: " . $isFalse . "<br>";

    // Using booleans in conditional statements
    if ($isTrue) {
        echo "This is true!<br>";
    } else {
        echo "This is false!<br>";
    }

    // Logical operations
    $a = true;
    $b = false;

    echo "a AND b: " . ($a && $b) . "<br>"; // false
    echo "a OR b: " . ($a || $b) . "<br>";  // true
    echo "NOT a: " . (!$a) . "<br>";        // false
    echo "NOT b: " . (!$b) . "<br>";        // true

    // Integers 0 and -0 are considered false, while all other integers are true
    // Floats 0.0 and -0.0 are considered false, while all other floats are true
    // Empty strings "" and "0" are considered false, while all other strings are true
    // Empty arrays [] are considered false, while all other arrays are true
    // NULL is considered false, while all other values are true
    echo "<br>";
    $isCompleted = false;
    if ($isCompleted) {
        echo "Task is completed!<br>";
    } else {
        echo "Task is not completed!<br>";
    }

    var_dump(is_bool($isCompleted)); // true
?>
