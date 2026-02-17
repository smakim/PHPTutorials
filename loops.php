<?php

echo "<h1>Loops in PHP</h1>";

// foreach loop only works on arrays and objects, it iterates over each element in the array or each property in the object. It is a convenient way to loop through arrays without needing to manage the loop counter or worry about the array length. The syntax is: foreach ($array as $value) { // code to execute } or foreach ($array as $key => $value) { // code to execute } where $key is the index or key of the current element and $value is the value of the current element.
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}
foreach ($fruits as $index => $fruit) {
    echo "Index: $index, Fruit: $fruit<br>";
}

// foreach look get elements by reference, it allows you to modify the original array elements directly within the loop. When you use foreach with reference, you need to use the & symbol before the loop variable. The syntax is: foreach ($array as &$value) { // code to execute } or foreach ($array as $key => &$value) { // code to execute } where $value is a reference to the current element in the array. This means that any changes made to $value will affect the original array element.
$numbers = [1, 2, 3];
foreach ($numbers as &$number) {
    $number *= 2; // This will modify the original array elements
}
print_r($numbers); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 )
echo "<br>";
$numbers = [1, 2, 3];
foreach ($numbers as $number) { // This will not modify the original array elements because $number is not a reference
    $number *= 2;
}
print_r($numbers); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 )

$user = [
    "name" => "John",
    "age" => 30,
    "city" => "New York",
    "skills" => ["PHP", "JavaScript", "HTML"]
];

foreach ($user as $key => $value) {
        echo "$key: $value<br>"; // This will not work as expected for the "skills" key because $value is an array
}
echo "<br>Using is_array to check if the value is an array:<br>";
foreach ($user as $key => $value) {
    if (is_array($value)) {
        echo "$key: " . implode(", ", $value) . "<br>";
    } else {
        echo "$key: $value<br>";
    }
}

?>