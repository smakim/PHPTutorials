<?php
declare(strict_types=1); // Enforce strict types for function parameters and return values

echo "<h1>Functions in PHP</h1>";

function foo(): mixed {
    return [1.5]; // This will cause a TypeError due to strict types
}

var_dump(foo()); // This will not be reached due to the TypeError

function sum(int|float $x, int|float $y, int|float ...$numbers): int|float {
    return $x + $y + array_sum($numbers);
}
$a = 6.0;
$b = 4;
$numbers = [50, 120, 25.5, 44.4];
echo "<br> Sum: " . sum($a, $b, ...$numbers) . "<br>";

// named arguments
// function with default parameter values and named arguments
function greet(string $name, string $greeting = "Hello"): string {
    return "$greeting, $name!";
}
echo greet("Alice", "Hi") . "<br>";
echo greet("Bob") . "<br>"; // This will use the default greeting "Hello"
echo greet(greeting: "Welcome", name: "Charlie") . "<br>"; // This uses named arguments to specify the greeting and name in any order

function bar(int $x, int $y): int {
    var_dump($x, $y);
    if ($x % $y === 0) {
        return $x / $y;
    }
    return $x;
}

$array = ['x' => 10, 'y' => 5];
$result = bar(...$array); // This will unpack the array and pass 'x' as $x and 'y' as $y to the function
echo "Result: " . $result . "<br>";

// Anonymous function
echo "<h2>Anonymous Functions</h2>";
$greet = function(string $name): string {
    return "Hello, $name!";
};
echo $greet("Dave") . "<br>";

$x = 1;
$sum = function(int|float ...$numbers) use ($x): int|float {
    $x = 15; // This will not affect the $x outside the function due to variable scoping
    echo "Inside function, x: $x<br>"; // This will print 15
    return array_sum($numbers);
};
echo "Sum: " . $sum(10, 20, 30) . "<br>"; // This will calculate the sum of the numbers
echo "Outside function, x: $x<br>"; // This will print 1, showing that the $x inside the function does not affect the $x outside the function

$sum2 = function(int|float ...$numbers) use (&$x): int|float {
    $x = 15; // This will affect the $x outside the function due to using by reference
    echo "Inside function, x: $x<br>"; // This will print 15
    return array_sum($numbers);
};
echo "Sum: " . $sum2(10, 20, 30) . "<br>"; // This will calculate the sum of the numbers
echo "Outside function, x: $x<br>"; // This will print 15, showing that the $x inside the function has

// Callable functions
echo "<h2>Callable Functions</h2>";
$array = [1, 2, 3, 4, 5];
$array2 = array_map(function(int $n): int {
    return $n * 2;
}, $array); // This will return a new array with each element multiplied by 2
$x = function(int $n): int {
    return $n * 3;
};
$array3 = array_map($x, $array); // This will return a new array with each element multiplied by 3 using the callable function $x

function multiply(int $n): int {
    return $n * 4;
}
$array4 = array_map('multiply', $array); // This will return a new array with each element multiplied by 4 using the callable function 'multiply'
echo '<pre>';
print_r($array);
print_r($array2);
print_r($array3);
echo '</pre>';

function foo2($element): int {
    return $element * 5;
}
$sum2 = function (callable $callback, int|float ...$numbers): int|float {
    return $callback(array_sum($numbers));
};
echo $sum2('foo2', 10, 20, 30) . "<br>"; // This will calculate the sum of the numbers and then pass it to the callable function 'foo2' which multiplies it by 5, resulting in (10 + 20 + 30) * 5 = 300 

echo $sum2(function(int $n): int {
    return $n * 10;
}, 10, 20, 30) . "<br>"; // This will calculate the sum of the numbers and then pass it to the anonymous function which multiplies it by 10, resulting in (10 + 20 + 30) * 10 = 600

// Arrow functions
echo "<h2>Arrow Functions</h2>";
$numbers = [1, 2, 3, 4, 5];
$squared = array_map(fn($n) => $n * $n, $numbers); // This will return a new array with each element squared using an arrow function
echo '<pre>';
print_r($squared);
echo '</pre>';


// function variables
echo "<h2>Function Variables</h2>";
function add(int $a, int $b): int {
    return $a + $b;
}
$operation = 'add';
$result = $operation(5, 10); // This will call the add function using the variable $operation
echo "Result of add: " . $result . "<br>";

$operation2 = 'subtract';
if (is_callable($operation2)) {
    $result = $operation2(10, 5);
    echo "Result of subtract: " . $result . "<br>";
} else {
    echo "Function 'subtract' is not defined.<br>";
}

$result = $operation2(10, 5); // This will cause an error since 'subtract' function is not defined
echo "Result of subtract: " . $result . "<br>";



?>
