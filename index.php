<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>
    <?php echo "Hello World!"; ?>
    <?= "<br>2nd heading" ?>
</h1>
<p>This is a paragraph.</p>

<?php
    $x = 10;
    $y = 20;

    echo "<p>X is $x and Y is $y</p>";

    //constants
    define("GREETING", "Welcome to PHP!");
    echo GREETING;

    echo "\n is constant defined? " . defined("GREETING");
    
    const PI = 3.14;
    echo "<br>Value of PI: " . PI;

    echo "<br>PHP Version: " . PHP_VERSION;
    echo "<br> __FILE__: " . __FILE__;
    echo "<br> __LINE__: " . __LINE__;

    // variable variables
    $varName = "dynamicVar";
    $$varName = "This is a variable variable.";
    echo "<br>Value of dynamicVar: " . $dynamicVar;
    
    # Scalar Variables
    $completed = true;
    $score = 85.5;
    $items = 50;
    $greeting = "Hello, World!";

    echo "<p>Variables</p>$completed, $score, $items, $greeting <br>";
    echo "Type of completed: " . gettype($completed) . "<br>";
    var_dump($completed, $score, $items, $greeting);

    # Compund Variables
    $fruits = ["Apple", "Banana", "Cherry"];
    $person = ["name" => "John", "age" => 30, "city" => "New York"];
    $mixedArray = [42, "Hello", 3.14, true];

    echo "fruits: " . $fruits . "<br>";
    var_dump($fruits);
    echo "person: " . $person . "<br>";
    var_dump($person);
    echo "mixedArray: " . $mixedArray . "<br>";
    var_dump($mixedArray);
    echo "<br>Using print_r for mixedArray: <br>";
    print_r($mixedArray);

    echo "<br>";

    $x = (int)'123';
    echo "Value of x: " . $x . "<br>";
    var_dump($x);



    ?>

</body>
</html>