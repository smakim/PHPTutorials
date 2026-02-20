<?php
echo "<h1>Array Functions in PHP</h1>";
require_once "helper.php";

// array_chunk — Split an array into chunks
// array_chunk(array $array, int $length, bool $preserve_keys = false): array
$numbers = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
prettyPrintArray(array_chunk($numbers, 2)); // Output: [[1, 2], [3, 4], [5]etty(array_chunk($numbers, 2, true)); // Output: [['a' => 1, 'b' => 2], ['c' => 3, 'd' => 4], ['e' => 5]]
prettyPrintArray(array_chunk($numbers, 2, true)); // Output: [['a' => 1, 'b' => 2], ['c' => 3, 'd' => 4], ['e' => 5]]

// array_combine — Creates an array by using one array for keys and another for its values
// array_combine(array $keys, array $values): array
$array1 = ['a', 'b', 'c'];
$array2 = [5, 10, 20];
prettyPrintArray(array_combine($array1, $array2)); // Output: ['a' => 5, 'b' => 10, 'c' => 20]

// array_filter — Filters elements of an array using a callback function
// array_filter(array $array, ?callable $callback = null, int $mode = 0): array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$evenNbrs =array_filter($numbers, function($num) {
    return $num % 2 === 0; // Keep only even numbers
}); // Output: [2, 4, 6, 8, 10]
prettyPrintArray($evenNbrs);
$array = [1, 2, "", 3, 0.0, 4, 5, false, null, '', 0, 9, 0.0];
$filtered = array_filter($array); // Output: [1, 2, 3, 4, 5, 9] filters out false, null, empty string, 0, and 0.0
prettyPrintArray($filtered);
prettyPrintArray(array_values($filtered)); // Output: [1, 2, 3, 4, 5, 9] re-indexes the array

// array_keys — Return all the keys or a subset of the keys of an array
// array_keys(array $array, mixed $search_value = null, bool $strict = false): array
$array = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];
prettyPrintArray(array_keys($array)); // Output: ['a', 'b', 'c', 'd', 'e'] returns all keys
prettyPrintArray(array_keys($array, 10)); // Output: ['b', 'e'] returns keys for value 10
prettyPrintArray(array_keys($array, '10', true)); // Output: [] strict comparison returns empty array since '10' is a string, not an integer

// array_map — Applies the callback to the elements of the given arrays
// array_map(?callable $callback, array $array, array ...$arrays): array
$numbers = [1, 2, 3, 4, 5];
$numbers2 = [10, 20, 30, 40, 50, 60];
$squared = array_map(function($num) {
    return $num * $num; // Square each number
}, $numbers); // Output: [1, 4, 9, 16, 25]
prettyPrintArray($squared);

$sum = array_map(function($num1, $num2) {
    return $num1 + $num2; // Sum corresponding elements
}, $numbers, $numbers2); // Output: [11, 22, 33, 44, 55, 60] sums elements of both arrays, last element will be 60 since $numbers2 has 6 elements and $numbers has 5, so it treats missing value as null (0)
prettyPrintArray($sum);

// array_merge — Merge one or more arrays
// array_merge(array ...$arrays): array
$array1 = ['a' => 1, 'b' => 2];
$array2 = ['b' => 3, 'c' => 4];
$array3 = ['d' => 5, 'e' => 6, 'a' => 7];
$merged = array_merge($array1, $array2, $array3); // Output: ['a' => 7, 'b' => 3, 'c' => 4, 'd' => 5, 'e' => 6] values from later arrays overwrite those from earlier arrays for duplicate keys
prettyPrintArray($merged);

// array_reduce — Iteratively reduce the array to a single value using a callback function
// array_reduce(array $array, callable $callback, mixed $initial = null): mixed
$invoiceItems = [
    ['name' => 'Item 1', 'price' => 10, 'quantity' => 2],
    ['name' => 'Item 2', 'price' => 20, 'quantity' => 1],
    ['name' => 'Item 3', 'price' => 30, 'quantity' => 3],
];
$total = array_reduce($invoiceItems, function($carry, $item) {
    return $carry + ($item['price'] * $item['quantity']); // Calculate total price for each item and add to carry
}, 0); // Output: 130 calculates total cost of all items
echo "Total Invoice Amount: $" . $total. "<br>";

// array_search — Searches the array for a given value and returns the first corresponding key if successful
// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false
$array = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];
$key = array_search(10, $array); // Output: 'b' returns the first key for value 10
echo "First key for value 10: " . $key . "<br>";
$keyStrict = array_search('10', $array, true); // Output: false strict comparison returns false since '10' is a string, not an integer
echo "Strict search for '10': " . var_export($keyStrict, true) . "<br>";

//in_array — Checks if a value exists in an array
// in_array(mixed $needle, array $haystack, bool $strict = false): bool
$array = [1, 2, 3, 4, 5];
$exists = in_array(3, $array); // Output: true checks if 3 exists in the array
echo "Does 3 exist in the array? " . ($exists ? 'Yes' : 'No') . "<br>";
$existsStrict = in_array('3', $array, true); // Output: false strict comparison returns false since '3' is a string
echo "Does '3' exist in the array (strict)? " . ($existsStrict ? 'Yes' : 'No') . "<br>";

// array_diff — Computes the difference of arrays
// array_diff(array $array1, array ...$arrays): array
$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$array2 = [4, 5, 6];
$array3 = [9, 10, 11];
$difference = array_diff($array1, $array2, $array3); // Output: [1, 2, 3, 7, 8] returns values from $array1 that are not present in $array2 and $array3
prettyPrintArray($difference);

// array_diff_assoc — Computes the difference of arrays with additional index check
// array_diff_assoc(array $array1, array ...$arrays): array
$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 20];
$array2 = ['a' => 1, 'b' => 20, 'c' => 3, 'e' => 5, 'f' => 4];
$differenceAssoc = array_diff_assoc($array1, $array2); // Output: ['b' => 2, 'd' => 4, 'e' => 20] returns key-value pairs from $array1 that are not present in $array2, checks both key and value
prettyPrintArray($differenceAssoc);

// array_diff_key — Computes the difference of arrays using keys for comparison
// array_diff_key(array $array1, array ...$arrays): array
$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = ['b' => 20, 'c' => 30, 'f' => 40];
$differenceKey = array_diff_key($array1, $array2); // Output: ['a' => 1, 'd' => 4, 'e' => 5] returns key-value pairs from $array1 where the key is not present in $array2, checks only keys
prettyPrintArray($differenceKey);

// asort — Sort an array and maintain index association
// asort(array &$array, int $flags = SORT_REGULAR): bool
// ksort — Sort an array by key and maintain index association
// ksort(array &$array, int $flags = SORT_REGULAR): bool
$array = ['a' => 3, 'b' => 1, 'c' => 2];
asort($array); // Output: ['b' => 1, 'c' => 2, 'a' => 3] sorts the array by values while maintaining key association
prettyPrintArray($array);

ksort($array); // Output: ['a' => 3, 'b' => 1, 'c' => 2] sorts the array by keys while maintaining key association
prettyPrintArray($array);

// list - Assign variables as if they were an array
// list(mixed &$var1, mixed &$var2, mixed &...$vars): void
$array = ['John', 'Doe', 30];
list($firstName, $lastName, $age) = $array; // Output: $firstName = 'John', $lastName = 'Doe', $age = 30 assigns values from the array to individual variables
echo "First Name: $firstName, Last Name: $lastName, Age: $age <br>";
