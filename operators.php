<?php

echo "<h1>Operators in PHP</h1>";

// Arithmetic Operators
$a = 10;
$b = 2;
$c = '5';
$d = 0;

var_dump($a + $b, $a - $b, $a * $b, $a / $b, $a % $b, $a ** $b); // Addition, Subtraction, Multiplication, Division, Modulo, Exponentiation
echo "<br>";
echo "+$c: " . +$c . "<br>"; // Unary plus converts the string '5' to the integer 5 before applying the operator
echo "-$c: " . -$c . "<br>"; // Unary minus converts the string '5' to the integer 5 and then negates it to -5
//var_dump($a / $d); // Division by zero results in a critical error and will stop the script execution, so we won't reach this line. To handle division by zero gracefully, we can use the fdiv() function which returns INF (infinity) instead of throwing an error.
echo "<br>";
var_dump(fdiv($a, $d)); // Using fdiv() for division by zero returns INF (infinity) instead of false
echo "<br>";

$e = 10.5;
$f = 3.2;
echo " $e % $f: " . ($e % $f) . "<br>"; // Using the modulus operator with floating-point numbers may yield unexpected results due to precision issues, so it's better to use the fmod() function for floating-point modulus.
echo "$e % $f: " . fmod($e, $f) . "<br>"; // Using fmod() for floating-point modulus
echo "$e ** $f: " . pow($e, $f) . "<br>"; // Using pow() for floating-point exponentiation  

// Assignment Operators
$x = ($y = 10) + 5; // Assignment with addition, $y is assigned 10 and then $x is assigned the result of $y + 5, which is 15
echo "Value of x: $x, Value of y: $y<br>";

$x = 11;
echo "$x += 3: " . ($x += 3) . "<br>"; // $x is now 14
echo "$x -= 2: " . ($x -= 2) . "<br>"; // $x is now 12
echo "$x *= 4: " . ($x *= 4) . "<br>"; // $x is now 48
echo "$x /= 6: " . ($x /= 6) . "<br>"; // $x is now 8
echo "$x %= 3: " . ($x %= 3) . "<br>"; // $x is now 2
echo "$x **= 2: " . ($x **= 2) . "<br>"; // $x is now 4

// String Operators
$str1 = "Hello";
$str2 = "World";
echo "$str1 . $str2: " . ($str1 . $str2) . "<br>"; // Concatenation of two strings results in "HelloWorld"
echo "$str1 .= $str2: " . ($str1 .= $str2) . "<br>"; // Concatenation assignment appends $str2 to $str1, so $str1 becomes "HelloWorld"
echo "$str1: $str1<br>"; // $str1 is now "HelloWorld"

// Comparison Operators
$x = 5;
$y = 3;
$z = "5";
var_dump($x == $y, $x === $y, $x != $y, $x !== $y, $x > $y, $x < $y, $x >= $y, $x <= $y); // Equality, Identity, Inequality, Non-identity, Greater than, Less than, Greater than or equal to, Less than or equal to
echo "<br>";
var_dump($x == $z, $x === $z); // Equality and Identity comparison between integer 5 and string "5"
echo "<br>";

$x = null;
$z = 50;
$y = $x ?? "Default Value"; // Null coalescing operator returns "Default Value" because $x is null
echo "Value of y: $y<br>";
$y = $z ?? "Default Value"; // Null coalescing operator returns 50 because $z is not null
echo "Value of y: $y<br>";

// Error Control Operator
// not recommended to use in production code as it can hide important error messages, but it can be useful for suppressing expected warnings or notices in certain situations.
$result = @file_get_contents("non_existent_file.txt"); // Suppresses the error message
if ($result === false) {
    echo "Failed to read the file.<br>";
} else {
    echo "File contents: $result<br>";
}

// Increment/Decrement Operators
$x = 5;
echo "Post-increment: " . $x++ . "<br>"; // Outputs 5 and then increments $x to 6
echo "Current value of x: $x<br>";
$x = 5;
echo "Pre-increment: " . ++$x . "<br>"; // Increments $x to 6 and then outputs 6
echo "Current value of x: $x<br>";
$x = 5;
echo "Post-decrement: " . $x-- . "<br>"; // Outputs 5 and then decrements $x to 4
echo "Current value of x: $x<br>";
$x = 5;
echo "Pre-decrement: " . --$x . "<br>"; // Decrements $x to 4 and then outputs 4
echo "Current value of x: $x<br>";
$x = 'abc';
echo "Post-increment on string: " . $x++ . "<br>"; // Outputs 'abc' and then increments $x to 'abd'
echo "Current value of x: $x<br>";
$x = 'abc';
echo "Pre-increment on string: " . ++$x . "<br>"; // Increments $x to 'abd' and then outputs 'abd'
echo "Current value of x: $x<br>";

// Logical Operators
$a = true;
$b = false;
var_dump($a && $b, $a || $b, !$a, !$b); // Logical AND, Logical OR, Logical NOT
echo "<br>";
var_dump($a and $b, $a or $b, !$a, !$b); // Logical AND, Logical OR using different syntax
echo "<br>";
var_dump($a xor $b); // Logical XOR returns true if either $a or $b is true, but not both
echo "<br>";
$b = true;
var_dump($a xor $b); // Logical XOR returns false because both $a and $b are true
echo "<br>";

// Bitwise Operators
$x = 6; // In binary: 0110
$y = 3; // In binary: 0011
var_dump($x & $y, $x | $y, $x ^ $y, ~$x, ~$x & $y, $x << 1, $x >> 1); // Bitwise AND, Bitwise OR, Bitwise XOR, Bitwise NOT, Left Shift, Right Shift
echo "<br>";

// Array operators
$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f', 'g', 'h'];
var_dump($x + $y, $x == $y, $x === $y, $x != $y, $x !== $y); // Union of arrays, Equality, Identity, Inequality, Non-identity
echo "<br>";