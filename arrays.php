<?php
echo "<h1>Arrays in PHP</h1>";

$programmingLanguages = ["PHP", "JavaScript", "Python", "Java"];
echo "Programming Languages: " . implode(", ", $programmingLanguages) . "<br>";

echo "First language: " . $programmingLanguages[0] . "<br>";
echo "$programmingLanguages[-1].<br>"; // undefined offset -1, PHP does not support negative indexing like Python

var_dump($programmingLanguages[6]); // undefined offset 6, prints NULL
echo "<br>";
var_dump(isset($programmingLanguages[6])); // false, index 6 is not set
echo "<br>";
var_dump(isset($programmingLanguages[0])); // true, index 0 is set
echo "<br>";

$programmingLanguages[4] = "C++"; // adds a new element at index 4
echo "After adding C++: " . implode(", ", $programmingLanguages) . "<br>";

$programmingLanguages[] = "Ruby"; // adds a new element at the end
echo "After adding Ruby: " . implode(", ", $programmingLanguages) . "<br>";

$programmingLanguages[1] = "TypeScript"; // updates the element at index 1
echo "After updating JavaScript to TypeScript: " . implode(", ", $programmingLanguages) . "<br>";

var_dump($programmingLanguages); // prints the entire array structure
echo "<br>";
echo "<pre>";
print_r($programmingLanguages); // prints the array in a human-readable format
echo "</pre>";
echo count($programmingLanguages) . " programming languages in the array.<br>";

array_push($programmingLanguages, "Go", "Rust"); // adds multiple elements at the end
echo "After adding Go and Rust: " . implode(", ", $programmingLanguages) . "<br>";

$languageVersions = [
    "PHP" => "8.0",
    "JavaScript" => "ES6",
    "Python" => "3.9",
    "Java" => "15"
];
echo "<pre>";
print_r($languageVersions); // prints the associative array
echo "</pre>";
echo "PHP version: " . $languageVersions["PHP"] . "<br>";

$languageVersions["C++"] = "C++20"; // adds a new key-value pair
$languageVersions["JavaScript"] = "ES2020"; // updates the value for the key "JavaScript"
echo "<pre>";
print_r($languageVersions); // prints the associative array
echo "</pre>";

$languageInfo = [
    "PHP" => ["creator" => "Rasmus Lerdorf",
        "first_release" => 1995,
        "extension" => ".php",
        "versions" => ["5.6", "7.4", "8.0"]],
    "JavaScript" => ["creator" => "Brendan Eich",
        "first_release" => 1995,
        "extension" => ".js",
        "versions" => ["ES5", "ES6", "ES2020"]],
    "Python" => ["creator" => "Guido van Rossum",
        "first_release" => 1991,
        "extension" => ".py",
        "versions" => ["2.7", "3.9", "3.10"]],
    "Java" => ["creator" => "James Gosling",
        "first_release" => 1995,
        "extension" => ".java",
        "versions" => ["8", "11", "15"]]
];
echo "<pre>";
print_r($languageInfo); // prints the multidimensional array
echo "</pre>";

echo "Creator of PHP: " . $languageInfo["PHP"]["creator"] . "<br>";
echo "First release of JavaScript: " . $languageInfo["JavaScript"]["first_release"] . "<br>";
echo "Extension for Python files: " . $languageInfo["Python"]["extension"] . "<br>";
echo "Versions of Java: " . implode(", ", $languageInfo["Java"]["versions"]) . "<br>";

$array1 = [0 => "Zero", 1 => "One", "1" => "Two"]; // keys 1 and "1" are treated as the same key, so "Two" overwrites "One"
print_r($array1); // prints the array structure
echo "<br>";

$array2 = [1 => "A", true => "B", 1.5 => "C", "1" => "D"]; // keys 1, true, 1.5, and "1" are all treated as the same key (1), so "D" overwrites all previous values
print_r($array2); // prints the array structure
echo "<br>";

$array3 = [1 => "A", true => "B", 1.5 => "C", "1" => "D", null => "E"]; // keys 1, true, 1.5, and "1" are all treated as the same key (1), so "D" overwrites all previous values
print_r($array3); // prints the array structure
echo "<br>" . $array3[null] . "<br>"; // prints "E" because null key is treated as an empty string key, which is different from the integer key 1

$array4 = ['a', 'b', 50 =>'c', 'd', 'e']; // 'a' gets key 0, 'b' gets key 1, 50 gets key 50, 'd' gets key 51, 'e' gets key 52
print_r($array4); // prints the array structure
echo "<br>";

echo array_pop($array4) . "<br>"; // removes and returns the last element ('e')
print_r($array4); // prints the array structure after popping the last element
echo "<br>";

echo array_shift($array4) . "<br>"; // removes and returns the first element ('a')
print_r($array4); // prints the array structure after shifting the first element
echo "<br>";

$array5 = ['a', 'b', 50 =>'c', 'd', 'e']; // 'a' gets key 0, 'b' gets key 1, 50 gets key 50, 'd' gets key 51, 'e' gets key 52
unset($array5[50]); // removes the element with key 50 ('c')
print_r($array5); // prints the array structure after unsetting the element with key 50
echo "<br>";

$array6 = [1,2,3];
unset($array6[0], $array6[1], $array6[2]); // removes all elements from the array
$array6[] = 4; // adds a new element at the end of the array, which will have key 3
print_r($array6); // prints the array structure after unsetting all elements and adding a new element
echo "<br>";

$x = 5;
var_dump((array)$x); // casts the integer 5 to an array, resulting in an array with a single element (0 => 5)
echo "<br>";

$array7 = ["a" => 1, "b" => null];
var_dump(array_key_exists("b", $array7)); // true, key "b" exists in the array even though its value is null
echo "<br>";
var_dump(isset($array7["b"])); // false, key "b" exists but its value is null, so isset returns false
echo "<br>";