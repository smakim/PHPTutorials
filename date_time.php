<?php

define("DATE_FORMAT", "Y-m-d H:i:s");

echo "<h1>Date and Time in PHP</h1>";

echo "current timestamp: " . time() . "<br>"; // Current Unix timestamp

$currentTime = time();
echo date_default_timezone_get() . "<br>"; // Get the default timezone
date_default_timezone_set("America/New_York"); // Set the default timezone to New York
echo date_default_timezone_get() . "<br>"; // Get the updated default timezone
echo "Current date and time in New York: " . date(DATE_FORMAT, $currentTime) . "<br>"; // Current date and time in a readable format
$days5Later = $currentTime + (5 * 24 * 60 * 60); // Calculate the timestamp for 5 days later
echo "5days later timestamp: " . $days5Later . "<br>"; // Current time plus 5 days in seconds
echo "5days later date and time: " . date(DATE_FORMAT, $days5Later) . "<br>";

date_default_timezone_set("UTC"); // Reset the timezone to UTC
echo "UTC date and time: " . date(DATE_FORMAT, $currentTime) . "<br>"; // Current date and time in UTC

echo "make date and time for specific date: " . date(DATE_FORMAT, mktime(14, 30, 0, 12, 25, 2024)) . "<br>"; // Create a timestamp for December 25, 2024 at 14:30:00
echo "make date and time for specific date using strtotime: " . date(DATE_FORMAT, strtotime("2024-12-25 14:30:00")) . "<br>"; // Create a timestamp using strtotime for the specific date and time
echo "make date and time for specific date using strtotime with relative format: " . date(DATE_FORMAT, strtotime("next Monday")) . "<br>"; // Create a timestamp for the next Monday using relative format with strtotime
echo "make date and time for specific date using strtotime with relative format: " . date(DATE_FORMAT, strtotime("+1 week")) . "<br>"; // Create a timestamp for one week from now using relative format with strtotime
echo "make date and time for specific date using strtotime with relative format: " . date(DATE_FORMAT, strtotime("first day of february")) . "<br>"; // Create a timestamp for the first day of February using relative format with strtotime
echo "make date and time for specific date using strtotime with relative format: " . date(DATE_FORMAT, strtotime("last day of february")) . "<br>"; // Create a timestamp for the last day of February using relative format with strtotime
echo "make date and time for specific date using strtotime with relative format: " . date(DATE_FORMAT, strtotime("last day of february 2024")) . "<br>"; // Create a timestamp for the last day of February 2024 using relative format with strtotime
echo "make date and time for specific date using strtotime with relative format: " . date(DATE_FORMAT, strtotime("tomorrow")) . "<br>"; // Create a timestamp for tomorrow using relative format with strtotime

$date1 = date(DATE_FORMAT, strtotime("tomorrow 5:30:12pm")); // Create a timestamp for tomorrow at 5 PM using relative format with strtotime
echo '<pre>';
print_r(date_parse($date1)); // Parse the date and print the components of the date
echo '</pre>';
