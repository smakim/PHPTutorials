<?php

echo "<h1>Switches and Matches in PHP</h1>";

$paymentstatuses = [1, 2, 3, 4, 0];
foreach ($paymentstatuses as $status) {
    switch ($status) {
        case 1:
            echo "Payment status: Pending<br>";
            break; 
        case 2:
        case 3:
            echo "Payment status: Failed<br>";
            break 2; // This will break out of both the switch statement and the foreach loop, so it will stop processing any further payment statuses after encountering a status of 2 or 3.
        case 4:
            echo "Payment status: Refunded<br>";
            break;
        default:
            echo "Payment status: Unknown<br>";
    }
}
echo "<br>";

$paymentstatus = 1;
match ($paymentstatus) {
    1 => print("Payment status: Pending<br>"),
    2, 3 => print("Payment status: Failed<br>"),
    4 => print("Payment status: Refunded<br>"),
    default => print("Payment status: Unknown<br>")
};
echo "<br>";
$result = match ($paymentstatus) {
    1 => "Payment status: Pending<br>",
    2, 3 => "Payment status: Failed<br>",
    4 => "Payment status: Refunded<br>",
    default => "Payment status: Unknown<br>"
};
echo $result;

// The match expression is similar to the switch statement but with some key differences.
// The match expression is an expression that returns a value, while the switch statement
// is a statement that does not return a value. In a match expression, you can use the =
// operator to associate each case with a value, and you can also use the default case to
// handle any unmatched cases. Additionally, the match expression does not require break
// statements to prevent fall-through, as each case is evaluated independently.

// Match expression is more concise and easier to read than a switch statement,
// especially when you need to return a value based on the matched case. It also
// provides better error handling, as it will throw an error if there is no match
// for the given expression, whereas a switch statement will simply execute the default
// case if there is no match. Overall, the match expression is a more modern and powerful
// alternative to the traditional switch statement in PHP.

// Match expression does a strict comparison (===) between the expression and the case values,
// while the switch statement does a loose comparison (==). This means that in a match
// expression, the types of the expression and the case values must match for a successful
// match, whereas in a switch statement, type juggling can occur, which may lead to unexpected
// results. For example, in a switch statement, if you have a case value of 0 and the expression
// is an empty string "", it will be considered a match because both are loosely equal to false.
// However, in a match expression, this would not be considered a match because the types
// do not match (integer vs string).

?>